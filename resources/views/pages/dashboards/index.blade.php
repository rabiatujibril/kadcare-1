@extends('layouts.app')

@section('content')
    <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Pending Requests</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">10</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Approved Requests</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">10</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Cancelled Requests</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">10</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Completed Requests</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">10</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Served Patients</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">584</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Users</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">814</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Facilities</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">2</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted text-uppercase">Total Drugs</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">24</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 row-deck">
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title m-0">REQUESTS PER LGA</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="h4 fw-bold mb-0">10</div>
                    <span class="text-muted small">Total Requests</span>
                    <div id="apex-ATCosts"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Candidates by Gender</h6>
                </div>
                <div class="d-flex justify-content-center">
                    <div id="apex-CandidatesbyGender" style="min-height: 217.7px;"><div id="apexchartsl98dcg9w" class="apexcharts-canvas apexchartsl98dcg9w apexcharts-theme-light" style="width: 300px; height: 217.7px;"><svg id="SvgjsSvg2203" width="300" height="217.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="300" height="217.70000000000002"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 125px;"><div class="apexcharts-legend-series" rel="1" seriesname="Male" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: var(--chart-color3) !important; color: var(--chart-color3); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Male" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Male</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Female" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: var(--chart-color4) !important; color: var(--chart-color4); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Female" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Female</span></div></div><style type="text/css">

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
                                        }</style></foreignObject><g id="SvgjsG2205" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)"><defs id="SvgjsDefs2204"><clipPath id="gridRectMaskl98dcg9w"><rect id="SvgjsRect2207" width="284" height="189" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskl98dcg9w"></clipPath><clipPath id="nonForecastMaskl98dcg9w"></clipPath><clipPath id="gridRectMarkerMaskl98dcg9w"><rect id="SvgjsRect2208" width="282" height="191" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2209" class="apexcharts-pie"><g id="SvgjsG2210" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle2211" r="55.39268292682927" cx="139" cy="93.5" fill="transparent"></circle><g id="SvgjsG2212" class="apexcharts-slices"><g id="SvgjsG2213" class="apexcharts-series apexcharts-pie-series" seriesName="Male" rel="1" data:realIndex="0"><path id="SvgjsPath2214" d="M 139 8.280487804878035 A 85.21951219512196 85.21951219512196 0 1 1 59.76490142210852 62.12860519316424 L 87.49718592437054 73.10859337555675 A 55.39268292682927 55.39268292682927 0 1 0 139 38.10731707317073 L 139 8.280487804878035 z" fill="var(--chart-color3)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="291.6" data:startAngle="0" data:strokeWidth="2" data:value="81" data:pathOrig="M 139 8.280487804878035 A 85.21951219512196 85.21951219512196 0 1 1 59.76490142210852 62.12860519316424 L 87.49718592437054 73.10859337555675 A 55.39268292682927 55.39268292682927 0 1 0 139 38.10731707317073 L 139 8.280487804878035 z" stroke="#ffffff"></path></g><g id="SvgjsG2215" class="apexcharts-series apexcharts-pie-series" seriesName="Female" rel="2" data:realIndex="1"><path id="SvgjsPath2216" d="M 59.76490142210852 62.12860519316424 A 85.21951219512196 85.21951219512196 0 0 1 138.985126389328 8.280489102845422 L 138.9903321530632 38.10731791684953 A 55.39268292682927 55.39268292682927 0 0 0 87.49718592437054 73.10859337555675 L 59.76490142210852 62.12860519316424 z" fill="var(--chart-color4)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="68.39999999999998" data:startAngle="291.6" data:strokeWidth="2" data:value="19" data:pathOrig="M 59.76490142210852 62.12860519316424 A 85.21951219512196 85.21951219512196 0 0 1 138.985126389328 8.280489102845422 L 138.9903321530632 38.10731791684953 A 55.39268292682927 55.39268292682927 0 0 0 87.49718592437054 73.10859337555675 L 59.76490142210852 62.12860519316424 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine2217" x1="0" y1="0" x2="278" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2218" x1="0" y1="0" x2="278" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2206" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--chart-color3);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: var(--chart-color4);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                </div>
                <div class="card-body">
                    <div class="mt-3">
                        <label class="small d-flex justify-content-between">Private Sector<span class="fw-bold">2.8K</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color3" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width: 81%;"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="small d-flex justify-content-between">Government Sector<span class="fw-bold">795</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color4" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Job Statistic</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-JobStatistic" class="ac-line-transparent" style="min-height: 315px;"><div id="apexchartszig5w6dfh" class="apexcharts-canvas apexchartszig5w6dfh apexcharts-theme-light" style="width: 494px; height: 300px;"><svg id="SvgjsSvg2074" width="494" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="494" height="300"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 150px;"><div class="apexcharts-legend-series" rel="1" seriesname="Application" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: var(--chart-color2) !important; color: var(--chart-color2); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Application" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Application</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Sortlist" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: var(--chart-color5) !important; color: var(--chart-color5); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Sortlist" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sortlist</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Rejected" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: var(--chart-color4) !important; color: var(--chart-color4); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Rejected" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Rejected</span></div></div><style type="text/css">

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
                                        }</style></foreignObject><g id="SvgjsG2076" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs2075"><clipPath id="gridRectMaskzig5w6dfh"><rect id="SvgjsRect2082" width="434.96875" height="218.348" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzig5w6dfh"></clipPath><clipPath id="nonForecastMaskzig5w6dfh"></clipPath><clipPath id="gridRectMarkerMaskzig5w6dfh"><rect id="SvgjsRect2083" width="430.96875" height="218.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2081" x1="193.57670454545456" y1="0" x2="193.57670454545456" y2="214.348" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="193.57670454545456" y="0" width="1" height="214.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2097" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2098" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2100" font-family="Helvetica, Arial, sans-serif" x="0" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2101">Jan</tspan><title>Jan</title></text><text id="SvgjsText2103" font-family="Helvetica, Arial, sans-serif" x="38.81534090909091" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2104">Feb</tspan><title>Feb</title></text><text id="SvgjsText2106" font-family="Helvetica, Arial, sans-serif" x="77.63068181818181" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2107">March</tspan><title>March</title></text><text id="SvgjsText2109" font-family="Helvetica, Arial, sans-serif" x="116.44602272727273" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2110">Apr</tspan><title>Apr</title></text><text id="SvgjsText2112" font-family="Helvetica, Arial, sans-serif" x="155.26136363636363" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2113">May</tspan><title>May</title></text><text id="SvgjsText2115" font-family="Helvetica, Arial, sans-serif" x="194.07670454545456" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2116">Jun</tspan><title>Jun</title></text><text id="SvgjsText2118" font-family="Helvetica, Arial, sans-serif" x="232.89204545454544" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2119">July</tspan><title>July</title></text><text id="SvgjsText2121" font-family="Helvetica, Arial, sans-serif" x="271.7073863636364" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2122">Aug</tspan><title>Aug</title></text><text id="SvgjsText2124" font-family="Helvetica, Arial, sans-serif" x="310.5227272727273" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2125">Sept</tspan><title>Sept</title></text><text id="SvgjsText2127" font-family="Helvetica, Arial, sans-serif" x="349.3380681818182" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2128">Oct</tspan><title>Oct</title></text><text id="SvgjsText2130" font-family="Helvetica, Arial, sans-serif" x="388.15340909090907" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2131">Nov</tspan><title>Nov</title></text><text id="SvgjsText2133" font-family="Helvetica, Arial, sans-serif" x="426.96874999999994" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2134">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine2135" x1="0" y1="215.348" x2="426.96875" y2="215.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG2156" class="apexcharts-grid"><g id="SvgjsG2157" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2171" x1="0" y1="0" x2="426.96875" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2172" x1="0" y1="42.869600000000005" x2="426.96875" y2="42.869600000000005" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2173" x1="0" y1="85.73920000000001" x2="426.96875" y2="85.73920000000001" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2174" x1="0" y1="128.60880000000003" x2="426.96875" y2="128.60880000000003" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2175" x1="0" y1="171.47840000000002" x2="426.96875" y2="171.47840000000002" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2176" x1="0" y1="214.348" x2="426.96875" y2="214.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2158" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2159" x1="0" y1="215.348" x2="0" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2160" x1="38.81534090909091" y1="215.348" x2="38.81534090909091" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2161" x1="77.63068181818181" y1="215.348" x2="77.63068181818181" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2162" x1="116.44602272727272" y1="215.348" x2="116.44602272727272" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2163" x1="155.26136363636363" y1="215.348" x2="155.26136363636363" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2164" x1="194.07670454545453" y1="215.348" x2="194.07670454545453" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2165" x1="232.89204545454544" y1="215.348" x2="232.89204545454544" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2166" x1="271.7073863636364" y1="215.348" x2="271.7073863636364" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2167" x1="310.52272727272725" y1="215.348" x2="310.52272727272725" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2168" x1="349.33806818181813" y1="215.348" x2="349.33806818181813" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2169" x1="388.153409090909" y1="215.348" x2="388.153409090909" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2170" x1="426.9687499999999" y1="215.348" x2="426.9687499999999" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2178" x1="0" y1="214.348" x2="426.96875" y2="214.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2177" x1="0" y1="1" x2="0" y2="214.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2084" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2085" class="apexcharts-series" seriesName="Application" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2088" d="M 0 27.86524C 13.585369318181819 27.86524 25.229971590909095 92.16964 38.815340909090914 92.16964C 52.40071022727273 92.16964 64.04531250000001 55.73048 77.63068181818183 55.73048C 91.21605113636365 55.73048 102.86065340909092 130.75228 116.44602272727273 130.75228C 130.03139204545457 130.75228 141.67599431818184 53.58699999999999 155.26136363636365 53.58699999999999C 168.84673295454547 53.58699999999999 180.49133522727274 132.89576 194.07670454545456 132.89576C 207.66207386363638 132.89576 219.30667613636365 81.45224000000002 232.89204545454547 81.45224000000002C 246.4774147727273 81.45224000000002 258.1220170454546 113.60444000000001 271.7073863636364 113.60444000000001C 285.2927556818182 113.60444000000001 296.93735795454546 124.32184000000001 310.5227272727273 124.32184000000001C 324.1080965909091 124.32184000000001 335.7526988636364 94.31312000000001 349.3380681818182 94.31312000000001C 362.92343750000003 94.31312000000001 374.5680397727273 117.8914 388.1534090909091 117.8914C 401.7387784090909 117.8914 413.3833806818182 113.60444000000001 426.96875 113.60444000000001" fill="none" fill-opacity="1" stroke="var(--chart-color2)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="5" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskzig5w6dfh)" pathTo="M 0 27.86524C 13.585369318181819 27.86524 25.229971590909095 92.16964 38.815340909090914 92.16964C 52.40071022727273 92.16964 64.04531250000001 55.73048 77.63068181818183 55.73048C 91.21605113636365 55.73048 102.86065340909092 130.75228 116.44602272727273 130.75228C 130.03139204545457 130.75228 141.67599431818184 53.58699999999999 155.26136363636365 53.58699999999999C 168.84673295454547 53.58699999999999 180.49133522727274 132.89576 194.07670454545456 132.89576C 207.66207386363638 132.89576 219.30667613636365 81.45224000000002 232.89204545454547 81.45224000000002C 246.4774147727273 81.45224000000002 258.1220170454546 113.60444000000001 271.7073863636364 113.60444000000001C 285.2927556818182 113.60444000000001 296.93735795454546 124.32184000000001 310.5227272727273 124.32184000000001C 324.1080965909091 124.32184000000001 335.7526988636364 94.31312000000001 349.3380681818182 94.31312000000001C 362.92343750000003 94.31312000000001 374.5680397727273 117.8914 388.1534090909091 117.8914C 401.7387784090909 117.8914 413.3833806818182 113.60444000000001 426.96875 113.60444000000001" pathFrom="M -1 214.348L -1 214.348L 38.815340909090914 214.348L 77.63068181818183 214.348L 116.44602272727273 214.348L 155.26136363636365 214.348L 194.07670454545456 214.348L 232.89204545454547 214.348L 271.7073863636364 214.348L 310.5227272727273 214.348L 349.3380681818182 214.348L 388.1534090909091 214.348L 426.96875 214.348"></path><g id="SvgjsG2086" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2184" r="0" cx="194.07670454545456" cy="132.89576" class="apexcharts-marker w76ekptsu no-pointer-events" stroke="#ffffff" fill="var(--chart-color2)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2089" class="apexcharts-series" seriesName="Sortlist" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2092" d="M 0 117.8914C 13.585369318181819 117.8914 25.229971590909095 102.88704 38.815340909090914 102.88704C 52.40071022727273 102.88704 64.04531250000001 132.89576 77.63068181818183 132.89576C 91.21605113636365 132.89576 102.86065340909092 162.90448 116.44602272727273 162.90448C 130.03139204545457 162.90448 141.67599431818184 143.61316 155.26136363636365 143.61316C 168.84673295454547 143.61316 180.49133522727274 158.61752 194.07670454545456 158.61752C 207.66207386363638 158.61752 219.30667613636365 169.33492 232.89204545454547 169.33492C 246.4774147727273 169.33492 258.1220170454546 171.47840000000002 271.7073863636364 171.47840000000002C 285.2927556818182 171.47840000000002 296.93735795454546 180.05232 310.5227272727273 180.05232C 324.1080965909091 180.05232 335.7526988636364 175.76536000000002 349.3380681818182 175.76536000000002C 362.92343750000003 175.76536000000002 374.5680397727273 182.19580000000002 388.1534090909091 182.19580000000002C 401.7387784090909 182.19580000000002 413.3833806818182 192.91320000000002 426.96875 192.91320000000002" fill="none" fill-opacity="1" stroke="var(--chart-color5)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskzig5w6dfh)" pathTo="M 0 117.8914C 13.585369318181819 117.8914 25.229971590909095 102.88704 38.815340909090914 102.88704C 52.40071022727273 102.88704 64.04531250000001 132.89576 77.63068181818183 132.89576C 91.21605113636365 132.89576 102.86065340909092 162.90448 116.44602272727273 162.90448C 130.03139204545457 162.90448 141.67599431818184 143.61316 155.26136363636365 143.61316C 168.84673295454547 143.61316 180.49133522727274 158.61752 194.07670454545456 158.61752C 207.66207386363638 158.61752 219.30667613636365 169.33492 232.89204545454547 169.33492C 246.4774147727273 169.33492 258.1220170454546 171.47840000000002 271.7073863636364 171.47840000000002C 285.2927556818182 171.47840000000002 296.93735795454546 180.05232 310.5227272727273 180.05232C 324.1080965909091 180.05232 335.7526988636364 175.76536000000002 349.3380681818182 175.76536000000002C 362.92343750000003 175.76536000000002 374.5680397727273 182.19580000000002 388.1534090909091 182.19580000000002C 401.7387784090909 182.19580000000002 413.3833806818182 192.91320000000002 426.96875 192.91320000000002" pathFrom="M -1 214.348L -1 214.348L 38.815340909090914 214.348L 77.63068181818183 214.348L 116.44602272727273 214.348L 155.26136363636365 214.348L 194.07670454545456 214.348L 232.89204545454547 214.348L 271.7073863636364 214.348L 310.5227272727273 214.348L 349.3380681818182 214.348L 388.1534090909091 214.348L 426.96875 214.348"></path><g id="SvgjsG2090" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2185" r="0" cx="194.07670454545456" cy="158.61752" class="apexcharts-marker wn10mukfi no-pointer-events" stroke="#ffffff" fill="var(--chart-color5)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2093" class="apexcharts-series" seriesName="Rejected" data:longestSeries="true" rel="3" data:realIndex="2"><path id="SvgjsPath2096" d="M 0 167.19144C 13.585369318181819 167.19144 25.229971590909095 190.76972 38.815340909090914 190.76972C 52.40071022727273 190.76972 64.04531250000001 182.19580000000002 77.63068181818183 182.19580000000002C 91.21605113636365 182.19580000000002 102.86065340909092 154.33056000000002 116.44602272727273 154.33056000000002C 130.03139204545457 154.33056000000002 141.67599431818184 192.91320000000002 155.26136363636365 192.91320000000002C 168.84673295454547 192.91320000000002 180.49133522727274 156.47404 194.07670454545456 156.47404C 207.66207386363638 156.47404 219.30667613636365 165.04796000000002 232.89204545454547 165.04796000000002C 246.4774147727273 165.04796000000002 258.1220170454546 173.62188 271.7073863636364 173.62188C 285.2927556818182 173.62188 296.93735795454546 182.19580000000002 310.5227272727273 182.19580000000002C 324.1080965909091 182.19580000000002 335.7526988636364 169.33492 349.3380681818182 169.33492C 362.92343750000003 169.33492 374.5680397727273 158.61752 388.1534090909091 158.61752C 401.7387784090909 158.61752 413.3833806818182 154.33056000000002 426.96875 154.33056000000002" fill="none" fill-opacity="1" stroke="var(--chart-color4)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="2" clip-path="url(#gridRectMaskzig5w6dfh)" pathTo="M 0 167.19144C 13.585369318181819 167.19144 25.229971590909095 190.76972 38.815340909090914 190.76972C 52.40071022727273 190.76972 64.04531250000001 182.19580000000002 77.63068181818183 182.19580000000002C 91.21605113636365 182.19580000000002 102.86065340909092 154.33056000000002 116.44602272727273 154.33056000000002C 130.03139204545457 154.33056000000002 141.67599431818184 192.91320000000002 155.26136363636365 192.91320000000002C 168.84673295454547 192.91320000000002 180.49133522727274 156.47404 194.07670454545456 156.47404C 207.66207386363638 156.47404 219.30667613636365 165.04796000000002 232.89204545454547 165.04796000000002C 246.4774147727273 165.04796000000002 258.1220170454546 173.62188 271.7073863636364 173.62188C 285.2927556818182 173.62188 296.93735795454546 182.19580000000002 310.5227272727273 182.19580000000002C 324.1080965909091 182.19580000000002 335.7526988636364 169.33492 349.3380681818182 169.33492C 362.92343750000003 169.33492 374.5680397727273 158.61752 388.1534090909091 158.61752C 401.7387784090909 158.61752 413.3833806818182 154.33056000000002 426.96875 154.33056000000002" pathFrom="M -1 214.348L -1 214.348L 38.815340909090914 214.348L 77.63068181818183 214.348L 116.44602272727273 214.348L 155.26136363636365 214.348L 194.07670454545456 214.348L 232.89204545454547 214.348L 271.7073863636364 214.348L 310.5227272727273 214.348L 349.3380681818182 214.348L 388.1534090909091 214.348L 426.96875 214.348"></path><g id="SvgjsG2094" class="apexcharts-series-markers-wrap" data:realIndex="2"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2186" r="0" cx="194.07670454545456" cy="156.47404" class="apexcharts-marker wlhtet4rcf no-pointer-events" stroke="#ffffff" fill="var(--chart-color4)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2087" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2091" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG2095" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine2179" x1="0" y1="0" x2="426.96875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2180" x1="0" y1="0" x2="426.96875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2181" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2182" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2183" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2080" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2136" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG2137" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2139" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2140">100</tspan><title>100</title></text><text id="SvgjsText2142" font-family="Helvetica, Arial, sans-serif" x="20" y="74.3696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2143">80</tspan><title>80</title></text><text id="SvgjsText2145" font-family="Helvetica, Arial, sans-serif" x="20" y="117.23920000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2146">60</tspan><title>60</title></text><text id="SvgjsText2148" font-family="Helvetica, Arial, sans-serif" x="20" y="160.10880000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2149">40</tspan><title>40</title></text><text id="SvgjsText2151" font-family="Helvetica, Arial, sans-serif" x="20" y="202.97840000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2152">20</tspan><title>20</title></text><text id="SvgjsText2154" font-family="Helvetica, Arial, sans-serif" x="20" y="245.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2155">0</tspan><title>0</title></text></g></g><g id="SvgjsG2077" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 250.436px; top: 135.896px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Jun</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: var(--chart-color2);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Application (People)</span><span class="apexcharts-tooltip-text-y-value">38</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: var(--chart-color5);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Sortlist (People)</span><span class="apexcharts-tooltip-text-y-value">26</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: var(--chart-color4);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Rejected</span><span class="apexcharts-tooltip-text-y-value">27</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 212.655px; top: 246.348px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 17.7422px;">Jun</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Job Vacancy</h6>
                </div>
                <div class="d-flex justify-content-center">
                    <div id="apex-JobVacancy" style="min-height: 217.7px;"><div id="apexchartscaqi2eaa" class="apexcharts-canvas apexchartscaqi2eaa apexcharts-theme-light" style="width: 300px; height: 217.7px;"><svg id="SvgjsSvg2187" width="300" height="217.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="300" height="217.70000000000002"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 125px;"><div class="apexcharts-legend-series" rel="1" seriesname="Government" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: var(--chart-color2) !important; color: var(--chart-color2); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Government" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Government</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Private" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: var(--chart-color1) !important; color: var(--chart-color1); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Private" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Private</span></div></div><style type="text/css">

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
                                        }</style></foreignObject><g id="SvgjsG2189" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)"><defs id="SvgjsDefs2188"><clipPath id="gridRectMaskcaqi2eaa"><rect id="SvgjsRect2191" width="284" height="189" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcaqi2eaa"></clipPath><clipPath id="nonForecastMaskcaqi2eaa"></clipPath><clipPath id="gridRectMarkerMaskcaqi2eaa"><rect id="SvgjsRect2192" width="282" height="191" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2193" class="apexcharts-pie"><g id="SvgjsG2194" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle2195" r="55.39268292682927" cx="139" cy="93.5" fill="transparent"></circle><g id="SvgjsG2196" class="apexcharts-slices"><g id="SvgjsG2197" class="apexcharts-series apexcharts-pie-series" seriesName="Government" rel="1" data:realIndex="0"><path id="SvgjsPath2198" d="M 139 8.280487804878035 A 85.21951219512196 85.21951219512196 0 0 1 216.1089200321042 129.7847035299601 L 189.12079802086774 117.08505729447407 A 55.39268292682927 55.39268292682927 0 0 0 139 38.10731707317073 L 139 8.280487804878035 z" fill="var(--chart-color2)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="115.2" data:startAngle="0" data:strokeWidth="2" data:value="32" data:pathOrig="M 139 8.280487804878035 A 85.21951219512196 85.21951219512196 0 0 1 216.1089200321042 129.7847035299601 L 189.12079802086774 117.08505729447407 A 55.39268292682927 55.39268292682927 0 0 0 139 38.10731707317073 L 139 8.280487804878035 z" stroke="#ffffff"></path></g><g id="SvgjsG2199" class="apexcharts-series apexcharts-pie-series" seriesName="Private" rel="2" data:realIndex="1"><path id="SvgjsPath2200" d="M 216.1089200321042 129.7847035299601 A 85.21951219512196 85.21951219512196 0 1 1 138.985126389328 8.280489102845422 L 138.9903321530632 38.10731791684953 A 55.39268292682927 55.39268292682927 0 1 0 189.12079802086774 117.08505729447407 L 216.1089200321042 129.7847035299601 z" fill="var(--chart-color1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="244.8" data:startAngle="115.2" data:strokeWidth="2" data:value="68" data:pathOrig="M 216.1089200321042 129.7847035299601 A 85.21951219512196 85.21951219512196 0 1 1 138.985126389328 8.280489102845422 L 138.9903321530632 38.10731791684953 A 55.39268292682927 55.39268292682927 0 1 0 189.12079802086774 117.08505729447407 L 216.1089200321042 129.7847035299601 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine2201" x1="0" y1="0" x2="278" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2202" x1="0" y1="0" x2="278" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2190" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--chart-color2);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: var(--chart-color1);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                </div>
                <div class="card-body">
                    <div class="mt-3">
                        <label class="small d-flex justify-content-between">Private Sector<span class="fw-bold">2.8K</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="small d-flex justify-content-between">Government Sector<span class="fw-bold">795</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="card-body">
                                <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-google fa-2x text-danger"></i></div>
                                <div class="mt-3">
                                    <h5 class="mb-0">Angular Developer</h5>
                                    <span class="text-muted text-uppercase small">ThemeMakker inc. (Paris, France)</span>
                                    <h3 class="mt-2 mb-1">$5k - $9k</h3>
                                    <div class="d-flex align-items-center">
                                        <span class="badge rounded-pill bg-light text-dark me-1">Ful-Time</span>
                                        <span class="text-primary ms-auto">Vacancy. <strong>12</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="text-muted small">Required Skills</span>
                                <ul class="list-group list-group-custom mt-1 mb-2">
                                    <li class="list-group-item">Angular CLI, AngularJs</li>
                                    <li class="list-group-item">NPM, Git, TypeScript</li>
                                    <li class="list-group-item">HTML, SCSS</li>
                                    <li class="list-group-item">Communication</li>
                                </ul>
                                <button type="button" class="btn btn-primary btn-sm">Apply Now</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-body">
                                <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-twitter fa-2x text-info"></i></div>
                                <div class="mt-3">
                                    <h5 class="mb-0">React Developer</h5>
                                    <span class="text-muted text-uppercase small">ThemeMakker inc. (NY, USA)</span>
                                    <h3 class="mt-2 mb-1">$11k - $15k</h3>
                                    <div class="d-flex align-items-center">
                                        <span class="badge rounded-pill bg-light text-dark me-1">Remote</span>
                                        <span class="text-primary ms-auto">Vacancy. <strong>8</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="text-muted small">Required Skills</span>
                                <ul class="list-group list-group-custom mt-1 mb-2">
                                    <li class="list-group-item">ReactJS, Redux</li>
                                    <li class="list-group-item">Node + NPM</li>
                                    <li class="list-group-item">HTML + CSS &amp; JavaScript</li>
                                    <li class="list-group-item">Communication</li>
                                </ul>
                                <button type="button" class="btn btn-primary btn-sm">Apply Now</button>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="card-body">
                                <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-github fa-2x text-dark"></i></div>
                                <div class="mt-3">
                                    <h5 class="mb-0">Fullstack Developer</h5>
                                    <span class="text-muted text-uppercase small">ThemeMakker inc. (DC, USA)</span>
                                    <h3 class="mt-2 mb-1">$17k - $21k</h3>
                                    <div class="d-flex align-items-center">
                                        <span class="badge rounded-pill bg-light text-dark me-1">Part-Time</span>
                                        <span class="text-primary ms-auto">Vacancy. <strong>23</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="text-muted small">Required Skills</span>
                                <ul class="list-group list-group-custom mt-1 mb-2">
                                    <li class="list-group-item">MEAN, RoR &amp; Django</li>
                                    <li class="list-group-item">Database &amp; Web Storage</li>
                                    <li class="list-group-item">HTML, SCSS</li>
                                    <li class="list-group-item">Communication</li>
                                </ul>
                                <button type="button" class="btn btn-primary btn-sm">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="../assets/img/profile_av.png" alt="" class="rounded avatar lg mb-3">
                    <h5 class="mb-0">Manuella Nevoresky</h5>
                    <span class="small text-uppercase text-muted">Web Designer</span>
                    <ul class="social mb-0 list-inline mt-3 mb-4">
                        <li class="list-inline-item"><a href="#" class="p-1"><i class="fa fa-dribbble"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="p-1"><i class="fa fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="p-1"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <div class="mb-3">
                        <small class="text-muted">Phone</small>
                        <div class="mb-0 fw-bold">+123 456 789</div>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted">Email ID</small>
                        <div class="mb-0 fw-bold"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="92f7fefbf3fcf3bce1fffbe6fad2fbfcf4fdbcf1fdff">[email&nbsp;protected]</a></div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="small">Photoshop</div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="small">illustrator</div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width: 81%"></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="small">HTML</div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> </div>
                            </div>
                        </li>
                        <li>
                            <div class="small">CSS</div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4">Top Referrers</h6>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Direct</div>
                        <small class="text-muted">514 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Google</div>
                        <small class="text-muted">784 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Jobs.lever.co.uk</div>
                        <small class="text-muted">105 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Mail Campaign</div>
                        <small class="text-muted">215 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Facebook Campaign</div>
                        <small class="text-muted">980 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">linkedin Post</div>
                        <small class="text-muted">348 Pageview</small>
                    </div>
                    <div>
                        <div class="mb-0 fw-bold">Direct</div>
                        <small class="text-muted">514 Pageview</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="mb-0">Loan to Value</h5>
                    <div class="mt-3" id="apex-LoantoValue" style="min-height: 198.7px;"><div id="apexchartsm614n3n4" class="apexcharts-canvas apexchartsm614n3n4 apexcharts-theme-light" style="width: 214px; height: 198.7px;"><svg id="SvgjsSvg2405" width="214" height="198.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2407" class="apexcharts-inner apexcharts-graphical" transform="translate(10, 0)"><defs id="SvgjsDefs2406"><clipPath id="gridRectMaskm614n3n4"><rect id="SvgjsRect2409" width="202" height="220" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskm614n3n4"></clipPath><clipPath id="nonForecastMaskm614n3n4"></clipPath><clipPath id="gridRectMarkerMaskm614n3n4"><rect id="SvgjsRect2410" width="200" height="222" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2415" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2416" stop-opacity="1" stop-color="var(--chart-color1)" offset="0"></stop><stop id="SvgjsStop2417" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="1"></stop><stop id="SvgjsStop2418" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter2420" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2421" flood-color="#000000" flood-opacity="0.35" result="SvgjsFeFlood2421Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2422" in="SvgjsFeFlood2421Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2422Out"></feComposite><feOffset id="SvgjsFeOffset2423" dx="0" dy="-3" result="SvgjsFeOffset2423Out" in="SvgjsFeComposite2422Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2424" stdDeviation="4 " result="SvgjsFeGaussianBlur2424Out" in="SvgjsFeOffset2423Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2425" result="SvgjsFeMerge2425Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2426" in="SvgjsFeGaussianBlur2424Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2427" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2428" in="SourceGraphic" in2="SvgjsFeMerge2425Out" mode="normal" result="SvgjsFeBlend2428Out"></feBlend></filter><filter id="SvgjsFilter2431" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2432" flood-color="#000000" flood-opacity="0.24" result="SvgjsFeFlood2432Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2433" in="SvgjsFeFlood2432Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2433Out"></feComposite><feOffset id="SvgjsFeOffset2434" dx="0" dy="3" result="SvgjsFeOffset2434Out" in="SvgjsFeComposite2433Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2435" stdDeviation="4 " result="SvgjsFeGaussianBlur2435Out" in="SvgjsFeOffset2434Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2436" result="SvgjsFeMerge2436Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2437" in="SvgjsFeGaussianBlur2435Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2438" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2439" in="SourceGraphic" in2="SvgjsFeMerge2436Out" mode="normal" result="SvgjsFeBlend2439Out"></feBlend></filter><linearGradient id="SvgjsLinearGradient2444" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2445" stop-opacity="1" stop-color="var(--chart-color1)" offset="0"></stop><stop id="SvgjsStop2446" stop-opacity="1" stop-color="var(--chart-color2)" offset="1"></stop><stop id="SvgjsStop2447" stop-opacity="1" stop-color="var(--chart-color2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG2411" class="apexcharts-radialbar"><g id="SvgjsG2412"><g id="SvgjsG2413" class="apexcharts-tracks"><g id="SvgjsG2414" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 48.89315869728007 147.1068413027199 A 69.44756097560978 69.44756097560978 0 1 1 48.978941054342876 147.19247407182777" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="9.409024390243905" stroke-dasharray="0" class="apexcharts-radialbar-area" filter="url(#SvgjsFilter2420)" data:pathOrig="M 48.89315869728007 147.1068413027199 A 69.44756097560978 69.44756097560978 0 1 1 48.978941054342876 147.19247407182777"></path></g></g><g id="SvgjsG2429"><g id="SvgjsG2443" class="apexcharts-series apexcharts-radial-series" seriesName="Percentxx" rel="1" data:realIndex="0"><path id="SvgjsPath2448" d="M 48.89315869728007 147.1068413027199 A 69.44756097560978 69.44756097560978 0 0 1 121.75246475849619 32.740639419640075" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2444)" stroke-opacity="1" stroke-linecap="round" stroke-width="13.44146341463415" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="155" data:value="43" index="0" j="0" data:pathOrig="M 48.89315869728007 147.1068413027199 A 69.44756097560978 69.44756097560978 0 0 1 121.75246475849619 32.740639419640075"></path></g><circle id="SvgjsCircle2430" r="64.74304878048783" cx="98" cy="98" class="apexcharts-radialbar-hollow" fill="#ffffff" filter="url(#SvgjsFilter2431)"></circle><g id="SvgjsG2440" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2441" font-family="Helvetica, Arial, sans-serif" x="98" y="88" text-anchor="middle" dominant-baseline="auto" font-size="17px" font-weight="600" fill="#888888" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Percent %</text><text id="SvgjsText2442" font-family="Helvetica, Arial, sans-serif" x="98" y="130" text-anchor="middle" dominant-baseline="auto" font-size="36px" font-weight="400" fill="#111111" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">43</text></g></g></g></g><line id="SvgjsLine2449" x1="0" y1="0" x2="196" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2450" x1="0" y1="0" x2="196" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2408" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <h3 class="mb-0 text-primary">$25,480</h3>
                    <span class="text-muted small">Loan Balance</span>
                    <h6 class="mt-3 mb-0 fw-bold text-danger">102.10%</h6>
                    <span class="text-muted small">Debt Service Coverage</span>
                    <h6 class="mt-3 mb-0 fw-bold">Debt Yield</h6>
                    <span class="text-muted">22.74%</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
   <script>
       //Avg Treatment Costs
       var options = {
           series: [{
               name: 'Requests',
               data: [123,80,114,109,112,146,137,123,99,80,100,90,45,50,12,30,90,130,29,20,44,67,90]
           }],
           chart: {
               height: 285,
               type: 'bar',
               toolbar: {
                   show: false,
               },
           },
           colors: ['var(--chart-color1)'],
           plotOptions: {
               bar: {
                   dataLabels: {
                       position: 'top', // top, center, bottom
                   },
               }
           },
           dataLabels: {
               enabled: true,
               formatter: function (val) {
                   return val + "";
               },
               offsetY: -20,
               style: {
                   fontSize: '12px',
                   colors: ['var(--color-500)'],
               }
           },
           xaxis: {
               categories: ["BIRNIN GWARI", "CHIKUN", "GIWA", "IGABI", "IKARA", "JABA", "JEMA'A", "KACHIA", "KADUNA NORTH", "KADUNA SOUTH", "KAGARKO", "KAJURU", "KAURA", "KAURU", "KUBAU", "KUDAN", "LERE", "MAKARFI", "SABON GARI", "SANGA", "SOBA", "ZANGON KATAF", "ZARIA"],
               position: 'bottom',
               axisBorder: {
                   show: false
               },
               axisTicks: {
                   show: false
               },
               tooltip: {
                   enabled: true,
               }
           },

       };
       let chart = new ApexCharts(document.querySelector("#apex-ATCosts"), options);
       chart.render();
   </script>
@endpush

