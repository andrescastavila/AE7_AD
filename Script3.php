<script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type = "text/javascript">
function guardar() {
$.ajax({
type: "POST", //metode POST per a enviar dades al servidor
url: "/Scrpit2.php", // ruta del fitxer PHP del servidor
data: datos, // dades a enviar (p.ex. {valor:valor, nom:nom})
success: function (response) { //resultat del PHP del servidor
alert(response);
},
error: function () {
alert(“Error”);
}
});
}
</script>