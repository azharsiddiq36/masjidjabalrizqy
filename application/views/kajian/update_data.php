<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Edit Pengguna
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">

               <form action="<?php site_url('Pengguna/edit/'.$record['pengguna_id'])?>" method="post">
                   <div class="form-group">
                       <label>Username</label>
                       <input type="text" name="nama" class="form-control" required value="<?php echo $record['pengguna_username']?>" readonly>
                   </div>
                   <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required value="<?php echo $record['pengguna_nama']?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="nama_rek" class="form-control" required value="<?php echo $record['pengguna_email']?>">
                    </div>
                   <div class="form-group">
                       <label>No Handphone</label>
                       <input type="text" name="no_hp" class="form-control" required value="<?php echo "0".$record['pengguna_nomor']?>">
                   </div>
                   <div class="form-group">
                       <label>Hak Akses</label>
                       <select class="form-control" name="hak_akses" required>
                           <option value='administrator'>Administrator</option>
                           <option value='pengguna'>Member</option>
                       </select>
                   </div>
                   <div class="form-group">
                       <label>Status</label>
                       <select class="form-control" name="status" required>
                           <?php
                           if ($record['pengguna_hak_akses'] == "aktif"){
                               ?>
                               <option value='aktif' selected>Aktif</option>
                               <option value='nonaktif'>Non Aktif</option>
                           <?php
                           }
                           else{
                               ?>
                               <option value='aktif' >Aktif</option>
                               <option value='nonaktif'selected>Non Aktif</option>
                               <?php
                           }
                           ?>

                       </select>
                   </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Perbarui</button> |
                    <?php echo anchor('Pengguna','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
               </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
