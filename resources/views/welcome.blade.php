 <x-layout>

     <x-slot name="title">
         {{ $title }}
     </x-slot>

     <h1>Homepage</h1>
     <div class="container">
         @foreach ($array as $element)
             @if ($loop->iteration == 2)
             @endif

             <x-card :element="$element" testo="sono io" />
         @endforeach

     </div>
 </x-layout>
