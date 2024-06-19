@include('frontend.admin_header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update admin profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/components.css')}}">

</head>
<body>


<section class="update-profile">

   <h1 class="title">update profile</h1>

   <form action="" method="POST" enctype="multipart/form-data">
      <img src="{{url('frontend/uploaded_img/pic-7.png')}}" alt="">
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="name" value="" placeholder="update username" required class="box">
            <span>email :</span>
            <input type="email" name="email" value="" placeholder="update email" required class="box">
            <span>update pic :</span>
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box">
            <input type="hidden" name="old_image" value="">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" class="btn" value="update profile" name="update_profile">
         <a href="{{url('/admin_page')}}" class="option-btn">go back</a>
      </div>
   </form>

</section>

<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
