<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mvc</title>
</head>
<style>
    div {
        padding: 20px;
    }

    #header,
    #footer {
        background-color: yellow;
    }
</style>

<body>
    <p>
    <div id="header">

    </div>
    <div id="content">
        <?php
        require_once "./mvc/views/pages/" . $data['Pages'] . ".php"
        ?>
    </div>
    </p>
</body>

</html>