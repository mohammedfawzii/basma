@extends('dashboard::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('dashboard.name') !!}</p>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
          <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
              <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Sales <span>| Today</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                          <h6>145</h6>
                          <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                      </div>
                    </div>

                  </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card revenue-card">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Revenue <span>| This Month</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                          <h6>$3,264</h6>
                          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                      </div>
                    </div>

                  </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                  <div class="card info-card customers-card">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Customers <span>| This Year</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                          <h6>1244</h6>
                          <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                        </div>
                      </div>

                    </div>
                  </div>

                </div><!-- End Customers Card -->

                <!-- Reports -->
                <div class="col-12">
                  <div class="card">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Reports <span>/Today</span></h5>

                      <!-- Line Chart -->
                      <div id="reportsChart" style="min-height: 365px;"><div id="apexchartspneaym8l" class="apexcharts-canvas apexchartspneaym8l apexcharts-theme-light" style="width: 981px; height: 350px;"><svg id="SvgjsSvg1001" width="981" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="981" height="350"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" rel="1" seriesname="Sales" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Customers" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Customers" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span></div></div><style type="text/css">
          .apexcharts-legend {
            display: flex;
            overflow: auto;
            padding: 0 10px;
          }
          .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
            flex-wrap: wrap
          }
          .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
            flex-direction: column;
            bottom: 0;
          }
          .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
            justify-content: flex-start;
          }
          .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
            justify-content: center;
          }
          .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
            justify-content: flex-end;
          }
          .apexcharts-legend-series {
            cursor: pointer;
            line-height: normal;
          }
          .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
            display: flex;
            align-items: center;
          }
          .apexcharts-legend-text {
            position: relative;
            font-size: 14px;
          }
          .apexcharts-legend-text *, .apexcharts-legend-marker * {
            pointer-events: none;
          }
          .apexcharts-legend-marker {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin-right: 3px;
            border-style: solid;
          }

          .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
            display: inline-block;
          }
          .apexcharts-legend-series.apexcharts-no-click {
            cursor: auto;
          }
          .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
            display: none !important;
          }
          .apexcharts-inactive-legend {
            opacity: 0.45;
          }</style></foreignObject><rect id="SvgjsRect1007" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1130" class="apexcharts-yaxis" rel="0" transform="translate(9.25, 0)"><g id="SvgjsG1131" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1133" font-family="Helvetica, Arial, sans-serif" x="20" y="31.9" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1134">90</tspan><title>90</title></text><text id="SvgjsText1136" font-family="Helvetica, Arial, sans-serif" x="20" y="61.922222222222224" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1137">80</tspan><title>80</title></text><text id="SvgjsText1139" font-family="Helvetica, Arial, sans-serif" x="20" y="91.94444444444446" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1140">70</tspan><title>70</title></text><text id="SvgjsText1142" font-family="Helvetica, Arial, sans-serif" x="20" y="121.96666666666668" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1143">60</tspan><title>60</title></text><text id="SvgjsText1145" font-family="Helvetica, Arial, sans-serif" x="20" y="151.9888888888889" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1146">50</tspan><title>50</title></text><text id="SvgjsText1148" font-family="Helvetica, Arial, sans-serif" x="20" y="182.01111111111112" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1149">40</tspan><title>40</title></text><text id="SvgjsText1151" font-family="Helvetica, Arial, sans-serif" x="20" y="212.03333333333333" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1152">30</tspan><title>30</title></text><text id="SvgjsText1154" font-family="Helvetica, Arial, sans-serif" x="20" y="242.05555555555554" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1155">20</tspan><title>20</title></text><text id="SvgjsText1157" font-family="Helvetica, Arial, sans-serif" x="20" y="272.0777777777777" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1158">10</tspan><title>10</title></text><text id="SvgjsText1160" font-family="Helvetica, Arial, sans-serif" x="20" y="302.09999999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1161">0</tspan><title>0</title></text></g></g><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(39.25, 30)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMaskpneaym8l"><rect id="SvgjsRect1012" width="937.75" height="276.2" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskpneaym8l"></clipPath><clipPath id="nonForecastMaskpneaym8l"></clipPath><clipPath id="gridRectMarkerMaskpneaym8l"><rect id="SvgjsRect1013" width="979.75" height="318.2" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1031" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1032" stop-opacity="0.3" stop-color="rgba(65,84,241,0.3)" offset="0"></stop><stop id="SvgjsStop1033" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1034" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1053" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1054" stop-opacity="0.3" stop-color="rgba(46,202,106,0.3)" offset="0"></stop><stop id="SvgjsStop1055" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1056" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1075" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1076" stop-opacity="0.3" stop-color="rgba(255,119,29,0.3)" offset="0"></stop><stop id="SvgjsStop1077" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1078" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1008" x1="-0.5" y1="0" x2="-0.5" y2="270.2" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="-0.5" y="0" width="1" height="270.2" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1085" x1="0" y1="271.2" x2="0" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1086" x1="143.34615384615384" y1="271.2" x2="143.34615384615384" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1087" x1="286.6923076923077" y1="271.2" x2="286.6923076923077" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1088" x1="430.03846153846155" y1="271.2" x2="430.03846153846155" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1089" x1="573.3846153846154" y1="271.2" x2="573.3846153846154" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1090" x1="716.7307692307692" y1="271.2" x2="716.7307692307692" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1091" x1="860.076923076923" y1="271.2" x2="860.076923076923" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1081" class="apexcharts-grid"><g id="SvgjsG1082" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1093" x1="0" y1="30.022222222222222" x2="931.75" y2="30.022222222222222" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1094" x1="0" y1="60.044444444444444" x2="931.75" y2="60.044444444444444" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1095" x1="0" y1="90.06666666666666" x2="931.75" y2="90.06666666666666" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1096" x1="0" y1="120.08888888888889" x2="931.75" y2="120.08888888888889" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1097" x1="0" y1="150.11111111111111" x2="931.75" y2="150.11111111111111" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1098" x1="0" y1="180.13333333333333" x2="931.75" y2="180.13333333333333" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1099" x1="0" y1="210.15555555555554" x2="931.75" y2="210.15555555555554" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1100" x1="0" y1="240.17777777777775" x2="931.75" y2="240.17777777777775" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1083" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1103" x1="0" y1="270.2" x2="931.75" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1102" x1="0" y1="1" x2="0" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1084" class="apexcharts-grid-borders"><line id="SvgjsLine1092" x1="0" y1="0" x2="931.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1101" x1="0" y1="270.2" x2="931.75" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1129" x1="0" y1="271.2" x2="931.75" y2="271.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1015" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1035" d="M0 177.1311111111111C75.25673076923076 177.1311111111111 139.7625 150.1111111111111 215.01923076923075 150.1111111111111C265.1903846153846 150.1111111111111 308.1942307692307 186.13777777777779 358.3653846153846 186.13777777777779C408.53653846153844 186.13777777777779 451.5403846153846 117.08666666666667 501.71153846153845 117.08666666666667C551.8826923076923 117.08666666666667 594.8865384615384 144.10666666666665 645.0576923076923 144.10666666666665C695.2288461538461 144.10666666666665 738.2326923076922 24.01777777777778 788.4038461538461 24.01777777777778C838.5749999999999 24.01777777777778 881.5788461538461 102.07555555555555 931.75 102.07555555555555C931.75 102.07555555555555 931.75 102.07555555555555 931.75 270.2C931.75 270.2 0 270.2 0 270.2C0 270.2 0 177.1311111111111 0 177.1311111111111 " fill="url(#SvgjsLinearGradient1031)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpneaym8l)" pathTo="M 0 177.1311111111111C 75.25673076923076 177.1311111111111 139.7625 150.1111111111111 215.01923076923075 150.1111111111111C 265.1903846153846 150.1111111111111 308.1942307692307 186.13777777777779 358.3653846153846 186.13777777777779C 408.53653846153844 186.13777777777779 451.5403846153846 117.08666666666667 501.71153846153845 117.08666666666667C 551.8826923076923 117.08666666666667 594.8865384615384 144.10666666666665 645.0576923076923 144.10666666666665C 695.2288461538461 144.10666666666665 738.2326923076922 24.01777777777778 788.4038461538461 24.01777777777778C 838.5749999999999 24.01777777777778 881.5788461538461 102.07555555555555 931.75 102.07555555555555C 931.75 102.07555555555555 931.75 102.07555555555555 931.75 270.2 L 0 270.2z" pathFrom="M -1 270.2 L -1 270.2 L 215.01923076923075 270.2 L 358.3653846153846 270.2 L 501.71153846153845 270.2 L 645.0576923076923 270.2 L 788.4038461538461 270.2 L 931.75 270.2"></path><path id="SvgjsPath1036" d="M0 177.1311111111111C75.25673076923076 177.1311111111111 139.7625 150.1111111111111 215.01923076923075 150.1111111111111C265.1903846153846 150.1111111111111 308.1942307692307 186.13777777777779 358.3653846153846 186.13777777777779C408.53653846153844 186.13777777777779 451.5403846153846 117.08666666666667 501.71153846153845 117.08666666666667C551.8826923076923 117.08666666666667 594.8865384615384 144.10666666666665 645.0576923076923 144.10666666666665C695.2288461538461 144.10666666666665 738.2326923076922 24.01777777777778 788.4038461538461 24.01777777777778C838.5749999999999 24.01777777777778 881.5788461538461 102.07555555555555 931.75 102.07555555555555C931.75 102.07555555555555 931.75 102.07555555555555 931.75 102.07555555555555M931.75 102.07555555555555 " fill="none" fill-opacity="1" stroke="#4154f1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpneaym8l)" pathTo="M 0 177.1311111111111C 75.25673076923076 177.1311111111111 139.7625 150.1111111111111 215.01923076923075 150.1111111111111C 265.1903846153846 150.1111111111111 308.1942307692307 186.13777777777779 358.3653846153846 186.13777777777779C 408.53653846153844 186.13777777777779 451.5403846153846 117.08666666666667 501.71153846153845 117.08666666666667C 551.8826923076923 117.08666666666667 594.8865384615384 144.10666666666665 645.0576923076923 144.10666666666665C 695.2288461538461 144.10666666666665 738.2326923076922 24.01777777777778 788.4038461538461 24.01777777777778C 838.5749999999999 24.01777777777778 881.5788461538461 102.07555555555555 931.75 102.07555555555555M 931.75 102.07555555555555" pathFrom="M -1 270.2 L -1 270.2 L 215.01923076923075 270.2 L 358.3653846153846 270.2 L 501.71153846153845 270.2 L 645.0576923076923 270.2 L 788.4038461538461 270.2 L 931.75 270.2" fill-rule="evenodd"></path><g id="SvgjsG1016" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g id="SvgjsG1018" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1019" r="4" cx="0" cy="177.1311111111111" class="apexcharts-marker no-pointer-events wgz106sww" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle><circle id="SvgjsCircle1020" r="4" cx="215.01923076923075" cy="150.1111111111111" class="apexcharts-marker no-pointer-events wra7zznm0i" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1021" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1022" r="4" cx="358.3653846153846" cy="186.13777777777779" class="apexcharts-marker no-pointer-events w3ba5bx47" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1023" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1024" r="4" cx="501.71153846153845" cy="117.08666666666667" class="apexcharts-marker no-pointer-events wzd7l126aj" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1025" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1026" r="4" cx="645.0576923076923" cy="144.10666666666665" class="apexcharts-marker no-pointer-events w3rrrd19g" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1027" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1028" r="4" cx="788.4038461538461" cy="24.01777777777778" class="apexcharts-marker no-pointer-events w5oncxrx2" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1029" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1030" r="4" cx="931.75" cy="102.07555555555555" class="apexcharts-marker no-pointer-events wc17hvzxxh" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1037" class="apexcharts-series" zIndex="1" seriesName="Revenue" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1057" d="M0 237.17555555555555C75.25673076923076 237.17555555555555 139.7625 174.12888888888887 215.01923076923075 174.12888888888887C265.1903846153846 174.12888888888887 308.1942307692307 135.1 358.3653846153846 135.1C408.53653846153844 135.1 451.5403846153846 174.12888888888887 501.71153846153845 174.12888888888887C551.8826923076923 174.12888888888887 594.8865384615384 168.12444444444444 645.0576923076923 168.12444444444444C695.2288461538461 168.12444444444444 738.2326923076922 114.08444444444444 788.4038461538461 114.08444444444444C838.5749999999999 114.08444444444444 881.5788461538461 147.10888888888888 931.75 147.10888888888888C931.75 147.10888888888888 931.75 147.10888888888888 931.75 270.2C931.75 270.2 0 270.2 0 270.2C0 270.2 0 237.17555555555555 0 237.17555555555555 " fill="url(#SvgjsLinearGradient1053)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskpneaym8l)" pathTo="M 0 237.17555555555555C 75.25673076923076 237.17555555555555 139.7625 174.12888888888887 215.01923076923075 174.12888888888887C 265.1903846153846 174.12888888888887 308.1942307692307 135.1 358.3653846153846 135.1C 408.53653846153844 135.1 451.5403846153846 174.12888888888887 501.71153846153845 174.12888888888887C 551.8826923076923 174.12888888888887 594.8865384615384 168.12444444444444 645.0576923076923 168.12444444444444C 695.2288461538461 168.12444444444444 738.2326923076922 114.08444444444444 788.4038461538461 114.08444444444444C 838.5749999999999 114.08444444444444 881.5788461538461 147.10888888888888 931.75 147.10888888888888C 931.75 147.10888888888888 931.75 147.10888888888888 931.75 270.2 L 0 270.2z" pathFrom="M -1 270.2 L -1 270.2 L 215.01923076923075 270.2 L 358.3653846153846 270.2 L 501.71153846153845 270.2 L 645.0576923076923 270.2 L 788.4038461538461 270.2 L 931.75 270.2"></path><path id="SvgjsPath1058" d="M0 237.17555555555555C75.25673076923076 237.17555555555555 139.7625 174.12888888888887 215.01923076923075 174.12888888888887C265.1903846153846 174.12888888888887 308.1942307692307 135.1 358.3653846153846 135.1C408.53653846153844 135.1 451.5403846153846 174.12888888888887 501.71153846153845 174.12888888888887C551.8826923076923 174.12888888888887 594.8865384615384 168.12444444444444 645.0576923076923 168.12444444444444C695.2288461538461 168.12444444444444 738.2326923076922 114.08444444444444 788.4038461538461 114.08444444444444C838.5749999999999 114.08444444444444 881.5788461538461 147.10888888888888 931.75 147.10888888888888C931.75 147.10888888888888 931.75 147.10888888888888 931.75 147.10888888888888M931.75 147.10888888888888 " fill="none" fill-opacity="1" stroke="#2eca6a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskpneaym8l)" pathTo="M 0 237.17555555555555C 75.25673076923076 237.17555555555555 139.7625 174.12888888888887 215.01923076923075 174.12888888888887C 265.1903846153846 174.12888888888887 308.1942307692307 135.1 358.3653846153846 135.1C 408.53653846153844 135.1 451.5403846153846 174.12888888888887 501.71153846153845 174.12888888888887C 551.8826923076923 174.12888888888887 594.8865384615384 168.12444444444444 645.0576923076923 168.12444444444444C 695.2288461538461 168.12444444444444 738.2326923076922 114.08444444444444 788.4038461538461 114.08444444444444C 838.5749999999999 114.08444444444444 881.5788461538461 147.10888888888888 931.75 147.10888888888888M 931.75 147.10888888888888" pathFrom="M -1 270.2 L -1 270.2 L 215.01923076923075 270.2 L 358.3653846153846 270.2 L 501.71153846153845 270.2 L 645.0576923076923 270.2 L 788.4038461538461 270.2 L 931.75 270.2" fill-rule="evenodd"></path><g id="SvgjsG1038" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g id="SvgjsG1040" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1041" r="4" cx="0" cy="237.17555555555555" class="apexcharts-marker no-pointer-events wphdwe7qk" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle1042" r="4" cx="215.01923076923075" cy="174.12888888888887" class="apexcharts-marker no-pointer-events wt3oj9t3x" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1043" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1044" r="4" cx="358.3653846153846" cy="135.1" class="apexcharts-marker no-pointer-events wrurg6w4l" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1045" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1046" r="4" cx="501.71153846153845" cy="174.12888888888887" class="apexcharts-marker no-pointer-events wo02bq3hc" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1047" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1048" r="4" cx="645.0576923076923" cy="168.12444444444444" class="apexcharts-marker no-pointer-events wchnaa0ky" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1049" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1050" r="4" cx="788.4038461538461" cy="114.08444444444444" class="apexcharts-marker no-pointer-events wprjip3lv" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1051" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1052" r="4" cx="931.75" cy="147.10888888888888" class="apexcharts-marker no-pointer-events wfrifgwrv" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1059" class="apexcharts-series" zIndex="2" seriesName="Customers" data:longestSeries="true" rel="3" data:realIndex="2"><path id="SvgjsPath1079" d="M0 225.16666666666666C75.25673076923076 225.16666666666666 139.7625 237.17555555555555 215.01923076923075 237.17555555555555C265.1903846153846 237.17555555555555 308.1942307692307 174.12888888888887 358.3653846153846 174.12888888888887C408.53653846153844 174.12888888888887 451.5403846153846 216.16 501.71153846153845 216.16C551.8826923076923 216.16 594.8865384615384 243.17999999999998 645.0576923076923 243.17999999999998C695.2288461538461 243.17999999999998 738.2326923076922 198.14666666666665 788.4038461538461 198.14666666666665C838.5749999999999 198.14666666666665 881.5788461538461 237.17555555555555 931.75 237.17555555555555C931.75 237.17555555555555 931.75 237.17555555555555 931.75 270.2C931.75 270.2 0 270.2 0 270.2C0 270.2 0 225.16666666666666 0 225.16666666666666 " fill="url(#SvgjsLinearGradient1075)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskpneaym8l)" pathTo="M 0 225.16666666666666C 75.25673076923076 225.16666666666666 139.7625 237.17555555555555 215.01923076923075 237.17555555555555C 265.1903846153846 237.17555555555555 308.1942307692307 174.12888888888887 358.3653846153846 174.12888888888887C 408.53653846153844 174.12888888888887 451.5403846153846 216.16 501.71153846153845 216.16C 551.8826923076923 216.16 594.8865384615384 243.17999999999998 645.0576923076923 243.17999999999998C 695.2288461538461 243.17999999999998 738.2326923076922 198.14666666666665 788.4038461538461 198.14666666666665C 838.5749999999999 198.14666666666665 881.5788461538461 237.17555555555555 931.75 237.17555555555555C 931.75 237.17555555555555 931.75 237.17555555555555 931.75 270.2 L 0 270.2z" pathFrom="M -1 270.2 L -1 270.2 L 215.01923076923075 270.2 L 358.3653846153846 270.2 L 501.71153846153845 270.2 L 645.0576923076923 270.2 L 788.4038461538461 270.2 L 931.75 270.2"></path><path id="SvgjsPath1080" d="M0 225.16666666666666C75.25673076923076 225.16666666666666 139.7625 237.17555555555555 215.01923076923075 237.17555555555555C265.1903846153846 237.17555555555555 308.1942307692307 174.12888888888887 358.3653846153846 174.12888888888887C408.53653846153844 174.12888888888887 451.5403846153846 216.16 501.71153846153845 216.16C551.8826923076923 216.16 594.8865384615384 243.17999999999998 645.0576923076923 243.17999999999998C695.2288461538461 243.17999999999998 738.2326923076922 198.14666666666665 788.4038461538461 198.14666666666665C838.5749999999999 198.14666666666665 881.5788461538461 237.17555555555555 931.75 237.17555555555555C931.75 237.17555555555555 931.75 237.17555555555555 931.75 237.17555555555555M931.75 237.17555555555555 " fill="none" fill-opacity="1" stroke="#ff771d" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskpneaym8l)" pathTo="M 0 225.16666666666666C 75.25673076923076 225.16666666666666 139.7625 237.17555555555555 215.01923076923075 237.17555555555555C 265.1903846153846 237.17555555555555 308.1942307692307 174.12888888888887 358.3653846153846 174.12888888888887C 408.53653846153844 174.12888888888887 451.5403846153846 216.16 501.71153846153845 216.16C 551.8826923076923 216.16 594.8865384615384 243.17999999999998 645.0576923076923 243.17999999999998C 695.2288461538461 243.17999999999998 738.2326923076922 198.14666666666665 788.4038461538461 198.14666666666665C 838.5749999999999 198.14666666666665 881.5788461538461 237.17555555555555 931.75 237.17555555555555M 931.75 237.17555555555555" pathFrom="M -1 270.2 L -1 270.2 L 215.01923076923075 270.2 L 358.3653846153846 270.2 L 501.71153846153845 270.2 L 645.0576923076923 270.2 L 788.4038461538461 270.2 L 931.75 270.2" fill-rule="evenodd"></path><g id="SvgjsG1060" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="2"><g id="SvgjsG1062" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1063" r="4" cx="0" cy="225.16666666666666" class="apexcharts-marker no-pointer-events w9l09phkb" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="4"></circle><circle id="SvgjsCircle1064" r="4" cx="215.01923076923075" cy="237.17555555555555" class="apexcharts-marker no-pointer-events wl96llkyrf" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1065" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1066" r="4" cx="358.3653846153846" cy="174.12888888888887" class="apexcharts-marker no-pointer-events wr91iy4cv" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1067" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1068" r="4" cx="501.71153846153845" cy="216.16" class="apexcharts-marker no-pointer-events ww333nl52" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1069" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1070" r="4" cx="645.0576923076923" cy="243.17999999999998" class="apexcharts-marker no-pointer-events wdwor233uk" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1071" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1072" r="4" cx="788.4038461538461" cy="198.14666666666665" class="apexcharts-marker no-pointer-events w0wlm3zqul" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1073" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskpneaym8l)"><circle id="SvgjsCircle1074" r="4" cx="931.75" cy="237.17555555555555" class="apexcharts-marker no-pointer-events wwfovr9q" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="2" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1017" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1039" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1061" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1104" x1="0" y1="0" x2="931.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1105" x1="0" y1="0" x2="931.75" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1106" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1107" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1109" font-family="Helvetica, Arial, sans-serif" x="0" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1110">00:00</tspan><title>00:00</title></text><text id="SvgjsText1112" font-family="Helvetica, Arial, sans-serif" x="143.34615384615384" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1113">01:00</tspan><title>01:00</title></text><text id="SvgjsText1115" font-family="Helvetica, Arial, sans-serif" x="286.6923076923077" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1116">02:00</tspan><title>02:00</title></text><text id="SvgjsText1118" font-family="Helvetica, Arial, sans-serif" x="430.03846153846155" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1119">03:00</tspan><title>03:00</title></text><text id="SvgjsText1121" font-family="Helvetica, Arial, sans-serif" x="573.3846153846154" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1122">04:00</tspan><title>04:00</title></text><text id="SvgjsText1124" font-family="Helvetica, Arial, sans-serif" x="716.7307692307692" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1125">05:00</tspan><title>05:00</title></text><text id="SvgjsText1127" font-family="Helvetica, Arial, sans-serif" x="860.076923076923" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1128">06:00</tspan><title>06:00</title></text></g></g><g id="SvgjsG1162" class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1163" class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown"></g><g id="SvgjsG1164" class="apexcharts-point-annotations apexcharts-hidden-element-shown"></g><rect id="SvgjsRect1165" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1166" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 54.25px; top: 164.2px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/09/18 00:00</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 84, 241);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Sales: </span><span class="apexcharts-tooltip-text-y-value">31</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(46, 202, 106);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">11</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 119, 29);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Customers: </span><span class="apexcharts-tooltip-text-y-value">15</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: -11.7891px; top: 302.2px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 73.4062px;">19/09/18 00:00</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>

                      <script>
                        document.addEventListener("DOMContentLoaded", () => {
                          new ApexCharts(document.querySelector("#reportsChart"), {
                            series: [{
                              name: 'Sales',
                              data: [31, 40, 28, 51, 42, 82, 56],
                            }, {
                              name: 'Revenue',
                              data: [11, 32, 45, 32, 34, 52, 41]
                            }, {
                              name: 'Customers',
                              data: [15, 11, 32, 18, 9, 24, 11]
                            }],
                            chart: {
                              height: 350,
                              type: 'area',
                              toolbar: {
                                show: false
                              },
                            },
                            markers: {
                              size: 4
                            },
                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                            fill: {
                              type: "gradient",
                              gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.3,
                                opacityTo: 0.4,
                                stops: [0, 90, 100]
                              }
                            },
                            dataLabels: {
                              enabled: false
                            },
                            stroke: {
                              curve: 'smooth',
                              width: 2
                            },
                            xaxis: {
                              type: 'datetime',
                              categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                            },
                            tooltip: {
                              x: {
                                format: 'dd/MM/yy HH:mm'
                              },
                            }
                          }).render();
                        });
                      </script>
                      <!-- End Line Chart -->

                    </div>

                  </div>
                </div><!-- End Reports -->

                <!-- Recent Sales -->
                <div class="col-12">
                  <div class="card recent-sales overflow-auto">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                      <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns"><div class="datatable-top">
        <div class="datatable-dropdown">
                <label>
                    <select class="datatable-selector" name="per-page"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="-1">All</option></select> entries per page
                </label>
            </div>
        <div class="datatable-search">
                <input class="datatable-input" placeholder="Search..." type="search" name="search" title="Search within table">
            </div>
    </div>
    <div class="datatable-container"><table class="table table-borderless datatable datatable-table"><thead><tr><th scope="col" data-sortable="true" style="width: 10.714285714285714%;"><button class="datatable-sorter">#</button></th><th scope="col" data-sortable="true" style="width: 23.877551020408163%;"><button class="datatable-sorter">Customer</button></th><th scope="col" data-sortable="true" style="width: 38.36734693877551%;"><button class="datatable-sorter">Product</button></th><th scope="col" data-sortable="true" style="width: 12.040816326530612%;"><button class="datatable-sorter">Price</button></th><th scope="col" data-sortable="true" class="red" style="width: 15%;"><button class="datatable-sorter">Status</button></th></tr></thead><tbody><tr data-index="0"><td scope="row"><a href="#">#2457</a></td><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="1"><td scope="row"><a href="#">#2147</a></td><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td class="green"><span class="badge bg-warning">Pending</span></td></tr><tr data-index="2"><td scope="row"><a href="#">#2049</a></td><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$147</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="3"><td scope="row"><a href="#">#2644</a></td><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td class="green"><span class="badge bg-danger">Rejected</span></td></tr><tr data-index="4"><td scope="row"><a href="#">#2644</a></td><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td class="green"><span class="badge bg-success">Approved</span></td></tr></tbody></table></div>
    <div class="datatable-bottom">
        <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
        <nav class="datatable-pagination"><ul class="datatable-pagination-list"></ul></nav>
    </div></div>

                    </div>

                  </div>
                </div><!-- End Recent Sales -->

                <!-- Top Selling -->
                <div class="col-12">
                  <div class="card top-selling overflow-auto">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body pb-0">
                      <h5 class="card-title">Top Selling <span>| Today</span></h5>

                      <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">Preview</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sold</th>
                            <th scope="col">Revenue</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                            <td>$64</td>
                            <td class="fw-bold">124</td>
                            <td>$5,828</td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                            <td>$46</td>
                            <td class="fw-bold">98</td>
                            <td>$4,508</td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                            <td>$59</td>
                            <td class="fw-bold">74</td>
                            <td>$4,366</td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                            <td>$32</td>
                            <td class="fw-bold">63</td>
                            <td>$2,016</td>
                          </tr>
                          <tr>
                            <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                            <td>$79</td>
                            <td class="fw-bold">41</td>
                            <td>$3,239</td>
                          </tr>
                        </tbody>
                      </table>

                    </div>

                  </div>
                </div><!-- End Top Selling -->

              </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

              <!-- Recent Activity -->
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                  <div class="activity">

                    <div class="activity-item d-flex">
                      <div class="activite-label">32 min</div>
                      <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                      <div class="activity-content">
                        Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                      </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <div class="activite-label">56 min</div>
                      <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                      <div class="activity-content">
                        Voluptatem blanditiis blanditiis eveniet
                      </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <div class="activite-label">2 hrs</div>
                      <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                      <div class="activity-content">
                        Voluptates corrupti molestias voluptatem
                      </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <div class="activite-label">1 day</div>
                      <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                      <div class="activity-content">
                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                      </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <div class="activite-label">2 days</div>
                      <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                      <div class="activity-content">
                        Est sit eum reiciendis exercitationem
                      </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <div class="activite-label">4 weeks</div>
                      <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                      <div class="activity-content">
                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                      </div>
                    </div><!-- End activity item-->

                  </div>

                </div>
              </div><!-- End Recent Activity -->

              <!-- Budget Report -->
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                  <div id="budgetChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" class="echart" _echarts_instance_="ec_1721778072129"><div style="position: relative; width: 458px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="458" height="400" style="position: absolute; left: 0px; top: 0px; width: 458px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                        legend: {
                          data: ['Allocated Budget', 'Actual Spending']
                        },
                        radar: {
                          // shape: 'circle',
                          indicator: [{
                              name: 'Sales',
                              max: 6500
                            },
                            {
                              name: 'Administration',
                              max: 16000
                            },
                            {
                              name: 'Information Technology',
                              max: 30000
                            },
                            {
                              name: 'Customer Support',
                              max: 38000
                            },
                            {
                              name: 'Development',
                              max: 52000
                            },
                            {
                              name: 'Marketing',
                              max: 25000
                            }
                          ]
                        },
                        series: [{
                          name: 'Budget vs spending',
                          type: 'radar',
                          data: [{
                              value: [4200, 3000, 20000, 35000, 50000, 18000],
                              name: 'Allocated Budget'
                            },
                            {
                              value: [5000, 14000, 28000, 26000, 42000, 21000],
                              name: 'Actual Spending'
                            }
                          ]
                        }]
                      });
                    });
                  </script>

                </div>
              </div><!-- End Budget Report -->

              <!-- Website Traffic -->
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                  <div id="trafficChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" class="echart" _echarts_instance_="ec_1721778072130"><div style="position: relative; width: 458px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="458" height="400" style="position: absolute; left: 0px; top: 0px; width: 458px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#trafficChart")).setOption({
                        tooltip: {
                          trigger: 'item'
                        },
                        legend: {
                          top: '5%',
                          left: 'center'
                        },
                        series: [{
                          name: 'Access From',
                          type: 'pie',
                          radius: ['40%', '70%'],
                          avoidLabelOverlap: false,
                          label: {
                            show: false,
                            position: 'center'
                          },
                          emphasis: {
                            label: {
                              show: true,
                              fontSize: '18',
                              fontWeight: 'bold'
                            }
                          },
                          labelLine: {
                            show: false
                          },
                          data: [{
                              value: 1048,
                              name: 'Search Engine'
                            },
                            {
                              value: 735,
                              name: 'Direct'
                            },
                            {
                              value: 580,
                              name: 'Email'
                            },
                            {
                              value: 484,
                              name: 'Union Ads'
                            },
                            {
                              value: 300,
                              name: 'Video Ads'
                            }
                          ]
                        }]
                      });
                    });
                  </script>

                </div>
              </div><!-- End Website Traffic -->

              <!-- News & Updates Traffic -->
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                  <div class="news">
                    <div class="post-item clearfix">
                      <img src="assets/img/news-1.jpg" alt="">
                      <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                      <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/news-2.jpg" alt="">
                      <h4><a href="#">Quidem autem et impedit</a></h4>
                      <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/news-3.jpg" alt="">
                      <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                      <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/news-4.jpg" alt="">
                      <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                      <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                    </div>

                    <div class="post-item clearfix">
                      <img src="assets/img/news-5.jpg" alt="">
                      <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                      <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                    </div>

                  </div><!-- End sidebar recent posts-->

                </div>
              </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

          </div>
        </section>

      </main>
@endsection
