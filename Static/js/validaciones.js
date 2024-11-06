var expreEmail = /^[a-zA-Z0-9_.+-]+@upemor\.edu\.mx$/;


function validacion(){

    if( Document.getElementById("usuario").length < 16 || 
        Document.getElementById("usuario").length > 16 || 
        expreEmail.test(Document.getElementById("usuario").value) == false){
        Document.getElementById("usuario").focus();
        Document.getElementById("aema").display = "block !important";
        return false;
    }

}