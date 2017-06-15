<?php
class Items extends CI_Model{

	function join(){
		$this->db->select(' items.*, categories.Name AS category_name, users.Username') ;
		$this->db->from('items');
		$this->db->join('categories','categories.ID=items.Cat_ID');
		$this->db->join('users','users.UserID=items.Member_ID');
		$this->db->order_by("Item_ID", "desc");
		$query = $this->db->get();
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function Edits($id){
		$this->db->limit(1);
		$this->db->where('Item_ID',$id); 
		$query = $this->db->get('items');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function user(){
		$query = $this->db->get('users');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function category(){
		$query = $this->db->get('categories');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function getAllFrom(){
		$this->db->order_by("UserID","desc");
		$query = $this->db->get('users');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function getAllFrom2(){
		$this->db->order_by("ID","desc");
		$this->db->where('parent',0);
		$query = $this->db->get('categories');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function getAllFrom3($id){
		$this->db->order_by("ID","desc");
		$this->db->where('parent',$id);
		$query = $this->db->get('categories');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function Inserts($name,$desc,$price,$country,$Status,$cat,$member,$tags){
		$data = array(
        'Name'	=> $name ,
        'description' 	=> $desc,
        'Price' 	=> $price,
        'Country_Made'	=> $country,
        'Status' => $Status,
        'Cat_ID' => $cat,
        'Member_ID' => $member,
        'tags' => $tags
        );
        $this->db->set('Add_Date', 'NOW()', FALSE);
        $this->db->insert('items', $data);
	}
	
}