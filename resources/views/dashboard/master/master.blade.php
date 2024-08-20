
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    @include('dashboard.include.head')
</head>


<body class="navbar-fixed sidebar-nav fixed-nav">
    @include('dashboard.include.header')
    @include('dashboard.include.sidebar')
    <!-- Main content -->
        <!-- Breadcrumb -->
          <!-- Breadcrumb -->
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">خانه</li>
            <li class="breadcrumb-item"><a href="#">مدیریت</a>
            </li>
            <li class="breadcrumb-item active">داشبرد</li>

            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                    <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;داشبرد</a>
                    <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>
                </div>
            </li>
        </ol>
    @yield('main')
    </main>
           
    @include('dashboard.include.aside')

   @include('dashboard.include.footer')
    <!-- Bootstrap and necessary plugins -->
 @include('dashboard.include.jsfooter')
</body>

</html>
