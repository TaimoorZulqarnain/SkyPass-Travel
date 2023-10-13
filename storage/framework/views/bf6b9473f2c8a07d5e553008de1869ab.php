    


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

<div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-600">Settings</h1>
          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
        <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button
                  class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                  data-tab-target=".-tab-item-1">Whatsapp</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                  data-tab-target=".-tab-item-2"> Email</button>
              </div>
              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                  data-tab-target=".-tab-item-4">Overbooking </button>
              </div>
              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                  data-tab-target=".-tab-item-5">On Hold</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-12">
                  <div class="border-top-light mt-30 mb-30"></div>
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">API Endpoint</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Access Token</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-inline-block pt-30">
                  <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Save changes
                  </a>
                </div>
              </div>

              <div class="tabs__pane -tab-item-2">
                <div class="col-xl-10">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">SMTP Server</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">SMTP Name</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">SMTP Username</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">SMTP Password</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">TLS/SSL</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">SMTP Port</label>
                        <input type="text" class='form-control' required>
                      </div>
                    </div>
                  </div>

                  <div class="d-inline-block pt-30">
                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                      Save Changes
                    </a>
                  </div>
                </div>
              </div>
              <div class="tabs__pane -tab-item-4">
                <div class="col-xl-12 col-lg-12" >
                  <div class="agent-overbooking">
                    <div class="row x-gap-100 y-gap-15">
                      <div class="col-6">
                        <div class="form-input ">
                          <label class="lh-1 text-16 text-light-1">Agent</label>
                          <select class='form-control' required>
                          <?php echo get_agents(); ?>

                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-input ">
                          <label class="lh-1 text-16 text-light-1">Overbooking Count</label>
                          <input type="text" class='form-control' required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-inline-block mt-30" style="float:right">
                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white add-overbooking">
                      + Add Agent
                    </a>
                  </div>
                  <div class="d-inline-block mt-30">
                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                      Save Changes
                    </a>
                  </div>
                </div>
              </div>
              <div class="tabs__pane -tab-item-5">
                  <div class="col-xl-12 col-lg-12" >
                  <div class="onhold-time">
                    <div class="row x-gap-100 y-gap-15">
                      <div class="col-4">
                        <div class="form-input ">
                          <label class="lh-1 text-16 text-light-1">Flight days</label>
                          <input type="text" class='form-control' required>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-input ">
                          <label class="lh-1 text-16 text-light-1">On hold time</label>
                          <input type="text" class='form-control' required>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-input ">
                          <label class="lh-1 text-16 text-light-1">Admin Margin</label>
                          <input type="text" class='form-control' required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-inline-block mt-30" style="float:right">
                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white onhold-btn">
                      + Add Agent
                    </a>
                  </div>
                  <div class="d-inline-block mt-30">
                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                      Save Changes
                    </a>
                  </div>
                </div>                </div>
              </div>
            </div>
          </div>      
        </div>
    
          <!--start page footer -->
    <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--start page footer -->
<script>
  $(document).ready(function(){
    $('.onhold-btn').on('click', function(){
      $('.onhold-time').append(' <div class="row x-gap-100 y-gap-15">'+
                      '<div class="col-6">'+
                        '<div class="form-input ">'+
                          '<label class="lh-1 text-16 text-light-1">Flight Days</label>'+
                          '<input type="text" class="form-control" required>'+
                        '</div>'+
                      '</div>'+
                      '<div class="col-6">'+
                        '<div class="form-input ">'+
                          '<label class="lh-1 text-16 text-light-1">On hold time</label>'+
                          '<input type="text" class="form-control" required>'+
                        '</div>'+
                      '</div>'+
                    '</div>');
    });
    
    $('.add-overbooking').on('click', function(){
      $('.agent-overbooking').append(' <div class="row x-gap-100 y-gap-15">'+
                      '<div class="col-6">'+
                      '<div class="form-input ">'+
                      '<label class="lh-1 text-16 text-light-1">Agent</label>'+
                      '<select class="form-control" required>'+
                      '<?php echo get_agents(); ?>'+
                      '</select>'+
                      '</div>'+
                      '</div>'+
                      '<div class="col-6">'+
                      '<div class="form-input ">'+
                      '<label class="lh-1 text-16 text-light-1">Overbooking Count</label>'+
                      '<input type="text" class="form-control" required>'+
                      '</div>'+
                      '</div>'+
                      '</div>');
    });
  });
</script>
      </div>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Skypass_Travel-main\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>