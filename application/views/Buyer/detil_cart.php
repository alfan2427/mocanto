
<div class="main">
	<div class="container">
		<div class="row">
			<br>
			<h3>Detail Transaksi : </h3>
			<h3>ID Transaksi :<?php echo $id->id_transaksi;?></h3> 
			<h3><?php echo $id->tgl_transaksi?></h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Penjual</th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Sub-Total</th>
					</tr>
				</thead>
				<tbody>

					<?php 
                            $no=1;
                            $total=0;
                            foreach ($kantong as $k) {
                                    # code...
                    ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $k->fullname?></td>
						<td><?php echo $k->nama_produk?></td>
						<td><?php echo $k->harga?></td>
						<td><?php echo $k->qty?></td>
						<td><?php echo $k->harga*$k->qty; $total += $k->harga*$k->qty;?></td>
					</tr>

					<?php $no++; } ?>

				</tbody>
				<tfoot>
					<tr>
						<th colspan="4"></th>
						<th>Total :</th>
						<th><?php echo $total?></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
</div>