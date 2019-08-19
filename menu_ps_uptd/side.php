<aside class="main-sidebar">
 <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

          <img src="assets/dist/img/logo.png" class="img-circle" alt="User Image">

        </div>

        <div class="pull-left info">

          <p><?= $row_rs_users['fullname']; ?></p>

          <a href="?page=config/kode&id=1"><i class="fa fa-circle text-success"></i> PS UPTD</a>

        </div>

      </div>

      <!-- search form -->

      

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-edit"></i> <span>Kriteria</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>            </span>          </a>

          <ul class="treeview-menu">

            <li><a href="?page=insert/kriteria"><i class="fa fa-circle-o"></i>Data Kriteria</a></li>
            <li><a href="?page=kriteria"><i class="fa fa-circle-o"></i>Hitung kriteria</a></li>
          </ul>

        </li>


        <li><a href="?page=view_ps_uptd/perhitungan"><i class="fa fa-table"></i> <span>Perhitungan</span></a> </li>
        <li><a href="?page=view_ps_uptd/data_siswa"><i class="fa fa-table"></i> <span>Data siswa</span></a> </li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-edit"></i> <span>Analisa</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>            </span>          </a>

          <ul class="treeview-menu">

            <li><a href="?page=result"><i class="fa fa-circle-o"></i>Form Ranking table</a></li>
            <li><a href="?page=view_ps_uptd/form_ranking_grafik"><i class="fa fa-circle-o"></i> Form ranking grafik</a></li>
          </ul>

        </li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-edit"></i> <span>Upload Surat</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>            </span>          </a>

          <ul class="treeview-menu">

            <li><a href="?page=view_ps_uptd/surat_pemanggilan_datasiswa"><i class="fa fa-circle-o"></i>Surat pemanggilan & data siswa</a></li>
            <li><a href="?page=view_ps_uptd/surat_pernyataan
              "><i class="fa fa-circle-o"></i> surat pernyataan</a></li>
          </ul>

        </li>

        

      </ul>

    </section>

    <!-- /.sidebar -->

</aside>    