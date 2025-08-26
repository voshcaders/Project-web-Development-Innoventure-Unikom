<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <img src="<?= base_url('assets/upload/wisata/' . $wisata['gambar']); ?>" alt="Profil" class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              <?= ucwords($wisata['nama']) ?>
              <span class="caret"></span>
            </span>
          </a>
          <div class="clearfix"></div>
          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="<?= site_url('welcome'); ?>">
                  <span class="link-collapse">Profil</span>
                </a>
              </li>
              <li>
                <a href="<?= site_url('welcome/logout'); ?>">
                  <span class="link-collapse text-danger">Keluar</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav nav-primary">
        <li class="nav-item <?php if ($this->uri->segment(1) == "welcome") {
                              echo "active";
                            } ?>">
          <a href="<?= site_url('welcome'); ?>">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item <?php if ($this->uri->segment(1) == "pihakwisata" xor $this->uri->segment(2) == "ulasan") {
                              echo "active";
                            } ?>">
          <a href="<?= site_url('pihakwisata/data_pemesanan'); ?>">
            <i class="fas fa-table"></i>
            <p>Data Pemesanan</p>
          </a>
        </li>
        <li class="nav-item <?php if ($this->uri->segment(2) == "ulasan") {
                              echo "active";
                            } ?>">
          <a href="<?= site_url('pihakwisata/ulasan'); ?>">
            <i class="fas fa-table"></i>
            <p>Data Review</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('welcome/logout') ?>" id="btn-logout">
            <i class="fas fa-power-off text-danger"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>