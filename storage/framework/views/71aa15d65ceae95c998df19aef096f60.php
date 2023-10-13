 
<?php if($errors ->any() > 0): ?>
<div class="alert alert-danger">
    <ul class="pl-15">
        <?php $__currentLoopData = $errors ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>        


<?php if(Session::has('message')): ?>
<script>
    let Settings = {
        duration:  3000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.success("Success! <?php echo e(Session::get('message')); ?>.", Settings);
</script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
<script>
    let Settings = {
        duration:  3000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.danger("Error! <?php echo e(Session::get('error')); ?>.", Settings);
</script>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
<script>
    let Settings = {
        duration:  3000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.warning("Warning! <?php echo e(Session::get('warning')); ?>.", Settings);
</script>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Skypass_Travel-main\resources\views/admin/partials/errors.blade.php ENDPATH**/ ?>