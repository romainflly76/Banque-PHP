let httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {
    
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        
        // paragraphe id contenu est remplacé par innerText le contenu de DATA/ PopUP
        if (httpRequest.status === 200) { 
            let p = document.getElementById("contenu");
            p.innerText = httpRequest.responseText; 
        
        } else {
            console.log("une erreur est survenue")
        }
    } else {
        console.log("chargement en cours")
    }
};

httpRequest.open('GET', 'Data/Popup.txt'); 
httpRequest.send();