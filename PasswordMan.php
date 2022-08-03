#this is the main file for PassowrdMan.php This file will  contain everything necessary for the proper functioning of Script
<!DOCTYPE html>
<html>
<body>

<?php 

// will create the file if not exist, will open if exists


//checks if file exists if not then creates one
$filename = BASE_DIR."Data.txt";
if (file_exists($filename)){
    echo "Data File exist.";

    //reading and showing hash
echo nl2br(file_get_contents( "Data.txt" )); // get the contents, and echo it out.


}



else{
    echo "File does not exist. Creating One";

    //use form to take the key from user at start,store it in $key variable


    $Data_file = fopen("Data.txt", "w") or die("Unable to create/open file!");

fclose($Data_file);
}

//$key="From user";
//fwrite($Data_file, $key);


?>