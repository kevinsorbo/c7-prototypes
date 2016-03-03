//Create GLOBAL variable below here on line 2
var global_result;
var first_movie_info;

$(document).ready(function(){
    $('button').click(function(){
        console.log('click initiated');
        $.ajax({
            dataType: 'json',
            url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
            success: function(result) {
                console.log('AJAX Success function called, with the following result:', result);
                global_result = result;
                first_movie_info = global_result.feed.entry[0]["im:image"][2].label;

                // get the 3rd image from each movie and store it in a variable
                // Append the img tag to #main
                // Find the movie title and director for each image
                // Create the appropriate HTML to add the movie title and director to each movie image
                for(var i = 0; i < global_result.feed.entry.length; i++){
                    var getImage = global_result.feed.entry[i]["im:image"][2].label;
                    var newImage = $("<img>").attr("src",getImage);
                    var getTitle = global_result.feed.entry[i]["im:name"].label;
                    var getArtist = global_result.feed.entry[i]["im:artist"].label;
                    var newArtistTitle =  $("<h1>").text(getTitle + " - " + getArtist);
                    $("#main").append(newImage,newArtistTitle);
                }
            }
        });
        console.log('End of click function');
    });
});