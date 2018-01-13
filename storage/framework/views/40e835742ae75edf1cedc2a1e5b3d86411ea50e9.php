<?php $__env->startSection('content'); ?>
<div class="col-sm-8 blog-main">
    <h1>Create an event</h1>
    
    <hr>
    
    <form method="POST" action="/events">
        
        <?php echo e(csrf_field()); ?>

        
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        
        <?php if($errors->has('title')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('title')); ?></strong>
            </span>
        <?php endif; ?>    
        
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        
        <?php if($errors->has('date')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('date')); ?></strong>
            </span>
        <?php endif; ?>
        
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" name="time">
        </div>
        
        <?php if($errors->has('time')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('time')); ?></strong>
            </span>
        <?php endif; ?>
        
        <div class="form-group">
            <label for="body">Description</label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>
        
        <?php if($errors->has('body')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('body')); ?></strong>
            </span>
        <?php endif; ?>
        
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="public">Public</label>
          </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>