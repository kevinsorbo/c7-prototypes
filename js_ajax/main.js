//Create GLOBAL variable below here on line 2
var global_result;
var first_movie_info;
var newElement;
var x;
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

                for(var i = 0; i < global_result.feed.entry.length; i++){
                    x = global_result.feed.entry[i]["im:image"][2].label;
                    newElement = $("<img>").attr("src",x);
                    //console.log("append");
                    $("#main").append(newElement);
                }
            }
        });
        console.log('End of click function');
    });
});