
<div class="characters">
<?php foreach($viewData['characters'] as $character) : ?>

<h2><?= $character->getName() ?></h2>

<h3>character type</h3>
<?php var_dump($absoluteUrl."/".$character->getPicture());?>
<img src="<?= $absoluteUrl."./".$character->getPicture() ?>" alt="character picture"> 

<p><?= $character->getDescription() ?></p>
<?php endforeach; ?>
</div>
