<div class="blog-post">
    <h2 class="blog-post-title">
        <a href='/events/<?php echo e($event->id); ?>'> 
            <?php echo e($event->title); ?>

        </a>
    </h2>
            <p class="blog-post-meta"><?php echo e($event->date); ?> <?php echo e($event->time); ?></p>

            <p><?php echo e($event->body); ?></p>
</div>