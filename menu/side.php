<aside class="main-sidebar">
 <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

          <img src="assets/dist/img/logo.png" class="img-circle" alt="User Image">

        </div>

        <div class="pull-left info">

          <p><?= $row_rs_users['fullname']; ?></p>

          <a href="?page=config/kode&id=1"><i class="fa fa-circle text-success"></i>Admin</a>

        </div>

      </div>


      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-edit"></i> <span>Kelola Calon Siswa</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>            </span>          </a>

          <ul class="treeview-menu">

            <li><a href="?page=insert/calon_siswa"><i class="fa fa-circle-o"></i>Input Data Calon Siswa</a></li>
            <li><a href="?page=insert/input_pertanyaan"><i class="fa fa-circle-o"></i>Input Pertanyaan</a></li>
            <li><a href="?page=insert/upload_berkas_calon"><i class="fa fa-circle-o"></i>Upload Berkas</a></li>
          </ul>

        </li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-edit"></i> <span>Kelola Alternatif</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>            </span>          </a>

          <ul class="treeview-menu">

            <li><a href="?page=insert/intensitas"><i class="fa fa-circle-o"></i> Tabel Intensitas</a></li>
            <!-- <li><a href="?page=insert/kriteria"><i class="fa fa-circle-o"></i> Kriteria</a></li> -->
            <li><a href="?page=insert/alternatif"><i class="fa fa-circle-o"></i>Input Alternatif</a></li>
          </ul>

        </li>

        <!-- <li><a href="?page=kriteria"><i class="fa fa-table"></i> <span>Hitung Kriteria</span></a> </li> -->
        <li><a href="?page=hitung_alternatif"><i class="fa fa-table"></i> <span>Hitung Alternatif</span></a> </li>        
        <li><a href="?page=insert/pengumuman"><i class="fa fa-table"></i> <span>Pengumuman</span></a> </li>        


      </ul>

    </section>

    <!-- /.sidebar -->

</aside>    