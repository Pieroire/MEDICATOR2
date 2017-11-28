<html>
    <head>
        <title>NewMEDICATOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php
            include 'v_bootstrapPC.php';
        ?>
        
    </head>
    <body>
        <div style="border-color: black; height:auto; overflow:auto">
        <h1 style="font-family: Impact;" align="center"><u><i>MEDICATOR</i></u></h1>
        <p>
            <h2 class="text-center">Bienvenue, sur l'application MEDICATOR</h2>
            <h4 class="text-center" ><i> Séléctionnez la fonctionnalité souhaitée</i></h4>
        </p>
        </div>
        <!--<img src = "<?php echo base_url();?>Image/logo.png"><br><br>-->
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetTypesIndividus"> Types individus </a></button><br>
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicaments"> Medicaments </a></button><br>
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicamentsPosologie"> Préscritpion </a></button><br>
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetAllMedicamentsContreIndication"> Contre Indication </a></button><br>
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/statistique"> Statistiques </a></button><br>
        
<!--        Ajout des liens de Gregoire-->
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetRegion">Régions</a></button><br>
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetVisiteur">Visiteurs</a></button>
        
    </body>
</html>

