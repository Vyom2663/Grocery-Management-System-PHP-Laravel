@include('frontend.header')


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | GMS</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>

<body>
   <div class="popup" id="popup">
      <h3>Write your pincode here</h3>
      <h4>to check in your area our system is available or not</h4>

      <input type="text" name="pincode" placeholder="Enter Pincode here Ex. 396445" maxlength="6">
      <input type="submit" value="Check" onclick="closepopup()">
   </div>

   <div class="home-bg">

      <section class="home">

         <div class="content">
            <span>Freshers are here with fresh Products</span>
            <h3>WELCOME TO OUR ONLINE GROCERY STORE,,</h3>
            <p>Click on below button to know more about us</p>
            <a href="{{url('/about')}}" class="btn">about us</a>
         </div>

      </section>

   </div>

   <section class="home-category">

      <h1 class="title">shop by category</h1>

      <div class="box-container">

         <div class="box">
           <img src="{{url('frontend/images/cat-9.png')}}" alt="">
            <h3>Fruits</h3>
            <p>Our Fruits are also branded..</p>

            <a href="{{url('/category')}}" class="btn">fruits</a>

         </div>


         <div class="box">
            <img src="{{url('frontend/images/cat-7.png')}}" alt="">
            <h3>Snacks</h3>
            <p>Can we eat snacks together.... waiting for your click</p>
            <a href="{{url('/snacks')}}?category=meat" class="btn">Snacks</a>
         </div>

         <div class="box">
            <img src="{{url('frontend/images/cat-10.png')}}" alt="">
            <h3>vegitables</h3>
            <p>Lets cook something,, our vegetables are waiting for your click</p>
            <a href="{{url('/vegetable')}}?category=vegitables" class="btn">vegitables</a>
         </div>

         <div class="box">
            <img src="{{url('frontend/images/non-veg.png')}}" alt="">
            <h3>Non Vagetables</h3>
            <p>Want some Non-Veg??</p>
            <a href="{{url('/nonveg')}}?category=fish" class="btn">Non-Veg</a>
         </div>

      </div>

   </section>

  <section class="products">

      <h1 class="title">latest products</h1>

      <div class="box-container">
        @foreach ($allProducts as $item)
               <form action="{{url('/cart')}}" class="box" method="post">
                @csrf
                  <div class="price">Rs.{{$item->price}}<span></span></div>
                  <a href="{{url('/view_page')}}" class="fas fa-eye"></a>
                  <img src="{{url('frontend/project images/'.$item->image)}}" alt="">
                  <div class="name">{{$item->name}}</div>

                  <input type="hidden" name="p_name" value="{{$item->name}}">
                  <input type="hidden" name="p_price" value="{{$item->price}}">
                  <input type="hidden" name="p_image" value="{{$item->image}}">
                  <input type="number" name="quantity" min="1" value="1"  class="qty">
                  <input type="hidden" name="id" value="{{$item->id}}">
                  <!--<input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">-->
                  <a href="{{url('/wishlist')}}" value="add to wishlist" class="option-btn" name="add_to_wishlis">add to wishlist</a>
                  <input type="submit" value="add to cart" class="btn" name="add_to_cart">

               </form>
               @endforeach
      </div>

   </section>

   <script src="{{url('frontend/js/script.js')}}"></script>
   @include('frontend.footer')
</body>

</html>

