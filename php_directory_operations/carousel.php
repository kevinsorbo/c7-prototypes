<?php
?>


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
                url:"get_images.php",
                dataType:"JSON",
                success: function(response){
                    imageArray = response.files;
                    for(var i = 0; i < imageArray.length; i++){
                        var img = $("<img>",{
                            src: imageArray[i],
                            style:"position:absolute; width:100%; height:100%; right:100%; top:0px"
                        });
                        $('#imgContainer').append(img);
                        imageLocation.push(img);
                    }
                    imageLocation[0].css("right","0");
                }
            });
            console.log("hello");
        }

        function moveLeftRight(direction){
            if(stillAnimating){
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
            var currentImg = imageLocation[imgArrayIndex];
            var nextImg = imageLocation[next_position];
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
