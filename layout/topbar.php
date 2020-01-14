<?php use Lidiun_Framework_v7\App;?>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Search -->
 <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form> -->

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-lg-inline text-gray-600 small"><?= USER_NAME ?></span>
        <img class="img-profile rounded-circle" src="/image/icon/user.png">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <?php if(USER_LOGGED == true): ?>
          <a class="dropdown-item" href="/user/account">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Account
          </a>

        <?php else: ?>
        
        <a class="dropdown-item" href="/user/register">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Register
        </a>
        <?php endif; ?>
        
        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="/user/<?=((USER_LOGGED) ? 'logout': 'login')?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <?=((USER_LOGGED) ? 'Logout': 'Login')?>
        </a>
      </div>
    </li>

  </ul>

</nav>
