@include('frontend.admin_header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Admin page </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/admin_style.css')}}">

</head>
<body>
    @if (@session()->has('success'))
    <div class="alert alert-success">
        <p>{{session()->get('success') }}</p>
    </div>

@endif
@csrf
<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

      <div class="box">
      <h3>0</h3>
      <p>total pendings</p>
      <a href="{{url('/admin_orders')}}" class="btn">see orders</a>
      </div>

      <div class="box">
      <h3>{{$totorder}}</h3>
      <p>completed orders</p>
      <a href="{{url('/admin_orders')}}" class="btn">see orders</a>
      </div>

      <div class="box">
      <h3>{{$totorder}}</h3>
      <p>orders placed</p>
      <a href="{{url('/admin_orders')}}" class="btn">see orders</a>
      </div>

      <div class="box">
      <h3>{{$totproduct}}</h3>
      <p>products added</p>
      <a href="{{url('/admin_products')}}" class="btn">see products</a>
      </div>

      <div class="box">
      <h3>{{$usercount}}</h3>
      <p>total users</p>
      <a href="{{url('/admin_users')}}" class="btn">see accounts</a>
      </div>

      <div class="box">
      <h3>{{$admincount}}</h3>
      <p>total admins</p>
      <a href="{{url('/admin_users')}}" class="btn">see accounts</a>
      </div>

      <div class="box">
      <h3>{{$totalaccount}}</h3>
      <p>total accounts</p>
      <a href="{{url('/admin_users')}}" class="btn">see accounts</a>
      </div>

      <div class="box">
      <h3>{{$totfeedback}}</h3>
      <p>total messages</p>
      <a href="{{url('/admin_contacts')}}" class="btn">see messages</a>
      </div>

   </div>

</section>
<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
