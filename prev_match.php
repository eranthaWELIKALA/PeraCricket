<?php
ob_start();
session_start();
require 'connect.php';

if ($_POST['prev'] == "") {
    header("location:view");
}

$retrieve_query = "SELECT * FROM `matches_scorecard` WHERE `match_no` = '" . $_POST['prev'] . "'";
$retrieve_query2 = "SELECT * FROM `matches_directory` WHERE `match_no` = '" . $_POST['prev'] . "'";
$is_retrieve_query_run = mysqli_query($connect, $retrieve_query);
$is_retrieve_query2_run = mysqli_query($connect, $retrieve_query2);
$retrieve_query_execute = mysqli_fetch_assoc($is_retrieve_query_run);
$retrieve_query2_execute = mysqli_fetch_assoc($is_retrieve_query2_run);

$matchData = [
    'scorecard' => $retrieve_query_execute,
    'directory' => $retrieve_query2_execute
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Match no : " . $retrieve_query_execute['match_no']; ?></title>
    <link type="image/jpg" rel="icon" href="logo.jpg" />
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #player {
            background-color: ;
        }
    </style>
    <script>
        const matchData = <?php echo json_encode($matchData); ?>;
        console.log("Match Data:", matchData);
    </script>
</head>

<body>
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

    <div class="container">
        <br>
        <a href='view'>Back</a>
        <div class='row'>
            <br>
            <div class='col-md-4' align='center'><label><?php echo $retrieve_query2_execute['Date']; ?></label></div>
            <div class='col-md-4' align='center'><label>UOP Vs
                    <?php echo $retrieve_query2_execute['Opponent']; ?></label></div>
            <div class='col-md-4' align='center'><label><?php echo $_POST['prev']; ?></label></div>
        </div>
        <div class='row'>
            <br>
            <div class='col-md-4' align='center'><label></label></div>
            <div class='col-md-4' align='center'><label>@ <?php echo $retrieve_query2_execute['Venue']; ?></label></div>
            <div class='col-md-4' align='center'><label><?php echo $retrieve_query2_execute['format']; ?> match</label>
            </div>
        </div>
        <div class='row'>
            <br>
            <div class='col-md-12' align='center'>
                <h3>Batting Statistics</h3>
            </div>
        </div>

        <?php
        for ($itr = 1; $itr < $retrieve_query_execute["batsmen"]; $itr++) {
            echo "<br><div class='container' id='player'>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-4'>" . $retrieve_query_execute['name' . $itr] . "</div>
                <div class='col-md-2'>" . $retrieve_query_execute['howout' . $itr] . "</div>
                <div class='col-md-2' align='right'>" . $retrieve_query_execute['marks' . $itr] . "</div>
                <div class='col-md-2'></div>
            </div>";
            if ($itr == $retrieve_query_execute["batsmen"] - 1) {
                echo "<br><div class='row'><div class='col-md-2'></div><div class='col-md-4'>Extras</div><div class='col-md-2'></div><div class='col-md-2' align='right'>" . $retrieve_query_execute['extras'] . "</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row'><div class='col-md-2'></div><div class='col-md-4'>Total</div><div class='col-md-2'></div><div class='col-md-2' align='right'>" . $retrieve_query_execute['total'] . "</div><div class='col-md-2'></div></div>";
            }
            echo "</div>";
        }
        ?>

        <br><br>
        <div class='container' id='player' align='center'>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>UOP Scored <?php echo $retrieve_query_execute['total']; ?> for
                        <?php echo $retrieve_query_execute['wickets']; ?>
                    </h4>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>In <?php echo $retrieve_query_execute['overs']; ?> Overs</h4>
                </div>
            </div>
        </div>

        <div class='row'>
            <br>
            <div class='col-md-12' align='center'>
                <h3>Bowling Statistics</h3>
            </div>
        </div>

        <?php
        for ($itr = 1; $itr < $retrieve_query_execute["bowlers"]; $itr++) {
            if ($retrieve_query_execute['howout' . $itr] == 'no') {
                $retrieve_query_execute['howout' . $itr] = "Did Not Bat";
            } else if ($retrieve_query_execute['howout' . $itr] == 'b') {
                $retrieve_query_execute['howout' . $itr] = "Not Out";
            }
            echo "<br><div class='container' id='player'>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-3'>" . $retrieve_query_execute['b' . $itr] . "</div>
                <div class='col-md-2'>" . $retrieve_query_execute['bovers' . $itr] . "</div>
                <div class='col-md-1'>" . $retrieve_query_execute['bruns' . $itr] . "</div>
                <div class='col-md-1'>" . $retrieve_query_execute['bextras' . $itr] . "</div>
                <div class='col-md-1'>" . $retrieve_query_execute['bwickets' . $itr] . "</div>
                <div class='col-md-2'></div>
            </div>";
            if ($itr == $retrieve_query_execute["bowlers"] - 1) {
                echo "<br><div class='row'><div class='col-md-2'></div><div class='col-md-4'>Extras</div><div class='col-md-2'></div><div class='col-md-2' align='right'>" . $retrieve_query_execute['opextras'] . "</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row'><div class='col-md-2'></div><div class='col-md-4'>Total</div><div class='col-md-2'></div><div class='col-md-2' align='right'>" . $retrieve_query_execute['optotal'] . "</div><div class='col-md-2'></div></div>";
            }
            echo "</div>";
        }
        ?>

        <br><br>
        <div class='container' id='player' align='center'>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>Opponent Scored <?php echo $retrieve_query_execute['optotal']; ?> for
                        <?php echo $retrieve_query_execute['opwickets']; ?>
                    </h4>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12' align='center'>
                    <h4>In <?php echo $retrieve_query_execute['opovers']; ?> Overs</h4>
                </div>
            </div>
        </div>

        <?php
        if (isset($retrieve_query2_execute['Decision'])) {
            if ($retrieve_query2_execute['Decision'] == "Won") {
                echo "<br><h3>UOP Won</h3><br>";
            } else if ($retrieve_query2_execute['Decision'] == "Lost") {
                echo "<br><h3>UOP Lost</h3><br>";
            } else if ($retrieve_query2_execute['Decision'] == "Tie") {
                echo "<br><h3>It's a tie</h3><br>";
            } else if ($retrieve_query2_execute['Decision'] == "Drawn") {
                echo "<br><h3>It's Drawn</h3><br>";
            }
        }
        ?>
    </div>
</body>

</html>