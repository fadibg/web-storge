<?php
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="company_database";
$db = mysqli_connect($servername, $username, $password,$datapaes);

if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        $sql1 = ("SELECT * FROM portfolio");
    $result = $db->query($sql1);
    while($row = $result->fetch_assoc()) {
        if ($row["id_project"]==$id){
            if($row["pro_loc"]!="")
           { if(substr($row["pro_loc"], -1)=="/"){
             download($row["pro_loc"]);}
             else{
              $fil1=$row["pro_loc"];
              $files = array($fil1);
               if($row["simage"]!=""){$simg="imgs/".$row["simage"];array_push($files,$simg);}
               if($row["image1"]!=""){$img1="imgs/".$row["image1"];array_push($files,$img1);}
               if($row["image2"]!=""){$img2="imgs/".$row["image2"];array_push($files,$img2);}
               if($row["image3"]!=""){$img3="imgs/".$row["image3"];array_push($files,$img3);}
              $z=$row["namep"];
              $zipname = "$z.zip";
              $zip = new ZipArchive;
              $zip->open($zipname, ZipArchive::CREATE | ZipArchive::OVERWRITE);
              foreach ($files as $file) {
                $zip->addFile($file);
              }
              $zip->close();
              header("Location: $zipname");
            }
            }else{
              $files=array("hhh");
              if($row["simage"]!=""){$simg="imgs/".$row["simage"];array_push($files,$simg);}
              if($row["image1"]!=""){$img1="imgs/".$row["image1"];array_push($files,$img1);}
              if($row["image2"]!=""){$img2="imgs/".$row["image2"];array_push($files,$img2);}
              if($row["image3"]!=""){$img3="imgs/".$row["image3"];array_push($files,$img3);}
              array_splice($files,0,1);
            $z=$row["namep"];
              $zipname = "$z.zip";
            $zip = new ZipArchive;
            $zip->open($zipname, ZipArchive::CREATE);
            foreach ($files as $file) {
              $zip->addFile($file);
            }
            $zip->close();
            header("Location: $zipname");
           }
           
        }

    }
       
          
      }else{
        header('location:dashbord.php');
      }
function download($path){
     
     $dir = substr_replace($path,"",-1);
     $filen=substr_replace($path,"",0,10);
     $filen=substr_replace($filen,"",-1);
     $zip_file = "$filen.zip";
     echo $zip_file;
     // Get real path for our folder
     $rootPath = realpath($dir);
     
     // Initialize archive object
     $zip = new ZipArchive();
     $zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE);
     
     // Create recursive directory iterator
     /** @var SplFileInfo[] $files */
     $files = new RecursiveIteratorIterator(
         new RecursiveDirectoryIterator($rootPath),
         RecursiveIteratorIterator::LEAVES_ONLY
     );
     
     foreach ($files as $name => $file)
     {
         // Skip directories (they would be added automatically)
         if (!$file->isDir())
         {
             // Get real and relative path for current file
             $filePath = $file->getRealPath();
             $relativePath = substr($filePath, strlen($rootPath) + 1);
     
             // Add current file to archive
             $zip->addFile($filePath, $relativePath);
         }
     }
     
     // Zip archive will be created only after closing object
     $zip->close();
     header("Location: $zip_file");
    
        }
        ?>