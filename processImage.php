<?php
function getExtension($str)
{ 
         $i = strrpos($str,".");
         if (!$i) { return ""; }
 
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 
    $valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
        {
            $name = $_FILES['deskImg']['name'];
            $size = $_FILES['deskImg']['size'];
             
            if(strlen($name))
                {
                     $ext = getExtension($name);
                    if(in_array($ext,$valid_formats))
                    {
                    if($size<(1024*1024))
                        {
                            $path = "uploads/";
                            $actual_image_name = time().substr(str_replace(" ", "_", $ext), 5).".".$ext;
                            $tmp = $_FILES['deskImg']['tmp_name'];
                            if(move_uploaded_file($tmp, $path.$actual_image_name))
                                {
                                    echo "<img src='http://localhost/cke-upimg/uploads/".$actual_image_name."' class='displayImg'>";
                                }
                            else
                                echo "Fail upload folder with read access.";
                        }
                        else
                        echo "Image file size max 1 MB";                   
                        }
                        else
                        echo "Error in Invalid file format or Extension ..";   
                }
                 
            else
                echo "Please select image to upload..!";
                 
            exit;
        }
?>        