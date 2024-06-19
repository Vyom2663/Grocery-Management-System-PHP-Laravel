<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceed Order</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{url('frontend/css/employee.css')}}">

</head>

<body>


    <section class="placed-orders">

        <h1 class="title">proceed order</h1>

        <div class="box-container">
                    <div class="box">
                        <p> user id : <span></span> </p>
                        <p> name : <span></span> </p>
                        <p> email : <span></span> </p>
                        <p> number : <span></span> </p>


                        <label style="font-size: 18px; color: green">OTP :
                        <input type="text" placeholder="Enter here" style="border-bottom: 2px solid green;" maxlength="6">
                        </label>

                        <form action="proceed-order.php" method="POST">
                            <input type="hidden" name="order_id" value="">

                            <div class="flex-btn">
                                <input type="submit" name="update_order" class="option-btn" value="Resend OTP">
                            </div>
                            <div class="flex-btn">
                                <input type="submit" name="update_order" class="btn" value="Done">
                            </div>

                        </form>
                    </div>
        </div>

    </section>

    <script src="{{url('frontend/js/script.js')}}"></script>

</body>

</html>
