

<html>
    <head>
        <title>Medicaments</title>
        <meta charset="UTF-8">
<!--     <meta http-equiv="refresh" content="40" />-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(
                    function()
                    {
                        $('#btn1').click
                    (
                        function()
                        {  
                           // alert($('#txtEffets').val());
                            InsererMedicament();
                          
                        }
                    ); 
                       
   

                        $('tr').click
                        (
                                function()
                        {
                           //for (var i=0; i <this.length; i++) {
                           // compt = 0;
                           // il me suffira d'ajouter normalement, pour chaque txt: $('#txtDepot').val($('#tdA0<?phpcompt++?>').text());
                            $('#txtDepot').val($(this).children(0).eq(0).text());
                            $('#txtNom').val($(this).children(0).eq(1).text());
                            $('#txtFam').val($(this).children(0).eq(2).text());
                            $('#txtCompo').val($(this).children(0).eq(3).text());
                            $('#txtEffets').val($(this).children(0).eq(4).text());
                            $('#txtContre').val($(this).children(0).eq(5).text());
                            $('#txtPrix').val($(this).children(0).eq(6).text());
//                           //}
//                            alert("Sa fonctionne"+$('#tdA0').text()+$('#txtDepot').val());
                             
                            //alert($(this).children(0).eq(3).text());
                        }
                        );
                        $('#btn2').click
                    (
                        function()
                        {  
                           // alert($('#txtEffets').val());
                            ModifierMedicament();
                          
                        }
                    ); 
                  
                }
                
               );
        </script>
    </head>
    <body>
        
        <input id="idMedicament" hidden="" value="">
        
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> <img src = "<?php echo base_url();?>Image/logo.png"></a><br>
        <h1> Medicaments </h1>
        <label>Depot légal: </label> <input id="txtDepot" type="text"><br>
        <label>Nom Comercial: </label><input id="txtNom" type="text"><br>
        <label>Famille: </label><input id="txtFam" type="text"><br>
        <label>Composition: </label><input id="txtCompo" type="text"><br>
        <label>Effets: </label><input id="txtEffets" type="text"><br>
        <label>Contre indication: </label><input id="txtContre" type="text"><br>
        <label>Prix echantillon: </label><input id="txtPrix" type="text"><br>
        <input id="btn1" type="button" value="Inserer">
        <input id="btn2" type="button" value="Modifier">

        <table border="1.5">
            <thead>
                <tr> <th>Depot</th><th>Nom</th><th>Code</th><th>Composition</th><th>Effets</th><th>Contre-indication</th><th>Prix</th></tr>
            </thead>
                <?php 
                 //$val = 0;
                    foreach($lesMedicaments as $medicament)
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
<!--                <tr><td id="tdA<?php echo $val; ?>"><?php echo $medicament->MED_DEPOTLEGAL; ?></a></td><td id="tdB<?php echo $val; ?>"><?php echo $medicament->MED_NOMCOMMERCIAL;?></td><td id="tdC<?php echo $val; ?>"><?php echo $medicament->FAM_CODE;?></td><td id="tdD<?php echo $val; ?>"><?php echo $medicament->MED_COMPOSITION;?></td><td id="tdE<?php echo $val; ?>"><?php echo $medicament->MED_EFFETS;?></td><td id="tdF<?php echo $val; ?>"><?php echo $medicament->MED_CONTREINDIC;?></td><td id="tdG<?php echo $val; ?>"><?php echo $medicament->MED_PRIXECHANTILLON;?></td></tr>-->
            </tbody>
                 <?php 
                      //$val++ ;
                        }                       
                ?>
        
        </table>
        
        <div id="div1"></div>
        <div id="div2"></div>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetAllMedicamentsContreIndication"> Contre Indication </a><br>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicamentsPosologie"> Posologie </a><br>
        <br><br> <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Accueil </a> 
    
    </body>
</html>
<!--        <select id="lstMedic" multiple >
                <?php 
                    foreach($lesMedicaments as $medicament)
                        {
                        ?>
            <option id="optPrincipal" value="<?php echo $medicament->MED_DEPOTLEGAL; ?>">   <?php echo $medicament->MED_DEPOTLEGAL; ?>   <?php echo $medicament->MED_NOMCOMMERCIAL;?>   <?php echo $medicament->FAM_CODE;?>   <?php echo $medicament->MED_COMPOSITION;?>   <?php echo $medicament->MED_EFFETS;?>   <?php echo $medicament->MED_CONTREINDIC;?>   <?php echo $medicament->MED_PRIXECHANTILLON;?></option> 
            <option id="optDepot" hidden> <?php echo $medicament->MED_DEPOTLEGAL; ?> </option>
            <option id="optNom" hidden> <?php echo $medicament->MED_NOMCOMMERCIAL;?> </option> 
            <option id="optFam" hidden> <?php echo $medicament->FAM_CODE;?> </option> 
            <option id="optCompo" hidden> <?php echo $medicament->MED_COMPOSITION;?> </option> 
            <option id="optEffets" hidden> <?php echo $medicament->MED_EFFETS;?> </option> 
            <option id="optContre" hidden> <?php echo $medicament->MED_CONTREINDIC;?> </option>
            <option id="optPrix" hidden> <?php echo $medicament->MED_PRIXECHANTILLON;?> </option> 
                <?php 
                        }                       
                ?>
        
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicaments"></select>-->