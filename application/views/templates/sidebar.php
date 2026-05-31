<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar">

    <?php
    $role = $this->session->userdata('role');
    ?>

    <!-- BRAND -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="<?= site_url('dashboard'); ?>">

        <div class="sidebar-brand-icon rotate-n-10">
            <i class="fas fa-shopping-cart"></i>
        </div>

        <div class="sidebar-brand-text mx-3">

            Sales Order

            <br>

            <small
                style="
                    font-size:10px;
                    color:#ffffff;
                ">

                <?= ucfirst($role); ?>

            </small>

        </div>

    </a>

    <hr class="sidebar-divider my-0">

    <!-- DASHBOARD -->

    <li class="nav-item">

        <a class="nav-link"
            href="<?= site_url('dashboard'); ?>">

            <i class="fas fa-fw fa-tachometer-alt"></i>

            <span>Dashboard</span>

        </a>

    </li>

    <!-- ========================= -->
    <!-- ADMIN -->
    <!-- ========================= -->

    <?php if($role == 'admin'): ?>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Master Data
        </div>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('produk'); ?>">

                <i class="fas fa-fw fa-box"></i>

                <span>Produk</span>

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('pelanggan'); ?>">

                <i class="fas fa-fw fa-users"></i>

                <span>Pelanggan</span>

            </a>

        </li>

       
    

    <?php endif; ?>

    <!-- ========================= -->
    <!-- ADMIN + SALES -->
    <!-- ========================= -->

    <?php if($role == 'admin' || $role == 'sales'): ?>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Transaksi
        </div>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('sales_order'); ?>">

                <i class="fas fa-fw fa-shopping-cart"></i>

                <span>Sales Order</span>

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('detail_order'); ?>">

                <i class="fas fa-fw fa-file-invoice"></i>

                <span>Detail Order</span>

            </a>

        </li>

    <?php endif; ?>

    <!-- ========================= -->
    <!-- SALES -->
    <!-- ========================= -->

    <?php if($role == 'sales'): ?>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Data Pelanggan
        </div>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('pelanggan'); ?>">

                <i class="fas fa-fw fa-users"></i>

                <span>Pelanggan</span>

            </a>

        </li>

    <?php endif; ?>

    <!-- ========================= -->
    <!-- ADMIN + MANAGER -->
    <!-- ========================= -->

    <?php if($role == 'admin' || $role == 'manager'): ?>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Laporan
        </div>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('laporan/produk'); ?>">

                <i class="fas fa-fw fa-box"></i>

                <span>Laporan Produk</span>

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('laporan/sales'); ?>">

                <i class="fas fa-fw fa-users"></i>

                <span>Laporan Per Sales</span>

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link"
                href="<?= site_url('laporan/periode'); ?>">

                <i class="fas fa-fw fa-chart-line"></i>

                <span>Laporan Periode</span>

            </a>

        </li>

    <?php endif; ?>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- LOGOUT -->

    <li class="nav-item">

        <a class="nav-link"
            href="<?= site_url('auth/logout'); ?>">

            <i class="fas fa-fw fa-sign-out-alt"></i>

            <span>Logout</span>

        </a>

    </li>

</ul>

<!-- CONTENT WRAPPER -->

<div id="content-wrapper"
    class="d-flex flex-column">

    <div id="content">