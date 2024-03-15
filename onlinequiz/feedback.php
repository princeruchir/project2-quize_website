<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli('localhost', 'root', '', 'sourcecodester_exam') or die("Could not connect to mysql" . mysqli_error($con));

    if (!$con->connect_errno) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $feedback = $_POST["feedback"];

        $sql = "INSERT INTO `feedback`(`name`,`email`, `feedback`)
            VALUES ('$name','$email', '$feedback')";

        if ($con->query($sql))
            echo "Your feedback submitted successfully!";
        header('location: welcome.php?q=1');
    }
}
//  $conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            font-family: "Poppins", sans-serif;

        }

        body {
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background: #27304e;
        }



        .container {
            margin: 130px;
            height: 420px;
            display: flex;
            background-color: white;
            background-color: #FCF6F5;
            border-radius: 15px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

        }



        .first {
            width: 50%;
            padding-left: 50px;
            padding-top: 30px;
            border-radius: 15px;

        }

        .second {
            width: 50%;
            padding-top: 30px;
            padding-left: 50px;
            border-radius: 15px;

        }


        .fa {
            padding: 10px;
            font-size: 15px;
            width: 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            color: white;
        }

        .fa-linkedin {
            background: #0077b5;
            color: white;
        }

        .fa-github {
            background: #00405d;
            color: white;
        }

        .info {
            display: block;
            padding: 5px;
            margin: 5px;
            width: 400px;
            border-radius: 5px;
        }

        .feedback {
            display: block;
            padding: 5px;
            margin: 5px;
            margin-bottom: 0px;
            width: 400px;
            border-radius: 8px;
        }

        textarea {
            border: 2px solid black;
        }

        .submit {
            display: block;
            padding: 3px;
            margin: 5px;
            font-family: 'Tektur', cursive;
        }

        button {
            border: 3PX solid white;
            background: #3e2093;
            padding: 5px 25px;
            color: white;
            font-weight: 700;
            letter-spacing: 0.25em;
            margin: 5px;
            border-radius: 7px;
        }

        button:hover {
            color: gold;
            background-color: #00405d;

        }

        button:active {
            color: #e12828;
        }

        .max {
            margin-left: 340px;
            font-size: 10px;
            color: black;
        }

        .icon {
            margin-bottom: 12px;
        }

        .sid {
            display: flex;
        }

        .ruchir {
            width: 50%;

        }

        .sidhant {
            width: 50%;

        }

        h3 {
            margin-bottom: 0px;
        }

        a {
            margin-top: 12px;
        }

        .first::before {
            content: "";
            position: absolute;
            height: 45%;
            width: 4px;
            right: 770px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
            
        }

        @media (max-width: 950px) {
      .container {
        width: 90%;
        padding: 30px 40px 40px 35px;
      }

      .container .content .right-side {
        width: 75%;
        margin-left: 55px;
      }
    }

    @media (max-width: 820px) {
      .container {
        margin: 40px 0;
        height: 100%;
      }

      

      .container .first {
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
      }

      .container  .first::before {
        display: none;
      }

      .container .second {
        width: 100%;
        margin-left: 0;
      }
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="first">
            
            <h3>Location</h3>
            <div> D Y Patil College of Engineering and Technology, Kolhapur.</div>
            <h3>Contact us</h3>

            <div class="sid">
                <div class="sidhant">
                    <b>Sidhant Ganapure</b>
                    <div>Email Id:-sidhantganapure@gmail.com</div>
                    <div>Mobile No:-9405382700</div>
                </div>

                <div class="ruchir">
                    <b>Ruchir Chougale</b>
                    <div>Email Id:-ruchirchougale@gmail.com</div>
                    <div>Mobile No:-9130064464</div>
                </div>


            </div>
            <br>
            <div class="sahil" style="margin-left:28%">
                <b>Sahil Chougale</b>
                <div>Email Id:-sahilchougale@gmail.com</div>
                <div>Mobile No:-8669131958</div>
            </div>

            <div class="social">
                <h3 style="margin-top:0%">Follow us</h3>
                <a href="#" target="" class="fa fa-facebook"></a>
                <a href="#" target="" class="fa fa-twitter"></a>
                <a href="#" target="" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a>
                <a href="#" target="" class="fa fa-github"></a>
            </div>

        </div>
        
        <div class="second">
            <h2 style="color: #3e2093;"> Feedback Form </h2>
            <form method="post" action="feedback.php" enctype="multipart/form-data">
                <div class="info">
                    <input type="text" name="name" class="info" placeholder="Enter Your Name" required />
                </div>
                <div class="info">
                    <input type="email" name="email" class="info" placeholder="Enter Your Email Id" required />
                </div>
                <div class="feedback">
                    <textarea type="text" class="feedback" name="feedback" placeholder="Enter Your Feedback" rows="5" maxlength="200" required></textarea>
                </div>
                <div class="max">MAX 200 LETTERS</div>

                <div class="submit">
                    <button name="submit" type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>