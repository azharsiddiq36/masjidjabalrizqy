                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">Pengguna</li>
	</ol>
                    
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Pengguna
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Pengguna</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="tambah_pengguna" method="POST">

            <div class="form-group">
                <label>Username </label>
                <input type="text" name="username" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>No Handphone </label>
                <input type="number" name="no_hp" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Hak Akses</label>
                <select class="form-control" name="hak_akses" required>
                    <option value='administrator'>Administrator</option>
                    <option value='pengguna'>Member</option>

                </select>
            </div>



    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
    </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                              <!--   <th>Id Mustahik</th> -->
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Hak Akses</th>
                                <th>Nomor</th>
                                <th>Status</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="gradeU">

                                <td><?php echo $no?></td>
                               <td><?php echo $r->pengguna_username?></td>
                               <td><?php echo $r->pengguna_nama?></td>
                               <td><?php echo $r->pengguna_email?></td>
                                <td><?php echo $r->pengguna_hak_akses?></td>
                               <td><?php echo "0".$r->pengguna_nomor?></td>
                               <td><?php echo $r->pengguna_status?></td>

                                <td class="center">

                                    <a title="Edit" class="btn btn-default" href="<?php echo site_url('pengguna/edit/'.$r->pengguna_id);?>"><span class="glyphicon glyphicon-pencil"></span></a>

                                    <a title="Hapus" class="btn btn-default" href="<?php echo site_url('pengguna/delete/'.$r->pengguna_id);?>"
                                       onclick="return confirm('Apakah anda yakin ingin merubah status account ini?')"><span class="glyphicon glyphicon-remove"></span></a>
                                </td>
                            </tr>
                        <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->



<!-- Button trigger modal -->

