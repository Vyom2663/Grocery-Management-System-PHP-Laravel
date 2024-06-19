<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>
<body>

@include('frontend.header')

<section class="shopping-cart">

   <h1 class="title">products added</h1>

   <div class="box-container">
    @php
        $total=0;
    @endphp
    @foreach ($cartItems as $item)


   <form action="{{url('/updatecart')}}" method="POST" class="box">
    @csrf
   <a href="{{url('/wishlist')}}?delete=" class="fas fa-times" onclick="return confirm('delete this from wishlist?');"></a>
      <a href="{{url('deletecartitem/'.$item->id)}}" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
      <a href="{{url('/view_page')}}?pid=" class="fas fa-eye"></a>
      <img src="{{url('frontend/project images/'.$item->image)}}" alt="">
      <div class="name">{{$item->name}}</div>
      <div class="price">Rs. {{$item->price}}/-</div>

      <div class="flex-btn">
         <input type="number" min="1" value="{{$item->quantity}}" class="qty" name="quantity">
         <input type="hidden" name="id" value="{{$item->id}}">
         <input type="submit" value="update" name="update" class="option-btn">

      </div>
      <div class="sub-total"> Sub total : <span>Rs.{{$item->price * $item->quantity}}/-</span> </div>
   </form>
   @php
       $total += ($item->price * $item->quantity);
   @endphp
   @endforeach
   </div>


   <div class="cart-total">
      <p>grand total : <span>Rs. {{$total}}/-</span></p>
      <a href="{{url('/shop')}}" class="option-btn">continue shopping</a>
      <a href="{{url('/cart')}}?delete_all" class="delete-btn ">delete all</a>
      <a href="{{url('/checkout')}}" class="btn  ">proceed to checkout</a>
   </div>

</section>


<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
@include('frontend.footer')
