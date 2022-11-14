<?php

function imageUpload($image, $imageDirectory, $existUrl){

    $imageName = rand(10,1000).time().'.'.$image->extension();
    $directory = 'admin/assets/images/upload-files/'.$imageDirectory;
    $image->move($directory,$imageName);
    $imageURl = $directory.$imageName;

}
