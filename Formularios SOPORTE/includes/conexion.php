<?php
 
session_start();

$conn = mysqli_connect(
  '192.168.0.227',
  'form',
  '123456',
  'form_descargo'
) or die(mysqli_error($mysqli));
 

?>