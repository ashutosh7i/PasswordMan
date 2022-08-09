<!--this is the main file for PassowrdMan.php This file will  contain everything necessary for the proper functioning of Script-->
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Grenze&display=swap');
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
        
        .blogdesire-form {}
        
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

//will create the file if not exist, will open if exists

//checks if file exists if not then creates one

$filename = "Data.txt";
if (file_exists($filename)){
    echo "Data File exist.";
    //reading and showing file contents
echo nl2br(file_get_contents( "Data.txt" )); // get the contents, and echo it out.

}

else{
    echo "File does not exist. Creating One";

    //will make a popup window to take key as input
    $Data_file = fopen("Data.txt", "w") or die("Unable to create/open file!");

fclose($Data_file);
}

//$key="From user";
//fwrite($Data_file, $key);

//script to input new data from user to data.txt
if(isset($_POST['submit'])){
    $Website = "Website:".$_POST['website']."
    ";
    $Name = "Username:".$_POST['username']."
    ";
    $Pass = "Password:".$_POST['password']."
    ";
    $file=fopen("Data.txt", "a");
    fwrite($file, $Website);
    fwrite($file, $Name);
    fwrite($file, $Pass);
    fclose($file);
    }
    

?>
