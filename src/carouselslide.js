$next = document.getElementById("next");


//$prev= document.getElementById("prev");
//$prev.addEventListener('click', Prev());

function Next(){
    $('#carouselpages').carousel('next');
    $('#carousel2pages').carousel('next');
    $('#carousel3pages').carousel('next');
    $('#carousel4pages').carousel('next');
    $('#carousel5pages').carousel('next');
}
function Prev(){
    $('#carouselpages').carousel('prev');
    $('#carousel2pages').carousel('prev');
    $('#carousel3pages').carousel('prev');
    $('#carousel4pages').carousel('prev');
    $('#carousel5pages').carousel('prev');
}