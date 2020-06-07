<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<br><br>
		<div class="row">
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3">
				<a href="/post/<?php echo e($post->slug); ?>">
					<img src="<?php echo e(Voyager::image( $post->image )); ?>" style="width:100%">
					<span><?php echo e($post->title); ?></span>
				</a>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/index.blade.php ENDPATH**/ ?>