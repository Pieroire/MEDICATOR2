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
            
            $('tr').click(function(){
                $('#txtMatricule').val($(this).children(0).eq(0).text());
                $('#txtNom').val($(this).children(0).eq(1).text());
                $('#txtPrenom').val($(this).children(0).eq(2).text());
                $('#txtAdresse').val($(this).children(0).eq(3).text());
                $('#txtCP').val($(this).children(0).eq(4).text());
                $('#txtVille').val($(this).children(0).eq(5).text());
                $('#txtDateE').val($(this).children(0).eq(6).text());
                $('#txtCodeSec').val($(this).children(0).eq(7).text());
                $('#txtCodeLabo').val($(this).children(0).eq(8).text());
            });
            
            $('#btnM').click(function(){
                ModifierLesVisiteurs();
            });
            
            
        });
        
        
        
        </script>
        
        
        
        
        
    </head>
    <body>

        <a href="<?php echo base_url(); ?>"><img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a>
        
        <br>
        
        
        <input id="idVisiteur" hidden="" value="">
        
        
        <label>Matricule :</label> <input id="txtMatricule" type="text"><br><br>
        <label>Nom :</label> <input id="txtNom" type="text"><br><br>
        <label>Prénom :</label> <input id="txtPrenom" type="text"><br><br>
        <label>Adresse :</label> <input id="txtAdresse" type="text"><br><br>
        <label>Code Postal :</label> <input id="txtCP" type="text"><br><br>
        <label>Ville :</label> <input id="txtVille" type="text"><br><br>
        <label>Date d'embauche :</label> <input id="txtDateE" type="date"><br><br>
        <label>Code Secteur :</label> <!--<input id="txtCodeSec" type="text"><br><br>-->
        
        <select id="txtCodeSec">
                
                    <?php


                    foreach($lesSecteurs as $secteur)
                    {
                    ?>
                

                <option value="<?php echo $secteur->SEC_CODE; ?>"><?php echo $secteur->SEC_LIBELLE; ?></option>
                    
                    <?php
                    }
                    ?>
            </select><br><br>
        
        
        
        
        <label>Code Laboratoire :</label> <!--<input id="txtCodeLabo" type="text">--> 
            
        <select id="txtCodeLabo">
                
                    <?php


                    foreach($lesLabos as $labo)
                    {
                    ?>
                

                <option value="<?php echo $labo->LAB_CODE; ?>"><?php echo $labo->LAB_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
        </select>   
            
            
            
            
            
        <input id="btn1" type="button" value="Inserer"> <input id="btnM" type="button" value="Modifier">
        
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
                <tr><td><?php echo $visiteur->VIS_MATRICULE; ?></td>
                    <td><?php echo $visiteur->VIS_NOM;?></td>
                    <td><?php echo $visiteur->Vis_PRENOM;?></td>
                    <td><?php echo $visiteur->VIS_ADRESSE;?></td>
                    <td><?php echo $visiteur->VIS_CP;?></td>
                    <td><?php echo $visiteur->VIS_VILLE;?></td>
                    <td><?php echo $visiteur->VIS_DATEEMBAUCHE;?></td>
                    <td><?php echo $visiteur->SEC_CODE;?></td>
                    <td><?php echo $visiteur->LAB_CODE;?></td>
                </tr>
            </tbody>
                 <?php 
                        }                       
                ?>
        
        </table>
        
        
        <div id='divV'></div>
        <div id='divM'></div>

        
        
        
     

        
    </body>
</html>
