<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Client Area</h3>
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
                        Selamat datang <br>
                        Username: <?= $session->username ?><br>
                        Estate: <?= strtoupper($session->estate) ?><br><br>
                        <?php if (isset($_GET['m'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Update Berhasil!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Vertical form layout section end -->