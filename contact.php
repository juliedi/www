<?php include('header.php') ?>

    <div class="container2"> <!-- Début de la div container -->
            <h5>Formulaire de Contact</h5>
            <p> Un commentaire? Une suggestion? Une question à nous poser? <br> N'hésitez pas à nous les transmettre par le biais du formulaire ci-dessous :</p>
        <form action="/action_page.php"> <!-- Début de la form -->
                <label for="fname">Votre Prenom</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre prenom">
                <label for="lname">Nom de Famille</label>
                <input type="text" id="lname" name="lastname" placeholder="Votre Nom de Famille">
                <label for="country">Pays</label>
                <select id="country" name="country">
                    <option value="france">France</option>
                    <option value="uk">United Kingdom</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="china">China</option>
                </select>
                <label for="subject">Votre message</label>
                <textarea id="subject" name="subject" placeholder="Pour nous en dire plus, c'est ici..." style="height:200px"></textarea>
            
                <input type="submit" value="Envoyer">
            </form> <!-- Fin de la form -->
        </div> <!-- Fin de la div container -->

        <?php include('footer.php') ?>

</body> <!-- Fin du Body -->
</html> <!-- Fin du html -->