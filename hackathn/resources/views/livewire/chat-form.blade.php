
   
   <div style="text-align: center">
    <label for="exampleInputEmail1">{{$nombree}}</label>
    <input type="text" 
    wire:model="mensaje" 
    wire:keydown.enter="enviarMensaje"                         
    class="input-proyecto2" 
    id="mensaje">
        <button 
    class="button-hackathn" 
    wire:click="enviarMensaje"
    wire:loading.attr="disabled"
    wire:offline.attr="disabled"
    onclick="back()"            
>Enviar</button>
</div>

<div  id="avisoSucces" class="alert alert-succes alert-hackathn collapse mt-3" role="alert">
    Mensaje enviado!
  </div>
      



    <script>

        //El evento mensajeEnviado
        window.livewire.on('mensajeEnviado', function(){

            //mostramos aviso
            $("#avisoSucces").fadeIn("slow");

            //ocultamos aviso a los 3 segundos
            setTimeout(function(){ $("#avisoSucces").fadeOut("slow"); }, 3000);
        });


    </script>
 
