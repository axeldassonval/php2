$(document).ready(function()
{
    $("#cat_id").change(function()
    {
        var sous_cat = $(this).val();
        $.post({
            url: "ajout_json.php",
            data:{id:sous_cat},
            dataType: "json",
            success: function(reponse)
            {
                var contenu= "";
                $.each(reponse, function(key,val)
                {
                    contenu += "<option value='"+val.cat_id+"'>"+val.cat_nom+"</option>\n";
                });

                console.log(contenu);

                $("#sous_cat").html(contenu);
            }
        });
    });
});