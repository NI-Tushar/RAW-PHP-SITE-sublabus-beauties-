<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>


    <link rel="stylesheet" href="upload.css?v=<?php echo time(); ?>">
</head>

<body>

    <div class="product-card">
        <div class="blank-1">
        </div>
        <div class="cards">
            <!-- _________________ -->
            <script src="uploadproduct.js"></script>
            <script>
            uploadfunc("Foundation", "uploadfoundation.php");
            </script>
            <!-- _________________ -->
            <script src="uploadproduct.js"></script>
            <script>
            uploadfunc("Eye Shadow", "uploadeyeshadow.php");
            </script>
            <!-- _________________ -->
            <script src="uploadproduct.js"></script>
            <script>
            uploadfunc("Palette", "uploadpalette.php");
            </script>
            <!-- _________________ -->
            <script src="uploadproduct.js"></script>
            <script>
            uploadfunc("Glitturs", "uploadgliturs.php");
            </script>
        </div>

        <div class="blank-2">
        </div>
    </div>

</body>

</html>