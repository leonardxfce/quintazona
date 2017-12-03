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
require "side.php";
$cuadro = $_GET['cuadro'];
switch ($cuadro){
case 'gustavo':
    $url = "ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157464";
    $key = "AK1LXCXmkmzSDNI";
    break;
case 'california':
    $url = "ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157465";
    $key = "ADr7Gv-bEIFwHPc";
    break;
case 'estrella':
    $url = "ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157358";
    $key = "AK8RNRcpgXjIrkc";
    break;
case 'bajada':
    $url = "ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157343";
    $key = "ALrRwdz-dfPTjVQ";
    break;
case 'acta':
    $url = "ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157462";
    $key = "AOdzT0709w2WaU4";
    break;
case 'pedro':
    $url = "ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157330";
    $key = "AI0pcPlb7SNHjYI";
    break;
default:
    break;
}
$src = "https://onedrive.live.com/embed?cid=$url&authkey=$key&em=2";
$iframe = "<iframe src='$src' frameborder='0' scrolling='no'></iframe>";
?>
<div class="col-10">
    <?php echo $iframe ?>
</div>
<?php require "footer.php"; ?>