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

            z-index: 1100;

            display: flex;

            flex-direction: column;

            overflow-y: auto;

            transition:
                transform .3s ease;
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
                transform .25s ease;
        }


        .dashboard-main.submenu-open
        .dashboard-arrow {

            transform:
                rotate(180deg);
        }


        /* =====================================================
           SECOND LEVEL MENU
        ====================================================== */

        .submenu {

            list-style: none;

            padding:
                5px 0;

            margin: 0;

            /*
             * CLOSED BY DEFAULT
             */
            display: none;

            overflow: hidden;
        }


        /*
         * OPEN SUBMENU
         */

        .dashboard-main.submenu-open
        .submenu {

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
           MOBILE MENU BUTTON
        ====================================================== */

        .mobile-menu-btn {

            display: none;

            position: fixed;

            top: 15px;

            left: 15px;

            width: 44px;

            height: 44px;

            border: none;

            border-radius: 12px;

            background: #BF2036;

            color: #ffffff;

            font-size: 23px;

            align-items: center;

            justify-content: center;

            cursor: pointer;

            z-index: 1200;

            box-shadow:
                0 5px 18px
                rgba(
                    0,
                    0,
                    0,
                    .15
                );
        }


        .mobile-menu-btn:hover {

            background: #A9192F;
        }


        /* =====================================================
           MOBILE OVERLAY
        ====================================================== */

        .mobile-menu-overlay {

            display: none;

            position: fixed;

            inset: 0;

            background:
                rgba(
                    0,
                    0,
                    0,
                    .40
                );

            z-index: 1050;
        }


        .mobile-menu-overlay.show {

            display: block;
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

            /*
             * Mobile hamburger
             */

            .mobile-menu-btn {

                display: flex;
            }


            /*
             * Sidebar hidden outside screen
             */

            .sidebar {

                display: flex;

                width: 270px;

                transform:
                    translateX(-100%);

                transition:
                    transform .3s ease;

                box-shadow:
                    8px 0 30px
                    rgba(
                        0,
                        0,
                        0,
                        .15
                    );
            }


            /*
             * Sidebar OPEN
             */

            .sidebar.mobile-open {

                transform:
                    translateX(0);
            }


            /*
             * Main content
             */

            .main-content {

                margin-left: 0;

                padding:
                    75px
                    18px
                    90px;
            }


            /*
             * Mobile bottom navigation
             */

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

                min-width: 55px;
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


        /* =====================================================
           SMALL MOBILE
        ====================================================== */

        @media (max-width: 575px) {

            .main-content {

                padding:
                    72px
                    12px
                    85px;
            }


            .mobile-menu-btn {

                width: 42px;

                height: 42px;

                top: 13px;

                left: 13px;
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


            .balance-btn {

                padding:
                    8px
                    13px;

                font-size: 12px;
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


            .transaction-amount {

                font-size: 12px;
            }


            .back-to-top {

                padding:
                    9px
                    13px;

                font-size: 11px;
            }

        }
.cellc-service-card {
    cursor: pointer;
}

.cellc-service-card:active {
    transform: scale(.98);
}
/* =========================================================
   CELL C AIRTIME MODAL
========================================================= */

.cellc-modal .modal-dialog {
    max-width: 680px;
    margin: 1.75rem auto;
}

.cellc-modal .modal-content {
    border: none;
    border-radius: 22px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 25px 70px rgba(0, 0, 0, .22);
}


/* =========================================================
   HEADER
========================================================= */

.cellc-modal-header {
    padding: 20px 22px;
    background: linear-gradient(
        135deg,
        #BF2036 0%,
        #A9192F 100%
    );

    color: #ffffff;

    display: flex;
    align-items: center;
    justify-content: space-between;
}

.cellc-header-left {
    display: flex;
    align-items: center;
    gap: 14px;
}

.cellc-logo-box {
    width: 55px;
    height: 55px;

    background: #ffffff;
    border-radius: 12px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 6px;

    box-shadow: 0 5px 15px rgba(0, 0, 0, .12);
}

.cellc-logo-box img {
    width: 100%;
    height: 100%;

    object-fit: contain;
}

.cellc-modal-header h5 {
    margin: 0;

    font-size: 18px;
    font-weight: 700;
}

.cellc-modal-header p {
    margin: 3px 0 0;

    font-size: 12px;

    opacity: .80;
}


/* CLOSE */

.cellc-close {
    width: 38px;
    height: 38px;

    border: none;

    border-radius: 50%;

    background: rgba(255, 255, 255, .14);

    color: #ffffff;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    transition: .2s;
}

.cellc-close:hover {
    background: rgba(255, 255, 255, .25);
}


/* =========================================================
   BODY
========================================================= */

.cellc-modal-body {
    padding: 24px;
}

.cellc-title-row {
    display: flex;

    align-items: center;
    justify-content: space-between;

    margin-bottom: 18px;
}

.cellc-title-row h6 {
    margin: 0;

    font-size: 16px;
    font-weight: 700;

    color: #172b4d;
}

.cellc-title-row span {
    display: block;

    margin-top: 3px;

    font-size: 12px;

    color: #8b95a4;
}


/* SELECT BADGE */

.cellc-selected-badge {
    padding: 6px 12px;

    border-radius: 20px;

    background: #f5f7fb;

    color: #8b95a4;

    font-size: 11px;
    font-weight: 600;
}

.cellc-selected-badge.active {
    background: #FBECEF;
    color: #BF2036;
}


/* =========================================================
   AMOUNT GRID
========================================================= */

.cellc-amount-grid {
    display: grid;

    grid-template-columns:
        repeat(5, 1fr);

    gap: 12px;
}


/* AMOUNT CARD */

.cellc-amount {
    position: relative;

    min-height: 60px;

    border: 1px solid #e7ebf0;

    border-radius: 14px;

    background: #ffffff;

    cursor: pointer;

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 3px;

    transition:
        transform .18s ease,
        border-color .18s ease,
        box-shadow .18s ease,
        background .18s ease;
}

.cellc-amount:hover {
    transform: translateY(-3px);

    border-color: #BF2036;

    box-shadow:
        0 8px 22px rgba(
            191,
            32,
            54,
            .12
        );
}


/* CURRENCY */

.cellc-amount .currency {
    font-family: Georgia, serif;

    font-size: 17px;

    font-weight: 600;

    color: #7d8795;
}


/* NUMBER */

.cellc-amount strong {
    font-family: Georgia, serif;

    font-size: 20px;

    font-weight: 700;

    color: #172b4d;
}


/* SELECTED */

.cellc-amount.selected {
    background: #BF2036;

    border-color: #BF2036;

    box-shadow:
        0 8px 24px rgba(
            191,
            32,
            54,
            .25
        );

    transform: translateY(-2px);
}

.cellc-amount.selected .currency,
.cellc-amount.selected strong {
    color: #ffffff;
}


/* CHECK */

.cellc-amount.selected::after {
    content: "\f26e";

    font-family:
        "bootstrap-icons";

    position: absolute;

    top: 7px;
    right: 8px;

    width: 18px;
    height: 18px;

    border-radius: 50%;

    background: #ffffff;

    color: #BF2036;

    font-size: 11px;

    display: flex;
    align-items: center;
    justify-content: center;
}


/* =========================================================
   SELECTION PREVIEW
========================================================= */

.cellc-selection {
    margin-top: 20px;

    padding: 13px 15px;

    border-radius: 13px;

    background: #f8f9fb;

    border: 1px solid #edf0f4;

    display: flex;

    align-items: center;

    gap: 12px;
}

.selection-icon {
    width: 42px;
    height: 42px;

    border-radius: 11px;

    background: #FBECEF;

    color: #BF2036;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 17px;
}

.selection-info {
    flex: 1;
}

.selection-info span {
    display: block;

    font-size: 10px;

    color: #8b95a4;

    margin-bottom: 2px;
}

.selection-info strong {
    font-size: 14px;

    color: #172b4d;
}

.selection-check {
    width: 28px;
    height: 28px;

    border-radius: 50%;

    background: #e9edf2;

    color: #ffffff;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 14px;

    transition: .2s;
}

.selection-check.active {
    background: #198754;
}


/* =========================================================
   FOOTER
========================================================= */

.cellc-modal-footer {
    padding: 16px 24px;

    border-top: 1px solid #edf0f4;

    display: flex;

    justify-content: flex-end;

    gap: 10px;
}


/* CANCEL */

.cellc-cancel-btn {
    border: 1px solid #e1e5ea;

    background: #ffffff;

    color: #667085;

    padding: 11px 20px;

    border-radius: 10px;

    font-size: 13px;
    font-weight: 600;

    cursor: pointer;

    transition: .2s;
}

.cellc-cancel-btn:hover {
    background: #f5f7fb;
}


/* CONTINUE */

.cellc-continue-btn {
    border: none;

    background: #BF2036;

    color: #ffffff;

    padding: 11px 22px;

    border-radius: 10px;

    font-size: 13px;
    font-weight: 600;

    display: flex;
    align-items: center;

    gap: 8px;

    cursor: pointer;

    transition: .2s;
}

.cellc-continue-btn:hover:not(:disabled) {
    background: #A9192F;

    transform: translateY(-1px);

    box-shadow:
        0 6px 18px rgba(
            191,
            32,
            54,
            .20
        );
}

.cellc-continue-btn:disabled {
    background: #d9dde3;

    color: #ffffff;

    cursor: not-allowed;
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 575px) {

    .cellc-modal .modal-dialog {
        margin: 0;

        min-height: 100vh;

        display: flex;
        align-items: flex-end;
    }

    .cellc-modal .modal-content {
        width: 100%;

        border-radius:
            22px
            22px
            0
            0;

        max-height: 94vh;
    }

    .cellc-modal-header {
        padding: 17px 16px;
    }

    .cellc-logo-box {
        width: 48px;
        height: 48px;
    }

    .cellc-modal-header h5 {
        font-size: 16px;
    }

    .cellc-modal-body {
        padding: 18px 15px;

        overflow-y: auto;
    }

    .cellc-title-row {
        margin-bottom: 14px;
    }

    .cellc-title-row h6 {
        font-size: 15px;
    }

    .cellc-amount-grid {
        grid-template-columns:
            repeat(3, 1fr);

        gap: 9px;
    }

    .cellc-amount {
        min-height: 72px;

        border-radius: 12px;
    }

    .cellc-amount strong {
        font-size: 22px;
    }

    .cellc-amount .currency {
        font-size: 15px;
    }

    .cellc-selection {
        margin-top: 15px;
    }

    .cellc-modal-footer {
        padding: 13px 15px;

        display: grid;

        grid-template-columns: 1fr 1.5fr;
    }

    .cellc-cancel-btn,
    .cellc-continue-btn {
        width: 100%;

        justify-content: center;
    }
}


/* VERY SMALL MOBILE */

@media (max-width: 360px) {

    .cellc-amount-grid {
        grid-template-columns:
            repeat(2, 1fr);
    }

    .cellc-amount {
        min-height: 68px;
    }

}
    </style>

</head>


<body>
