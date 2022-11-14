<?php


namespace App\helper;


class FileUpload
{
    private static $imageName, $imageDirectory, $imgUrl;
    public static function imageUpload($image, $directory, $existUrl = null){
        if ($image){
            if (file_exists($existUrl)){
                unlink($existUrl);
            }
            self::$imageName = rand(10,1000).time().'.'.$image->extension();
            self::$imageDirectory = 'admin/assets/images/upload-files/'.$directory;
            $image->move(self::$imageDirectory, self::$imageName);
            self::$imgUrl = self::$imageDirectory.self::$imageName;

        }else{
            self::$imgUrl = $existUrl;
        }
        return self::$imgUrl;
    }


}
