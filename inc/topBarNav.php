
<!-- Navbar -->
      <nav class="main-header navbar navbar-expand-md navbar-light border-0 text-sm bg-gradient-light shadow" id='top-Nav'>
        <div class="container lg:pl-10 lg:ml-10 lg:h-14">
          <a href="./" class="navbar-brand flex flex-wrap items-center justify-between">
            <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Site Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span>SariSaris</span>
          </a>

         

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="./" class="nav-link <?= isset($page) && $page =='home' ? "active" : "" ?>">Home</a>
              </li>
              <li class="nav-item">
                <a href="./?page=products" class="nav-link <?= isset($page) && $page =='products' ? "active" : "" ?>">Products</a>
              </li>
              <li class="nav-item">
                <a href="./?page=about" class="nav-link <?= isset($page) && $page =='about' ? "active" : "" ?>">About Us</a>
              </li>
              <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 3): ?>
              <li class="nav-item">
                <?php 
                $cart_count = $conn->query("SELECT sum(quantity) FROM `cart_list` where client_id = '{$_settings->userdata('id')}'")->fetch_array()[0];
                $cart_count = $cart_count > 0 ? $cart_count : 0;
                ?>
                <a href="./?page=orders/cart" class="nav-link <?= isset($page) && $page =='orders/cart' ? "active" : "" ?>"><span class="badge badge-secondary rounded-cirlce"><?= format_num($cart_count) ?></span> Cart</a>
              </li>
              <li class="nav-item">
                <a href="./?page=orders/my_orders" class="nav-link <?= isset($page) && $page =='orders/my_orders' ? "active" : "" ?>">My Orders</a>
              </li>
              <?php endif; ?>
            </ul>
            <!--right nav-->
          <div class="lg:pl-56 flex flex-wrap items-center lg:ml-96 justify-between">
            <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') ==3): ?>
              
              <!-- <span class="mx-2">Howdy, <?= !empty($_settings->userdata('username')) ? $_settings->userdata('username') : $_settings->userdata('email') ?></span>
              <span class="mx-1"><a href="<?= base_url.'classes/Login.php?f=logout_client' ?>"><i class="fa fa-power-off"></i></a></span> -->
              <div class="dropdown flex flex-wrap items-center justify-between py-2 px-2 hover:bg-blue-100 rounded-xl">
                <a href="javascript:void(0)" class="dropdown-toggle text-reset text-decoration-none flex flex-wrap items-center justify-between" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mx-2 flex flex-wrap items-center justify-between"><img src="<?= validate_image($_settings->userdata('avatar')) ?>" class="img-thumbnail rounded-circle" alt="User Avatar" id="client-img-avatar">  <span class="mx-2">Howdy, <?= !empty($_settings->userdata('firstname')) ? $_settings->userdata('firstname') : $_settings->userdata('firstname') ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="./?page=manage_account">Manage Account</a>
                  <a class="dropdown-item" href="<?= base_url.'classes/Login.php?f=logout_client' ?>">Logout</a>
                </div>
              </div>
            <?php else: ?>
              <a href="./login.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Client Login</a> | 
              <a href="./vendor" class="mx-2 text-light text-decoration-none font-weight-bolder">Vendor Login</a> | 
              <a href="./admin" class="mx-2 text-light text-decoration-none font-weight-bolder">Admin Login</a>
            <?php endif; ?>
          </div>
          </div>
          <!-- Right navbar links -->
          <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <button class="navbar-toggler order-1 border-0 text-sm" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </nav>
      <!-- /.navbar -->
      <script>
        $(function(){
          
        })
      </script>