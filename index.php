<?php
/*!
 * Sight Words Match Game
 * https://github.com/rf3Studios/memgame-sight-words
 *
 * Copyright 2014 Rich Friedel
 * Released under the MIT license
 */

// The number of rows in our grid
const GRID_ROWS = 4;
// The number of columns in our grid
const GRID_COLS = 4;
// Version
const VERSION_CODE = "0.1.0";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style_reset.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="application/javascript"></script>
    <script src="js/jquery.cookie.js" type="application/javascript"></script>
    <script src="js/game.js" type="application/javascript"></script>

    <title>rf3studios Sight Word Match Game</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Sight Words Match Game For Kindergarten">
    <meta name="author" content="Rich Friedel">
</head>
<body>
    <div id="container">
        <div id="header">Match The Sight Words</div>
        <div id="score-container">
            <p id="score-current">Current Attempts: <span class="score-nums">0</span></p>

            <p id="score-best">Your Best: <span class="score-nums">0</span></p>
        </div>
        <?php
        // The number of total cards we'll need for the grid
        $numberOfCards = GRID_ROWS * GRID_COLS;

        // Temp card count
        $tempCardNum = 1;

        // Generate rows
        for ($i = 0; $i < (GRID_ROWS); $i++) {
            echo "<div class=\"row-wrapper\">\r\n";

            // Generate cards
            for ($j = 0; $j < GRID_COLS; $j++) {
                echo "    <div id=\"card-" . $tempCardNum . "\" class=\"flip-container\" ontouchstart=\"this.classList.toggle('hover');\">\r\n";
                echo "        <div class=\"flipper\">\r\n";
                echo "            <div class=\"front\">\r\n";
                echo "                <!-- front content -->\r\n";
                echo "            </div>\r\n";
                echo "            <div class=\"back\">\r\n";
                echo "                <!-- back content -->\r\n";
                echo "                <span class=\"card-text\"></span>\r\n";
                echo "            </div>\r\n";
                echo "        </div>\r\n";
                echo "    </div>\r\n";

                // Increment card count
                $tempCardNum++;
            }

            echo "</div>\r\n";
        }
        ?>
    </div>
    <div id="footer">
        <p><strong>Sight Words Memory Game</strong> &copy;2014 <a href="http://rf3studios.com" target="_blank"
                                                                       title="rf3Studios.com">rf3Studios.com</a> under
            <a href="LICENSE" target="_blank" title="MIT License">MIT License</a> using
            <a href="http://jquery.com/" target="_blank" title="Uses jQuery">jQuery</a>
        </p>

        <p>Source Code Available On <a href="https://github.com/rf3Studios/memgame-sight-words" target="_blank"
                                       title="GitHub">GitHub</a></p>

        <p><a href="https://github.com/rf3Studios/memgame-sight-words/releases/tag/v<?php echo VERSION_CODE; ?>" target="_blank"
              title="Version Release on GitHub">v<?php echo VERSION_CODE; ?></a></p>
    </div>

    <script>
        $(document).ready(function () {
            startGame();
        });
    </script>
</body>
</html>