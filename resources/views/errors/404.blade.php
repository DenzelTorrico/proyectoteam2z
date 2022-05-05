<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>404 Not Found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Oleo Script Swash Caps', cursive;
        }
        body{
            background-color: #d6ece4;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%232157e4' fill-opacity='0.4' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            animation-name: game;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }
        @keyframes game {
        0% { background-color: rgb(153, 79, 79); }
        50% { background-color: rgb(247, 0, 0); }
        100% { background-color: rgb(153, 79, 79); }
        }
    </style>
</head>
<body>
    <div class="flex justify-center items-center flex-col">
        <h1 class="text-3xl p-10">Hasta donde hemos llegado?</h1>
        <div>
            <img src="https://media.giphy.com/media/14kqI3Y4urS3rG/giphy.gif" alt="404">
        </div>
        <audio src="https://res.cloudinary.com/di4pp938j/video/upload/v1651725144/Saw_SoundTrack_paeyag.mp3" controls></audio>
    </div>
</body>
</html>