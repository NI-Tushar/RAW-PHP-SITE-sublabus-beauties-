<?php

$id = $_POST['id'];
$title = $_POST['title'];
$model = $_POST['model'];
$stock = $_POST['stock'];
$price = $_POST['price'];

$host = "localhost";
$user = "root";
$dbpass = "";
$dbname = "sublabudb";
$conn = new mysqli($host, $user, $dbpass, $dbname);


if (isset($_POST['submit']) && isset($_FILES['image-1']) && isset($_FILES['image-2'])){
    $image1 = $_FILES['image-1']['name'];
    $image2 = $_FILES['image-2']['name'];

    $image1path = 'products/palettes/'.$image1;
    $image2path = 'products/palettes/'.$image2;

    $tmp_name1 = $_FILES['image-1']['tmp_name'];
    $tmp_name2 = $_FILES['image-2']['tmp_name'];

}

$img_size1 = $_FILES['image-1']['size'];
$img_size2 = $_FILES['image-2']['size'];



if ($img_size1 > 1250000 && $img_size2 > 1250000) {
			echo "Sorry, your Image size is too large.";
		}else {
			$img_ex1 = pathinfo($image1, PATHINFO_EXTENSION);
			$img_ex2 = pathinfo($image2, PATHINFO_EXTENSION);
			$img_ex_lc1 = strtolower($img_ex1);
			$img_ex_lc2 = strtolower($img_ex2);

			$allowed_exs = array("png","jpg","jfif","jpeg");

            // UPLOADING IMAGE-1
			if (in_array($img_ex_lc1, $allowed_exs)) {
                 if(move_uploaded_file($tmp_name1, 'products/palettes/'.$image1))
                    {
                        echo "Uploaded Image-1";
                    }
                else
                {
                    echo "Cannot Upload Image-1";
                }
			}else {
				echo "Sorry, Cant upload Image";
			}

            // UPLOADING IMAGE-2
            if (in_array($img_ex_lc2, $allowed_exs)) {
                 if(move_uploaded_file($tmp_name2, 'products/palettes/'.$image2))
                    {
                        echo "Uploaded Image-2";
                    }
                else
                {
                    echo "Cannot Upload Image-2";
                }
			}else {
				echo "Sorry, Cant upload Image";
			}
}
if(!empty($id) || !empty($title) || !empty($model) || !empty($stock) || !empty($price)){
        
        $host = "localhost";
        $user = "root";
        $dbpass = "";
        $dbname = "sublabudb";

        $conn = new mysqli($host, $user, $dbpass, $dbname);
        if(mysqli_connect_error()){
            die('Connection Error('.mysqli_connect_errorno().')'. mysqli_connect_error());
            }else{
            $sql = "INSERT INTO palettes (id, title, model, stock, imgpath, price, altimgpath)
            VALUES ('$id', '$title', '$model', '$stock', '$image1path', '$price', '$image2path')";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    }else{
        echo "All field are required";
        die();
    }
?>