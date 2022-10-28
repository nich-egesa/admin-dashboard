<?php 
//database connection
require_once('dbconnection.php');
// perform the sql query
$fetchStudentdata =mysqli_query($connection, "SELECT * FROM enrollments WHERE id='" .$_GET['id']. "' ");
while($row = mysqli_fetch_array($fetchStudentdata))
{
    $name = $row['name'];
    $regNumber = $row['reg_number'];
    $email = $row['email'];
    $phone = $row['phone'];
    $course = $row['course'];
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/links.php')?>
<body>
    <?php 
        require_once('includes/header.php');
        require_once('includes/sidebar.php');    
    ?>

    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                            <li class="list-group-item">User Name:
                                <span class="badge badge-primary badge-pill"><?php echo $name ?></span>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                            <li class="list-group-item">Email:
                                <span class="badge badge-success badge-pill"><?php echo $email ?></span>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                            <li class="list-group-item">Phone:
                                <span class="badge badge-primary badge-pill"><?php echo $phone ?></span>
                            </li>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                            <li class="list-group-item">course:
                                <span class="badge badge-primary badge-pill"><?php echo $course ?></span>
                            </li>
                </div>
            </div>
        </div>
</body>
</html>