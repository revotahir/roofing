<?php
defined('BASEPATH') or exit('No direct script access allowed');

class client extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->helper('file');
		$this->load->model('Generic_model', 'generic');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function clientDashboard()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['jobList'] = $this->generic->GetJobList(array('j.clientID' => $this->session->userdata['loginData']['userID']));
			$this->load->view('client/clientDash', $this->data);
		} else {
			redirect(base_url());
		}
	}

	public function clientJobView()
	{
		if ($this->session->userdata('loginData')) {
			//get general job detail
			$this->data['jobDetail'] = $this->generic->GetJobList(array('j.jobID' => $this->uri->segment(2)));
			//get job status
			$this->data['jobStatus'] = $this->generic->GetData('jobstatus', array('jobID' => $this->uri->segment(2)));
			//step status
			$StepCount = '#step-1';
			//get financiung details if any
			if ($this->data['jobStatus'][0]['financing'] != 0) {
				$this->data['financingDetail'] = $this->generic->GetData('jobfinancing', array('jobID' => $this->uri->segment(2)));
				$StepCount = '#step-2';
			}
			//get material data
			if ($this->data['jobStatus'][0]['materialDelivery'] == 2) {
				$this->data['DeliveryData'] = $this->generic->GetData('jobmaterialdelivery', array('jobID' => $this->uri->segment(2)));
				$StepCount = '#step-3';
			}
			//get installation data
			if ($this->data['jobStatus'][0]['install'] == 2) {
				$this->data['installation'] = $this->generic->GetData('jobinstallation', array('jobID' => $this->uri->segment(2)));
				$StepCount = '#step-4';
			}
			//get review date and client additional question data
			if ($this->data['jobStatus'][0]['managerReview'] != 0) {
				$this->data['managerReview'] = $this->generic->GetData('jobmanagerreview', array('jobID' => $this->uri->segment(2)));
				//calculate if form to show
				$formDisplay = false;
				if ($this->data['managerReview']) {
					if ($this->data['managerReview'][0]['reviewDate'] == null) {
						$formDisplay = true;
					}
				}
				if (!$this->data['managerReview']) {
					$formDisplay = true;
				}
				$this->data['reviewDateFormDisplay'] = $formDisplay;
				$StepCount = '#step-5';
			}
			// get job feed back data
			if($this->data['jobStatus'][0]['feedback']!=0){
				$this->data['jobFeedback']=$this->generic->GetData('jobfeedback',array('jobID'=>$this->uri->segment(2)));
				$StepCount = '#step-6';
			}
			$this->data['StepCount'] = $StepCount;
			$this->load->view('client/ClientJobView', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function markFinancingUs()
	{
		if ($this->session->userdata('loginData')) {
			$this->generic->InsertData('jobfinancing', array('financeStatus' => 2, 'jobID' => $this->uri->segment(2)));
			$this->generic->Update('jobstatus', array('jobID' => $this->uri->segment(2)), array('financing' => 2, 'materialDelivery' => 1));
			$this->session->set_flashdata('insuranceDataUpdated', 1);
			redirect(base_url('client-view-job/') . $this->uri->segment(2));
		} else {
			redirect(base_url());
		}
	}
	public function markFinancingAlreadyFormData()
	{
		if ($this->session->userdata('loginData')) {
			$data = array(
				'jobID' => $this->uri->segment(2),
				'fullName' => $this->input->post('fullName'),
				'insuranceProvider' => $this->input->post('IncProvider'),
				'policyNumber' => $this->input->post('policyNo'),
				'insProviderContact' => $this->input->post('ProviderContact'),
				'financeStatus' => 1

			);
			$this->generic->InsertData('jobfinancing', $data);
			$this->generic->Update('jobstatus', array('jobID' => $this->uri->segment(2)), array('financing' => 2, 'materialDelivery' => 1));
			$this->session->set_flashdata('insuranceDataUpdated', 1);
			redirect(base_url('client-view-job/') . $this->uri->segment(2));
		} else {
			redirect(base_url());
		}
	}

	public function AdditionalQuestions(){
		if ($this->session->userdata('loginData')) {
			//check if entry available
			$checkEntry=$this->generic->GetData('jobmanagerreview',array('jobID'=>$this->uri->segment(2)));
			if($checkEntry){
				//update entry
				$this->generic->Update('jobmanagerreview',array('jobID'=>$this->uri->segment(2)),array('clioentAditionalQuestion'=>$this->input->post('AdditionalQuestion')) );
			}else{
				//insert new entry
				$this->generic->InsertData('jobmanagerreview',array('clioentAditionalQuestion'=>$this->input->post('AdditionalQuestion'),'jobID'=>$this->uri->segment(2)) );
				
			}
			$this->session->set_flashdata('questionAdded', 1);
			redirect(base_url('client-view-job/') . $this->uri->segment(2));
		}else{
			redirect(base_url());
		}
	}
	public function SubmitFeedbackData(){
		if ($this->session->userdata('loginData')) {
			$this->generic->InsertData('jobfeedback',array('feedBack'=>$this->input->post('feedback'),'jobID'=>$this->uri->segment(2)) );
			$this->generic->Update('jobstatus', array('jobID' => $this->uri->segment(2)), array('feedback' => 2));
			$this->session->set_flashdata('FeedbackSubmitted', 1);
			redirect(base_url('client-view-job/') . $this->uri->segment(2));
		}else{
			redirect(base_url());
		}
	}
}
