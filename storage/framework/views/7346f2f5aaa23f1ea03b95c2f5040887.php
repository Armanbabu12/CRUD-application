<?php $__env->startSection('content'); ?>

    <div class="row mt-3">
        <div class="col-12">
            <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form class="from-group" method="post" action="<?php echo e(route('task.update',[$task->id])); ?>">
                <?php echo e(csrf_field()); ?>

                <label for="">Task Title:</label>
                <input class="form-control" type="text" name="name" value="<?php echo e($task->name); ?>" placeholder="enter task name">
                <label for="">Task Details:</label>

                <textarea class="form-control" placeholder="Enter Task Details" name="details" id="" cols="30" rows="10"><?php echo e($task->details); ?></textarea>
                <input type="submit" name="submit" value="Create" class="btn btn-success mt-3">
            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('masterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\coders\class3\new\resources\views/user/updateTask.blade.php ENDPATH**/ ?>