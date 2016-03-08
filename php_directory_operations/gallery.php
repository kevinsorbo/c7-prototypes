<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        function load_files(){
            $.ajax({
                url: "get_images.php",
                dataType:"JSON",
                success: function (response) {
                    console.log(response);
                    var divContainer = $("<div>",{
                        class:"imgContainer"
                    });
                    $("body").append(divContainer);
                    for (var i = 0; i < response.files.length; i++) {
                        var img = $('<img>', {
                            src: response.files[i]
                            //id:"open"
                        }).click(function(){
                            var modalImg = $("<img>",{
                                src: $(this).attr('src'),
                                width:"100%"
                            });
                            $(".modal-body").html(modalImg);
                            $('#imageFocusModal').modal('show');
                        });

                        divContainer.append(img);
                    }
                }
            });
        }

        $(document).ready(function() {
            load_files();
        });

    </script>

    <style>
        .imgContainer {
            width:100vw;
        }

        .imgContainer img {
            width:25%;
        }
    </style>

</head>
<body>

<!-- Modal -->
<div id="imageFocusModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</body>



