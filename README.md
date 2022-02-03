
# Interface de gestion de jeux vidéo

Je souhaite gérer moi-même mon nombre insolent de jeux vidéo en ma possession, et ce, depuis mon premier Tetris sur GameBoy.

J'ai déjà créé la base de donnée. Mais en fait, je ne sais rien faire d'autre, _je comprends rien_.

Un pote connaissant un peu HTML, bootstrap et PHP m'a fourni le code me permettant de gérer mes jeux vidéo. Merci poto :wink:

Cependant, il ne comprend rien à SQL, et il m'a laissé plein de `TODO` :scream:

Sympas comme vous êtes, vous allez bien me faire fonctionner tout ça ? :smile:

## Avant de coder

Mon pote m'a donné les consignes suivantes à suivre avant de coder :

1. créer la base de données `videogame` sur votre machine (avec le user correspondant)
2. importer le fichier [videogame.sql](docs/videogame.sql)

## Fonctionnalités

 1. affichage de la liste des jeux vidéo (`TODO #1`)
 2. tri de cette liste (`TODO #2`)
 3. ajout d'un jeu vidéo (`TODO #3`)
 4. liste des plate-formes (consoles de jeu) dynamique (depuis la DB) (`TODO #4`)

## Bonus

Dans le code, il y a plusieurs parties _"optionnelles"_. Ce serait top si vous pouviez me les faire, mais bon, ce n'est pas obligatoire :wink:

## Indices

<details><summary>Indices</summary>

- ce challenge peut être considéré comme un _code "à trou"_
- donc, avant de coder, il faut bien analyser et comprendre le code existant
- l'astuce, c'est de coder les fonctionnalités les unes après les autres grâce aux `TODO #x`

</details>

## Spoilers

<details><summary>Boucle pour afficher les jeux vidéo</summary>

```php
<?php foreach ($videogameList as $currentRow) : ?>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<?php endforeach; ?>
```

</details>


<details><summary>Boucle pour afficher les jeux vidéo + affichage</summary>

```php
<?php foreach ($videogameList as $currentRow) : ?>
<tr>
	<td><?= $currentRow['id'] ?></td>
	<td><?= $currentRow['name'] ?></td>
	<td><?= $currentRow['editor'] ?></td>
	<td><?= $currentRow['release_date'] ?></td>
	<td><?= $currentRow['????'] ?></td>
</tr>
<?php endforeach; ?>
```

</details>
