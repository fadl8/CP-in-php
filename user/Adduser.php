<?php
/**
 * Created by PhpStorm.
 * User: Mr.F_17
 * Date: 1/27/2019
 * Time: 12:02 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Mr.F_17
 * Date: 1/26/2019
 * Time: 10:55 AM
 */
?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">المستخدمين </h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">المستخدمين</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">اضافة المستخدم</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">اضافة مستخدم</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">

                                    <form class="form">
                                        <div class="form-body">
                                            <h4 class="form-section">معلومات عامة</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fullname">الاسم الكامل</label>
                                                        <input type="text" id="fullname" class="form-control" placeholder="الاسم الكامل" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="work">العمل</label>
                                                        <input type="text" id="work" class="form-control" placeholder="العمل " name="fname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">البريد الاكتروني</label>
                                                        <input type="text" id="email" class="form-control" placeholder="البريد الاكتروني" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phonenumber">رقم الهانف</label>
                                                        <input type="text" id="phonenumber" class="form-control" placeholder="رقم الهانف" name="fname">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section">معلومات الحساب</h4>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="username">اسم المستخدم</label>
                                                        <input type="text" id="username" class="form-control" placeholder="اسم المستخدم" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="pass">كلمه السر</label>
                                                        <input type="text" id="pass" class="form-control" placeholder="كلمه السر" name="fname">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button onclick="Reset()" type="button" class="btn btn-warning  float-lg-right">
                                                    <i class="icon-cross2"></i> الغاء
                                                </button>
                                                <button type="submit" class="btn btn-primary mr-1 float-lg-right">
                                                    <i class="icon-check2"></i> حفظ
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <script>
                 function Reset()
                 {
                     document.getElementById("fullname").value =
                     document.getElementById("work").value =
                     document.getElementById("email").value  =
                     document.getElementById("phonenumber").value =
                     document.getElementById("username").value =
                     document.getElementById("pass").value = "";
                 }
             </script>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
