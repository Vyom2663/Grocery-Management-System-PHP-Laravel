<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POP UP</title>

    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;

        }

        .popup {
            width: 30vw;
            height: 40vh;
            background-color: bisque;
            text-align: center;
            border-radius: 7px;
            transform: translate(0, -100%) scale(0.1);
            transition: transform 0.4s, top 0.4s;
        }

        .popupdown {
            transform: translate(0, 0) scale(1);
        }

        .popup input[type=text] {
            width: 90%;
            margin: 10px;
            padding: 15px 10px;
            border-radius: 10px;
            border: none;
        }

        .popup input[type=submit] {
            padding: 8px 25px;
            border-radius: 10px;
            border: none;
            background-color: rgb(0, 255, 234);
            font-size: 20px;
        }

        .popup h3 {
            font-size: 20px;
        }
    </style>
</head>

<body>

    <div class="popup" id="popup">
        <h3>Write your pincode plijjj !!</h3>
        <h4>to check in your area our system is available or not</h4>

        <input type="text" name="pincode" placeholder="Enter Pincode here" readonly>
        <input type="submit" value="Check" onclick="closepopup()">
    </div>

    <script src="{{url('frontend/js/script.js')}}">
        let popup = document.getElementById("popup");

        window.onload = (event) => {
            openpopup();
        };

        function openpopup() {
            popup.classList.add("popupdown");
        };

        function closepopup() {
            popup.classList.remove("popupdown");
        }
    </script>



</body>

</html>
