<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Fasilitas Gym</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/gym/save" method="post" enctype="multipart/form-data">
                        <? csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/logo.png" class="img-thumbnail img-preview">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="previewImg()" required>
                                        <label class="custom-file-label gambar" for="gambar">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slide_1">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/logo.png" class="img-thumbnail img-preview1">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="slide_1" name="slide_1" onchange="previewImg1()" required>
                                        <label class="custom-file-label slide_1" for="slide_1">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slide_2">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/logo.png" class="img-thumbnail img-preview2">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="slide_2" name="slide_2" onchange="previewImg2()" required>
                                        <label class="custom-file-label slide_2" for="slide_2">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slide_3">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/logo.png" class="img-thumbnail img-preview3">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="slide_3" name="slide_3" onchange="previewImg3()" required>
                                        <label class="custom-file-label slide_3" for="slide_3">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="Masukkan Fasilitas" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jam_operasional">Jam Operasional</label>
                                <input type="text" class="form-control" id="jam_operasional" name="jam_operasional" placeholder="Masukkan Jam" required>
                            </div>
                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukkan Kontak" required>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?= $this->endSection(); ?>