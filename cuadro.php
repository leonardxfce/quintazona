<?php 
require "head.php"; 
require "side.php"; 
$cuadro = $_GET['cuadro'];
?>

<div class="col-10">

    <?php if ($cuadro== 'gustavo') { ?>
        <iframe src="https://onedrive.live.com/embed?cid=ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157464&authkey=AK1LXCXmkmzSDNI&em=2" width="402" height="346" frameborder="0" scrolling="no"></iframe>
    <?php } ?>
    <?php if ($cuadro == 'california') { ?>
        <iframe src="https://onedrive.live.com/embed?cid=ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157465&authkey=ADr7Gv-bEIFwHPc&em=2" width="402" height="346" frameborder="0" scrolling="no"></iframe>
    <?php } ?>
    <?php if ($_GET['cuadro'] == 'pedro') { ?>
        <iframe src="https://onedrive.live.com/embed?cid=ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157330&authkey=AI0pcPlb7SNHjYI&em=2" frameborder="0" scrolling="no"></iframe>
    <?php } ?>
    <?php if ($_GET['cuadro'] == 'estrella') { ?>    
        <iframe src="https://onedrive.live.com/embed?cid=ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157358&authkey=AK8RNRcpgXjIrkc&em=2" width="402" height="346" frameborder="0" scrolling="no"></iframe>
    <?php } ?>
    <?php if ($_GET['cuadro'] == 'bajada') { ?>
        <iframe src="https://onedrive.live.com/embed?cid=ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157343&authkey=ALrRwdz-dfPTjVQ&em=2" frameborder="0" scrolling="no"></iframe>
    <?php } ?>
    <?php if ($_GET['cuadro'] == 'acta') { ?>
        <iframe src="https://onedrive.live.com/embed?cid=ED0CF7A1E8872075&resid=ED0CF7A1E8872075%2157462&authkey=AOdzT0709w2WaU4&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>
    <?php } ?>
</div>

<?php include("footer.php"); ?>