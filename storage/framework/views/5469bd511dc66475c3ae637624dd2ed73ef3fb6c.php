

<?php $__env->startSection('title'); ?>
    Product Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
    <div>
        <table class="table table-responsive">
            <tr>
                <td>Product Name:</td>
                <td>
                    <?php echo e($product->p_name); ?>

                </td>
            </tr>
            <tr>
                <td>Product Code:</td>
                <td>
                    <?php echo e($product->p_code); ?>

                </td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td>
                    <?php echo e($product->p_desc); ?>

                </td>
            </tr>
            <tr>
                <td>Product Category:</td>
                <td>
                    <?php echo e($product->p_category); ?>

                </td>
            </tr>
            <tr>
                <td>Price:</td>
                <td>
                    <?php echo e($product->p_price); ?>

                </td>
            </tr>
            <tr>
                <td>Product Quantity:</td>
                <td>
                    <?php echo e($product->p_quantity); ?>

                </td>
            </tr>
            <tr>
                <td>Stock Date:</td>
                <td>
                    <?php echo e($product->p_stockdate); ?>

                </td>
            </tr>
            <tr>
                <td>Product Rating:</td>
                <td>
                    <?php echo e($product->p_rating); ?>

                </td>
            </tr>
            <tr>
                <td>Purchased:</td>
                <td>
                    <?php echo e($product->p_purchased); ?>

                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="<?php echo e(route('productlist')); ?>"><button class="btn btn-outline-dark">Go Back</button></a>
                </td>
            </tr>
            </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.productform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_Lab_Task_Migration\resources\views/product/productdetails.blade.php ENDPATH**/ ?>