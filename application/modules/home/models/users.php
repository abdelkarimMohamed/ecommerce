<?php
class Users extends CI_Model{
	function selectAdmin($data){
		$this->db->limit(1);
		$this->db->select('UserID,Username,Password');
        $this->db->where($data);
        $query =$this->db->get('users');
		if($query){
			return $query->result();
		}else{
			return 'aha';
		}
	}
	
	function getLatest($select,$table,$order,$limit = 5){
	$this->db->select($select);
	$this->db->from($table);
	$this->db->order_by($order,"desc");
	$this->db->limit($limit);
	$query = $this->db->get();
	if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function countItems($item,$table){

	$this->db->from($table);
	$this->db->select($item);
	$query = $this->db->get();
	if($query){
			return $query->num_rows();
		}else{
			return 'aha';
		}
	}
	function checkItem($select,$table,$value){

	$this->db->from($table);
	$this->db->select($select);
	$this->db->where($select,$value); 
	$query = $this->db->get();
	if($query){
			return $query->num_rows();
		}else{
			return 'aha';
		}
	}
	function join(){
		$this->db->select('comments.* ,users.Username AS Member ') ;
		$this->db->from('comments');
		$this->db->join('users','users.UserID=comments.user_id');
		$this->db->order_by("c_id", "desc");
		$this->db->limit(4);
		$query = $this->db->get();
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}

	}
	function prp1($queryy=''){
		$sql = "SELECT * FROM users WHERE GroupID != 1 $queryy ORDER BY UserID DESC";
		$query = $this->db->query($sql);

		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function Inserts($name,$pass,$email,$fullname){
		$data = array(
        'Username'	=> $name ,
        'Password' 	=> $pass,
        'Email' 	=> $email,
        'FullName'	=> $fullname,
        'RegStatus' => 1
        );
        $this->db->set('Date', 'NOW()', FALSE);
        $this->db->insert('users', $data);
	}
	function Edits($id){
		$this->db->limit(1);
		$this->db->where('UserID',$id); 
		$query = $this->db->get('users');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function seletUpdates($user,$id){
		$sql = " SELECT * FROM users WHERE Username = '" .$user."' AND UserID != '".$id."' ";
		$query = $this->db->query($sql);

		if($query){
			return $query->num_rows();
		}else{
			return 'aha';
		}

	}
	function updates($id,$name,$email,$full,$pass){
		$data = array(
               'Username' => $name,
               'Email' 	  => $email,
               'FullName' => $full,
               'Password' => $pass
               
            );
		$this->db->where('UserId', $id);
		$this->db->update('users', $data); 
	}
	function deletes($id){
		$this->db->where('UserID',$id);
		$this->db->delete('users');
	}
	function actives($id){
		$data = array('RegStatus' => 1);
               
		$this->db->where('UserId', $id);
		$this->db->update('users', $data); 
	}
}