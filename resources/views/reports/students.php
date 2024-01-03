<?php  
	
	ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/public/styles/bootstrap.min.css'; ?>">

	<title>Document</title>
</head>
<body>
	
	<div class="container">

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
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


<?php 
	$content = ob_get_clean();

	use Dompdf\Dompdf; 
	$pdf = new Dompdf;

	$pdf->loadHtml($content);
	$pdf->setPaper("letter");
	$pdf->render();
	$pdf->stream("students.pdf", ["Attachment" => true]);


?>