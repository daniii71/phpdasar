<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM sembako WHERE id=?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, 's', $id);
    
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        header('location:read.php');
    } else {
        die(mysqli_error($conn));
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
}

?>