<!DOCTYPE html>
<html>

<?php require_once("includes/links.php") ?>

<body>
	<!-- All our code. write here   -->
    




<?php 
    require_once("dbconnection.php");
    if( isset($_POST["enrollstudent"]) )
    {
        //1.fetch form data
        $name = $_POST["name"];
        $regnumber =$_POST["reg_number"];
        $phone =$_POST["phone"];
        $email =$_POST["email"];
        $course =$_POST["course"];

        //storing user data to the table kuja
        $storesStudentRecords=mysqli_query($connection, "INSERT INTO enrollments(name,reg_number,phone,email,course)VALUES('$name','$regnumber','$phone','$email','$course')");
        //check if the statement results to truthy
        if($storesStudentRecords)
        {
            echo "data submitted successfully";
        }
        else
        {
            echo "Error occured";
        }
    }
?>

<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-dark text-white text-center">
                        <span>Enter student information</span>
					</div>
                    <div class="card-body">
                        <form action="addstudents.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Enter your Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>        
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Please enter Reg Number</label>
                                        <input type="text" class="form-control" name="reg_number">
                                    </div>    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Please enter Phone number</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>  
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Your email address</label>
                                        <input type="text" class="form-control" name="email">
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
                                <button type="submit" class="btn btn-success btn-sm" name="enrollstudent">
                                    Enroll
                            </button>
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