<?php
$svoris = $_POST['svoris'];
$ugis = $_POST['ugis'];
$ugisMetrais = $ugis / 100;
$rezult = round($svoris / pow($ugisMetrais, 2), 2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>KMI indeksas</title>
</head>

<body class="bg-dark bg-opacity-10">

    <div class="container-fluid col-6 bg-primary bg-opacity-10 mt-5">
        <h3 class="text-center mb-5 pt-3">KMI rezultatas</h3>
        <table class="table table-bordered border border-dark w-25 text-center">
            <tbody class="col-2">
                <tr>
                    <td class="col-2">
                        <p class="fs-5 fw-bold text-dark p-1 mb-0">Jūsų KMI indeksas: </p><span class="fs-3 text-primary align-middle fw-bold text-danger">
                            <?php
                            if ($rezult > '25.0') {
                                echo ($rezult);
                            }
                            ?>
                        </span>
                        <span class="fs-3 text-primary align-middle fw-bold text-warning">
                            <?php
                            if ($rezult < '18.5') {
                                echo ($rezult);
                            }
                            ?>
                        </span>
                        <span class="fs-3 text-primary align-middle fw-bold text-success">
                            <?php
                            if ($rezult > '18.5' && $rezult < '25.0') {
                                echo ($rezult);
                            }
                            ?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered border border-dark">
            <thead class="text-center">
                <tr>
                    <th colspan="12" class="text-uppercase bg-secondary bg-gradient text-white">Standartiniai duomenys</th>
                </tr>
                <tr>
                    <th class="col-2 p-2">Nepakankamas svoris<br> (KMI < 18.5)</th>
                    <th class="col-2 p-2">Normalus svoris<br> (KMI 18.5 - 25.0)</th>
                    <th class="col-2 p-2">Viršsvoris<br> (KMI > 25.0)</th>
                </tr>
                <tr>
                    <th colspan="12" class="text-uppercase bg-primary text-black bg-opacity-25 border border-primary">gauti rezultatai</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <tr class="text-center">
                    <td class="col-4 text-warning fw-bold p-3" id="mazas">
                        <?php
                        if ($rezult < '18.5') {
                            echo ("KMI - $rezult<br> (Per mažas svoris)");
                        } else {
                            echo ("---//---");
                        }
                        ?>
                    </td>
                    <td class="col-4 text-success fw-bold p-3" id="normalus">
                        <?php if ($rezult > '18.5' && $rezult < '25.0') {
                            echo ("KMI - $rezult<br> (Normalus svoris)");
                        } else {
                            echo ("---//---");
                        }
                        ?>
                    </td>
                    <td class="col-4 text-danger fw-bold p-3" id="didelis">
                        <?php if ($rezult > '25.0') {
                            echo ("KMI - $rezult<br> (Per didelis svoris)");
                        } else {
                            echo ("---//---");
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class=" container-fluid text-info fw-bolder fs-6 ps-0">
            <p class="mb-0">Įvestas svoris: <?php echo $svoris; ?> kg.</p>
            <p>Įvestas ūgis: <?php echo $ugisMetrais; ?> m.</p>
        </div>
        <div class="button ms-0 mb-3">
            <a href="in.php" class="btn btn-primary mt-3 mb-3">Skaičiuoti iš naujo</a>
        </div>
    </div>
</body>

</html>