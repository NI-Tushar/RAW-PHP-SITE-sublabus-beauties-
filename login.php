<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icon/usaicon.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Shublabu Beuties and Fashion</title>
    <meta charset="UTF-8">
    <script src="index.js"></script>
    <script src="navbar.js"></script>
</head>

<body>

    <script>
    function whatsappfunc() {
        var url = "https://wa.me/+8801719384387?text="
        window.open(url, '_blank').focus();
    }

    function handleClicked1() {
        const bar = document.getElementById('bar');
        const time = document.getElementById('time');
        const naitm = document.getElementById('navitem');
        bar.style.display = "none";
        time.style.display = "block";
        naitm.style.display = "block";

    }

    function handleClicked2() {
        const bar = document.getElementById('bar');
        const time = document.getElementById('time');
        const naitm = document.getElementById('navitem');
        bar.style.display = "block";
        naitm.style.display = "none";
        time.style.display = "none";
    }

    function func1() {
        const navitm = document.getElementsById('navitem');
        navitm.style.display = "none";
    }
    </script>



    <!-- _______________________________________________________________ -->
    <div class="whole-headerbar">
        <script>
        navbarfunc();
        </script>
    </div>
    <!-- _______________________________________________________________ -->

    <div class="loginbody">
        <div class="form">
            <h2>Login</h2>
            <div class="input">
                <div class="inputBox">
                    <label for="">Username</label>
                    <input type="text">
                </div>
                <div class="inputBox">
                    <label for="">Password</label>
                    <input type="password">
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Sign In">
                </div>
            </div>
            <p class="forgot">Forgot Password? <a href="#">Click Here</a></p>
        </div>
    </div>

    <div class="footer">
        <div class="blank-1">
        </div>
        <div class="footer-bar">

        </div>
        <div class="blank-2">
        </div>
    </div>

</body>

</html>