<!--this is the main file for PassowrdMan.php This file will  contain everything necessary for the proper functioning of Script-->
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .blogdesire-body {
            background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
            background-repeat: no-repeat;
            min-height: 99vh;
            font-family: 'Grenze', serif;
        }
        
        .blogdesire-wrapper {
            padding: 20px;
            width: 100%;
            margin: auto;
            box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
            background: #fff;
            border-radius: 12px;
            max-width: 700px;
            position: relative;
        }
        
        .blogdesire-heading {
            display: block;
            text-align: center;
            font-size: 30px;
            color: #6944ff;
        }
        
        .blogdesire-form input {
            width: 96%;
            border: 1px solid #6944ff;
            color: #6944ff;
            padding: 2%;
            border-radius: 20px;
            margin-top: 15px;
            font-family: 'Grenze', serif;
        }
        
        .blogdesire-form input:last-child {
            background: #6944ff;
            color: #fff;
            width: 20%;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>My HTML Form</title>
</head>

<body class="blogdesire-body">
    <div class="blogdesire-wrapper">
        <div class="blogdesire-heading">
            My HTML Form
        </div>
        <form class="blogdesire-form" method="post">
            <!--Input Fields-->
            <input type="text" name="website" placeholder="Website" required autocomplete="off"> <br>
            <input type="text" name="username" placeholder="Username" required autocomplete="off"> <br>
            <input type="password" name="password" placeholder="Password" required autocomplete="off"> <br>
            <input type="submit" name="submit" value="SAVE" class="blogdesire-submit">
        </form>
    </div>



    </form>

</body>

</html>

<!--Php script here-->

<?php
error_reporting(0);
//will create the file if not exist, will open if exists

//checks if file exists if not then creates one

$filename = "Data.txt";
if (file_exists($filename)){
    //echo "Data File exist.";
    echo '<script>alert("Data File exists")</script>';
    //reading and showing file contents
echo nl2br(file_get_contents( "Data.txt" )); // get the contents, and echo it out.

}

else{echo '<script>alert("File does not exist. Creating One")</script>';
    
    echo "File does not exist. Creating One";

    //will make a popup window to take key as input
    $Data_file = fopen("Data.txt", "w") or die("Unable to create/open file!");

fclose($Data_file);
}

$key="1234567890";

$Website =$_POST['website'];
$Name =$_POST['username'];
$Pass =$_POST['password'];
//fwrite($Data_file, $key);

//script to input new data from user to data.txt
if(isset($_POST['submit'])){

    
//now the encryption part
//the username and password will be encrypted and will be stored in data.txt
//to decrypt, the key from user will be used and the account name will be used as initiation vector

$data=$Website.">>>".$Name.">>>".$Pass;
$ciphering="aria-256-ctr";
//$key
$options=0;
$encryption_iv=$Website;

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($data, $ciphering,$key, $options, $encryption_iv);
echo "Encrypted String: " . $encryption . "\n";



    $file=fopen("Data.txt", "a");
    fwrite($file, $Website);
    fwrite($file, "-&&-");//to seperate website and encrypted data
    fwrite($file, $encryption);
    fwrite($file, "\n");//additional newline 
    fclose($file);
    }

?>


$decryption = openssl_decrypt($encryption, $ciphering,$key, $options, $encryption_iv);
echo "Decrypted String: " . $decryption . "\n";



