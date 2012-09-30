<html>
<head>
    <title>The Amaizing Racing Game - Coming soon</title>
    <style type="text/css">
        body {
            margin: 0 auto;
            color: #fffefe;
            font-size: 23px;
            background: #373737;
            font-family: 'BankGothic';
            line-height: 32px;
            letter-spacing: 0.2em;
        }
        header {
            height: 196px;
            display: block;
            background: url(bg_holding.png) no-repeat top center #f4e324;
        }
        article {
            text-align: center;
            text-transform: uppercase;
            margin: 80px auto 10px auto;
            width: 1100px;
        }
        h1 {
            color: #f4e324;
            font-weight: normal;
            font-size: 55px;
        }
        article a {
            color: #f4e324;
        }
        .date {
            font-size: 40px;;
        }
    </style>
</head>
<body>
    <header> </header>
    <article>
        <?php
        $dateTime = new DateTime;
        echo '<p class="date">' . $dateTime->format('d/m/Y') . '</p>';
        ?>

        <h1>COMING SOON!</h1>

        <p>A new and exciting online reality style game. <br><br>

        once registered, create your profile and Avatar,
        then begin your race around the world. <br><br>

        complete eight 3 minute challenges in any 24 hour period
        and take your place on the leaderboard. <br>
        chat with other competitors and play instant challenges. <br><br>

        work your way up the leaderboard and use your winnings
        to buy new outfits for your avatar. <br><br>

        come back soon or
        <a href="mailto:info@theamazingracegame.com?subject=Add me to your mailing list&body=&Thanks!"
            title="Subscribe"">click here</a> to be added to our mailing list to receive updates and keep track of progress.</p>

    </article>
</body>
</html>