<?php
session_start();
        include 'connect.php';
        $tendn = $_POST['tk'];
        $mk = $_POST['mk'];
        $sql = "SELECT * FROM dangnhap where TenDN='$tendn' and Matkhau='$mk'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            // while($row = mysqli_fetch_assoc($result)) {
            //     echo "<h1>".$row["name"]. "</h1> <h5> " . $row["pass"]. "</h5>";
            // }
            $row = mysqli_fetch_assoc($result);
            // $_SESSION['ID']=$row['ID'];
            $_SESSION['username']=$row['TenDN'];
            $_SESSION['quyen']=$row['Quyen'];
            echo $row["Quyen"];
        } else {
            echo "false";
        }
        mysqli_close($conn);
?>