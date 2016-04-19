




var app = angular.module('mytunes',[]);
app.controller = ('tunesController',function($scope,$http,$log){
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
                    $log.log(response);
                },
                function(response) {
                    $log.log('failure');
                });
    };
})