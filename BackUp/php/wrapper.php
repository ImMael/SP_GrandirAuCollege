<?php

?>

<div class="wrapper container">

     <!-- sidebar -->
    <?php
    include "sidebar.php";
    ?>

    <!-- End sidebar -->

    <!-- Dark overlay -->
    <div class="overlay"></div>

    <!-- ENTETE ----------------------------------------->
   <!-- <header id="entete" class="flex-column flex-md-row ">
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-justify"></i> <span></span>
        </a>
        <div class="flex-column flex-md-row "></div>
        <img  id="logoEntete" src="images/Logo250X150.png" alt= "Grandir au collège" id="logo"  />
    </header>-->
    <?php
    include "entete.php";
    ?>
    <!-- FIN ENTETE ----------------------------------------->



    <!-- Content -->
    <div class="content container">

        <section>
           <?php
           if ($_GET['page'] == 'college'){
               include "college.php";
           }elseif ($_GET['page']=='prescripteur'){
               include "prescripteur.php";
           }elseif ($_GET['page']=='parents'){
               include "parents.php";
           }
           elseif ($_GET['page'] == 'contact'){
               include "contact/modalContact.php";
           }
           else {
               include 'accueil.php';
           }
           include "contact/modalContact.php"
            ?>

        </section>



    </div>
    <!-- ... -->

</div>
<!-- End content -->

</div>
<?php
include "footer.php";
?>
    </div>



<!-- End wrapper -->