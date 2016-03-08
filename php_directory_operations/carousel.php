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
        function loadFiles(){
            $.ajax({
                url:"get_images.php",
                dataType:"JSON",
                success: function(response){
                    var imgContainer = $("<div>",{
                        id:"imgContainer",
                        width:"50vw"
                    });
                    $("body").append(imgContainer);
                    for(var i =0; i < response.files.length; i++){
                        var img = $("<img>",{
                            src:response.files[i],
                            width:"100%",
                            style:"position:absolute",
                            left:"0px",
                            top:"0px",
                            class:"img"+i
                        });
                        imgContainer.append(img);
                        imageArray.push(response.files[i]);
                    }


                }
            });
        }

        function prevImg() {

        }

        function nextImg(){
            console.log("next");
        }

        $(document).ready(function(){
            loadFiles();
            $("#previous").on("click",function(){
                prevImg();
            });
            $("#next").on("click", function(){
                nextImg();
            });
        });

    </script>
</head>
<body>
    <button type="button" id="previous">Previous</button>
    <button type="button" id="next">Next</button>
</body>
</html>
