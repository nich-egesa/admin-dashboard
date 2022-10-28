<?php 
    //database connection
    require_once('dbconnection.php');
    //sql
    $deleteStudent = mysqli_query($connection,"DELETE FROM  enrollments WHERE id='" .$_GET['id']."' ");

    if($deleteStudent)
    {
        echo "student records deleted successfully.";
        header('location:students.php');
    }
    else
    {
        echo "error occurred";
    }

?>