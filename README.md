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

TODO 12/08/22 - 11:30AM
1.add a generate random button besides the password tab in PasswordMan.php homepage.
when pressed this button should type a randomly generated highly secure password.
2 cosmetic changes in PasswordmMan.php 

DONE 12/08/22 - 10:21PM

added a button besides password input field in form,
when pressed the button generates a passowrd, shows the password and then types the password in the box. 
button uses javascript function to generate and store.
The save process works as usual, overall generate function is completed.
🥳

as of 13-08-2022 1:20pm done many changes to site.
1. implemented PRG ( Post/Redirect/Get) methodology , now upon form submission , user gets redirected to saved.php page where he can see list of all stored passowrds;from the same page he can enter his key and get his keys decrypted.
2. on the passwordman.php, it no longer shows list of stored hash, it only shows the status related to data.txt file , and now list of stored hashes can be seen on saved.php
3. generate button function as intended and positioned relatively, more work on css

completed another project , now working again on this project.
1. added .gitignore and configured it.
2. Structured and reviewed the code of all pages.
3. added close page button to saved.php, will redirect to home page.
4. added close page button to decrypt.php,will redirect to home page.
5. added decryption tap to saved.php so user can decrypt from there as well.