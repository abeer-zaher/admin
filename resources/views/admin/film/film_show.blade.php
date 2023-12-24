<!DOCTYPE html>
<html>
    <head>
        <title>
            Shopping Cart add to cart
        </title>
        <link href="{{asset('assets/admin/css/app.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdeliver.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdeliver.net/npm/bootstrap@4.5.3/dist/.min.js"></script>


        </head>
        <body>
           <br>
            <div class="container">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
                @endif
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="dropdown">
                            <form action="{{route('admin.film.cart')}}">
                            <button type="submit" class="btn btn-primary" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart" aria-hidden="true">
                                </i>
                               Cart  <span class="badge badge-pill badge-danger">{{count((array) session('cart'))}}</span>
                             </button>
                             </form>
                            <div class="dropdown-menu">
                                <div class="row total-header-section">
                                    @php $total = 0 @endphp
                                    @foreach ((array) session('cart') as $id =>$details)
                                        @php
                                            $total += $details['price'] * $details['quantity']
                                        @endphp

                                    @endforeach
                                    <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                        <p> Total: <span class="text-info">${{$total}}</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                        <a href="{{route('admin.film.cart')}}" class="btn btn-primary btn-block">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($films as $film)

                     <div class="img_thumbnail">
                        <img src="{{ url($film->photo) }}" alt="photo" class="img-fluid">
                        <div class="caption">
                            <h4>{{$film->name}}</h4>
                            <p>{{$film->description}}</p>
                            <p><strong>Price:</strong>{{$film->price}}</p>
                            <p class="btn-holder"><a href="{{route('admin.film.add_to_cart',['id'=>$film->id])}}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a></p>
                        </div>


                    </div>

                    @endforeach
                </div>


            </div>
        </body>

</html>
