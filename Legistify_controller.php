<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legistify extends CI_Controller {
public function demo()
	{
		$this->load->model('Query_model');
		$query_result=$this->Query_model->getdata();
		$this->load->view('legistify',array('data'=>$query_result));
		
	}

	
	public function processform($id)
	{
		$msg=$this->input->post('msg'.$id);
		$mail=$this->input->post('mail'.$id);
		$res=$this->do_upload($id);
		if($res)
		{
         $op=$this->sendmail($mail,$msg,$res);  
		 $this->load->model('Query_model');
		 $result=$this->Query_model->deletequery($id);
			if($result)
			{
				redirect('/Legistify/demo');
			}
		}
		else
		{
			echo '<script>alert("Error in uploading Document. Please check it");</script>';
			$this->demo();
		}	

	}
	

	public function do_upload($id)
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'doc|docx';
		$config['max_size']	= '3072';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('upload'.$id))
		{
           return 0;
		}
		else
		{
			$data =  $this->upload->data();

			return $data['full_path'];
		}
	}


	public function sendmail($to,$msg,$path)
	{
	    $this->load->library('email'); 
	    $this->email->from('pankaj@tripsos.com', 'Pankaj');
	    $this->email->to($to);
	    $this->email->subject('Reply from legistify');
	    $this->email->attach($path);
	    $this->email->message($msg);
	    if ($this->email->send())
	        return true;
	    else
	         show_error($this->email->print_debugger());
	}

}
