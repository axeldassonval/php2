 <html>
    <head>
        <title>Formulaire d'ajout d'un disque</title>
    </head>
    <body>
 
     <form action="<? = site_url('Disc/add') ?>" method="post">
        <input type="text" name="disc_title"><br>
        <input type="text" name="disc_year"><br>
        <input type="submit" value="Ajouter"><br>
    </form>
    </body>
    </html>