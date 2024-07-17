<?php
ob_start();
session_start();

require 'connect.php';

// Retrieve data for Team A
$retrieve_query = "SELECT * FROM `home_matches_scorecarda` WHERE `match_no` = '" . $_POST['prev1'] . "'";
$is_retrieve_query_run = mysqli_query($connect, $retrieve_query);
$retrieve_query_execute = mysqli_fetch_assoc($is_retrieve_query_run);

// Retrieve data for Team B
$retrieve_query2 = "SELECT * FROM `home_matches_scorecardb` WHERE `match_no` = '" . $_POST['prev1'] . "'";
$is_retrieve_query2_run = mysqli_query($connect, $retrieve_query2);
$retrieve_query2_execute = mysqli_fetch_assoc($is_retrieve_query2_run);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match Details</title>
    <link type="image/jpg" rel="icon" href="logo.jpg" />
    <link rel="stylesheet" href="./css/prev_home_match.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Pera Cricket</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="view"><span class="glyphicon glyphicon-plus"></span> View Match Details</a></li>
                        <li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
                        <li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
                        <li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br><br>

    <!-- Display match result -->
    <?php
    if (isset($retrieve_query_execute['decision'])) {
        if ($retrieve_query_execute['decision'] == "AWon") {
            echo "<br><h3>UOP Team A Won</h3><br>";
        } else if ($retrieve_query_execute['decision'] == "BWon") {
            echo "<br><h3>UOP Team B Won</h3><br>";
        } else if ($retrieve_query_execute['decision'] == "Tie") {
            echo "<br><h3>It's a tie</h3><br>";
        } else if ($retrieve_query_execute['decision'] == "Drawn") {
            echo "<br><h3>It's Drawn</h3><br>";
        }
    }
    ?>
    <br>
    <div class='row'>
        <div class='col-md-4' align='center'>
            <label><?php echo $retrieve_query_execute['date']; ?></label>
        </div>
        <div class='col-md-4' align='center'></div>
        <div class='col-md-4' align='center'>
            <label>Match No. : <?php echo $retrieve_query_execute['match_no']; ?></label>
        </div>
    </div>
    <br>

    <div class='container'>
        <div class='col-md-6'>
            <!-- Team A Batting Statistics -->
            <h3>Team A</h3>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h3>Team A Batting Statistics</h3>
                </div>
            </div>

            <?php
            for ($itr = 1; $itr <= $retrieve_query_execute["batsmenA"]; $itr++) {
                // Convert 'howout' codes to meaningful descriptions
                $howout = $retrieve_query_execute['howout' . $itr . 'a'];
                switch ($howout) {
                    case 'dnb':
                        $howout = "Did Not Bat";
                        break;
                    case 'no':
                        $howout = "Not Out";
                        break;
                    case 'b':
                        $howout = "Bowled";
                        break;
                    case 'l':
                        $howout = "LBW";
                        break;
                    case 'c':
                        $howout = "Caught";
                        break;
                    case 'ro':
                        $howout = "Run Out";
                        break;
                    case 's':
                        $howout = "Stumped";
                        break;
                    case 'ht':
                        $howout = "Hit Wicket";
                        break;
                    default:
                        break;
                }
                echo "<div class='row'>
                        <div class='col-md-2'></div>
                        <div class='col-md-4'>" . $retrieve_query_execute['name' . $itr . 'a'] . "</div>
                        <div class='col-md-3'>" . $howout . "</div>
                        <div class='col-md-2' align='right'>" . $retrieve_query_execute['marks' . $itr . 'a'] . "</div>
                        <div class='col-md-1'></div>
                    </div>";
            }
            ?>
            <br>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-4'>Extras</div>
                <div class='col-md-2'></div>
                <div class='col-md-2' align='right'><?php echo $retrieve_query_execute['extrasA']; ?></div>
                <div class='col-md-2'></div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-4'>Total</div>
                <div class='col-md-2'></div>
                <div class='col-md-2' align='right'><?php echo $retrieve_query_execute['totalA']; ?></div>
                <div class='col-md-2'></div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>UOP Team A Scored <?php echo $retrieve_query_execute['totalA']; ?> for
                        <?php echo $retrieve_query_execute['wicketsA']; ?>
                    </h4>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>In <?php echo $retrieve_query2_execute['opoversB']; ?> Overs</h4>
                </div>
            </div>

            <!-- Team B Bowling Statistics -->
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h3>Team B Bowling Statistics</h3>
                </div>
            </div>
            <?php
            for ($itr2 = 1; $itr2 <= $retrieve_query2_execute["bowlersB"]; $itr2++) {
                echo "<div class='row'>
                        <div class='col-md-2'></div>
                        <div class='col-md-3'>" . $retrieve_query2_execute['b' . $itr2 . 'b'] . "</div>
                        <div class='col-md-2'>" . $retrieve_query2_execute['bovers' . $itr2 . 'b'] . "</div>
                        <div class='col-md-1'>" . $retrieve_query2_execute['bruns' . $itr2 . 'b'] . "</div>
                        <div class='col-md-1'>" . $retrieve_query2_execute['bextras' . $itr2 . 'b'] . "</div>
                        <div class='col-md-1'>" . $retrieve_query2_execute['bwickets' . $itr2 . 'b'] . "</div>
                    </div>";
            }
            ?>
        </div>

        <div class='col-md-6'>
            <!-- Team B Batting Statistics -->
            <h3>Team B</h3>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h3>Team B Batting Statistics</h3>
                </div>
            </div>

            <?php
            for ($itr = 1; $itr <= $retrieve_query2_execute["batsmenB"]; $itr++) {
                // Convert 'howout' codes to meaningful descriptions
                $howout = $retrieve_query2_execute['howout' . $itr . 'b'];
                switch ($howout) {
                    case 'dnb':
                        $howout = "Did Not Bat";
                        break;
                    case 'no':
                        $howout = "Not Out";
                        break;
                    case 'b':
                        $howout = "Bowled";
                        break;
                    case 'l':
                        $howout = "LBW";
                        break;
                    case 'c':
                        $howout = "Caught";
                        break;
                    case 'ro':
                        $howout = "Run Out";
                        break;
                    case 's':
                        $howout = "Stumped";
                        break;
                    case 'ht':
                        $howout = "Hit Wicket";
                        break;
                    default:
                        break;
                }
                echo "<div class='row'>
                                    <div class='col-md-2'></div>
                                    <div class='col-md-4'>" . $retrieve_query2_execute['name' . $itr . 'b'] . "</div>
                                    <div class='col-md-3'>" . $howout . "</div>
                                    <div class='col-md-1' align='right'>" . $retrieve_query2_execute['marks' . $itr . 'b'] . "</div>
                                    <div class='col-md-2'></div>
                                </div>";
            }
            ?>
            <br>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-4'>Extras</div>
                <div class='col-md-2'></div>
                <div class='col-md-2' align='right'><?php echo $retrieve_query2_execute['extrasB']; ?></div>
                <div class='col-md-2'></div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-4'>Total</div>
                <div class='col-md-2'></div>
                <div class='col-md-2' align='right'><?php echo $retrieve_query2_execute['totalB']; ?></div>
                <div class='col-md-2'></div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>UOP Team B Scored <?php echo $retrieve_query2_execute['totalB']; ?> for
                        <?php echo $retrieve_query2_execute['wicketsB']; ?>
                    </h4>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>In <?php echo $retrieve_query_execute['opoversA']; ?> Overs</h4>
                </div>
            </div>

            <!-- Team A Bowling Statistics -->
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h3>Team A Bowling Statistics</h3>
                </div>
            </div>
            <?php
            for ($itr2 = 1; $itr2 <= $retrieve_query_execute["bowlersA"]; $itr2++) {
                echo "<div class='row'>
                    <div class='col-md-2'></div>
                    <div class='col-md-3'>" . $retrieve_query_execute['b' . $itr2 . 'a'] . "</div>
                    <div class='col-md-2'>" . $retrieve_query_execute['bovers' . $itr2 . 'a'] . "</div>
                    <div class='col-md-1'>" . $retrieve_query_execute['bruns' . $itr2 . 'a'] . "</div>
                    <div class='col-md-1'>" . $retrieve_query_execute['bextras' . $itr2 . 'a'] . "</div>
                    <div class='col-md-1'>" . $retrieve_query_execute['bwickets' . $itr2 . 'a'] . "</div>
                </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>