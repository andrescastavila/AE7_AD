<script src = "https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
function getPerroInfo() {
var strRazaPerro = document.getElementById('message').value;
axios
.get("https://dog.ceo/api/breed/" + strRazaPerro + "/images/random")
.then(response => {
console.log(response.data);
document.getElementById('strName').value =
response.data.dog[0].strName;
document.getElementById('imagenPerro').src = response.data.dog[0].strDogThumb;
document.getElementById('imagenPerro').style.display = "block";
})
.catch(error => {
console.error(error);
document.getElementById('strName').value = "ERROR EN LA CONSULTA: " + error;
document.getElementById('imagenGrupo').style.display = "none";
});
}
</script>