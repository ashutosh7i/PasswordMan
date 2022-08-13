<!DOCTYPE html>
<html>

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


</body>

</html>