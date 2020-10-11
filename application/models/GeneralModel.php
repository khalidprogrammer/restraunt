<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GeneralModel extends CI_Model
{
	function add($table_name,$data)
	{
		$this->db->insert($table_name, $data);
 		$insert_id = $this->db->insert_id();
 		//echo $this->db->last_query(); exit;
		return  $insert_id;
	}
	function update($table_name,$data,$db_field,$value)
	{
		$this->db->where($db_field,$value);
     	$result = $this->db->update($table_name, $data);
     	//echo $this->db->last_query(); exit;
   		return  $result;
	}
	function get_record($table,$db_field,$value){
		$this->db->where($db_field,$value);
		$this->db->from($table);
		$result = $this->db->get();
		return $result->result_array();
	}
	function delete($table_name,$db_field,$value)
	{
		$this->db->where($db_field,$value);
		$this->db->delete($table_name);
	}

	function get_all_record($table_name,$db_field){
		$this->db->order_by($db_field, "ASC");
		$query = $this->db->get($table_name);
		return $query->result_array();
	}

	function get_distric ($province_id){

	$this->db->where('province_id', $province_id);
	$this->db->order_by('title', 'ASC');
	$query = $this->db->get('districs');
	$output = '<option value="">Select Distric</option>';
	foreach($query->result() as $row)
	{
	$output .= '<option value="'.$row->id.'">'.$row->title.'</option>';
	}
	return $output;
	}


	function get_village ($distric_id){
		$this->db->where('distric_id', $distric_id);
	$this->db->order_by('title', 'ASC');
	$query = $this->db->get('villages');
	$output = '<option value="">Select Villages</option>';
	foreach($query->result() as $row)
	{
	$output .= '<option value="'.$row->id.'">'.$row->title.'</option>';
	}
	return $output;
	}
	
        
}