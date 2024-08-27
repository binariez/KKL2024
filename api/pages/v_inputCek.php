<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Input Pengecekan</h3>
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
                        <form action="functions/GetFields.php" method="get" class="form form-vertical">
                            <div class="form-body">
                                <div class="row d-flex flex-column">
                                    <div class="col-6">
                                        <form-group>
                                            <label for="bln_thn">Bulan dan Tahun</label>
                                            <div class="input-group mb-2" id="bln_thn">
                                                <select name="bulan" class="form-select">
                                                    <option value="Januari" <?= intval(date('m')) == 1 ? 'selected' : '' ?>>Januari</option>
                                                    <option value="Februari" <?= intval(date('m')) == 2 ? 'selected' : '' ?>>Februari</option>
                                                    <option value="Maret" <?= intval(date('m')) == 3 ? 'selected' : '' ?>>Maret</option>
                                                    <option value="April" <?= intval(date('m')) == 4 ? 'selected' : '' ?>>April</option>
                                                    <option value="Mei" <?= intval(date('m')) == 5 ? 'selected' : '' ?>>Mei</option>
                                                    <option value="Juni" <?= intval(date('m')) == 6 ? 'selected' : '' ?>>Juni</option>
                                                    <option value="Juli" <?= intval(date('m')) == 7 ? 'selected' : '' ?>>Juli</option>
                                                    <option value="Agustus" <?= intval(date('m')) == 8 ? 'selected' : '' ?>>Agustus</option>
                                                    <option value="September" <?= intval(date('m')) == 9 ? 'selected' : '' ?>>September</option>
                                                    <option value="Oktober" <?= intval(date('m')) == 10 ? 'selected' : '' ?>>Oktober</option>
                                                    <option value="November" <?= intval(date('m')) == 11 ? 'selected' : '' ?>>November</option>
                                                    <option value="Desember" <?= intval(date('m')) == 12 ? 'selected' : '' ?>>Desember</option>
                                                </select>
                                                <input type="text" name="tahun" class="form-control" value="<?= date('Y') ?>" readonly>
                                            </div>
                                        </form-group>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="estate">Estate</label>
                                            <select id="estate" name="estate" class="form-select" required onchange="showFields(this.value)">
                                                <option value="" hidden>-Pilih Estate-</option>
                                                <option value="gbe">GURACH BATU</option>
                                                <option value="kpe">KWALA PIASA</option>
                                                <option value="sbe">SEI BALAI</option>
                                                <option value="sre">SERBANGAN</option>
                                                <option value="tre">TANAH RAJA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kategori">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-select" required>
                                                <option value="oilpalm">OIL PALM</option>
                                                <option value="rubber">RUBBER</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group"><label for="field">Field</label>
                                            <select name="field" id="field" class="form-select" required>
                                                <option value="" hidden>-Pilih Estate Terlebih Dahulu-</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="week">Week</label>
                                            <select name="week" id="week" class="form-select">
                                                <option value="w1">Week 1</option>
                                                <option value="w2">Week 2</option>
                                                <option value="w3">Week 3</option>
                                                <option value="w4">Week 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-2">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <input type="checkbox" id="pengecekan" name="pengecekan" value="true" class="form-check-input">
                                                <label for="pengecekan">Sudah dilakukan pengecekan.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-2">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <input type="checkbox" id="kerusakan" name="kerusakan" value="true" class="form-check-input">
                                                <label for="kerusakan">Terdapat kerusakan.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 mb-2" id="tglPerbaikan" style="display: none;">
                                        <label for="datepicker">Tanggal perbaikan jika <b>sudah </b>diperbaiki. <br>Kosongkan jika <b>belum.</b></label>
                                        <div id="datepicker" class="form-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" name="tglPerbaikan" readonly />
                                            <span class="input-group-addon">
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 d-grid mt-4">
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

<script>
    $(function() {
        $("#datepicker").datepicker({
            autoclose: true,
            language: "id",
            todayHighlight: true,
            todayBtn: "linked",
            clearBtn: true
        });
    });

    $(function() {
        $("#kerusakan").click(function() {
            if ($(this).is(":checked")) {
                $("#tglPerbaikan").show();
            } else {
                $("#tglPerbaikan").hide();
            }
        });
    });

    function showFields(est) {
        if (est == "") {
            document.getElementById("field").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("field").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "functions/GetFields.php?estate=" + est, true);
            xmlhttp.send();
        }
    }
</script>