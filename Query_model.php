<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Query_model extends CI_Model
{

  public function getdata()
  {

     $query="SELECT * FROM `queries` ORDER BY `time` ASC ";

	return $this->db->query($query);

  }	

  public function deletequery($id)
  {
  	$query="DELETE FROM `queries` WHERE `id`=$id";
  	return $this->db->query($query);
  }

}