// Quantidade de hóspedes
function changeQnt(){
    qnt = document.getElementById("qntInput");
    if(qnt.value>9)
        qnt.value=9;
    else if(qnt.value<1)
        qnt.value=1;
}

// Número do documento
function clearDoc(idDoc){
    document.getElementById(idDoc).value='';
}


