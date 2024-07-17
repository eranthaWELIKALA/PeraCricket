<?php
ob_start();
session_start();

// Ensure the session variable is set
if (!isset($_SESSION['player'])) {
	header("location:player");
}

// Import database connection
require 'connect.php';

// Function to fetch player data from specified table
function fetchPlayerData($connect, $table, $regNo)
{
    $query = "SELECT * FROM $table WHERE Reg_no='$regNo'";
    $result = mysqli_query($connect, $query);
    return mysqli_fetch_assoc($result);
}

// Fetch all player data at once
$player_information = fetchPlayerData($connect, 'player_informations', $_SESSION['player']);
$player_batting_statistics = fetchPlayerData($connect, 'batting_statistics', $_SESSION['player']);
$player_bowling_statistics = fetchPlayerData($connect, 'bowling_statistics', $_SESSION['player']);
$player_fielding_statistics = fetchPlayerData($connect, 'fielding_statistics', $_SESSION['player']);
$player_t20batting_statistics = fetchPlayerData($connect, 't20batting_statistics', $_SESSION['player']);
$player_t20bowling_statistics = fetchPlayerData($connect, 't20bowling_statistics', $_SESSION['player']);
$player_2daybatting_statistics = fetchPlayerData($connect, '2daybatting_statistics', $_SESSION['player']);
$player_2daybowling_statistics = fetchPlayerData($connect, '2daybowling_statistics', $_SESSION['player']);
$player_interunibatting_statistics = fetchPlayerData($connect, 'interunibatting_statistics', $_SESSION['player']);
$player_interunibowling_statistics = fetchPlayerData($connect, 'interunibowling_statistics', $_SESSION['player']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $player_information['Firstname'] . " " . $player_information['Lastname']; ?></title>
    <link rel="icon" href="logo.jpg">
	<link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= "<b>" . $player_information['Firstname'] . "</b>"; ?></a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#details0">Player Details</a></li>
                        <li><a href="#details1">Main Career</a></li>
                        <li><a href="#details2">T-20 Career</a></li>
                        <li><a href="#details3">2 Day Career</a></li>
                        <li><a href="#details4">Inter University Tournament</a></li>
                        <li><a href="player"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Player Details Section -->
    <div id="details0" class="container-fluid">
        <h1>Player Details</h1><br>
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-xs-4">Firstname</div>
                <div class="col-md-1 col-xs-4">
                    <h4><?= $player_information['Firstname'] ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Lastname</div>
                <div class="col-md-1 col-xs-4">
                    <h4><?= $player_information['Lastname'] ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Reg no.</div>
                <div class="col-md-1 col-xs-4">
                    <h5><?= $player_information['Reg_no'] ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4"></div>
                <div class="col-md-2 col-xs-4">
                    <h4><?= $player_information['Batting_Hand'] ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4"></div>
                <div class="col-md-2 col-xs-4">
                    <h4><?= $player_information['Bowling_Type'] ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if ($player_information['Pics'] && file_exists($player_information['Pics'])): ?>
                        <img src="<?= $player_information['Pics'] ?>" style="height:150px;width:150px">
                    <?php else: ?>
                        <img src="logo.jpg" style="height:150px;width:150px">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Career Details Section -->
    <div id="details1" class="container-fluid">
        <h1>Main Career</h1>
        <div class="container">
            <!-- Batting Performances -->
            <div class="row">
                <h3>Batting Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Matches</div>
                <div class="col-md-1 col-xs-4"><?= $player_batting_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Runs</div>
                <div class="col-md-1 col-xs-4"><?= $player_batting_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Highest</div>
                <div class="col-md-1 col-xs-4"><?= $player_batting_statistics['Most'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Average</div>
                <div class="col-md-1 col-xs-4"><?= $player_batting_statistics['Average'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Hundreds</div>
                <div class="col-md-1 col-xs-4"><?= $player_batting_statistics['Hundreds'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Fifties</div>
                <div class="col-md-1 col-xs-4"><?= $player_batting_statistics['Fifties'] ?></div>
            </div>

            <!-- Runs Scored According To The Batting Position -->
            <div class="row" align="left">
                <h4>Runs Scored According To The Batting Position</h4>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 11; $i++): ?>
                    <div class="col-md-1 col-xs-2" align="center">No. <?= $i ?></div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <?php foreach (["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven"] as $row): ?>
                    <div class="col-md-1 col-xs-2"><?= $player_batting_statistics[$row] ?></div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3>Bowling Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Matches</div>
                <div class="col-md-1 col-xs-6"><?= $player_bowling_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Overs</div>
                <div class="col-md-1 col-xs-6"><?= $player_bowling_statistics['Overs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Wickets</div>
                <div class="col-md-1 col-xs-6"><?= $player_bowling_statistics['Wickets'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Runs Considered</div>
                <div class="col-md-1 col-xs-6"><?= $player_bowling_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Average</div>
                <div class="col-md-1 col-xs-6"><?= $player_bowling_statistics['Average'] ?></div>
            </div>
        </div>
    </div>

    <!-- T-20 Career Details Section -->
    <div id="details2" class="container-fluid">
        <h1>T-20 Career</h1>
        <div class="container">
            <!-- T-20 Batting Performances -->
            <div class="row">
                <h3>T-20 Batting Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Matches</div>
                <div class="col-md-1 col-xs-4"><?= $player_t20batting_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Runs</div>
                <div class="col-md-1 col-xs-4"><?= $player_t20batting_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Highest</div>
                <div class="col-md-1 col-xs-4"><?= $player_t20batting_statistics['Most'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Average</div>
                <div class="col-md-1 col-xs-4"><?= $player_t20batting_statistics['Average'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Hundreds</div>
                <div class="col-md-1 col-xs-4"><?= $player_t20batting_statistics['Hundreds'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Fifties</div>
                <div class="col-md-1 col-xs-4"><?= $player_t20batting_statistics['Fifties'] ?></div>
            </div>

            <!-- Runs Scored According To The Batting Position -->
            <div class="row" align="left">
                <h4>Runs Scored According To The Batting Position</h4>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 11; $i++): ?>
                    <div class="col-md-1 col-xs-2" align="center">No. <?= $i ?></div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <?php foreach (["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven"] as $row): ?>
                    <div class="col-md-1 col-xs-2"><?= $player_t20batting_statistics[$row] ?></div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3>Bowling Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Matches</div>
                <div class="col-md-1 col-xs-6"><?= $player_t20bowling_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Overs</div>
                <div class="col-md-1 col-xs-6"><?= $player_t20bowling_statistics['Overs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Wickets</div>
                <div class="col-md-1 col-xs-6"><?= $player_t20bowling_statistics['Wickets'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Runs Considered</div>
                <div class="col-md-1 col-xs-6"><?= $player_t20bowling_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Average</div>
                <div class="col-md-1 col-xs-6"><?= $player_t20bowling_statistics['Average'] ?></div>
            </div>
        </div>
    </div>

    <!-- 2 Day Career Details Section -->
    <div id="details3" class="container-fluid">
        <h1>2 Day Career</h1>
        <div class="container">
            <!-- 2 Day Batting Performances -->
            <div class="row">
                <h3>2 Day Batting Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Matches</div>
                <div class="col-md-1 col-xs-4"><?= $player_2daybatting_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Runs</div>
                <div class="col-md-1 col-xs-4"><?= $player_2daybatting_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Highest</div>
                <div class="col-md-1 col-xs-4"><?= $player_2daybatting_statistics['Most'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Average</div>
                <div class="col-md-1 col-xs-4"><?= $player_2daybatting_statistics['Average'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Hundreds</div>
                <div class="col-md-1 col-xs-4"><?= $player_2daybatting_statistics['Hundreds'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Fifties</div>
                <div class="col-md-1 col-xs-4"><?= $player_2daybatting_statistics['Fifties'] ?></div>
            </div>

            <!-- Runs Scored According To The Batting Position -->
            <div class="row" align="left">
                <h4>Runs Scored According To The Batting Position</h4>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 11; $i++): ?>
                    <div class="col-md-1 col-xs-2" align="center">No. <?= $i ?></div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <?php foreach (["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven"] as $row): ?>
                    <div class="col-md-1 col-xs-2"><?= $player_2daybatting_statistics[$row] ?></div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3>Bowling Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Matches</div>
                <div class="col-md-1 col-xs-6"><?= $player_2daybowling_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Overs</div>
                <div class="col-md-1 col-xs-6"><?= $player_2daybowling_statistics['Overs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Wickets</div>
                <div class="col-md-1 col-xs-6"><?= $player_2daybowling_statistics['Wickets'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Runs Considered</div>
                <div class="col-md-1 col-xs-6"><?= $player_2daybowling_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Average</div>
                <div class="col-md-1 col-xs-6"><?= $player_2daybowling_statistics['Average'] ?></div>
            </div>
        </div>
    </div>

    <!-- Inter University Tournament Details Section -->
    <div id="details4" class="container-fluid">
        <h1>Inter University Tournament</h1>
        <div class="container">
            <!-- Inter University Batting Performances -->
            <div class="row">
                <h3>Inter University Batting Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Matches</div>
                <div class="col-md-1 col-xs-4"><?= $player_interunibatting_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Runs</div>
                <div class="col-md-1 col-xs-4"><?= $player_interunibatting_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Highest</div>
                <div class="col-md-1 col-xs-4"><?= $player_interunibatting_statistics['Most'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Average</div>
                <div class="col-md-1 col-xs-4"><?= $player_interunibatting_statistics['Average'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Hundreds</div>
                <div class="col-md-1 col-xs-4"><?= $player_interunibatting_statistics['Hundreds'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-4">Fifties</div>
                <div class="col-md-1 col-xs-4"><?= $player_interunibatting_statistics['Fifties'] ?></div>
            </div>

            <!-- Runs Scored According To The Batting Position -->
            <div class="row" align="left">
                <h4>Runs Scored According To The Batting Position</h4>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 11; $i++): ?>
                    <div class="col-md-1 col-xs-2" align="center">No. <?= $i ?></div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <?php foreach (["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven"] as $row): ?>
                    <div class="col-md-1 col-xs-2"><?= $player_interunibatting_statistics[$row] ?></div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3>Bowling Performances</h3>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Matches</div>
                <div class="col-md-1 col-xs-6"><?= $player_interunibowling_statistics['Matches'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Overs</div>
                <div class="col-md-1 col-xs-6"><?= $player_interunibowling_statistics['Overs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Wickets</div>
                <div class="col-md-1 col-xs-6"><?= $player_interunibowling_statistics['Wickets'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Runs Considered</div>
                <div class="col-md-1 col-xs-6"><?= $player_interunibowling_statistics['Runs'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">Average</div>
                <div class="col-md-1 col-xs-6"><?= $player_interunibowling_statistics['Average'] ?></div>
            </div>
        </div>
    </div>

</body>

</html>

<?php ob_end_flush(); ?>