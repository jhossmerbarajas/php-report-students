<?php require_once'../resources/views/layouts/header.php'; ?>
	
	<div class="mt-3 mb-5 d-flex justify-content-between text-center">
		<h2>List Students</h2>
		<a href="/report-pdf" class="btn btn-danger">PDF</a>
	</div>

	<table class="table text-center">
	  <thead class="table-dark">
	    <tr>
	    	<th scope="col"> Name </th>
	    	<th scope="col"> Last Name </th>
	    	<th scope="col"> Email </th>
	    	<th scope="col"> Course </th>
	    </tr>
	  </thead>
	  	
	  <tbody>
	  	<?php foreach($students as $student): ?>
	  		<tr>
	  			<td> <?= $student["name"] ?> </td>
	  			<td> <?= $student["last_name"] ?> </td>
	  			<td> <?= $student["email"] ?> </td>
	  			<td> <?= $student["course_name"] ?> </td>
	  		</tr>
	  	<?php  endforeach; ?>
	  </tbody>
		 
	</table>


<?php 
	require_once "../resources/views/layouts/footer.php";
?>