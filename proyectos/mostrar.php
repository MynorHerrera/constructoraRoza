<?php 
if(isset($_REQUEST['Buscar'])){
    $date = $_POST['date'];
    $ruta = 'fotos/'.$date; // Indicar ruta
    if (!file_exists($ruta)) {
        echo "<p>No se encontro ningun Archivo</p>";
    } else {
        $dirint=dir($ruta);
        while (($archivo = $dirint->read()) !== false)
        {
            if (preg_match("#([a-zA-Z0-9_\-\s]+)\.(gif|GIF|jpg|JPG|png|PNG|jpeg)#is",$archivo)){
                echo '
                <div class="col-md-2">
                  <div class="thumbnail">
                    <a href="'.$ruta."/".$archivo.'" target="_blank">
                      <img src="'.$ruta."/".$archivo.'" style="width:100%">
                    </a>
                  </div>
                </div>';
            }else{
                if (preg_match("#([a-zA-Z0-9_\-\s]+)\.(mp4|MP4|)#is",$archivo)){
                    echo '
                    <div class="col-md-2">
                  <div class="thumbnail">
                    <a href="'.$ruta."/".$archivo.'" target="_blank">
                    <video width="100%" controls>
                    <source src="'.$ruta."/".$archivo.'" type="video/mp4">
                    <p>Your browser does not support the video tag.</p>
                     </video>
                    </a>
                  </div>
                </div>';
                }
            }
        }      
        $dirint->close();   
    }
}else{
    $date = date("Y-m-d");;
    $ruta = 'fotos/'.$date; // Indicar ruta
    if (!file_exists($ruta)) {
        echo "<p>No se encontro ningun Archivo</p>";
    } else {
        $dirint=dir($ruta);
        while (($archivo = $dirint->read()) !== false)
        {
            if (preg_match("#([a-zA-Z0-9_\-\s]+)\.(gif|GIF|jpg|JPG|png|PNG|jpeg)#is",$archivo)){
                echo '
                <div class="col-md-2">
                  <div class="thumbnail">
                    <a href="'.$ruta."/".$archivo.'" target="_blank">
                      <img src="'.$ruta."/".$archivo.'" style="width:100%">
                    </a>
                  </div>
                </div>';
            }else{
                if (preg_match("#([a-zA-Z0-9_\-\s]+)\.(mp4|MP4|)#is",$archivo)){
                    echo '
                    <div class="col-md-2">
                  <div class="thumbnail">
                    <a href="'.$ruta."/".$archivo.'" target="_blank">
                    <video width="100%" controls>
                    <source src="'.$ruta."/".$archivo.'" type="video/mp4">
                    <p>Your browser does not support the video tag.</p>
                     </video>
                    </a>
                  </div>
                </div>';
                }
            }
        }      
        $dirint->close();   
    }
}
?>