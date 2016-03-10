<?php
  if(isset($_FILES["file"]["type"])){
          //Filtering Extensions
          $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
          $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
          if (( ($_FILES["file"]["type"] == "video/mp4") 
              || ($_FILES["file"]["type"] == "audio/mp3") 
              || ($_FILES["file"]["type"] == "audio/wma") 
              || ($_FILES["file"]["type"] == "image/gif") 
              || ($_FILES["file"]["type"] == "image/jpeg"))
              && in_array($extension, $allowedExts)) {
                //Test the size
                if($_FILES['file']['size'] < 100000000){
                  if($_FILES["file"]["error"] > 0){
                      echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
                  }
                  else{
                    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                    echo "Type: " . $_FILES["file"]["type"] . "<br />";
                    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
                    //Check if existing
                    if (file_exists("upload/" . $_FILES["file"]["name"])){
                      echo $_FILES["file"]["name"] . " already exists. ";
                    }
                    else {
                        //Upload File
                        copy($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                        echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
                      }
                    }
                }else{
                  echo 'size: ' . $_FILES['file']['size'] . '</br>';
                  echo 'File size reach the maximum value. (100MB)';
                }
             }
          else {
            echo "<code>File Not Supported</code>";
          }
  }else {
    header("Location: index.php");
  }

  
  

