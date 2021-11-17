"use strict"

const URL = "api/gimnastas";

let btn = document.querySelector("#btnComent");
if(btn){
    btn.addEventListener("click", postearComentario);   
}

let btnFiltrar = document.querySelector("#filtrarPorPuntaje");
if(btnFiltrar){
    btnFiltrar.addEventListener("click", function(e){
        e.preventDefault();
        let puntaje = document.querySelector("#puntajeFiltro");
        armarUrl(undefined,undefined,puntaje);
    })
}

let btnOrden = document.querySelectorAll(".btnOrden");
for (let i = 0; i < btnOrden.length; i++) {
    btnOrden[i].addEventListener("click", function(e){
        let criterio = this.dataset.criterio;
        let orden = this.dataset.orden;
        armarUrl(criterio,orden,null);
    })
    
}

function armarUrl(criterio,orden,puntaje) {
    let contenedor = document.querySelector("#contenedor");
    let id = contenedor.dataset.id;
    let rol = contenedor.dataset.rol;
    
    if(criterio && orden){
        let url = `${URL}/${id}/comentarios?sortBy=${criterio}&orden=${orden}`;
        mostrarComentarios(url,contenedor,rol);
    }else if(puntaje){
        let url = `${URL}/${id}/comentarios?filterByPuntaje=${puntaje.value}`;
        mostrarComentarios(url,contenedor,rol);
    }else{
        let url = `${URL}/${id}/comentarios`;
        mostrarComentarios(url,contenedor,rol);
    }

}

async function mostrarComentarios(url,contenedor,rol){
    try {
        let response = await fetch(url);
        if(response.ok){
            contenedor.innerHTML="";
            let comentarios = await response.json();
            let clase ="hidden";
            if(rol == "admin"){
                clase = ""
            }
            for (let comentario of comentarios) {
                contenedor.innerHTML+=` <div data-id="${comentario.id}"> 
                                            <p> ${comentario.nombre} comentó el ${comentario.fecha} </p>
                                            <p>${comentario.texto}</p>
                                            <p> Puntaje : ${comentario.puntaje} </p>
                                            <button class="eliminarComentario btn btn-danger" ${clase}>Borrar </button>
                                        </div>
                `
            }
            asignarFuncionEliminar();
        }else{
            contenedor.innerHTML="Failed url";
        }
       
        
    } catch (e) {
        console.log(e);
    }  
}

function asignarFuncionEliminar() {
    let botones = document.querySelectorAll(".eliminarComentario");
    for (let i = 0; i < botones.length; i++) {    
       botones[i].addEventListener("click", async function(e){
        let id = this.parentElement.dataset.id;
        try{
            let response = await fetch(`${URL}/${id}/comentarios`,{
                method: 'DELETE'
            })
            if(response.status === 200){
                console.log("eliminado");
            }
            else{
                console.log("failed delete")
            }
        }
        catch(error){
            console.log(error);
        }
        armarUrl(undefined,undefined,null);
        }); 
        
    }
    
}

async function postearComentario(e){
    e.preventDefault();
    let idGymnasta = document.querySelector("#idGimnasta");
    let texto = document.querySelector("#texto");
    let puntaje = document.querySelector("#puntaje");
    let userId = document.querySelector("#userId");
    if(puntaje.value > 5){
        puntaje.value = 5;
    }

    let comentario = {
        texto: texto.value,
        puntaje: puntaje.value,
        id_usuario: userId.value,
        id_gimnasta: idGymnasta.value,
        
    }

    try{
        let response = await fetch(`${URL}/comentarios`,{
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(comentario)
            });
            if (response.status === 200){
                console.log("creado");
               
            }
            else{
                console.log("Failed Url");
            }   
            
            
            
  }
  catch(error){
      console.log(error)
  }
  texto.value="";
  puntaje.value="";
 
  armarUrl(undefined,undefined,null);
  

}




armarUrl(undefined,undefined,null);



