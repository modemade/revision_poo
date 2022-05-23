<?php
include 'model/mode_article.php';
include 'utils/connectBdd.php';
include 'views/view_show_all_article.php';

$article = new Article(null,null);
$list= $article->showAllArticle($bdd);

    foreach($list as $value){
        echo '<p>l\'article est égal à : '.$value->nom_art.' 
        le prix est est égal à :'.$value->content_art.'</p>';
    }
?>