<?php 
    function openMySQLConnection(&$conn){
        $servername = 'localhost';
        $database = 'school_web';
        $post = '3306';
        $username = 'root';
        $password = '';

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) die("Connection failed: " . mysqli_connect_error());
    }

    function closeMySQLConnection(&$conn){
        mysqli_close($conn);
    }
?>