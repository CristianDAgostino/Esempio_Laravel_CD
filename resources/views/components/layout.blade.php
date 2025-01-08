<!DOCTYPE html>
<html lang="en" class="custom-cursor">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recap2</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- style in line --}}
    <style>
        html{
            cursor: url('/images/cursor.cur'), auto;
        }
        a {
    cursor: inherit;  /* Eredita il cursore personalizzato */
}

/* Rimuove il cambio di cursore anche sui dropdown */
.dropdown, .dropdown-menu, .dropdown-toggle,
.btn{
    cursor: inherit;  /* Eredita il cursore personalizzato */
}
.btn {
    cursor: inherit;
}

.dropdown, .dropdown-menu, .dropdown-toggle {
    cursor: inherit;
}

/* Bottoni con maggiore specificità */
button, .btn, .custom-cursor button, .custom-cursor .btn, .form-label, .form-control {
    cursor: url('/images/cursor.cur'), auto; /* Imposta il cursore personalizzato */
}
    </style>

</head>
<body>
    <x-navbar></x-navbar>
    {{$slot}}
    
</body>
</html>