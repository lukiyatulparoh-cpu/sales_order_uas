
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow-sm"
    style="
        background: #fffaf3;
        border-bottom: 1px solid #f1e3d3;
    ">

    <!-- SIDEBAR TOGGLE -->
    <button id="sidebarToggleTop"
        class="btn btn-link d-md-none rounded-circle mr-3">

        <i class="fa fa-bars"
            style="color:#9c6644;"></i>

    </button>



    <!-- TITLE -->

    <h5 class="mb-0 font-weight-bold"
        style="
            color:#7f5539;
            letter-spacing:0.5px;
        ">

        PT Maju Jaya

    </h5>



    <!-- RIGHT MENU -->

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle"
                href="#"
                id="userDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">

                <span class="mr-3 d-none d-lg-inline small"
                    style="
                        color:#7f5539;
                        font-weight:600;
                    ">

                    <?= $this->session->userdata('username'); ?>

                </span>

                <img class="img-profile rounded-circle shadow-sm"
                    src="<?= base_url('assets/img/undraw_profile_2.svg') ?>"
                    width="42">

            </a>



            <!-- DROPDOWN -->

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in border-0"
                aria-labelledby="userDropdown"
                style="
                    border-radius:16px;
                    background:#fffaf3;
                ">

                <div class="px-3 py-2">

                    <h6 class="mb-0 font-weight-bold"
                        style="color:#7f5539;">

                        <?= $this->session->userdata('username'); ?>

                    </h6>

                    <small class="text-muted">

                        Administrator

                    </small>

                </div>

                <div class="dropdown-divider"></div>



                <a class="dropdown-item"
                    href="#">

                    <i class="fas fa-user fa-sm fa-fw mr-2"
                        style="color:#b08968;"></i>

                    Profile

                </a>



                <div class="dropdown-divider"></div>



                <div class="px-3 py-2">

                    <small class="text-muted">

                        Last Login

                    </small>

                    <br>

                    <small style="color:#7f5539;">

                        <?= date('d M Y H:i'); ?>

                    </small>

                </div>



                <div class="dropdown-divider"></div>



                <a class="dropdown-item"
                    href="<?= site_url('auth/logout')?>">

                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"
                        style="color:#e76f51;"></i>

                    Logout

                </a>

            </div>

        </li>

    </ul>

</nav>