<?php
  // Variables and constants initialization
  $title = 'PHP Dice Game';
  $subtitle = 'Roll of the dice - Simulator';
  $player_name = 'Patrizia'; // any name (string)
  $number_of_games = 5; // any integer
  $min = 1;
  $max = 6;
  $player_score = 0;
  $pc_score = 0;
  $message = '';
  $counter = 0;
?>

<!-- ............................. HTML ............................. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Dice Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <div class="row">
          <h1>
            <?php echo $title; ?>
          </h1>
        </div>
        <div class="row">
          <h2>
            <?php echo $subtitle; ?>
          </h2>
        </div>
        <div class="row">
          <!-- Printing data -->
          <div id="data-info">
            <h3>Data Information</h3>
            <p>
              Player one is
              <?php
                echo $player_name . '.';
              ?>
            </p>
            <p>
              The second player is the computer.
            </p>
            <p>
              You are going to play
              <?php
                echo $number_of_games . ' games.';
              ?>
            </p>
          </div>
        </div>
        <div class="row">
          <!-- Results -->
          <div id="results">
            <h3>Results</h3>
            <div class="message">
              <?php
                // ************* Dice Game *************
                for ($i=0; $i < $number_of_games; $i++) {
                  // Dice roll
                  $player_score = round(rand($min, $max), 0);
                  $pc_score = round(rand($min, $max), 0);
                  $match_number = $i + 1;
                  if($player_score > $pc_score) {
                    // Player wins
                    $message = 'You won! You scored ' . $player_score . ' and the computer scored ' . $pc_score . '.';
                    $counter += 1;
              ?>
              <p>
                <?php
                  echo 'Match number ' . $match_number;
                ?>
              </p>
              <p>
                <?php
                  echo $message;
                ?>
              </p>
              <?php
                  } else if($player_score < $pc_score) {
                    // Computer wins
                    $message = 'You lose! You scored ' . $player_score . ' and the computer scored ' . $pc_score . '.';
              ?>
              <p>
                <?php
                  echo 'Match number ' . $match_number;
                ?>
              </p>
              <p>
                <?php
                  echo $message;
                ?>
              </p>
              <?php
                  } else {
                    // Tie (pareggio)
                    $message = 'There are no winners. You both scored ' + $player_score + '!';
              ?>
              <p>
                <?php
                  echo 'Match number ' . $match_number;
                ?>
              </p>
              <p>
                <?php
                  echo $message;
                ?>
              </p>
              <?php
                  }
                }
              ?>
            </div>
            <div class="results-box">
              <p>
                <span>
                  Number of wins:
                </span>
                you won
                <?php
                  echo $counter . ' times.';
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
