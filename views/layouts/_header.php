<header id="header-top">

    <div id="header-top-container" class="max-width-container font-label">

        <div class="header-top-content-container">
            <div class="header-top-content">
                <a class="header-top-label-link" id="header-top-label-link-home" href="#">Trường Đại học Thủy Lợi-TLU</a>
            </div>
        </div>
        
        <div class="header-top-content-container">
            <div class="header-top-content">
                <div class="header-top-content-social">
                    <a id="header-btn-page-login" class="header-top-label-link" href="#">Login</a>
                    <div id="header-login-page">
                        <form id="header-login-form" action="" method="POST">
                            <div id="header-login-form-btn-close"><i class="fas fa-times"></i></div>
                            <div id="header-login-form-title-container">User Login</div>
                            <div id="header-login-form-input-container">
                                <div id="header-login-username-container">
                                    <p>Username: </p>
                                    <input type="text">
                                </div>
                                <div id="header-login-password-container">
                                    <p>Password: </p>
                                    <input type="text">
                                </div>
                                <div id="header-login-submit-container">
                                    <input type="submit" value="Resign">
                                    <input type="submit" value="Login" style="background-color:#0D569E; color: #ffffff;" onmouseover="this.style.backgroundColor='#3792ED'; this.style.color='#000000'" onmouseout="this.style.backgroundColor='#0D569E'; this.style.color='#ffffff';">
                                </div>
                                <div id="header-login-support-container">
                                    <p>You don't remember your password ?</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-top-content-social">
                    <a id="header-btn-page-resign" class="header-top-label-link" href="#">Register</a>
                    <div id="header-register-page">
                        <form id="header-register-form" action="" method="POST">
                            <div id="header-register-form-btn-close"><i class="fas fa-times"></i></div>
                            <div id="header-register-form-title-container">User Register</div>
                            <div id="header-register-form-input-container">
                                <div id="header-register-username-container">
                                    <p>Email: </p>
                                    <input type="text">
                                    <p class="header-register-note">* abc@.xyz.com</p>
                                </div>
                                <div id="header-register-password-container">
                                    <p>Password: </p>
                                    <input type="text">
                                    <p class="header-register-note">* 8-16 character</p>
                                </div>
                                <div id="header-register-password-container">
                                    <p>Repeat Password: </p>
                                    <input type="text">
                                    <p class="header-register-note"></p>
                                </div>
                                <div id="header-register-submit-container">
                                    <input style="visibility: hidden;">
                                    <input type="submit" value="Resign" style="background-color:#0D569E; color: #ffffff;" onmouseover="this.style.backgroundColor='#3792ED'; this.style.color='#000000'" onmouseout="this.style.backgroundColor='#0D569E'; this.style.color='#ffffff';">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-top-content-social">
                    <p>Ngôn ngữ:</p>
                    <ul id="header-top-content-ul-langue">
                        <?php
                            openMySQLConnection($conn);
                            $langs = getAllLanguage();
                            closeMySQLConnection($conn);

                            foreach($langs as $row){
                        ?>
                        <li class="header-top-content-li-langue"><a href=<?php echo $row[3];?>><img src=<?php echo BASE_URL . "/assets/". $row[2];?>></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-top-content-container">
            <div class="header-top-content">
                <input type="text" placeholder="Tìm kiếm">
                <input type="submit" value="Tìm">
            </div>
        </div>
    
    </div>

</header>

<header id="header-bottom">

    <div id="header-bottom-logo-container">
        <div id="header-bottom-logo-img-container" class="max-width-container">
            <a href="#"><img style="max-width: 100%;" src="./assets/images/logo.jpg"></a>
        </div>
    </div>

    <div id="header-bottom-menu">
        <div id="header-bottom-menu-container" class="max-width-container">
            <ul id="header-bottom-menu-ul">
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Trang chủ</div></a>
                </li>
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Giới thiệu</div></a>
                    <div class="header-bottom-menudropdown-container">
                        <ul id="header-bottom-menudropdown-ul">
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Logo Khoa CNTT</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Lời chào mừng</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Tổ chức</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Hợp tác liên kết</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Nghiên cứu khoa học</div></a>
                    <div class="header-bottom-menudropdown-container">
                        <ul id="header-bottom-menudropdown-ul">
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Các đề tài, dự án</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Thông tin seminar</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Công trình công bố</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Các phòng thí nghiệm</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Đào tạo</div></a>
                    <div class="header-bottom-menudropdown-container">
                        <ul id="header-bottom-menudropdown-ul">
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Đào tạo đại học</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Đào tạo sau đại học</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Chuẩn đầu ra</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Định hướng ngành nghề</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Mô hình đào tạo</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Đề cương môn học</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Bộ môn trung tâm</div></a>
                    <div class="header-bottom-menudropdown-container">
                        <ul id="header-bottom-menudropdown-ul">
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">CN phần mềm</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Hệ thống thông tin</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Khoa học máy tính</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Kĩ thuật máy tính và mạng</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Toán học</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Tin học và kĩ thuật tính toán</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Trung tâm tin học</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Sinh viên</div></a>
                    <div class="header-bottom-menudropdown-container">
                        <ul id="header-bottom-menudropdown-ul">
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Tài liệu sinh viên</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Tổ tư vấn học tập</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Biểu mẫu ĐATN</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Luận văn tốt nghiệp</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Tin tức</div></a>
                    <div class="header-bottom-menudropdown-container">
                        <ul id="header-bottom-menudropdown-ul">
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Sự kiện</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">CSE trên báo</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-bottom-menu-li">
                    <a href="#"><div class="header-bottom-menu-content-container font-label">Thông báo</div></a>
                    <div class="header-bottom-menudropdown-container">
                        <ul id="header-bottom-menudropdown-ul">
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Thông báo</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">TB Đào tạo</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Nghiên cứu khoa học</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Tuyển dụng</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Học bổng</div></a></li>
                            <li class="header-bottom-menudropdown-li"><a href="#"><div class="header-bottom-menudropdown-content-container font-label">Thong báo khác</div></a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-bottom-menu-li"><a href="#"><div class="header-bottom-menu-content-container font-label">Liên hệ</div></a></li>
            </ul>
        </div>
    </div>

</header>

<!-- JS -->
<script type="text/javascript" src="./assets/js/login.js"></script>
<script type="text/javascript" src="./assets/js/resign.js"></script>