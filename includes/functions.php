<?php
    function getAllLanguage($conn){
        $sql = "SELECT * FROM language";
        $result = mysqli_query($conn,$sql);
        $langs = mysqli_fetch_all($result);
        return $langs;
    }

    function getAllSlides($conn){
        $sql = "SELECT * FROM slide_introduce";
        $result = mysqli_query($conn,$sql);
        $slides = mysqli_fetch_all($result);
        return $slides;
    }
?>