<div class="cont col-md-12">   
    <form method="post" action="<?php echo base_url('add_produk/produk');?>" enctype="multipart/form-data">
        <?php
            if (!empty($notif)) {
        # code...
                echo '<div class="alert alert-danger">';
                echo $notif;
                echo "</div>";
            }
        ?> 
        <div class="main col-md-12">
            <div class="main-head">
                <div class="row">
                    <div class="col-md-3 inputData input-group">
                    </div>
                  <div class="col-md-3 inputData">
                        
                    </div>
                    <div class="col-md-3 inputData">
                        
                    </div>
                </div>
            </div>

            <div class="main-cont">
                <table id="tableBoq" class="table table-hover table-bordered table-stripped" style="width: 1300px;">
                    <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle;">Nama Produk</th>
                            <th style="text-align: center; vertical-align: middle;">Gambar</th>
                            <th style="text-align: center; vertical-align: middle;">Kategori</th>
                            <th style="text-align: center; vertical-align: middle;">Uraian</th>
                            <th style="text-align: center; vertical-align: middle; width: 25px;">Harga</th>
                            <th style="text-align: center; vertical-align: middle;">Stock</th>
                            <th style="text-align: center; vertical-align: middle;">Action</th>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="8">Tambah Produk :</td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>
                            	<input type="text" class="form-control" name="nama" placeholder="Nama">
                            </td>
                            <td>
                                <input type="file" class="form-control" id="foto" name="foto" placeholder="Gambar">
                            </td>
                            <td>
                                <select class="form-control" name="kategori" id="subcategoryview" >
                                                    <option value="">Select category</option>
                                                    <option value="makanan">Makanan</option>
                                                    <option value="minuman">Minuman</option>
                                                   
                                </select>
                            </td>
                            <td>
                            	<input type="text" class="form-control" name="uraian" placeholder="Uraian">
                            </td>
                            <td>
                            	<input type="text" class="form-control " style="width: 100px;" name="harga" placeholder="Harga">
                            </td>
                            <td>
                                <select class="form-control" name="status" id="subcategoryview" >
                                                    <option value="">Stock</option>
                                                    <option value="Tersedia">Tersedia</option>
                                                    <option value="Habis">Habis</option>
                                </select>
                            </td>
                            <td>
                                <input class="btn btn-danger" type="submit" name="submit" value="Tambah">
                            </td>
                        </tr>
                    </tbody>
                
                    </table>
            </div>
            <div class="main-foot">

            </div>
            </div>
</div>
</form>
