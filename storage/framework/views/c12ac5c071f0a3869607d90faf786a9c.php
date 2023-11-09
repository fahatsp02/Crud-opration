
<?php $__env->startSection('main'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p>Name : <b><?php echo e($product->name); ?></b></p>
                <p>Description : <b><?php echo e($product->description); ?></b></p>
                <img src="/products/<?php echo e($product->image); ?>" class="rounded" width="20%">
            </div>

        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project1\resources\views/products/show.blade.php ENDPATH**/ ?>