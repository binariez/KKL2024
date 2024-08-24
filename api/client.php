<?php
require_once __DIR__ . '/functions/Connection.php';
require_once __DIR__ . '/template.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Area</title>
    <!-- <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app-dark.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.php"><span>APPI</span></a>
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
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Login</span>
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Input Data Field Estate</h3>
                            <!-- <p class="text-subtitle text-muted">Multiple form layouts, you can use.</p> -->
                        </div>
                    </div>
                </div>

                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts" class="flex-shrink-0">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="client.php" method="post" class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="estate">Estate</label>
                                                            <select id="estate" name="estate" class="form-select">
                                                                <option value="gbe">GURACH BATU</option>
                                                                <option value="kpe">KWALA PIASA</option>
                                                                <option value="sbe">SEI BALAI</option>
                                                                <option value="sre">SERBANGAN</option>
                                                                <option value="tre">TANAH RAJA</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="kategori">Kategori</label>
                                                            <select id="kategori" name="kategori" class="form-select" required>
                                                                <option value="OIL PALM">OIL PALM</option>
                                                                <option value="RUBBER">RUBBER</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="field">Field</label>
                                                            <input type="text" maxlength="6" id="field" class="form-control text-uppercase"
                                                                name="field" placeholder="cth: P12345" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="ha">Ha</label>
                                                            <input type="text" inputmode="numeric" maxlength="7" id="ha" class="form-control"
                                                                name="ha" placeholder="cth: 23,6" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Vertical form layout section end -->
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
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/static/js/components/dark.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/js/app.js"></script>
</body>

</html>