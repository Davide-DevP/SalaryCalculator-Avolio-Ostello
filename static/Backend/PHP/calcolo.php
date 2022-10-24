<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Salary Calculator</title>
    <link rel="stylesheet" href="../../Frontend/CSS/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Frontend/CSS/assets/css/styles.css">
</head>

<body id="grad">
    <form action="../../Backend/PHP/calcolo.php" method="post">
        <div class="container" id="standard-container">
            <div class="row" id="standard-row">
                <div class="col text-center"><strong class="text-center" style="font-size: 32px;">Quanto sarai povero?</strong></div>
            </div>
            <div class="row" id="standard-row">
                <div class="col text-start" style="width: auto;"><strong class="text-start" style="font-size: 20px;margin-bottom: 10px;">Giorni</strong><input class="placeholder" type="number" id="inputs" required="" name="giorni" min="1" placeholder="Inserire il numero di giorni lavorativi"></div>
            </div>
            <div class="row" id="standard-row">
                <div class="col text-start" style="width: auto;"><strong class="text-start" style="font-size: 20px;margin-bottom: 10px;">Ore giornaliere di lavoro</strong><input class="placeholder" type="number" min="1" max="8" id="inputs" required="" name="ore" min="1" placeholder="Inserire il numero di ore lavorative giornaliere"></div>
            </div>
            <div class="row" id="standard-row">
                <div class="col text-start" style="width: auto;"><strong class="text-start" style="font-size: 20px;margin-bottom: 10px;">Compenso orario</strong><input class="placeholder" type="number" id="inputs" required="" name="compenso" min="1" placeholder="Inserire il guadagno ad ora"></div>
            </div>
            <div class="row text-center" style="margin: auto;">
                <div class="col" style="width: auto;"><button name="submit" class="btn btn-primary font-monospace border rounded-pill border-5 shadow" type="submit" id="calcola">Calcola</button></div>
            </div>
            <?php
                if(isset($_POST["submit"]))
                {
                    $giorni = $_POST["giorni"];
                    $ore = (Float)$_POST["ore"];
                    $compenso = (Float)$_POST["compenso"];

                    $tot = $giorni * $ore * $compenso;
                    echo("<div class='row' id='standard-row'>
                            <div class='col text-center'><p class='text-center' style='font-size: 20px;'>Guadagnerai <strong>$tot&euro;</strong> lavorando $giorni giorni al compenso di $compenso&euro;/h</p></div>
                    </div>");
                }
            ?>
        </div>
    </form>
    <script src="../../Frontend/CSS/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>