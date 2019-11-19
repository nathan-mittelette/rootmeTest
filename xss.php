<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSS</title>
</head>

<body>
    <form>
    <textarea rows="5" id="xss" name="xss">

    </textarea>
</form>

    <div class="content">
    <?php
        if(isset($_GET['xss'])) {
            echo "Content : </br>";
            echo $_GET['xss'];
        }
    ?>
    </div>
</body>

</html>