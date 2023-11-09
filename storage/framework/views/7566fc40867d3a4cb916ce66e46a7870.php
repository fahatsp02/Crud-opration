
<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">Product Edit#<?php echo e($product->name); ?></h3>
                <form action="<?php echo e(url('/')); ?>/products/<?php echo e($product->id); ?>/update" method="post" enctype="multipart/form-data">  
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo e(old('name',$product->name)); ?>">
                        <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                     
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" rows="4" name="description" ><?php echo e(old('description',$product->description)); ?></textarea>
                        <?php if($errors->has('description')): ?>
                        <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                     
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" value="<?php echo e(old('image',$product->image)); ?>">
                        <?php if($errors->has('image')): ?>
                        <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                     
                        <?php endif; ?>
                    </div>
                   <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project1\resources\views/products/edit.blade.php ENDPATH**/ ?>