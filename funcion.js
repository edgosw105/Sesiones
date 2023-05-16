function agregarFila(){
    const tablaBody = document.getElementById('tabla-body');
  

      const nuevaFila = document.createElement('tr');
      const celdaImagen = document.createElement('td');
      const imagen = document.createElement('img');
     var imagen1 = document.getElementById('miImagen'); 
        imagen.classList.add('celdaImagen'); 
      //imagen.src = 'imagen.png';
      imagen.src = imagen1.src; 
      
  
      celdaImagen.appendChild(imagen);
      nuevaFila.appendChild(celdaImagen);
  
      tablaBody.appendChild(nuevaFila);
  
}


function llamarFuncion(){
    var miParrafo = document.getElementById('miParrafo'); 
    fetch('funcion2.php')
  .then(response => response.text())
  .then(data => {
    //console.log(data);
    miParrafo.innerHTML += "<br>Soy un texto nuevo"; 
  })
  .catch(error => {
    console.error(error);
  });
}
