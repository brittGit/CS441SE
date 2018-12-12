<?php

session_start();
$_SESSION['loggedIn'] = true;
$to_return;
$to_return['redirect'] = true;
echo json_encode($to_return);

?>