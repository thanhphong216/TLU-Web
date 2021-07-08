<?php
    $request = $_SERVER['REQUEST_URI'];
    echo $router = str_replace('/School_Web','', $request);
?>