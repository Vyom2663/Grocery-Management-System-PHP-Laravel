<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GMS | Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/components.css')}}">

</head>

<body background="{{url('frontend/images/pic-7.png')}}">


<section class="form-container">

    @if (session()->has('success'))
        <div class="message">
            <p>{{session()->get('success')}}</p>
        </div>
    @endif



    <form action="{{url('/loginuser')}}" method="post">
        @csrf

         <h3>login now</h3>
         <input type="email" name="email" class="box" placeholder="enter your email" required>
         <input type="password" name="password" class="box" placeholder="enter your password" required>
         <input type="submit" value="login now" class="btn" name="submit">
         <p>don't have an account? <a href="{{url('/register')}}">register now</a></p>
         <p>Login as Guest... <a href="{{url('/home')}}">Guest Login</a></p>
    </form>




   </section>

</body>

</html>
