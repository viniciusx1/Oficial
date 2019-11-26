<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">               
                <div class="row">
                    <h4 class="col-md-6"><?php echo e($titlePage); ?></h4>
                    <div class="text-right col-md-6">
                        <a class="btn btn-primary " href="<?php echo e(route('functions.create')); ?>">Novo</a>
                    </div>
                </div>
                                
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <div>
                        <ul>
                            <?php $__currentLoopData = $functions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $function): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a>
                                        <?php echo e($function->question); ?>

                                    </a>
                                </li>    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>                                       
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aluno09\Documents\DEV\bhaskaraOficial\resources\views/functions/index.blade.php ENDPATH**/ ?>