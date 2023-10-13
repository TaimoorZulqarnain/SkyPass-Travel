<?php $__env->startSection('content'); ?>
<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Login</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span> Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--  Common Author Area -->
<?php if(Session::has('message')): ?>
<script>
    let Settings = {
        duration:  8000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.success("Success! <?php echo e(Session::get('message')); ?>", Settings);
</script>
<?php endif; ?>

<?php if($errors->any()): ?>
<script>
    let Settings = {
        duration:  8000,
        showProgress: true,
        toastLocation: 'top'
    };
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Toast.danger("Error! <?php echo e($error); ?>", Settings);
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</script>
<?php endif; ?>
<?php if(session('status')): ?>
<script>
    let Settings = {
        duration:  8000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.success("<?php echo e(session('status')); ?>", Settings);
</script>
<?php endif; ?>
 <section id="common_author_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="common_author_boxed">
                        <div class="common_author_heading">
                            <h3>Log into Your Travel and Tour Account</h3>
                        </div>
                        <div class="common_author_form">    
                            <?php if(session('verify_status')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('verify_status')); ?>

                                </div>
                            <?php endif; ?>                        
                            <form method="POST" action="<?php echo e(route('login')); ?>" id="main_author_form">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus autocomplete="username" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" />
                                    <label for="remember_me" class="flex items-center float-start mt-2">
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                        <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
                                    </label>
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot your password?')); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="common_form_submit">
                                    <button type="submit" class="btn btn_theme btn_md"><?php echo e(__('Log in')); ?></button>
                                </div>
                                <div class="have_acount_area">
                                    <p>Dont have an account? <a href="<?php echo e(route('register')); ?>">Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="assets/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Skypass_Travel-main\resources\views/auth/login.blade.php ENDPATH**/ ?>