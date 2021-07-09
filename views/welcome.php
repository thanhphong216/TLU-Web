<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LIB -->
    <link href="./lib/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/menu.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/detail.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/slide.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/0/welcome.css">

    <title>Thông tin seminar</title>
</head>
<body>

    <?php include(ROOT_PATH . '/views/layouts/_header.php'); ?>


    <div id="body">

        <div id="body-content">
            <div id="body-content-container" class="max-width-container">

            <div id="body-title-container" class="font-label">
                <p><a href="#" class="body-title-text">Giới thiệu</a> &ensp; > &ensp; <a href="#" class="body-title-text">Lời chào mừng</a></p>
            </div>

            <div id="slideshow-container">
                <?php
                    openMySQLConnection($conn);
                    $langs = getAllSlides();
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

            <div id="body-list-component" class="font-label">

                <div id="body-component-content">

                    <div id="post-container">
                        
                        <h1>Logo của Khoa</h1>

                        <div id="post-description-container">
                            <p id="post-description">
                                
                            </p>
                        </div>

                        <div id="post-tag-container">
                            <i class="fas fa-tag"></i>
                        </div>

                    </div>

                    <div id="post-container">
                        
                        <div id="post-social">
                            <a href="#"><div id="btn-post-social-fb" class="btn-post-social">Facebook</div></a>
                            <a href="#"><div id="btn-post-social-twitter" class="btn-post-social">Twitter</div></a>
                            <a href="#"><div id="btn-post-social-linkedIn" class="btn-post-social">LinkedIn</div></a>
                        </div>

                    </div>

                </div>

                <div id="body-component-menu">
                    <h2 id="body-component-menu-title"><a href="#">Giới thiệu</a></h2>
                    <ul>
                        <li class="body-menu-li">
                            <i class="fas fa-angle-right"></i>
                            <a href="#"><div class="body-menu-li-content">Logo Khoa CNTT</div></a>
                        </li>
                        <li class="body-menu-li">
                            <i class="fas fa-angle-right"></i>
                            <a href="#"><div class="body-menu-li-content">Lời chào mừng</div></a>
                        </li>
                        <li class="body-menu-li">
                            <i class="fas fa-angle-right"></i>
                            <a href="#"><div class="body-menu-li-content">Tổ chức</div></a>
                        </li>
                        <li class="body-menu-li">
                            <i class="fas fa-angle-right"></i>
                            <a href="#"><div class="body-menu-li-content">Hợp tác liên kết</div></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>


    <?php include(ROOT_PATH . '/views/layouts/_footer.php'); ?>

    <!-- JS -->
    <script type="text/javascript" src="./assets/js/slide.js"></script>
</body>
</html>