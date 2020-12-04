<?php
/**
 * Created by PhpStorm.
 * User: Mr.F_17
 * Date: 1/26/2019
 * Time: 10:50 AM
 */
?>
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="hidden"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">

        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class=" nav-item">
                <a href="index.php"><i class="icon-home3"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">لوحه التحكم</span>
                </a>
            </li>

            <li class=" navigation-header"><span data-i18n="nav.category.support">العقارات</span>
                <i data-toggle="tooltip" data-placement="left" data-original-title="العقارات"
                   class="icon-ellipsis icon-ellipsis"></i>
            </li>
            <li class=" nav-item">
                <a href="AddAq.php"><i class="icon-file-add"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">أَضافه عقار</span>
                </a>

            </li>
            <li class=" nav-item">
                <a href="viewAq.php"><i class="icon-android-funnel"></i>
                    <span data-i18n="nav.menu_levels.main" class="menu-title">عرض العقار</span>
                    <span class="tag tag tag-primary tag-pill float-xs-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="viewAq.php" data-i18n="nav.menu_levels.second_level" class="menu-item">الكل</a>
                    </li>

                    <li>
                        <a href="" data-i18n="nav.menu_levels.second_level" class="menu-item">فلل</a>
                    </li>
                    <li>
                        <a href="" data-i18n="nav.menu_levels.second_level" class="menu-item">اراضي</a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header"><span data-i18n="nav.category.support">مشاريع قيد العمل</span>
                <i data-toggle="tooltip" data-placement="left" data-original-title="مشاريع قيد العمل"
                   class="icon-ellipsis icon-ellipsis"></i>
            </li>
            <li class=" nav-item">
                <a href="addpro.php"><i class="icon-file-add"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">أَضافه مشروع</span>
                </a>

            </li>
            <li class=" nav-item">
                <a href="viewproject.php"><i class="icon-android-funnel"></i>
                    <span data-i18n="nav.menu_levels.main" class="menu-title">عرض المشاريع</span>
                </a>
            </li>


            <!--
            this for cars

                done by F8 -->

            <li class=" navigation-header"><span data-i18n="nav.category.support">سيارات</span>
                <i data-toggle="tooltip" data-placement="left" data-original-title="سيارات" class="icon-ellipsis icon-ellipsis"></i>
            </li>
            <li class=" nav-item">
                <a href="Addcar.php"><i class="icon-file-add"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">أَضافه سياره</span>
                </a>

            </li>

            <li class=" nav-item">
                <a href="viewcar.php"><i class="icon-car"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">عرض السيارات</span>
                </a>
            </li>

            <!--
               the user share in website
              done by F8
               -->

            <li class=" navigation-header"><span data-i18n="nav.category.support">الخدمات</span>
                <i data-toggle="tooltip" data-placement="left" data-original-title="مشاريع قيد العمل"
                   class="icon-ellipsis icon-ellipsis"></i>
            </li>
            <li class=" nav-item">
                <a href="addserv.php"><i class="icon-file-add"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">أَضافه خدمه</span>
                </a>

            </li>
            <li class=" nav-item">
                <a href="viewserv.php"><i class="icon-android-funnel"></i>
                    <span data-i18n="nav.menu_levels.main" class="menu-title">عرض الخدمات</span>
                </a>
            </li>

            <li class=" navigation-header"><span data-i18n="nav.category.support"></span>
                <i data-toggle="tooltip" data-placement="left" data-original-title="" class="icon-ellipsis icon-ellipsis"></i>
            </li>

            <li class=" nav-item">
                <a href="sharelist.php"><i class="icon-newspaper"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">قائمه المشاركين في الاخيار</span>
                </a>
            </li>

            <li class=" navigation-header"><span data-i18n="nav.category.support"></span>
                <i data-toggle="tooltip" data-placement="left" data-original-title=""
                   class="icon-ellipsis icon-ellipsis"></i>
            </li>



            <li class=" nav-item">
                <a href="#"><i class="icon-android-funnel"></i>
                    <span data-i18n="nav.menu_levels.main" class="menu-title">الرسائل</span>
                    <span class="tag tag tag-primary tag-pill float-xs-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="message.php" data-i18n="nav.menu_levels.second_level" class="menu-item">الوارد</a>
                    </li>
                    <li>
                        <a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">مقروئ</a>
                    </li>
                    <li>
                        <a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">المحذوف</a>
                    </li>
                </ul>
            </li>


            <!--
             setting the web site
             done by F8
            -->

            <li class=" navigation-header"><span data-i18n="nav.category.support">اعدادات الموقع</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
            </li>

            <li class=" nav-item">
                <a href="#"><i class="icon-android-funnel"></i>
                    <span data-i18n="nav.menu_levels.main" class="menu-title">المسخدم</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="Adduser.php" data-i18n="nav.menu_levels.second_level" class="menu-item">اضافه</a>
                    </li>
                    <li>
                        <a href="viewuser.php" data-i18n="nav.menu_levels.second_level" class="menu-item">عرض</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
