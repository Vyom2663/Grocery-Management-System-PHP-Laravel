@include('frontend.admin_header')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{url('frontend/css/admin_style.css')}}">

</head>
<body>

<section class="add-products">

   <h1 class="title">add new product</h1>

   <form action="" method="POST" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
         <input type="text" name="name" class="box" required placeholder="enter product name">
         <select name="category" class="box" required>
            <option value="" selected disabled>select category</option>
               <option value="vegitables">vegitables</option>
               <option value="fruits">fruits</option>
               <option value="snacks">Snacks</option>
               <option value="milk-products">Milk Products</option>
         </select>
         </div>
         <div class="inputBox">
         <input type="number" min="0" name="price" class="box" required placeholder="enter product price">
         <input type="file" name="image" required class="box" accept="image/jpg, image/jpeg, image/png">
         </div>
      </div>
      <textarea name="details" class="box" required placeholder="enter product details" cols="30" rows="10"></textarea>
      <input type="submit" class="btn" value="add product" name="add_product">
   </form>

</section>

<section class="show-products">

   <h1 class="title">products added</h1>

   <div class="box-container">
    @foreach ($allproduct as $item)
   <div class="box">
      <div class="price">Rs.{{$item->price}}/-</div>
      <img src="{{url('frontend/project images/'.$item->image)}}" alt="">
      <div class="name">{{$item->name}}</div>
      <div class="cat">{{$item->category}}</div>
      <div class="details">{{$item->details}}</div>
      <div class="flex-btn">
         <a href="{{url('/admin_update_product')}}?update=" class="option-btn">update</a>
         <a href="{{url('/admin_products')}}?delete=" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
      </div>

   </div>
   @endforeach
   </div>


</section>

<script src="{{url('frontend/js/script.js')}}"></script>

</body>
</html>
