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
                            <th>Product</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @foreach($cart as $key => $item)
                            <tr>
                                <th>{{$key+1}}</th>
                                <td>{{$item->productName}}</td>
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
