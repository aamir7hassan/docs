<?php 
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'EMAIL',
			'smtp_pass' => 'PASSWORD',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$html='<p>details goes here</p>';
		$msg = $this->load->view('email_temp',['html'=>$html],true);
		$this->load->library('email',$config);
		$this->email->from($config['smtp_user']);
		$this->email->to($to_email);
		$this->email->subject('SubjECT');
		$this->email->message($msg);
		$this->email->set_newline("\r\n");
		//$this->email->set_mailtype("html");
		if ($this->email->send()) {
			echo json_encode('1');die;
		} else {
			echo json_encode(show_error($this->email->print_debugger()));die;
			
		}
?>