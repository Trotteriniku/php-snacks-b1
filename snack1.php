<?php
// teams and points variables
$games =
    [
        [
            "team-home" => "Atlanta Hawks",
            "team-away" => "Chicago Bulls",
            "goals-home" => rand(3, 100),
            "goals-away" => rand(3, 100)

        ],
        [
            "team-home" => "Denver Nuggets",
            "team-away" => "Milwaukee Bucks",
            "goals-home" => rand(3, 100),
            "goals-away" => rand(3, 100)

        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style=background-color:#17408B;>
    <main class=" container-sm d-flex justify-content-center p-5 rounded-3 "
        style="background-color:#FFFFFF; margin: 100px auto;">

        <div class=" border-2 p-3 rounded-3 "
            style="background-color:#C9082A; filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.6));">
            <!-- cicle for take all the team and points in games -->
            <h5 class=text-light style="filter: drop-shadow(0.35rem 0.35rem 0.4rem rgba(0, 0, 0, 0.3));">
                <?php
                foreach ($games as $game) {
                    echo $game["team-home"] . " - " . $game["team-away"] .= " | " . $game["goals-home"] . " - " . $game["goals-away"] . "</br>";

                }

                ?>
            </h5>
        </div>

    </main>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>