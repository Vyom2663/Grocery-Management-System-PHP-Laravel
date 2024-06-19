@include('frontend.header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>
<body>



<section class="about">

   <div class="row">

      <div class="box">
         <img src="{{url('frontend/images/about-img-1.png')}}" alt="">
         <h3>why choose us?</h3>
         <p>We give best products as well as customer services for Happy online shopping.</p>
         <a href="{{url('/contact')}}" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="{{url('frontend/images/about-img-2.png')}}" alt="">
         <h3>what we provide?</h3>
         <p>We provide Fresh grocery products at lowest price. And 24*7 customer service.</p>
         <a href="{{url('/shop')}}" class="btn">our shop</a>
      </div>

   </div>

</section>

</body>
</html>
