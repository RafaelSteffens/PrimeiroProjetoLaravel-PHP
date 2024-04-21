<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('---------')); ?></div>
                <h1>Lista de Tarefas</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Number</th>
                    <th scope="col">OBS</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($noticia->id); ?></td>
                    <td><?php echo e($noticia->created_at); ?></td> <!-- ou $noticia->updated_at para data de atualização -->
                    <td><?php echo e($noticia->name); ?></td>
                    <td><?php echo e($noticia->number); ?></td>
                    <td><?php echo e($noticia->obs); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                </tbody>
                </table>
                    
                <div class="card-body">
                    
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('DEV CONTRATADOOO')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP\news\resources\views/home.blade.php ENDPATH**/ ?>