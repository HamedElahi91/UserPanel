<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بورداش - قالب داشبرد ادمین</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo UP_ASSETS_URL ?>media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?php echo UP_ASSETS_URL ?>vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo UP_ASSETS_URL ?>css/app.min.css" type="text/css">
</head>
<body>

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- begin::header -->
<div class="header">

    <div>
        <ul class="navbar-nav">

            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link" title="Hide navigation">
                    <i data-feather="arrow-left"></i>
                </a>
            </li>
            <li class="nav-item navigation-toggler mobile-toggler">
                <a href="#" class="nav-link" title="Show navigation">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->

            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ایجاد</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">کاربر</a>
                    <a href="#" class="dropdown-item">دسته‌بندی</a>
                    <a href="#" class="dropdown-item">محصول</a>
                    <a href="#" class="dropdown-item">گزارش</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">اپ ها</a>
                <div class="dropdown-menu dropdown-menu-big dropdown-menu-right">
                    <div class="p-3">
                        <div class="row row-xs">
                            <div class="col-6">
                                <a href="chat.html">
                                    <div class="p-3 border-radius-1 border text-center mb-3">
                                        <i class="width-23 height-23" data-feather="message-circle"></i>
                                        <div class="mt-2">چت</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="inbox.html">
                                    <div class="p-3 border-radius-1 border text-center mb-3">
                                        <i class="width-23 height-23" data-feather="mail"></i>
                                        <div class="mt-2">ایمیل</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="app-todo.html">
                                    <div class="p-3 border-radius-1 border text-center">
                                        <i class="width-23 height-23" data-feather="check-circle"></i>
                                        <div class="mt-2">تو دو</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="file-manager.html">
                                    <div class="p-3 border-radius-1 border text-center">
                                        <i class="width-23 height-23" data-feather="file"></i>
                                        <div class="mt-2">فایل منیجر</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
    </div>

    <div>
        <ul class="navbar-nav">

            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img width="18" class="mr-2" src="<?php echo UP_ASSETS_URL ?>media/image/flags/261-china.png" alt="flag"> چین
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <img width="18" src="<?php echo UP_ASSETS_URL ?>/media/image/flags/003-tanzania.png" class="mr-2" alt="flag">
                        تانزانیا
                    </a>
                    <a href="#" class="dropdown-item">
                        <img width="18" src="<?php echo UP_ASSETS_URL ?>/media/image/flags/262-united-kingdom.png" class="mr-2"
                             alt="flag"> انگلستان
                    </a>
                    <a href="#" class="dropdown-item">
                        <img width="18" src="<?php echo UP_ASSETS_URL ?>/media/image/flags/013-tunisia.png" class="mr-2" alt="flag">
                        تونس
                    </a>
                    <a href="#" class="dropdown-item">
                        <img width="18" src="<?php echo UP_ASSETS_URL ?>/media/image/flags/044-spain.png" class="mr-2" alt="flag"> اسپانیا
                    </a>
                </div>
            </li>

            <!-- begin::header search -->
            <li class="nav-item">
                <a href="#" class="nav-link" title="جست‌و‌جو" data-toggle="dropdown">
                    <i data-feather="search"></i>
                </a>
                <div class="dropdown-menu p-2 dropdown-menu-right">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو">
                            <div class="input-group-prepend">
                                <button class="btn" type="button">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- end::header search -->

            <!-- begin::header minimize/maximize -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" title="تمام صفحه" data-toggle="fullscreen">
                    <i class="maximize" data-feather="maximize"></i>
                    <i class="minimize" data-feather="minimize"></i>
                </a>
            </li>
            <!-- end::header minimize/maximize -->

            <!-- begin::header messages dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" title="گفت‌گوها" data-toggle="dropdown">
                    <i data-feather="message-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-big">
                    <div class="p-4 text-center d-flex justify-content-between"
                         data-backround-image="<?php echo UP_ASSETS_URL ?>/media/image/image1.jpg">
                        <h6 class="mb-0">گفت‌گوها</h6>
                        <small class="font-size-11 opacity-7">2 گفت‌گو خوانده نشده</small>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="<?php echo UP_ASSETS_URL ?>/media/image/user/man_avatar1.jpg"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                           علی احمدی
                                            <i title="Mark as read" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">02:30 بعدازظهر</span>
                                            <span>آخرین تغییر رو کامیت کردم</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="<?php echo UP_ASSETS_URL ?>/media/image/user/women_avatar5.jpg"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            صنم صفایی
                                            <i title="Mark as read" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">08:36 بعدازظهر</span>
                                            <span>فایل نهایی ارسال شد؟</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-divider small pb-2 pl-3 pt-3">
                                <span>گفت‌گوهای قدیمی</span>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="<?php echo UP_ASSETS_URL ?>/media/image/user/man_avatar3.jpg"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            احمد رضایی
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">11:09 بعدازظهر</span>
                                            <span>آخرین تغییر رو کامیت کردم</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="<?php echo UP_ASSETS_URL ?>/media/image/user/man_avatar2.jpg"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            الهه جم
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">دیروز</span>
                                            <span>فایل نهایی ارسال شد؟</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <img src="<?php echo UP_ASSETS_URL ?>/media/image/user/women_avatar1.jpg"
                                                 class="rounded-circle" alt="user">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            نیلوفر فروهر
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <div class="small text-muted">
                                            <span class="mr-2">دیروز</span>
                                            <span>فایل نهایی ارسال شد؟</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2 text-right">
                        <ul class="list-inline small">
                            <li class="list-inline-item">
                                <a href="#">علامتگذاری به عنوان خوانده شده</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- end::header messages dropdown -->

            <!-- begin::header notification dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" title="اطلاعیه‌ها" data-toggle="dropdown">
                    <i data-feather="bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-big">
                    <div class="p-4 text-center d-flex justify-content-between"
                         data-backround-image="<?php echo UP_ASSETS_URL ?>/media/image/image1.jpg">
                        <h6 class="mb-0">اطلاعیه‌ها</h6>
                        <small class="font-size-11 opacity-7">1 اطلاعیه خوانده نشده</small>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            ثبت نام خریدار جدید
                                            <i title="Mark as read" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">20 دقیقه قبل</span>
                                    </div>
                                </a>
                            </li>
                            <li class="text-divider small pb-2 pl-3 pt-3">
                                <span>اطلاعیه‌های قبلی</span>
                            </li>
                            <li>
                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                           سفارش جدید دریافت شد
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">45 ثانیه قبل</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                           به سقف مجاز سرور نزدیک شده اید
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">55 ثانیه قبل</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            اپ های دارای بروزسانی
                                            <i title="Mark as unread" data-toggle="tooltip"
                                               class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">دیروز</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2 text-right">
                        <ul class="list-inline small">
                            <li class="list-inline-item">
                                <a href="#">علامتگذاری به عنوان خوانده شده</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- end::header notification dropdown -->

            <!-- begin::user menu -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" title="User menu" data-toggle="dropdown">
                    <i data-feather="settings"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-big">
                    <div class="p-4 text-center d-flex justify-content-between"
                         data-backround-image="<?php echo UP_ASSETS_URL ?>/media/image/image1.jpg">
                        <h6 class="mb-0">تنظیمات</h6>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                    <label class="custom-control-label" for="customSwitch1">مجوز ارسال اطلاعیه</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">پنهان کردن درخواست ها</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                    <label class="custom-control-label" for="customSwitch3">افزایش سرعت انجام دستورات</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                                    <label class="custom-control-label" for="customSwitch4">پنهان کردن منو</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                    <label class="custom-control-label" for="customSwitch5">به خاطرسپاری بازدید</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                    <label class="custom-control-label" for="customSwitch6">فعالسازی تولید گزارش خودکار</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- end::user menu -->
        </ul>

        <!-- begin::mobile header toggler -->
        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="arrow-down"></i>
                </a>
            </li>
        </ul>
        <!-- end::mobile header toggler -->
    </div>

</div>
<!-- end::header -->

<!-- begin::main -->
<div id="main">

    <!-- begin::navigation -->
    <div class="navigation">

      

        <!-- begin::navigation menu -->
        <div class="navigation-menu-body">

            <!-- begin::navigation-logo -->
            <div>
                <div id="navigation-logo">
                    <a href="index.html">
                        <img class="logo" src="<?php echo UP_ASSETS_URL ?>/media/image/logo-F.png" alt="logo">
                        <img class="logo-light" src="<?php echo UP_ASSETS_URL ?>/media/image/logo-light.png" alt="light logo">
                    </a>
                </div>
            </div>
            <!-- end::navigation-logo -->

            <div class="navigation-menu-group">
                <div class="pages" id="custom-pages">
                    <ul>
                        <li class="navigation-divider">
                            <a href="">
                                <i class="fa fa-info-circle"></i>	&nbsp;
                                پیشخوان
                            </a>
                            <ul style="display:none;">
                                <li><a href="/dashboard">پیشخوان</a></li>
                            </ul>
                        </li>
                        <li class="navigation-divider">
                            <a href="">
                                <i class="fa fa-user-o"></i>	&nbsp;
                                پروفایل
                            </a>
                            <ul style="display:none;">
                                <li><a href="/dashboard/profile">پروفایل</a></li>
                            </ul>
                        </li>
                        <li class="navigation-divider">
                            <a href="">
                                <i class="fa fa-database"></i>	&nbsp;
                                کیف پول
                            </a>
                            <ul style="display:none;">
                                <li><a href="/dashboard/wallet">کیف پول</a></li>
                                <li><a href="/dashboard/wallet?action=transactions">تراکنش ها</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end::navigation menu -->

    </div>
    <!-- end::navigation -->

    <!-- begin::main-content -->
    <main class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4><?php echo $current_user->display_name; ?></h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">داشبرد</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">صفحات</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">صفحه خالی</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page-header -->

        <div class="container-fluid">

            <div class="row">
                  <?php include_once  UP_VIEWS . $view; ?>
            </div>

        </div>

        <!-- begin::footer -->
        <footer>
            <div class="container-fluid">

                <div>
                    <nav class="nav">
                        <a href="https://www.google.com" class="nav-link">لیسانس</a>
                        <a href="#" class="nav-link">تغییر لاگ</a>
                        <a href="#" class="nav-link">راهنمایی</a>
                    </nav>
                </div>
            </div>
        </footer>
        <!-- end::footer -->

    </main>
    <!-- end::main-content -->

</div>
<!-- end::main -->

<!-- begin::global scripts -->
<script src="<?php echo UP_ASSETS_URL ?>vendors/bundle.js"></script>
<!-- end::global scripts -->

<!-- begin::custom scripts -->
<script src="<?php echo UP_ASSETS_URL ?>js/custom.js"></script>
<script src="<?php echo UP_ASSETS_URL ?>js/app.min.js"></script>
<!-- end::custom scripts -->

</body>

</html>