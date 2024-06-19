<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee | GMS</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/employee.css">

</head>

<body>
    <section class="dashboard">

        <h1 class="title">dashboard</h1>

        <div class="box-container">

            <div class="box">
                <h3>$<?= $total_pendings; ?>/-</h3>
                <p>total pendings</p>
                <a href="employee_orders.php" class="btn">see orders</a>
            </div>

            <div class="box">
                <h3>$<?= $total_completed; ?>/-</h3>
                <p>completed orders</p>
                <a href="employee_orders.php" class="btn">see orders</a>
            </div>

            <div class="box">
                <h3><?= $number_of_orders; ?></h3>
                <p>orders placed</p>
                <a href="employee_orders.php" class="btn">see orders</a>
            </div>



        </div>

    </section>
    
    <script src="js/script.js"></script>

</body>

</html>