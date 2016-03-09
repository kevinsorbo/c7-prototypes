
var tunes = angular.module('myTunes',[]);

tunes.controller('tunesController',function($scope,$http,$log){

    var self = this;
    // constructURL method
    // input: userInput
    // purpose: this function takes the userInput and creates a url link
    this.constructURL = function(userInput){
        $scope.url = "https://itunes.apple.com/search?term="+userInput+"&callback=JSON_CALLBACK";
    };
    // getData method
    // input: none
    // purpose: this function uses http to make call to get data about user specified artist from itunes
    this.getData = function(){
        $http({
            url: $scope.url,
            method: 'JSONP'
        })
        .then(function(response){
            $log.log(response);
            self.data = response.data.results; // stores data into self.data
        },
        function(response){
            $log.log("failure");
        });
    };
})