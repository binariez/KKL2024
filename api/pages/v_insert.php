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

    input[type="submit"] {
        cursor: pointer;
        height: 2rem;
    }
</style>

<div class="form-container">
    <b><u><span>INPUT FIELD SEI BALAI ESTATE</span></u></b> <br><br>
    <form action="index.php" method="post" class="form">

        <select name="kategori" required>
            <option selected hidden value="">--KATEGORI--</option>
            <option value="OIL PALM">OIL PALM</option>
            <option value="RUBBER">RUBBER</option>
        </select>
        <input type="text" name="field" placeholder="Field" required autofocus>
        <input type="text" name="ha" placeholder="Ha" inputmode="numeric" required>
        <input type="submit" value="Submit" name="submit">

    </form>
</div>