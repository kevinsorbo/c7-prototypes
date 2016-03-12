// Create the route module and name it routeApp
var routeApp = angular.module("routeApp",[]);

// Config the routes

         // route for the home page

        // route for the about page

        // route for the contact page


// Create the controllers for the different pages below

routeApp.controller("routeCtrl",function($scope){
    $scope.message = "lorem ipsum";
});

// home page controller
    // Create a message to display in the view


// about page controller
    // Create a message to display in the view

// contact page controller
    // Create a message to display in the view
