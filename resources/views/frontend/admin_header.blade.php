<header class="header">

   <div class="flex">

      <a href="" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="{{url('/admin_page')}}">home</a>
         <a href="{{url('/admin_products')}}">products</a>
         <a href="{{url('/admin_orders')}}">orders</a>
         <a href="{{url('/admin_users')}}">users</a>
         <a href="{{url('/admin_contacts')}}">messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">


         <img src="{{url('frontend/uploaded_img/pic-7.png')}}" alt="">
         <p>Welcome Admin</p>
         <a href="{{url('/admin_update_profile')}}" class="btn">update profile</a>


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
