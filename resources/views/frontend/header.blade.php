@php
    if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
@endphp

<header class="header">

   <div class="flex">

      <a href="" class="logo">My Market<span>.</span></a>

      <nav class="navbar">
         <a href="{{url('/home')}}">Home</a>
         <a href="{{url('/shop')}}">Shop</a>
         <a href="{{url('/order')}}">Orders</a>
         <a href="{{url('/about')}}">About</a>
         <a href="{{url('/contact')}}">Contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="{{url('/search_page')}}" class="fas fa-search"></a>
         <a href="{{url('/wishlist')}}"><i class="fas fa-heart"></i></a>
         <a href="{{url('/cart')}}"><i class="fas fa-shopping-cart"></i></a>
      </div>

      <div class="profile">
        @csrf


         <img src="{{url('frontend/uploaded_img/pic-7.png')}}" alt="">
         <p>Welcome User...</p>



         <a href="{{url('/user_profile_update')}}" class="btn">update profile</a>

         @if (session()->has('id'))
         <a href="{{url('/logout')}}" class="delete-btn">logout</a>
         @else
         <div class="flex-btn">
            <a href="{{url('/login')}}" class="option-btn">login</a>
            <a href="{{url('/register')}}" class="option-btn">register</a>
         </div>
         @endif


      </div>

   </div>

</header>
