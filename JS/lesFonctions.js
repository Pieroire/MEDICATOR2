function InsererTypeIndividu()
{
        //alert('toto');
        $.ajax 
        (
            {
                type:"post",
                url:"InsertionLeTypeIndividu",
                data:"libelle="+$('#txt1').val()+"&code="+$('#p1').text(),
                success:function(data)
                {
                    $('#divTypesIndividus').empty();
                    $('#divTypesIndividus').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        );   
}
function ModifierTypeIndividu()
{
    $.ajax
    (
        {
                type:"post",
                url:"ModificationLeTypeIndividu",
                data: "nvlibelle="+$('#txt1').val()+"&code="+$('#lstTypes option:selected').val(),
                success:function(data)
                {
                    $('#div2').empty();
                    $('#div2').append(data);
                },
                error:function()
                {
                    //alert('Erreur pendant la modication!');
                   // alert($('#txt1').val()+" "+$('#lstTypes option:selected').val());
                }
        }
    );
}
function InsererMedicament()
{
    $.ajax
    (
            {
                type:"post",
                url:"InsertionLeMedicament",
                data:"depot="+$('#txtDepot').val()+"&nom="+$('#txtNom').val()+"&famille="+$('#txtFam').val()+"&composition="+$('#txtCompo').val()+"&effets="+$('#txtEffets').val()+"&contre="+$('#txtContre').val()+"&prix="+$('#txtPrix').val(),
                success:function(data)
                {
                    $('#div1').empty();
                    $('#div1').append(data);
                },
                error:function()
                {
                    //alert('Erreur pendant la modication!');
                   // alert($('#txt1').val()+" "+$('#lstTypes option:selected').val());
                }
            }
    );
}
function ModifierMedicament()
{
    $.ajax
    (
        {
                type:"post",
                url:"ModificationLeMedicament",
                data: "depot2="+$('#txtDepot').val()+"&nom2="+$('#txtNom').val()+"&famille2="+$('#txtFam').val()+"&composition2="+$('#txtCompo').val()+"&effets2="+$('#txtEffets').val()+"&contre2="+$('#txtContre').val()+"&prix2="+$('#txtPrix').val(),
                success:function(data)
                {
                    $('#div2').empty();
                    $('#div2').append(data);
                },
                error:function()
                {
                    //alert('Erreur pendant la modication!');
                   
                }
        }
    );
}