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

			$this->session->set_flashdata('logedin', 1);
			redirect(base_url('dashboard'));
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
	public function EditClientData() {
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
	//logout all session
	public function Logout()
	{
		$this->session->unset_userdata('loginData');
		redirect(base_url());
	}
}
