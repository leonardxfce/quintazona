<?php 
/**
 * Cuadro de Turnos 
 * PHP version 7
 * 
 * @category Class
 * @package  Cuadro_De_Turnos
 * @author   Leonardo Araoz <leonardo.araoz.dev@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://quintazonaderiego.com.ar
 */
require "head.php"; 
?>

<div class="col-2 bg-primary text-white">
    <a  href="index.php">
        <img src="bootstrap/img/asic.jpg" alt="logo">
    </a>
    <ul class="nav flex-column ">
        <li class="nav-item">
            Accion1
        </li>
        <li class="nav-item">
            Accion2
        </li>
        <li class="nav-item">
            Accion3
        </li>
    </ul>
</div>
<div class="col-10">
    <h1 class="text-center">Administrador Quinta Zona de Riego</h1>
    <ul class="nav">
        <li class="nav-item">
            Hola    
        </li>
        <li class="nav-item">
            Hola    
        </li>
        <li class="nav-item">
            Hola    
        </li>
    </ul>
</div>
<script type="text/javascript" src="https://js.live.net/v7.2/OneDrive.js"></script>
<script type="text/javascript">
    function launchSaveToOneDrive(){
        console.log("hola");
        var odOptions = {
            clientId: "43c866ce-a817-4026-a3a5-d2fe6c027101",
            action: "save",
            sourceInputElementId: "fileUploadControl",
            sourceUri: "http://localhost/Ejemplos-Bootstrap/bootstrap/img/asic.jpg",
            fileName: "",
            openInNewWindow: true,
            advanced: {},
            success: function(files) {console.log(files); },
            progress: function(p) { console.log(p); },
            cancel: function() {  },
            error: function(e) { console.log(e);  }
        };
        OneDrive.save(odOptions);
    }
</script>

<input id="fileUploadControl" name="fileUploadControl" type="file" />
<button onclick="launchSaveToOneDrive()">Save to OneDrive</button>
WL7HpsEnhaaGcMyEjqSwyk7
<?php require "footer.php"; ?>
