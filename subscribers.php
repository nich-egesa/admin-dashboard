<!DOCTYPE html>
<html>

<?php require_once("includes/links.php") ?>

<body>
	<!-- All our code. write here   -->
	<?php require_once("includes/header.php") ?>

<?php require_once("includes/sidebar.php") ?>

<?php 
    //.database connection
    require_once('dbconnection.php');
    $fetchsubscribersRecords = mysqli_query($connection, "SELECT * FROM subscribers");
?>

<div class=" main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card-header bg-primary text-white text-center">
                        <span>subscribers</span>
                        <a href="addsubscribers.php"class="btn btn-primary btn-sm float-right">add subscribers</a>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-size:12px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>subcribed At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php while($row=mysqli_fetch_array($fetchsubscribersRecords)) {?>
                                        <tr>
                                            <td><?php echo $row['id']  ?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td><?php echo $row['created_at'] ?></td>
                                            <td>
                                                <a href=""class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href=""class="btn btn-success btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href=""class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>