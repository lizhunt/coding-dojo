<?php


import md5
password = 'password'
encrypted_password = md5.new($password).hexdigest()
print $encrypted_password; //this will show you the encrypted value
 //  5f4dcc3b5aa765d61d8327deb882cf99 -> nice!

 ?>