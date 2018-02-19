<div class="cont">
<div class="main">
	<div class="container">
		<div class="row">
			<br>
			<h3>Detail Transaksi : <?php echo $id->id_transaksi;?></h3> 
			<br>
			<br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pembeli </th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Sub-Total</th>
						<th>Action</th>
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
						<td><a href="<?php echo base_url('toko/update_pesanan/'.$p->id) ?>" class="btn btn-primary btn-sm">Pesanan Habis</a></td>
					</tr>

					<?php $no++; } ?>

				</tbody>
				<tfoot>
					<tr>
						<th colspan="4" class="tbl">Waktu :	<?php echo $id->tgl_transaksi?></th>
						<th>Total :</th>
						<th><?php echo $total?></th>
						<th><a href="<?php echo base_url('toko/update_status/'.$p->id_transaksi) ?>" class="btn btn-primary btn-sm">Proses</a></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
</div>
</div>