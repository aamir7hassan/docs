<?php 

	/***
	
		for reading all files in a directory and 
		replacing a string with a wistring
		
	***/
	
	// __DIR__ gives current directory
	$it = new RecursiveTreeIterator(new RecursiveDirectoryIterator(__DIR__, RecursiveDirectoryIterator::SKIP_DOTS));
	foreach($it as $path) {
		$ext = pathinfo($path,PATHINFO_EXTENSION);
		if($ext=="php") {
			$arr = explode('roletai-mini-diena-naktis',$path); // you can change if need othwise omit it
			$filename = substr($arr[1],1);
			$file_contents = file_get_contents($filename);
			$file_contents = str_replace("rdn_","rdn_mini_",$file_contents);
			file_put_contents($filename,$file_contents);
		}
	  
	}
	die;
	
	/*** =============================================================================== ***/
	
	/***
	
		it will read all files in directory(imm) that filename starts with test
		
	***/
	
	
		$path = 'imm'; 
		$files = glob($path.'/test*');
		echo "<pre>";
		die;
	
?>