<?php
class Comment extends MX_Controller{
	function head(){
      	$this->load->view('admin/header');
      }
      function foot(){
      	$this->load->view('admin/footer');
      	
      }
      function Manage(){
		$this->load->model('Comments');
		$data['JOIN']=$this->Comments->join();
		$this->head();
		$this->load->view('admin/Manage Comments',$data);
		$this->foot();
	}
	function Edit($id){
		$this->head();
	  	$this->load->model('Comments');
	  	$data['lalal']=$this->Comments->Edits($id);
	  	$check=$this->Comments->Edits($id);
	  	$data['aha2']=$id;
	  	if($check!=1){
			$this->load->view('admin/edit Comments',$data);
		}else{
			$this->load->view('admin/broweser2 Members');
		}
		$this->foot();
	}
	function Update(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			 $comid	  =$this->input->post('comid');
		  	 $comment =$this->input->post('comment');

		  	 $this->load->model('Comments');
		  	 $this->Comments->updates($comment,$comid);
		  	 $this->head();
		  	 $this->load->view('admin/Update comments');
		  	 $this->foot();
		}else{
			$this->head();
			$this->load->view('admin/broweser Members');
			$this->foot();
		}
	}
	function Delete($id){
  		$this->load->model('Comments');
		$check=$this->Comments->checkItem('c_id','comments',$id);
		if($check>0){
			$this->head();
			$this->load->view('admin/Delete comments');
			$this->foot();
			$this->load->model('Comments');
			$this->Comments->deletes($id);
		}else{
			$this->head();
			$this->load->view('admin/broweser2 Members');
			$this->foot();

		}
  	}
  	function Approve($id){
  		$this->load->model('Comments');
		$check=$this->Comments->checkItem('c_id','comments',$id);
		if($check>0){
			$this->head();
			$this->load->view('admin/Approve comments');
			$this->foot();
			$this->load->model('Comments');
			$this->Comments->Approves($id);
		}else{
			$this->head();
			$this->load->view('admin/broweser2 Members');
			$this->foot();

		}
  }
	

}