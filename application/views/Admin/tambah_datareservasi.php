<div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        <!-- content -->
        <!-- Dashboard Analytics Start -->
        
        <div class="content-header row">

            <div class="content-header-right col-md-12">
                <a href="<?php echo base_url('Admin/Datareservasi'); ?>" class="btn btn-light float-right mb-2">Kembali</a>
            </div>
        </div>
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Reservasi</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('Admin/Datareservasi/tambah_reservasi_aksi') ?> " enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                    <label>Tanggal Reservasi </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="datetime-local" placeholder="Tanggal Reservasi" class="form-control" name="tgl_reservasi">
                                                        <?php echo form_error('tgl_reservasi', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                    <label>Riwayat Alergi</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" placeholder="Riwayat Alergi" class="form-control" name="riwayat_alergi">
                                                        <?php echo form_error('riwayat_alergi', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                    <label>Keluhan</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea name="keluhan" id="keluhan" cols="30" rows="10" class="form-control"></textarea>
                                                        <?php echo form_error('keluhan', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                    <label>Jenis Tindaka </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select name="jenis_tindakan" id="jenis_tindakan" class="form-control">
                                                            <option value="">-- Pilih Jenis Tindakan --</option>
                                                            <option value="1">Demam</option>
                                                        </select>
                                                    <?php echo form_error('id_tindakan', '<div class="text-small text-danger">', '</div>') ?>
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