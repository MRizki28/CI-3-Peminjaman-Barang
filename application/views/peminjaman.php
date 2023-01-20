<div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form</h4>
                <p class="card-description">Inputkan Sesuai Form </p>
                <form class="forms-sample" action="<?php echo site_url('peminjaman_controller/simpan'); ?>" method="post">
                <?php if (isset($peminjaman)) { ?>
                  <div class="form-group">
                    <label for="id_barang">Nama Barang</label>
                    <select class="form-control text-white" id="id_barang" name="id_barang">
                    <?php foreach ($barangs as $brg) { ?>
                                <option value="<?php echo $prd[$brg['id']] = $brg['id'] ?>"><?php echo $prd[$brg['id']] = $brg['nama_barang'] ?></option>
                            <?php } ?>
                    </select>
                  </div>
                  <?php } ?>
                  <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?>">
                <div class="form-group">
                    <label for="nama_peminjam">Nama Peminjam</label>
                    <input type="text" class="form-control text-white" id="nama_peminjam" name="nama_peminjam" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_peminjaman">tgl peminjaman</label>
                    <input type="date" class="form-control text-white" id="tanggal_peminjaman" name="tanggal_peminjaman" placeholder="Email">
                  </div>
                  <input type="submit" class="btn btn-primary btn-sm" name="save" value="Simpan" />
                  <a class="btn btn-secondary btn-sm" href="<?php echo site_url('peminjaman_controller/index')?>" role="button">Kembali</a>                                                                  
                </form>
              </div>
            </div>
          </div>

            <!-- table -->
            <div class="col-lg-12 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data Peminjaman</h4>
                </p>
                <div class="table-responsive">
                  <table class="table table-bordered table-contextual">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th>Kode Barang</th>
                        <th> Nama Barang </th>
                        <th> Nama Peminjam </th>
                        <th> tgl peminjaman </th>
                        <th>Kondisi Barang</th>
                        <th> Aksi </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $no = 1;
                      foreach ($detilss as $peminjaman) {
                      ?>
                        <tr class="table-primary">
                          <td><?php echo $no++ ?></td>
                          <td><?= $peminjaman['kode_barang'] ?></td>
                                <td><?= $peminjaman['nama_barang'] ?></td>
                                <td><?= $peminjaman['nama_peminjam'] ?></td>
                                <td><?= $peminjaman['tanggal_peminjaman'] ?></td>
                                <td><?= $peminjaman['kondisi_barang'] ?></td>


                          <td>
                            <a class="btn btn-outline-danger btn-icon-text" href="<?php echo site_url('peminjaman_controller/hapus/' . $peminjaman['id_detail_peminjaman']); ?>" > <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </a>
                        
                          </td>
                        </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
