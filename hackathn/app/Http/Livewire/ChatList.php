<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Chat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class ChatList extends Component
{
    public $chats;
   public function mount(){

    $this->chats = [];
   }
   protected $listeners = [
    'reviewSectionRefresh' => '$refresh',
   ];
    public function render()
    {
        $this->chats=Chat::all()->where('equipoNumber', '=', auth()->user()->equipoNumber);
        return view('livewire.chat-list');
    }
}
