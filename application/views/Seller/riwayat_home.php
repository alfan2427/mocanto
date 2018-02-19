
<div class="main">
	<div class="container">
		<div class="row">
			<br>
			<h3>Detail Transaksi : <?php echo $id->id_transaksi;?></h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pembeli </th>
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
                            foreach ($pesanan as $p) {
                                    # code...
                    ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $p->fullname?></td>
						<td><?php echo $p->nama_produk?></td>
						<td><?php echo $p->harga?></td>
						<td><?php echo $p->qty?></td>
						<td><?php echo $p->harga*$p->qty; $total += $p->harga*$p->qty;?></td>
					</tr>

					<?php $no++; } ?>

				</tbody>
				<tfoot>
					<tr>
						<th colspan="3">Waktu : <?php echo $id->tgl_transaksi?></th>
						<th>Total :</th>
						<th><?php echo $total?></th>
						<th><button class="btn btn-primary" onclick="javascript:history.back()">Back</button></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
</div>