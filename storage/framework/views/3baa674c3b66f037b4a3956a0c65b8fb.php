
    <div class="form-group">
        <label for=""><?php echo e($label); ?></label>
        <input type="<?php echo e($type); ?>" class="form-control" name="<?php echo e($name); ?>" >
        <span class="text-danger">
            <!-- <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
        </span>
    </div><?php /**PATH C:\laragon\www\project1\resources\views/components/input.blade.php ENDPATH**/ ?>