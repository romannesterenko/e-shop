@extends('admin.app')
@section('pageInfo')
    <div class="page-header-title">
        <h5 class="m-b-10">Просмотр заказа № <b>{{ $order->order_number }}</b></h5>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="feather icon-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Административная панель</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.orders.index')}}">Список заказов</a></li>
        <li class="breadcrumb-item"><a href="#!">Просмотр заказа № <b>{{ $order->order_number }}</b></a></li>
    </ul>
@endsection
@section('content')
    <div class="container" id="printTable">
        <div>
            <div class="card">
                <div class="row invoice-contact">
                    <div class="col-md-8">
                        <div class="invoice-box row">
                            <div class="col-sm-12">
                                <table class="table table-responsive invoice-table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td><img src="{{asset('/assets/images/logo/dark.png')}}" style="width: 132px" class="m-b-10" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{route('home')}}">Raj Dlya Rybakow</a></td>
                                    </tr>
                                    <tr>
                                        <td>42-600 Pozcdamska 17, Tarnowskie Gory, Poland.</td>
                                    </tr>
                                    <tr>
                                        <td><a class="text-secondary" href="mailto:sale@rajdr.pl" target="_top">sale@rajdr.pl</a></td>
                                    </tr>
                                    <tr>
                                        <td>+48 570-505-860</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="card-block">
                    <div class="row invoive-info">
                        <div class="col-md-4 col-xs-12 invoice-client-info">
                            <h6>Informacje O Kliencie :</h6>
                            <h6 class="m-0">{{ $order->first_name }} {{ $order->last_name }}</h6>
                            <p class="m-0 m-t-10">{{ $order->zipcode }}, {{ $order->city }}, {{ $order->street }} {{ $order->house }}{{ $order->flat!=''?'/'.$order->flat:'' }}</p>
                            <p class="m-0"><a href="tel:{{ $order->phone }}">{{ $order->phone }}</a></p>
                            <p><a class="text-secondary" href="mailto:{{ $order->email }}" target="_top">{{ $order->email }}</a></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h6>Informacje O Zamówieniu :</h6>
                            <table class="table table-responsive invoice-table invoice-order table-borderless">
                                <tbody>
                                <tr>
                                    <th>Data :</th>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Status :</th>
                                    <td>
                                        <div class="border border-secondary rounded-pill text-center py-1 font-weight-bold" style="background-color: {{ $order->statuses()->color }}">{{ $order->statuses()->name }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Id :</th>
                                    <td>
                                        #{{ $order->id }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h6 class="m-b-20">Numer faktury <span>{{ $order->order_number }}</span></h6>
                            <h6 class="text-uppercase text-primary">Całkowita Należność :
                                <span>{{ $order->price }} zł</span>
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table  invoice-detail-table">
                                    <thead>
                                        <tr class="thead-default">
                                            <th>Nazwa produktu</th>
                                            <th>Ilość</th>
                                            <th>Kwota</th>
                                            <th>Całkowity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->products() as $cart_item)
                                        <tr>
                                            <td>
                                                <h6>{{ $cart_item->product->name }}</h6>
                                            </td>
                                            <td>{{ $cart_item->quantity }}</td>
                                            <td>{{ $cart_item->product->selling_price }} zł</td>
                                            <td>{{ $cart_item->product->selling_price*$cart_item->quantity }} zł</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-responsive invoice-table invoice-total">
                                <tbody>
                                <tr>
                                    <th>Suma częściowa :</th>
                                    <td>{{ $order->price }} zł</td>
                                </tr>
                                <tr>
                                    <th>Discount (0%) :</th>
                                    <td> {{ '0.00' }} zł</td>
                                </tr>
                                <tr class="text-info">
                                    <td>
                                        <hr>
                                        <h5 class="text-primary m-r-10">Całkowity :</h5>
                                    </td>
                                    <td>
                                        <hr>
                                        <h5 class="text-primary">{{ $order->price }} zł</h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12 invoice-btn-group text-center">
                    <button type="button" class="btn btn-primary btn-print-invoice m-b-10">Print</button>
                    <button type="button" class="btn btn-secondary m-b-10 ">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection
