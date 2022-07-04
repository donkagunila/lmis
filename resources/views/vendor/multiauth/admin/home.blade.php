@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <div class="header-body mb-4">
            <div class="row align-items-end">
                <div class="col">

                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                        Overview
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                        Dashboard
                    </h1>

                </div>
                <div class="col-auto">

                    <!-- Button -->
                    <a href="#!" class="btn btn-primary lift">
                        Register Sample
                    </a>

                </div>
            </div> <!-- / .row -->
        </div>


        <div class="row">
            <div class="col-12 col-lg-6 col-xl">

                <!-- Value  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Applications
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      1,243
                    </span>

                                <!-- Badge -->
                                <span class="badge bg-success-soft mt-n1">
                      +2.5%
                    </span>
                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-bar-chart text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Hours -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Samples
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      123
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-shield text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Exit -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Success %
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      12.5%
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Chart -->
                                <div class="chart chart-sparkline">
                                    <canvas class="chart-canvas" id="sparklineChart" width="150" height="70"
                                            style="display: block; box-sizing: border-box; height: 35px; width: 75px;"></canvas>
                                </div>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Time -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Avg. Time
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      2:37
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-clock text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-12 col-xl-8">

                <!-- Convertions -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Applications
                        </h4>

                        <!-- Caption -->
                        <span class="text-muted me-3">
                  Last year comparision:
                </span>

                        <!-- Switch -->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="cardToggle" data-toggle="chart"
                                   data-target="#conversionsChart" data-trigger="change" data-action="add"
                                   data-dataset="1">
                            <label class="form-check-label" for="cardToggle"></label>
                        </div>

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="conversionsChart" class="chart-canvas" width="1246" height="600"
                                    style="display: block; box-sizing: border-box; height: 300px; width: 623px;"></canvas>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">

                <!-- Traffic -->
                <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                            Traffic Channels
                        </h4>

                        <!-- Tabs -->
                        <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                            <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click"
                                data-action="toggle" data-dataset="0">
                                <a href="#" class="nav-link active" data-bs-toggle="tab">
                                    All
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click"
                                data-action="toggle" data-dataset="1">
                                <a href="#" class="nav-link" data-bs-toggle="tab">
                                    Direct
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart chart-appended">
                            <canvas id="trafficChart" class="chart-canvas" data-toggle="legend"
                                    data-target="#trafficChartLegend" width="549" height="481"
                                    style="display: block; box-sizing: border-box; height: 240.5px; width: 274.5px;"></canvas>
                        </div>

                        <!-- Legend -->
                        <div id="trafficChartLegend" class="chart-legend">
                            <div><span class="chart-legend-item"><span class="chart-legend-indicator"
                                                                       style="background-color: #2C7BE5"></span>Direct</span><span
                                    class="chart-legend-item"><span class="chart-legend-indicator"
                                                                    style="background-color: #A6C5F7"></span>Organic</span><span
                                    class="chart-legend-item"><span class="chart-legend-indicator"
                                                                    style="background-color: #D2DDEC"></span>Referral</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Lab Tests
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-white">
                                    Export
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive mb-0"
                         data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-project">
                                        Lab
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-status">
                                        Status
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-progress">
                                        Progress
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-date">
                                        Due date
                                    </a>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <tr>
                                <td class="goal-project">
                                    Kijitonyama
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    55%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">07/24/22</time>
                                </td>

                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Ruvuma
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    25%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">08/26/22</time>
                                </td>

                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Mtwara
                                </td>
                                <td class="goal-status">
                                    <span class="text-success">●</span> Completed
                                </td>
                                <td class="goal-progress">
                                    100%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/19/22</time>
                                </td>

                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Lindi
                                </td>
                                <td class="goal-status">
                                    <span class="text-danger">●</span> Cancelled
                                </td>
                                <td class="goal-progress">
                                    0%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/25/22</time>
                                </td>

                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fe fe-more-vertical"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
