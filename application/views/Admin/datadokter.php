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
                  <h4 class="card-title">Dokter</h4>
                  <a href="<?php echo base_url('Admin/Datadokter/tambah_dokter'); ?>" class="btn btn-primary round waves-effect waves-light">
                    Tambah Dokter
                  </a>
                </div>
                <div class="card-content">
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
                      <table class="table table-striped dataex-html5-selectors">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($datadokter as $dokter) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $dokter->nama ?></td>
                                <td><?php echo $dokter->spesialis ?></td>
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