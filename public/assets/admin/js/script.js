/*
Author       : Dreamguys
Template Name: Mentoring - Bootstrap Admin Template
Version      : 1.0
*/

(function ($) {
    "use strict";

    // Variables declarations

    var $wrapper = $('.main-wrapper');
    var $pageWrapper = $('.page-wrapper');
    var $slimScrolls = $('.slimscroll');

    // Sidebar

    var Sidemenu = function () {
        this.$menuItem = $('#sidebar-menu a');
    };

    function init() {
        var $this = Sidemenu;
        $('#sidebar-menu a').on('click', function (e) {
            if ($(this).parent().hasClass('submenu')) {
                e.preventDefault();
            }
            if (!$(this).hasClass('subdrop')) {
                $('ul', $(this).parents('ul:first')).slideUp(350);
                $('a', $(this).parents('ul:first')).removeClass('subdrop');
                $(this).next('ul').slideDown(350);
                $(this).addClass('subdrop');
            } else if ($(this).hasClass('subdrop')) {
                $(this).removeClass('subdrop');
                $(this).next('ul').slideUp(350);
            }
        });
        $('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
    }

    // Sidebar Initiate
    init();

    // Mobile menu sidebar overlay

    $('body').append('<div class="sidebar-overlay"></div>');
    $(document).on('click', '#mobile_btn', function () {
        $wrapper.toggleClass('slide-nav');
        $('.sidebar-overlay').toggleClass('opened');
        $('html').addClass('menu-opened');
        return false;
    });

    // Sidebar overlay

    $(".sidebar-overlay").on("click", function () {
        $wrapper.removeClass('slide-nav');
        $(".sidebar-overlay").removeClass("opened");
        $('html').removeClass('menu-opened');
    });

    // Page Content Height

    if ($('.page-wrapper').length > 0) {
        var height = $(window).height();
        $(".page-wrapper").css("min-height", height);
    }

    // Page Content Height Resize

    $(window).resize(function () {
        if ($('.page-wrapper').length > 0) {
            var height = $(window).height();
            $(".page-wrapper").css("min-height", height);
        }
    });

    // Select 2

    if ($('.select').length > 0) {
        $('.select').select2({
            minimumResultsForSearch: -1,
            width: '100%'
        });
    }

    // Datetimepicker

    if ($('.datetimepicker').length > 0) {
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            icons: {
                up: "fa fa-angle-up",
                down: "fa fa-angle-down",
                next: 'fa fa-angle-right',
                previous: 'fa fa-angle-left'
            }
        });
        $('.datetimepicker').on('dp.show', function () {
            $(this).closest('.table-responsive').removeClass('table-responsive').addClass('temp');
        }).on('dp.hide', function () {
            $(this).closest('.temp').addClass('table-responsive').removeClass('temp')
        });
    }

    // Tooltip

    if ($('[data-toggle="tooltip"]').length > 0) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // Datatable

    if ($('.datatable').length > 0) {
        $('.datatable').DataTable({
            "bFilter": false,
        });
    }

    // Sidebar Slimscroll

    if ($slimScrolls.length > 0) {
        $slimScrolls.slimScroll({
            height: 'auto',
            width: '100%',
            position: 'right',
            size: '7px',
            color: '#ccc',
            allowPageScroll: false,
            wheelStep: 10,
            touchScrollStep: 100
        });
        var wHeight = $(window).height() - 60;
        $slimScrolls.height(wHeight);
        $('.sidebar .slimScrollDiv').height(wHeight);
        $(window).resize(function () {
            var rHeight = $(window).height() - 60;
            $slimScrolls.height(rHeight);
            $('.sidebar .slimScrollDiv').height(rHeight);
        });
    }

    // Small Sidebar

    $(document).on('click', '#toggle_btn', function () {
        if ($('body').hasClass('mini-sidebar')) {
            $('body').removeClass('mini-sidebar');
            $('.subdrop + ul').slideDown();
        } else {
            $('body').addClass('mini-sidebar');
            $('.subdrop + ul').slideUp();
        }
        setTimeout(function () {
            mA.redraw();
            mL.redraw();
        }, 300);
        return false;
    });
    $(document).on('mouseover', function (e) {
        e.stopPropagation();
        if ($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
            var targ = $(e.target).closest('.sidebar').length;
            if (targ) {
                $('body').addClass('expand-menu');
                $('.subdrop + ul').slideDown();
            } else {
                $('body').removeClass('expand-menu');
                $('.subdrop + ul').slideUp();
            }
            return false;
        }
    });
})(jQuery);




$(document).ready(function () {

    $(document).on('submit', '#update_coursee', function (e) {

        alert('hello');

        if ($(".error").length > 0) {
            $('.error').remove();
        }

        e.preventDefault();

        $('#update_coursee input, #update_coursee select').each(
            function (index) {

                alert('hello2');

                e.preventDefault();

                if (input.val() == '') {
                    $(input).after('<label class="error fail-alert">This field is required.</label>');
                }

                if (input.attr('name') == 'course_fees' || input.attr('name') == 'course_duration') {

                    if (isNaN(input.val())) {
                        $(this).after('<label class="error fail-alert">Please enter a valid number.</label>');
                        e.preventDefault();
                    }
                }
            }
        );
    });



    $("#create_course").submit(function (e) {

        if ($(".error").length > 0) {
            $('.error').remove();
        }

        $('#create_course input, #create_course select').each(
            function (index) {
                var input = $(this);

                if (input.val() == '') {
                    $(input).after('<label class="error fail-alert">This field is required.</label>');
                }

                if (input.attr('name') == 'course_fees' || input.attr('name') == 'course_duration') {
                    if (isNaN(input.val())) {
                        $(this).after('<label class="error fail-alert">Please enter a valid number.</label>');
                        e.preventDefault();
                    }
                }
            }
        );


    });



    $("#create_subcourse").submit(function (e) {
        if ($(".error").length > 0) {
            $('.error').remove();
        }


        //$('#create_subcourse input, #create_subcourse select').each(
        $('#create_subcourse input').each(
            function (index) {
                var input = $(this);

                // if (input.val() == '') {
                //     $(input).after('<label class="error fail-alert">This field is required.</label>');
                // }

                if (input.attr('name') == 'total_questions' && $('select[name ="test_series_subcourse"]').val() == 1) {
                    if (isNaN(input.val())) {
                        $(this).after('<label class="error fail-alert">Please enter a valid number.</label>');
                        e.preventDefault();
                    }

                    if (input.val() == '') {
                        $(this).after('<label class="error fail-alert">This field is required.</label>');
                        e.preventDefault();
                    }
                }
            }
        );
    });


    $("#update_subcourse").submit(function (e) {
        if ($(".error").length > 0) {
            $('.error').remove();
        }


        //$('#create_subcourse input, #create_subcourse select').each(
        $('#update_subcourse input').each(
            function (index) {
                var input = $(this);

                // if (input.val() == '') {
                //     $(input).after('<label class="error fail-alert">This field is required.</label>');
                // }

                if (input.attr('name') == 'total_questions' && $('select[name ="test_series_subcourse"]').val() == 1) {
                    if (isNaN(input.val())) {
                        $(this).after('<label class="error fail-alert">Please enter a valid number.</label>');
                        e.preventDefault();
                    }

                    if (input.val() == '') {
                        $(this).after('<label class="error fail-alert">This field is required.</label>');
                        e.preventDefault();
                    }
                }
            }
        );
    });


    $('select[name ="test_series_subcourse"]').on('change', function () {
        if (this.value == 0) {
            $('.total_questions').remove();
        } else {
            if ($('.total_questions_div').html() == '') {
                $('.total_questions_div').append(`<div class="col-md-10 total_questions">
                    <label> Total Questions</label>
                <input type="text" class="form-control" name="total_questions">
                                </div>`);
            }
        }
    });


    // $("#create_video").submit(function (e) {

    //     if ($(".error").length > 0) {
    //         $('.error').remove();
    //     }

    //     $('#create_video input, #create_video select').each(
    //         function (index) {
    //             var input = $(this);

    //             if (input.val() == '') {
    //                 $(input).after('<label class="error fail-alert">This field is required.</label>');
    //             }

    //             if (input.attr('name') == 'video_duration') {
    //                 if (isNaN(input.val())) {
    //                     $(this).after('<label class="error fail-alert">Please enter a valid number.</label>');
    //                     e.preventDefault();
    //                 }
    //             }
    //         }
    //     );
    // });


    // $(document).on('submit', '#create_video', function (e) {

    //     if ($(".error").length > 0) {
    //         $('.error').remove();
    //     }

    //     $('#create_video input, #create_video select').each(
    //         function (index) {
    //             var input = $(this);

    //             if (input.val() == '') {
    //                 $(input).after('<label class="error fail-alert">This field is required.</label>');
    //             }

    //             if (input.attr('name') == 'video_duration') {
    //                 if (isNaN(input.val())) {
    //                     $(this).after('<label class="error fail-alert">Please enter a valid number.</label>');
    //                     e.preventDefault();
    //                 }
    //             }
    //         }
    //     );
    // });

});
