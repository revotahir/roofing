<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
	public function index()
	{
		$this->load->view('login');
	}
	public function loginData()
	{
		$email = $this->input->post('emailaddress');
		$pass = $this->input->post('password');
		$user_info = $this->generic->LoginData($email, $pass);
		//inicializing session
		if ($user_info) {
			$this->session->set_userdata('loginData', $user_info[0]);
				//check client or admins
				if($user_info[0]['userType']!=3){
			$this->session->set_flashdata('logedin', 1);
			redirect(base_url('dashboard'));
				}else{
					redirect(base_url('client-dashboard'));
				}
		} else {
			$this->session->set_flashdata('error_msg', 1);
			redirect(base_url());
		}
	}
	public function Dashboard()
	{
		if ($this->session->userdata('loginData')) {
			//manage users
			if ($this->session->userdata['loginData']['userType'] == 1 || $this->session->userdata['loginData']['userType'] == 2) {
				$this->load->view('dashboard');
			}
		} else {
			redirect(base_url());
		}
	}

	//manager module admin side 
	public function addNewManager()
	{
		if ($this->session->userdata('loginData')) {
			$this->load->view('add-new-manager');
		} else {
			redirect(base_url());
		}
	}
	public function addNewManagerData()
	{
		if ($this->session->userdata('loginData')) {
			$name = $this->input->post('mName');
			$email = $this->input->post('mEmail');
			$pass = $this->input->post('pass2');
			$phone = $this->input->post('mPhone');
			$emailcheck = $this->generic->GetData('users', array('userEmail' => $email));
			if ($emailcheck) {
				$this->session->set_flashdata('EmailError', 1);
				redirect(base_url('add-new-manager'));
			} else {
				$data = array(
					'userName' => $name,
					'userEmail' => $email,
					'userPhone' => $phone,
					'userPass' => $pass,
					'userType' => 2,
					'userStatus' => 1,
				);
				$this->generic->InsertData('users', $data);
				$this->session->set_flashdata('managerAdded', 1);
				redirect(base_url('add-new-manager'));
			}
		} else {
			redirect(base_url());
		}
	}
	public function managerList()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['managerList'] = $this->generic->GetData('users', array('userType' => 2));
			$this->load->view('managerList', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function deletManager()
	{
		if ($this->session->userdata('loginData')) {
			//manager jobs tranfer to other manager panding

			$this->generic->Delet('users', array('userID' => $this->uri->segment(2)));
			$this->session->set_flashdata('mangerDeleted', 1);
			redirect(base_url('manager-list'));
		} else {
			redirect(base_url());
		}
	}
	public function editManager()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['managerData'] = $this->generic->GetData('users', array('userID' => $this->uri->segment(2)));
			$this->load->view('edit-manager', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function editManagerData()
	{
		if ($this->session->userdata('loginData')) {
			$name = $this->input->post('mName');
			$email = $this->input->post('mEmail');
			$pass = $this->input->post('pass2');
			$phone = $this->input->post('mPhone');

			$data = array(
				'userName' => $name,
				'userEmail' => $email,
				'userPhone' => $phone,
				'userPass' => $pass,
				'userType' => 2,
				'userStatus' => 1,
			);
			$this->generic->Update('users', array('userID' => $this->uri->segment(2)), $data);
			$this->session->set_flashdata('managerUpdated', 1);
			redirect(base_url('manager-list'));
		} else {
			redirect(base_url());
		}
	}

	//client module admin side 
	public function addNewClient()
	{
		if ($this->session->userdata('loginData')) {
			$this->load->view('add-new-client');
		} else {
			redirect(base_url());
		}
	}
	public function addNewClientData()
	{
		if ($this->session->userdata('loginData')) {
			$name = $this->input->post('mName');
			$email = $this->input->post('mEmail');
			$phone = $this->input->post('mPhone');
			$emailcheck = $this->generic->GetData('users', array('userEmail' => $email));
			if ($emailcheck) {
				$this->session->set_flashdata('EmailError', 1);
				redirect(base_url('add-new-client'));
			} else {
				$data = array(
					'userName' => $name,
					'userEmail' => $email,
					'userPhone' => $phone,
					'userType' => 3,
					'userStatus' => 0,
				);
				$this->generic->InsertData('users', $data);
				//assign auth code for password setup
				//get recently add user 
				$userID = $this->generic->GetMaxID('users', 'userID');
				$userID = $userID[0]['result'];
				//add data in auth table
				$authData = array(
					'userID' => $userID,
					'authCode' => password_hash($userID, PASSWORD_DEFAULT),
				);
				$this->generic->InsertData('clientsauth', $authData);

				//send email

				$this->session->set_flashdata('clientAdded', 1);
				redirect(base_url('add-new-client'));
			}
		} else {
			redirect(base_url());
		}
	}
	public function ClientList()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['clients'] = $this->generic->GetData('users', array('userType' => 3));
			$this->load->view('ClientList', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function dltClient()
	{
		if ($this->session->userdata('loginData')) {
			//Delet Jobs

			$this->generic->Delet('users', array('userID' => $this->uri->segment(2)));
			$this->session->set_flashdata('clientDeleted', 1);
			redirect(base_url('client-list'));
		} else {
			redirect(base_url());
		}
	}
	public function EditClient()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['clientData'] = $this->generic->GetData('users', array('userID' => $this->uri->segment(2)));
			$this->load->view('edit-client', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function EditClientData()
	{
		if ($this->session->userdata('loginData')) {
			$name = $this->input->post('mName');
			$email = $this->input->post('mEmail');

			$data = array(
				'userName' => $name,
				'userEmail' => $email,
				'userPhone' => $phone,
			);
			$this->generic->Update('users', array('userID' => $this->uri->segment(2)), $data);
			$this->session->set_flashdata('clientUpdated', 1);
			redirect(base_url('client-list'));
		} else {
			redirect(base_url());
		}
	}


	////client auth and passsetup
	public function newClientPassSetup()
	{
		$authCode = $_GET['user'];
		//check auth code existence
		$authCHeck = $this->generic->GetData('clientsauth', array('authCode' => $authCode));
		if ($authCHeck) {
			if ($authCHeck[0]['authStatus'] == 0) {
				$this->data['userDetail'] = $this->generic->GetData('users', array('userID' => $authCHeck[0]['userID']));
				$this->load->view('setNewPassword', $this->data);
			} else {
				$this->session->set_flashdata('AuthcodeExpired', 1);
				redirect(base_url());
			}
		} else {
			redirect(base_url('invalid-url'));
		}
	}

	public function newClientPassSetupData()
	{
		$pass = $this->input->post('password');
		$this->generic->Update('users', array('userID' => $this->uri->segment(2)), array('userStatus' => 1, 'userPass' => $pass,));
		$this->generic->Update('clientsauth', array('userID' => $this->uri->segment(2)), array('authStatus' => 1));
		redirect(base_url());
	}


	//manage jobs module 
	public function addNewJob()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['clients'] = $this->generic->GetData('users', array('userType' => 3, 'userStatus' => 1));
			$this->data['managers'] = $this->generic->GetData('users', array('userType' => 2, 'userStatus' => 1));
			//load view
			$this->load->view('jobs/addNewJob', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function addNewJobData()
	{
		if ($this->session->userdata('loginData')) {
			$data = array(
				'mangerID' => $this->input->post('manager'),
				'clientID' => $this->input->post('client'),
				'location' => $this->input->post('loc'),
				'firstInterectionDate' => $this->input->post('interactionDate'),
				'workScope' => $this->input->post('workScope'),
				'addInformation' => $this->input->post('addInfo'),
			);
			$this->generic->InsertData('jobs', $data);
			//get max job id
			$maxJobId = $this->generic->GetMaxID('jobs', 'jobID');

			//add data in job status 
			$jobStatusData = array(
				'jobID' => $maxJobId[0]['result'],
			);
			$this->generic->InsertData('jobstatus', $jobStatusData);
			$this->session->set_flashdata('newJobAdded', 1);
			redirect(base_url('add-new-job'));
		} else {
			redirect(base_url());
		}
	}

	public function jobList()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['jobList'] = $this->generic->GetJobList();
			$this->load->view('jobs/jobList', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function jobEditView()
	{
		if ($this->session->userdata('loginData')) {
			$this->data['clients'] = $this->generic->GetData('users', array('userType' => 3, 'userStatus' => 1));
			$this->data['managers'] = $this->generic->GetData('users', array('userType' => 2, 'userStatus' => 1));
			$this->data['job'] = $this->generic->GetData('jobs',array('jobID'=>$this->uri->segment(2)));
			$this->load->view('jobs/editJob', $this->data);
		} else {
			redirect(base_url());
		}
	}
	public function jobEditData(){
		if ($this->session->userdata('loginData')) {
			$data = array(
				'mangerID' => $this->input->post('manager'),
				'clientID' => $this->input->post('client'),
				'location' => $this->input->post('loc'),
				'firstInterectionDate' => $this->input->post('interactionDate'),
				'workScope' => $this->input->post('workScope'),
				'addInformation' => $this->input->post('addInfo'),
			);
			$this->generic->Update('jobs',array('jobID' => $this->uri->segment(2)), $data);
			$this->session->set_flashdata('jobUpdated', 1);
			redirect(base_url('job-list'));
		}else{
			redirect(base_url());
		}
	}

	public function DeletJob(){
		if ($this->session->userdata('loginData')) {
			$this->generic->Delet('jobs',array('jobID'=>$this->uri->segment(2)));
			$this->generic->Delet('jobstatus',array('jobID'=>$this->uri->segment(2)));
			$this->generic->Delet('jobmaterialdelivery',array('jobID'=>$this->uri->segment(2)));
			$this->generic->Delet('jobmanagerreview',array('jobID'=>$this->uri->segment(2)));
			$this->generic->Delet('jobinstallation',array('jobID'=>$this->uri->segment(2)));
			$this->generic->Delet('jobfinancing',array('jobID'=>$this->uri->segment(2)));
			$this->generic->Delet('jobfeedback',array('jobID'=>$this->uri->segment(2)));
			$this->session->set_flashdata('jobDeleted', 1);
			redirect(base_url('job-list'));
		}else{
			redirect(base_url());
		}
	}
	public function adminJobView(){
		if ($this->session->userdata('loginData')) {
			$this->data['jobDetail']=$this->generic->GetJobList(array('j.jobID'=>$this->uri->segment(2)));
			$this->data['jobStatus']=$this->generic->GetData('jobstatus',array('jobID'=>$this->uri->segment(2)));
			//get financiung details if any
			if($this->data['jobStatus'][0]['financing']!=0){
				$this->data['financingDetail']=$this->generic->GetData('jobfinancing',array('jobID'=>$this->uri->segment(2)));
			}
			//get material data
			if($this->data['jobStatus'][0]['materialDelivery']==2){
				$this->data['DeliveryData']=$this->generic->GetData('jobmaterialdelivery',array('jobID'=>$this->uri->segment(2)));
			}
			//get installation data
			if($this->data['jobStatus'][0]['install']==2){
				$this->data['installation']=$this->generic->GetData('jobinstallation',array('jobID'=>$this->uri->segment(2)));
			}
			//get review date and client additional question data
			if($this->data['jobStatus'][0]['managerReview']!=0){
				$this->data['managerReview']=$this->generic->GetData('jobmanagerreview',array('jobID'=>$this->uri->segment(2)));
				//calculate if form to show
				$formDisplay=false;
				if($this->data['managerReview']){
					if($this->data['managerReview'][0]['reviewDate']==null){
						$formDisplay=true;
					}
				}
				if(!$this->data['managerReview']){
					$formDisplay=true;
				}
				$this->data['reviewDateFormDisplay']=$formDisplay;
			}
			// get job feed back data
			if($this->data['jobStatus'][0]['feedback']!=0){
				$this->data['jobFeedback']=$this->generic->GetData('jobfeedback',array('jobID'=>$this->uri->segment(2)));
			}
			$this->load->view('jobs/adminJobView',$this->data);
		}else{
			redirect(base_url());
		}
	}
	public function signOnComplete(){
		if ($this->session->userdata('loginData')) {
			$this->generic->Update('jobstatus',array('jobID' => $this->uri->segment(2)),array('initialVisit'=>2,'initialVisitDate'=>date('Y-m-d'),'financing'=>1));
			$this->session->set_flashdata('signoncomplete', 1);
			redirect(base_url('admin-view-job/').$this->uri->segment(2));
		}else{
			redirect(base_url());
		}
	}
	public function materialDeliveryData(){
		if ($this->session->userdata('loginData')) {
			$data=array(
				'jobID'=>$this->uri->segment(2),
				'jobScheduled'=>$this->input->post('jobScheduledDate'),
				'materialDeliveryETA'=>$this->input->post('materialDelivery'),
			);
			$this->generic->InsertData('jobmaterialdelivery',$data);
			//initial repain and install step
			$this->generic->Update('jobstatus',array('jobID'=>$this->uri->segment(2)),array('install'=>1,'materialDelivery'=>2));
			$this->session->set_flashdata('MaterialDeliverySet', 1);
			redirect(base_url('admin-view-job/').$this->uri->segment(2));
		}else{
			redirect(base_url());
		}
	}
	public function installationImgUpload(){
		if ($this->session->userdata('loginData')) {
			// Load necessary libraries
			$this->load->library('upload');
			$this->load->helper('file');
		
			// Configuration for file upload
			$config['upload_path'] = './assets/uploads/'; // Set your upload path
			$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
			$config['max_size'] = 25048; // 2MB max size
		
			// Initialize the upload library with the config
			$this->upload->initialize($config);
		
			// Array to store file names
			$fileNames = array_fill(0, 10, null); // Initialize with null values
		
			// Loop through each file and upload
			foreach ($_FILES['imgs']['name'] as $key => $name) {
				if ($_FILES['imgs']['error'][$key] == 0) {
					$_FILES['file']['name'] = $_FILES['imgs']['name'][$key];
					$_FILES['file']['type'] = $_FILES['imgs']['type'][$key];
					$_FILES['file']['tmp_name'] = $_FILES['imgs']['tmp_name'][$key];
					$_FILES['file']['error'] = $_FILES['imgs']['error'][$key];
					$_FILES['file']['size'] = $_FILES['imgs']['size'][$key];
		
						// Generate a new file name
						$originalFileName = $_FILES['file']['name'];
						$newFileName = 'installation_' . time().'_'.$_FILES['file']['name'];
						$_FILES['file']['name'] = $newFileName;

					if ($this->upload->do_upload('file')) {
						$fileData = $this->upload->data();
						$fileNames[$key] = $fileData['file_name']; // Store the file name
					} else {
						// Handle upload error
						$error = $this->upload->display_errors();
						// You can log the error or show it to the user
						die($error);
					}
				}
			}
		
			// Prepare data for database insertion
			$data = array(
				'jobID' => $this->uri->segment(2),
				'img1' => $fileNames[0],
				'img2' => $fileNames[1],
				'img3' => $fileNames[2],
				'img4' => $fileNames[3],
				'img5' => $fileNames[4],
				'img6' => $fileNames[5],
				'img7' => $fileNames[6],
				'img8' => $fileNames[7],
				'img9' => $fileNames[8],
				'img10' => $fileNames[9],
			);
		
			// Insert data into the database
			$this->generic->InsertData('jobinstallation', $data);
		
			//update status
			$this->generic->update('jobstatus',array('jobID'=>$this->uri->segment(2)),array('install'=>2,'managerReview'=>1));
			// Redirect or show success message
			$this->session->set_flashdata('imagesuploaded', 1);
			redirect(base_url('admin-view-job/').$this->uri->segment(2));

		}else{
			redirect(base_url());
		}
	}
	public function managerfainalReviewDate(){
		if ($this->session->userdata('loginData')) {
			//check if entry available
			$checkEntry=$this->generic->GetData('jobmanagerreview',array('jobID'=>$this->uri->segment(2)));
			if($checkEntry){
				//update entry
				$this->generic->Update('jobmanagerreview',array('jobID'=>$this->uri->segment(2)),array('reviewDate'=>$this->input->post('jobReviewDate')) );
			}else{
				//insert new entry
				$this->generic->InsertData('jobmanagerreview',array('reviewDate'=>$this->input->post('jobReviewDate'),'jobID'=>$this->uri->segment(2)) );
				
				
			}
			//update to job close to in progress
			$this->generic->update('jobstatus',array('jobID'=>$this->uri->segment(2)),array('managerReview'=>2,'jobClose'=>1));
			$this->session->set_flashdata('jobReviewadded', 1);
			redirect(base_url('admin-view-job/').$this->uri->segment(2));
		}else{
			redirect(base_url());
		}
	}
	public function managerMarkJobClose(){
		if ($this->session->userdata('loginData')) {
				$this->generic->Update('jobstatus',array('jobID'=>$this->uri->segment(2)),array('jobClose'=>2,'jobCloseDate'=>date('Y-m-d'),'feedback'=>1));
				$this->session->set_flashdata('jobmarkclose', 1);
			redirect(base_url('admin-view-job/').$this->uri->segment(2));
		}else{
			redirect(base_url());
		}
	}


	//logout all session
	public function Logout()
	{
		$this->session->unset_userdata('loginData');
		redirect(base_url());
	}
}
