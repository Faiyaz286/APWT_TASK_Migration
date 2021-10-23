

<?php $__env->startSection('title'); ?>
    Edit Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
    <div>
        <form action="<?php echo e(route('edit',$product->id)); ?>" class="form form-control" method="post">
            <?php echo e(csrf_field()); ?>

            <table class="table table-responsive">
                <tr>
                    <td>Product Name:</td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Product Name" value="<?php echo e($product->p_name); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Product Code:</td>
                    <td>
                        <input type="text" id="code" name="code" placeholder="Product Code" value="<?php echo e($product->p_code); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Product Description:</td>
                    <td>
                        <input type="text" id="desc" name="desc" placeholder="Product Description" value="<?php echo e($product->p_desc); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Product Category:</td>
                    <td>
                        <input type="text" id="category" name="category" placeholder="Product Category" value="<?php echo e($product->p_category); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="text" id="price" name="price" placeholder="Price" value="<?php echo e($product->p_price); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Product Quantity:</td>
                    <td>
                        <input type="text" id="quantity" name="quantity" placeholder="Product Quantity" value="<?php echo e($product->p_quantity); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Stock Date:</td>
                    <td>
                        <input type="date" id="stockdate" name="stockdate" value="<?php echo e($product->p_stockdate); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['stockdate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Product Rating:</td>
                    <td>
                        <?php if($product->p_rating==1): ?>
                        <input type="radio" id="rating" name="rating" value="1" checked>1
                        <?php else: ?>
                            <input type="radio" id="rating" name="rating" value="1">1
                        <?php endif; ?>
                        <?php if($product->p_rating==2): ?>
                        <input type="radio" id="rating" name="rating" value="2" checked>2
                        <?php else: ?>
                            <input type="radio" id="rating" name="rating" value="2">2
                        <?php endif; ?>
                        <?php if($product->p_rating==3): ?>
                        <input type="radio" id="rating" name="rating" value="3" checked>3
                        <?php else: ?>
                            <input type="radio" id="rating" name="rating" value="3">3
                        <?php endif; ?>
                        <?php if($product->p_rating==4): ?>
                        <input type="radio" id="rating" name="rating" value="4" checked>4
                        <?php else: ?>
                            <input type="radio" id="rating" name="rating" value="4">4
                        <?php endif; ?>
                        <?php if($product->p_rating==5): ?>
                        <input type="radio" id="rating" name="rating" value="5" checked>5
                        <?php else: ?>
                            <input type="radio" id="rating" name="rating" value="5">5
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Purchased:</td>
                    <td>
                        <input type="text" id="purchased" name="purchased" placeholder="Purchased" value="<?php echo e($product->p_purchased); ?>" class="form-control">
                    </td>
                    <td>
                        <?php $__errorArgs = ['purchased'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-success" value="Save">
                    </td>
                </tr>
            </table>
        </form>
        <a href="<?php echo e(route('productlist')); ?>"><button class="btn btn-outline-dark">Back</button></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.productform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faiyaz\Downloads\APWT_Lab_Task_Migration\resources\views/product/productedit.blade.php ENDPATH**/ ?>