<?php
    $DB = new mysqli('localhost', 'root', '', 'market');
    
    if ($DB -> connect_errno)
    {
        header('Location:error.html');
    }
?>