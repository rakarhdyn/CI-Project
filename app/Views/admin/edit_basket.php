<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edit Basket</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/basket/update/<?= $basket['id']; ?>" method="post" enctype="multipart/form-data">
                        <? csrf_field(); ?>
                        <input type="hidden" name="gambarLama" value="<?= $basket['gambar']; ?>">
                        <input type="hidden" name="gambarLama1" value="<?= $basket['slide_1']; ?>">
                        <input type="hidden" name="gambarLama2" value="<?= $basket['slide_2']; ?>">
                        <input type="hidden" name="gambarLama3" value="<?= $basket['slide_3']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required value="<?= $basket['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/<?= $basket['gambar']; ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="previewImg()">
                                        <label class="custom-file-label gambar" for="gambar" required><?= $basket['gambar']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slide_1">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/<?= $basket['slide_1']; ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="slide_1" name="slide_1" onchange="previewImg1()">
                                        <label class="custom-file-label slide_1" for="slide_1" required><?= $basket['slide_1']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slide_2">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/<?= $basket['slide_2']; ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="slide_2" name="slide_2" onchange="previewImg2()">
                                        <label class="custom-file-label slide_2" for="slide_2" required><?= $basket['slide_2']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slide_3">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/<?= $basket['slide_3']; ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="slide_3" name="slide_3" onchange="previewImg3()">
                                        <label class="custom-file-label slide_3" for="slide_3" required><?= $basket['slide_3']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="Masukkan Fasilitas" required value="<?= $basket['fasilitas']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required><?= $basket['alamat']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jam_operasional">Jam Operasional</label>
                                <input type="text" class="form-control" id="jam_operasional" name="jam_operasional" placeholder="Masukkan Jam" required value="<?= $basket['jam_operasional']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukkan Kontak" required value="<?= $basket['kontak']; ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Edit</button>
                            <form>
                                <a href="/basket">
                                    <button class="btn btn-danger">Cancel</button>
                                </a>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?= $this->endSection(); ?>