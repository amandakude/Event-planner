<?php $__env->startSection('content'); ?>
<div class="col-sm-8 blog-main">
    <h1><?php echo e($event->title); ?></h1>
    
    <?php echo e($event->body); ?>

    
    <hr>
    
    <div class="keywords">
        <h4>Keywords:</h4>
        <?php $__currentLoopData = $event->keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <?php echo e($keyword->word); ?>

        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <br>
    <form method="POST" action="/events/<?php echo e($event->id); ?>/keywords">
        
        <?php echo e(csrf_field()); ?>

        
        <div class="form-group">
            <label for="word">Add a new keyword:</label>
            <input type="text" class="form-control" id="word" name="word">
        </div>
        
        <?php if($errors->has('word')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('word')); ?></strong>
            </span>
        <br>
        <?php endif; ?>
        
        <button type="submit" class="btn btn-primary">Add</button>
        
    </form>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>