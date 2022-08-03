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