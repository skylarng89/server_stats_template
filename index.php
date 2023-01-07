<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/main.css">

    <title>Server Stats</title>
</head>

<body>

    <div id="wrapper">
        <h1 id="pageTitle">AWS Server Information</h1>
        <div class="twoColRow">
            <div class="serverStats">
                <img src="./assets/server.png" alt="" class="icon">
                <h2 class="statsValue">
                    <?php $serverName = gethostname();
                    echo "$serverName"; ?>
                </h2>
            </div>
            <div class="serverStats">
                <img src="./assets/clock.png" alt="" class="icon">
		<h2 class="statsValue">

                    <?php
                    date_default_timezone_set('Africa/Lagos');
                    echo date("F d, Y h:i:s A e", time());
                    ?>
                    <!--
                    <?php $serverTime = date_default_timezone_get();
		    echo "$serverTime"; ?>
		    -->
                </h2>
            </div>
        </div>
        <p id="copyright">&copy; <?php echo date("Y"); ?> &bull; All Rights Reserved.</p>
    </div>

</body>

</html>
