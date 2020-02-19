<!-- include le head et le header... -->
<?php include("top.php") ?>

<!--Creation du block Contact-->
<div id="Contact" class="stylecontact">
    <h3 class ="titre">Contact</h3>
    <!--le formulaire de contact-->
    <form>

        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">   
        </div>

        <div class="form-group">
            <label for="inputName">Entreprise</label>
            <input type="text" class="form-control" id="Entreprise">
        </div>

        <div class="form-group">
            <label for="inputAddress2">Nom/Prénom</label>
            <input type="text" class="form-control" id="Nom/Prénom" >
        </div>

        <div class="form-group">
            <label for="inputAddress2">Objet</label>
            <input type="text" class="form-control" id="objet" >
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <?php
			
			    //affiche les éventuelles erreurs de validations
			    if (!empty($errors)) {
			    	foreach ($errors as $error) {
			    		echo '<div>' . $error . '</div>';
			    	}
			    }
			  ?>
        <button type="submit" class="btn btn-primary">Soumettre</button>
      </form>
</div>
</body>

<!-- inclue le footer et les fermetures de balises -->
<?php include("footer.php") ?>