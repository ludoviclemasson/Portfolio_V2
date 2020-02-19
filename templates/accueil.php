<!-- include le head et le header... -->
<?php include("top.php") ?>

<!--Creation du block accueil-->
<div id="Accueil" class="accueil">
    <h1>Ludovic LEMASSON</h1><br>
    <img class="rounded mx-auto d-block"  src="image/photoprofil.jpg" style="max-width: 10%">
    <h3>Bienvenue</h3>
    <a href="index.php?page=cv" type="submit" class="btn btn-outline-light">Mon cv</a>
</div>   
    <div>     
        <p class="presentation">Je suis ludovic LEMASSON, issu d'un bac pro commerce et après quatres année dans le commerce et la logistique, je me reconverti dans l'informatique. Aujourd'hui je suis étudiant en informatique, à la Campus Academy dans le but de devenir développeur.</p> 
        <section class="d-flex  justify-content-between" >
            <article class="card mb-4" style="width: 18rem;">
              <img class="card-img-top" src="image/wikipost.png" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">Wikipost est un projet que j'ai realiser en cours de PHP. Son concepte est un site de rédaction et de consultation d'article participatif avec un système de login.</p>
                  <a href="https://github.com/ludoviclemasson" class="btn btn-primary">En voir plus</a>
              </div> 
            </article>
        </section>
    </div>  


<!-- inclue le footer et les fermetures de balises -->
<?php include("footer.php") ?>