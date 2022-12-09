<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>KMI indeksas</title>
</head>

<body>
    <form action="out.php" method="POST">
        <div class="container-fluid w-25 bg-primary bg-opacity-10 ps-3 pe-3 pb-3 mt-5 text-center">
            <h4 class="mb-3 pt-5 text-center fs-5">ĮVESTI DUOMENIS Į LENTELĘ</h4>
            <div class="mb-3 text-center">
                <label for="Input" class="form-label text-center ">Įvesti svorį (kg)</label>
                <input type="text" class="form-control border border-dark" name="svoris" placeholder="Įvesti svorį (kg)" required value="">
            </div>
            <div class="mb-3 text-center">
                <label for="Input2" class="form-label">Įvesti ūgį (cm)</label>
                <input type="text" class="form-control border border-dark" name="ugis" placeholder="Įvesti ūgį (cm)" value="" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Skaičiuoti KMI</button>
        </div>
    </form>
</body>

</html>