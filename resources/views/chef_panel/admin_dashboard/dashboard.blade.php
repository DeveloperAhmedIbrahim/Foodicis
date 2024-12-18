@extends('chef_panel.admin_dashboard.layout.layout')
@section('content')
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::page-header -->

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <p class="fw-semibold fs-18 mb-0">Welcome back, {{ Auth::user() ? Auth::user()->name : 'Profile' }}!</p>
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
                            <div class="col-xxl-6 col-lg-6 col-md-6">
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
                                                   
                                                        <p class="text-muted mb-0">Total Active Order</p>
                                                        <h4 class="fw-semibold mt-1">{{ @$activeOrders }}</h4>
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
                            <div class="col-xxl-6 col-lg-6 col-md-6">
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
                                                        <p class="text-muted mb-0">Today CompleteOrders</p>
                                                        <h4 class="fw-semibold mt-1">{{ @$completeOrders }}</h4>
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
                            <div class="col-xxl-6 col-lg-6 col-md-6">
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
                                                        <p class="text-muted mb-0">Total Dishest</p>
                                                        <h4 class="fw-semibold mt-1">{{ @$totalDishes }}</h4>
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
                            <div class="col-xxl-6 col-lg-6 col-md-6">
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
                                                        <p class="text-muted mb-0">Total WasteAmount</p>
                                                        <h4 class="fw-semibold mt-1">{{ @$totalWasteAmount }}</h4>
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
                            <div class="card-title">Total Orders in {{ date('Y') }}</div>
                        </div>
                        <div class="card-body">
                            <canvas id="total-orders"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Total Waste Units in {{ date('Y') }}</div>
                        </div>
                        <div class="card-body">
                            <canvas id="total-wastes"></canvas>
                        </div>
                    </div>
                </div>
   
            </div>
             
{{-- 
                <script>
                    async function fetchChartData() {
                        try {
                            const response = await fetch('/admin/get-weekly-leads-data'); // Adjust the API endpoint as needed
                            const data = await response.json();
                    
                            const labels = data.map(item => item.period);
                            const totalLeads = data.map(item => item.total_leads);
                    
                            renderChart(labels, totalLeads);
                        } catch (error) {
                            console.error('Error fetching data:', error);
                        }
                    }
                
                    function renderChart(labels, totalLeads) {
                        const ctx = document.getElementById('line-chart').getContext('2d');
                        const lineChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: 'Total Leads',
                                    data: totalLeads,
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    fill: true,
                                    tension: 0.4 // Smooth curve
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    }
                
                    // Call the function to fetch data
                    fetchChartData();
                </script>
                 --}}
                

            </div>
            <!--End::row-1 -->
            </div>
        </div>
        <!-- End::row-1 -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ordersCanvas = document.getElementById('total-orders');
            const ordersChart = new Chart(ordersCanvas, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Orders',
                        data: [],
                        fill: true,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
            });

            const wastesCanvas = document.getElementById('total-wastes');
            const wastesChart = new Chart(wastesCanvas, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Wastes',
                        data: [],
                        fill: true,
                        borderColor: '#FF007F',
                        tension: 0.1
                    }]
                },
            });
        </script>

    </div>
</div>
@endsection
 