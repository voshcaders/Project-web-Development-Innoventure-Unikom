 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $judul; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('pemesanan/data_transaksi') ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><?= $judul; ?></div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="card">
            <h2 class="section-title">Users</h2>
            <p class="section-lead">Components relating to users, lists of users and so on.</p>

            <div class="row">
              <div class="col-12 col-sm-12 col-lg-7">
                <div class="card author-box card-primary">
                  <div class="card-body">
                    <div class="author-box-left">
                      <img alt="image" src="<?= base_url('assets/stisla/img/avatar/avatar-1.png') ?>" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <!-- <a href="#" class="btn btn-primary mt-3 follow-btn">Ubah Profile</a> -->
                    </div>
                    <div class="author-box-details">
                      <div class="author-box-name">
                        <a href="#"><?= $member['nama']; ?></a>
                      </div>
                      <div class="author-box-job"><?= $member['email']; ?></div>
                      <div class="author-box-description">
                        <p><?= $member['alamat']; ?></p>
                        <p><?= $member['telepon']; ?></p>
                      </div>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
      </div>