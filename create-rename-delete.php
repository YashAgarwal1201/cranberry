<?php 

/*
Program to create a new directory and a text file in it along with some content, then view the content of that file and then delete the directory along with the file just created.
*/

$directory_path = './Experimental Folder/'; // directory to be created along with path
$file_name = $directory_path . 'experiment-file.txt'; // file to be created along with path

// to delete existing directory along with its content, if it exists
if (is_dir($directory_path)) {
	$file_pointer = scandir($directory_path, 0); // scan for all the files which might be present in the directory
	for ($i=2; $i < count($file_pointer); $i++) { 
		unlink($directory_path . $file_pointer[$i]); // delete all the files one by one in the directory
	}
	rmdir($directory_path); // remove the directory
	echo "old directory deleted" . '<br>';
}

mkdir($directory_path); // make a directory
echo 'new directory created' . '<br>';

// make a new file along with some content and then delete it along with directory just created
if (is_dir($directory_path)) {
	$file_pointer = fopen($file_name, 'x+') or die('unable to open file'); // create and open the file
	
	fwrite($file_pointer, 'a very long long line of content'); // write some content in file
	fclose($file_pointer); // close the file

	$new_file_name = $directory_path . 'newfile.txt';
	rename($file_name, $new_file_name);

	readfile($new_file_name); // read the content of file just created
	unlink($new_file_name); // delete the file just created (optional)
	rmdir($directory_path); // delete the directory just created (optional)
}


?>
