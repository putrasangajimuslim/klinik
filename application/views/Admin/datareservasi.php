<div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        <!-- content -->
        <!-- Dashboard Analytics Start -->
        
        <section id="column-selectors">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Reservasi</h4>
                  <a href="<?php echo base_url('Admin/Datareservasi/tambah_reservasi'); ?>" class="btn btn-primary round waves-effect waves-light">
                    Tambah Reservasi
                  </a>
                </div>
                <div class="card-content">
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
                      <table class="table table-striped dataex-html5-selectors">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Tanggal Reservasi</th>
                            <th>Riwayat Alergi</th>
                            <th>keluhan</th>
                            <th>Jenis Tindakan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($datareservasi as $reservasi) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $reservasi->tgl_reservasi ?></td>
                                <td><?php echo $reservasi->riwayat_alergi ?></td>
                                <td><?php echo $reservasi->keluhan ?></td>
                                <td><?php echo $reservasi->keluhan ?></td>
                                <td>
                                  <a href="#"><i class="m-1 feather icon-edit-2"></i></a>
                                  <a href="#" class="btn-hapus"><i class="feather icon-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>