<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:24:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.0.1/dist/css/mstepper.min.css">
    <!-- /global stylesheets -->


</head>
<style media="screen">
@import "compass";

// Stepper
.stepper {
.nav-tabs {
    position: relative;
}
.nav-tabs > li {
    width: 25%;
    position: relative;
    &:after {
        content: '';
        position: absolute;
        background: #f1f1f1;
        display: block;
        width: 100%;
        height: 5px;
        top: 30px;
        left: 50%;
        z-index: 1;
    }
    &.completed {
        &::after {
            background: #34bc9b;
        }
    }
    &:last-child {
        &::after {
            background: transparent;
        }
    }
    &.active:last-child {
        .round-tab {
            background: #34bc9b;
            &::after {
                content: '✔';
                color: #fff;
                position: absolute;
                left: 0;
                right: 0;
                margin: 0 auto;
                top: 0;
                display: block;
            }
        }
    }
}
.nav-tabs [data-toggle='tab'] {
    width: 25px;
    height: 25px;
    margin: 20px auto;
    border-radius: 100%;
    border: none;
    padding: 0;
    color: #f1f1f1;
}
.nav-tabs [data-toggle='tab']:hover {
    background: transparent;
    border: none;
}
.nav-tabs > .active > [data-toggle='tab'], .nav-tabs > .active > [data-toggle='tab']:hover, .nav-tabs > .active > [data-toggle='tab']:focus {
    color: #34bc9b;
    cursor: default;
    border: none;
}
.tab-pane {
    position: relative;
    padding-top: 50px;
}
.round-tab {
    width: 25px;
    height: 25px;
    line-height: 22px;
    display: inline-block;
    border-radius: 25px;
    background: #fff;
    border: 2px solid #34bc9b;
    color: #34bc9b;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 14px;

}
.completed .round-tab{
    background: #34bc9b;
    &::after {
        content: '✔';
        color: #fff;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        top: 0;
        display: block;
    }
}
.active .round-tab {
    background: #fff;
    border: 2px solid #34bc9b;
    &:hover {
        background: #fff;
        border: 2px solid #34bc9b;
    }
    &::after {
        display: none;
    }
}
.disabled .round-tab {
    background: #fff;
    color: #f1f1f1;
    border-color: #f1f1f1;
    &:hover {
        color: #4dd3b6;
        border: 2px solid #a6dfd3;
    }
    &::after {
        display: none;
    }
}
}
</style>
<body>

    <!-- Main navbar -->

    <!-- /main navbar -->
    <?php	include 'header.php';?>

    <!-- Page content -->
    <div class="page-content">

        <?php	include 'assets/includes/side_navbar.php';?>


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index-2.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Dashboard</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row" style="height:100%">
                    <div class="col-xl-12" style="height:100%">
                        <div class="card" style="height:100%">

                            <!-- Order direction sequence control -->
                            <div class="card">

                                <!-- Horizontal Steppers -->
                                <div class="row">
                                    <div class="container">
                                        <div class="panel panel-default">
                                            <div class="panel-body">

                                                <div class="stepper">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active">
                                                            <a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Step 1">
                                                                <span class="round-tab">1</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Step 2">
                                                                <span class="round-tab">2</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a class="persistant-disabled" href="#stepper-step-3" data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Step 3">
                                                                <span class="round-tab">3</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a class="persistant-disabled" href="#stepper-step-4" data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Complete">
                                                                <span class="round-tab">4</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <form role="form">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-1">
                                                                <h3 class "h2">1. Select Payment Type</h3>
                                                                <p>This is step 1</p>
                                                                <ul class="list-inline pull-right">
                                                                    <li>
                                                                        <a class="btn btn-primary next-step">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
                                                                <h3 class "h2">2. Enter Payment Information</h3>
                                                                <p>This is step 2</p>
                                                                <ul class="list-inline pull-right">
                                                                    <li>
                                                                        <a class="btn btn-default prev-step">Back</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="btn btn-primary next-step">Next</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" role="tabpanel" id="stepper-step-3">
                                                                <h3 class="hs">3. Review and Submit Payment</h3>
                                                                <p>This is step 3</p>
                                                                <ul class="list-inline pull-right">
                                                                    <li>
                                                                        <a class="btn btn-default prev-step">Back</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="btn btn-default cancel-stepper">Cancel Payment</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="btn btn-primary next-step">Submit Payment</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
                                                                <h3>4. All done!</h3>
                                                                <p>You have successfully completed all steps.</p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Horizontal Steppers -->
                            </div>
                            <!-- /order direction sequence control -->
                        </div>
                        <!-- /traffic sources -->

                    </div>
                </div>
                <!-- /main charts -->
            </div>
            <!-- Footer -->
            <!-- <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
    <span class="navbar-text">
    &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
</span>

<ul class="navbar-nav ml-lg-auto">
<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
</ul>
</div>
</div> -->
<!-- /footer -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</body>
<!-- Core JS files -->
<script src="global_assets/js/main/jquery.min.js"></script>
<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
<script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

<script src="global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

<script src="assets/js/app.js"></script>
<script src="global_assets/js/demo_pages/form_select2.js"></script>
<script src="global_assets/js/demo_pages/dashboard.js"></script>
<!-- Theme JS files -->
<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>

<script src="global_assets/js/demo_pages/datatables_sorting.js"></script>
<!-- /theme JS files
<!-- material -->
<script src="https://unpkg.com/materialize-stepper@3.0.1/dist/js/mstepper.min.js"></script>
<!-- /theme JS files -->




<script>
// var stepper = document.querySelector('.stepper');
// var stepperInstace = new MStepper(stepper, {
//     // options
//     firstActive: 0 // this is the default
// })


// var stepper = document.querySelector('.stepper');
// var stepperInstace = new MStepper(stepper, {
//    // Default active step.
//    firstActive: 0,
//    // Allow navigation by clicking on the next and previous steps on linear steppers.
//    linearStepsNavigation: true,
//    // Auto focus on first input of each step.
//    autoFocusInput: false,
//    // Set if a loading screen will appear while feedbacks functions are running.
//    showFeedbackPreloader: true,
//    // Auto generation of a form around the stepper.
//    autoFormCreation: true,
//    // Function to be called everytime a nextstep occurs. It receives 2 arguments, in this sequece: stepperForm, activeStepContent.
//    // validationFunction: defaultValidationFunction, // more about this default functions below
//    // Enable or disable navigation by clicking on step-titles
//    stepTitleNavigation: true,
//    // Preloader used when step is waiting for feedback function. If not defined, Materializecss spinner-blue-only will be used.
//    feedbackPreloader: '<div class="spinner-layer spinner-blue-only">...</div>'
// })

// function someFunction(destroyFeedback) {
//       // Do your stuff here
//       // Call destroyFeedback() function when you're done
//       // The true parameter will proceed to the next step besides destroying the preloader
//       setTimeout(() => {
//          destroyFeedback(true);
//       }, 1000);
//    }


/*jslint browser: true*/
/*global $, jQuery, alert*/


(function($) {
    'use strict';

    $(function() {

        $(document).ready(function() {
            function triggerClick(elem) {
                $(elem).click();
            }
            var $progressWizard = $('.stepper'),
                $tab_active,
                $tab_prev,
                $tab_next,
                $btn_prev = $progressWizard.find('.prev-step'),
                $btn_next = $progressWizard.find('.next-step'),
                $tab_toggle = $progressWizard.find('[data-toggle="tab"]'),
                $tooltips = $progressWizard.find('[data-toggle="tab"][title]');

            // To do:
            // Disable User select drop-down after first step.
            // Add support for payment type switching.

            //Initialize tooltips
            $tooltips.tooltip();

            //Wizard
            $tab_toggle.on('show.bs.tab', function(e) {
                var $target = $(e.target);

                if (!$target.parent().hasClass('active, disabled')) {
                    $target.parent().prev().addClass('completed');
                }
                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            // $tab_toggle.on('click', function(event) {
            //     event.preventDefault();
            //     event.stopPropagation();
            //     return false;
            // });

            $btn_next.on('click', function() {
                $tab_active = $progressWizard.find('.active');

                $tab_active.next().removeClass('disabled');

                $tab_next = $tab_active.next().find('a[data-toggle="tab"]');
                triggerClick($tab_next);

            });
            $btn_prev.click(function() {
                $tab_active = $progressWizard.find('.active');
                $tab_prev = $tab_active.prev().find('a[data-toggle="tab"]');
                triggerClick($tab_prev);
            });
        });
    });

}(jQuery, this));



</script>



<!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 06:41:06 GMT -->
</html>
