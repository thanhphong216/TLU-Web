<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LIB -->
    <link href=<?php echo BASE_URL . "./lib/fontawesome-free-5.15.3-web/css/all.css" ?> rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/styles.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/slide.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/0/homepage.css" ?>>

    <title>Khoa Công nghệ thông tin - Trường ĐH Thủy Lợi</title>
</head>
<body>

    <?php include(PATH_ROOT . '/views/layouts/_header.php'); ?>


    <div id="body">

        <div id="body-content">
            <div id="body-content-container" class="max-width-container">

                <div id="body-component">
                    
                    <div id="slideshow-container">
                        <?php
                            openMySQLConnection($conn);
                            $langs = getAllSlides($conn);
                            closeMySQLConnection($conn);
                            $count = count($langs);
                        ?>
                        <div id="slidelist-container">
                            <?php
                                foreach($langs as $row){
                            ?>
                            <div class="slide-container"><img src=<?php echo BASE_URL . "/assets/" . $row[1];?>></div>
                            <?php
                                }
                            ?>
                        </div>

                        <div id="slidecontrol-container">
                            <div id="slidecontrol-arrow-container">
                                <i id="slidecontrol-arrow-left" class="far fa-arrow-alt-circle-left slidecontrol-arrow"></i>
                                <i id="slidecontrol-arrow-right" class="far fa-arrow-alt-circle-right slidecontrol-arrow"></i>
                            </div>
                            
                            <div id="slidecontrol-navigator-container">
                                <?php
                                    for($i = 0; $i < $count; $i++){
                                ?>
                                <div class="slidecontrol-navigator"></div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                    
                    <div id="body-navigator-container">
                        <ul class="body-navigator-ul">
                            <li class="body-navigator-li">
                                <div class="body-navigator-content-container">
                                    <img class="body-navigator-img" src=<?php echo BASE_URL . "./assets/images/cse-hallthumb.jpg" ?>>
                                    <a class="body-navigator-link" href="/welcome">Lời chào mừng</a>
                                </div>
                            </li>
                            <li class="body-navigator-li">
                                <div class="body-navigator-content-container">
                                    <img class="body-navigator-img" src=<?php echo BASE_URL . "./assets/images/cse-tlu-narathumb.jpg" ?>>
                                    <a class="body-navigator-link" href="/scientificresearch">Nghiên cứu khoa học</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="body-navigator-ul">
                            <li class="body-navigator-li">
                                <div class="body-navigator-content-container">
                                    <img class="body-navigator-img" src=<?php echo BASE_URL . "./assets/images/gv-khoa-cnttthumb.jpg" ?>>
                                    <a class="body-navigator-link" href="#">Giảng viên</a>
                                </div>
                            </li>
                            <li class="body-navigator-li">
                                <div class="body-navigator-content-container">
                                    <img class="body-navigator-img" src=<?php echo BASE_URL . "./assets/images/k54th-tot-nghiep-1thumb.jpg" ?>>
                                    <a class="body-navigator-link" href="/educate">Đào tạo</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="body-navigator-ul">
                            <li class="body-navigator-li">
                                <div class="body-navigator-content-container">
                                    <img class="body-navigator-img" src=<?php echo BASE_URL . "./assets/images/khoa43th.jpg" ?>>
                                    <a class="body-navigator-link" href="#">Ảnh khoa CNTT</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                
                
                <div id="body-social-container">
                    <iframe style="width: 100%; height: 100%;" src="https://google.com"></iframe>
                </div>
            
            </div>
        </div>

    </div>


    <?php include(PATH_ROOT . '/views/layouts/_footer.php'); ?>

    <!-- JS -->
    <script type="text/javascript" src=<?php echo BASE_URL . "/assets/js/slide.js" ?>></script>
</body>
</html>