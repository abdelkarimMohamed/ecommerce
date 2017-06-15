<?php
class Home extends MX_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->session->userdata('Username');
		$this->session->userdata('ID');
	}

	public function login(){
		$this->load->view('admin/login');
		if(isset($_SESSION['Username'])){
			redirect('home/Dashboard'); //Redirect to dashboard page
		}
	}


	public function post_login()
	{	
		$this->load->model('Users');
		
		$data['Username'] = $this->input->post('user');
		$data['Password'] = sha1($this->input->post('pass'));
		$data['GroupID']  = 1;
		
		$querys=$this->Users->selectAdmin($data);
		foreach ($querys as $kkk) {
			$user= $kkk->Username;
			$id= $kkk->UserID;
		}
		$this->load->library('session');
		$item=array(
			'Username'=>$user,
			'ID'=>$id	
			);
		$this->session->set_userdata($item);

		if(isset($_SESSION['Username'])){
			redirect('home/Dashboard'); //Redirect to dashboard page
		}
	
	}
	function Dashboard(){
      	$this->head();
      	$this->load->model('Users');
      	$data['getLatestuser'] =$this->Users->getLatest('*','users','UserID',7);
      	$data['getLatestitem'] =$this->Users->getLatest("*","items","Item_ID",6);
      	$data['countItemsusers'] = $this->Users->countItems('UserID','users');
      	$data['countItemsitems'] = $this->Users->countItems('Item_ID','items');
      	$data['countItemscomments'] = $this->Users->countItems('c_id','comments');
      	$data['checkItem'] = $this->Users->checkItem('RegStatus','users',0);
      	$data['join'] = $this->Users->join();
      	$this->load->view('admin/dash',$data);
      	$this->foot();
      }
      function head(){
      	$this->load->view('admin/header');
      }
      function foot(){
      	$this->load->view('admin/footer');
      	
      }
      function Manage($type = null){
      	$this->head();
		$where = " ";
		if (!empty($type)) {
			
			if ($type == 1 ) {
				$where = " AND RegStatus = 0 ";
			}
		}
      	$this->load->model('Users');
      	$data['querys']=$this->Users->prp1($where);
      	$this->load->view('admin/Manage Members',$data);
      	$this->foot();
      }
      function Add(){
      	$this->head();
      	$this->load->view('admin/Add Members');
      	$this->foot();
      }
      function Insert(){
      	if($_SERVER['REQUEST_METHOD']=='POST'){
	      	$this->head();
	      	$this->load->library('form_validation');
		  	  $this->form_validation->set_rules('username', 'Username','required|min_length[4]');
		  	  $this->form_validation->set_rules('password', 'Password','required');
		  	  $this->form_validation->set_rules('email', 'Email','required');
		  	  $this->form_validation->set_rules('full', 'Full','required');
	      	  
	      	$this->load->model('Users');
	      	$checkUser=$this->input->post('username');
	      	$data['check']=$this->Users->checkItem("Username","users",$checkUser);

	      	$check2=$this->Users->checkItem("Username","users",$checkUser);

	      	if($this->form_validation->run()== True && $check2 != 1){
	      		$name	=$this->input->post('username');
	      		$pass 	=sha1($this->input->post('password'));
	      		$email	=$this->input->post('email');
	      		$full  	=$this->input->post('full');
	      		$this->Users->Inserts($name,$pass,$email,$full);
	      		$data['aha']='';
	      	}else{
	      		$data['aha']=validation_errors();
	      	}
	      	$this->load->view('admin/Insert Members',$data);
	      	$this->foot();
	    }else{
	    	$this->head();
	    	$this->load->view('admin/broweser Members');
	    	$this->foot();
	    }
      	
  	  }
  	  function Edit($id){
	  	$this->head();
	  	$this->load->model('Users');
	  	$data['aha']=$this->Users->Edits($id);
	  	$data['aha2']=$id;
		$this->load->view('admin/edit Members',$data);
		$this->foot();

      }
      function Update(){
      	if($_SERVER['REQUEST_METHOD']=='POST'){
	      	  $this->load->library('form_validation');
		  	  $this->form_validation->set_rules('username', 'Username','required|min_length[4]|max_length[20]');
		  	  $this->form_validation->set_rules('email', 'Email','required');
		  	  $this->form_validation->set_rules('full', 'Full','required');
		  	  $this->load->model('Users');
		  	  $user=$this->input->post('userid');
		  	  $id=$this->input->post('username');
		  	  $check3=$this->Users->seletUpdates($user,$id);
		  	  

		  	 if($this->form_validation->run()== True && $check3 != 1){
			  	  	$name	=$this->input->post('username');
		      		$email	=$this->input->post('email');
		      		$full  	=$this->input->post('full');
		      		$pass   =empty($_POST['newpassword'])? $_POST['oldpassword']:sha1($_POST['newpassword']);
		      		$id  	=$this->input->post('userid');
		      		$this->load->model('Users');
		      		$this->Users->updates($id,$name,$email,$full,$pass);
		      		$this->head();
		      		$this->load->view('admin/Update Members');
		      		$this->foot();

	      	  }else{
	      			$this->head();
	    			$this->load->view('admin/broweser2 Members');
	    			$this->foot();
	      	}

      }else{
      		$this->head();
			$this->load->view('admin/broweser Members');
			$this->foot();

      }
  }
  function Delete($id){
  		$this->load->model('Users');
		$check=$this->Users->checkItem('UserID','users',$id);
		if($check>0){
			$this->head();
			$this->load->view('admin/Delete Members');
			$this->foot();
			$this->load->model('Users');
			$this->Users->deletes($id);
		}else{
			$this->head();
			$this->load->view('admin/broweser2 Members');
			$this->foot();

		}
  }
  function Activate($id){
  		$this->load->model('Users');
		$check=$this->Users->checkItem('UserID','users',$id);
		if($check>0){
			$this->head();
			$this->load->view('admin/Activate Members');
			$this->foot();
			$this->load->model('Users');
			$this->Users->actives($id);
		}else{
			$this->head();
			$this->load->view('admin/broweser2 Members');
			$this->foot();

		}
  }
 
	
}