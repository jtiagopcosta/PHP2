$('.close').click(function() {
$(this).parent().fadeOut(1000);
});


function mostrar(elemento){
    var display = document.getElementById(elemento).style.display;
    
      if(display == "none"){
          document.getElementById(elemento).style.display = 'block';
      }else{
          document.getElementById(elemento).style.display = 'none';
      }    
  }

function Alterar(elemento){
var display = document.getElementById(elemento).style.display;

    if(display == "none"){
        document.getElementById(elemento).style.display = 'block';
    }else{
        document.getElementById(elemento).style.display = 'none';
    }    
}