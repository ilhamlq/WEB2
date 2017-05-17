<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Judul</th>
			<th>Isi</th>
		</tr>
	</thead>
	<tbody>
 <?php 
 $i=1;
 foreach ($isi_berita as $ib) { ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><?= $ib['judul'] ?></td>
			<td><?= $ib['isi'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
