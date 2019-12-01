<?php
if($_GET["opcion"]=="AjaxTest"){
    if($_GET["ajax"]==1){
        if(isset($_POST["usuario"])){
            ?>
            <SPAN><?=$_POST["usuario"]?></SPAN>
            <?
        }
    }
    if($_GET["ajax"]==2){
        if(isset($_POST["usuario"])){
                echo "<SPAN>".$_POST["usuario"]."</SPAN>";
        }
    }
}