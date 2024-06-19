@include('frontend.admin_header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/admin_style.css')}}">

</head>
<body>

<section class="messages">

   <h1 class="title">messages</h1>

   <div class="box-container">
    @foreach ($feedback as $item)
   <div class="box">
      <p> user id : <span>{{$item->id}}</span> </p>
      <p> name : <span>{{$item->name}}</span> </p>
      <p> number : <span>{{$item->number}}</span> </p>
      <p> email : <span>{{$item->email}}</span> </p>
      <p> message : <span>{{$item->message}}</span> </p>
      <a href="{{url('admin_contacts/'.$item->id)}}" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
   </div>
   @endforeach
   </div>

</section>

</body>
