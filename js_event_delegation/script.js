// Answer the questions here:

// - What do you think is going to happen?
    // I think that when you click button 5 the content will be displayed in the console like the other buttons.
// - What happened?
    // Nothing was displayed in the console
// - Why?
   // I think when we used .on it only gave the event to the current buttons that are present.  Any button made after will not receive the event handler.
//========== Write your code below ===========//

$(document).ready(function(){
    // Feature Set 1
    $("#list button").on("click", function()
    {
        console.log($(this).text());
    });

    //Feature Set 2
    var newButton = $("<li><button style='margin-top: 10px'>Delegated Button#5 Handler</button></li>");
    $("#list").append(newButton);



    //Feature Set 3
    $("#list").on("click","button", function(){
        console.log($(this).text());
    });

    //Additional Challenges

    //$("#list").on("click","button", function(){
    //    if($(this).attr("id")){
    //        window.open("https://www.google.com/","_blank");
    //    }
    //
    //});
    //var googleButton = $("<li><button class='google' style='margin-top: 10px'>Google</button></li>");
    //$("#list").append(googleButton);
    //
    //var googleButton2 = $("<li><button id='monkey' style='margin-top: 10px'>Google</button></li>");
    //$("#list").append(googleButton2);





});

