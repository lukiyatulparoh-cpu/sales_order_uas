
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar">

    <!-- BRAND -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="<?= site_url('dashboard'); ?>">

        <div class="sidebar-brand-icon rotate-n-10">

            <i class="fas fa-shopping-cart"></i>

        </div>

        <div class="sidebar-brand-text mx-3">

            Sales Order

        </div>

    </a>

    <hr class="sidebar-divider my-0">



    <!-- DASHBOARD -->

    <li class="nav-item active">

        <a class="nav-link"
            href="<?= site_url('dashboard'); ?>">

            <i class="fas fa-fw fa-tachometer-alt"></i>

            <span>Dashboard</span>

        </a>

    </li>



    <hr class="sidebar-divider">



    <!-- MASTER DATA -->

    <div class="sidebar-heading">

        Master Data

    </div>



    <!-- PRODUK -->

    <li class="nav-item">

        <a class="nav-link"
            href="<?= site_url('produk'); ?>">

            <i class="fas fa-fw fa-box"></i>

            <span>Produk</span>

        </a>

    </li>



    <!-- PELANGGAN -->

    <li class="nav-item">

        <a class="nav-link"
            href="<?= site_url('pelanggan'); ?>">

            <i class="fas fa-fw fa-users"></i>

            <span>Pelanggan</span>

        </a>

    </li>



    <hr class="sidebar-divider">



    <!-- TRANSAKSI -->

    <div class="sidebar-heading">

        Transaksi

    </div>



    <!-- SALES ORDER -->

    <li class="nav-item">

        <a class="nav-link"
            href="<?= site_url('sales_order'); ?>">

            <i class="fas fa-fw fa-shopping-cart"></i>

            <span>Sales Order</span>

        </a>

    </li>



    <!-- DETAIL ORDER -->

    <li class="nav-item">

        <a class="nav-link"
            href="<?= site_url('detail_order'); ?>">

            <i class="fas fa-fw fa-file-invoice"></i>

            <span>Detail Order</span>

        </a>

    </li>



    <hr class="sidebar-divider">



    <!-- LAPORAN -->

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
            href="<?= site_url('laporan/pelanggan'); ?>">

            <i class="fas fa-fw fa-users"></i>

            <span>Laporan Pelanggan</span>

        </a>

    </li>



    <li class="nav-item">

        <a class="nav-link"
            href="<?= site_url('laporan/order'); ?>">

            <i class="fas fa-fw fa-shopping-bag"></i>

            <span>Laporan Order</span>

        </a>

    </li>



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
