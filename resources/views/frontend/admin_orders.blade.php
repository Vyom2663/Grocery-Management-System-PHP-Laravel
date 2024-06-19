@include('frontend.admin_header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/admin_style.css')}}">

</head>
<body>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>



   <div class="box-container">
@foreach ($order as $item)


      <div class="box">
         <p> user id : <span>{{$item->id}}</span> </p>
         <p> placed on : <span>In 7 Days...</span> </p>
         <p> name : <span>{{$item->name}}</span> </p>
         <p> email : <span>{{$item->email}}</span> </p>
         <p> number : <span>{{$item->number}}</span> </p>
         <p> address : <span>{{$item->address}}</span> </p>
         <p> Pincode : <span>{{$item->pincode}}</span> </p>
         <p> total price : <span>Rs.500/-</span> </p>
         <p> payment method : <span>{{$item->method}}</span> </p>
         <form action="" method="POST">
            <input type="hidden" name="order_id" value="{{$item->id}}">
            <select name="update_payment" class="drop-down">
               <option value="" selected disabled></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <div class="flex-btn">
               <input type="submit" name="update_order" class="option-btn" value="udate">
               <a href="{{url('admin_orders/'.$item->id)}}?delete=" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
            </div>
         </form>
      </div>
      @endforeach
   </div>

</section>
</body>
</html>
