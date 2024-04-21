<h1>Lista de Notícias</h1>

<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h2><?php echo e($item->title); ?></h2>
        <p><?php echo e($item->content); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\PHP\news\resources\views/news/index.blade.php ENDPATH**/ ?>