<?php $__env->startSection('content'); ?>

   <div class="row mt-3">
        <div class="col-12">
            <?php if(session('successMessage')): ?>
                <p class="alert alert-success"><?php echo e(session('successMessage')); ?></p>
            <?php endif; ?>

            <?php $__currentLoopData = $allTasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card text-white <?php if($task->status == 'pending'): ?> bg-secondary <?php else: ?> bg-success <?php endif; ?> mb-3">
                <div class="card-header">
                    Task ID: <?php echo e($task->id); ?>

                    <div class="float-right">

                        <?php if($task->status == 'pending'): ?>
                            <a class="btn btn-success btn-sm" href="<?php echo e(route('task.updateStatus',[$task->id,'complete'])); ?>">Mark As Complete</a>
                        <?php else: ?>
                            <a class="btn btn-warning btn-sm" href="<?php echo e(route('task.updateStatus',[$task->id,'pending'])); ?>">Back to Pending</a>
                        <?php endif; ?>

                        <a class="text-white" href="<?php echo e(route('task.show',[$task->id])); ?>">Edit</a>
                        <a class="text-red" onclick="return confirm('are you sure?')" href="<?php echo e(route('task.delete',[$task->id])); ?>">Delete</a>

                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($task->name); ?></h5>
                    <p class="card-text"><?php echo e($task->details); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($allTasks->links()); ?>


        </div>
   </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('masterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\coders\class3\new\resources\views/home.blade.php ENDPATH**/ ?>