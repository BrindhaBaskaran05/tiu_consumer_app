<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard - TIU Consumer</title>


    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >


    <style>

        /* =====================================================
           GLOBAL
        ====================================================== */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 25px;
        }

        body {
            margin: 0;
            background: #f5f7fb;
            font-family:
                "Segoe UI",
                Arial,
                sans-serif;
            color: #172b4d;
        }


        /* =====================================================
           TIU COLORS

           Primary Red : #BF2036
           Dark Red    : #A9192F
           Light Red   : #FBECEF
           Navy        : #0A2540
        ====================================================== */


        /* =====================================================
           SIDEBAR
        ====================================================== */

        .sidebar {

            position: fixed;

            left: 0;

            top: 0;

            bottom: 0;

            width: 240px;

            background: #BF2036;

            padding: 25px 15px;

            z-index: 1000;

            display: flex;

            flex-direction: column;

            overflow-y: auto;
        }


        /* Sidebar scrollbar */

        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar::-webkit-scrollbar-thumb {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .25
                );

            border-radius: 10px;
        }


        /* =====================================================
           LOGO
        ====================================================== */

        .logo {

            color: #ffffff;

            font-size: 30px;

            font-weight: 800;

            letter-spacing: 3px;

            padding:
                5px
                15px
                30px;

            flex-shrink: 0;
        }

        .logo img {

            max-width: 155px;

            max-height: 55px;

            object-fit: contain;

            display: block;
        }


        /* =====================================================
           MENU TITLE
        ====================================================== */

        .menu-title {

            color:
                rgba(
                    255,
                    255,
                    255,
                    .55
                );

            font-size: 11px;

            text-transform: uppercase;

            padding:
                10px
                15px;

            letter-spacing: 1px;
        }


        /* =====================================================
           MAIN SIDEBAR MENU
        ====================================================== */

        .sidebar-menu {

            list-style: none;

            padding: 0;

            margin: 0;
        }


        .sidebar-menu > li {

            margin-bottom: 4px;
        }


        /* =====================================================
           MAIN MENU LINK
        ====================================================== */

        .sidebar-menu > li > a {

            display: flex;

            align-items: center;

            gap: 13px;

            padding:
                13px
                15px;

            color:
                rgba(
                    255,
                    255,
                    255,
                    .82
                );

            text-decoration: none;

            border-radius: 10px;

            font-size: 14px;

            transition:
                all .2s ease;
        }


        .sidebar-menu > li > a:hover {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .10
                );

            color: #ffffff;
        }


        .sidebar-menu > li > a.active {

            background: #ffffff;

            color: #BF2036;

            font-weight: 600;

            box-shadow:
                0 5px 15px
                rgba(
                    0,
                    0,
                    0,
                    .08
                );
        }


        .sidebar-menu i {

            font-size: 18px;

            width: 20px;

            text-align: center;

            flex-shrink: 0;
        }


        /* =====================================================
           DASHBOARD ARROW
        ====================================================== */

        .dashboard-arrow {

            margin-left: auto;

            font-size: 13px !important;

            width: auto !important;

            transition:
                transform .2s ease;
        }


        .dashboard-main.active
        .dashboard-arrow {

            transform:
                rotate(180deg);
        }


        /* =====================================================
           SECOND LEVEL MENU
        ====================================================== */

        .submenu {

            list-style: none;

            padding: 5px 0 5px 0;

            margin: 0;

            display: block;
        }


        .submenu li {

            margin: 2px 0;
        }


        .submenu a {

            display: flex;

            align-items: center;

            gap: 10px;

            margin-left: 15px;

            padding:
                9px
                12px
                9px
                34px;

            color:
                rgba(
                    255,
                    255,
                    255,
                    .68
                );

            text-decoration: none;

            border-radius: 8px;

            font-size: 13px;

            transition:
                all .2s ease;

            position: relative;
        }


        .submenu a:before {

            content: "";

            position: absolute;

            left: 18px;

            width: 5px;

            height: 5px;

            border-radius: 50%;

            background:
                rgba(
                    255,
                    255,
                    255,
                    .45
                );
        }


        .submenu a:hover {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .10
                );

            color: #ffffff;
        }


        .submenu a.active {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .15
                );

            color: #ffffff;

            font-weight: 600;
        }


        .submenu a.active:before {

            background: #ffffff;
        }


        /* =====================================================
           ACCOUNT MENU
        ====================================================== */

        .account-menu {

            margin-top: 8px;
        }


        /* =====================================================
           LOGOUT
        ====================================================== */

        .logout-link {

            margin-top: auto;

            padding-top: 20px;

            border-top:
                1px solid
                rgba(
                    255,
                    255,
                    255,
                    .15
                );

            flex-shrink: 0;
        }


        .logout-link a {

            display: flex;

            align-items: center;

            gap: 13px;

            padding:
                13px
                15px;

            color:
                rgba(
                    255,
                    255,
                    255,
                    .78
                );

            text-decoration: none;

            border-radius: 10px;

            font-size: 14px;

            transition:
                all .2s ease;
        }


        .logout-link a:hover {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .10
                );

            color: #ffffff;
        }


        .logout-link i {

            font-size: 18px;

            width: 20px;

            text-align: center;
        }


        /* =====================================================
           MAIN CONTENT
        ====================================================== */

        .main-content {

            margin-left: 240px;

            min-height: 100vh;

            padding:
                25px
                35px
                100px;
        }


        /* =====================================================
           TOP BAR
        ====================================================== */

        .topbar {

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            margin-bottom: 25px;
        }


        .welcome-text h4 {

            margin: 0;

            font-weight: 700;

            color: #0A2540;
        }


        .welcome-text p {

            margin:
                4px
                0
                0;

            color: #8993a4;

            font-size: 13px;
        }


        /* =====================================================
           PROFILE
        ====================================================== */

        .profile {

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .profile-name {

            text-align: right;
        }


        .profile-icon {

            width: 42px;

            height: 42px;

            border-radius: 50%;

            background: #FBECEF;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #BF2036;

            font-size: 18px;
        }


        /* =====================================================
           BALANCE CARD
        ====================================================== */

        .balance-card {

            background:
                linear-gradient(
                    135deg,
                    #BF2036,
                    #A9192F
                );

            border-radius: 18px;

            padding:
                28px
                30px;

            color: #ffffff;

            position: relative;

            overflow: hidden;

            margin-bottom: 30px;
        }


        .balance-card:after {

            content: "";

            position: absolute;

            width: 280px;

            height: 280px;

            border-radius: 50%;

            border:
                50px
                solid
                rgba(
                    255,
                    255,
                    255,
                    .04
                );

            right: -100px;

            top: -130px;
        }


        .balance-label {

            font-size: 13px;

            opacity: .8;

            margin-bottom: 8px;
        }


        .balance {

            font-size: 32px;

            font-weight: 700;

            margin-bottom: 20px;
        }


        .balance-actions {

            display: flex;

            gap: 10px;
        }


        .balance-btn {

            border: none;

            padding:
                9px
                18px;

            border-radius: 8px;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            text-decoration: none;

            display: inline-block;
        }


        .btn-add {

            background: #ffffff;

            color: #BF2036;
        }


        .btn-add:hover {

            background: #FBECEF;

            color: #A9192F;
        }


        .btn-history {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .12
                );

            color: #ffffff;

            border:
                1px solid
                rgba(
                    255,
                    255,
                    255,
                    .20
                );
        }


        .btn-history:hover {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .20
                );

            color: #ffffff;
        }


        /* =====================================================
           SECTIONS
        ====================================================== */

        .service-section {

            scroll-margin-top: 25px;

            margin-bottom: 50px;
        }


        .section-title {

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            margin-bottom: 18px;
        }


        .section-title h5 {

            margin: 0;

            font-size: 19px;

            font-weight: 700;

            color: #0A2540;
        }


        .section-subtitle {

            color: #8b95a4;

            font-size: 12px;

            margin-top: 4px;
        }


        /* =====================================================
           QUICK ACTIONS
        ====================================================== */

        .quick-action-link {

            text-decoration: none;

            display: block;
        }


        .quick-action {

            background: #ffffff;

            border-radius: 14px;

            padding:
                18px
                10px;

            text-align: center;

            border:
                1px solid
                #edf0f4;

            transition: .2s;

            cursor: pointer;
        }


        .quick-action:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 8px 25px
                rgba(
                    191,
                    32,
                    54,
                    .10
                );

            border-color: #F2CBD2;
        }


        .quick-icon {

            width: 45px;

            height: 45px;

            margin:
                0
                auto
                10px;

            border-radius: 12px;

            background: #FBECEF;

            color: #BF2036;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;
        }


        .quick-action span {

            font-size: 13px;

            font-weight: 600;

            color: #526174;
        }


        /* =====================================================
           CATEGORY LABEL
        ====================================================== */

        .category-label {

            font-size: 13px;

            font-weight: 600;

            color: #697586;

            margin-bottom: 12px;
        }


        /* =====================================================
           SERVICE CARD
        ====================================================== */

        .service-card {

            background: #ffffff;

            border-radius: 14px;

            border:
                1px solid
                #e9edf2;

            padding: 12px;

            text-align: center;

            cursor: pointer;

            transition:
                all .25s;

            height: 100%;
        }


        .service-card:hover {

            transform:
                translateY(-4px);

            box-shadow:
                0 10px 30px
                rgba(
                    191,
                    32,
                    54,
                    .12
                );

            border-color: #BF2036;
        }


        .service-image {

            width: 100%;

            height: 105px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 10px;
        }


        .service-image img {

            max-width: 100%;

            max-height: 90px;

            object-fit: contain;
        }


        .service-name {

            font-size: 13px;

            font-weight: 600;

            color: #25364a;
        }


        .service-type {

            font-size: 11px;

            color: #98a2b0;

            margin-top: 3px;
        }


        /* =====================================================
           TRANSACTIONS
        ====================================================== */

        .transaction-box {

            background: #ffffff;

            border-radius: 15px;

            border:
                1px solid
                #edf0f4;

            overflow: hidden;
        }


        .transaction {

            display: flex;

            align-items: center;

            justify-content:
                space-between;

            padding:
                15px
                18px;

            border-bottom:
                1px solid
                #f0f2f5;
        }


        .transaction:last-child {

            border-bottom: none;
        }


        .transaction-left {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .transaction-icon {

            width: 40px;

            height: 40px;

            border-radius: 10px;

            background: #FBECEF;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #BF2036;
        }


        .transaction-name {

            font-size: 13px;

            font-weight: 600;
        }


        .transaction-date {

            font-size: 11px;

            color: #9aa4b2;

            margin-top: 2px;
        }


        .transaction-amount {

            font-size: 13px;

            font-weight: 700;

            color: #0A2540;
        }


        .transaction-success {

            color: #198754;
        }


        /* =====================================================
           VIEW ALL
        ====================================================== */

        .view-all {

            color: #BF2036;

            text-decoration: none;

            font-size: 12px;

            font-weight: 600;
        }


        .view-all:hover {

            color: #A9192F;
        }


        /* =====================================================
           COMING SOON
        ====================================================== */

        .coming-soon {

            background: #ffffff;

            border:
                1px solid
                #edf0f4;

            border-radius: 15px;

            padding:
                40px
                20px;

            text-align: center;
        }


        .coming-soon i {

            font-size: 35px;

            color: #BF2036;

            margin-bottom: 10px;
        }


        .coming-soon h6 {

            color: #526174;

            font-weight: 600;
        }


        .coming-soon p {

            color: #9aa4b2;

            font-size: 12px;

            margin-bottom: 0;
        }


        /* =====================================================
           BACK TO TOP
        ====================================================== */

        .back-to-top {

            position: fixed;

            right: 30px;

            bottom: 30px;

            display: flex;

            align-items: center;

            gap: 7px;

            padding:
                10px
                16px;

            background: #BF2036;

            color: #ffffff;

            border-radius: 25px;

            text-decoration: none;

            font-size: 12px;

            font-weight: 600;

            box-shadow:
                0 6px 20px
                rgba(
                    0,
                    0,
                    0,
                    .15
                );

            opacity: 0;

            visibility: hidden;

            transform:
                translateY(15px);

            transition:
                all .25s ease;

            z-index: 999;
        }


        .back-to-top:hover {

            background: #A9192F;

            color: #ffffff;

            transform:
                translateY(-2px);
        }


        .back-to-top.show {

            opacity: 1;

            visibility: visible;

            transform:
                translateY(0);
        }


        .back-to-top i {

            font-size: 14px;
        }


        /* =====================================================
           MOBILE NAVIGATION
        ====================================================== */

        .mobile-nav {

            display: none;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 991px) {

            .sidebar {

                display: none;
            }


            .main-content {

                margin-left: 0;

                padding:
                    20px
                    18px
                    90px;
            }


            .mobile-nav {

                display: flex;

                position: fixed;

                bottom: 0;

                left: 0;

                right: 0;

                height: 68px;

                background: #ffffff;

                border-top:
                    1px
                    solid
                    #e5e9ef;

                z-index: 1000;

                justify-content:
                    space-around;

                align-items: center;
            }


            .mobile-nav a {

                text-decoration: none;

                color: #8a95a4;

                text-align: center;

                font-size: 10px;
            }


            .mobile-nav a.active {

                color: #BF2036;

                font-weight: 600;
            }


            .mobile-nav i {

                display: block;

                font-size: 20px;

                margin-bottom: 3px;
            }


            .profile-name {

                display: none;
            }


            .back-to-top {

                right: 15px;

                bottom: 82px;
            }

        }


        @media (max-width: 575px) {

            .main-content {

                padding:
                    15px
                    12px
                    85px;
            }


            .balance-card {

                padding: 22px;

                border-radius: 16px;
            }


            .balance {

                font-size: 27px;
            }


            .balance-actions {

                flex-wrap: wrap;
            }


            .service-image {

                height: 75px;
            }


            .service-image img {

                max-height: 70px;
            }


            .service-name {

                font-size: 12px;
            }


            .service-type {

                font-size: 10px;
            }


            .quick-action {

                padding:
                    13px
                    5px;
            }


            .quick-icon {

                width: 40px;

                height: 40px;
            }


            .transaction {

                padding:
                    13px
                    12px;
            }


            .back-to-top {

                padding:
                    9px
                    13px;

                font-size: 11px;
            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     SIDEBAR
========================================================= -->

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

        <li class="dashboard-main active">


            <!-- DASHBOARD MAIN ITEM -->

            <a
                href="#dashboard"
                class="menu-link dashboard-link active"
            >

                <i class="bi bi-grid"></i>

                <span>
                    Dashboard
                </span>

                <i
                    class="bi bi-chevron-down dashboard-arrow"
                ></i>

            </a>


            <!-- SECOND LEVEL -->

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


                <!-- MONEY TRANSFER -->

                <li>

                    <a
                        href="#money-transfer"
                        class="submenu-link"
                    >

                        Money Transfer

                    </a>

                </li>


                <!-- ENTERTAINMENT -->

                <li>

                    <a
                        href="#entertainment"
                        class="submenu-link"
                    >

                        Entertainment

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



<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<main class="main-content">


    <!-- =====================================================
         DASHBOARD
    ====================================================== -->

    <section
        id="dashboard"
        class="service-section"
    >


        <!-- TOP BAR -->

        <div class="topbar">


            <div class="welcome-text">

                <h4>

                    Welcome back,
                    <?= esc(session()->get('user_name')) ?>

                    👋

                </h4>


                <p>

                    Manage your services and payments from one place.

                </p>

            </div>


            <div class="profile">


                <div class="profile-name">

                    <div
                        style="
                            font-size:13px;
                            font-weight:600;
                        "
                    >

                        <?= esc(session()->get('user_name')) ?>

                    </div>


                    <div
                        style="
                            font-size:11px;
                            color:#929baa;
                        "
                    >

                        Consumer

                    </div>

                </div>


                <div class="profile-icon">

                    <i class="bi bi-person"></i>

                </div>


            </div>


        </div>



        <!-- =================================================
             BALANCE
        ================================================== -->

        <div class="balance-card">


            <div class="balance-label">

                Available Balance

            </div>


            <div class="balance">

                R 1,831.36

            </div>


            <div class="balance-actions">


                <a
                    href="#"
                    class="balance-btn btn-add"
                >

                    <i class="bi bi-plus-circle me-1"></i>

                    Add Money

                </a>


                <a
                    href="#transactions"
                    class="balance-btn btn-history"
                >

                    <i class="bi bi-clock-history me-1"></i>

                    Transactions

                </a>


            </div>


        </div>



        <!-- =================================================
             QUICK ACTIONS
        ================================================== -->

        <div class="section-title">

            <div>

                <h5>
                    Quick Actions
                </h5>

            </div>

        </div>


        <div class="row g-3 mb-4">


            <!-- AIRTIME -->

            <div class="col-4 col-md-3 col-lg-2">

                <a
                    href="#airtime-data"
                    class="quick-action-link"
                >

                    <div class="quick-action">

                        <div class="quick-icon">

                            <i class="bi bi-phone"></i>

                        </div>

                        <span>
                            Airtime
                        </span>

                    </div>

                </a>

            </div>


            <!-- DATA -->

            <div class="col-4 col-md-3 col-lg-2">

                <a
                    href="#airtime-data"
                    class="quick-action-link"
                >

                    <div class="quick-action">

                        <div class="quick-icon">

                            <i class="bi bi-wifi"></i>

                        </div>

                        <span>
                            Data
                        </span>

                    </div>

                </a>

            </div>


            <!-- BILLS -->

            <div class="col-4 col-md-3 col-lg-2">

                <a
                    href="#bill-payments"
                    class="quick-action-link"
                >

                    <div class="quick-action">

                        <div class="quick-icon">

                            <i class="bi bi-lightning-charge"></i>

                        </div>

                        <span>
                            Bills
                        </span>

                    </div>

                </a>

            </div>


            <!-- TRANSFER -->

            <div class="col-4 col-md-3 col-lg-2">

                <a
                    href="#money-transfer"
                    class="quick-action-link"
                >

                    <div class="quick-action">

                        <div class="quick-icon">

                            <i class="bi bi-send"></i>

                        </div>

                        <span>
                            Transfer
                        </span>

                    </div>

                </a>

            </div>


            <!-- TV -->

            <div class="col-4 col-md-3 col-lg-2">

                <a
                    href="#entertainment"
                    class="quick-action-link"
                >

                    <div class="quick-action">

                        <div class="quick-icon">

                            <i class="bi bi-tv"></i>

                        </div>

                        <span>
                            TV
                        </span>

                    </div>

                </a>

            </div>


            <!-- VOUCHERS -->

            <div class="col-4 col-md-3 col-lg-2">

                <a
                    href="#vouchers"
                    class="quick-action-link"
                >

                    <div class="quick-action">

                        <div class="quick-icon">

                            <i class="bi bi-ticket"></i>

                        </div>

                        <span>
                            Vouchers
                        </span>

                    </div>

                </a>

            </div>


        </div>


    </section>



    <!-- =====================================================
         AIRTIME & DATA
    ====================================================== -->

    <section
        id="airtime-data"
        class="service-section"
    >


        <div class="section-title">

            <div>

                <h5>
                    Airtime & Data
                </h5>

                <div class="section-subtitle">

                    Recharge mobile airtime and data

                </div>

            </div>

        </div>


        <div class="category-label">

            Mobile Networks

        </div>


        <div class="row g-3">


            <!-- MTN -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/prov_mtn.png') ?>"
                            alt="MTN"
                        >

                    </div>

                    <div class="service-name">
                        MTN
                    </div>

                    <div class="service-type">
                        Airtime & Data
                    </div>

                </div>

            </div>


            <!-- VODACOM -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/prov_vodacom.png') ?>"
                            alt="Vodacom"
                        >

                    </div>

                    <div class="service-name">
                        Vodacom
                    </div>

                    <div class="service-type">
                        Airtime & Data
                    </div>

                </div>

            </div>


            <!-- CELL C -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/prov3.png') ?>"
                            alt="Cell C"
                        >

                    </div>

                    <div class="service-name">
                        Cell C
                    </div>

                    <div class="service-type">
                        Airtime & Data
                    </div>

                </div>

            </div>


            <!-- TELKOM -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/prov5.png') ?>"
                            alt="Telkom"
                        >

                    </div>

                    <div class="service-name">
                        Telkom
                    </div>

                    <div class="service-type">
                        Airtime & Data
                    </div>

                </div>

            </div>


        </div>


    </section>



    <!-- =====================================================
         VOUCHERS
    ====================================================== -->

    <section
        id="vouchers"
        class="service-section"
    >


        <div class="section-title">

            <div>

                <h5>
                    Vouchers
                </h5>

                <div class="section-subtitle">

                    Purchase digital vouchers

                </div>

            </div>

        </div>


        <div class="row g-3">


            <!-- TOP IT UP VOUCHER -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/voucher.png') ?>"
                            alt="Voucher"
                        >

                    </div>

                    <div class="service-name">

                        Top it Up Voucher

                    </div>

                    <div class="service-type">

                        Top it Up Voucher

                    </div>

                </div>

            </div>


            <!-- 1 VOUCHER -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/voucher.png') ?>"
                            alt="Voucher"
                        >

                    </div>

                    <div class="service-name">

                        1 Voucher

                    </div>

                    <div class="service-type">

                        1 Voucher

                    </div>

                </div>

            </div>


            <!-- OTT VOUCHER -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/ott.png') ?>"
                            alt="OTT Voucher"
                        >

                    </div>

                    <div class="service-name">

                        OTT Voucher

                    </div>

                    <div class="service-type">

                        OTT Voucher

                    </div>

                </div>

            </div>


        </div>


    </section>



    <!-- =====================================================
         BILL PAYMENTS
    ====================================================== -->

    <section
        id="bill-payments"
        class="service-section"
    >


        <div class="section-title">

            <div>

                <h5>
                    Bill Payments
                </h5>

                <div class="section-subtitle">

                    Pay your everyday utility bills

                </div>

            </div>

        </div>


        <div class="category-label">

            Utilities

        </div>


        <div class="row g-3">


            <!-- ELECTRICITY -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/electricity.png') ?>"
                            alt="Electricity"
                        >

                    </div>

                    <div class="service-name">
                        Electricity
                    </div>

                    <div class="service-type">
                        Electricity Payment
                    </div>

                </div>

            </div>


            <!-- WATER -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/water.png') ?>"
                            alt="Water"
                        >

                    </div>

                    <div class="service-name">
                        Water
                    </div>

                    <div class="service-type">
                        Water Bill
                    </div>

                </div>

            </div>


            <!-- MUNICIPAL -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/Bill_Payments.png') ?>"
                            alt="Bill Payments"
                        >

                    </div>

                    <div class="service-name">
                        Bill Payments
                    </div>

                    <div class="service-type">
                        Bill Payments
                    </div>

                </div>

            </div>


        </div>


    </section>



    <!-- =====================================================
         MONEY TRANSFER
    ====================================================== -->

    <section
        id="money-transfer"
        class="service-section"
    >


        <div class="section-title">

            <div>

                <h5>
                    Money Transfer
                </h5>

                <div class="section-subtitle">

                    Send and receive money securely

                </div>

            </div>

        </div>


        <div class="row g-3">


            <!-- MONEY TRANSFER -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/Money_Transfers.png') ?>"
                            alt="Money Transfer"
                        >

                    </div>

                    <div class="service-name">
                        Money Transfer
                    </div>

                    <div class="service-type">
                        Send Money
                    </div>

                </div>

            </div>


            <!-- CARD PAYMENT -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/Card_Payments.png') ?>"
                            alt="Card Payment"
                        >

                    </div>

                    <div class="service-name">
                        Card Payment
                    </div>

                    <div class="service-type">
                        Card Services
                    </div>

                </div>

            </div>


        </div>


    </section>



    <!-- =====================================================
         ENTERTAINMENT
    ====================================================== -->

    <section
        id="entertainment"
        class="service-section"
    >


        <div class="section-title">

            <div>

                <h5>
                    Entertainment
                </h5>

                <div class="section-subtitle">

                    Access your favourite entertainment services

                </div>

            </div>

        </div>


        <div class="row g-3">


            <!-- DSTV -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/dstv.png') ?>"
                            alt="DStv"
                        >

                    </div>

                    <div class="service-name">
                        DStv
                    </div>

                    <div class="service-type">
                        TV Subscription
                    </div>

                </div>

            </div>


            <!-- NETFLIX -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/netflix.png') ?>"
                            alt="Netflix"
                        >

                    </div>

                    <div class="service-name">
                        Netflix
                    </div>

                    <div class="service-type">
                        Entertainment
                    </div>

                </div>

            </div>


            <!-- OTT -->

            <div class="col-6 col-md-4 col-lg-3">

                <div class="service-card">

                    <div class="service-image">

                        <img
                            src="<?= base_url('assets/images/services/ott.png') ?>"
                            alt="OTT"
                        >

                    </div>

                    <div class="service-name">
                        OTT Voucher
                    </div>

                    <div class="service-type">
                        Entertainment
                    </div>

                </div>

            </div>


        </div>


    </section>



    <!-- =====================================================
         TRANSACTIONS
    ====================================================== -->

    <section
        id="transactions"
        class="service-section"
    >


        <div class="section-title">

            <div>

                <h5>
                    Recent Transactions
                </h5>

                <div class="section-subtitle">

                    Your latest account activity

                </div>

            </div>


            <a
                href="#transactions"
                class="view-all"
            >

                View all

            </a>

        </div>


        <div class="transaction-box">


            <!-- TRANSACTION 1 -->

            <div class="transaction">

                <div class="transaction-left">

                    <div class="transaction-icon">

                        <i class="bi bi-phone"></i>

                    </div>

                    <div>

                        <div class="transaction-name">

                            MTN Airtime

                        </div>

                        <div class="transaction-date">

                            Today, 03:15 PM

                        </div>

                    </div>

                </div>


                <div class="transaction-amount">

                    - R 50.00

                </div>

            </div>



            <!-- TRANSACTION 2 -->

            <div class="transaction">

                <div class="transaction-left">

                    <div class="transaction-icon">

                        <i class="bi bi-lightning-charge"></i>

                    </div>

                    <div>

                        <div class="transaction-name">

                            Electricity

                        </div>

                        <div class="transaction-date">

                            Yesterday, 11:20 AM

                        </div>

                    </div>

                </div>


                <div class="transaction-amount">

                    - R 250.00

                </div>

            </div>



            <!-- TRANSACTION 3 -->

            <div class="transaction">

                <div class="transaction-left">

                    <div class="transaction-icon">

                        <i class="bi bi-wallet2"></i>

                    </div>

                    <div>

                        <div class="transaction-name">

                            Wallet Top Up

                        </div>

                        <div class="transaction-date">

                            14 Sep 2026

                        </div>

                    </div>

                </div>


                <div
                    class="transaction-amount transaction-success"
                >

                    + R 500.00

                </div>

            </div>


        </div>


    </section>



    <!-- =====================================================
         PROFILE
    ====================================================== -->

    <section
        id="profile"
        class="service-section"
    >


        <div class="section-title">

            <div>

                <h5>
                    Profile
                </h5>

                <div class="section-subtitle">

                    Manage your account information

                </div>

            </div>

        </div>


        <div class="coming-soon">

            <i class="bi bi-person-circle"></i>

            <h6>

                Profile Management

            </h6>

            <p>

                Profile settings will be available here.

            </p>

        </div>


    </section>


</main>



<!-- =========================================================
     BACK TO TOP
========================================================= -->

<a
    href="#dashboard"
    class="back-to-top"
    id="backToTop"
>

    <i class="bi bi-arrow-up"></i>

    <span>
        Back to top
    </span>

</a>



<!-- =========================================================
     MOBILE NAVIGATION
========================================================= -->

<div class="mobile-nav">


    <a
        href="#dashboard"
        class="active"
    >

        <i class="bi bi-grid"></i>

        Home

    </a>


    <a href="#airtime-data">

        <i class="bi bi-phone"></i>

        Airtime

    </a>


    <a href="#bill-payments">

        <i class="bi bi-receipt"></i>

        Bills

    </a>


    <a href="#transactions">

        <i class="bi bi-clock-history"></i>

        History

    </a>


    <a href="#profile">

        <i class="bi bi-person"></i>

        Profile

    </a>


</div>



<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>


/* =========================================================
   ELEMENTS
========================================================= */

const dashboardMain =
    document.querySelector('.dashboard-main');

const dashboardLink =
    document.querySelector('.dashboard-link');

const submenuLinks =
    document.querySelectorAll('.submenu-link');

const menuLinks =
    document.querySelectorAll(
        '.menu-link'
    );

const sections =
    document.querySelectorAll(
        '.service-section'
    );

const backToTop =
    document.getElementById(
        'backToTop'
    );



/* =========================================================
   KEEP DASHBOARD MENU OPEN
========================================================= */

dashboardMain.classList.add(
    'active'
);



/* =========================================================
   DASHBOARD CLICK
========================================================= */

dashboardLink.addEventListener(
    'click',
    function() {

        dashboardMain.classList.add(
            'active'
        );

        menuLinks.forEach(
            function(item) {

                item.classList.remove(
                    'active'
                );

            }
        );

        dashboardLink.classList.add(
            'active'
        );

    }
);



/* =========================================================
   SECOND LEVEL CLICK
========================================================= */

submenuLinks.forEach(
    function(link) {

        link.addEventListener(
            'click',
            function() {


                /* Keep dashboard parent active */

                dashboardMain.classList.add(
                    'active'
                );


                /* Remove active from all */

                menuLinks.forEach(
                    function(item) {

                        item.classList.remove(
                            'active'
                        );

                    }
                );


                submenuLinks.forEach(
                    function(item) {

                        item.classList.remove(
                            'active'
                        );

                    }
                );


                /* Activate clicked submenu */

                this.classList.add(
                    'active'
                );

            }
        );

    }
);



/* =========================================================
   ACCOUNT MENU CLICK
========================================================= */

menuLinks.forEach(
    function(link) {

        link.addEventListener(
            'click',
            function() {

                const href =
                    this.getAttribute(
                        'href'
                    );


                if (
                    href === '#transactions' ||
                    href === '#profile'
                ) {

                    dashboardMain.classList.remove(
                        'active'
                    );


                    submenuLinks.forEach(
                        function(item) {

                            item.classList.remove(
                                'active'
                            );

                        }
                    );

                }

            }
        );

    }
);



/* =========================================================
   CHANGE ACTIVE MENU WHILE SCROLLING
========================================================= */

window.addEventListener(
    'scroll',
    function() {


        let currentSection =
            'dashboard';


        sections.forEach(
            function(section) {

                const sectionTop =
                    section.offsetTop;


                if (
                    window.scrollY >=
                    sectionTop - 150
                ) {

                    currentSection =
                        section.getAttribute(
                            'id'
                        );

                }

            }
        );


        /* -----------------------------------------------
           Dashboard section
        ------------------------------------------------ */

        if (
            currentSection ===
            'dashboard'
        ) {

            dashboardMain.classList.add(
                'active'
            );


            dashboardLink.classList.add(
                'active'
            );


            submenuLinks.forEach(
                function(item) {

                    item.classList.remove(
                        'active'
                    );

                }
            );

        }


        /* -----------------------------------------------
           Second level sections
        ------------------------------------------------ */

        else if (
            currentSection ===
                'airtime-data' ||

            currentSection ===
                'vouchers' ||

            currentSection ===
                'bill-payments' ||

            currentSection ===
                'money-transfer' ||

            currentSection ===
                'entertainment'
        ) {


            dashboardMain.classList.add(
                'active'
            );


            dashboardLink.classList.remove(
                'active'
            );


            submenuLinks.forEach(
                function(link) {

                    link.classList.remove(
                        'active'
                    );


                    if (
                        link.getAttribute(
                            'href'
                        ) ===
                        '#' +
                        currentSection
                    ) {

                        link.classList.add(
                            'active'
                        );

                    }

                }
            );

        }


        /* -----------------------------------------------
           Account sections
        ------------------------------------------------ */

        else {

            dashboardMain.classList.remove(
                'active'
            );


            dashboardLink.classList.remove(
                'active'
            );


            submenuLinks.forEach(
                function(item) {

                    item.classList.remove(
                        'active'
                    );

                }
            );


            menuLinks.forEach(
                function(link) {

                    if (
                        link.getAttribute(
                            'href'
                        ) ===
                        '#' +
                        currentSection
                    ) {

                        link.classList.add(
                            'active'
                        );

                    }

                }
            );

        }


        /* -----------------------------------------------
           Back to top
        ------------------------------------------------ */

        if (
            window.scrollY > 300
        ) {

            backToTop.classList.add(
                'show'
            );

        } else {

            backToTop.classList.remove(
                'show'
            );

        }

    }
);



/* =========================================================
   MOBILE NAVIGATION
========================================================= */

const mobileLinks =
    document.querySelectorAll(
        '.mobile-nav a'
    );


mobileLinks.forEach(
    function(link) {

        link.addEventListener(
            'click',
            function() {

                mobileLinks.forEach(
                    function(item) {

                        item.classList.remove(
                            'active'
                        );

                    }
                );


                this.classList.add(
                    'active'
                );

            }
        );

    }
);


</script>


</body>

</html>