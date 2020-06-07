<!-- Ringkasan Post -->
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-4">
            <img class="card-img-top" src="<?php echo e(Voyager::image( $post->image )); ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo e($post->title); ?></h2>
              <p class="card-text"><?php echo e($post->excerpt); ?></p>
              <a href="/post/<?php echo e($post->slug); ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH C:\xampp\htdocs\blog\resources\views/layouts/ringkasanpost.blade.php ENDPATH**/ ?>