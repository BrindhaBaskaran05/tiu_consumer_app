<aside class="sidebar">


    <!-- =====================================================
         LOGO
    ====================================================== -->

    <div class="logo">

        <img
            src="<?= base_url('assets/images/services/header-logo.png') ?>"
            alt="TIU"
        >

    </div>


    <!-- =====================================================
         MAIN MENU
    ====================================================== -->

    <div class="menu-title">
        Main Menu
    </div>


    <ul class="sidebar-menu">


        <!-- =================================================
             DASHBOARD + SECOND LEVEL MENU
        ================================================== -->

        <li class="dashboard-main">


            <!-- DASHBOARD MAIN ITEM -->

            <a
                href="#dashboard"
                class="menu-link dashboard-link"
            >

                <i class="bi bi-grid"></i>

                <span>
                    Dashboard
                </span>

                <i
                    class="bi bi-chevron-down dashboard-arrow"
                ></i>

            </a>


            <!-- =================================================
                 SECOND LEVEL MENU
            ================================================== -->

            <ul class="submenu">


                <!-- AIRTIME & DATA -->

                <li>

                    <a
                        href="#airtime-data"
                        class="submenu-link"
                    >
                        Airtime & Data
                    </a>

                </li>


                <!-- VOUCHERS -->

                <li>

                    <a
                        href="#vouchers"
                        class="submenu-link"
                    >
                        Vouchers
                    </a>

                </li>


                <!-- BILL PAYMENTS -->

                <li>

                    <a
                        href="#bill-payments"
                        class="submenu-link"
                    >
                        Bill Payments
                    </a>

                </li>




                <!-- ENTERTAINMENT -->

                <li>

                    <a
                        href="#entertainment"
                        class="submenu-link"
                    >
                        Other services
                    </a>

                </li>


            </ul>

        </li>

    </ul>


    <!-- =====================================================
         ACCOUNT
    ====================================================== -->

    <div class="menu-title account-menu">

        Account

    </div>


    <ul class="sidebar-menu">


        <!-- TRANSACTIONS -->

        <li>

            <a
                href="#transactions"
                class="menu-link"
            >

                <i class="bi bi-clock-history"></i>

                Transactions

            </a>

        </li>


        <!-- PROFILE -->

        <li>

            <a
                href="#profile"
                class="menu-link"
            >

                <i class="bi bi-person"></i>

                Profile

            </a>

        </li>


    </ul>


    <!-- =====================================================
         LOGOUT
    ====================================================== -->

    <div class="logout-link">

        <a href="<?= base_url('logout') ?>">

            <i class="bi bi-box-arrow-right"></i>

            Logout

        </a>

    </div>


</aside>
