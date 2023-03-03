<div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        <!-- content -->
        <!-- Dashboard Analytics Start -->
        
        <div class="content-header row">

            <div class="content-header-right col-md-12">
                <a href="<?php echo base_url('Admin/Datadokter'); ?>" class="btn btn-light float-right mb-2">Kembali</a>
            </div>
        </div>
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Dokter</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('Admin/Datadokter/tambah_dokter_aksi') ?> " enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                    <label>Nama </label>
                                                    </div>
                                                    <div class="col-md-8">

                                                    <input type="text" placeholder="Nama" class="form-control" name="nama_dokter">
                                                    <?php echo form_error('nama_dokter', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                    <label>Spesialis</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <input type="text" placeholder="Spesialis" class="form-control" name="spesialis">
                                                    <?php echo form_error('spesialis', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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