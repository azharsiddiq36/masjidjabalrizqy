                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">Lowongan</li>
	</ol>
                    
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Lowongan
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah lowongan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Lowongan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="lowongan/post" method="POST">

            <div class="form-group">
                <label>Nama lowongan </label>
                <input type="text" name="nama_lowongan" class="form-control" required="">
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
                                                <th>Judul</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Post</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Rincian</th>
                                                <th>Alamat</th>
                                                <th>Nomor</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                               
                                             <td><?php echo $no?></td>
                                               <td><?php echo $r->lowongan_judul?></td>
                                                <td><?php echo $r->lowongan_jenis_kelamin?></td>
                                                <td><?php echo date("d F 20y",strtotime($r->lowongan_tanggal_post))?></td>
                                                <td><?php echo date("d F 20y",strtotime($r->lowongan_tanggal_selesai))?></td>
                                                <td><?php echo $r->lowongan_rincian?></td>
                                                <td><?php echo $r->lowongan_alamat?></td>
                                                <td><?php echo "0".$r->lowongan_nomor?></td>
                                                <td><?php echo $r->lowongan_status?></td>
                                                <td class="center">
                                                    
                                                    <a title="Edit" class="btn btn-default" href="<?php echo site_url('lowongan/edit/'.$r->lowongan_id);?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    
                                                    <a title="Hapus" class="btn btn-default" href="<?php echo site_url('lowongan/delete/'.$r->lowongan_id);?>"
                                                       onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span class="glyphicon glyphicon-remove"></span></a>
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

