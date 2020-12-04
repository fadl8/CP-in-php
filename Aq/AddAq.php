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
                <h2 class="content-header-title">العقارات </h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">العقارات</a>
                        </li>
                        <li class="breadcrumb-item active">اضافة عقار
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
                                <h4 class="card-title" id="basic-layout-form">اضافة عقار</h4>
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

                                            <h4 class="form-section">العقار</h4>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="nameofAq">مسمئ العقار</label>
                                                            <input id="nameofAq" type="text" class="form-control" placeholder="مسمئ العقار" name="fname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="stateofAq">حاله العقار</label>
                                                                <select id="stateofAq" name="interested" class="form-control">
                                                                    <option value="none" selected="" disabled="">حاله العقار</option>
                                                                    <option value="design">design</option>
                                                                    <option value="development">development</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="typeofAq"> نوع العقار</label>
                                                            <select id="typeofAq" name="interested" class="form-control">
                                                                <option value="none" selected="" disabled=""> نوع العقار</option>
                                                                <option value="design">design</option>
                                                                <option value="development">development</option>
                                                                <option value="illustration">illustration</option>
                                                                <option value="branding">branding</option>
                                                                <option value="video">video</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="area">المساحه</label>
                                                            <input type="text" id="area" class="form-control" placeholder="المساحه" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="areatype">وحده المساحه</label>
                                                            <select id="areatype" name="interested" class="form-control">
                                                                <option value="none" selected="" disabled="">وحده المساحه</option>
                                                                <option value="design">design</option>
                                                                <option value="development">development</option>
                                                                <option value="illustration">illustration</option>
                                                                <option value="branding">branding</option>
                                                                <option value="video">video</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="price">السعر</label>
                                                            <input type="text" id="price" class="form-control" placeholder="السعر" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pricetype">نوع العمله</label>
                                                            <select id="pricetype" name="interested" class="form-control">
                                                                <option value="none" selected="" disabled="">نوع العمله</option>
                                                                <option value="design">design</option>
                                                                <option value="development">development</option>
                                                                <option value="illustration">illustration</option>
                                                                <option value="branding">branding</option>
                                                                <option value="video">video</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section">تفاصبل العقار</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="countfloor">عدد الطوابق</label>
                                                            <input type="text" id="countfloor" class="form-control" placeholder="عدد الطوابق" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="countrooms">عدد الفرف</label>
                                                            <input type="text" id="countrooms" class="form-control" placeholder="عدد الفرف" name="fname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="countlivingrooms">عدد الصالات</label>
                                                            <input type="text" id="countlivingrooms" class="form-control" placeholder="عدد الصالات" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="countbathrooms">عدد الحمامات</label>
                                                            <input type="text" id="countbathrooms" class="form-control" placeholder="عدد الحمامات" name="fname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="numberComm">رقم التواصل</label>
                                                                <input type="text" id="numberComm" class="form-control" placeholder="رقم التواصل" name="fname">
                                                            </div>
                                                        </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>مفروشة</label>
                                                            <div class="input-group">
                                                                <label class="display-inline-block custom-control custom-radio ml-1">
                                                                    <input id="hasfernationer" type="radio" name="customer1" class="custom-control-input">
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

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>النشر في الموقع</label>
                                                                <div class="input-group">
                                                                    <label class="display-inline-block custom-control custom-radio ml-1">
                                                                        <input type="radio" name="pubilsh" class="custom-control-input">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">نعم</span>
                                                                    </label>
                                                                    <label class="display-inline-block custom-control custom-radio">
                                                                        <input type="radio" name="pubilsh" checked="" class="custom-control-input">
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


                                                <h4 class="form-section">العنوان</h4>
                                                <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="country">الدولة</label>
                                                                <select id="country" name="interested" class="form-control">
                                                                    <option value="none" selected="" disabled=""> الدولة</option>
                                                                    <option value="design">Yemen</option>
                                                                    <option value="design">KSE</option>
                                                                    <option value="design"></option>
                                                                    <option value="design">Yemen</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="city">المدينة</label>
                                                                <select id="city" name="interested" class="form-control">
                                                                    <option value="none" selected="" disabled="">المدينة</option>
                                                                    <option value="design">ٍSanaa</option>
                                                                    <option value="development">Aden</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="adress">العنوان</label>
                                                                <input type="text" id="adress" class="form-control" placeholder="العنوان" name="fname">
                                                            </div>
                                                        </div>
                                                </div>


                                                <h4 class="form-section">الوصف</h4>
                                                <div class="form-group">
                                                <textarea id="Diteals" rows="5" class="form-control" name="comment" placeholder="الوصف"></textarea>
                                            </div>
                                                <div class="form-actions">
                                            <button onclick="Reset()" type="button" class="btn btn-warning  float-lg-right">
                                                <i class="icon-cross2"></i> الغاء
                                            </button>
                                            <button type="submit" class="btn btn-primary mr-1 float-lg-right">
                                                <i class="icon-check2"></i> حفظ
                                            </button>
                                        </div>


                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
            <script>
                function Reset_sction_one(){
                    document.getElementById("nameofAq").value =
                    document.getElementById("stateofAq").value =
                    document.getElementById("typeofAq").value =
                    document.getElementById("area").value =
                    document.getElementById("areatype").value =
                    document.getElementById("price").value =
                    document.getElementById("pricetype").value = '';
                }

                function Reset_sction_tow(){
                    document.getElementById("countfloor").value =
                    document.getElementById("countrooms").value =
                    document.getElementById("countlivingrooms").value =
                    document.getElementById("countbathrooms").value =
                    document.getElementById("numberComm").value =
                    document.getElementById("country").value =
                    document.getElementById("city").value =
                    document.getElementById("adress").value =
                    document.getElementById("Diteals").value = '';
                }
            </script>

        </div>
    </div>
</div>

<!--  ////////////////////////////////////////////////////////////////////////////  -->


