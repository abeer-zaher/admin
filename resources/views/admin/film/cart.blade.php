@extends('admin.layouts.tables')

@section('table')

<table id="cart" >
<thead>
    <tr>
        <th style="width: 50%">Film</th>
        <th style="width: 10%">Price</th>
        <th style="width: 8%">Quentity</th>
        <th style="width: 22%" class="text-center">Subtotal</th>
    </tr>
</thead>
<tbody>
    @php
        $total = 0
    @endphp
    @if (session('cart'))
     @foreach (session('cart') as $id => $details)

        @php
            $total += $details['price'] * $details['quantity']
        @endphp

        <tr data-id="{{$id}}">
            <td data-th="Film">
                {{$details['film_name']}}
            </td>
            <td data-th="Price">
                {{$details['price']}}
            </td>
            <td data-th="Quantity">
               <input type="number" name="quantity" value="{{$details['quantity']}}" class="form-control quantity cart_update" min="1"/>
            </td>
            <td data-th="Subtotal" class="text-center">${{$details['price'] * $details['quantity']}}
            </td>
            <td class="actions" data-th="">

            <form action="{{route('admin.film.remove',['id' => $id])}}" method="GET">
            <input type="hidden"   value="{{$id}}"/>
            <button  type="submit" id="remove" class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>
                Delete
            </button>
            </form>
            </td>

        </tr>
        @endforeach
    @endif
</tbody>
<tfoot>
    <tr >
        <td
            colspan="5" class="text-right"><h3><strong> Total ${{$total}}</strong></h3>
        </td>
    </tr>
    <tr>
        <td colspan="5" class="text-right">

          <form action="{{route('admin.film.updatecart')}}" method="POST">
                <input type="hidden" value="{{$id}}" />
                <button type="submit" id="update" class="btn btn-success btn-sm cart_update"><i class="fa fa-update-o"></i>
                    Update
                </button>
            </form>


            <a href="{{route('admin.film.show')}}" class="btn btn-danger">
            <i class="fa fa-arrow-left">
            </i>
            Continue Shopping
        </a>
        <a href="{{route('admin.film.cartcheckout')}}" class="btn btn-success">
            Checkout
        </a>

        </td>
    </tr>
</tfoot>
</table>




@endsection
