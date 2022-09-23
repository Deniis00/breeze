<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="<?php echo e(URL::asset(mix('css/app.css'))); ?>">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        

        <!-- Page Heading -->
        

        <!-- Page Content -->
        <main>

            <div class="bg-gray-100 sm:grid grid-cols-8 min-hv-100 lg:min-h-screen">
                
                <div class="col-span-7">
                    <?php echo e($slot); ?>

                </div>


            </div>
        </main>

    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\breeze\resources\views/layouts/app.blade.php ENDPATH**/ ?>