<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-chat.html" class="menu">
                        <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Post </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-crud-data-list.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-crud-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-users-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-users-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-users-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-profile-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-profile-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-profile-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wizards <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-wizard-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-wizard-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-wizard-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-blog-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-blog-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-blog-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Pricing <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-pricing-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-pricing-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Invoice <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-invoice-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-invoice-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-faq-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-faq-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-faq-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-login.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-register.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-error-page.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-update-profile.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-change-password.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Grid <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-regular-table.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-datatable.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Datatable</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-accordion.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-button.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-modal.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Modal </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-alert.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-progress-bar.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-tooltip.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dropdown.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-toast.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Toast </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-typography.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-loading-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-regular-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-datepicker.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-select2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Select2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-file-upload.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-wysiwyg-editor.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wysiwyg Editor </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-validation.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-chart.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-slider.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-image-zoom.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="index.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Menu Layout <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="index.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-file-manager.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-point-of-sale.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                            <div class="side-menu__title"> Point of Sale </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-chat.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                            <div class="side-menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-post.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                            <div class="side-menu__title"> Post </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                            <div class="side-menu__title"> Crud <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-crud-data-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-crud-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title"> Users <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                            <div class="side-menu__title"> Profile <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-profile-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-profile-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-profile-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                            <div class="side-menu__title"> Pages <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Wizards <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-wizard-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-wizard-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-wizard-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Blog <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-blog-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-blog-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-blog-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Pricing <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-pricing-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-pricing-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Invoice <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-invoice-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-invoice-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> FAQ <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-faq-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-faq-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-faq-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-login.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-register.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-error-page.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-update-profile.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-change-password.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Components <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Grid <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-regular-table.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-datatable.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Datatable</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-accordion.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-button.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-modal.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Modal </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-alert.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-progress-bar.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-tooltip.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Tooltip </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-dropdown.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Dropdown </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-toast.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Toast </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-typography.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Typography </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Icon </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-loading-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Loading Icon </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                            <div class="side-menu__title"> Forms <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-regular-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Regular Form </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-datepicker.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Datepicker </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-select2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Select2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-file-upload.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-wysiwyg-editor.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Wysiwyg Editor </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-validation.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> Widgets <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-chart.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-slider.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-image-zoom.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                            <i data-feather="search" class="search__icon"></i> 
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center">
                                        <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                        <div class="ml-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Users</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        </div>
                                        <div class="ml-3">Angelina Jolie</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">angelinajolie@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                        </div>
                                        <div class="ml-3">Johnny Depp</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johnnydepp@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-3">Russell Crowe</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">russellcrowe@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                        </div>
                                        <div class="ml-3">Al Pacino</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                                    </div>
                                    <div class="ml-3">Nike Tanjun</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                                    </div>
                                    <div class="ml-3">Sony Master Series A9G</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown relative mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                        <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                            <div class="notification-content__box dropdown-box__content box">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content box bg-theme-38 text-white">
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">Angelina Jolie</div>
                                    <div class="text-xs text-theme-41">Software Engineer</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    General Report
                                </h2>
                                <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">4.510</div>
                                            <div class="text-base text-gray-600 mt-1">Item Sales</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="credit-card" class="report-box__icon text-theme-11"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">3.521</div>
                                            <div class="text-base text-gray-600 mt-1">New Orders</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
                                            <div class="text-base text-gray-600 mt-1">Total Products</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">152.000</div>
                                            <div class="text-base text-gray-600 mt-1">Unique Visitor</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: General Report -->
                        <!-- BEGIN: Sales Report -->
                        <div class="col-span-12 lg:col-span-6 mt-8">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Sales Report
                                </h2>
                                <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700">
                                    <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                                    <input type="text" data-daterange="true" class="datepicker input w-full sm:w-56 box pl-10">
                                </div>
                            </div>
                            <div class="intro-y box p-5 mt-12 sm:mt-5">
                                <div class="flex flex-col xl:flex-row xl:items-center">
                                    <div class="flex">
                                        <div>
                                            <div class="text-theme-20 text-lg xl:text-xl font-bold">$15,000</div>
                                            <div class="text-gray-600">This Month</div>
                                        </div>
                                        <div class="w-px h-12 border border-r border-dashed border-gray-300 mx-4 xl:mx-6"></div>
                                        <div>
                                            <div class="text-gray-600 text-lg xl:text-xl font-medium">$10,000</div>
                                            <div class="text-gray-600">Last Month</div>
                                        </div>
                                    </div>
                                    <div class="dropdown relative xl:ml-auto mt-5 xl:mt-0">
                                        <button class="dropdown-toggle button font-normal border text-white relative flex items-center text-gray-700"> Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                        <div class="dropdown-box mt-10 absolute w-40 top-0 xl:right-0 z-20">
                                            <div class="dropdown-box__content box p-2 overflow-y-auto h-32"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">PC & Laptop</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Smartphone</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Electronic</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Photography</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Sport</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="report-chart">
                                    <canvas id="report-line-chart" height="160" class="mt-6"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- END: Sales Report -->
                        <!-- BEGIN: Weekly Top Seller -->
                        <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Weekly Top Seller
                                </h2>
                                <a href="" class="ml-auto text-theme-1 truncate">See all</a> 
                            </div>
                            <div class="intro-y box p-5 mt-5">
                                <canvas class="mt-3" id="report-pie-chart" height="280"></canvas>
                                <div class="mt-8">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                        <span class="truncate">17 - 30 Years old</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">62%</span> 
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                        <span class="truncate">31 - 50 Years old</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">33%</span> 
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                        <span class="truncate">>= 50 Years old</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">10%</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Weekly Top Seller -->
                        <!-- BEGIN: Sales Report -->
                        <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Sales Report
                                </h2>
                                <a href="" class="ml-auto text-theme-1 truncate">See all</a> 
                            </div>
                            <div class="intro-y box p-5 mt-5">
                                <canvas class="mt-3" id="report-donut-chart" height="280"></canvas>
                                <div class="mt-8">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                        <span class="truncate">17 - 30 Years old</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">62%</span> 
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                        <span class="truncate">31 - 50 Years old</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">33%</span> 
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                        <span class="truncate">>= 50 Years old</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">10%</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Sales Report -->
                        <!-- BEGIN: Official Store -->
                        <div class="col-span-12 xl:col-span-8 mt-6">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Official Store
                                </h2>
                                <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700">
                                    <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                                    <input type="text" class="input w-full sm:w-40 box pl-10" placeholder="Filter by city">
                                </div>
                            </div>
                            <div class="intro-y box p-5 mt-12 sm:mt-5">
                                <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                                <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                            </div>
                        </div>
                        <!-- END: Official Store -->
                        <!-- BEGIN: Weekly Best Sellers -->
                        <div class="col-span-12 xl:col-span-4 mt-6">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Weekly Best Sellers
                                </h2>
                            </div>
                            <div class="mt-5">
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Leonardo DiCaprio</div>
                                            <div class="text-gray-600 text-xs">6 August 2022</div>
                                        </div>
                                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-10.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Tom Cruise</div>
                                            <div class="text-gray-600 text-xs">21 July 2020</div>
                                        </div>
                                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Al Pacino</div>
                                            <div class="text-gray-600 text-xs">5 January 2021</div>
                                        </div>
                                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Russell Crowe</div>
                                            <div class="text-gray-600 text-xs">22 April 2020</div>
                                        </div>
                                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 Sales</div>
                                    </div>
                                </div>
                                <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 text-theme-16">View More</a> 
                            </div>
                        </div>
                        <!-- END: Weekly Best Sellers -->
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                <div class="mini-report-chart box p-5 zoom-in">
                                    <div class="flex items-center">
                                        <div class="w-2/4 flex-none">
                                            <div class="text-lg font-medium truncate">Target Sales</div>
                                            <div class="text-gray-600 mt-1">300 Sales</div>
                                        </div>
                                        <div class="flex-none ml-auto relative">
                                            <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                            <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                <div class="mini-report-chart box p-5 zoom-in">
                                    <div class="flex">
                                        <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                        <div class="py-1 px-2 rounded-full text-xs bg-gray-200 text-gray-600 cursor-pointer ml-auto truncate">320 Followers</div>
                                    </div>
                                    <div class="mt-4">
                                        <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                <div class="mini-report-chart box p-5 zoom-in">
                                    <div class="flex items-center">
                                        <div class="w-2/4 flex-none">
                                            <div class="text-lg font-medium truncate">New Products</div>
                                            <div class="text-gray-600 mt-1">1450 Products</div>
                                        </div>
                                        <div class="flex-none ml-auto relative">
                                            <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                            <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                                <div class="mini-report-chart box p-5 zoom-in">
                                    <div class="flex">
                                        <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                        <div class="py-1 px-2 rounded-full text-xs bg-gray-200 text-gray-600 cursor-pointer ml-auto truncate">180 Campaign</div>
                                    </div>
                                    <div class="mt-4">
                                        <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: General Report -->
                        <!-- BEGIN: Weekly Top Seller -->
                        <div class="col-span-12 mt-6">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Weekly Top Seller
                                </h2>
                                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <button class="button box flex items-center text-gray-700"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                    <button class="ml-3 button box flex items-center text-gray-700"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                </div>
                            </div>
                            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-no-wrap">IMAGES</th>
                                            <th class="whitespace-no-wrap">PRODUCT NAME</th>
                                            <th class="text-center whitespace-no-wrap">STOCK</th>
                                            <th class="text-center whitespace-no-wrap">STATUS</th>
                                            <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 6 August 2022">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 1 May 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-11.jpg" title="Uploaded at 10 October 2020">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-no-wrap">Apple MacBook Pro 13</a> 
                                                <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                                            </td>
                                            <td class="text-center">77</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="Uploaded at 21 July 2020">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 31 December 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 9 September 2020">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-no-wrap">Dell XPS 13</a> 
                                                <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                                            </td>
                                            <td class="text-center">100</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg" title="Uploaded at 5 January 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="Uploaded at 18 November 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 1 June 2021">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-no-wrap">Oppo Find X2 Pro</a> 
                                                <div class="text-gray-600 text-xs whitespace-no-wrap">Smartphone &amp; Tablet</div>
                                            </td>
                                            <td class="text-center">50</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-11.jpg" title="Uploaded at 22 April 2020">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 12 December 2020">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-12.jpg" title="Uploaded at 7 May 2020">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-no-wrap">Apple MacBook Pro 13</a> 
                                                <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                                            </td>
                                            <td class="text-center">50</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                                <ul class="pagination">
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                    </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                    </li>
                                    <li> <a class="pagination__link" href="">...</a> </li>
                                    <li> <a class="pagination__link" href="">1</a> </li>
                                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                                    <li> <a class="pagination__link" href="">3</a> </li>
                                    <li> <a class="pagination__link" href="">...</a> </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                    </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                    </li>
                                </ul>
                                <select class="w-20 input box mt-3 sm:mt-0">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div>
                        <!-- END: Weekly Top Seller -->
                    </div>
                    <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
                        <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                            <!-- BEGIN: Transactions -->
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                                <div class="intro-x flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Transactions
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Leonardo DiCaprio</div>
                                                <div class="text-gray-600 text-xs">6 August 2022</div>
                                            </div>
                                            <div class="text-theme-9">+$23</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-10.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Tom Cruise</div>
                                                <div class="text-gray-600 text-xs">21 July 2020</div>
                                            </div>
                                            <div class="text-theme-9">+$83</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Al Pacino</div>
                                                <div class="text-gray-600 text-xs">5 January 2021</div>
                                            </div>
                                            <div class="text-theme-9">+$199</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Russell Crowe</div>
                                                <div class="text-gray-600 text-xs">22 April 2020</div>
                                            </div>
                                            <div class="text-theme-9">+$43</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-15.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Al Pacino</div>
                                                <div class="text-gray-600 text-xs">8 October 2022</div>
                                            </div>
                                            <div class="text-theme-9">+$112</div>
                                        </div>
                                    </div>
                                    <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 text-theme-16">View More</a> 
                                </div>
                            </div>
                            <!-- END: Transactions -->
                            <!-- BEGIN: Recent Activities -->
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                                <div class="intro-x flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Recent Activities
                                    </h2>
                                    <a href="" class="ml-auto text-theme-1 truncate">See all</a> 
                                </div>
                                <div class="report-timeline mt-5 relative">
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Johnny Depp</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has joined the team</div>
                                        </div>
                                    </div>
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-10.jpg">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Brad Pitt</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600">
                                                <div class="mt-1">Added 3 new photos</div>
                                                <div class="flex mt-2">
                                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Apple MacBook Pro 13">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-8.jpg">
                                                    </div>
                                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Dell XPS 13">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-14.jpg">
                                                    </div>
                                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Oppo Find X2 Pro">
                                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-5.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Al Pacino</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1" href="">Sony Master Series A9G</a> price and description</div>
                                        </div>
                                    </div>
                                    <div class="intro-x relative flex items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Sylvester Stallone</div>
                                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1" href="">Sony Master Series A9G</a> description</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Recent Activities -->
                            <!-- BEGIN: Important Notes -->
                            <div class="col-span-12 md:col-span-6 xl:col-span-12 xxl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                                <div class="intro-x flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-auto">
                                        Important Notes
                                    </h2>
                                    <button data-carousel="important-notes" data-target="prev" class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                    <button data-carousel="important-notes" data-target="next" class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                                </div>
                                <div class="mt-5 intro-x">
                                    <div class="slick-carousel box zoom-in" id="important-notes">
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                                            <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="button button--sm bg-gray-200 text-gray-600">View Notes</button>
                                                <button type="button" class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                                            <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="button button--sm bg-gray-200 text-gray-600">View Notes</button>
                                                <button type="button" class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                                            <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="button button--sm bg-gray-200 text-gray-600">View Notes</button>
                                                <button type="button" class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Important Notes -->
                            <!-- BEGIN: Schedules -->
                            <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                                <div class="intro-x flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Schedules
                                    </h2>
                                    <a href="" class="ml-auto text-theme-1 truncate flex items-center"> <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x box">
                                        <div class="p-5">
                                            <div class="flex">
                                                <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i> 
                                                <div class="font-medium mx-auto">April</div>
                                                <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i> 
                                            </div>
                                            <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                                <div class="font-medium">Su</div>
                                                <div class="font-medium">Mo</div>
                                                <div class="font-medium">Tu</div>
                                                <div class="font-medium">We</div>
                                                <div class="font-medium">Th</div>
                                                <div class="font-medium">Fr</div>
                                                <div class="font-medium">Sa</div>
                                                <div class="py-1 rounded relative text-gray-600">29</div>
                                                <div class="py-1 rounded relative text-gray-600">30</div>
                                                <div class="py-1 rounded relative text-gray-600">31</div>
                                                <div class="py-1 rounded relative">1</div>
                                                <div class="py-1 rounded relative">2</div>
                                                <div class="py-1 rounded relative">3</div>
                                                <div class="py-1 rounded relative">4</div>
                                                <div class="py-1 rounded relative">5</div>
                                                <div class="py-1 bg-theme-18 rounded relative">6</div>
                                                <div class="py-1 rounded relative">7</div>
                                                <div class="py-1 bg-theme-1 text-white rounded relative">8</div>
                                                <div class="py-1 rounded relative">9</div>
                                                <div class="py-1 rounded relative">10</div>
                                                <div class="py-1 rounded relative">11</div>
                                                <div class="py-1 rounded relative">12</div>
                                                <div class="py-1 rounded relative">13</div>
                                                <div class="py-1 rounded relative">14</div>
                                                <div class="py-1 rounded relative">15</div>
                                                <div class="py-1 rounded relative">16</div>
                                                <div class="py-1 rounded relative">17</div>
                                                <div class="py-1 rounded relative">18</div>
                                                <div class="py-1 rounded relative">19</div>
                                                <div class="py-1 rounded relative">20</div>
                                                <div class="py-1 rounded relative">21</div>
                                                <div class="py-1 rounded relative">22</div>
                                                <div class="py-1 bg-theme-17 rounded relative">23</div>
                                                <div class="py-1 rounded relative">24</div>
                                                <div class="py-1 rounded relative">25</div>
                                                <div class="py-1 rounded relative">26</div>
                                                <div class="py-1 bg-theme-14 rounded relative">27</div>
                                                <div class="py-1 rounded relative">28</div>
                                                <div class="py-1 rounded relative">29</div>
                                                <div class="py-1 rounded relative">30</div>
                                                <div class="py-1 rounded relative text-gray-600">1</div>
                                                <div class="py-1 rounded relative text-gray-600">2</div>
                                                <div class="py-1 rounded relative text-gray-600">3</div>
                                                <div class="py-1 rounded relative text-gray-600">4</div>
                                                <div class="py-1 rounded relative text-gray-600">5</div>
                                                <div class="py-1 rounded relative text-gray-600">6</div>
                                                <div class="py-1 rounded relative text-gray-600">7</div>
                                                <div class="py-1 rounded relative text-gray-600">8</div>
                                                <div class="py-1 rounded relative text-gray-600">9</div>
                                            </div>
                                        </div>
                                        <div class="border-t border-gray-200 p-5">
                                            <div class="flex items-center">
                                                <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                                <span class="truncate">UI/UX Workshop</span> 
                                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                                <span class="font-medium xl:ml-auto">23th</span> 
                                            </div>
                                            <div class="flex items-center mt-4">
                                                <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                                <span class="truncate">VueJs Frontend Development</span> 
                                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                                <span class="font-medium xl:ml-auto">10th</span> 
                                            </div>
                                            <div class="flex items-center mt-4">
                                                <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                                <span class="truncate">Laravel Rest API</span> 
                                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                                <span class="font-medium xl:ml-auto">31th</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Schedules -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>