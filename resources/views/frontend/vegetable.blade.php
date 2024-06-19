@include('frontend.header')
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GMS | Category</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>

<body>

   <section class="products">

      <h1 class="title">products categories Vegetables</h1>

      <div class="box-container">
        @foreach ($vegetables as $item)
               <form action="" class="box" method="POST">
                  <div class="price">Rs.{{$item->price}}<span></span></div>
                  <a href="{{url('/view_page')}}" class="fas fa-eye"></a>
                  <img src="{{url('frontend/project images/'.$item->image)}}" alt="">
                  <div class="name">{{$item->name}}</div>
                  <input type="hidden" name="pid" value="">
                  <input type="hidden" name="p_name" value="">
                  <input type="hidden" name="p_price" value="">
                  <input type="hidden" name="p_image" value="">
                  <input type="number" min="1" value="1" name="p_qty" class="qty">
                  <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
                  <input type="submit" value="add to cart" class="btn" name="add_to_cart">
               </form>
        @endforeach
      </div>

   </section>

   <script src="{{url('frontend/js/script.js')}}"></script>

</body>

</html>
@include('frontend.footer')
