<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <center>
            <h3>Jumlah Fasilitas</h3>
        </center>
    </div>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $jumlah_futsal; ?></h3>

                        <p>Futsal</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-location"></i>
                    </div>
                    <a href="/futsal" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $jumlah_basket; ?></h3>

                        <p>Basket</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-location"></i>
                    </div>
                    <a href="/basket" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $jumlah_badmin; ?></h3>

                        <p>Badminton</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-location"></i>
                    </div>
                    <a href="/badmin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $jumlah_gym; ?></h3>

                        <p>Gym & Fitness</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-location"></i>
                    </div>
                    <a href="/gym" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-body p-0">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
</section>
</div>

<?= $this->endSection(); ?>