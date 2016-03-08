
<?php
$file = glob("images/*.jpg");
$output = [
    'success' => "success",
    'error' => "error",
    'files' => glob("images/*.jpg")
];
$jsonEncoded = json_encode($output);
print $jsonEncoded;
?>


