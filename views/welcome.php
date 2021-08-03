<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LIB -->
    <link href=<?php echo BASE_URL . "./lib/fontawesome-free-5.15.3-web/css/all.css" ?> rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/styles.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/menu.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/detail.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/slide.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo BASE_URL . "./assets/css/0/welcome.css" ?>>

    <title>Thông tin seminar</title>
</head>
<body>

    <?php include(PATH_ROOT . '/views/layouts/_header.php'); ?>


    <div id="body">

        <div id="body-content">
            <div id="body-content-container" class="max-width-container">

                <div id="body-title-container" class="font-label">
                    <p><a href="#" class="body-title-text">Giới thiệu</a> &ensp; > &ensp; <a href="#" class="body-title-text">Lời chào mừng</a></p>
                </div>

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

                <div id="body-list-component" class="font-label">

                    <div id="body-component-content">

                        <div id="post-container">
                            
                            <h1>Lời chào mừng</h1>

                            <div id="post-description-container">
                                <p id="post-description">
                                    Xin chào các cô giáo, thầy giáo, anh chị và các bạn ghé thăm trang web của Khoa CNTT!
                                    <br><br>
                                    Năm 2001, lãnh đạo Bộ Nông nghiệp & PTNT, lãnh đạo trường Đại học Thủy lợi khi đó đã nhận ra xu hướng và cơ hội của ngành Công nghệ thông tin (CNTT) trong tương lai, đồng thời cũng do nhu cầu bức thiết về đội ngũ kỹ sư công nghệ thông tin trong ngành và toàn xã hội, khoa CNTT được thành lập ngày 19/11/2001 từ việc sáp nhập Trung tâm tin học và Bộ môn Toán học của trường. 
                                    <br><br>
                                    Kể từ khi thành lập, Khoa CNTT đã phát triển không ngừng. Bước trưởng thành quan trọng nhất được thể hiện qua sự đổi mới, kiện toàn chương trình đào tạo. Bắt đầu từ năm 2007, Khoa đã tập trung thực hiện  việc chuyển đổi toàn bộ chương trình, giáo trình đào tạo, thiết kế theo cùng ngành của trường ĐH Michigan- Hoa kỳ. Riêng các môn Toán được thiết kế dựa vào chương trình đào tạo của học viện Kỹ thuật MIT - Hoa Kỳ. Từ năm 2015, Khoa tạo bước ngoặt cả về nghiên cứu, đào tạo, xây dựng cơ sở vật chất và phát triển đội ngũ. Khoa mở rộng quy mô tuyển sinh cho cả đại học và sau đại học trên 450 chỉ tiêu mỗi năm, với những điểm nhấn quan trọng sau:
                                    <br><br>
                                    <b>Về đội ngũ</b>, Khoa có 60 giảng viên trực tiếp tham gia giảng dạy, trong đó có 20 Tiến sỹ và 12 nghiên cứu sinh với năng lực công bố quốc tế tốt. Phần lớn các Tiến sỹ của Khoa đều tu nghiệp tại nước ngoài có nền khoa học tiên tiến về CNTT, các giảng viên còn lại của Khoa đều có trình độ Thạc sỹ.
                                    <br><br>
                                    <b>Về đào tạo</b>, Khoa có những thay đổi lớn trong thời gian qua về quy mô, chương trình đào tạo có tầm nhìn và đáp ứng yêu cầu thị trường việc làm trong và ngoài nước. Hiện Khoa có 4 ngành đào tạo bậc đại học là Công nghệ thông tin, Hệ thống thông tin, Kỹ thuật phần mềm, Trí tuệ nhân tạo và Khoa học dữ liệu; một chuyên ngành bậc sau đại học là Công nghệ thông tin. Khoa luôn cập nhật sách và giáo trình mới nhất, đang được nhiều trường đại học uy tín trên thế giới sử dụng, các bài giảng đều cung cấp trực tuyến cho sinh viên. Các chương trình do công ty Samsung toàn cầu, FPT software đầu tư giúp Khoa đào tạo những sinh viên khá có cơ hội việc làm khi còn chưa tốt nghiệp.
                                    <br><br>
                                    <b>Về NCKH và hợp tác quốc tế</b>, Khoa đạt được nhiều thành tích cao, các thầy cô đã công bố trên 160 bài báo khoa học, trong đó chủ yếu là công bố quốc tế và có 47 bài thuộc danh mục SCI/SCIE. Các thầy cô trong Khoa chủ nhiệm và tham gia trên 10 đề tài cấp nhà nước và hàng chục đề tài nghiên cứu khoa học cấp Bộ. Khoa có những hợp tác quốc tế và giao lưu khoa học bền vững với các trường đại học uy tín của Mỹ (Delta University, Arkansas University, Colorado State University), Pháp (Paris 6, IRD, UMMISCO), Trung Quốc (ĐH Thâm Quyến, Viện công nghệ tiên tiến Thâm Quyến, ĐH Khoa học và công nghệ phương Nam), Nhật (JAIST, Nara Women's University), Úc (Griffith University, Deakin University, Monash University) theo các chương trình trao đổi hợp tác nghiên cứu, trao đổi giáo viên và sinh viên.
                                    <br><br>
                                    Mục tiêu của chúng tôi là một tổ chức đào tạo CNTT tầm khu vực. Nhìn về phía trước, Khoa CNTT sẽ tiếp tục là nơi đào tạo uy tín với nền tảng cốt lõi về CNTT, hướng chuyên sâu về khoa học dữ liệu, trí tuệ nhân tạo. Chúng tôi tin tưởng rằng các sinh viên và giảng viên của chúng tôi sẽ là những yếu tố chính của sự thay đổi và giải quyết vấn đề trong thế giới hiện đại,  luôn luôn mở và luôn luôn kết nối này.
                                    <br><br>
                                    Kính mời các quý vị truy cập và khám phá trang web của Khoa chúng tôi, tìm hiểu thêm về các chương trình đào tạo đại học và sau đại học của Khoa, tìm hiểu về các hoạt động nghiên cứu và thành tựu của chúng tôi, tra cứu và xem thông tin giảng viên, sinh viên, và khám phá những kinh nghiệm phong phú của Khoa CNTT với chúng tôi.
                                    <br><br>
                                    <img class="img-post-description" src=<?php echo BASE_URL . "./assets/images/portal/truong-khoa.jpg" ?>>
                                    <br>
                                    Trưởng Khoa Công nghệ thông tin
                                    <br>
                                    <span style="color: #28166F;">PGS. <span><a href=#>TS.  Nguyễn Thanh Tùng</a></span></span>
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

    </div>


    <?php include(PATH_ROOT . '/views/layouts/_footer.php'); ?>

    <!-- JS -->
    <script type="text/javascript" src=<?php echo BASE_URL . "./assets/js/slide.js" ?>></script>
</body>
</html>