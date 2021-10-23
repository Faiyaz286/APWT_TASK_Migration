
<style>
    #list{
        background-color: blue
    }
</style>
<?php $__env->startSection('title'); ?>
    Product List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-responsive">
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Product Description</th>
        <th>Product Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Stock Date</th>
        <th>Rating</th>
        <th>Purchased</th>
        <th></th>
        <th></th>
        <th></th>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->p_name); ?></td>
            <td><?php echo e($product->p_code); ?></td>
            <td><?php echo e($product->p_desc); ?></td>
            <td><?php echo e($product->p_category); ?></td>
            <td><?php echo e($product->p_price); ?></td>
            <td><?php echo e($product->p_quantity); ?></td>
            <td><?php echo e($product->p_stockdate); ?></td>
            <td><?php echo e($product->p_rating); ?></td>
            <td><?php echo e($product->p_purchased); ?></td>
            <td><a href="<?php echo e(route('details',$product->id)); ?>"><button class="btn btn-outline-info">Details</button></a></td>
            <td><a href="<?php echo e(route('edit',$product->id)); ?>"><button class="btn btn-outline-success">Edit</button></a></td>
            <td><a href="<?php echo e(route('delete',$product->id)); ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_Lab_Task_Migration\resources\views/product/productlist.blade.php ENDPATH**/ ?>