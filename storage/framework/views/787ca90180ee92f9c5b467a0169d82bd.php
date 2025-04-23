<nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">Le-Klase</a>
            <div class="navbar-nav ms-auto">
                <?php if(auth()->guard()->check()): ?>
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                    <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <button class="nav-link" type="submit">Logout</button>
                    </form>
                <?php else: ?>
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
                <a class="nav-link" href="<?php echo e(route('grades.my')); ?>">My Grades</a>
            </div>
        </div>
    </nav><?php /**PATH F:\laragon\www\eklase-typeshit\resources\views/components/navigation.blade.php ENDPATH**/ ?>