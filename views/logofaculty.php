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
    <link rel="stylesheet" type="text/css" href="./assets/css/0/logofaculty.css">

    <title>Thông tin seminar</title>
</head>
<body>

    <?php include(ROOT_PATH . '/views/layouts/_header.php'); ?>


    <div id="body">

        <div id="body-content">
            <div id="body-content-container" class="max-width-container">

            <div id="body-list-component" class="font-label">

                <div id="body-component-content">

                    <div id="post-container">
                        
                        <h1>Logo của Khoa</h1>

                        <div id="post-description-container">
                            <div id="post-description">
                                <img src="./assets/images/portal/CSE logo.jpg">
                            </div>
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

</body>
</html>