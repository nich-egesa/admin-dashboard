<!DOCTYPE html>
<html>

<?php require_once("includes/links.php") ?>

<body>
	<!-- All our code. write here   -->
    <?php require_once('includes/header.php') ?>
    <?php require_once('includes/sidebar.php') ?>
    <?php
        require_once('dbconnection.php');
        $fetchStudentRecord = mysqli_query($connection,"SELECT * FROM enrollments WHERE id='".$_GET['id']."'   ");
        while($row = mysqli_fetch_array($fetchStudentRecord))
        {
            $id =$row['id'];
            $studentName = $row['name'];
            $studentRegNumber =$row['reg_number'];
            $studentPhone = $row['phone'];
            $studentEmail = $row['email'];
        }

    ?>
<?php 
    if( isset( $_POST['updatestudent']))
    {
        //fetch form data
        $name = $_POST['name'];
        $regNumber = $_POST['reg_number'];
        $email = $_POST['email'];
        $phone = $_POST['phone']; 
        $course = $_POST['course'];

        //make database query
        $updatestudent =mysqli_query($connection, " UPDATE enrollments SET name= '$name' , reg_number='$regNumber' , email='$email', phone='$phone' , course='$course' WHERE id=' ".$_GET['id']."' ");

        if($updatestudent)
        {
            echo "User records update";
        }
        else
        {
            echo "Error";
        }
    }
?>
    




<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-secondary text-white text-center">
                        <span>Update student information</span><br>
                        
					</div>
                    <div class="card-body">
                        <form action="editStudent.php?id=<?php echo $id ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Enter your Name</label>
                                        <input type="text" class="form-control" name="name" Value="<?php echo $studentName ?>">
                                    </div>        
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Please enter Reg Number</label>
                                        <input type="text" class="form-control" name="reg_number" Value="<?php echo $studentRegNumber ?>">
                                    </div>    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Please enter Phone number</label>
                                        <input type="text" class="form-control" name="phone" Value="<?php echo $studentPhone ?>">
                                    </div>  
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Your email address</label>
                                        <input type="text" class="form-control" name="email" Value="<?php echo $studentEmail ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Please select your course</label>
                                        <select name="course" id="" class="form-control" name="course">
                                            <option value="">--select course--</option>
                                            <option value="Web Design & Development">Web Design & Development</option>
                                            <option value="Andriod Design & development">Andriod design &development </option>
                                            <option value="Data Annotation">Data Annotation</option>
                                            <option value="Project-Based Learning Attachment">Project-Based Learning Attachment </option>
                                            <option value="Career Readiness-Employability Program(Foundation)">Career Readiness-Employability program(Foundation)</option>
                                        </select>
                                    </div>   
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary btn-sm" name="updatestudent">Update student</button>
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