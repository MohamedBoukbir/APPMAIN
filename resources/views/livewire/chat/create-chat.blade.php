<div>
    
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

<ul class="list-group w-75 mx-auto mt-3 container-fluid" style="height: 1000px">
@foreach ($users as $user)

<a href="#" wire:click="checkconversation({{$user->id}})"> {{$user->username}} </a>
    {{-- <li class="list-group-item list-group-item-action" wire:click="checkconversation({{$user->id}})"> {{$user->username}}</li> --}}
    {{-- <li class="list-group-item list-group-item-action"> {{$user->name}}</li>  --}}
{{-- nadi nadi <br> --}}
@endforeach
 </ul>
</div>
