<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        
        
        <script type="text/javascript">
        
        $(function(){
            $('#btn1').click(function(){
                //alert('erreur');
                InsererLesVisiteurs();
                });
            
            $('#tdA').click(function(){
                $('#txtMatricule').val($('#tdA').text());
                $('#txtNom').val($('#tdB').text());
                $('#txtPrenom').val($('#tdC').text());
                $('#txtAdresse').val($('#tdD').text());
                $('#txtCP').val($('#tdE').text());
                $('#txtVille').val($('#tdF').text());
                $('#txtDateE').val($('#tdG').text());
                $('#txtCodeSec').val($('#tdH').text());
                $('#txtCodeLabo').val($('#tdI').text());
            });
            
            $('#btnM').click(function(){
                ModifierLesVisiteurs();
            });
            
            
        });
        
        
        
        </script>
        
        
        
        
        
    </head>
    <body>

        
        <input id="idVisiteur" hidden="" value="">
        
        
        <label>Matricule :</label> <input id="txtMatricule" type="text"><br><br>
        <label>Nom :</label> <input id="txtNom" type="text"><br><br>
        <label>Prénom :</label> <input id="txtPrenom" type="text"><br><br>
        <label>Adresse :</label> <input id="txtAdresse" type="text"><br><br>
        <label>Code Postal :</label> <input id="txtCP" type="text"><br><br>
        <label>Ville :</label> <input id="txtVille" type="text"><br><br>
        <label>Date d'embauche :</label> <input id="txtDateE" type="date"><br><br>
        <label>Code Secteur :</label> <input id="txtCodeSec" type="text"><br><br>
        <label>Code Laboratoire :</label> <input id="txtCodeLabo" type="text"> <input id="btn1" type="button" value="Inserer"> <input id="btnM" type="button" value="Modifier">
        
        <br><br>
        
        <label style="font-weight:bold; color: green;">Cliquez sur le matricule du visiteur à modifier ou insérer un visiteur directement :</label>
        <br><br>

        
        <table border="1.5">
            <thead>
                <tr> <th>Matricule</th><th>Nom</th><th>Prénom</th><th>Adresse</th><th>CP</th><th>Ville</th><th>Date d'embauche</th><th>Code secteur</th><th>Code laboratoire</th></tr>
            </thead>
                <?php 
                 
                    foreach($lesVisiteurs as $visiteur)
                        {
                        ?>
            <tbody>
                <tr><td id="tdA"><?php echo $visiteur->VIS_MATRICULE; ?></td><td id="tdB"><?php echo $visiteur->VIS_NOM;?></td><td id="tdC"><?php echo $visiteur->Vis_PRENOM;?></td><td id="tdD"><?php echo $visiteur->VIS_ADRESSE;?></td><td id="tdE"><?php echo $visiteur->VIS_CP;?></td><td id="tdF"><?php echo $visiteur->VIS_VILLE;?></td><td id="tdG"><?php echo $visiteur->VIS_DATEEMBAUCHE;?></td><td id="tdH"><?php echo $visiteur->SEC_CODE;?></td><td id="tdI"><?php echo $visiteur->LAB_CODE;?></td></tr>
            </tbody>
                 <?php 
                        }                       
                ?>
        
        </table>
        
        
        <div id='divV'></div>
        <div id='divM'></div>

        
        <br><br>
        
        <a href="<?php echo base_url(); ?>">Accueil</a>

        
    </body>
</html>
