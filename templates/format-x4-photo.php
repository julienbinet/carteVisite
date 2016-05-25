<link type="text/css" href="./css/main.css" rel="stylesheet" >
<?php /* style dynamique */ ?>
<page style="font-size: 14px" class="x4">

    <?php for ($i=0; $i < 4; $i++) {?>
    <img src="<?php echo $fond;?>" alt="" class="fond img-<?php echo $i;?>">
    <table class="img-<?php echo $i;?>" cellspacing="0">
        <tbody>
            
        <tr>
            <td style="height:45%;width:50%;text-align:center;" >
                <span class="identite"><?php echo $_POST['nom']." ".$_POST['prenom'];  ?></span> <br>
                <span class="profession"><?php echo $_POST['prof'];  ?></span>
            </td>
            <td align="right"><img src="<?php echo $image;?>" alt="" class="photo photo-<?php echo $i;?>"></td>
        </tr>

        <tr>
            <td style="height:20%;width:50%;">
                <div class="adresse"><?php echo $_POST['adr'];  ?> <br> <?php echo $_POST['cp']." - ".$_POST['ville'];  ?></div>
            </td>
            <td style="height:20%;width:50%;"><div class="site"><?php echo $_POST['site'];  ?></div></td>
        </tr>
        <tr>
            <td style="height:20%;width:50%;"><div class="tel">
                <?php echo "Tél :".$_POST['tel'];  if($_POST['tel2']!=""){echo "<br>Port :".$_POST['tel2'];}?>
            </div></td>
            <td style="height:20%;width:50%;"><div class="mail"><?php echo $_POST['mail'];  ?></div></td>
        </tr>
        </tbody>
    </table>

    <?php }?>
</page>
