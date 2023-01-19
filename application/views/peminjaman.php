<div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form</h4>
                <p class="card-description">Inputkan Sesuai Form </p>
                <form class="forms-sample" action="<?php echo site_url('barang_controller/save'); ?>" method="post">
                  <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="number" class="form-control text-white" id="kode_barang" name="kode_barang" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control text-white" id="nama_barang" name="nama_barang" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="kondisi_barang">Kondisi Barang</label>
                    <select class="form-control text-white" id="kondisi_barang" name="kondisi_barang">
                      <option>Baik</option>
                      <option>Sedikit Rusak</option>
                    </select>
                  </div>

                  <input type="submit" class="btn btn-primary btn-sm" name="save" value="Simpan" />
                  <a class="btn btn-secondary btn-sm" href="<?php echo site_url('barang_controller/ke_barang')?>" role="button">Kembali</a>                                                                  
                </form>
              </div>
            </div>
          </div>
