<?php
$post= [
'title' => 'Unfaux titre.',
'french_creation_date' => '03/03/2022 12h14min42s',
'content' =>"Le fauxcontenu demon billet.\nC'estfantastique!",
];
$comments =[
[
'author' => 'Unpremier fauxauteur',
'french_creation_date' => '03/03/2022 12h15min42s',
'comment' => 'Unfauxcommentaire.\n Lepremier.',
],
[
'author' => 'Unsecond fauxauteur',
'french_creation_date' => '03/03/2022 12h16min42s',
'comment' => 'Unfauxcommentaire.\n Lesecond.',
],
];
require('templates/post.php');