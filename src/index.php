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


        * {
        box-sizing: border-box;
    }
    
    .openBtn {
        display: flex;
        justify-content: left;
    }
    
    .openButton {
        border: none;
        border-radius: 5px;
        background-color: #1c87c9;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
    }
    
    .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
    }
    
    .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
    }
    
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
    .password{
          display: flex;
  justify-content: space-between;
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

    #suggestion{
        color: #cc0000;
    }

    .blogdesire-password{
            position: relative;
            
        display: flex;
            width: 80%;
            border: 1px solid #6944ff;
            color: #6944ff;
            padding: 2%;
            border-radius: 20px;
            margin-top: 15px;
            margin-right: 1px;
  margin-bottom: 15px;
            font-family: 'Grenze', serif;
    }

    a{
        
        position: relative;
        display: flex;
        Justify-content: center;
        background: #6944ff;
        color: #fff;
        width: 100px;
        height:50px;
        padding: 2%;
        margin:auto;
        border-radius: 20px; 
        font-family: 'Grenze', serif;
    
    }
    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>PasswordMan -A php based Passowrd Manager</title>
</head>

<body class="blogdesire-body">
    <div class="blogdesire-wrapper">
        <div class="blogdesire-heading">
            PasswordMan 
        </div>
        <form method="post">
            <!--Input Fields-->
            <span class="blogdesire-form"><input type="text" name="website" placeholder="Website" required autocomplete="off"><br></span>
            <span class="blogdesire-form"><input type="text" name="username" placeholder="Username" required autocomplete="off"><br></span>
            <span class="password">
                <span class="blogdesire-password"><input type="text" name="password" placeholder="Password" required autocomplete="off"><br></span>
            <span id="suggestion"></span><a><input type="button" value="Generate" onclick="_RandomPassword(17)" > <br></a>
            </span>
           <span class="blogdesire-form"><input type="submit" name="submit" value="SAVE"></span>
        </form>
        </div> 

    
<div class="openBtn">
    <button class="openButton" onclick="openForm()"><strong>Decrypt Passwords</strong></button>
</div>

<div class="loginPopup">
    <div class="formPopup" id="popupForm">
        <form action="decrypt.php" class="formContainer" method="post">
            <h2>Enter Your Key</h2>
            <label for="key">
            <strong>Decryption Key-</strong>
          </label>
            <input type="password" id="key" placeholder="Your Key" name="key" required>
            <button type="submit" class="btn" onclick="test()">Decrypt</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
</div>


<script>
  function redir() {
    window.location.reload();
  }

   function _RandomPassword(len) {
    let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$&*+_?%",
    suggestion = "";
    for(let i = 0; i < len; i++) suggestion += chars.split("").sort((a, b) => Math.round(Math.random()*a.charCodeAt()) - Math.round(Math.random()*b.charCodeAt())).splice(-1).join("");
    //document.querySelector("#suggestion").textContent = suggestion;
    document.querySelector("[name='password']").value = suggestion;
    }

    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }
</script>
</body>
</html>


<!--Php script here-->

<?php
error_reporting(0);
//will create the file if not exist, will open if exists

//checks if file exists if not then creates one
echo nl2br("\n\n\n");
$filename = "Data.txt";
if (file_exists($filename)){
    echo "Data File exist.";
    //echo '<script>alert("Data File exists")</script>';
    //reading and showing file contents
    //echo nl2br(file_get_contents( "Data.txt" )); // get the contents, and echo it out.

}

else{
    echo '<script>alert("File does not exist. Creating One")</script>';
    echo "File does not exist. Creating One";
    //will make a popup window to take key as input
    $Data_file = fopen("Data.txt", "w") or die("Unable to create/open file!");
    fclose($Data_file);
    }

    //to take key from at time of encrypting new password
$key="1234567890";

$Website =$_POST['website'];
$Name =$_POST['username'];
$Pass =$_POST['password'];
//fwrite($Data_file, $key);



//script to input new data from user to data.txt
if(isset($_POST['submit'])){ //when use presses submit

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

//afte successful generation of file redirect to saved.php
//this prevents reupload of data on reload, since we are using PRG method.
    echo '<script type="text/javascript">',
     'window.location.href = "saved.php";',
     '</script>';
    }

    
?>





