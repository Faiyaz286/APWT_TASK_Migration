<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>

    <body>
        <div class="navbar-dark">
            <nav class="navbar alert-dark">
                <?php echo $__env->make('include.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </nav>
            
        </div>
        <div class="container">
            <?php echo $__env->yieldContent('form'); ?>
        </div>
    </body>

</html><?php /**PATH C:\Users\Faiyaz\Downloads\APWT_Lab_Task_Migration\resources\views/layouts/productform.blade.php ENDPATH**/ ?>