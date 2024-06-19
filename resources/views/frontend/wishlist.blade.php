@include('frontend.header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>wishlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>
<body>
<section class="wishlist">

   <h1 class="title">products added</h1>

   <div class="box-container">
    @foreach ($wishlistItems as $item)
   <form action="" method="POST" class="box">
    @csrf
      <a href="wishlist.php?delete=" class="fas fa-times" onclick="return confirm('delete this from wishlist?');"></a>
      <a href="{{url('/view_page')}}pid=" class="fas fa-eye"></a>
      <img src="{{url('frontend/project images/'.$item->image)}}" alt="">
      <div class="name">{{$item->name}}</div>
      <div class="price">Rs. {{$item->price}}/-</div>
      <input type="number" min="1" value="{{$item->quantity}}" class="qty" name="quantity">
      <input type="hidden" name="pid" value="">
      <input type="hidden" name="p_name" value="">
      <input type="hidden" name="p_price" value="">
      <input type="hidden" name="p_image" value="">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   </form>
   @endforeach
   </div>

   <div class="wishlist-total">
      <p>grand total : <span>Rs. /-</span></p>
      <a href="{{url('/shop')}}" class="option-btn">continue shopping</a>
      <a href="wishlist.php?delete_all" class="delete-btn ">delete all</a>
   </div>

</section>
<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
@include('frontend.footer')
