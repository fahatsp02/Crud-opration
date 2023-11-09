<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="/">Products</a>
            </li>

        </ul>
    </nav>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
        <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
  <?php echo $__env->yieldContent('main'); ?>
</body>
</html><?php /**PATH C:\laragon\www\project1\resources\views/layouts/header.blade.php ENDPATH**/ ?>