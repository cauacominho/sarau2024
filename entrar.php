<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CONFIG - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT-AWESOME CONFIG - ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MATERIALS GOOGLE CONFIG - ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- CSS CONFIG  -->
    <link rel="stylesheet" href="./src/css/global.css">

    <title>Entrar</title>
</head>

<body style="height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center text-center" style="height: 100%;">
        <div>
            <h5>Coloque o codigo de acesso para entrar</h5>
            <form class="mb-3" action="./src/backend/confirm-code.php" method="post">
                <input type="text" class="form-control my-3" name="codeAccess" id="codeAccess" placeholder="Código de acesso" required>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
            <div id="alertaPass" class="alert alert-warning" role="alert" style="display: none;">
                Incorrect code.
            </div>
        </div>
    </div>

    <script src="./src/js/cellular-adjustment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        document.addEventListener('DOMContentLoaded', function() {

            const pass = getQueryParam('pw');
            if (pass === 'error') {
                const alertaElementPass = document.getElementById('alertaPass');
                if (alertaElementPass) {
                    alertaElementPass.style.display = 'block';
                }
            }
        });
    </script>

</body>

</html>