<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <?php $__env->startPush('css'); ?>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Task Manager</a>
                        <div>
                            <a class="navbar-brand" href="<?php echo e(route('task.create.show')); ?>">Create</a>

                        </div>
                </nav>

                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
    </div>

    <?php $__env->startPush('js'); ?>
</body>
</html>
<?php /**PATH H:\xampp\htdocs\coders\class3\new\resources\views/masterLayout.blade.php ENDPATH**/ ?>