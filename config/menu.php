<!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav" class="gradient-45deg-light-blue-cyan">
          <div class="brand-sidebar">
            <h1 class="logo-wrapper">
              <a href="javascript:;" class="brand-logo darken-1">
                <span class="logo-text hide-on-med-and-down"><b><?php echo $_SESSION['username'] ?></span>
              </a>
              <a href="#" class="navbar-toggler">
                <i class="material-icons">radio_button_checked</i>
              </a>
            </h1>
          </div>
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="no-padding">
              <li class="li-hover">
              <p class="ultra-small margin more-text">Menu Pasien</p>
              </li>
             <li class="bold">
                <a href="dashboard.php" class="waves-effect waves-cyan">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Statistik Data Pasien</span>
                  </a>
              </li>
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">dvr</i>
                    <span class="nav-text">Pasien</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="pasien_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Pasien</span>
                        </a>
                      </li>
                      <li>
                        <a href="pasien_data.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Pasien</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">web</i>
                    <span class="nav-text">Pelayanan Pasien</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="pelayanan_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Pelayanan</span>
                        </a>
                      </li>
                      <li>
                        <a href="pelayanan_data.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Pelayanan Pasien</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">pie_chart_outlined</i>
                    <span class="nav-text">Statistik</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="statistik_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Statistik</span>
                        </a>
                      </li>
                      <li>
                        <a href="statistik_data.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Statistik</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="bold">
                <a href="sms_data.php" class="waves-effect waves-cyan">
                    <i class="material-icons">verified_user</i>
                    <span class="nav-text">Kirim Notifikasi</span>
                  </a>
                </li>

                <li class="li-hover">
                  <p class="ultra-small margin more-text">Menu Pegawai</p>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">cast</i>
                    <span class="nav-text">Pegawai RS</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="pegawai_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Pegawai RS</span>
                        </a>
                      </li>
                      <li>
                        <a href="pegawai_data.php" class="waves-effect waves-cyan">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Data Pegawai RS</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">invert_colors</i>
                    <span class="nav-text">Ketenagaan RS</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="ketenagaan_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Ketenagaan RS</span>
                        </a>
                      </li>
                      <li>
                        <a href="ketenagaan_data.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Data Ketenagaan RS</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="li-hover">
                  <p class="ultra-small margin more-text">Menu Ruangan RS</p>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">photo_filter</i>
                    <span class="nav-text">Kamar RS</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li>
                        <a href="kamar_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Kamar RS</span>
                        </a>
                      </li>
                      <li>
                        <a href="data_kamar.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Kamar</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">library_add</i>
                    <span class="nav-text">Inventaris Kamar RS</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="inventaris_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Inventaris RS</span>
                        </a>
                      </li>
                      <li>
                        <a href="inventaris_data.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Inventaris</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="li-hover">
                  <p class="ultra-small margin more-text">Menu Laporan</p>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">import_contacts</i>
                    <span class="nav-text">Laporan</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="pengguna_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Laporan Data Papsien</span>
                        </a>
                      </li>
                      <li>
                        <a href="pengguna_data.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Laporan Data ini</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="li-hover">
                  <p class="ultra-small margin more-text">Menu Pengguna</p>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">account_circle</i>
                    <span class="nav-text">Pengguna</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="pengguna_form_simpan.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Input Data Penguna</span>
                        </a>
                      </li>
                      <li>
                        <a href="pengguna_data.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Pengguna</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        