// Create the route module and name it routeApp
var route = angular.module('routeApp',[]);

// Config the routes

         // route for the home page

        // route for the about page

        // route for the contact page


// Create the controllers for the different pages below
route.controller('routeCtrl',function($scope){
    $scope.message = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. " +
        "Vivamus pulvinar non sapien eget convallis. In et dui nisi. Donec at ornare odio. " +
        "Ut sed felis at tellus fermentum commodo eu vitae lectus. Nulla posuere laoreet " +
        "tellus quis faucibus. Integer ultricies nisl ac nisl euismod fermentum. Morbi odio neque, " +
        "ornare id porttitor nec, molestie quis tortor. Quisque eget luctus lacus. Phasellus " +
        "vestibulum arcu vitae libero laoreet, at pulvinar dolor condimentum. Praesent ut eros " +
        "tempor augue vestibulum hendrerit. Duis volutpat eros sit amet luctus tincidunt.";
});

// home page controller
    // Create a message to display in the view


// about page controller
    // Create a message to display in the view

// contact page controller
    // Create a message to display in the view
