<?php 

session_start();


unset($_SESSION['name']); // remoce single session by key 

session_destroy(); //remove all session



?>