<div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Daftar Soal Ujian
                        </div>
                        <h2 align="center">Silahkan pilih soal pelatihan yang akan di kelola : </h2>
                        <div class="panel-body">
                           <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                             <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama Pelatihan</th>
                                  <th>Option</th>
                              </tr>
                              </thead>
                                <?php
                                  $no = 1;

                                  $sql = $koneksi-> query("select * from t_pelatihan");

                                  while($data=$sql->fetch_assoc()){    
                              ?>
                               <tr>
                                  <td><?php echo $no++;?></td>
                                  <td><?php echo $data['keterangan']; ?></td>
                                  <td>
                                    <!--a href="?page=soal_ujian&aksi=data_soal&nama_pelatihan=<?php echo $data['nama_pelatihan'];?>" class="btn btn-info">Masuk</a-->
                                    <a href="?page=soal_ujian&aksi=tipe_test&nama_pelatihan=<?php echo $data['nama_pelatihan'];?>" class="btn btn-info">Masuk</a>
                                  </td>
                              </tr>
                              <?php } ?> 
                          </table>
                        </div>
                        <div class="panel-footer" align="center">
                            Form Daftar Soal Ujian
                        </div>
                    </div>
                </div>
            </div>
      </div>

