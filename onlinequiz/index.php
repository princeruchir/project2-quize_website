<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>QuizGenius</title>

    <link rel="stylesheet" href="home.css">

    <link rel="stylesheet" href="assests/css/trans.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plaster&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Foldit:wght@800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sirin+Stencil&display=swap" rel="stylesheet">



    <style>
        body {
            width: 100%;
            background-color: #000;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }


        .left {
            position: absolute;
            left: 60px;
            top: 20px;
            display: inline-block;
        }

        .left div {
            text-align: center;
            font-size: 50px;
            line-height: 65px;
            font-weight: 700;
            margin: 0px -25px;
            background-image: linear-gradient(to left,
                    violet,
                    indigo,
                    blue,
                    green,
                    yellow,
                    orange,
                    red);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            color: transparent;
            font-family: 'Foldit', cursive;


        }

        .right {
            position: absolute;
            right: 34px;
            top: 40px;
            display: inline-block;
        }


        .btn {
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.015em;
            font-size: 18px;
            font-weight: 600;
            line-height: 1;
            color: #fff;
            text-decoration: none;
        }

        .btn:hover {
            color: yellow;
        }

        .btn:active {
            color: rgb(95, 100, 194);
        }



        body {
            line-height: 1;
            margin: auto;
            padding: auto;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        a:link {
            text-decoration: none;
        }


        .container {
            margin-top: 75px;
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .container video {
            width: 100%;
            height: 100vh;
        }

        .text-box {
            position: absolute;
            top: 0;
            left: 0;
            background: #000;
            height: 100%;
            width: 100%;
            color: #fff;
            font-family: 'Foldit', cursive;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 75px;
            font-weight: 900;
            mix-blend-mode: multiply;
        }

        h1 {
            padding-bottom: 130px;
        }
    </style>

</head>

<body>

    <div class="left">
        <div>QG</div>
    </div>



    <div class="right">
        <a href="login.php" class="btn"> login </a> &emsp;
        <a href="register.php" class="btn"> register </a>
    </div>
    <div class="container">
        <video autoplay loop muted>
            <source src="sp.mp4" type="video/mp4">
        </video>

        <div class="text-box">
            <h1>QUIZGENIUS</h1>
        </div>


    </div>




</body>

</html>