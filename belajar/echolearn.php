<?php 
	$nama= "Ilham LQ";
 ?>

 <html>
 	<head>
 	</head>
 		<body>
		<?php 
			for ($i=0; $i <5 ; $i++) { ?>
				<h1><?php echo $nama?></h1>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio officiis vel temporibus ducimus quis ipsum dolor, esse exercitationem corporis eaque eum assumenda, soluta perferendis doloribus quia nam maiores, voluptatum voluptas.</p>
		
		<?php
			}
		 ?>
	
		<table border="1">
			<tr>
				<td>No</td>
				<td>Nama</td>
			</tr>
			<?php for ($i=0; $i < 10; $i++) { ?> 
			<tr>
				<td><?php echo $i+1 ?></td>
				<td><?= $nama ?>	</td>
			</tr>
		<?php	} ?>
		</table>
 			
 		</body>
 </html>


