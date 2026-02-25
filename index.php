<?php

$password = "adfhuoazhdfuazeu";

echo $password;

$password_hash = password_hash($password, PASSWORD_DEFAULT);
echo PHP_EOL . $password_hash;