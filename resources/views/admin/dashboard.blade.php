@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Панель управления</h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#!">Панель управления</a></li>
    </ul>
@endsection

@section('content')
        <!-- [ online-order section ] start -->
        <div class="col-md-6 col-xl-4">
            <div class="card Online-Order">
                <div class="card-block">
                    <h5>Online Orders</h5>
                    <h6 class="text-muted d-flex align-items-center justify-content-between m-t-30">Delivery Orders<span class="float-right f-18 text-c-green">237 / 400</span></h6>
                    <div class="progress mt-3">
                        <div class="progress-bar progress-c-theme" role="progressbar" style="width:65%;height:6px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted mt-2 d-block">37% Done</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card Online-Order">
                <div class="card-block">
                    <h5>Pending Orders</h5>
                    <h6 class="text-muted d-flex align-items-center justify-content-between m-t-30">Pending Orders<span class="float-right f-18 text-c-purple">100 / 500</span></h6>
                    <div class="progress mt-3">
                        <div class="progress-bar progress-c-theme2" role="progressbar" style="width:50%;height:6px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted mt-2 d-block">20% Pending</span>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card Online-Order">
                <div class="card-block">
                    <h5>Return Orders</h5>
                    <h6 class="text-muted d-flex align-items-center justify-content-between m-t-30">Return Orders<span class="float-right f-18 text-c-blue">50 / 400</span></h6>
                    <div class="progress mt-3">
                        <div class="progress-bar progress-c-blue" role="progressbar" style="width:40%;height:6px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted mt-2 d-block">10% Return</span>
                </div>
            </div>
        </div>
        <!-- [ online-order section ] end -->

        <!-- [ yearly summary chart ] start -->
        <div class="col-xl-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Yearly Summary</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="row pb-3">
                        <div class="col-md-4 col-6 text-center m-b-10">
                            <h3 class="f-w-300">$2356.4</h3>
                            <span>Invoiced</span>
                        </div>
                        <div class="col-md-4 col-6 text-center m-b-10">
                            <h3 class="f-w-300">$1935.6</h3>
                            <span>Profit</span>
                        </div>
                        <div class="col-md-4 col-12 text-center m-b-10">
                            <h3 class="f-w-300">$468.9</h3>
                            <span>Expenses</span>
                        </div>
                    </div>
                    <div id="bar-chart3" class="bar-chart3" style="height:270px;"></div>
                </div>
            </div>
        </div>
        <!-- [ yearly summary chart ] end -->

        <!-- [ earning-day section ] start -->
        <div class="col-md-6 col-xl-4">
            <div class="card theme-bg earning-date">
                <div class="card-header borderless">
                    <h5 class="text-white">Earnings</h5>
                </div>
                <div class="card-block">
                    <div class="bd-example bd-example-tabs">
                        <div class="tab-content" id="tabContent-pills">
                            <div class="tab-pane fade show active" id="earnings-mon" role="tabpanel" aria-labelledby="pills-earnings-mon">
                                <h2 class="text-white mb-3 f-w-300">359,234<i class="feather icon-arrow-up"></i></h2>
                                <span class="text-white mb-4 d-block">TOTAL EARNINGS</span>
                            </div>
                            <div class="tab-pane fade" id="earnings-tue" role="tabpanel" aria-labelledby="pills-earnings-tue">
                                <h2 class="text-white mb-3 f-w-300">222,586<i class="feather icon-arrow-down"></i></h2>
                                <span class="text-white mb-4 d-block">TOTAL EARNINGS</span>
                            </div>
                            <div class="tab-pane fade" id="earnings-wed" role="tabpanel" aria-labelledby="pills-earnings-wed">
                                <h2 class="text-white mb-3 f-w-300">859,745<i class="feather icon-arrow-up"></i></h2>
                                <span class="text-white mb-4 d-block">TOTAL EARNINGS</span>
                            </div>
                            <div class="tab-pane fade" id="earnings-thu" role="tabpanel" aria-labelledby="pills-earnings-thu">
                                <h2 class="text-white mb-3 f-w-300">785,684<i class="feather icon-arrow-up"></i></h2>
                                <span class="text-white mb-4 d-block">TOTAL EARNINGS</span>
                            </div>
                            <div class="tab-pane fade" id="earnings-fri" role="tabpanel" aria-labelledby="pills-earnings-fri">
                                <h2 class="text-white mb-3 f-w-300">123,486<i class="feather icon-arrow-down"></i></h2>
                                <span class="text-white mb-4 d-block">TOTAL EARNINGS</span>
                            </div>
                            <div class="tab-pane fade" id="earnings-sat" role="tabpanel" aria-labelledby="pills-earnings-sat">
                                <h2 class="text-white mb-3 f-w-300">762,963<i class="feather icon-arrow-up"></i></h2>
                                <span class="text-white mb-4 d-block">TOTAL EARNINGS</span>
                            </div>
                            <div class="tab-pane fade" id="earnings-sun" role="tabpanel" aria-labelledby="pills-earnings-sun">
                                <h2 class="text-white mb-3 f-w-300">984,632<i class="feather icon-arrow-down"></i></h2>
                                <span class="text-white mb-4 d-block">TOTAL EARNINGS</span>
                            </div>
                        </div>
                        <ul class="nav nav-pills align-items-center justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-earnings-mon" data-toggle="pill" href="#earnings-mon" role="tab" aria-controls="earnings-mon" aria-selected="true">Mon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-earnings-tue" data-toggle="pill" href="#earnings-tue" role="tab" aria-controls="earnings-tue" aria-selected="false">Tue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-earnings-wed" data-toggle="pill" href="#earnings-wed" role="tab" aria-controls="earnings-wed" aria-selected="false">Wed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-earnings-thu" data-toggle="pill" href="#earnings-thu" role="tab" aria-controls="earnings-thu" aria-selected="false">Thu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-earnings-fri" data-toggle="pill" href="#earnings-fri" role="tab" aria-controls="earnings-fri" aria-selected="false">Fri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-earnings-sat" data-toggle="pill" href="#earnings-sat" role="tab" aria-controls="earnings-sat" aria-selected="false">Sat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-earnings-sun" data-toggle="pill" href="#earnings-sun" role="tab" aria-controls="earnings-sun" aria-selected="false">Sun</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card theme-bg2">
                <div class="card-block">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto">
                            <img src="assets/images/widget/shape5.png" alt="activity-user">
                        </div>
                        <div class="col">
                            <h2 class="text-white f-w-300">375</h2>
                            <h5 class="text-white">Sale Product</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [earning-day section] end -->

        <!-- [ full width-table ] start -->
        <div class="col-xl-8 col-md-6">
            <div class="card code-table">
                <div class="card-header">
                    <h5>Full Width Table</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="card-block pb-0">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id Number</th>
                                <th>Code</th>
                                <th>Date</th>
                                <th>Budget</th>
                                <th>Status</th>
                                <th class="text-right">Ratings</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <h6 class="mb-1">#467</h6>
                                </td>
                                <td>
                                    <h6 class="mb-1">8765482</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">Nov 14, 2017</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">$ 874.23</h6>
                                </td>
                                <td><a href="#!" class="label theme-bg f-12 text-white">Active</a></td>
                                <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h6 class="mb-1">#466</h6>
                                </td>
                                <td>
                                    <h6 class="mb-1">2366482</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">Nov 13, 2017</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">$ 235.34</h6>
                                </td>
                                <td><a href="#!" class="label theme-bg2 f-12 text-white">Not Active</a></td>
                                <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h6 class="mb-1">#465</h6>
                                </td>
                                <td>
                                    <h6 class="mb-1">8832638</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">Oct 14, 2017</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">$ 233.46</h6>
                                </td>
                                <td><a href="#!" class="label theme-bg f-12 text-white">Active</a></td>
                                <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="mb-1">#464</h6>
                                </td>
                                <td>
                                    <h6 class="mb-1">9632638</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">Dec 17, 2017</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">$ 133.46</h6>
                                </td>
                                <td><a href="#!" class="label theme-bg2 f-12 text-white">Not Active</a></td>
                                <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="mb-1">#463</h6>
                                </td>
                                <td>
                                    <h6 class="mb-1">3332538</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">July 14, 2017</h6>
                                </td>
                                <td>
                                    <h6 class="m-b-0">$ 244.46</h6>
                                </td>
                                <td><a href="#!" class="label theme-bg f-12 text-white">Active</a></td>
                                <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                    <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ full width-table ] end -->

        <!-- [ earning chart ] start -->
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Earnings</h5>
                    <span class="d-block pt-2">Mon 15 - Sun 21</span>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="earning-price mb-1">
                        <h3 class="m-0 f-w-300">$894.39</h3>
                    </div>
                    <div id="Widget-line-chart1" class="WidgetlineChart " style="height:245px;"></div>
                </div>
            </div>
        </div>
        <!-- [ earning chart ] end -->
@endsection

