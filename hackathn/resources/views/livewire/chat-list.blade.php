<div>
<ul class="chat-list ">
    @foreach($chats as $chat) 
    @if ($chat->usuario == auth()->user()->name)
<li class="out">
        <div class="chat-img">
        <img alt="Avtar" src="<?php echo  asset('storage/imagenes/')?>/<?php echo $chat->avatar?>">
        </div>
        <div class="chat-body">
            <div class="chat-message">
                <h5>{{$chat->usuario}}</h5>
                
                <p>{{$chat->mensaje}}</p>
            </div>
            <p>{{$chat->created_at->isoFormat('H:mm A')}}</p>
        </div>
    </li>
    @else 
    <li class="in">
        <div class="chat-img">
        <img alt="Avtar" src="<?php echo  asset('storage/imagenes/')?>/<?php echo $chat->avatar?>">
        </div>
        <div class="chat-body">
            <div class="chat-message">
                <h5>{{$chat->usuario}}</h5>
                <p>{{$chat->mensaje}}</p>
            </div>
            <p>{{$chat->created_at->isoFormat('H:mm A')}}</p>
        </div>
    </li>
   
    @endif
    @endforeach 
   <!-- <li class="out">
        <div class="chat-img">
        <img alt="Avtar" src="{{asset('img/mike.jpg')}}">
        </div>
        <div class="chat-body">
            <div class="chat-message">
                <h5>Mauricio Aban Poot</h5>
                <p>Next level veard</p>
            </div>
        </div>
    </li> -->
    
</ul>
</div>