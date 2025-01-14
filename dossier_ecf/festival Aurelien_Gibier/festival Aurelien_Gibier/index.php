<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Festival</title>
</head>
<body>
    <a href="creation.php" target="_blank">Creation festivalier</a><br>
    <?php
    require_once ('dbconnect.php');
    require_once ('CandidateRepository.php');

    $objConnectionAll = new CandidateRepository();
    $myConnectAll = $objConnectionAll->searchAll();
    var_export($objConnectionAll->searchbyAge(62));
    ?>
</body>
</html>