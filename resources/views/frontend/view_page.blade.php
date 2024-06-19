@include('frontend.header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>quick view</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>
<body>
<section class="quick-view">

   <h1 class="title">quick view</h1>
    @foreach ($product as $data)


   <form action="" class="box" method="POST">
      <div class="price">Rs.{{$data->price}}<span></span>/-</div>
      <img src="{{url('frontend/project images/'.$data->image)}}" alt="">
      <div class="name">{{$data->name}}</div>
      <div class="details">{{$data->details}}</div>
      <input type="hidden" name="pid" value="{{$data->id}}">
      <input type="hidden" name="p_name" value="{{$data->name}}">
      <input type="hidden" name="p_price" value="{{$data->price}}">
      <input type="hidden" name="p_image" value="{{$data->image}}">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   @endforeach
</section>

<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
@include('frontend.footer')
