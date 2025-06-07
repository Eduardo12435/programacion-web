//funciones.js

function saludo(){
	document.write("\
		<h1>Ejemplo de saludos</h1>\
			<ol>\
				<li>hola</li>\
				<li>¿qué hay?</li>\
				<li>whats up?</li>\
			</ol>");
}

function crearArrayTradicional(){
	let primos = [1, 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31];

	const divArregloTradicional = document.getElementById("divArrayIndice");
	//innerHTML, innerText, textContent
	divArregloTradicional.innerHTML= "<hr>    <strong>   Arreglo          de   primos = 		</strong>" + primos + "<hr>";
}


function arrayAsociativo (){

	const alumno = new Array();
	alumno["nombre"] = "Juán";
	alumno["apellidoPat"] = "Sánchez";
	alumno["apellidoMat"] = "Pérez";
	alumno["semestre"] = 6;
	alumno["regular"] = true;
	alumno.direccion = new Array;
	alumno.direccion.calle = "Av.Insurgentes";
	alumno.direccion.numExterior = 330;
	alumno.direccion.colonia= "David Gustavo Gutiérrez";
	alumno.direccion.cp = 77010
 
 	//Notacion JSON Java Script Object Notation literales
let nuevoAlumno = {
	nombre : "Erick",
	apellidoPat : "Solorio",
	apellidoMat: "Gutierez",
	semestre: 6,
	regular: false,
	dirreccion: {
		calle : "Av.Insurgentes",
		numExterior: 330,
		colonia:"David Gustavo Gutiérrez"
		cp: 77010
	}


};
//JSON cadena que representa objeto
let cadAlumnoIntercambio = '{\
	"nombre" : "Erick",\
	"apellidoPat" : "Solorio",\
	"apellidoMat": "Gutierez",\
	"semestre": 6,\
	"regular": false,\
	"dirreccion": {\
		"calle" : "Av.Insurgentes",\
		"numExterior": 330,\
		"colonia":"David Gustavo Gutiérrez",\
		"cp": 77010\
	}\
}';

let objeAlumnoIntercambio = JSON.parse(cadAlumnoIntercambio);
objeAlumnoIntercambio.nombre = "Jose Guadalupe";

	const divAsoc = document.getElementsByTagName("div");
	//divAsoc [1].innerText = "Alumno nombre = " + alumno["nombre"] //divAsociativos
	divAsoc [1].innerText = "Alumno nombre = " + alumno.nombre + "<br/> Apellido paterno ="
	+ alumno.apellidoPat + "<br/> dirrección ="+alumno.direccion.calle + " "
	+ alumno.direccion.numExterior;




}