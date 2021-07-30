<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-4">
                            <h2 class="card-title">Admin Table</h2>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Password Hash</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($admin as $a) : ?>
                                        <tr>
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $a['email']; ?></td>
                                            <td><?= $a['username']; ?></td>
                                            <td><?= $a['password_hash']; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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