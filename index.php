<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Twitter</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="./main.css">
    <script src="./angular.min.js"></script>
</head>
    <body  ng-app="myApp" ng-controller="init">
    <center>
        <div class="row">
            <div class="today active row">
            Twitter
                <img src="twitter-128.png" style="width: 3%; align: right;">
            </div>
            <br>
        <form name="usertweet" method="post" ng-submit="postit()">
            
        <div class="row ">
            <label for="string">Enter Email</label>
            <input type="email" name="email" ng-model="tweet.email">
            </div>
            <br>
            <div class="row ">
            <label for="string">Enter Tweet</label>
                <textarea type="text" rows="10" name="text" cols="50" ng-model="tweet.text"></textarea>
            </div>
            <br>
            <div class="row ">
            <input type="submit" name="Submit" value="Submit" >
                </div>
        </form>
            </div>
        
        <div class=" active row ">Recent Tweets</div>
        <div class="row" >
        <div class="drow " ng-repeat="w in tweets">
            <div class="row  leftalign user">
            <div class="col-4">{{w.user}}</div></div>
            <div class="row leftalign tweet">
            <div class="col-6"><p>{{w.tweet}}</p></div>
            </div>
            </div>
        </div>
        
        </center>
        <div id="end">
            <h3>Umer Ahmad Mehtab</h3>
        </div>
        <script src="./dash.js"></script>
    </body>
    
</html>