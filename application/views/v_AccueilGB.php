<html>
    <head>
        <title>TODO supply a title</title>
        <?php
        include 'bootstrap.php';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
     <body style="background-color: #F5F5F5;">
         <button class="btn btn-info"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetRegion">Région</a></button>
        <br>
        <button class="btn btn-info"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetVisiteur">Visiteur</a></button>
        <br>
        <button class="btn btn-info"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetLocalisation">Localisation</a></button>
        <br>
        <button class="btn btn-info"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetAPI">Statistiques diverses</a></button>
        
    </body>
</html>
