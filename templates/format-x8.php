<link type="text/css" href="./css/main.css" rel="stylesheet" >
<?php /* style dynamique */ ?>
<page style="font-size: 14px" class="x8">

    <?php for ($i=0; $i < 8; $i++) {?>
    <img src="<?php echo $fond;?>" alt="" class="fond img-<?php echo $i;?>">
    <table class="img-<?php echo $i;?>" cellspacing="0">
        <tbody>
        	
        <tr>
            <td style="height:33%;width:100%;text-align:center;" colspan="2">
                <span class="identite"><?php echo $_POST['nom']." ".$_POST['prenom'];  ?></span> <br>
                <span class="profession"><?php echo $_POST['prof'];  ?></span>
            </td>
        </tr>

        <tr>
            <td style="height:30%;width:50%;">
                <div class="adresse"><?php echo $_POST['adr'];  ?> <br> <?php echo $_POST['cp']." - ".$_POST['ville'];  ?></div>
            </td>
            <td style="height:30%;width:50%;"><div class="site"><?php echo $_POST['site'];  ?></div></td>
        </tr>
        <tr>
            <td style="height:30%;width:50%;"><div class="tel">
                <?php echo "Tél :".$_POST['tel'];  if($_POST['tel2']!=""){echo "<br>Port :".$_POST['tel2'];}?>
            </div></td>
            <td style="height:30%;width:50%;"><div class="mail"><?php echo $_POST['mail'];  ?></div></td>
        </tr>
        </tbody>
    </table>

    <?php }?>
</page>
