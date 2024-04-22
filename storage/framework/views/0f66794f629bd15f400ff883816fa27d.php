

<?php $__env->startSection('title','Edição'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1>Editar tarefa</h1>
        
        <form action="<?php echo e(route('home.uptade',['id'=>$noticias->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <br>
                <div class="form-group">
                    <label for="name">Nome: </label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($noticias->name); ?>" placeholder="Digite um Nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="number">Número da solicitação: </label>
                    <input type="number" class="form-control" name="number" value="<?php echo e($noticias->number); ?>" placeholder="Digite o numero do serviço...">
                </div>
                <br>
                <div class="form-group">
                    <label for="obs">Observações: </label>
                    <input type="text" class="form-control" name="obs" value="<?php echo e($noticias->obs); ?>"placeholder="Digite as observações ...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
                </div>
                
                <br>
            </div>
    
    
        </form>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP\news\resources\views/noticias/edit.blade.php ENDPATH**/ ?>