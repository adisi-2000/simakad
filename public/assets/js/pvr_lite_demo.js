"use strict";
var toolTip = function () {
        $("[data-toggle=\"tooltip\"]").tooltip({
            placement: "top"
        });
    },
    Demo = function () {
        "use strict";
        return {
            init         : function () {
                this.initComponent();
            },
            initComponent: function () {
                toolTip();

                $("body").append('<!--Theme Panel--> <div class="fixed-plugin"><div class="dropdown show-dropdown"><a href="javascript:void(0)" data-toggle="dropdown"><i class="fa fa-cog fa-2x"> </i></a><ul class="dropdown-menu closePanel">             <li class="header-title"> Sidebar Style</li><li class="adjustments-line"><a href="javascript:void(0)" class="switch-trigger"> <p>Fixed Navbar</p> <label class="switch-nav pull-right p-t-7 m-r-10"><input type="checkbox" data-on-color="purple" data-off-color="purple">   <span class="toggle"></span> </label> <div class="clearfix"></div></a></li><li class="adjustments-line"><a href="javascript:void(0)" class="switch-trigger"> <p>Sidebar Mini</p> <label class="switch-mini pull-right p-t-7 m-r-10"><input type="checkbox" data-on-color="purple" data-off-color="purple"><span class="toggle"></span> </label> <div class="clearfix"></div></a></li><li class="adjustments-line"><a href="javascript:void(0)" class="switch-trigger"> <p>Background Image</p> <label class="switch-image pull-right p-t-7 m-r-10"><input type="checkbox" checked="" data-on-color="purple" data-off-color="purple"><span class="toggle"></span> </label> <div class="clearfix"></div></a>             </li>             <li class="adjustments-line"><a href="javascript:void(0)" class="switch-trigger background-color"> <p>Filters</p> <div class="pull-right p-t-7"><span class="badge filter badge-purple active" data-color="purple"></span><span class="badge filter badge-orange" data-color="orange"></span><span class="badge filter badge-green" data-color="green"></span><span class="badge filter badge-red" data-color="red"></span><span class="badge filter badge-azure" data-color="azure"></span><span class="badge filter badge-black" data-color="black"></span> </div> <div class="clearfix"></div></a></li><li class="header-title">Sidebar Images</li><li><a class="img-holder switch-trigger" href="javascript:void(0)"> <img src="http://via.placeholder.com/1080x1920" alt=""/></a></li><li><a class="img-holder switch-trigger" href="javascript:void(0)"><img src="http://via.placeholder.com/1080x1920" alt=""/></a>             </li><li><a class="img-holder switch-trigger" href="javascript:void(0)"> <img src="http://via.placeholder.com/1080x1920" alt=""/></a></li><li class="active"><a class="img-holder switch-trigger" href="javascript:void(0)"> <img src="http://via.placeholder.com/1080x1920" alt=""/></a></li><li class="button-container"><div> <a href="https://themeforest.net/item/pvr-lite-admin-bootstrap-4-dashboard-template/21326151" target="_blank"class="btn btn-warning btn-block">Buy now!</a></div></li><li class="header-title" id="closePanel">Close Panel</li></ul></div> </div> <!--End Theme Panel-->');
                if ($("[data-toggle='switch']").length != 0) {
                    $("[data-toggle='switch']").bootstrapSwitch();
                }
                var window_width = $(window).width();
                var fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').text();
                var $full_page = $('.full-page');
                var $sidebar_responsive = $('body > .navbar-collapse');
                var $sidebar = $('.sidebar');
                var $sidebar_img_container = $sidebar.find('.sidebar-background');
                $("#closePanel").on("click", function () {
                    $('.fixed-plugin .dropdown').removeClass('show');
                    $('.fixed-plugin .closePanel').removeClass('show');
                });
                if (window_width > 767 && $.trim(fixed_plugin_open) == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('show');
                        $('.fixed-plugin .closePanel').addClass('show');
                    }
                }
                $('.fixed-plugin a').click(function (event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });
                $('.fixed-plugin .background-color span').click(function () {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                    var new_color = $(this).data('color');
                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }
                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }
                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });
                $('.fixed-plugin .img-holder').click(function () {
                    var $full_page_background = $('.full-page-background');
                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');
                    var new_image = $(this).find("img").attr('src');
                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function () {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }
                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
                        $full_page_background.fadeOut('fast', function () {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }
                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }
                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });
                $('.switch-image input').on("change", function () {
                    var $full_page_background = $('.full-page-background');
                    var $input = $(this);
                    var background_image = "";
                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }
                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }
                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }
                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }
                        background_image = false;
                    }
                });
                $('.switch-nav input').on("change", function () {
                    var $nav = $('nav.navbar').first();
                    $nav.toggleClass("navbar-fixed");
                });
                $('.switch-mini input').on("change", function () {
                    var $body = $('body');
                    var $input = $(this);
                    if (lbd.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        lbd.misc.sidebar_mini_active = false;
                        if (isWindows) {
                            $('.sidebar .sidebar-wrapper').perfectScrollbar();
                        }
                    } else {
                        $('.sidebar .collapse').collapse('hide').on('hidden.bs.collapse', function () {
                            $(this).css('height', 'auto');
                        });
                        if (isWindows) {
                            $('.sidebar .sidebar-wrapper').perfectScrollbar('destroy');
                        }
                        setTimeout(function () {
                            $('body').addClass('sidebar-mini');
                            $('.sidebar .collapse').css('height', 'auto');
                            lbd.misc.sidebar_mini_active = true;
                        }, 300);
                    }
                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function () {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);
                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function () {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });
            },
            icons        : function () {
            }
        }
    }();
$(function () {
    Demo.init();
});