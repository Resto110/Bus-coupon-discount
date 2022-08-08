<!DOCTYPE html>
<html>

<head>
    <title>Ottieni il tuo cupon</title>
    <link type="text/css" rel="stylesheet" href='css/stylesheet.css'>
</head>

<body>
    <img src="img/logo_TPER_0.png" id="logo">

    <div class="rectangle"></div>

    <div class="Principal header and confirmation button">
        <h1 id="mainHeader">Verifica la tua Et&#224</h1>
    </div>

    <div class="userForm">
        <form action="index.php" method="GET" id="form">

            <div class="formFields">
                <label for="username" id="NameLabel">Inserisci il tuo nome</label>
                <br>
                <input type="text" name="username" placeholder="Il tuo nome" id="username">
                <br>
                <br>
                <label for="birth" id="birthLabel">Inserisci la tua età</label>
                <br>
                <input type="number" name="age" id="age" min="1" max="100">
            </div>

            <input type="submit" id="btn" onclick="check()">
        </form>
    </div>



    <script type="text/javascript" src='js/script.js'></script>



    <?php
    if (isset($_GET['username'])) {

        echo $_GET['username'];
    }

    if (isset($_GET['age'])) {

        echo $_GET['age'];
    }

    ?>

</body>

</html>