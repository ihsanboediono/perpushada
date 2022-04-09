
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="<?= base_url('perpus')?>" class="sidebar-link text-muted <?php if($this->uri->segment(2) == 'index' | $this->uri->segment(2) == null){echo 'active' ; }?>"><i class="o-home-1 mr-3 text-gray"></i><span>Dashboard</span></a></li>
              <li class="sidebar-list-item"><a href="<?= base_url('perpus/koleksi')?>" class="sidebar-link text-muted <?php if($this->uri->segment(2) == 'koleksi'){echo 'active' ; }?>"><i class="o-table-content-1 mr-3 text-gray"></i><span>Koleksi</span></a></li>
              <li class="sidebar-list-item"><a href="<?= base_url('perpus/users')?>" class="sidebar-link text-muted <?php if($this->uri->segment(2) == 'users'){echo 'active' ; }?>"><i class="far fa-user mr-3 text-gray"></i><span>&nbsp;User</span></a></li>
              <li class="sidebar-list-item"><a href="<?= base_url('perpus/about')?>" class="sidebar-link text-muted <?php if($this->uri->segment(2) == 'about'){echo 'active' ; }?>"><i class="o-paperwork-1 mr-3 text-gray"></i><span>About</span></a></li>
              <!-- <li class="sidebar-list-item"><a href="<?= base_url()?>assets/bubbly/login.html" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Login</span></a></li> -->
        </ul>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">EXTRAS</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="<?= base_url('auth/logout')?>" class="sidebar-link text-muted"><i class="fa fa-power-off mr-3 text-gray"></i><span>Log Out</span></a></li>
        </ul>
      </div>
