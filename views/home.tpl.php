
<div class="characters">
<?php foreach($viewData['characters'] as $character) : ?>

<h2><?= $character->getName() ?></h2>

<h3>character type</h3>

<img src="<?= $absoluteUrl."/"."assets/"."images/".$character->getPicture() ?>" alt="character picture"> 

<p><?= $character->getDescription() ?></p>
<?php endforeach; ?>
</div>
