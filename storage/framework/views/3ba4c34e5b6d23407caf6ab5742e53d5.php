
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2 mb-2">New Product</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($loop->index+1); ?></td>
                    <td><a href="products/<?php echo e($product->id); ?>/show" class="text-dark"><?php echo e($product->name); ?></a></td>
                    <td><?php echo e($product->description); ?></td>
                    <td><img src="/products/<?php echo e($product->image); ?>" class="rounded-circle" width="40" height="40"></td>
                    <td><a href="products/<?php echo e($product->id); ?>/edit" class="btn btn-dark btn-sm">Edit</a>
                        <form method="POST" class="d-inline" action="products/<?php echo e($product->id); ?>/delete">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
        <?php echo e($products->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project1\resources\views/products/index.blade.php ENDPATH**/ ?>