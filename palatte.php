<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
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
        <script src="navbar.js"></script>
        <script>
        navbarfunc();
        </script>
    </div>
    <!-- _______________________________________________________________ -->
    <div class="allproducts">
        <div class="blank-1">
        </div>
        <div class="product">
            <div class="whole-container">
                <div class="container">
                    <div class="row">
                        <?php
                            $host = 'localhost';
                            $user = 'root';
                            $dbpass = '';
                            $dbname = 'sublabudb';
                            $conn = new mysqli($host, $user, $dbpass, $dbname) or die("Unable ot connect");
                            $sql = 'SELECT title, model, stock, imgpath, price, altimgpath  FROM palettes ORDER BY id DESC';
                            $result = $conn->query($sql);
                            
                            $title = [];
                            $model = [];
                            $stock = [];
                            $img_path = [];
                            $alt_img_path = [];
                            $price = [];
                            $n = 0;
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $title[$n] = $row["title"]; $model[$n] = $row["model"]; $stock[$n] = $row["stock"]; $img_path[$n] = $row["imgpath"]; $price[$n]= $row["price"]; $alt_img_path[$n]=$row["altimgpath"];                                    $n = $n + 1;
                                }
                            } else {
                                echo "0 results";
                            }
                            
                            $conn->close();
                        ?>
                        <script>
                        const title = <?php echo '["' . implode('", "', $title) . '"]' ?>;
                        const model = <?php echo '["' . implode('", "', $model) . '"]' ?>;
                        const stock = <?php echo '["' . implode('", "', $stock) . '"]' ?>;
                        const img_path = <?php echo '["' . implode('", "', $img_path) . '"]' ?>;
                        const price = <?php echo '["' . implode('", "', $price) . '"]' ?>;
                        const alt_img_path = <?php echo '["' . implode('", "', $alt_img_path) . '"]' ?>;
                        for (let i = 0; i < '<?php echo $n ?>'; i++) {
                            prodfunc(title[i], model[i], stock[i], img_path[i], price[i], alt_img_path[i]);
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        <div class="blank-2">
        </div>
    </div>

    <!-- <div class="product-card">
        <div class="blank-1">
        </div>
        <div class="cards">

        </div>
        <div class="blank-2">
        </div>
    </div> -->

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