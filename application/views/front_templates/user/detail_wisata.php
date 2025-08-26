<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3><?= $wisata['nama'] ?></h3>
                    <p>Spot Objek Wisata sangat Keren</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container box_1170">
        <?php
        if ($userPesan == !null)
            if ($userPesan['status_pembayaran'] == 1 and $userPesan['id_wisata'] == $wisata['id']) : ?>
            <div class="alert alert-success mt-3" role="alert">
                Terimakasih karena telah memesan tiket di <strong>Curug Cikondang</strong>, kami harap anda dapat meluangkan waktu sebentar untuk memberi ulasan
                tentang Sistem Web kami <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Beri Ulasan</button>
            </div>
        <?php endif; ?>
        <div class="section-top-border">
            <h3 class="mb-30">Detail Wisata</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= base_url('assets/upload/wisata/') . $wisata['gambar']; ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-9 mt-sm-20">
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $time = date("G:i:s");
                    if ($wisata['jam_tutup'] < $time) :
                    ?>
                        <div class="alert alert-danger" role="alert">
                            Mohon maaf, Wisata ini sedang <strong>Tutup</strong>
                        </div>
                    <?php endif; ?>
                    <p><strong>Deskripsi : </strong></p>
                    <p><?= $wisata['deskripsi'] ?></p>
                    <?php
                    if ($wisata['status'] == "Tutup") :
                    ?>
                        <button type="button" class="btn btn-primary mt-4" disabled>Pesan Tiket</button>
                    <?php endif; ?>
                    <?php
                    if ($wisata['status'] == "Buka") :
                    ?>
                        <a href="<?= site_url('pemesanan/tambah/' . $wisata['id']); ?>" class="btn btn-primary mt-4">Pesan Tiket</a>
                    <?php endif; ?>
                    <a href="<?= base_url('home/info') ?>" class="btn btn-success mt-4">Kembali</a>
                    <hr>
                    <p><strong>Nama Wisata </strong> : <?= $wisata['nama']; ?></p>
                    <p><strong>Jam Buka </strong> : <?= $wisata['jam_buka']; ?></p>
                    <p><strong>Jam Tutup </strong> : <?= $wisata['jam_tutup']; ?></p>
                    <p><strong>Jenis Wisata </strong> : <span class="badge badge-primary"><?= $wisata['jenis_wisata']; ?></span></p>
                    <p><strong>Harga </strong> : Rp. <?= number_format($wisata['harga'], 0, ',', '.'); ?></p>
                    <p><strong>Lokasi Wisata </strong> : <?= $wisata['lokasi']; ?></p>
                    <p><strong>Status </strong> :
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $time = date("G:i:s");
                        if ($wisata['jam_tutup'] < $time) :
                        ?>
                            <span class="badge badge-danger">Tutup</span></p>
                <?php endif; ?>
                <?php
                date_default_timezone_set('Asia/Jakarta');
                $time = date("G:i:s");
                if ($wisata['jam_tutup'] > $time) :
                ?>
                    <span class="badge badge-primary"><?= $wisata['status']; ?></span></p>
                <?php endif; ?>
                <!-- Link Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31679.267741587657!2d107.08062523916597!3d-7.0200448943302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e685ba0d970fb75%3A0xfb578d34eeb6d5fc!2sCurug%20Cikondang!5e0!3m2!1sid!2sid!4v1676091850148!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->

<?php if ($ulas['id_wisata'] == $wisata['id']) : ?>
    <!-- Ulasan -->
    <div class="container">
        <div class="comments-area">
            <h4> Ulasan</h4>
            <div class="comment-list">
                <?php foreach ($review as $r) :  ?>
                    <div class="single-comment justify-content-between d-flex mb-5">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="<?= base_url('assets/img/default.png') ?>">
                            </div>
                            <div class="desc">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <h5>
                                            <a href="#"><?= $r['nama']; ?></a>
                                            <span class="d-flex align-items-center">
                                                <?php
                                                $star = $r['star'];
                                                for ($i = 0; $i < $star; $i++) :
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endfor; ?>
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                                <p class="comment">"<?= $r['deskripsi'] ?>"</p>
                                <span class="badge badge-light"><?= $r['tanggal'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Modal Ulasan -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ulasan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Silahkan isi form dibawah untuk melakukan ulasan. </p>
                <form method="post" action="<?= base_url('home/review') ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ulasan Wisata</label>
                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <small id="emailHelp" class="form-text text-muted">Dari angka 1-5, menurut anda bagaimana rating pelayanan atau tempat wisata ini?</small>
                        <input type="text" name="star" class="form-control" placeholder="Ex : 3">
                        <input type="hidden" name="id_wisata" value="<?= $wisata['id']; ?>" class="form-control">
                        <input type="hidden" name="id_member" value="<?= $member['id']; ?>" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit Ulasan</button>
            </div>
            </form>
        </div>
    </div>
</div>