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
        <a href="/add_badmin"><button type="submit" class="btn btn-info">+ Add New Badminton</button></a>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-4">
                            <h2 class="card-title">Badminton Table</h2>
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
                                        <th>Nama</th>
                                        <th>Fasilitas</th>
                                        <th>Alamat</th>
                                        <th>Jam Operasional</th>
                                        <th>Kontak</th>
                                        <th>Gambar</th>
                                        <th>Slide 1</th>
                                        <th>Slide 2</th>
                                        <th>Slide 3</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                                    <?php foreach ($badmin as $b) : ?>
                                        <tr>
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $b['nama']; ?></td>
                                            <td><?= $b['fasilitas']; ?></td>
                                            <td><?= substr($b['alamat'], 0, 45) ?></td>
                                            <td><?= $b['jam_operasional']; ?></td>
                                            <td><?= $b['kontak']; ?></td>
                                            <td><img src="../images/<?= $b['gambar']; ?>" width="100%" alt=""></td>
                                            <td><img src="../images/<?= $b['slide_1']; ?>" width="100%" alt=""></td>
                                            <td><img src="../images/<?= $b['slide_2']; ?>" width="100%" alt=""></td>
                                            <td><img src="../images/<?= $b['slide_3']; ?>" width="100%" alt=""></td>
                                            <td><a href="/badmin/edit/<?= $b['id']; ?>"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="badminton/delete/<?= $b['id']; ?>" onclick="return confirm('apakah anda ingin menghapus data ini?')"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <?= $pager->links('badmin', 'pk_pagination'); ?>
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