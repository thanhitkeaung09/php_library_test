<?php

require_once "vendor/autoload.php";

use Intervention\Image\ImageManager;

$manager = new ImageManager(["driver"=>"gd"]);

$image = $manager->make("public/poe1.jpeg");

$logo = $manager->make("public/logo.png")->resize(100,100);

//die($logo->response("png",100));

//$image->fit(500);

//$image->brightness(10);
//
//$image->contrast(35);

//$image->greyscale();

//$image->rotate(-30);

$image->resize(500, null,function ($img){
    $img->aspectRatio();
});

$image->insert($logo,"bottom-right",30,30);

$image->save("public/my-poe.png");

echo $image->response("png",100);