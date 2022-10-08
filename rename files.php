<?php

//to rename one file in a directory
$directory = '../Ibrat/';	 // folder or directory name
if (is_dir($directory)) {
	$oldFile = $directory . 'file1.txt';
	$newFile = $directory . 'newfile.txt';
	rename($oldFile, $newFile);
}

//to rename all files with a similar but not exact same name, in a directory
$directory = '../Ibrat/Experiment Folder/';	// folder or directory name
if (is_dir($directory)) {
	$filePointer = scandir($directory, 0);
	if ($filePointer) {
		for ($i=2; $i < count($filePointer); $i++) { 
			// code...
			$oldFile = $directory . $filePointer[$i];
			$newFile = $directory . 'newfile' . strval($i). '.txt';
			rename($oldFile, $newFile);
		}
	}
}

?>