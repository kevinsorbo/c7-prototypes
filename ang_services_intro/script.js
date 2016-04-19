




var tunes = angular.module('myTunes',[]);
tunes.controller('tunesController',function($scope,$http,$log){
    var self = this;
    this.constructUrl = function(searchTerm){
        return "https://itunes.apple.com/search?term="+searchTerm+"&callback=JSON_CALLBACK";
    };
    this.getTunes = function(searchTerm){
        $http({
            url: this.constructUrl(searchTerm),
            method: 'JSONP',
            cache: false
        }).then(function(response){
                    $log.log(response.data.results);
                    self.data = response.data.results;
                },
                function(response) {
                    $log.log('failure');
                });
    };
})