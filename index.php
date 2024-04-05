<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX.PHP</title>
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

        .header2:hover {
            background-color: #900000;

        }

        .editbtn {
            text-decoration: none;
            color: #ffcc00;
            padding: 3px;
        }

        .editbtn:hover {
            border: 1px solid white;
            background-color: #4a4a4ab5;
        }

        .dbtn {
            text-decoration: none;
            color: red;
            padding: 3px;
        }

        .dbtn:hover {
            border: 1px solid white;
            background-color: #5a5a5ab5;
        }

        table {
            border: 1px solid blue;
            border-radius: 10px;
            font-size: 20px;
            width: 40vw;
            background-color: #51000080;
        }
    </style>
</head>

<body>
    <h2 class="header">PHP CRUD Application</h2>

    <a class="header2" href="add_new.php">Add New Record</a>


    <table border="1">
        <tbody>
            <tr>
                <th>ID</th>
                <th>NAMES</th>
                <th>EMAILS</th>
                <th>Action</th>
            </tr>
        </tbody>

        <tbody>

            <?php
            include "db_conn.php";
            $sql = "SELECT * FROM `1_table`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $sno = $sno + 1;
                ?>
                <tr>
                    <!-- <td><?php echo $row['id'] ?></td> -->
                    <th>
                        <?php echo $sno ?>
                    </th>

                    <th>
                        <?php echo $row['name'] ?>
                    </th>
                    <th>
                        <?php echo $row['email'] ?>
                    </th>

                    <th>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="editbtn">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="dbtn">Delete</a>
                    </th>
                </tr>
                <?php
            }

            ?>

        </tbody>
    </table>

</body>

</html>