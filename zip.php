<?php 
	/***
	
		Create zip file for files only in single directory
		
	***/
	
	/*
	// Enter the name of directory 
	$pathdir = "roletai-diena-naktis/";
	// Enter the name to creating zipped directory 
	$zipcreated = "myzip.zip"; 
	// Create new zip class 
	$zip = new ZipArchive; 
	if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) { 
		// Store the path into the variable 
		$dir = opendir($pathdir); 
		while($file = readdir($dir)) {
			if(is_file($pathdir.$file)) {
				$zip -> addFiv[le($pathdir.$file, $file); 
			} 
		} 
		$zip ->close(); 
	} */
	
	/*************************************************************************************/
	
	/***
	
		Create zip file For all folder/inner folders and files in located directory
		
	***/
	
	
	/*
	// Get real path for our folder
	$rootPath = realpath('roletai-diena-naktis');
	// $rootPath = realpath('./'); // for current directory

	// Initialize archive object
	$zip = new ZipArchive();
	$zip->open('files.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

	// Create recursive directory iterator
	// @var SplFileInfo[] $files 
	$files = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($rootPath),
		RecursiveIteratorIterator::LEAVES_ONLY
	);

	foreach ($files as $name => $file)
	{
		// Skip directories (they would be added automatically)
		if (!$file->isDir())
		{
			// Get real and relative path for current file
			$filePath = $file->getRealPath();
			$relativePath = substr($filePath, strlen($rootPath) + 1);

			// Add current file to archive
			$zip->addFile($filePath, $relativePath);
		}
	}

	// Zip archive will be created only after closing object
	$zip->close();
	*/
	
	/****************************************************************************************/
	
	/***
	
		For extracting zip file to a directory
		
	***/
	
	/*
	// Create new zip class 
	$zip = new ZipArchive; 
	  
	// Add zip filename which need 
	// to unzip 
	$zip->open('files.zip'); 
	  
	// Extracts to current directory 
	// $zip->extractTo(./); for current directory
	$zip->extractTo('roletai-mini-diena-naktis'); 
	  
	$zip->close();  
	*/
?>