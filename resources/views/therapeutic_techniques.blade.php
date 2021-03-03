@extends('layouts.app')

@section('image_header')
<div class="therapeutic_techniques_background_picture">
  <h1>Tecnicas<br> Terapeuticas</h1>
</div>
@endsection

@section('content')
<h2>Tecnicas Terapeuticas</h2>


<div class="acupuncture_bottom_container">
  
  <div class="acupuncture_text_containers">
    <h3 class="align">Moxibustión</h3>
    <p class="top_spacing">Se realizan tratamientos aprovechando las propriedades curativas de la <span class="colored_emphasis"> planta</span> “<span class="colored_emphasis"> Artemisae Vulgaris</span>”. Con la moxa es posible aplicar calor sobre una zona muy pequeña y precisa, aumentando la eficacia y los efectos beneficiosos que tienen otras técnicas de termoterapia (lámparas de infrarrojos, o la sencilla bolsa de agua).</p>
    <p>Es muy usada para dolores articulares (artrosis, reuma), lumbago, constitución débil, problemas respiratorios, cansancio, diarrea crónica, dolor abdominal, vómitos, retención de líquidos, dolores menstruales.</p>
    <p class="treatment_duration top_spacing bottom_spacing">Duración aproximada de tratamiento : 15/20min</p>
  </div>
  <div>
    <img src="{{asset('images/head_massage.png')}}" class="top_spacing" alt="imagen de una mujer recibiendo un masaje de cabeza">
  </div>
</div>

<div class="dark_background acupuncture_top_container">
  <div>
    <img src="{{asset('images/facial_acupuncture.png')}}" class="acupuncture_picture" alt="imagen de dos maniquíes que muestran puntos de acupuntura">
  </div>
  <div class="bottom_spacing acupuncture_text_containers">
    <h3 class="align">Acupuntura Craneal</h3>
    <p class="top_spacing">Por <span class="colored_emphasis">acupuntura craneal</span> o <span class="colored_emphasis">craneopuntura</span> se entiende un conjunto de técnicas terapéuticas que se basan en la utilización de agujas de acupuntura para estimular líneas áreas o puntos en la región de la calota craneana.</p>
    <p>Está comprobado que la estimulación de dichos puntos o áreas del cráneo tiene potentes efectos terapéuticos, sobre todo en el <span class="colored_emphasis">tratamiento de patologías o lesiones neurológicas</span>.</p>
    <p>Esta distribución de áreas de aplicación se basa en la neuroanatomía y no tiene relación con la medicina tradicional china.</p>
    <p class="treatment_duration top_spacing bottom_spacing">Duración aproximada de tratamiento : 20/30min</p>
  </div>
</div>





























@endsection