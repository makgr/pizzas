@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>

                    <div class="card-body">
                      
                        <form action="{{route('frontpage')}}" method="get">
                            <a class="list-group-item list-group-item-action" href="/">Back</a>
                            <input type="submit" value="Vegetarian" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Nonvegetarian" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Traditional" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Peri peri chicken" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Garlic PRAWN" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Chicken & Camembert" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Loaded pepperoni" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Spicy peppy paneer" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Spicy pepperoni" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Vegi pepperoni" name="category" class="list-group-item list-group-item-action">
                        </form>
                    
                       
                    </div>

                </div>
                  <div class="card card-body mt-3">
                  Hey guys, Please support me by giving 5 star.
                  if you want to learn Laravel by developing other real world projects then check out my other laravel course.
                  <a href="https://www.youtube.com/playlist?list=PLevMqpUVAwFg7W53BcF6Rv-s4kXBE9kRv" target="_blank">
                  See courses
                  </a>
                  If you need discount coupons please message on udemy.

                  Subscribe my youtube channel for new course free coupons and free laravel php videos
                  <a href=" <a href="https://www.youtube.com/c/RobotBalok" target="_blank">
                  Youtube
                  </a>"
                  </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza({{count($pizzas)}} pizza)</div>

                    <div class="card-body">

                        <div class="row">
                            @forelse ($pizzas as $pizza )
                                <div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
                                    <img src="{{ Storage::url($pizza->image) }}" class="img-thumbnail" style="width: 100%;height: 60%">
                                    <p>{{ $pizza->name }}</p>
                                    <p>{{ $pizza->description }}</p>
                                <a href="{{route('pizza.show',$pizza->id)}}">
                                        <button class="btn btn-danger mb-1">Order Now</button>
                                    </a>
                                </div>
                            @empty
                                <p>no pizzas to show</p>

                            @endforelse

                        </div>

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
