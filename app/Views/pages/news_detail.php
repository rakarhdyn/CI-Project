<?= $this->extend('layout/template_news'); ?>

<?= $this->section('content'); ?>
<br>
<div class="container">
    <div class="titlepage">
        <center>
            <h2>News<strong class="white black"> Detail</strong></h2>
        </center>
    </div>
</div>
<br>
<div class="container">
    <h1 style="font-weight:bold; font-size:30px;"><?= $news['title']; ?> </h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <center><img src="/images/<?= $news['cover']; ?> " class="card-img-top" alt="..."></center>
                <div class="card-body">
                    <p class="card-text">
                    <pre><?= $news['content']; ?> </pre>
                    </p>
                    <br>
                    <p class="card-text" style="float: right;"><small class="text-muted">Author : <?= $news['author']; ?> </small></p>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>