@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Order now</div>

                    <div class="card-body">
                        @if (Auth::check())
                            <form action="{{ route('order.store') }}" method="post">@csrf
                                <div class="form-group ">
                                    <p>Name:{{ auth()->user()->name }}</p>
                                    <p>Email:{{ auth()->user()->email }}</p>
                                    <p>Phone number: <input type="number" class="form-control" name="phone" required></p>
                                    <p>Small pizza order: <input type="number" class="form-control" name="small_pizza"
                                            value="0"></p>
                                    <p>Medium pizza order: <input type="number" class="form-control" name="medium_pizza"
                                            value="0"></p>
                                    <p>Large pizza order: <input type="number" class="form-control" name="large_pizza"
                                            value="0"></p>
                                    <p><input type="hidden" name="pizza_id" value="{{ $pizza->id }}"></p>
                                    <p>Date:<input type="date" name="date" class="form-control" required></p>
                                    <p>Time:<input type="time" name="time" class="form-control" required></p>
                                    <p>Message:<textarea class="form-control" name="body" required></textarea></p>

                                    <p class="text-center">

                                        <button class="btn btn-danger" type="submit">Make order</button>
                                    </p>
                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    @if (session('errmessage'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('errmessage') }}
                                    </div>
                                @endif

                                </div>
                            </form>


                        @else
                            <p><a href="/login">Please login to make order</a></p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>

                    <div class="card-body">


                        <img src="{{ Storage::url($pizza->image) }}" class="img-thumbnail" style="width: 100%;">
                        <p>
                        <h3>{{ $pizza->name }}</h3>
                        </p>
                        <p>
                        <h3>{{ $pizza->description }}em Ipsum is simply dummy text of the printing </h3>
                        </p>
                        <p class="badge badge-success">Vegetarian</p>
                        <p class="lead">Small pizza price:${{ $pizza->small_pizza_price }}</p>
                        <p class="lead">Medium pizza price:${{ $pizza->medium_pizza_price }}</p>
                        <p class="lead">Large pizza price:${{ $pizza->large_pizza_price }}</p>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        a.list-group-item {
            font-size: 18px;
        }

        a.list-group-item:hover {
            background-color: red;
            color: #fff;
        }

        .card-header {
            background-color: red;
            color: #fff;
            font-size: 20px;
        }

    </style>
@endsection
