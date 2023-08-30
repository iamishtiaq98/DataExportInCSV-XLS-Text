<?php 
include_once("db_connect.php");
include("header.php"); 
?>
<title>Export HTML Table Data to Excel, CSV and Text using jQuery</title>
<?php include('container.php');?>
<div class="container home">	
	<h2>Export HTML Table Data to Excel, CSV and Text using jQuery</h2>
	<br>
	<div class="top-panel">
      <div class="btn-group">
        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">Export <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a class="export" data-export-type="csv">CSV</a></li>
          <li><a class="export" data-export-type="excel">XLS</a></li>          
		  <li><a class="export" data-export-type="txt">TXT</a></li>			 			  
        </ul>
      </div>
  	</div>
	<br>
	<div class="table-responsive">		  
	<table id="data_table" class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Age</th>	
				<th>Designation</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql_query = "SELECT name, gender, address, designation, age FROM developers LIMIT 10";
			$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $developer = mysqli_fetch_assoc($resultset) ) {
			?>
			   <tr>
			   <td><?php echo $developer ['name']; ?></td>
			   <td><?php echo $developer ['gender']; ?></td>
			   <td><?php echo $developer ['age']; ?></td>   
			   <td><?php echo $developer ['designation']; ?></td>
			   <td><?php echo $developer ['address']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
	</div>

</div>
<script src="tableExport/tableExport.js"></script>
<script type="text/javascript" src="tableExport/jquery.base64.js"></script>
<script src="js/custom_export.js"></script>
<?php include('footer.php');?>
 



                                                                                                       