<?php
    include "config.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `crud` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: index.php?msgd=Record deleted successfully!");
    } else {
        echo "failed: " . mysqli_error($conn);
    }
?>
