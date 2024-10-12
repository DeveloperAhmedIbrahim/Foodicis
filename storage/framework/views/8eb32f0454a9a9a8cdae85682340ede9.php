
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<?php echo $__env->make('manager_panel.admin_dashboard.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

    <!-- Start Switcher -->
 <?php echo $__env->make('manager_panel.admin_dashboard.layout.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Switcher -->

    <div class="page">
         <!-- app-header -->
     <?php echo $__env->make('manager_panel.admin_dashboard.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
<?php echo $__env->make('manager_panel.admin_dashboard.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
       <?php echo $__env->yieldContent('content'); ?>
        <!-- End::app-content -->

        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <!-- Footer Start -->
<?php echo $__env->make('manager_panel.admin_dashboard.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer End -->

    </div>

    
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
<!-- Popper JS -->
<script src="<?php echo e(asset('assets/libs/@popperjs/core/umd/popper.min.js')); ?>"></script>

<!-- Bootstrap JS -->
<script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Defaultmenu JS -->
<script src="<?php echo e(asset('assets/js/defaultmenu.min.js')); ?>"></script>

<!-- Node Waves JS -->
<script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>

<!-- Sticky JS -->
<script src="<?php echo e(asset('assets/js/sticky.js')); ?>"></script>

<!-- Simplebar JS -->
<script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/simplebar.js')); ?>"></script>

<!-- Color Picker JS -->
<script src="<?php echo e(asset('assets/libs/@simonwep/pickr/pickr.es5.min.js')); ?>"></script>

<!-- JSVector Maps JS -->
<script src="<?php echo e(asset('assets/libs/jsvectormap/js/jsvectormap.min.js')); ?>"></script>

<!-- JSVector Maps MapsJS -->
<script src="<?php echo e(asset('assets/libs/jsvectormap/maps/world-merc.js')); ?>"></script>

<!-- Apex Charts JS -->
<script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- Chartjs Chart JS -->
<script src="<?php echo e(asset('assets/libs/chart.js/chart.min.js')); ?>"></script>

<!-- CRM-Dashboard -->
<script src="<?php echo e(asset('assets/js/crm-dashboard.js')); ?>"></script>

<!-- Custom-Switcher JS -->
<script src="<?php echo e(asset('assets/js/custom-switcher.min.js')); ?>"></script>

<!-- Custom JS -->
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <!-- Custom-Switcher JS -->
    <script src="<?php echo e(asset('assets/js/custom-switcher.min.js')); ?>"></script>

    <!-- Apex Charts JS -->
    <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- Used In Zoomable TIme Series Chart -->
    <script src="<?php echo e(asset('assets/js/dataseries.js')); ?>"></script>

    <!---Used In Annotations Chart-->
    <script src="<?php echo e(asset('assets/js/apexcharts-stock-prices.js')); ?>"></script>

    <!-- Internal Apex Line Charts JS -->
    <script src="<?php echo e(asset('assets/js/apexcharts-line.js')); ?>"></script>



</body>

</html>

<?php /**PATH D:\laragon\www\Foodicis\resources\views/manager_panel/admin_dashboard/layout/layout.blade.php ENDPATH**/ ?>