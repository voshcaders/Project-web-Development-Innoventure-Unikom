<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinasi</h3>
                        <p>Jelajahi Destinasi Objek Wisata Kecamatan Campaka Cianjur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                    <?php foreach($wisata as $w) : ?>
                        <div class="col-lg-4 col-md-4 col-md-4">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="<?= base_url('assets/upload/wisata/') . $w['gambar']; ?>" alt="">
                                    <a href="#" class="prise">Rp. <?= number_format($w['harga'], 0, ',', '.'); ?></a>
                                    <span class="badge badge-primary"><?= $w['jenis_wisata']; ?></span>
                                </div>
                                <div class="place_info">
                                    <a href="<?= site_url('home/detail/' . $w['id']); ?>"><h3><?= $w['nama'] ?></h3></a>
                                    <p><?= $w['lokasi'] ?></p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">5 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="more_place_btn text-center">
                                <a class="boxed-btn4" href="#">More Places</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

        <!-- newletter_area_start  -->
        <div class="newletter_area overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="newsletter_text">
                                    <h4>Subscribe Our Newsletter</h4>
                                    <p>Subscribe newsletter to get offers and about
                                        new places to discover.</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="mail_form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-9 col-md-8">
                                            <div class="newsletter_field">
                                                <input type="email" placeholder="Your mail" >
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="newsletter_btn">
                                                <button class="boxed-btn4 " type="submit" >Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newletter_area_end  -->
    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/1.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Jan 01, 2023</span>
                            </div>
                            <a href="#">
                                <h3>Rute Curug Cikondang</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/2.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Jan 01, 2023</span>
                            </div>
                            <a href="#">
                                <h3>Rekomendasi Kuliner Curug Cikondang</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/3.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Jan 01, 2023</span>
                            </div>
                            <a href="#">
                                <h3>Canyoneering Curug Cikondang</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>