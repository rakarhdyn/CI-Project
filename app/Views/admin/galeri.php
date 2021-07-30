<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <br>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('pesan1')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesan1'); ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <a href="/add_gallery"><button type="submit" class="btn btn-info">+ Add New Image</button></a>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-4">
                            <h2 class="card-title">Gallery Table</h2>
                        </div>
                        <div class="col-6" style="float: right;">
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari disini.." name="keyword">
                                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Images</th>
                                        <th row="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                                    <?php foreach ($gallery as $g) : ?>
                                        <tr>
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $g['title']; ?></td>
                                            <td><img src="../images/<?= $g['gambar']; ?>" width="20%" alt=""></td>
                                            <td>
                                                <form action="/gallery/edit/<?= $g['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <button type="submit" class="btn btn-warning">Edit</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="/gallery/delete/<?= $g['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus data ini?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <?= $pager->links('gallery', 'gal_pagination'); ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
</section>

</div>

<?= $this->endSection(); ?>