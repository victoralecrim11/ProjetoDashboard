<?php
  function get_connection(){
      return new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");
  }

?>