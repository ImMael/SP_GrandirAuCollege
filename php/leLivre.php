<h2>Votre outil préféré</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo veniam, aperiam harum iusto id aut atque
    inventore nihil dolores amet suscipit dolorem minima modi est hic distinctio sapiente similique recusandae!</p>

<div id="book" class="container">
    <div id="book1" class="row">

        <div id="bookcover" class="container col-sm">
            <img src="../images/51xWx9pvpf.jpg">
            <div id="pagesmini" class="row">
                <div id="page1mini">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modalPages"
                            onclick="$('#carouselpage1').addClass('active');
                            $('#carouselpage2').removeClass('active');
                            $('#carouselpage3').removeClass('active');
                            ">
                        <img src="../images/bookpages/page1mini.jpg" class="col">
                    </button>

                </div>
                <div id="page2mini">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modalPages"
                            onclick="$('#carouselpage2').addClass('active');
                            $('#carouselpage1').removeClass('active');
                            $('#carouselpage3').removeClass('active');">
                        <img src="../images/bookpages/page2mini.jpg" class="col">
                    </button>
                </div>
                <div id="page3mini">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modalPages"
                            onclick="$('#carouselpage3').addClass('active')"
                            onclick="$('#carouselpage3').addClass('active');
                        $('#carouselpage1').removeClass('active');
                        $('#carouselpage3').removeClass('active');">
                        <img src="../images/bookpages/page3mini.jpg" class="col">
                    </button>
                </div>
            </div>
        </div>

        <div id="bookcdesc" class="col-sm">
            UN CARNET DE BORD POUR ADOS QUI PERMET DE :
            <ul>
                <li>Donner du sens aux apprentissages et s'organiser</li>
                <li>Mieux se connaître et comprendre ses émotions</li>
                <li>Se poser des questions sur son environnement familial et amical</li>
                <li>Décoder ses premiers émois amoureux</li>
                <li>Gérer ses écrans et bien les utiliser</li>
                <li>Identifier des solutions pour être bien dans sa tête et bien dans ses baskets</li>
                <li>Savoir pourquoi on dit oui ou non à la cigarette ou l'alcool</li>
            </ul>
            <div class="photocontainer">
                <div class="row">
                    <div class="col-sm-6 text-center" >
                        <img src="../images/riri-mini.png">
                        <p class="equipier">L'auteure</p>
                        <p><b>Marie-Christelle</b> est spécialiste en prévention santé des jeunes. Elle prône une éducation à la santé par le choix en pleine conscience et la connaissance de soi. L'illustratrice : Justine, graphiste dans l'enseignement supérieur aime travailler sur toutes sortes de supports. Elle dynamise ce carnet avec beaucoup de talent et un univers créatif hors du commun !</p>
                    </div>
                    <div class="col-sm-6 text-center" >
                        <img src="../images/riri-mini.png">
                        <p class="equipier">L'illustratrice</p>
                        <p>texte 2</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6  text-center">
                        <img src="../images/riri-mini.png">
                        <p class="equipier">La community manager</p>
                        <p>texte 3</p>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</div>
<?php
include("carrouselPages.php");
?>


<!-- <div id="bookdetails" class ="row col12">
 <ul>
     <li>Éditeur : Iggybook (4 juin 2020)</li>
     <li>Langue : Français</li>
     <li>Broché : 160 pages</li>
     <li>ISBN-10 : 2379791902</li>
     <li>ISBN-13 : 978-2379791901</li>
     <li>Âge de lecture : 6 années et plus</li>
 </ul>
 </div>-->
