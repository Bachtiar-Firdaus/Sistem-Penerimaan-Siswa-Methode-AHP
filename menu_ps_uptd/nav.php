<!-- Logo -->

    <a href="?page=home" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>SIKS AHP</b></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>SIKS AHP</b></span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

<nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </a>



      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

	      <!-- Notifications: style can be found in dropdown.less -->

          

         

          
          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">  
            	<img src="assets/dist/img/logo.png" class="user-image" alt="User Image">
 				<span class="hidden-xs"> <?= $row_rs_users['fullname']; ?></span>
            </a>

            <ul class="dropdown-menu"> 
              <li class="user-header">
                <img src="assets/dist/img/logo.png" class="img-circle" alt="User Image">
                <p> <?= $row_rs_users['fullname']; ?>
                  <small>Admin</small>
                </p>
              </li>

               
              <li class="user-footer">  
              	<div class="pull-left">
                </div>
                <div class="pull-right">
                  <a href="<?= $logoutAction; ?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->

          
        </ul>
      </div>
    </nav>  

 </header>