                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">kajian</li>
	</ol>
                    
                    <div class="col-md-12">
                        <h2 class="page-header">
                           kajian
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah kajian</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kajian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="tambah_kajian" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Pemateri</label>
                <input type="text" name="pemateri" placeholder="Nama Pemateri" class="form-control" required="">
            </div>
            <table>
            <div class="form-group">
                        <label>Foto (Boleh Kosong)</label>
                        <input type="file" name="foto" class="dropify" data-height="200">
                    </div>
                    <div class="form-group">
                        <label>Url (Boleh Kosong)</label>
                        <input type="text" name="url" placeholder="url/link gambar jika berasal dari internet" class="form-control" >
                    </div>
            </table>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul" required="">
            </div>
            <div class="form-group">
                <label>Jam</label>
                <input type="time" name="jam" class="form-control" required="">
            </div>

            <div class="form-group">
                <label>Tanggal Kajian</label>
                <input type="date" data-date-format="d-M-y" name="tgl_kajian" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Tema</label>
                <select class="form-control" name="tema" required>
                    <?php
                    foreach ($tema->result() as $t){
                        ?>
                        <option value='<?= $t->tema_id?>'><?= $t->tema_nama?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" placeholder="keterangan" class="form-control" required=""></textarea>
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
                                <th>Pemateri</th>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Tema</th>
                                <th>Tanggal Post</th>
                                <th>Tanggal Kajian</th>
                                <th>Jam</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($record->result() as $r) { ?>
                            <tr class="gradeU">

                                <td><?php echo $no?></td>
                               <td><?php echo $r->kajian_pemateri?></td>
                               <td><img width="70px" height="70px" alt="Gambar tidak ditemukan" src="<?php echo $r->kajian_foto?>"/></td>
                               <td><?php echo $r->kajian_judul?></td>
                                <td><?php echo $r->tema_nama?></td>
                               <td><?php echo date("d F 20y",strtotime($r->kajian_tanggal_post))?></td>
                               <td><?php echo date("d F 20y",strtotime($r->kajian_tanggal))?></td>
                                <td><?php echo $r->kajian_jam?></td>
                                <td><?php echo $r->kajian_keterangan?></td>
                                <td class="center">

                                    <a title="Edit" class="btn btn-default" href="<?php echo site_url('kajian/edit/'.$r->kajian_id);?>"><span class="glyphicon glyphicon-pencil"></span></a>

                                    <a title="Hapus" class="btn btn-default" href="<?php echo site_url('kajian/delete/'.$r->kajian_id);?>"
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

