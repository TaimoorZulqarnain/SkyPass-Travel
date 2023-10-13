    


<?php $__env->startSection('content'); ?>
<div class="preloader js-preloader">
  </div>
  <div class="header-margin">
  </div>

    <!--start header -->
    <?php echo $__env->make('admin.partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--end header -->
    <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
   <!--sidebar wrapper -->
   <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--end sidebar wrapper -->
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
  <style>
.ck-editor__editable_inline {
    min-height: 400px;
}
</style>
<div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-600">Front Page</h1>
          </div>
          <div class="col-auto">
            <a href="<?php echo e(URL::to('/')); ?>" target=_blank class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                <i class="fa-solid fa-plus"></i> View Page
            </a>
          </div>
        </div>
        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">                
                
                  <div class="row">
                    <h2>About us</h2>
                    <div class="col-md-12">                                                    
                        <div class="mb-3">
                        <div id="editor"></div>
                        </div>
                    </div>
                  </div>
                     
            </div>
          </div>      
        </div>
    
          <!--start page footer -->
    <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--start page footer -->
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
      </div>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Skypass_Travel-main\resources\views/admin/Frontpage/about.blade.php ENDPATH**/ ?>