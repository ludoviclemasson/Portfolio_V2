<?php 

class Controller 
{
    public function acceuil()
    {
        include("templates/accueil.php");
    }
    public function cv()
    {
        include("templates/cv.php");
    }
    public function cgu()
    {
        include("templates/cgu.php");
    }
    public function cursus()
    {
        include("templates/cursus.php");
    }
    public function portfolio()
    {
        include("templates/portfolio.php");
    }
    public function mecontacter()
    {
        include("templates/mecontacter.php");
    }
    public function fourofour()
    {
        include("templates/404.php");
    }

}
    

?>