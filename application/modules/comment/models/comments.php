<?php
class Comments extends CI_Model{
	function join(){
		$this->db->select('comments.* ,items.Name AS Item_Name,users.Username AS Member ') ;
		$this->db->from('comments');
		$this->db->join('users','users.UserID=comments.user_id');
		$this->db->join('items','items.Item_ID=comments.item_id');
		$this->db->order_by("c_id", "desc");
		$query = $this->db->get();
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function Edits($id){
		$this->db->limit(1);
		$this->db->where('c_id',$id); 
		$query = $this->db->get('comments');
		if($query){
			return $query->result_array();
		}else{
			return 'aha';
		}
	}
	function updates($comment,$id){
		$data = array('comment' => $comment);
               
		$this->db->where('c_id', $id);
		$this->db->update('comments', $data);	 
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
	function deletes($id){
		$this->db->where('c_id',$id);
		$this->db->delete('comments');
	}
	function Approves($id){
		$data = array('status' => 1);
               
		$this->db->where('c_id', $id);
		$this->db->update('comments', $data); 
	}
	
}