var app = angular.module('sgtApp', []);

app.provider('sgtData', function(){
    //Create a variable to hold this
    var self = this;

    //Create a variable to hold your api key but set it to an empty string
    var api_key = '';
    //Create a variable to hold the API url but set it to an empty string
    var api_url = '';

    //Add the necessary services to the function parameter list
    this.$get = function($http,$q,$log) {

        return {
            callApi: function () {
                var api_data = {api_key: self.api_key};
                var apiStr = $.param(api_data);
                var defer = $q.defer();


                $http({
                    url: self.api_url,
                    method: 'POST',
                    data: apiStr,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                })
                    .then(
                        function (data) {
                            defer.resolve(data);
                        },
                        function (data) {
                            defer.reject("Error");
                            defer.promise;
                        });
                return defer.promise;
                //return an object that contains a function to call the API and get the student data
                //Refer to the prototype instructions for more help

            }
        };
    };
});

//Config your provider here to set the api_key and the api_url

app.config(function(sgtDataProvider){
    sgtDataProvider.api_key = '6SjVcFig5k';
    sgtDataProvider.api_url = 'http://s-apis.learningfuze.com/sgt/get';
});


//Include your service in the function parameter list along with any other services you may want to use
app.controller('ioController', function(sgtData){
    //Create a variable to hold this, DO NOT use the same name you used in your provider
    var selfie = this;
    //Add an empty data object to your controller, make sure to call it 'data'
    this.data = {};
    this.getData = function(){
        sgtData.callApi()
            .then(
                function(data){
                    selfie.data = data.data;
                },
                function(data){
                    $log.log('fail');
                });
    };

    //Add a function called getData to your controller to call the SGT API
    //Refer to the prototype instructions for more help

});