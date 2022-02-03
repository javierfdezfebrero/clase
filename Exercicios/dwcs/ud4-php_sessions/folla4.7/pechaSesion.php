<?php
session_start( ); /*RETOMAMOS A SESIÓN INICIADA, QUE QUEREMOS PECHAR */
$_SESSION = array( );
session_destroy( );
header('Location:login.php');
?>