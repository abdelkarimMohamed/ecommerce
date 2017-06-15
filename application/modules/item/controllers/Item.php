<?php
class Item extends MX_Controller{
	function head(){
      	$this->load->view('admin/header');
      }
      function foot(){
      	$this->load->view('admin/footer');
      	
      }

      function Manage(){
		$this->load->model('Items');
		$data['JOIN']=$this->Items->join();
		$this->head();
		$this->load->view('admin/Manage Items',$data);
		$this->foot();
	}

	
	function Add($id = null){
      	$this->load->model('Items');
		$data['allMembers']=$this->Items->getAllFrom();
		$data['allCats']=$this->Items->getAllFrom2();
		$data['childCats']=$this->Items->getAllFrom3($id);
		$this->head();
      	$this->load->view('admin/Add Items',$data);
      	$this->foot();
    }

    function Add2($id){
    	$this->load->model('Items');
    	return $this->Items->getAllFrom3($id);	
    }


      function Insert(){
      	if($_SERVER['REQUEST_METHOD']=='POST'){
	      	
	      	$this->load->library('form_validation');
		  	  $this->form_validation->set_rules('name', 'Name','required');
		  	  $this->form_validation->set_rules('description', 'Description','required');
		  	  $this->form_validation->set_rules('price', 'Price','required');
		  	  $this->form_validation->set_rules('country', 'Country','required');
		  	  $this->form_validation->set_rules('status', 'Status','required');
		  	  $this->form_validation->set_rules('member', 'Member','required');
		  	  $this->form_validation->set_rules('category', 'Category','required');
		  	  $this->form_validation->set_rules('tags', 'Tags','required');

	      	  

	      	if($this->form_validation->run()== True){
	      		$name		=$this->input->post('name');
	      		$desc 		=$this->input->post('description');
	      		$price		=$this->input->post('price');
	      		$country  	=$this->input->post('country');
	      		$status  	=$this->input->post('status');
	      		$member  	=$this->input->post('member');
	      		$category  	=$this->input->post('category');
	      		$tags  		=$this->input->post('tags');

	      		$this->load->model('Items');
	      		$this->Items->Inserts($name,$desc,$price,$country,$status,$member,$category,$tags);
	      		$data['error']='';
	      	}else{
	      			$data['error']=  validation_errors("<div class='alert alert-danger'>", '</div>');

	      	}
	      		$this->head();
	      		$this->load->view('admin/Insert Items',$data);
	      		$this->foot();
	      	
	    }else{
	    	$this->head();
	    	$this->load->view('admin/broweser Members');
	    	$this->foot();
	    }
     }
     function Edit($id){
	  	$this->load->model('Items');
	  	$count=$this->Items->Edits($id);
	  	$data['itemid']=$id;
	  	$data['itemes']=$this->Items->Edits($id);
	  	$this->head();
	  	$this->load->view('admin/edit items',$data);
		$this->foot();
  }
  function Edit2(){
    	$this->load->model('Items');
    	return $this->Items->user();	
    }
    function Edit3(){
    	$this->load->model('Items');
    	return $this->Items->category();	
    }

}