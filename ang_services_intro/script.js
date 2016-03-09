
var tunes = angular.module('myTunes',[]);

tunes.controller('tunesController',function($http,$log){

    this.getData = function(userInput){
        var self = this;
        $http({
            url: "https://itunes.apple.com/search?term="+userInput+"&callback=JSON_CALLBACK",
            method: 'JSONP',
            cache:'false'
        })
        .then(function(response){
            $log.log(response);
        },
        function(response){
            $log.log("failure");
        });
    };
})