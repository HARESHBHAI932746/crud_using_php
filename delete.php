<?php

include "db_conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM `1_table` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
   header("Location: index.php");
} else {
   echo "failed";
}

?>