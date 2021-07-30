<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edit Gallery</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/gallery/update/<?= $gallery['id']; ?>" method="post" enctype="multipart/form-data">
                        <? csrf_field(); ?>
                        <input type="hidden" name="gambarLama" value="<?= $gallery['gambar']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required value="<?= $gallery['title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="cover">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="/images/<?= $gallery['gambar']; ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="previewGal()">
                                        <label class="custom-file-label" for="gambar" required><?= $gallery['gambar']; ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Edit</button>
                            <form>
                                <a href="/gallery">
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