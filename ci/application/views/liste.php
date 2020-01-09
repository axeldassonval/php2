<!DOCTYPE html>
<html lang="fr">
<head>

        <!--connexion css-->
        <link rel="stylesheet" href="css/style.css" />
                <!-- lien boostrap-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!--meta de compréhension symbole-->
        <meta charset="utf-8" />
        <!--meta d'hadaptation de reduction taille de pages-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--titre de page-->
        <title>Jarditou</title>
</head>
<body>
        <style>
        table, th, td {
          border: 1px solid black;border-collapse:collapse
        }
        </style>
    <h1>Liste des produits</h1>
    <section    >
        <div  class="table-responsive ">
            <table width="100%" height="100%" class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <td colspan="1">Photo</td>
                        <td colspan="1">ID</td>
                        <td colspan="1">Ref</td>                            
                        <td colspan="1">Libélé</td>
                        <td colspan="1">Prix</td>
                        <td colspan="1">Stock</td>
                        <td colspan="1">Couleur</td>
                        <td colspan="1">Ajout</td>
                        <td colspan="1">Modification</td>
                        <td colspan="1">Bloquer</td> 
                        <td colspan="1">Description</td>         
                    </tr>
                </thead>
                <tbody>  
                    <a href=".$lien."></a>
                    <?php 
                    foreach ($liste_produits as $row) 
                    { 

                        $lien = site_url("produits/modif/".$row->pro_id);
                        $path = base_url("assets/image/".$row->pro_id.".".$row->pro_photo);
                        echo"<tr>";
                        echo"<td><a href='".$lien."'><img src='".$path."'width= \"100\" height= \"auto\"></a></td>";
                        echo"<td name='id'><a href='".$lien."'>".$row->pro_id."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_ref."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_libelle."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_prix."€"."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_stock."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_couleur."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_d_ajout."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_d_modif."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_bloque."</a></td>";
                        echo"<td><a href='".$lien."'>".$row->pro_description."</td>";  
                        echo"</tr>";   
                     }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--fin de body-->  
</body>
</html>