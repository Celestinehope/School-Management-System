<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight h-4">
            Lecturer
        </h2>
    </x-slot>

    @include('lecturers.partials._sidebar')

  
  <!-- Page content -->
  <div class="main">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-blue-900">
                   You have successfully signed in as a Lecturer.
                </div>
            </div>
        </div>
    </div>
  </div>

</x-app-layout>
