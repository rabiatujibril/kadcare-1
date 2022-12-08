@extends('layouts.app')

@section('content')
    <div class="row row-cols-xxl-5 row-cols-xxl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 mb-3 row-deck">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-address-book fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Pending</div>
                        <div><span class="h6 mb-0 fw-bold">17</span> <small class="text-success">requests</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-product-hunt fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Approved</div>
                        <div><span class="h6 mb-0 fw-bold">42</span> <small class="text-success">requests</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-briefcase fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Costed</div>
                        <div><span class="h6 mb-0 fw-bold">39</span> <small class="text-success">requests</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-dollar fa-lg"></i>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Delivered</div>
                        <div><span class="h6 mb-0 fw-bold">30</span> <small class="text-success">requests</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-ambulance fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Drug Bank</div>
                        <div><span class="h6 mb-0 fw-bold">135</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-users fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Users</div>
                        <div><span class="h6 mb-0 fw-bold">850</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-users fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">LGA Essentials</div>
                        <div><span class="h6 mb-0 fw-bold">23</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-users fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Health Worker</div>
                        <div><span class="h6 mb-0 fw-bold">430</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-users fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Served Patients</div>
                        <div><span class="h6 mb-0 fw-bold">2,908</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-money fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="small text-uppercase">Facilities</div>
                        <div><span class="h6 mb-0 fw-bold">580</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 row-deck">
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title m-0">Health workers per local government</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="h4 fw-bold mb-0">655</div>
                    <span class="text-muted small">Total health workers</span>
                    <div id="apex-health-workers"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Health worker by gender</h6>
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
                        <label class="small d-flex justify-content-between">Male<span class="fw-bold">491</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color3" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width: 81%;"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="small d-flex justify-content-between">Female<span class="fw-bold">134</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color4" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Facility by sector</h6>
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
                        <label class="small d-flex justify-content-between">Public<span class="fw-bold">520</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="small d-flex justify-content-between">Private<span class="fw-bold">370</span></label>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title m-0">Falicities per local government</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="h4 fw-bold mb-0">580</div>
                    <span class="text-muted small">Total facilities</span>
                    <div id="apex-facilities"></div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('script')
   <script>
       //Avg Treatment Costs
       let health_workers_options = {
           series: [{
               name: 'Health Workers',
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
       let health_workers = new ApexCharts(document.querySelector("#apex-health-workers"), health_workers_options);
       health_workers.render();

       let facilities_options = {
           series: [{
               name: 'Facilities',
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
       let facilities = new ApexCharts(document.querySelector("#apex-facilities"), facilities_options);
       facilities.render();
   </script>
@endpush

