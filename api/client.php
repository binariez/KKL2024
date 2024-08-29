<?php
require_once __DIR__ . '/functions/Sessions.php';
require_once __DIR__ . '/CRUD.php';

try {
    $session = NSessionHandler::cekLogin();
} catch (Exception $e) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Area</title>
    <!-- jq -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app.css">
    <!-- DATEPICKER -->
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/locales/bootstrap-datepicker.id.min.js" charset="UTF-8"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="client.php"><span>APPI</span></a>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- sidebar -->
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li
                            class="sidebar-item  ">
                            <a href="client.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="client.php?i=field" class='sidebar-link'>
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Input Field Estate</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="client.php?i=pengecekan" class='sidebar-link'>
                                <i class="bi bi-check-square-fill"></i>
                                <span>Update Pengecekan</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-table"></i>
                                <span>Tabel Data</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end sidebar -->

            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <?php
                if (!isset($_GET['i'])) {
                    include_once "pages/v_clientIndex.php";
                } else {
                    switch ($_GET['i']) {
                        case "field":
                            include_once "pages/v_inputField.php";
                            break;
                        case "pengecekan":
                            include_once "pages/v_updateCek.php";
                            break;
                        default:
                            header("Location: client.php");
                    }
                }
                ?>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted text-center">
                    <span>
                        <p>2024 &copy; Azhar</p>
                    </span>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/js/app.js"></script>
</body>

</html>