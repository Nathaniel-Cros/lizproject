////Cóctel Shirley Temple----------------------------------------------------------------- que eldiv se quede estatico

function ver(){

var shirley = document.getElementById('shirley');
var flex = document.getElementById('flex');
var abrirs = document.getElementById('abrirs');
var cerrars = document.getElementById('closes');

abrirs.addEventListener('click', function(){
    shirley.style.display = 'block';
});

cerrars.addEventListener('click', function(){
    shirley.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        shirley.style.display = 'none';
    }
});
}
/*Cóctel San Francisco----------------------------------------------------------------- que eldiv se quede estatico
var francisco = document.getElementById('francisco');
var flex = document.getElementById('flex');
var abrirf = document.getElementById('abrirf');
var cerrarf = document.getElementById('closef');

abrirf.addEventListener('click', function(){
    francisco.style.display = 'block';
});

cerrarf.addEventListener('click', function(){
    francisco.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        francisco.style.display = 'none';
    }
});

//Margarita-----------------------------------------------
var margarita = document.getElementById('margarita');
var flex = document.getElementById('flex');
var abrirm = document.getElementById('abrirm');
var cerrarm = document.getElementById('closem');

abrirm.addEventListener('click', function(){
    margarita.style.display = 'block';
});

cerrarm.addEventListener('click', function(){
    margarita.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        margarita.style.display = 'none';
    }
});
//Gin and Tonic-------------------------------------------------------------------

var gin = document.getElementById('gin');
var flex = document.getElementById('flex');
var abrirg = document.getElementById('abrirg');
var cerrarg = document.getElementById('closeg');

abrirg.addEventListener('click', function(){
    gin.style.display = 'block';
});

cerrarg.addEventListener('click', function(){
    gin.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        gin.style.display = 'none';
    }
});
//Whisk-cola---------------------------------------------------------------------
var cola = document.getElementById('cola');
var flex = document.getElementById('flex');
var abrirw = document.getElementById('abrirw');
var cerrarc = document.getElementById('closec');

abrirw.addEventListener('click', function(){
    cola.style.display = 'block';
});

cerrarc.addEventListener('click', function(){
    cola.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        cola.style.display = 'none';
    }
});
//--Bellini--------------------------------
var bellini = document.getElementById('bellini');
var flex = document.getElementById('flex');
var abrirn = document.getElementById('abrirn');
var cerrarn = document.getElementById('closen');

abrirn.addEventListener('click', function(){
    bellini.style.display = 'block';
});

cerrarn.addEventListener('click', function(){
    bellini.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        bellini.style.display = 'none';
    }
});
//Martini seco----------------------------------
var martini = document.getElementById('martini');
var flex = document.getElementById('flex');
var abriri = document.getElementById('abriri');
var cerrari = document.getElementById('closei');

abriri.addEventListener('click', function(){
    martini.style.display = 'block';
});

cerrari.addEventListener('click', function(){
    martini.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        martini.style.display = 'none';
    }
});
//---Cuba libre---------------------------------------
var cuba = document.getElementById('cuba');
var flex = document.getElementById('flex');
var abrira = document.getElementById('abrira');
var cerrara = document.getElementById('closea');

abrira.addEventListener('click', function(){
    cuba.style.display = 'block';
});

cerrara.addEventListener('click', function(){
    cuba.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        cuba.style.display = 'none';
    }
});
//Daiquiri-------------------------------------
var dalquiri = document.getElementById('dalquiri');
var flex = document.getElementById('flex');
var abrird = document.getElementById('abrird');
var cerrard = document.getElementById('closed');

abrird.addEventListener('click', function(){
    dalquiri.style.display = 'block';
});

cerrard.addEventListener('click', function(){
    dalquiri.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        dalquiri.style.display = 'none';
    }
});*/

//cuenta-------------------------------------
var cuenta = document.getElementById('cuenta');
var flex = document.getElementById('flex');
var cuentap = document.getElementById('cuentap');
var cerrarpa = document.getElementById('closepa');

cuenta.addEventListener('click', function(){
    cuentap.style.display = 'block';
});

cerrarpa.addEventListener('click', function(){
    cuentap.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        cuentap.style.display = 'none';
    }
});

// -----------------------------------------------------------------------------mostrar pregunta de si desea dividir la cuenta
function cocteles(){
 	location.href="cocteles.php"
}
function limonadas(){
 	location.href="limonadas.php"
}
function carnes(){
	location.href="carnes.php"
}
function pastas(){
	location.href="pastas.php"
}
function ensaladas(){
	location.href="ensaladas.php"
}
function tartas(){
	location.href="tartas.php"
}

//funcionespara ver y ocultar lossubmenus
function ver_submenu(n) {
    document.getElementById("subseccion"+n).style.display="block"
}
function ocultar_submenu(n) {
    document.getElementById("subseccion"+n).style.display="none"
}