<?php

include "config.php";

$image = new ZFImage_Image("images/desert.jpg");
$image->addPlugin(new ZFImage_Fx_Resize(400));
$image->imageJpeg();