<x-dashboard-layout>

    <!-- cards  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 mr-auto">
                    <div class="row pt-md-5 mt-md-2 mb-5">
                        <!-- card  -->
                        <div class="col-lg-3 col-md-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5>فروش</h5>
                                            <h5 class="mt-4">۳۰ میلیون</h5>
                                        </div>
                                        <i class="fas fa-shopping-cart text-warning fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-left">
                                    <i class="fas fa-sync ml-3"></i>
                                    <span>به روز رسانی</span>
                                </div>
                            </div>
                        </div>
                        <!-- end of card  -->
                        <!-- card  -->
                        <div class="col-lg-3 col-md-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5>هزینه</h5>
                                            <h5 class="mt-4">۵ میلیون</h5>
                                        </div>
                                        <i class="fas fa-money-bill-alt text-success fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-left">
                                    <i class="fas fa-sync ml-3"></i>
                                    <span>به روز رسانی</span>
                                </div>
                            </div>
                        </div>
                        <!-- end of card  -->
                        <!-- card  -->
                        <div class="col-lg-3 col-md-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5>کاربران</h5>
                                            <h5 class="mt-4">۵۰،۰۰۰</h5>
                                        </div>
                                        <i class="fas fa-users text-info fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-left">
                                    <i class="fas fa-sync ml-3"></i>
                                    <span>به روز رسانی</span>
                                </div>
                            </div>
                        </div>
                        <!-- end of card  -->
                        <!-- card  -->
                        <div class="col-lg-3 col-md-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-secondary">
                                            <h5>بازدید</h5>
                                            <h5 class="mt-4">۱۰،۰۰۰</h5>
                                        </div>
                                        <i class="fas fa-chart-line text-danger fa-3x"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary text-left">
                                    <i class="fas fa-sync ml-3"></i>
                                    <span>به روز رسانی</span>
                                </div>
                            </div>
                        </div>
                        <!-- end of card  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of cards  -->
    <!-- progress / tasklist  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 mr-auto">
                    <div class="row">
                        <!-- progress  -->
                        <div class="col-lg-12">
                            <div class="bg-dark text-white p-4 rounded">
                                <h4 class="mb-4">دوره ها :</h4>
                                <!-- project  -->
                                <h6 class="mb-2 mt-4">دوره احکام و فقه بازار</h6>
                                <div class="progress" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-danger"
                                        style="width: 85%">
                                        85%
                                    </div>
                                </div>
                                <!-- end of project  -->
                                <!-- project  -->
                                <h6 class="mb-2 mt-4">دوره آموزش املاک</h6>
                                <div class="progress" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-primary"
                                        style="width: 23%">
                                        23%
                                    </div>
                                </div>
                                <!-- end of project  -->
                                <!-- project  -->
                                <h6 class="mb-2 mt-4">خلاصه کلاس نظام صنفی</h6>
                                <div class="progress" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-success"
                                        style="width: 55%">
                                        55%
                                    </div>
                                </div>
                                <!-- end of project  -->
                            </div>
                        </div>
                        <!-- end of progress  -->
                        {{-- <!-- tasklist  -->
                        <div class="col-lg-6">
                            <h4 class="text-muted p-3 mb-3">تسک ها</h4>
                            <!-- task  -->
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 align-content-center task-border">
                                    <div class="col-1">
                                        <input type="checkbox" checked />
                                    </div>
                                    <div class="col-9">آماده کردن سمت بک اند</div>
                                    <div class="col-1">
                                        <a data-toggle="tooltip" data-html="true" data-placement="top"
                                            title="<h6>ویرایش</h6>" href="">
                                            <i class="fas fa-edit fa-lg text-success ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a data-toggle="tooltip" data-html="true" data-placement="top"
                                            title="<h6>حذف</h6>" href="">
                                            <i class="fas fa-trash fa-lg text-danger ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                            </div>
                            <!-- end of task  -->
                            <!-- task  -->
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 align-content-center task-border">
                                    <div class="col-1">
                                        <input type="checkbox" />
                                    </div>
                                    <div class="col-9">آماده کردن سمت بک اند</div>
                                    <div class="col-1">
                                        <a data-toggle="tooltip" data-html="true" data-placement="top"
                                            title="<h6>ویرایش</h6>" href="">
                                            <i class="fas fa-edit fa-lg text-success ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a data-toggle="tooltip" data-html="true" data-placement="top"
                                            title="<h6>حذف</h6>" href="">
                                            <i class="fas fa-trash fa-lg text-danger ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                            </div>
                            <!-- end of task  -->
                            <!-- task  -->
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 align-content-center task-border">
                                    <div class="col-1">
                                        <input type="checkbox" checked />
                                    </div>
                                    <div class="col-9">آماده کردن سمت بک اند</div>
                                    <div class="col-1">
                                        <a data-toggle="tooltip" data-html="true" data-placement="top"
                                            title="<h6>ویرایش</h6>" href="">
                                            <i class="fas fa-edit fa-lg text-success ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a data-toggle="tooltip" data-html="true" data-placement="top"
                                            title="<h6>حذف</h6>" href="">
                                            <i class="fas fa-trash fa-lg text-danger ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                            </div>
                            <!-- end of task  -->
                        </div>
                        <!-- end of tasklist  --> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of  progress / tasklist  -->

    <!-- tables  -->
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 mr-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <h3 class="text-muted text-center mb-3">پرداختی ها</h3>
                            <table class="table table-dark table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>مبلغ</th>
                                        <th>تاریخ</th>
                                        <th>وضعیت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>5 میلیون</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <span class="badge w-75 py-2 badge-success">پرداخت شده</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>5 میلیون</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <span class="badge w-75 py-2 badge-danger">رد شده</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>5 میلیون</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <span class="badge w-75 py-2 badge-warning">انتظار</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>5 میلیون</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <span class="badge w-75 py-2 badge-success">پرداخت شده</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- pagination  -->
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">&laquo;</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">2</a>
                                </li>
                                <li class="page-item active">
                                    <a href="" class="page-link py-2 px-3">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">&raquo;</a>
                                </li>
                            </ul>
                            <!-- end of pagination  -->
                        </div>
                        <div class="col-lg-6">
                            <h3 class="text-muted text-center mb-3">تیکت های اخیر</h3>
                            <table class="table table-striped text-center bg-light">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>تاریخ</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">پاسخ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">پاسخ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">پاسخ</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>محمد</td>
                                        <td>10 تیر</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">پاسخ</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- pagination  -->
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">&laquo;</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">2</a>
                                </li>
                                <li class="page-item active">
                                    <a href="" class="page-link py-2 px-3">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="" class="page-link py-2 px-3">&raquo;</a>
                                </li>
                            </ul>
                            <!-- end of pagination  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of tables  -->

    <!-- activities - quickpost  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 mr-auto">
                    <div class="row">
                        <div class="col-lg-7">
                            <h4 class="text-muted mb-4">فعالیت های اخیر</h4>
                            <div id="myaccordion">
                                <di class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block btn-light text-right" data-toggle="collapse"
                                            data-target="#collapse1">
                                            <img src="/img/p1.jpg" alt="" class="ml-2 rounded"
                                                style="width: 50px; height: 50px" />
                                            محمد یک گفتگوی جدید ایجاد کرد
                                        </button>
                                    </div>
                                    <div class="collapse" data-parent="#myaccordion" id="collapse1">
                                        <div class="card-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت
                                            و سه درصد گذشته حال و آینده
                                        </div>
                                    </div>
                                </di>
                                <di class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block btn-light text-right" data-toggle="collapse"
                                            data-target="#collapse2">
                                            <img src="/img/p2.jpg" alt="" class="ml-2 rounded"
                                                style="width: 50px; height: 50px" />
                                            رضا یک گفتگوی جدید ایجاد کرد
                                        </button>
                                    </div>
                                    <div class="collapse" data-parent="#myaccordion" id="collapse2">
                                        <div class="card-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت
                                            و سه درصد گذشته حال و آینده
                                        </div>
                                    </div>
                                </di>
                                <di class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block btn-light text-right" data-toggle="collapse"
                                            data-target="#collapse3">
                                            <img src="/img/p2.jpg" alt="" class="ml-2 rounded"
                                                style="width: 50px; height: 50px" />
                                            پژمان یک گفتگوی جدید ایجاد کرد
                                        </button>
                                    </div>
                                    <div class="collapse" data-parent="#myaccordion" id="collapse3">
                                        <div class="card-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت
                                            و سه درصد گذشته حال و آینده
                                        </div>
                                    </div>
                                </di>
                                <di class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block btn-light text-right" data-toggle="collapse"
                                            data-target="#collapse4">
                                            <img src="/img/p2.jpg" alt="" class="ml-2 rounded"
                                                style="width: 50px; height: 50px" />
                                            رضا یک گفتگوی جدید ایجاد کرد
                                        </button>
                                    </div>
                                    <div class="collapse" data-parent="#myaccordion" id="collapse4">
                                        <div class="card-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت
                                            و سه درصد گذشته حال و آینده
                                        </div>
                                    </div>
                                </di>
                                <di class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block btn-light text-right" data-toggle="collapse"
                                            data-target="#collapse5">
                                            <img src="/img/p2.jpg" alt="" class="ml-2 rounded"
                                                style="width: 50px; height: 50px" />
                                            رضا یک گفتگوی جدید ایجاد کرد
                                        </button>
                                    </div>
                                    <div class="collapse" data-parent="#myaccordion" id="collapse5">
                                        <div class="card-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت
                                            و سه درصد گذشته حال و آینده
                                        </div>
                                    </div>
                                </di>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-5">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h5 class="text-muted text-center mb-4">پست جدید</h5>
                                    <ul class="list-inline text-center py-3">
                                        <li class="list-inline-item">
                                            <a href="">
                                                <i class="fas fa-pencil-alt text-success"></i>
                                                <span class="h6 text-muted">وضعیت</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <a href="">
                                                <i class="fas fa-camera text-info"></i>
                                                <span class="h6 text-muted">تصویر</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="">
                                                <i class="fas fa-map-marker text-danger"></i>
                                                <span class="h6 text-muted">مکان</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control py-2 mb-3"
                                                placeholder="یه چیزی بنویس ..." />
                                            <button class="btn btn-block text-light bg-info py-2 mb-5">
                                                ارسال
                                            </button>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card">
                                                <i
                                                    class="far fa-calendar-alt fa-4x text-warning d-block py-3 m-auto"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center">سه شنبه 17 تیر</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card">
                                                <i class="far fa-clock fa-4x text-warning d-block py-3 m-auto"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center">9:30 صبح</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of activities - quickpost  -->
</x-dashboard-layout>
