<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase">

  <?php foreach($projects as $project): ?>

    <li class="showcase__item">
        <a href="<?= $project->url() ?>" class="item__link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="item__image" />
          <?php endif ?>
          <div class="showcase__caption">
            <h3 class="showcase__title"><?= $project->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>