<style>
    #home{
        background-color: blue
    }
</style>
<?php $__env->startSection('title'); ?>
    Home Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    This is product home page!
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_Lab_Task_Migration\resources\views/home.blade.php ENDPATH**/ ?>