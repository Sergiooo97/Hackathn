<?php

namespace App\Http\Livewire;
use  App\Chat;
use Livewire\Component;

class ChatForm extends Component
{
    public $nombree;
    public $usuario;
    public $mensaje;

    
    public function mount(){
        $this->nombree = auth()->user()->name;
          $this->mensaje = "";
    }
    public function enviarMensaje(){
        $this->emit('mensajeEnviado');
        $this->emit('mensajeRecibido');
        $this->emit('reviewSectionRefresh');

        $validatedData = $this->validate([
            
            'mensaje' => 'required',
        ]);
     
        // Guardamos el mensaje en la BBDD
        Chat::create([
            "usuario" => auth()->user()->name,
            "equipoNumber" => auth()->user()->equipoNumber,
            "id_re" => auth()->user()->id,
            "id_env" => auth()->user()->id,
            "avatar" => auth()->user()->avatar,
            "mensaje" => $this->mensaje
        ]);
      

    }

    

   
    public function render()
    {
        return view('livewire.chat-form');
    }

    
}
