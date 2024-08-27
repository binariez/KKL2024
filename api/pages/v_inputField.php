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