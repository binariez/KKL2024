<style>
    .form-container {
        transform: translateX(50%);
        max-width: 51%;
        text-align: center;
        font-size: larger;
    }

    .form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    button[type="submit"] {
        cursor: pointer;
        height: 2rem;
    }
</style>

<?php
switch ($est) {
    case "sbe":
        $estate = "SEI BALAI";
        break;
    case "sre":
        $estate = "SERBANGAN";
        break;
    case "kpe":
        $estate = "KWALA PIASA";
        break;
    case "gbe":
        $estate = "GURACH BATU";
        break;
    case "tre":
        $estate = "TANAH RAJA";
        break;
    default:
        echo "<script>window.location.href='/api';</script>";
}
?>

<div class="form-container">
    <b><u><span>INPUT FIELD <?= $estate ?> ESTATE</span></u></b> <br><br>
    <form action="index.php" method="POST" class="form">

        <select name="kategori" required>
            <option selected hidden value="">--KATEGORI--</option>
            <option value="OIL PALM">OIL PALM</option>
            <option value="RUBBER">RUBBER</option>
        </select>
        <input type="text" name="field" placeholder="Field" required autofocus>
        <input type="text" name="ha" placeholder="Ha" inputmode="numeric" required>
        <button type="submit" name="estate" value="<?= $est ?>">Submit</button>

    </form>
</div>