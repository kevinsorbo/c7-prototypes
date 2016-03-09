<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        var imageArray = [];
        var imageLocation = [];
        var imgArrayIndex = 0;
        var stillAnimating = false;

        function loadFiles(){
            $.ajax({
                url:"get_images.php", // get_images gets images from images folder
                dataType:"JSON",
                success: function(response){
                    imageArray = response.files; // store images in Array
                    for(var i = 0; i < imageArray.length; i++){ //dynamically create images to the dom
                        var img = $("<img>",{
                            src: imageArray[i],
                            style:"position:absolute; width:100%; height:100%; right:100%; top:0px" // gives all images absolute positioning to stack them on top of one another
                        });
                        $('#imgContainer').append(img);
                        imageLocation.push(img);
                    }
                    imageLocation[0].css("right","0"); // put the first image in array in the container
                }
            });
            console.log("hello");
        }

        function moveLeftRight(direction){ // direction parameter lets us know to move right or left
            if(stillAnimating){ //checks to see if animation is still occuring before user clicks a button
                return;
            }
            stillAnimating = true;
            var next_position = imgArrayIndex + direction;
            if(next_position == -1){
                next_position = 6;
            }
            if(next_position > 6){
                next_position = 0;
            }
            var currentImg = imageLocation[imgArrayIndex]; // keep track of current image position in the array
            var nextImg = imageLocation[next_position]; // keep track of next position
            nextImg.css('right',100*direction*-1+"%");
            nextImg.animate({'right':0},1000,function(){
                stillAnimating = false;
            });
            currentImg.animate({'right':100*direction+"%"},1000);
            imgArrayIndex = next_position;
        }

        $(document).ready(function(){
            loadFiles();

            $("#previous").on("click",function(){
                moveLeftRight(-1);
            });
            $("#next").on("click", function(){
                moveLeftRight(1);
            });
        });

    </script>
    <style>
        #imgContainer{
            width:50vw;
            height:80vh;
            position: relative;
            margin: auto;
            overflow: hidden;
        }
        button{
            position: absolute;
        }

        #previous{
            top:40%;
            left:10%;
        }
        #next{
            bottom:60%;
            left:80%;
        }
    </style>
</head>
<body>
    <button type="button" id="previous">Previous</button>
    <div id="imgContainer"></div>
    <button type="button" id="next">Next</button>

</body>
</html>
