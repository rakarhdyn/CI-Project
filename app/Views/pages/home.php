<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- about  -->
<div id="news" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our<strong class="white black"> News</strong></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($news as $n) : ?>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="about-box">
                        <figure><img src="images/<?= $n['cover']; ?>" alt="#" /></figure>
                        <h3> <?= $n['title']; ?></h3>
                        <p><?= substr($n['content'], 0, 190) ?>...</p>
                    </div>
                    <a class="read_more" style="margin-top:10px" href="/detail/<?= $n['slug']; ?>">Read More</a><br><br>
                </div>

            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- end abouts -->
<!-- Features -->
<div id="games" class="Features">
    <div class="container">
        <div class="row d_flex">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                <div class="titlepage">
                    <h2>Galeri<br><strong class="white"> Pertandingan</strong></h2>
                    <p>Berikut momen-momen terbaik yang diabadikan pada saat pagelaran Piala Menpora 2021 </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                <div class="row">
                    <?php foreach ($gallery as $g) : ?>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 pa_bottom">
                            <div class="games-box">
                                <figure><img src="images/<?= $g['gambar']; ?>" alt="#" /></figure>
                            </div>
                        </div>

                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end Features -->
<!-- We are -->
<div id="ourteam" class="Our">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="titlepage">
                    <h2>Our <br><strong class="white black"> team</strong></h2>
                </div>
            </div>
            <div class="col-md-10">
                <div class="titlepage">
                    <span> terdapat 18 tim tangguh yang berpartisipasi pada gelaran Piala menpora 2021, berikut beberapa foto dari tim yang ikut serta di ajang Piala Menpora 2021</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="main_slider" class="carousel slide banner-main2" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="first-slide" src="images/banner1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="second-slide" src="images/banner2.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="third-slide" src="images/banner4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="fourth-slide" src="images/banner3.jpg" alt="Fourth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a>
                </div>
                <p class="new_s">Beberapa foto tim-tim besar yang berlaga di Piala Menpora 2021, ada Persib Bandung, Pss Sleman, Bali United FC, dan tak ketinggalan tim ibukota Persija Jakarta</p>
            </div>
        </div>
    </div>
</div>
<!-- end We are -->
<!-- contact -->
<div id="contacus" class="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding-right1">
                <div class="rable-box">
                    <figure>
                        <img src="images/cu.jpg" alt="#" />
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding-left1">
                <div class="contact">
                    <div class="titlepage">
                        <h2>Contact <strong class="white "> Us</strong></h2>
                    </div>
                    <form class="book_now" action="/pages/save" method="POST">
                        <? csrf_field(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Name" type="text" id="nama" name="nama" required>
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Phone Number" type="text" id="notelp" name="notelp" required>
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Email" type="text" id="email" name="email" required>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" placeholder="Message" type="text" id="message" name="message" required></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end contact -->
<!-- end clients -->
<!-- map -->
<div class="map">
    <figure><img src="images/map.jpg" alt="#" /></figure>
</div>
<!-- end map -->
<?= $this->endSection(); ?>