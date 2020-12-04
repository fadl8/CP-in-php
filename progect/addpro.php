<?php
/**
 * Created by PhpStorm.
 * User: Mr.F_17
 * Date: 1/29/2019
 * Time: 6:17 PM
 */
?>


<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">المشاريع</h2>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">مشاريع</a>
                        </li>
                        <li class="breadcrumb-item active">اضافة مشروع
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <script>
            function Reset()
            {
                document.getElementById("nameofproject").value =
                document.getElementById("dateofstartproject").value =
                document.getElementById("Diteals").value = '';
            }
        </script>
        <div class="content-body"><!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">اضافة مشروع</h4>
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
                                            <h4 class="form-section">المشاريع</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nameofproject">مسمئ المشروع</label>
                                                        <input type="text" id="nameofproject" class="form-control" placeholder="مسمئ المشروع" name="fname">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="dateofstartproject">التاريخ البدء في المشروع</label>
                                                        <input type="date" id="dateofstartproject" class="form-control" name="date">
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
                                                        <textarea id="Diteals" rows="5" class="form-control" name="comment" placeholder="الوصف"></textarea>
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
            <!-- Basic form layout section end -->
        </div>
    </div>
</div>
