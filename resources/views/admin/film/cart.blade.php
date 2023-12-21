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
               <input type="number" value="{{$details['quantity']}}" class="form-control quantity cart_update" min="1"/>
            </td>
            <td data-th="Subtotal" class="text-center">${{$details['price'] * $details['quantity']}}
            </td>
            <td class="actions" data-th="">
            <button   onclick="" id="remove" name="remove" class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>
                Delete
            </button>
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
            <a href="{{url('/')}}" class="btn btn-danger">
            <i class="fa fa-arrow-left">
            </i>
            Continue Shopping
        </a>
        <button class="btn btn-success">
            <i class="fa fa-money">
            </i>
            Checkout
        </button>
        </td>
    </tr>
</tfoot>
</table>

<script >
    $(".cart_update").change(function(e){
        e.preventDefault();
        var ele =$(this);
        $.ajax({
            url: "{{route('admin.film.update_cart')}}",
            method: "patch",
            data: {
                _token: '{{csrf_token()}}',
                id: ele.parents("tr").find(".quantity").val()
            },
            success: function(responce){
                window.location.reload();
            }
        });
    });
$(document).ready(function(){
$("#remove").on('click',function(e){
    error.log('hit');
    console.log('10');
    e.preventDefault();
    var ele = $(this);

    if(confirm("Do you really want to remove?")){
        $.ajax({
            url: "{{route('admin.film.remove')}}",
            method: "DELETE",
            data: {
                _toke: '{{csrf_token()}}',
                id: ele.parents("tr").attr("data-id")
            },
            success: function(responce){
                window.location.reload();
            }
        });
    }
});
});
</script>


</body>
</html>
