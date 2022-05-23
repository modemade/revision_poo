<?php
class Article {
    protected $id_art;
    protected $nom_art;
    protected $content_art;

    public function __constructor(){

    }   
    public function getIdArt(){
        return $this->id_art;
    }

    public function getNomArt()
    {
        return $this->nom_art;
    }
    public function getContentArt(){
        return $this->content_art;
    }
    public function setIdArt($id_art){
        $this->id_art = $id_art;
    }
    public function setNomArt($nom_art){
        $this->nom_art = $nom_art;
    }
    public function setContentArt($content_art){
        $this->content_art = $content_art;
    }

    public function showAllArticle($bdd):array{
        try{
            $req = $bdd->prepare('SELECT * FROM article');
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

}

?>