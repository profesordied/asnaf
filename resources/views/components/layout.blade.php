<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @isset($title)
            اتاق اصناف نکا - $title
        @else
            سامانه اتاق اصناف شهرستان نکا
        @endisset
    </title>
    @vite(['resources/css/app.css', 'resources/css/fontawesome/all.css'])
    <link rel="stylesheet" href="./css/fontawesome/all.css" />
    <link rel="icon" href="/img/logo.png" />
</head>

<body class="bg-main">
    <!-- start header section -->
    <header class="px-44 shadow-lg">
        <nav class="flex justify-between items-center py-4">
            <div class="flex justify-start items-center gap-10">
                <div>
                    <img src="/img/logo.png" alt="logo" class="w-12 h-12" />
                </div>
                <div class="flex justify-start items-center gap-5">
                    <a href="{{ route('home') }}"
                        class="flex justify-start items-center gap-2 @if(url()->current() == route('home')) text-secondary @else text-slate-800 hover:text-secondary @endif transition-all duration-200">
                        <span class="mt-1"><i class="fa-light fa-home"></i></span>
                        <span>خانه</span>
                    </a>
                    <a href="{{ route('courses') }}"
                        class="flex justify-start items-center gap-2 @if(url()->current() == route('courses')) text-secondary @else text-slate-800 hover:text-secondary @endif transition-all duration-200">
                        <span class="mt-1"><i class="fa-light fa-money-bill"></i></span>
                        <span>خرید دوره</span>
                    </a>
                    <div class="group relative">
                        <a href="{{ route('blogs') }}"
                            class="flex justify-start items-center gap-2 py-6 @if(url()->current() == route('blogs')) text-secondary @else text-slate-800 hover:text-secondary @endif transition-all duration-200">
                            <span class="mt-1"><i class="fa-light fa-book-open"></i></span>
                            <span>مجله</span>
                            <span class="mt-1 text-sm"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul
                            class="absolute top-20 right-0 w-60 flex flex-col gap-4 p-3 bg-slate-200 rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:top-16 transition-all duration-300">
                            <li>
                                <a href="javascript:void(0)"
                                    class="block hover:ps-2 hover:text-secondary transition-all duration-150">دیجیتال
                                    مارکتینگ چیست؟</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="block hover:ps-2 hover:text-secondary transition-all duration-150">زبان بدن
                                    چیست؟ تکنیک های زبان بدن</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="block hover:ps-2 hover:text-secondary transition-all duration-150">خلاصه کتاب
                                    قانون نظام صنفی</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="block hover:ps-2 hover:text-secondary transition-all duration-150">همه مطالب
                                    سایت...</a>
                            </li>
                        </ul>
                    </div>
                    <div class="group relative">
                        <a href="javascript:void(0)"
                            class="flex justify-start items-center gap-2 py-6 text-slate-800 hover:text-secondary transition-all duration-200">
                            <span><i class="fa-light fa-head-side-headphones"></i></span>
                            <span>ارتباط با اصناف</span>
                            <span class="mt-1 text-sm"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul
                            class="absolute top-20 right-0 w-60 flex flex-col gap-4 p-3 bg-slate-200 rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:top-16 transition-all duration-300">
                            <li>
                                <a href="javascript:void(0)"
                                    class="block hover:ps-2 hover:text-secondary transition-all duration-150">درباره ی
                                    ما</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="block hover:ps-2 hover:text-secondary transition-all duration-150">ارتباط با
                                    ما</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="block hover:ps-2 hover:text-secondary transition-all duration-150">منشور
                                    اخلاقی</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center gap-3">
                <a href="./indexs/sign-up.html"
                    class="group flex justify-between items-center gap-2 p-2 hover:text-secondary hover:bg-blue-600 border-[1px] border-secondary rounded-md transition-all duration-150">
                    <span class="text-blue-600 group-hover:text-secondary"><i class="fa-solid fa-user-plus"></i></span>
                    <span>ورود یا ثبت نام</span>
                </a>
                <a href="javascript:void(0)"
                    class="group relative flex justify-between items-center gap-2 p-2 hover:text-secondary hover:bg-blue-600 border-[1px] border-secondary rounded-md transition-all duration-150">
                    <span class="text-blue-600 group-hover:text-secondary"><i
                            class="fa-solid fa-shopping-bag"></i></span>
                    <span>سبد خرید</span>
                    <span
                        class="absolute top-0 left-0 flex justify-center items-center text-sm w-6 h-6 bg-primary text-slate-200 p-2 rounded-full -translate-x-1/2 -translate-y-1/2">0</span>
                </a>
            </div>
        </nav>
    </header>
    <!-- end header section -->

    <section>
        {{ $slot }}
    </section>

    <!-- start footer section -->
    <footer class="px-44 pt-4 pb-1 mt-8 bg-gray-600/20 shadow-xl">
        <div class="grid grid-cols-3">
            <div class="flex flex-col justify-start items-start">
                <ul class="w-16">
                    <li class="w-fit">
                        <a href="javascript:void(0)"
                            class="text-slate-800 hover:text-primary hover:ps-2 transition-all duration-200">اخبار</a>
                    </li>
                    <li class="w-fit">
                        <a href="javascript:void(0)"
                            class="text-slate-800 hover:text-primary hover:ps-2 transition-all duration-200">خرید</a>
                    </li>
                    <li class="w-fit">
                        <a href="javascript:void(0)"
                            class="text-slate-800 hover:text-primary hover:ps-2 transition-all duration-200">درباره
                            ما</a>
                    </li>
                </ul>

                <p class="text-xs mt-4">
                    ©تمام حقوق این وب سایت برای اتاق اصناف شهرستان نکا است و استفاده از
                    مطالب و فیلمها بدون اجازه پیگرد قانونی دارد.
                </p>
            </div>
            <div class="flex justify-center items-center">
                <div>
                    <img src="/img/logo-clean.png" alt="logo" class="w-20 h-20 rounded-full" />
                </div>
            </div>
            <div class="flex flex-col justify-center">
                <ul>
                    <li class="w-fit">
                        <p class="text-slate-800">
                            نکا، بلوار انقلاب، جنب مسجد شهرمیرزادی ها
                        </p>
                    </li>
                    <li class="w-fit">
                        <p class="text-slate-800">09123456789</p>
                    </li>
                    <li class="w-fit">
                        <p class="text-slate-800">example@example.com</p>
                    </li>
                </ul>
                <div class="flex justify-start items-center mt-4">
                    <img src="/img/e-namad.png" alt="e-namad" class="w-16 h-16" />
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer section -->
</body>

</html>
