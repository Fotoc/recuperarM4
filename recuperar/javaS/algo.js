imprimir();
function imprimir() {

    document.getElementById("llista").addEventListener('click', () => {
        inscriu();

        function inscriu() {

            let nom;

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    myFunction(this);
                }
            };

            xhttp.open("GET", "pelicules.xml", true);
            xhttp.send();

            function myFunction(xml) {
                var xmlDoc = xml.responseXML;
                nom = xmlDoc.getElementsByTagName("any")[0].childNodes[0].nodeValue;
            }

            console.log(" " + nom)

        }

        console.log("Inscripcío realitzada");

    })
}