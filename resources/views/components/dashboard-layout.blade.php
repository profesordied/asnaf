<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <title>داشبورد</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="./css/fontawesome/all.css" />
    <link rel="icon" href="/img/logo.png" />
</head>

<body>
    <!-- Navigation  -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler mb-2 bg-light" data-toggle="collapse" data-target="#mynav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="mynav">
            <div class="container-fluid">
                <div class="flex">
                    <!-- sidebar  -->
                    <div class="flex-none w-64 lg:w-1/4 xl:w-2/12 fixed top-0">
                        <a href="" class="block text-white text-center mx-auto py-3 mb-4 border-b">نئون</a>
                        <div class="border-b pb-3">
                            <img src="./images/profile.jpg" class="rounded-full ml-3 w-12" alt="" />
                            <a class="text-white" href="">محمد سیدآقایی</a>
                        </div>
                        <ul class="list-none mt-4">
                            <li class="current">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-home fa-lg ml-3"></i>داشبورد
                                </a>
                            </li>
                            <li class="sidebar-link">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-user fa-lg ml-3"></i>پروفایل
                                </a>
                            </li>
                            <li class="sidebar-link">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-envelope fa-lg ml-3"></i>پیام ها
                                </a>
                            </li>
                            <li class="sidebar-link">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-shopping-cart fa-lg ml-3"></i>فروش
                                </a>
                            </li>
                            <li class="sidebar-link">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-chart-line fa-lg ml-3"></i>تحلیل
                                </a>
                            </li>
                            <li class="sidebar-link">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-chart-bar fa-lg ml-3"></i>نمودار ها
                                </a>
                            </li>
                            <li class="sidebar-link">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-table fa-lg ml-3"></i> جدول ها
                                </a>
                            </li>
                            <li class="sidebar-link">
                                <a href="" class="text-white py-3 mb-2 block">
                                    <i class="fas fa-wrench fa-lg ml-3"></i> تنظیمات
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- End of sidebar  -->
                </div>
            </div>
        </div>
    </nav>

    <!-- End of sidebar  -->

    {{ $slot }}

    <!-- footer  -->
    <footer class="bg-gray-200">
        <div class="container mx-auto py-5">
            <div class="md:flex md:justify-between">
                <div class="md:w-1/2 md:text-center">
                    <ul class="list-none md:inline-block">
                        <li class="inline-block mr-4">
                            <a href="" class="text-gray-700">درباره ما</a>
                        </li>
                        <li class="inline-block mr-4">
                            <a href="" class="text-gray-700">پشتیبانی</a>
                        </li>
                        <li class="inline-block mr-4">
                            <a href="" class="text-gray-700">وبلاگ</a>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 md:text-center mt-4 md:mt-0">
                    <p class="text-gray-700">
                        ساخته شده با <i class="fas fa-heart text-danger"></i> توسط نئون
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- end of footer  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="scripts/jquery-3.3.1.slim.min.js"></script>
    <script src="scripts/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>
