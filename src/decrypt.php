<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <style>
 .formContainer {
        max-width: 300px;
        padding: 20px;
        background-color: #fff;
    }
    
    .formContainer input[type=text],
    .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
    }
    
    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }
    
    .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
    }
    
    .formContainer .cancel {
        background-color: #cc0000;
    }
    
    .formContainer .btn:hover,
    .openButton:hover {
        opacity: 1;
    }
  </style>
  
  <body>
<?php
error_reporting(0);
echo "<h2>You will see all your saved passwords here if key is Correct, else you will see junk</h2>";
echo "<h3>Format= website_Name>>>Username>>>Password</h3>";
echo ("\n");
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
    echo nl2br("\n\n");
    echo(openssl_decrypt($parsed[1],$ciphering,$key,$options,$parsed[0]));
}
?>

<div class="formContainer">
<div class="close-button">
<form action="index.php" method="post">
            <input class="btn cancel" type="submit" value="Close" />
        </form>
</div>
</div>

  </body>
</html>