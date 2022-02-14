<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $arrayCombin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('team.web.dev.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ba3line/Documents/Ismail/Coding-school/Laravel/devoir_01_laravel/resources/views/frontendPage.blade.php ENDPATH**/ ?>