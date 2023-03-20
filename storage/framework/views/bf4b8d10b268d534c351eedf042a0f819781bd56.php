

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Toast_UI_Charts'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- tui charts Css -->
<link href="<?php echo e(URL::asset('/assets/libs/tui-chart/tui-chart.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Charts <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Toast UI Charts <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Bar charts</h4>

                <div id="bar-charts" data-colors='["--bs-primary","--bs-success"]' dir="ltr"></div>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Column charts</h4>

                <div id="column-charts" data-colors='["--bs-success","--bs-primary", "--bs-danger"]' dir="ltr"></div>

            </div>
        </div>
    </div> <!-- end col -->

</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Line charts</h4>

                <div id="line-charts"  data-colors='["--bs-danger","--bs-success", "--bs-primary"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Area charts</h4>

                <div id="area-charts" data-colors='["--bs-danger","--bs-success", "--bs-primary"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->

</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Bubble charts</h4>

                <div id="bubble-charts" data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger", "--bs-info"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Scatter charts</h4>

                <div id="scatter-charts" data-colors='["--bs-success","--bs-primary"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Pie charts</h4>

                <div id="pie-charts" data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Donut pie charts</h4>

                <div id="donut-charts" data-colors='["--bs-info","--bs-warning", "--bs-danger", "--bs-success", "--bs-primary"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Heatmap charts</h4>

                <div id="heatmap-charts" data-colors='["--bs-primary","--bs-success", "--bs-danger"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Treemap charts</h4>

                <div id="treemap-charts" data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->

</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Map charts</h4>

                <div id="map-charts" data-colors='["--bs-primary","--bs-success", "--bs-danger"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Boxplot charts</h4>

                <div id="boxplot-charts" data-colors='["--bs-primary","--bs-success"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->

</div>
<!-- end row -->
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Bullet charts</h4>

                <div id="bullet-charts" data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger"]' dir="ltr"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Radial charts</h4>

                <div id="radial-charts" data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger"]' dir="ltr"></div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- tui charts plugins -->

<script src="<?php echo e(URL::asset('/assets/libs/tui-chart/tui-chart.min.js')); ?>"></script>

<!-- tui charts plugins -->
<script src="<?php echo e(URL::asset('/assets/js/pages/tui-charts.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Skote_Laravel\resources\views/charts-tui.blade.php ENDPATH**/ ?>