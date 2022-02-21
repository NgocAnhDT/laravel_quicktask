<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title> Responsiive Admin Dashboard</title>-->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <!-- Boxicons CDN Link -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <nav class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Admin</span>
        </div>
        <ul class="nav nav-list">
            <li><a href="#" class="spe-btn">Khoa</a></li>
            <li><a href="#" class="te-btn">Giáo viên
                <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="te-show">
                    <li><a href="#">Thêm mới giáo viên</a></li>
                    <li><a href="#">Danh sách giáo viên</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="localization">
            
            </div>
        </nav>

        <div class="home-content">
            @yield('content')
        </div>
    </section>

    <script>
        $('.te-btn').click(function(){
            $('nav ul .te-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
</body>
</html>

