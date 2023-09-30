<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	var $userRow;
	function __construct() {
        parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('MemberModel');
		$this->load->model('LoanModel');
		$this->load->model('EmployeeModel');

		if($this->session->userdata('token')){
			$this->userRow=$this->db->query("SELECT * FROM users WHERE logintoken='".$this->session->userdata('token')."'")->row();
			if(!$this->userRow)
				redirect("");
		}else
		redirect("");
		

	}
	
	public function index()
	{
		$this->header("Dashboard");
		$toDay=date('Y-m-d');
		$data['members']=$this->db->query("SELECT COUNT(*) as cnt FROM members")->row()->cnt;
		$data['birthday']=$this->db->query("SELECT COUNT(*) as cnt FROM members WHERE birthday LIKE '$toDay%'")->row()->cnt;
		$data['ann']=$this->db->query("SELECT COUNT(*) as cnt FROM members WHERE anniversary LIKE '$toDay%'")->row()->cnt;
		$data['dann']=$this->db->query("SELECT COUNT(*) as cnt FROM members WHERE deathann LIKE '$toDay%'")->row()->cnt;
		$this->load->view('dashboard',@$data);
		$this->load->view('include/footer');
	}

	public function header($title="")
	{
		$data['title']=$title;
		$data['user']=$this->userRow;
		$this->load->view('include/header',$data);
		$this->load->view('include/menu',$data);
	
    }
    


    public function User($edit=0)
    {
        if(isset($_POST['save'])){
		$name=$this->input->post("name");
		$contact=$this->input->post("contact");
		$email=$this->input->post("email");
		$address=$this->input->post("address");
		$pwd=$this->input->post("pwd");
		$parentuser=$this->userRow->id;
		$status=$this->input->post("status");
		$role=$this->input->post("role");

		if($name && $contact && $pwd && $role && $status)
		{
			$data = array(
                'name'=>$name,
                'contact'=>$contact,
                'email'=>$email,
                'address'=>$address,
                'pwd'=>$pwd,
                'parentuser'=>$parentuser,
                'status'=>$status,
                'role'=>$role
			);

			$UserID=$this->UserModel->storeUser($data);
			if($UserID>0)
				$this->session->set_flashdata('result','<div class="text-success">User Saved....</div>');
			else
				$this->session->set_flashdata('result','<div class="text-danger">Error in data saving....</div>');						
			}
			else
				$this->session->set_flashdata('result','<div class="text-danger">All Data Required</div>');
		
				redirect("Admin/User");
        }else{
			
			if($edit>0){
				$this->header("Edit User");
				$data['edit']=$this->UserModel->getUser($edit);
			}else
				$this->header("Add User");

            $this->load->view('user/add',@$data);
            $this->load->view('include/footer');
        }
    
	}
	
	
    public function UserList()
    {
		$this->header("User List");
		$data['users']=$this->UserModel->getUsers();
		$this->load->view('user/list',$data);
		$this->load->view('include/footer');
	}

	public function loantypes($edit=0)
    {
        if(isset($_POST['save'])){
		$name=$this->input->post("name");

		$iddate=date('Y-m-d H:i:s');
		
		if($name)
		{
			$data = array(
				'iddate'=>$iddate,
                'name'=>$name
			);
			if($edit>0){
				$BcID=$this->LoanModel->update($data,$edit);
				if($BcID>0)
					$this->session->set_flashdata('result','<div class="text-success">Company Updated....</div>');
				else
					$this->session->set_flashdata('result','<div class="text-danger">Error in Company Update....</div>');						
			
			}else{
				$ID=$this->LoanModel->store($data);
				if($ID>0)
					$this->session->set_flashdata('result','<div class="text-success">Company Saved....</div>');
				else
					$this->session->set_flashdata('result','<div class="text-danger">Error in Company saving....</div>');						
			}
		}
				else
					$this->session->set_flashdata('result','<div class="text-danger">All Data Required</div>');
		
				redirect("Admin/loantypes");
        }else{
			
			if($edit>0){
				$this->header("Edit company");
				$data['edit']=$this->LoanModel->get($edit);
			}else
			$this->header("Add Company");


			$data['loantypes']=$this->LoanModel->getall();
            $this->load->view('loantypes/add',@$data);
            $this->load->view('include/footer');
        }
    
	}






	public function loan($edit=0)
    {
        if(isset($_POST['save'])){
		$name=$this->input->post("name");
		$empid=$this->input->post("empid");
		$email=$this->input->post("email");
		$cell=$this->input->post("cell");
		$address=$this->input->post("address");
		$edu=$this->input->post("edu");
		$design=$this->input->post("design");
		$remark=$this->input->post("remark");
		$dob=$this->input->post("dob");
		$gender=$this->input->post("gender");
		$joining_date=$this->input->post("joining_date");
		$pl=$this->input->post("pl");
		$ph=$this->input->post("ph");

		$iddate=date('Y-m-d H:i:s');

		$isPt=0;
		$isPf=0;
		if(isset($_POST["isPt"]))
			$isPt=1;
		if(isset($_POST["isPf"]))
			$isPf=1;


		
		if($name && $cell)
		{
			$data = array(
				'iddate'=>$iddate,
                'empid'=>$empid,
                'name'=>$name,
                'email'=>$email,
                'cell'=>$cell,
                'address'=>$address,
                'gender'=>$gender,
                'edu'=>$edu,
                'design'=>$design,
                'remark'=>$remark,
                'dob'=>$dob,
                'joining_date'=>$joining_date,
                'pl'=>$pl,
                'ph'=>$ph,
                'isPf'=>$isPf,
                'isPt'=>$isPt
			);
			if($edit>0){
				$BcID=$this->EmployeeModel->update($data,$edit);
				if($BcID>0)
					$this->session->set_flashdata('result','<div class="text-success">employee Updated....</div>');
				else
					$this->session->set_flashdata('result','<div class="text-danger">Error in employee Update....</div>');						
			
			}else{
				$ID=$this->EmployeeModel->store($data);
				if($ID>0)
					$this->session->set_flashdata('result','<div class="text-success">employee Saved....</div>');
				else
					$this->session->set_flashdata('result','<div class="text-danger">Error in employee saving....</div>');						
			}
		}
				else
					$this->session->set_flashdata('result','<div class="text-danger">All Data Required</div>');
		
				redirect("Admin/employee");
        }else{
			
			if($edit>0){
				$this->header("Edit Loan Entry");
				$data['edit']=$this->EmployeeModel->get($edit);
			}else
			$this->header("Add Loan Entry");
			$data['loantypes']=$this->LoanModel->getall();
			$this->load->view('loan/add',@$data);
            $this->load->view('include/footer');
        }
    
	}

    
	
}
