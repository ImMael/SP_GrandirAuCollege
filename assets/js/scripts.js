// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
        document.getElementById("entete").style.height = "100px";
        $('#logoEntete').attr('src','images/logo1436x268.png');

    } else {
        console.log("je repasse en 250");
        document.getElementById("entete").style.height = "250px";
        $('#logoEntete').attr('src','images/Logo250X150.png');
    }
}