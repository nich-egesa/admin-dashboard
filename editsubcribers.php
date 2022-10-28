<!DOCTYPE html>
<html>

<?php require_once("includes/links.php") ?>

<body>
	<!-- All our code. write here   -->
    <?php require_once('includes/header.php') ?>
    <?php require_once('includes/sidebar.php') ?>
    <?php
        require_once('dbconnection.php');
        $fetchStudentRecord = mysqli_query($connection,"SELECT * FROM subscribers WHERE id='".$_GET['id']."'   ");
        while($row = mysqli_fetch_array($fetchStudentRecord))
        {
            $id =$row['id'];
            $subscribersEmail = $row['email'];
            $subscribers_At=$row['created_At'];
        }    
        ?>
        <?php 
            if( isset( $_POST['updatesubscribers']))
            {
                //fetch form data
                $id = $_POST['id'];
                $Email = $_POST['email'];
                $subscribers_At = $_POST['created_At'];
        
                //make database query
                $updatesubscribers =mysqli_query($connection, " UPDATE enrollments SET name= '$name' , regnumber='$regNumber' , email='$email', phone='$phone' , course='$course' WHERE id=' ".$_GET['id']."' ");
        
                if($updatesubscribers)
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
                            <div class="card-header bg-secondary text-white text-center">
                                <span>Update subscribers information</span><br>
                                
                    </div>
                    <div class="card-body">
                        <form action="editSubscribers.php?id=<?php echo $message ?>" method="POST">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Your email address</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $subscribersEmail ?>">
                                    </div>
                                </div>
                             
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary btn-sm" name="updatesubscribers">Update subscribers</button>
                        </form>
                    </div>
				</div>
			</div>
		</div>
		
	</div>
</div> 

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>  