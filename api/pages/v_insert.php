<style>
    .form-container {
        margin-left: 3rem;
        max-width: 50%;
    }

    .form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    input[type="submit"] {
        cursor: pointer;
        height: 2rem;
    }
</style>

<div class="form-container">
    <form action="index.php" method="post" class="form">

        <input type="text" name="bulan" placeholder="bulan" value="Agustus" readonly>
        <select name="kategori">
            <option value="OIL PALM">OIL PALM</option>
            <option value="RUBBER">RUBBER</option>
        </select>
        <input type="text" name="tahun" value="2024" readonly>
        <input type="text" name="field" placeholder="Field" required autofocus>
        <input type="text" name="ha" placeholder="Ha" inputmode="numeric" required>
        <input type="submit" value="Submit" name="submit">

    </form>
</div>