<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GMS | Orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">
      <div class="box">
         <p> user id : <span><?= $fetch_orders['user_id']; ?></span> </p>
         <p> placed on : <span><?= $fetch_orders['placed_on']; ?></span> </p>
         <p> name : <span><?= $fetch_orders['name']; ?></span> </p>
         <p> email : <span><?= $fetch_orders['email']; ?></span> </p>
         <p> number : <span><?= $fetch_orders['number']; ?></span> </p>
         <p> address : <span><?= $fetch_orders['address']; ?></span> </p>
         <p> total products : <span><?= $fetch_orders['total_products']; ?></span> </p>
         <p> total price : <span>$<?= $fetch_orders['total_price']; ?>/-</span> </p>
         <p> payment method : <span><?= $fetch_orders['method']; ?></span> </p>
         <p> Order Status : <span><?= $fetch_orders['payment_status']; ?></span> </p>

         <form action="proceed-order.php" method="POST">
            <input type="hidden" name="order_id" value="<?= $fetch_orders['id']; ?>">
            
            <div class="flex-btn">
               <input type="submit" name="update_order" class="option-btn" value="Proceed">
            </div>
         </form>
      </div>
   </div>

</section>

<script src="js/script.js"></script>

</body>
</html>