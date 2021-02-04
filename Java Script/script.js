var x=10;
var hola="Hola";

document.getElementById("btnCalcular").addEventListener('clicl',function(){
   var xxxx=document.getElementById("txtNombre");
   console.log(xxxx)
   if(xxxx.value == ""){
     xxxx.style.backgroundColor="red";
     xxxx.style.color="white";  
   }else{
       xxxx.style.backgroundColor="green";
     xxxx.style.color="white";  
     document.getElementById("miTexto").innerHTML = "Bienvenido"+xxxx.value;
     xxxx.value="";
   }
   
});
document.getElementById("txtNombre").addEventListener('keyup', function(){
    var xxxx=document.getElementById("txtNombre");
});
function mifuncion(){
    var todo="";
    for(var y=0;y<x;y++){
        todo=todo+"<button>Hola soy el mapa"+x+"<button>"
    } 
     document.getElementById("miTexto").innerHTML=todo;
     x++;
}