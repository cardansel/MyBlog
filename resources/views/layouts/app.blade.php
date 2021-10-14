<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Blog') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
       
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')
     
        <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="container">
                    @livewire('header')
                </div>
            </header> --}}
          

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

           {{--  <div class="bg-white shadow-lg">
                <div class="container">
                    @livewire('transaction')
                </div>
            </div> --}}
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
