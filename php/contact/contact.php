<?php
?>


<!--***************FORMULAIRE DE CONTACT ******************-->
<div id="contact" class="container-fluid">
    <form role="form" id="contactForm" onsubmit="submitContactForm(event)">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Vous êtes :</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <?php
                  if ($_GET['page'] == 'college')
                  {
                      echo '<option value="1">Un collège</option>
                    <option value="2">Un parent</option>
                    <option value="3">Un ado</option>
                    <option value="4">Un prescripteur</option>';
                  }elseif ($_GET['page'] == 'parents'){
                      echo '<option value="1">Un parent</option>
                    <option value="2">Un collège</option>
                    <option value="3">Un ado</option>
                    <option value="4">Un prescripteur</option>';
                  }elseif ($_GET['page'] == 'prescripteur'){
                      echo '<option value="1">Un prescripteur</option>
                    <option value="2">Un collège</option>
                    <option value="3">Un ado</option>
                    <option value="4">Un parent</option>';
                  }else{
                      echo '<option value="1">Un ado</option>
                    <option value="2">Un collège</option>
                    <option value="3">Un prescripteur</option>
                    <option value="4">Un parent</option>';
                  }
                ?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Votre nom</label>
                <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Votre email</label>
                <input type="email" class="form-control" id="email" placeholder="Votre email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5"
                      placeholder="Entrez votre message ou vos questions ici" required></textarea>
        </div>
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right "
                style="background-color: #3498db ">Envoyer
        </button>
        <button type="button" class="btn btn-secondary btn-lg pull-right" data-dismiss="modal">Annuler
        </button>
        <div id="msgSubmit" class="h3 text-center hidden">Message envoyé !</div>
        <!--***************FIN FORMULAIRE DE CONTACT ******************-->
    </form>
</div>
