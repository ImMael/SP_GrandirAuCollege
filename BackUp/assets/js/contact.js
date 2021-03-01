

function submitContactForm(event){
    // Initiate Variables With Form Content
    event.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    formSuccess();
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}