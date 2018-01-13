<?php $__env->startSection('content'); ?>
<div class="col-sm-8 blog-main">

    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo $__env->make('events.event', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">More</a>
            <a class="btn btn-outline-secondary disabled" href="#">Less</a>
          </nav>

        </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>