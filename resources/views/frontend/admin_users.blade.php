@include('frontend.admin_header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/admin_style.css')}}">

</head>
<body>

<section class="user-accounts">

   <h1 class="title">user accounts</h1>



   <div class="box-container">
    @foreach ($user as $item)
      <div class="box" style="">
         <img src="{{url('myimage/'.$item->image)}}" alt="">
         <p> user id : <span>{{$item->id}}</span></p>
         <p> username : <span>{{$item->name}}</span></p>
         <p> email : <span>{{$item->email}}</span></p>
         <p> user type : <span style=" color:">User</span></p>
         <a href="{{url('admin_users/'.$item->id)}}" onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
      </div>
      @endforeach
   </div>

</section>

<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
