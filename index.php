<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Views Counts</title>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
    <br>
    <br>
    <h1 class="display-4 text-center text-white">Site Tracker</h1>
    <div class="container">
        <div class="card">
            <div class="container">
            <div class="card-header">
                <h3>Visitor Views</h3>
                <p>Last 30min</p>
            </div>
            <div class="card-body">
                <h1 id="count">0</h1>
            </div>
            </div>
        </div>
        <div class="v-loc"></div>
    </div>

    <div class="loader-cont">
        <h3 class="text-white">Loading.......</h3>
        <div class="icon"><ion-icon name="cog-outline" class="ion"></ion-icon></div>
    </div>

    <script src="view.js"></script>
    <script src="jquery.js"></script>
</body>
</html>