<?php
$dbname = 'clinica';
$user = 'postgres';
$password = 'gabriel.a03';


try {
  $db = new PDO("pgsql:host=localhost;dbname=$dbname;", $user, $password);
} catch (\Throwable $th) {
  echo $th->getMessage();
}
