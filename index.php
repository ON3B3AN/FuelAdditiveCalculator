<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Fuel Additive Calculator">

        <title>Fuel Additive Calculator</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
	<!--<link rel="apple-touch-icon" sizes="180x180" href="assets/ico/dm_ico.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/dm_ico.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/dm_ico.png">
        <link rel="manifest" href="assets/ico/site.webmanifest">
        <link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets/ico/dm_ico.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="assets/ico/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">-->
		
        <script src="https://kit.fontawesome.com/b67ab9d30d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        
    </head>
    <body id="body">
        <div class="container">
            <h2 class="pt-4"><span>Diesel</span> Kleen</h2>
            <h3>Treatment Calculator</h3>
            <br>
            <div ng-app="myApp" ng-controller="formCtrl">
                <form novalidate>
                    <input name="fuelAdded" type="number" placeholder="Enter fuel added (gal)..." ng-model="user.fuelAdded"><br>
                    <br>
                    <button class="btn btn-danger" ng-click="reset()">RESET</button>
                    <button class="btn btn-success" ng-click="calc()">CALCULATE</button>
                </form>
                <br>
                <div class="table-responsive-md p-2">
                    <table class="table table-borderless table-striped table-dark table-hover mx-auto">
                        <thead>
                            <tr>
                                <th>Additive</th>
                                <th>Strength&nbsp;(%)</th>
                                <th>Amount&nbsp;Req.&nbsp;(oz)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DIESEL FUEL SUPPLEMENT +CETANE BOOST<i class="far fa-snowflake"></i></td>
                                <td>+0</td>
                                <td>{{user.fuelAdded * calcWinter}}</td>
                            </tr>
                            <tr>
                                <td>DIESEL FUEL SUPPLEMENT +CETANE BOOST<i class="far fa-snowflake"></i></td>
                                <td style="color: lightgreen">+100</td>
                                <td>{{user.fuelAdded * calcWinter1}}</td>
                            </tr>
                            <tr>
                                <td>DIESEL KLEEN +CETANE BOOST<i class="fas fa-tachometer-alt"></i></td>
                                <td>+0</td>
                                <td>{{user.fuelAdded * calcSummer}}</td>
                            </tr>
                            <tr>
                                <td>DIESEL KLEEN +CETANE BOOST<i class="fas fa-tachometer-alt"></i></td>
                                <td style="color: lightgreen">+100</td>
                                <td>{{user.fuelAdded * calcSummer1}}</td>
                            </tr>
                            <tr>
                                <td>CLEAR-DIESEL FUEL & TANK CLEANER<i class="fas fa-tint"></i></td>
                                <td>+0</td>
                                <td>{{user.fuelAdded * calcClear}}</td>
                            </tr>
                            <tr>
                                <td>CLEAR-DIESEL FUEL & TANK CLEANER<i class="fas fa-tint"></i></td>
                                <td style="color: lightgreen">+100</td>
                                <td>{{user.fuelAdded * calcClear1}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            var app = angular.module('myApp', []);
            app.controller('formCtrl', function($scope) {
                $scope.master = {fuelAdded:null};
                $scope.reset = function() {
                        $scope.user = angular.copy($scope.master);
                        $scope.calcWinter = null;
                        $scope.calcWinter1 = null;
                        $scope.calcSummer = null;
                        $scope.calcSummer1 = null;
                        $scope.calcClear = null;
                        $scope.calcClear1 = null;
                };
                $scope.reset();

                $scope.calc = function() {
                        $scope.calcWinter = 0.32;
                        $scope.calcWinter1 = 0.64;
                        $scope.calcSummer = 0.32;
                        $scope.calcSummer1 = 0.64;
                        $scope.calcClear = 0.32;
                        $scope.calcClear1 = 0.64;
                };

            });
        </script>

        <!-- Javascript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>
</html>
