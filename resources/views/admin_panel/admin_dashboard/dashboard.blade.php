@extends('admin_panel.admin_dashboard.layout.layout')
@section('content')
    {{-- <div class="page-wrapper">
        <div class="content">
            <div class="row">

                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4>{{ @$manager }}</h4>
                            <h5>Total Restaurent </h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4>{{ @$leads }}</h4>
                            <h5>Totdal Leads</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das3">
                        <div class="dash-counts">
                            <h4>{{ @$today_leads }}</h4>
                            <h5>Today Leads</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="file"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4>{{ @$manger_request }}</h4>
                            <h5>Manager Requests</h5>
                        </div>
                        <div class="dash-imgs">
                            <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/icons/file-text-icon-01.svg"
                                class="img-fluid" alt="icon">
                        </div>
                    </div>
                </div>

                

            </div>

            <div class="row">
                <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Total Leads</div>
                            </div>
                            <div class="card-body">
                                <div id="totalLeadsChart" class="chart-set"></div> <!-- Total leads chart div -->
                            </div>
                        </div>
                    </div>
            
                </div>
            
                <!-- Include Morris.js and jQuery -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"/>
            
                <script type="text/javascript">
                    $(document).ready(function() {
                        // Function to fetch and display Total Leads Chart
                        function fetchTotalLeadsData() {
                            $.ajax({
                                url: '/admin/get-total-leads-data', // Route for total leads data
                                method: 'GET',
                                success: function(data) {
                                    $('#totalLeadsChart').empty(); // Clear existing chart
                                    Morris.Bar({
                                        element: 'totalLeadsChart',
                                        data: data,
                                        xkey: 'period',
                                        ykeys: ['total_leads'],
                                        labels: ['Total Leads'],
                                        barColors: ['#44c4fa'],
                                        hideHover: 'auto',
                                        resize: true,
                                        barSizeRatio: 0.2,  // Reduce the width of the bars
                                        barGap: 4,          // Gap between bars
                                    });
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            });
                        }
             --}}
                        {{-- // Function to fetch and display Weekly Leads Chart
                        function fetchWeeklyLeadsData() {
                            $.ajax({
                                url: '/admin/get-weekly-leads-data', // Route for weekly leads data
                                method: 'GET',
                                success: function(data) {
                                    $('#weeklyLeadsChart').empty(); // Clear existing chart
                                    Morris.Bar({
                                        element: 'weeklyLeadsChart',
                                        data: data,
                                        xkey: 'period',
                                        ykeys: ['total_leads'],
                                        labels: ['Weekly Leads'],
                                        barColors: ['#664dc9'],
                                        hideHover: 'auto',
                                        resize: true,
                                        barSizeRatio: 0.2,  // Reduce the width of the bars
                                        barGap: 4,          // Gap between bars
                                    });
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            });
                        }
            
                        // Load both Total and Weekly leads charts when the page loads
                        fetchTotalLeadsData();
                        fetchWeeklyLeadsData();
                    });
                </script>
            </div>
            
           
        </div>
    </div> --}}
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
                        {{-- <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card crm-highlight-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <div class="fw-semibold fs-18 text-fixed-white mb-2">Your target is incomplete</div>
                                                    <span class="d-block fs-12 text-fixed-white"><span class="op-7">You have completed</span> <span class="fw-semibold text-warning">48%</span> <span class="op-7">of the given target, you can also check your status</span>.</span>
                                                    <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="javascript:void(0);"><u>Click here</u></a></span>
                                                </div>
                                                <div>
                                                    <div id="crm-main"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header  justify-content-between">
                                        <div class="card-title">
                                            Top Deals
                                        </div>
                                        <div class="dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled crm-top-deals mb-0">
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Michael Jordan</p>
                                                        <span class="text-muted fs-12">michael.jordan@example.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$2,893</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold">
                                                            EK
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Emigo Kiaren</p>
                                                        <span class="text-muted fs-12">emigo.kiaren@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$4,289</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Randy Origoan</p>
                                                        <span class="text-muted fs-12">randy.origoan@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$6,347</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded bg-success-transparent fw-semibold">
                                                            GP
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">George Pieterson</p>
                                                        <span class="text-muted fs-12">george.pieterson@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$3,894</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm avatar-rounded bg-primary-transparent fw-semibold">
                                                            KA
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <p class="fw-semibold mb-0">Kiara Advain</p>
                                                        <span class="text-muted fs-12">kiaraadvain214@gmail.com</span>
                                                    </div>
                                                    <div class="fw-semibold fs-15">$2,679</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Profit Earned</div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body py-0 ps-0">
                                        <div id="crm-profits-earned"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                                                       
                                                            <p class="text-muted mb-0">Total Restaurent</p>
                                                            <h4 class="fw-semibold mt-1">{{ @$manager }}</h4>
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
                                                            <p class="text-muted mb-0">Total Leads</p>
                                                            <h4 class="fw-semibold mt-1">{{ @$leads }}</h4>
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
                                                            <p class="text-muted mb-0">Today Leads</p>
                                                            <h4 class="fw-semibold mt-1">{{ @$today_leads }}</h4>
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
                                                            <p class="text-muted mb-0">Total Leads</p>
                                                            <h4 class="fw-semibold mt-1">{{ @$manger_request }}</h4>
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
                                <div class="card-title">Total Restaurants in {{ date('Y') }}</div>
                            </div>
                            <div class="card-body">
                                <canvas id="total-restaurants"></canvas>
                            </div>
                        </div>
                    </div>
                 
                    
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Total Leads in {{ date('Y') }}</div>
                            </div>
                            <div class="card-body">
                                <canvas id="total-leads"></canvas>
                            </div>
                        </div>
                    </div>
                 
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Make sure to include Chart.js -->

                    <script>
                        const restaurantsCanvas = document.getElementById('total-restaurants');
                        const restaurantsChart = new Chart(restaurantsCanvas, {
                            type: 'line',
                            data: {
                                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                datasets: [{
                                    label: 'Restaurants',
                                    data: [],
                                    fill: true,
                                    borderColor: 'rgb(75, 192, 192)',
                                    tension: 0.1
                                }]
                            },
                        });

                        const leadsCanvas = document.getElementById('total-leads');
                        const leadsChart = new Chart(leadsCanvas, {
                            type: 'line',
                            data: {
                                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                datasets: [{
                                    label: 'Leads',
                                    data: [],
                                    fill: true,
                                    borderColor: '#FF007F',
                                    tension: 0.1
                                }]
                            },
                        });

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
                    
                    
                    
                    {{-- <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Line Chart With Data Labels</div>
                            </div>
                            <div class="card-body">
                                <div id="line-chart-datalabels"></div>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <!--End::row-1 -->
                </div>
            </div>
            <!-- End::row-1 -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
        </div>
    </div>
@endsection
