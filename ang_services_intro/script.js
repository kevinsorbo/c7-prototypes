
var tunes = angular.module('myTunes',[]);

tunes.controller('tunesController',function($scope,$http,$log){

    var self = this;
    this.constructURL = function(userInput){
        $scope.url = "https://itunes.apple.com/search?term="+userInput+"&callback=JSON_CALLBACK";
    };

    this.getData = function(){
        $http({
            url: $scope.url,
            method: 'JSONP'
        })
        .then(function(response){
            $log.log(response);
            self.data = response.data.results;
        },
        function(response){
            $log.log("failure");
        });
    };
})