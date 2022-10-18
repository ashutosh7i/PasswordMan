<!DOCTYPE html>
<html>
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
            width: 14%;
            padding: 2%;
            border-radius: 20px;  
  margin-top: -64px;
  margin-right: 1px;
  margin-bottom: 15px;
  margin-left: 550px;
            font-family: 'Grenze', serif;
    
    }
    
    </style>
</head>
<body>

    <h1>Password Saved</h1>
    <h2>List of Saved Passwords-</h2>
<?php
$filename = "Data.txt";
if (file_exists($filename)){
    //echo "Data File exist.";
    //echo '<script>alert("Data File exists")</script>';
    //reading and showing file contents
echo nl2br(file_get_contents( "Data.txt" )); // get the contents, and echo it out.
}
?>

<br>
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
<br>
<br>

<div class="formContainer">
<div class="close-button">
<form action="PasswordMan.php" method="post">
            <input class="btn cancel" type="submit" value="Close" />
        </form>
</div>
</div>

</body>
<script>
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }
</script>

</html>