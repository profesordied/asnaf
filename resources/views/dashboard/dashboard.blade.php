    <!-- modal  -->
    <div class="fixed z-10 inset-0 overflow-y-auto" id="logoutModal">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-md w-full">
                <div class="modal-header px-6 py-4 border-b">
                    <h4>آیا میخواهید خارج شود ؟</h4>
                </div>
                <div class="modal-body px-6 py-4">
                    <p class="text-gray-600">
                        در صورت خروج ، برای دسترسی به پنل باید مجددا وارد شوید
                    </p>
                </div>
                <div class="modal-footer px-6 py-4 border-t">
                    <button class="btn btn-success mr-2" data-dismiss="modal">میمانم</button>
                    <button class="btn btn-danger">خارج میشوم</button>
                </div>
            </div>
        </div>
    </div>

    <!-- end of modal  -->

    <!-- cards  -->
    <section class="py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- card  -->
                <div class="p-2">
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <div class="text-secondary">
                                    <h5>فروش</h5>
                                    <h5 class="mt-4">۳۰ میلیون</h5>
                                </div>
                                <i class="fas fa-shopping-cart text-warning text-3xl"></i>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-gray-100 border-t border-gray-200 text-secondary">
                            <i class="fas fa-sync ml-3"></i>
                            <span>به روز رسانی</span>
                        </div>
                    </div>
                </div>
                <!-- end of card  -->
                <!-- card  -->
                <div class="p-2">
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <div class="text-secondary">
                                    <h5>هزینه</h5>
                                    <h5 class="mt-4">۵ میلیون</h5>
                                </div>
                                <i class="fas fa-money-bill-alt text-success text-3xl"></i>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-gray-100 border-t border-gray-200 text-secondary">
                            <i class="fas fa-sync ml-3"></i>
                            <span>به روز رسانی</span>
                        </div>
                    </div>
                </div>
                <!-- end of card  -->
                <!-- card  -->
                <div class="p-2">
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <div class="text-secondary">
                                    <h5>کاربران</h5>
                                    <h5 class="mt-4">۵۰،۰۰۰</h5>
                                </div>
                                <i class="fas fa-users text-info text-3xl"></i>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-gray-100 border-t border-gray-200 text-secondary">
                            <i class="fas fa-sync ml-3"></i>
                            <span>به روز رسانی</span>
                        </div>
                    </div>
                </div>
                <!-- end of card  -->
                <!-- card  -->
                <div class="p-2">
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <div class="text-secondary">
                                    <h5>بازدید</h5>
                                    <h5 class="mt-4">۱۰،۰۰۰</h5>
                                </div>
                                <i class="fas fa-chart-line text-danger text-3xl"></i>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-gray-100 border-t border-gray-200 text-secondary">
                            <i class="fas fa-sync ml-3"></i>
                            <span>به روز رسانی</span>
                        </div>
                    </div>
                </div>
                <!-- end of card  -->
            </div>
        </div>
    </section>

    <!-- end of cards  -->
    <!-- progress / tasklist  -->
    <section class="py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- progress  -->
                <div class="bg-gray-900 text-white p-4 rounded">
                    <h4 class="mb-4">پروژه ها</h4>
                    <!-- project  -->
                    <h6 class="mb-2 mt-4">کتابخانه آنلاین</h6>
                    <div class="bg-gray-800 rounded h-8">
                        <div class="bg-red-600 h-8 text-center text-white font-bold" style="width: 85%">85%</div>
                    </div>
                    <!-- end of project  -->
                    <!-- project  -->
                    <h6 class="mb-2 mt-4">اپلیکیشن نئون</h6>
                    <div class="bg-gray-800 rounded h-8">
                        <div class="bg-blue-500 h-8 text-center text-white font-bold" style="width: 23%">23%</div>
                    </div>
                    <!-- end of project  -->
                    <!-- project  -->
                    <h6 class="mb-2 mt-4">وب سرویس</h6>
                    <div class="bg-gray-800 rounded h-8">
                        <div class="bg-green-500 h-8 text-center text-white font-bold" style="width: 55%">55%</div>
                    </div>
                    <!-- end of project  -->
                </div>
                <!-- end of progress  -->
                <!-- tasklist  -->
                <div>
                    <h4 class="text-gray-600 p-3 mb-3">تسک ها</h4>
                    <!-- task  -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <div class="flex items-center py-3 px-4 border-b">
                            <input type="checkbox" checked class="mr-2">
                            <div class="flex-1">آماده کردن سمت بک اند</div>
                            <a href="" class="text-green-500" title="ویرایش">
                                <i class="fas fa-edit ml-2"></i>
                            </a>
                            <a href="" class="text-red-500" title="حذف">
                                <i class="fas fa-trash ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end of task  -->
                    <!-- task  -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <div class="flex items-center py-3 px-4 border-b">
                            <input type="checkbox" class="mr-2">
                            <div class="flex-1">آماده کردن سمت بک اند</div>
                            <a href="" class="text-green-500" title="ویرایش">
                                <i class="fas fa-edit ml-2"></i>
                            </a>
                            <a href="" class="text-red-500" title="حذف">
                                <i class="fas fa-trash ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end of task  -->
                    <!-- task  -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <div class="flex items-center py-3 px-4 border-b">
                            <input type="checkbox" checked class="mr-2">
                            <div class="flex-1">آماده کردن سمت بک اند</div>
                            <a href="" class="text-green-500" title="ویرایش">
                                <i class="fas fa-edit ml-2"></i>
                            </a>
                            <a href="" class="text-red-500" title="حذف">
                                <i class="fas fa-trash ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end of task  -->
                </div>
                <!-- end of tasklist  -->
            </div>
        </div>
    </section>

    <!-- end of  progress / tasklist  -->

    <!-- tables  -->
    <section class="py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-5 md:mb-0">
                    <h3 class="text-gray-600 text-center mb-3">پرداختی ها</h3>
                    <table class="table-auto w-full bg-gray-900 text-white table-hover text-center">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">نام</th>
                                <th class="px-4 py-2">مبلغ</th>
                                <th class="px-4 py-2">تاریخ</th>
                                <th class="px-4 py-2">وضعیت</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">محمد</td>
                                <td class="px-4 py-2">5 میلیون</td>
                                <td class="px-4 py-2">10 تیر</td>
                                <td class="px-4 py-2"><span class="badge badge-success">پرداخت شده</span></td>
                            </tr>
                            <!-- More rows... -->
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <ul class="pagination justify-center mt-4">
                        <li class="page-item">
                            <a href="#" class="page-link">&laquo;</a>
                        </li>
                        <!-- More pagination items... -->
                    </ul>
                </div>
                <div>
                    <h3 class="text-gray-600 text-center mb-3">تیکت های اخیر</h3>
                    <table class="table-auto w-full bg-white text-center table-striped">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">نام</th>
                                <th class="px-4 py-2">تاریخ</th>
                                <th class="px-4 py-2">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">محمد</td>
                                <td class="px-4 py-2">10 تیر</td>
                                <td class="px-4 py-2"><button class="btn btn-info btn-sm">پاسخ</button></td>
                            </tr>
                            <!-- More rows... -->
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <ul class="pagination justify-center mt-4">
                        <li class="page-item">
                            <a href="#" class="page-link">&laquo;</a>
                        </li>
                        <!-- More pagination items... -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- end of tables  -->

    <!-- activities - quickpost  -->
    <section class="py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="text-gray-600 mb-4">فعالیت های اخیر</h4>
                    <div class="accordion" id="myaccordion">
                        <!-- Accordion Item 1 -->
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-block btn-light text-right" data-toggle="collapse"
                                    data-target="#collapse1">
                                    <img src="images/p1.jpg" alt="" class="ml-2 rounded-full w-12 h-12" />
                                    محمد یک گفتگوی جدید ایجاد کرد
                                </button>
                            </div>
                            <div class="collapse" id="collapse1" data-parent="#myaccordion">
                                <div class="card-body">
                                    <!-- Card Body Content -->
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Item 2 -->
                        <!-- More accordion items... -->
                    </div>
                </div>
                <div>
                    <div class="card rounded">
                        <div class="card-body">
                            <h5 class="text-gray-600 text-center mb-4">پست جدید</h5>
                            <ul class="list-inline text-center py-3">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fas fa-pencil-alt text-success"></i>
                                        <span class="text-muted">وضعیت</span>
                                    </a>
                                </li>
                                <!-- More list items... -->
                            </ul>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control py-2 mb-3"
                                        placeholder="یه چیزی بنویس ..." />
                                    <button class="btn btn-block text-white bg-blue-500 py-2 mb-5">ارسال</button>
                                </div>
                            </form>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="card">
                                    <i class="far fa-calendar-alt fa-4x text-yellow-500 mx-auto mt-3"></i>
                                    <div class="card-body">
                                        <p class="text-center">سه شنبه 17 تیر</p>
                                    </div>
                                </div>
                                <!-- More card items... -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of activities - quickpost  -->
