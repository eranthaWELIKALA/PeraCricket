<?php
ob_start();
require "connect.php";

// Function to execute a count query
function executeCountQuery($connect, $decision, $format)
{
    $stmt = $connect->prepare("SELECT COUNT(*) as count FROM matches_directory WHERE Decision=? AND format=?");
    $stmt->bind_param("ss", $decision, $format);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['count'];
}

// Fetch counts for 50-50 matches
$won_count_50 = executeCountQuery($connect, 'Won', '50-50');
$lost_count_50 = executeCountQuery($connect, 'Lost', '50-50');
$drawn_count_50 = executeCountQuery($connect, 'Drawn', '50-50');
$tie_count_50 = executeCountQuery($connect, 'Tie', '50-50');

// Fetch counts for T20 matches
$won_count_t20 = executeCountQuery($connect, 'Won', 'T20');
$lost_count_t20 = executeCountQuery($connect, 'Lost', 'T20');
$drawn_count_t20 = executeCountQuery($connect, 'Drawn', 'T20');
$tie_count_t20 = executeCountQuery($connect, 'Tie', 'T20');

// Function to fetch matches for datalist
function fetchMatches($connect, $table)
{
    $stmt = $connect->prepare("SELECT * FROM $table ORDER BY `match_no` DESC");
    $stmt->execute();
    $result = $stmt->get_result();
    $matches = [];
    while ($row = $result->fetch_assoc()) {
        $matches[] = $row;
    }
    return $matches;
}

// Fetch matches for both directories
$matches = fetchMatches($connect, 'matches_directory');
$matches_home = fetchMatches($connect, 'home_matches_scorecarda');

$connect->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Details</title>
    <link rel="icon" type="image/jpg" href="logo.jpg" />
    <link rel="stylesheet" href="./css/view.css">
	<link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawCharts);

        function drawChart(elementId, title, dataArray) {
            var data = google.visualization.arrayToDataTable(dataArray);
            var options = { title: title };
            var chart = new google.visualization.PieChart(document.getElementById(elementId));
            chart.draw(data, options);
        }

        function drawCharts() {
            drawChart('piechart', '50-50 Matches', [
                ['Results', 'Matches'],
                ['Won', <?php echo $won_count_50; ?>],
                ['Lost', <?php echo $lost_count_50; ?>],
                ['Drawn', <?php echo $drawn_count_50; ?>],
                ['Tie', <?php echo $tie_count_50; ?>]
            ]);

            drawChart('piechart1', 'T20 Matches', [
                ['Results', 'Matches'],
                ['Won', <?php echo $won_count_t20; ?>],
                ['Lost', <?php echo $lost_count_t20; ?>],
                ['Drawn', <?php echo $drawn_count_t20; ?>],
                ['Tie', <?php echo $tie_count_t20; ?>]
            ]);
        }
    </script>
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Pera Cricket</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="view"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
                    <li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
                    <li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
                    <li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="container mt-10 mb-5" id="one">
        <br><br>
        <div class="row">
            <div class="col-md-2 col-md-offset-1">Enter Match No:</div>
            <div class="col-md-4">
                <form action="prev_match" method="post">
                    <input type="text" class="form-control" name="prev" list="prev">
                    <datalist id="prev">
                        <?php foreach ($matches as $match): ?>
                            <option value="<?= $match['match_no'] ?>"><?= $match['Date'] ?> with <?= $match['Opponent'] ?>
                            </option>
                        <?php endforeach; ?>
                    </datalist>
            </div>
            <div class="col-md-2">
                <input class="form-control" type="submit" value="View Match">
            </div>
            </form>
        </div>
        <br><br>
        <div id="piechart" style="width: 50%; float: left;"></div>
        <div id="piechart1" style="width: 50%; float: right;"></div>
        <br><br>
        <div class="container mb-5">
            <h4>Recent Matches</h4>
            <div class="row">
                <div class="col-md-2">Match No</div>
                <div class="col-md-3">Date</div>
                <div class="col-md-3">Opponent</div>
                <div class="col-md-2">Format</div>
                <div class="col-md-2">Decision</div>
            </div>
            <?php foreach ($matches as $match): ?>
                <div class="row">
                    <div class="col-md-2"><?= $match['match_no'] ?></div>
                    <div class="col-md-3"><?= $match['Date'] ?></div>
                    <div class="col-md-3"><?= $match['Opponent'] ?></div>
                    <div class="col-md-2"><?= $match['format'] ?></div>
                    <div class="col-md-2"><?= $match['Decision'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container mb-5" id="one">
        <br><br>
        <h4 class="text-center">Home-Home Matches</h4>
        <div class="row">
            <div class="col-md-2 col-md-offset-1">Enter Match No:</div>
            <div class="col-md-4">
                <form action="prev_home_match" method="post">
                    <input type="text" class="form-control" name="prev1" list="prev1">
                    <datalist id="prev1">
                        <?php foreach ($matches_home as $match): ?>
                            <option value="<?= $match['match_no'] ?>"><?= $match['date'] ?>
                            </option>
                        <?php endforeach; ?>
                    </datalist>
            </div>
            <div class="col-md-2">
                <input class="form-control" type="submit" value="View Match">
            </div>
            </form>
        </div>
        <br><br>
        <div class="container mb-5">
            <h4>Recent Home Matches</h4>
            <div class="row">
                <div class="col-md-2">Match No</div>
                <div class="col-md-3">Date</div>
            </div>
            <?php foreach ($matches_home as $match): ?>
                <div class="row">
                    <div class="col-md-2"><?= $match['match_no'] ?></div>
                    <div class="col-md-3"><?= $match['date'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>