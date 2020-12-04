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
                <h2 class="content-header-title">السيارات</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">السيارات</a>
                        </li>
                        <li class="breadcrumb-item active">اضافة سياره
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
                                <h4 class="card-title" id="basic-layout-form">اضافة سياره</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <script>
                                function Reset()
                                {
                                    document.getElementById("showCar").value =
                                    document.getElementById("ModelsCar").value =
                                    document.getElementById("Cartype").value =
                                    document.getElementById("price").value =
                                    document.getElementById("typeofprice").value =
                                    document.getElementById("numbercomm").value =
                                    document.getElementById("Descrption").value ='';
                                }
                            </script>
                            <div class="card-body collapse in">
                                <div class="card-block">

                                    <form class="form">
                                        <div class="form-body">
                                            <h4 class="form-section">السيارات</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="showCar">عنوان العرض</label>
                                                        <input type="text" id="showCar" class="form-control" placeholder="عنوان العرض" name="fname">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">موديل السياره</label>
                                                            <select id="ModelsCar" name="interested" class="form-control">
                                                                <option value="none" selected="" disabled="">موديل السياره</option>
                                                                <option value="design">design</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Cartype">نوع السياره</label>
                                                        <select id="Cartype" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">نوع السياره</option>
                                                            <option value="design">design</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="price">السعر </label>
                                                        <input type="text" id="price" class="form-control" placeholder="السعر" name="fname">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="typeofprice">نوع العملة</label>
                                                        <select id="typeofprice" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">نوع العملة</option>
                                                            <option value="design">دولار</option>
                                                            <option value="design">يمني</option>
                                                            <option value="design">سعودي</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="numbercomm">رقم التواصل </label>
                                                        <input type="text" id="numbercomm" class="form-control" placeholder="رقم التواصل" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label>النشر في الموقع</label>
                                                            <div class="input-group">
                                                                <label class="display-inline-block custom-control custom-radio ml-1">
                                                                    <input type="radio" name="customer1" class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">نعم</span>
                                                                </label>
                                                                <label class="display-inline-block custom-control custom-radio">
                                                                    <input type="radio" name="customer1" checked="" class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">لا</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h4 class="form-section">الصورة الرئيسية</h4>
                                                    <div class="form-group">
                                                        <label>اختيار الصورة</label>
                                                        <label id="projectinput7" class="file center-block">
                                                            <input type="file" id="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section">الصور الفرعية</h4>
                                                    <label>اختيار الصورة</label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="form-section">الوصف</h4>
                                                    <div class="form-group">
                                                        <textarea id="Descrption" rows="5" class="form-control" name="comment" placeholder="الوصف"></textarea>
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
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>