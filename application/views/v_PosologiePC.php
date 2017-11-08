<html>
<head>
	<title>MEDICATOR</title>
         <meta charset="UTF-8">
<!--     <meta http-equiv="refresh" content="40" />-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(
                    function()
                    {
                       
                     // va chercher le ctrl 
                      
                        $('#btnValider').click
                        (
                            function()
                            {
                                InsererPosologie();
                                alert('id medicament:'+$('#txtDepot').val()+' type prise     :'+$('#lstDosages option:selected').val()+' type individus:'+$('#lstTypes option:selected').val()+' saisie: '+$('#txtPoso').val());
                            }        
                        )
               
   

                        $('tr').click
                        (
                                function()
                        {
                          
                            $('#txtDepot').val($(this).children(0).eq(0).text());
                            $('#txtNom').val($(this).children(0).eq(1).text());
                            $('#txtFam').val($(this).children(0).eq(2).text());
                            $('#txtCompo').val($(this).children(0).eq(3).text());
                            $('#txtEffets').val($(this).children(0).eq(4).text());
                            $('#txtContre').val($(this).children(0).eq(5).text());
                            $('#txtPrix').val($(this).children(0).eq(6).text());
//                           //}
//                           
                        }
                        );
                       
                }
                
               );
        </script>
</head>
<body>
    <h1> Medicament séléctionné </h1>
        <label>Depot légal: </label> <input id="txtDepot" type="text"><br>
        <label>Nom Comercial: </label><input id="txtNom" type="text"><br>
        <label>Famille: </label><input id="txtFam" type="text"><br>
        <label>Composition: </label><input id="txtCompo" type="text"><br>
        <label>Effets: </label><input id="txtEffets" type="text"><br>
        <label>Contre indication: </label><input id="txtContre" type="text"><br>
        <label>Prix echantillon: </label><input id="txtPrix" type="text"><br>
       
        
        <select id="lstTypes" multiple=''>
                <?php 
                    foreach($lesTypesIndividusPosologie as $types)
                        {
                        $idIndividus = 0;
                        ?>
                <option name='optIndividu' value="<?php echo $types->TIN_CODE; ?>"><?php echo $types->TIN_LIBELLE; ?></option> 
                <?php
                        $idIndividus = $types->TIN_CODE + 1;
                        }                       
                ?>
            </select>
        <select id="lstDosages" multiple=''>
                <?php 
                    foreach($lesDosages as $dosages)
                        {
                        $idTypePrise = 0;
                        ?>
                <option name='optDosage' value="<?php echo $dosages->DOS_CODE; ?>"><?php echo $dosages->DOS_UNITE; ?></option> 
                <?php
                        $idTypePrise = $dosages->DOS_CODE;
                        }                       
                ?>
            </select>
        <label>Veuillez saisir la posologie (en mg ou en qté):</label><input id="txtPoso" type="text"><input id="btnValider" type="button" value="Valider">
        
        
        
    <table border="1.5">
            <thead>
                <tr> <th>Depot</th><th>Nom</th><th>Code</th><th>Composition</th><th>Effets</th><th>Contre-indication</th><th>Prix</th></tr>
            </thead>
                <?php 
                 
                    foreach($lesMedicamentsPosologie as $medicament)
                        {
                            
                        ?>
            <tbody>
                <tr>
                    <td><?php echo $medicament->MED_DEPOTLEGAL; ?></td>
                    <td><?php echo $medicament->MED_NOMCOMMERCIAL;?></td>
                    <td><?php echo $medicament->FAM_CODE;?></td>
                    <td><?php echo $medicament->MED_COMPOSITION;?></td>
                    <td><?php echo $medicament->MED_EFFETS;?></td>
                    <td><?php echo $medicament->MED_CONTREINDIC;?></td>
                    <td><?php echo $medicament->MED_PRIXECHANTILLON;?></td>
                </tr>

            </tbody>
                 <?php 

                        }                       
                ?>
        
        </table>
    <div id="div3"></div>
    <div id="div5"></div>

<a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Accueil </a>
</body>
</html>
