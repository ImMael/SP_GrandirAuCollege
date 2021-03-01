<?php
?>



<div class="modal " id="modalContact" tabindex="-1" role="dialog" data-backdrop="static"
     aria-labelledby="modalContactabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalContactLabel">Votre demande</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--***************FORMULAIRE DE CONTACT ******************-->
                <?php
                include "contact.php";
                ?>
                <!--***************FIN FORMULAIRE DE CONTACT ******************-->

            </div>
        </div>
    </div>
</div>