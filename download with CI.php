<?php 
	public function db() {
		// Load the DB utility class
		$this->load->dbutil();

		// Backup your entire database and assign it to a variable
		$backup = $this->dbutil->backup();

		// Load the file helper and write the file to your server
		$this->load->helper('file');
		write_file('mybackup.zip', $backup);

		// Load the download helper and send the file to your desktop
		$this->load->helper('download');
		force_download('mybackup.zip', $backup);
	}

	public function backup()
	{
		$this->load->library('zip');
		$path = './';
		$time = time();    
		$this->zip->read_dir($path);
		$result = $this->zip->download('holiday_application '.date("d-m-Y").'.zip');
		return $result;
	}
?>