/* MILESTONE 1: scriviamo tutto(logica e layout) in un unico file*/ controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.

se è corretta stampare un messaggio di success in un alert di bootstrap, altrimenti (sempre in un alert di bootstrap) mostrare un messaggio di errore 
Milestone 2: verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/

<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>
<body>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="GET" action="">
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Indirizzo email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" placeholder="nome@example.com">
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
        if (valida_email($email)) {
            echo "<div class='alert alert-success mt-3' role='alert'>Email valida: $email</div>";
        } else {
            echo "<div class='alert alert-danger mt-3' role='alert'>Email non valida</div>";
        }
    }
    ?>
</main>

<!-- Bootstrap JavaScript Libraries -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>

</body>
</html>
