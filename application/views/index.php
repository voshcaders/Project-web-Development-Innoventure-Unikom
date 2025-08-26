    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Curug Cikondang</h3>
                                <br>
                                <p>Sistem Informasi Objek Wisata</p>
                                <!-- <a href="<?= site_url('auth') ?>" class="boxed-btn3">Masuk / Daftar</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->



    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Objek Wisata Curug Cikondang</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($wisata as $w) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="<?= base_url('assets/upload/wisata/') . $w['gambar']; ?>" alt="">
                                <a href="#" class="prise">Rp. <?= number_format($w['harga'], 0, ',', '.'); ?></a>
                                <span class="badge badge-primary"><?= $w['jenis_wisata']; ?></span>
                            </div>
                            <div class="place_info">
                                <a href="<?= site_url('home/detail/' . $w['id']); ?>">
                                    <h3><?= $w['nama'] ?></h3>
                                </a>
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
                                        <a href="#">5 hari yang lalu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="<?= base_url('home/info') ?>">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Nikmati Videonya</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=2hwK9TzCb3o">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="<?= base_url('vendor/travelo/'); ?>img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Niagara Mini</h3>
                        <p>Wisata air terjun jadi salah satu primadona di Jawa Barat. Saking banyaknya jumlah air terjun di Bumi Parahyangan rasanya tidak cukup jika dihitung dengan jari jemari. Salah satu air terjun yang sangat mengagumkan berada di Kabupaten Cianjur. Destinasi wisata yang dimaksud adalah Curug Cikondang yang juga memiliki julukan sebagai Niagara Mini..</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="<?= base_url('vendor/travelo/'); ?>img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Pengalaman baru yang seru</h3>
                        <p>Curug Cikondang mengalir dari sungai yang sempit. Aliran air ini kemudian melebar di tepian tebing dan menjadi mulut air terjun yang lebarnya diperkirakan hampir 30 meter. Tinggi jatuhan airnya kurang-lebih 50 meter</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="<?= base_url('vendor/travelo/'); ?>img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Akses & Lokasi Curug Cikondang</h3>
                        <p>Ada dua rute yang bisa dipilih untuk menuju ke Curug Cikondang. Rute pertama adalah melalui Cilaku dan Cibeber. Rute kedua yaitu melewati Warung Kondang dan Lampegan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
                       <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"program SMK Membangun Desa bertujuan untuk menciptakan terobosan dan mewujudkan sinergi antara SMK dan pemerintah desa. "SMK harus jadi solusi permasalahan bangsa, karena menyelesaikan masalah bangsa dimulai dari desa".</p>
                                        <div class="testmonial_author">
                                            <h3>- Faisal</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"Setiap SMK di Jabar ditargetkan minimal mendampingi dua desa binaan. Sehingga, setiap peserta didik yang tengah melaksanakan ujian praktik dapat melakukannya di desa.</p>
                                        <div class="testmonial_author">
                                            <h3>- Sifa</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"Untuk mewujudkan link and match, supaya lulusan SMK bisa sesuai dengan kebutuhan dunia kerja, maka kurikulum harus disesuaikan dengan kebutuhan industri. Merancang kurikulum harus dirancang bersama industri.</p>
                                        <div class="testmonial_author">
                                            <h3>-Sinta</h3>
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
    <!-- /testimonial_area  -->


    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Informasi</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($post as $p) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_trip">
                            <div class="thumb">
                                <img src="<?= base_url('assets/upload/blog/cover/') . $p['cover'] ?>" alt="">
                            </div>
                            <div class="info">
                                <div class="date">
                                    <span><?= $p['tanggal_post'] . ' ' . $p['jam_post'] ?></span>
                                </div>
                                <a href="<?= site_url('home/detailBlog/' . $p['id_info']); ?>">
                                    <h3><?= $p['judul'] ?></h3>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>