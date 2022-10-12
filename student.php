<!DOCTYPE html>
<html>

<?php require_once("includes/links.php") ?>

<body>
	<!-- All our code. write here   -->
    <?php require_once('includes/header.php') ?>
    <?php require_once('includes/sidebar.php') ?>
    




<?php 
    $message='';
    require_once("subscribers.php");
    if( isset($_POST["enrollstudent"]) )
    {
        //1.fetch form data
        $name = $_POST["name"];
        $Email =$_POST["email"];
        $Subscribers =$_POST["subscribers"];
        $Action=$_POST["action"];

        //storing user data to the table kuja
        $storesStudentRecords=mysqli_query($connection, "INSERT INTO enrollments(name,email,subsribers,)VALUES('$name','$email','$Subscribers','$Action')");
        //check if the statement results to truthy
        if($storesStudentRecords)
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
                        <span class="text-primary"><?php echo $message ?></span>
					</div>
                    <div class="card-body">
                        <form action="addsubscribers.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">No</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>        
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="reg_number">
                                    </div>    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Subcribed At</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>  
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Action</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>