    


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
            <h1 class="text-30 lh-14 fw-600">All Airlines</h1>
            <?php echo $__env->make('admin.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
          <div class="col-auto">
            <a href="<?php echo e(URL::to('/admin/create_airline')); ?>" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                <i class="fa-solid fa-plus"></i> Add Airline
            </a>
          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-2">
                  <table class="table-4 -border-bottom col-12" id="airline_tbl">
                    <thead class="bg-light-2">
                      <tr>
                        <th>
                         #
                        </th>
                        <th>Airline Title</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Airlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($airline->name); ?></td>
                        <td>
                          <img src="<?php echo e(asset('uploads/airline_images/'.$airline->image)); ?>" width="100px" height="80px" alt="image"> 
                        </td>
                        <td>
                          <div class="row x-gap-10 y-gap-10 items-center">
                              <a href="<?php echo e(route('airline.edit',$airline->id)); ?>" class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-edit text-16 text-light-1"></i>
                              </a>
                              <a href="<?php echo e(route('airline.delete', ['id' => $airline->id])); ?>" class="flex-center bg-light-2 rounded-4 size-35" onclick="confirmation(event)">
                                <i class="icon-trash-2 text-16 text-light-1"></i>
                              </a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    
          <!--start page footer -->
    <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--start page footer -->

      <script>
        $(document).ready(function (){
          $('#airline_tbl').DataTable();
        });
      </script>

    <script>
      function confirmation(e){
        e.preventDefault();
        var urlRedirect = e.currentTarget.getAttribute('href');
        console.log(urlRedirect);
        swal({
          title:"Are You Sure to delete this",
          text: "You won't be able to revert this delete",
          icon: "warning",
          buttons: true,
          dangerMode:true,
        })
        .then((willCancel)=>
        {
          if(willCancel){
            window.location.href=urlRedirect;
          }
        });
      }
    </script>
       
      </div>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Skypass_Travel-main\resources\views/admin/Airline/index.blade.php ENDPATH**/ ?>