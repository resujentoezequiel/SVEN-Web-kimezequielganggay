<!DOCTYPE html>
<style>

    :root {
        --gold: #ffb338;
        --light-shadow: #77571d;
        --dark-shadow: #3e2904;
    }
    .wrapper {
        /*background: radial-gradient(#272727, #1b1b1b);*/
        display: grid;
        /*grid-template-areas: 'overlap';*/
        /*place-content: center;*/
        text-transform: uppercase;
        text-align: center;
        height: 90vh;
    }
    .wrapper > div {
        background-clip: text;
        -webkit-background-clip: text;
        color: #363833;
        font-family: 'Poppins', sans-serif;
        font-weight: 900;
        font-size: 10vw;
        grid-area: overlap;
        letter-spacing: 1px;
        -webkit-text-stroke: 4px transparent;
    }
    div.bg {
        background-image: repeating-linear-gradient( 105deg,
        var(--gold) 0% ,
        var(--dark-shadow) 5%,
        var(--gold) 12%);
        color: transparent;
        filter: drop-shadow(5px 15px 15px black);
        transform: scaleY(1.05);
        transform-origin: top;
    }
    div.fg{
        background-image: repeating-linear-gradient( 5deg,
        var(--gold) 0% ,
        var(--light-shadow) 23%,
        var(--gold) 31%);
        color: #1e2127;
        transform: scale(1);
    }

</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Appointment Booking System</title>
        <link rel="shortcut icon" href="{{ asset('/img/dog.png') }}" type="image/x-icon" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="background-image: url('<?php echo asset('/img/dog_wallpaper.jpg')?>'); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">

        <div style="position: absolute; right: 1vh; top: 1vh;" >
            <a href="{{ route('login') }}" class="inline-flex px-4 py-2 bg-gray-800 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-5">
                    <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                </svg>
                <span style="margin-top: .3vh">Log in</span>
            </a>
        </div>

        <div class="wrapper">
            <div class="bg"> Appointment Booking </div>
            <div class="fg"> Appointment Booking </div>
        </div>

        <div style="position: absolute; right: 0; bottom: 0;">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>

    </body>
</html>


