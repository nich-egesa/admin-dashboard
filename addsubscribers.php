<!DOCTYPE html>
<html>

<?php require_once("includes/links.php") ?>

<body>
	<!-- All our code. write here   -->
    <?php require_once('includes/header.php') ?>
    <?php require_once('includes/sidebar.php') ?>
    <?php 
        require_once('dbconnection.php');
        $fetchStudentRecord = mysqli_query($connection,"SELECT * FROM enrollments WHERE id='".$_GET['email']."'   ");
        while($row = mysqli_fetch_array($fetchStudentRecord))
        {
            $studentEmail = $row['email'];
        }

    ?>
    <?php
    if( isset($_POST['updatesubscribers'])){
        //make database query
        $updatesubscribers =mysqli_query($connection, "UPDATE enrollments SET name=$name, 'email='$email' WHERE id='".$_GET['id']."' ");

        if($updatesubscribers)
        {
            echo "User records update";
        }
        else
        {
            echo "Error";
        }
    }
    ?>
    




<?php 
    $message='';
    require_once("dbconnection.php");

    if( isset($_POST["enrollsubscribers"]) )
    {
        //1.fetch form data
              $Email =$_POST["email"];
        

        //storing user data to the table kuja
        $storessubscribersRecords=mysqli_query($connection, "INSERT INTO subscribers(email)VALUES('$Email')");
        //check if the statement results to truthy
        if($storessubscribersRecords)
        {
            $message= "data submitted successfully";
        }
        else
        {
            $message="Error occured";
        }
    }
?>

<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-primary text-white text-center">
                        <span>Enter subscribers information</span><br>
                        <span class="text-white"><?php echo $message ?></span>
					</div>
                    <div class="card-body">
                        <form action="addsubscribers.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email" >
                                    </div> 
                                    <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary btn-sm" name="enrollsubscribers">
                                    subscribers
                            </button>
                        </form>    
                    </div>
                 </div>  
            </div>
        </div>
    </div>
</div>
