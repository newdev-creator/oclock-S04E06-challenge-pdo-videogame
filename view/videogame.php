<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Jeux vidéos</title>
  </head>
  <body>
    <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Mes jeux vidéos</h1>
            <p class="lead">Voici une petite interface toute simple (grâce à bootstrap) permettant de visualiser les jeux vidéos de ma base de données, mais aussi de les ajouter !</p>
        </div>
        <h1></h1>
        <div class="row">
            <div class="col-12 col-md-8">
                <a href="index.php?order=name" class="btn btn-primary">Trier par nom</a>&nbsp;
                <a href="index.php?order=editor" class="btn btn-info">Trier par éditeur</a>&nbsp;
                <!-- TODO #2 (optionnel) n'afficher ce bouton que s'il y a un tri -->
                <!-- --- START OF YOUR CODE --- -->
                <a href="index.php" class="btn btn-dark">Annuler le tri</a><br>
                <!-- --- END OF YOUR CODE --- -->
                <br>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">&Eacute;diteur</th>
                        <th scope="col">Date de sortie</th>
                        <th scope="col">Console / Support</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- TODO #1 boucler sur le tableau $videogameList contenant tous les jeux vidéos
                    (et donc supprimer ces 2 lignes d'exemple) -->
                    <?php foreach ($videogameList as $videogame) : ?> 
                    <!-- --- START OF YOUR CODE --- -->
                    <tr>
                        <td><?= $videogame['id']?></td>
                        <td><?= $videogame['name']?></td>
                        <td><?= $videogame['editor']?></td>
                        <td><?= $videogame['release_date']?></td>
                        <td><?= $videogame['platform_id']?></td>
                    </tr>
                    <?php endforeach; ?>

                    <!-- --- END OF YOUR CODE --- -->
                </tbody>
                </table>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">Ajout</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="editor">&Eacute;diteur</label>
                                <input type="text" class="form-control" name="editor" id="editor" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="release_date">Date de sortie</label>
                                <input type="date" class="form-control" name="release_date" id="release_date" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="form-group">
                                <label for="platform">Console / Support</label>
                                <select class="custom-select" id="platform" name="platform">
                                    <option>-</option>
                                    <?php foreach ($platformList as $currentPlaformId=>$currentPlatformName) : ?>
                                    <option value="<?= $currentPlaformId ?>"><?= $currentPlatformName['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
