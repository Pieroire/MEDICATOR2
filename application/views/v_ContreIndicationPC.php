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
                       

                        $('tr').click
                        (
                                function()
                        {
                            //alert('coucou');
                            
                         // AfficherContreIndic();
                           $('#txtDepot').val($(this).children(0).eq(0).text());
//                            $('#txtNom').val($(this).children(0).eq(1).text());
//                            $('#txtFam').val($(this).children(0).eq(2).text());
//                            $('#txtCompo').val($(this).children(0).eq(3).text());
//                            $('#txtEffets').val($(this).children(0).eq(4).text());
//                            $('#txtContre').val($(this).children(0).eq(5).text());
//                            $('#txtPrix').val($(this).children(0).eq(6).text());
//                           //}
                        alert('sa fonctionne'+ $('#txtDepot').val());
                          AfficherContreIndic();
                          
                          
                        }
                        );
                       
                }
                
               );
        </script>
</head>
<body>
    <h1> Contre Indication d'un médicament</h1>
    
    <input id="txtDepot" type="text" hidden>

    <div id="divContre"></div>
    
    
    <table border="1.5">    
            <thead>
                <tr> <th>Depot</th><th>Nom</th></tr>
            </thead>
                <?php 
                 
                    foreach($lesMedicaments as $medicament)
                        {
                            
                        ?>
            <tbody>
                <tr>
                    <td><?php echo $medicament->MED_DEPOTLEGAL; ?></td>
                    <td><?php echo $medicament->MED_NOMCOMMERCIAL;?></td>
                    <td><input type="button" value=" "></td>
                    <td hidden><?php echo $medicament->FAM_CODE;?></td>
                    <td hidden><?php echo $medicament->MED_COMPOSITION;?></td>
                    <td hidden><?php echo $medicament->MED_EFFETS;?></td>
                    <td hidden><?php echo $medicament->MED_CONTREINDIC;?></td>
                    <td hidden><?php echo $medicament->MED_PRIXECHANTILLON;?></td>
<!--                    <td><input type="button" value="Afficher"></td>-->
                </tr>

            </tbody>
                 <?php 

                        }                       
                ?>
        
        </table>


   
<a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Accueil </a>
</body>
</html>
