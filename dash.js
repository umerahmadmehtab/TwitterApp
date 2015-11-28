var app = angular.module("myApp", []);

app.controller("init", function ($scope, $http) {
    $scope.tweets = {};
    $scope.tweet = {};

    $scope.postit = function () {
        
        $http({
            method: 'POST',
            url: './setter.php',
            data: $scope.tweet
        }).success(function (data)  {
            $scope.tweet = {};
            $scope.refreshtweets();
            
        })

    };
    $scope.refreshtweets=function(){
        $http.get('./getter.php').success(function(response){
            
            $scope.tweets=[];
            var results=response.results;
            if(results==null){
                return;
            }
            for (i=0; i<results.length;i++){
                $scope.tweets[i]={user:results[i].id,tweet:results[i].tweet};
                
            }
           
        });
    }
  $scope.refreshtweets();
});