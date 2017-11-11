<html>
    <head>
        <title>NewMEDICATOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <img src = "<?php echo base_url();?>Image/logo.png"><br><br>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetTypesIndividus"> Types individus </a><br><br>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicaments"> Medicaments </a><br>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicamentsPosologie"> Posologie </a><br>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetAllMedicamentsContreIndication"> Contre Indication </a><br>
        
<!--        Ajout des liens de Gregoire-->
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetRegion">Régions</a><br>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetVisiteur">Visiteurs</a>
        
    </body>
</html>

