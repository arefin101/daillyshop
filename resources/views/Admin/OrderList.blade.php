@extends('layouts.AdminLayout')

@section('content')

<style>
    .button-group {
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

</style>

    <a style="text-decoration:none" href="{{route('Home')}}">Home &nbsp </a> >
    <a style="pointer-events: none" href="">&nbsp Customize Category</a>
    <div style="float:right">
        <a class="btn btn-primary" href="{{route('Home')}}">Home</a>
    </div>
    <br>
    <h4 style="margin-top:15px; margin-bottom:20px">Customize Categroy</h4>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="card-title col-md-5">Customize Category</div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @foreach($orders as $key => $order)
                            <tr>
                                <th>{{$key}}</th>
                                <td>{{$order->userName}}</td>
                                <td>{{$order->amount}}</td>
                                @if($order->status == 0)
                                    <td>
                                        <span class="badge badge-pill badge-danger">
                                            Pending
                                        </span>
                                    </td>
                                @else
                                    <td>
                                        <span class="badge badge-pill badge-success">
                                            Done
                                        </span>
                                    </td>
                                @endif
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('seeOrder', ['id' => $order->userName])}}">View Detail</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{route('OrderListChangeStatus', ['id' => $order->userName])}}">Change Status</a>
                                         </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

        
    </script>


@stop
