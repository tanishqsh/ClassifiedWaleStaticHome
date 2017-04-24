<?php
/**

 * Template Name: Search Page Template

 */

get_header();
?>

<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title> Classifiedwale </title>
    </head>


    <style>
        body{
            padding:0;
            margin: 0;
        }

        .ultimateBack{
            height: 100vh;
            background: url("cwBack2.jpg") center;
            -webkit-background-size:cover;
            background-size:cover;
        }

        .blackOverlay{
            height: 100%;
            background: rgba(0,0,0,0.3);
        }

        .bigFrontText{
            color: rgba(255,255,255,1);
        }

        .container-fluid{
            padding:0;
        }
        .centreRow{
            margin: 0;
            position: relative;
            top:20%;
        }

        .cwSearch{
            opacity:0.7;
            border-radius: 10px;
            padding: 10px;
            width:100%;
            border:none;
            outline:none;
            transition: opacity 2s;
        }

        .cwSearch:active, .cwSearch:focus{
            opacity:1;
        }
    </style>
    <body>

    <div class="container-fluid ultimateBack">
        <div class="blackOverlay">
            <div class="row centreRow">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6 text-center">
                    <h1 style="font-size: 4vw; color: #fff; padding: 20px;"> Classifiedwale </h1>
                    <form action="https://classifiedwale.com/" type="GET">
                        <input list="cities" type="search" name="s" class="cwSearch" placeholder="Type to search Classifiedwale: eg. Mumbai Artists">
                        <datalist id="cities">
                            <option value="Mumbai">
                            <option value="Chennai">
                            <option value="Kolkata">
                            <option value="Bengaluru">
                            <option value="Delhi">
                        </datalist>
                    </form>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
