function inscriu(llista){

    console.log("id: " + llista)

    let nom;

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };

    xhttp.open("GET", "pelicules.xml", true);
    xhttp.send();

    function myFunction(xml){
        var xmlDoc = xml.responseXML;
        nom = xmlDoc.getElementsByTagName("titol")[0].childNodes[0].nodeValue;
    }

    console.log(llista + " " + nom)

    
}