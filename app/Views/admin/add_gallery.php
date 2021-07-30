<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Gallery</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/gallery/save" method="post" enctype="multipart/form-data">
                        <? csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                                <label for="cover">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/logo.png" class="img-thumbnail img-preview">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="previewGal()" required>
                                        <label class="custom-file-label gambar" for="gambar" required>Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>

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