<?php
error_reporting(0);
$filename = "Data.txt";
if (file_exists($filename)){
    echo nl2br("Data File exist.\n");
    //echo '<script>alert("Data File exists")</script>';
    echo nl2br("reading and showing file contents\n\n");
echo nl2br(file_get_contents( "Data.txt" )); // get the contents, and echo it out.

echo nl2br("\n\n");
$data=file_get_contents( "Data.txt" );
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $key = $_POST['key'];
    if (empty($key)) {
      echo "Key Parsing Failed";
    } else {
      //echo $key;
    }
  }


$ciphering="aria-256-ctr";
$options=0;


$lines = explode("\n", $data);
foreach($lines as $line){
    $parsed=explode('-&&-', $line);
    echo nl2br("\n");
    echo(openssl_decrypt($parsed[1],$ciphering,$key,$options,$parsed[0]));
}




}
?>

