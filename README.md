# PasswordMan
PasswordMan is a php based passoword manager used to generate highly secure passwords and store them to local machine in a encrypted form to decrypt it will use user pre-defined key

Changelog 01
*Now lets talk about its design-
#it will be a webpage based application.
#on the startup the user is required to  set a one-time key for hashing. # it will be called a "Primary Hash"
a key is a piece of text or credential used to decrypt the hased password.
The primary key will be required everytime to add,generate and read stored passwords.

# the program will be a standalone php file , the file will contain the php script, Html & Css all inside a single File.

the encrypte hash will be stored in a seperate file in the same directory.

Following files will be made-
1.PasswordMan.php
2.Enc_Data(file, will be generated automatically by script)

The file will be self dependent means it will not need any king of PHP server like Apache or Ngnix etc.

workflow
start
on the first run ask user to make a key.
create a menu with following options
sr No-----------Account id------Password---------Last Changed
auto            name of         pwd generated    Date()
increment       Profile         hashed with key
[New Passowrd]

date 09/08/22
removed Version2.php , already used essentials from it.
modified script to add website,account name and Hashed passowrd to data.txt file

Implement use of browser alerts from phppopup.php script
alerts will be used to show if file exists, its creation and contents of file.

based on the encryption techniques used in encdec.php , the further code of passwordman.php will use encryption to store all the passwords in data.txt file
one only thing visible will be the website name and the user name and password will be encrypted with the help on initialization vector which will be the name of that website

-&&- will be used to seperate website name and the encrypted hash
there will be a button on the homepage, which when clicked call a function that will decrypt all passwords and present them in a html alert box

takes key everytime saving a new password

added decrypted button, when pressed it will make a popup for user to enter the key

10/08/22 commit
added a decrypt.php page , when decypt button is pressed and correct key entered the page will redirect to a new page showing the decrypted  Passwords🎉🥳.

this currently works file if data.txt only contains a single encrypted hash but fails if there are more than one hash , there is need to fix the openssl_decrypt function rest is working as expected

11/08/22 commit
the single line&multiline problem was solved by simply replacing PHP_EOL with "/n" in decrypt.php 

now the  file works as intended🥳🎉🔥.