<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title> Responsiive Admin Dashboard</title>-->
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        
        <!-- Boxicons CDN Link -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <nav class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <a href="/" ><span class="logo_name">Admin</span></a>
        </div>
        <ul class="nav nav-list">
            <li><a href="{{ route('speciality.index') }}" class="spe-btn">{{__('speciality')}}</a></li>
            <li><a href="#" class="te-btn">{{__('teacher')}}
                <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="te-show">
                    <li><a href="#">{{__('create new') ." " .__('teacher')}}</a></li>
                    <li><a href="#">{{__('list')}} </a></li>
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
                @include('partials/language_switcher')
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

