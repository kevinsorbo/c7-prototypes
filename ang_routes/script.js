// Create the route module and name it routeApp
var routeApp = angular.module("routeApp",['ngRoute']);

// Config the routes

routeApp.config(function($routeProvider){

    $routeProvider
        .when('/home',{
            templateUrl:'pages/home.html',
            controller:'homePageCtrl'
        })
        .when('/about',{
            templateUrl:'pages/about.html',
            controller:'aboutPageCtrl'
        })
        .when('/contact',{
            templateUrl:'pages/contact.html',
            controller:'contactPageCtrl'
        })
});
         // route for the home page

        // route for the about page

        // route for the contact page


// Create the controllers for the different pages below

routeApp.controller("routeCtrl",function($scope){
    $scope.message = "lorem ipsum";
})
.controller('homePageCtrl',function($scope){
    $scope.message = "This is the Home Page";
})
.controller('aboutPageCtrl',function($scope){
    $scope.message = "This is the About Page";
})
.controller('contactPageCtrl',function($scope){
    $scope.message = "This is the Contact Page";
});

// home page controller
    // Create a message to display in the view


// about page controller
    // Create a message to display in the view

// contact page controller
    // Create a message to display in the view
