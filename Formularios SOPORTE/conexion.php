<?php
 
session_start();

$conn = mysqli_connect(
  'localhost',
  'form',
  '123456',
  'form_descargo'
) or die(mysqli_erro($mysqli));
 

?>