<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zalando+Sans+Expanded:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
        <title>About - LinuxifyMC</title>
    </head>
    <body>
        <div class="container">
            <?php 
                include './template/topbar.html'; 
            ?>
            <h1>Hello, we make a Minecraft Paper plugin called "LinuxifyMC". Check it out <a href="https://github.com/LinuxifyMC/LinuxifyMC">here</a>.</h1>
            <h2>Socials:</h2>
            <span class="sociallogo" role="img" id="github-logo" aria-label="GitHub Logo"
                style="background-color:#ffffff;
                     -webkit-mask: url('./img/github.svg') no-repeat center/contain;
                     mask: url('./img/github.svg') no-repeat center/contain;">
            </span>
            <span class="sociallogo" id="twitter-logo" role="img" aria-label="Twitter Logo"
                style="background-color:#1DA1F2;
                     -webkit-mask: url('./img/twitter.svg') no-repeat center/contain;
                     mask: url('./img/twitter.svg') no-repeat center/contain;">
            </span>
        </div>
        <script src="./js/main.js"></script>
    </body>
</html>