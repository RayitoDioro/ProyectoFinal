{{-- Is the same for the layouts
@extends('layouts.app')

{{--  in this case, the name we are using is home. like de the view --}}
{{-- We using home like second parameter --}}
{{-- @section('title', 'home') --}}

{{-- This is for the metadates --}}
{{-- @section('meta-description', 'Home meta description') --}}

{{-- @component('component.layout') --}}

{{-- the "X" is a reference for the folder components --}}
<x-layouts.app
title="Home"
meta-description="Home meta description"
>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>

<title>Mi Blog</title>

</head>
<body>
  <header>
    <h1>Bienvenido a mi blog</h1>
  </header>
  
  <section>
    <p>Bienvenido a mi blog personal, donde comparto mi viaje de aprendizaje diario y mi vida. Aquí encontrarás una colección de mis experiencias, reflexiones y conocimientos adquiridos a medida que me sumerjo en diferentes temas y desafíos.</p>
    <p>Cada día me enfrento a nuevas oportunidades para aprender y crecer. Exploro diversos campos, desde la tecnología y el emprendimiento hasta el desarrollo personal y el bienestar. A través de este blog, deseo compartir mis lecciones, éxitos y desafíos, y espero inspirar a otros a seguir su propio camino de aprendizaje y descubrimiento.</p>
    <p>Te invito a unirte a mí en este emocionante viaje mientras navego por las complejidades de la vida y comparto mis pensamientos y reflexiones en este espacio digital. Juntos, podemos aprender, crecer y construir una comunidad de aprendizaje y apoyo mutuo.</p>
  </section>

@auth
{{-- <div class="text-white">
        Authenticated User: {{ Auth::user()->name }}
    </div> --}}
@endauth
</x-layouts.app>
{{-- @endcomponent --}}

