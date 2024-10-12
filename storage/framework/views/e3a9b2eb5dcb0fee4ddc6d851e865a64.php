
<?php $__env->startSection('content'); ?>
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::page-header -->

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <p class="fw-semibold fs-18 mb-0">Welcome back, <?php echo e(Auth::user() ? Auth::user()->name : 'Profile'); ?>!</p>
                <span class="fs-semibold text-muted">Track your leads and deals here.</span>
            </div>
            <div class="btn-list mt-md-0 mt-2">
                <button type="button" class="btn btn-primary btn-wave">
                    <i class="ri-filter-3-fill me-2 align-middle d-inline-block"></i>Filters
                </button>
                <button type="button" class="btn btn-outline-secondary btn-wave">
                    <i class="ri-upload-cloud-line me-2 align-middle d-inline-block"></i>Export
                </button>
            </div>
        </div>

         <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <div class="row">

                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-6 col-md-6">
                                <div class="card custom-card overflow-hidden">
                               
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-primary">
                                                    <i class="ti ti-users fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                   
                                                        <p class="text-muted mb-0">Total Ingridients</p>
                                                        <h4 class="fw-semibold mt-1"><?php echo e(@$totalIngredients); ?></h4>
                                                    </div>
                                                    <div id="crm-total-customers"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-primary" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+40%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                    <i class="ti ti-wallet fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Today Sales</p>
                                                        <h4 class="fw-semibold mt-1"><?php echo e(@$todaySales); ?></h4>
                                                    </div>
                                                    <div id="crm-total-revenue"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-secondary" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+25%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-success">
                                                    <i class="ti ti-wave-square fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Total Sales totalAmount</p>
                                                        <h4 class="fw-semibold mt-1"><?php echo e(@$totalSaleAmount); ?></h4>
                                                    </div>
                                                    <div id="crm-conversion-ratio"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-success" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-danger fw-semibold">-12%</p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-warning">
                                                    <i class="ti ti-briefcase fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Total PurchaseAmount</p>
                                                        <h4 class="fw-semibold mt-1"><?php echo e(@$totalPurchaseAmount); ?></h4>
                                                    </div>
                                                    <div id="crm-total-deals"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-warning" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+19%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-warning">
                                                    <i class="ti ti-briefcase fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Total Chefs</p>
                                                        <h4 class="fw-semibold mt-1"><?php echo e(@$chefsCount); ?></h4>
                                                    </div>
                                                    <div id="crm-total-deals"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-warning" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+19%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-warning">
                                                    <i class="ti ti-briefcase fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Total Waste</p>
                                                        <h4 class="fw-semibold mt-1"><?php echo e(@$totalWasteCount); ?></h4>
                                                    </div>
                                                    <div id="crm-total-deals"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-warning" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+19%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>

                        
                    </div>

                </div>
                
                                <!-- Start::row-1 -->
            <div class="row">
                

                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Line Chart With Data Labels</div>
                        </div>
                        <div class="card-body">
                            <div id="line-chart-datalabels"></div>
                        </div>
                    </div>
                </div>
                   
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Line Chart With Data Labels</div>
                        </div>
                        <div class="card-body">
                            <div id="line-chart-datalabels"></div>
                        </div>
                    </div>
                </div>
                

            </div>
            <!--End::row-1 -->
            </div>
        </div>
        <!-- End::row-1 -->


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager_panel.admin_dashboard.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Foodicis\resources\views/manager_panel/admin_dashboard/dashboard.blade.php ENDPATH**/ ?>