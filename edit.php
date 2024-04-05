<?php
include "db_conn.php";
$id = $_GET['id'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE `1_table` SET `name`='$name',`email`='$email' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=New record created successfully");
    } else {
        echo "failed" . mysqli_error($conn);
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_new.php</title>
    <style>
        body {
            background-color: black;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            background-color: #042c6da3;
            border: 2px solid white;
            border-radius: 10px;
            padding: 4px;
            color: white;
            text-decoration: none;
            display: flex;
            justify-content: center;
            width: 70vw;
            align-items: center;
        }

        .header2 {
            background-color: #6d0404a3;
            border: 2px solid white;
            border-radius: 10px;
            padding: 4px;
            color: white;
            font-size: 18px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h2 class="header">PHP CRUD Application</h2>
    <br><br>
    <h3>Edit Information </h3>
    <br>

    <?php
    include "db_conn.php";
    $id = $_GET['id'];

    $sql = "SELECT * FROM `1_table` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    ?>

    <br>

    <form action="" method="post">
        enter your name
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        enter your email
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <a href="index.php">

            <button class="header2" type="submit" name="submit">Edit</button>
        </a>
        <a class="header2" href="index.php">cancel</a>
    </form>
</body>

</html>