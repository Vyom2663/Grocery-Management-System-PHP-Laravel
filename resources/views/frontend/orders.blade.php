<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>
<body>

@include('frontend.header')

<section class="placed-orders">

   <h1 class="title">Placed orders</h1>
@foreach ($ord as $item)


   <div class="box-container">

   <div class="box">

      <p> placed on : <span>In 7 Days...</span> </p>
      <p> name : <span>{{$item->name}}</span> </p>
      <p> number : <span>{{$item->number}}</span> </p>
      <p> email : <span>{{$item->email}}</span> </p>
      <p> address : <span>{{$item->address}}</span> </p>
      <p> payment method : <span>{{$item->method}}</span> </p>
      <p> Country : <span>{{$item->country}}</span> </p>
      <p> total price : <span>Rs.500 /-</span> </p>
      <p> payment status : <span style="color:">Pending...</span> </p>
   </div>
   </div>
   @endforeach
</section>

<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
@include('frontend.footer')
