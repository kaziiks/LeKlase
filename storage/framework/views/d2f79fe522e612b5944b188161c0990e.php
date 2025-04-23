<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="welcome-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Welcome to Le-Klase</h1>
                    <p class="lead">A digital platform for managing student grades and academic progress.</p>
                    <div class="mt-4">
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(route('register')); ?>" class="btn btn-primary me-3">Get Started</a>
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-primary">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Features</h5>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list">
                                <li>Easy grade management for teachers</li>
                                <li>Real-time grade viewing for students</li>
                                <li>Secure and reliable platform</li>
                                <li>Track academic progress</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH F:\laragon\www\eklase-typeshit\resources\views/index.blade.php ENDPATH**/ ?>