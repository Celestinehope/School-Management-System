
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/announcements.css" />
    
   <title> Announcements </title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-brown-800 leading-tight h-4">
            All Announcements
        </h2>
    </x-slot>  

    @include('lecturers.partials._sidebar')

    <div class="main" >
      
        

        @if(count($announcements)==0)
        <x-card>
            There are no Announcements available.
        </x-card>
        @else
        @foreach ($announcements as $announcement)
        <x-card>
            <h3 class="p-2">To: {{ $announcement->recepient }}</h3>
            <p class="p-2">{{ $announcement->message }}</p>

            
        </x-card>
        @endforeach
        @endif

    </div>

</x-app-layout>