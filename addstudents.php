<!DOCTYPE html>
<html>

<?php require_once("includes/links.php") ?>

<body>
	<!-- All our code. write here   -->
    <?php require_once("includes/header.php") ?>


<?php require_once ("includes/sidebar.php") ?>

<div class=" main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-dark text-white text-center">
                        <span>Enter student information</span>
					</div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Enter your Name</label>
                                        <input type="text" class="form-control">
                                    </div>        
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Please enter Reg Number</label>
                                        <input type="text" class="form-control">
                                    </div>    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Please enter Phone number</label>
                                        <input type="text" class="form-control">
                                    </div>  
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Your email address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Please select your course</label>
                                        <select name="course" id="" class="form-control">
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
                                <a href=""class="btn btn-success btn-sm">
                                    Enroll
                                </a>
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