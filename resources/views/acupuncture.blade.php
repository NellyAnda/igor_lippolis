@extends('layouts.app')

@section('pageTitle', 'Acupuntura')

@section('image_header')
<div class="acupuncture_background_picture">
  <h1>Acupuntura</h1>
</div>
@endsection

@section('content')
<h2>Acupuntura</h2>
<div class="therapies_text_containers">
  <p>La <span class="colored_emphasis">acupuntura</span> emplea finísimas agujas metálicas sobre puntos especiales de la piel con el objetivo de <span class="colored_emphasis">equilibrar el organismo</span>. Es aplicable a todo tipo de patologías, algunos ejemplos son <span class="colored_emphasis">enfermedades respiratorias</span> (sinusitis, rinitis, resfriado común, asma o bronquitis), <span class="colored_emphasis">enfermedades oftalmológicas</span> como conjuntivitis y cataratas, <span class="colored_emphasis">problemas neurológicos</span> como dolor de cabeza o migraña, <span class="colored_emphasis">problemas gastrointestinales</span> (acidez en el estómago, úlcera duodenal, estreñimiento), <span class="colored_emphasis">problemas ortopédicos</span> (dolor ciático, lumbago, artritis reumatoide), <span class="colored_emphasis">trastornos del sueño</span>.</p>
  <p class="treatment_duration top_spacing bottom_spacing">Duración aproximada de tratamiento : 20/30min</p>
</div>

<div class="dark_background therapies_colored_containers">
  <div>
    <img src="{{asset('images/facial_acupuncture.png')}}" class="acupuncture_picture" alt="imagen de dos maniquíes que muestran puntos de acupuntura">
  </div>
  <div class="bottom_spacing therapies_text_containers">
    <h3 class="top_spacing">Acupuntura Craneal</h3>
    <p class="top_spacing">Por <span class="colored_emphasis">acupuntura craneal</span> o <span class="colored_emphasis">craneopuntura</span> se entiende un conjunto de técnicas terapéuticas que se basan en la utilización de agujas de acupuntura para estimular líneas áreas o puntos en la región de la calota craneana.</p>
    <p>Está comprobado que la estimulación de dichos puntos o áreas del cráneo tiene potentes efectos terapéuticos, sobre todo en el <span class="colored_emphasis">tratamiento de patologías o lesiones neurológicas</span>.</p>
    <p>Esta distribución de áreas de aplicación se basa en la neuroanatomía y no tiene relación con la medicina tradicional china.</p>
    <p class="treatment_duration top_spacing bottom_spacing">Duración aproximada de tratamiento : 20/30min</p>
  </div>
</div>

<h3 class="top_spacing">Acupuntura Estética</h3>
<div class="therapies_colorless_containers">
  <div class="therapies_text_containers">
    <p class="top_spacing">La acupuntura es una técnica antigua utilizada por los ancestros para el cuidado de la salud. La unión de <span class="colored_emphasis">acupuntura</span> y la <span class="colored_emphasis">estética</span> ha resultado un excelente descubrimiento para la <span class="colored_emphasis">medicina estética</span>, en beneficio de los profesionales de esta rama y de los pacientes que recurren a ella en busca de una solución a su problema <span class="colored_emphasis">sin recurrir a tratamientos químicos</span>.</p>
    <p>La <span class="colored_emphasis">acupuntura estética</span> a diferencia de otros ratamientos esteticos, trata desde la profundidad, <span class="colored_emphasis">estimula directamente las células y los tejidos profundos</span>. Además de actuar en el orígen del problema, la acupuntura activa la circulación de los fluidos del cuerpo, oxigenando, nutriendo y estimulando los tejidos.</p>
    <p class="bottom_spacing">Se trata de una tecnica que <span class="colored_emphasis">no duele</span>. Se utiliza una aguja muy fina del grosor de un cabello, recubierta de silicio y desechable que reduce el dolor al mínimo, la sensación podría ser equivalente a la picada de un mosquito.</p>
  </div>
  <div>
    <img src="{{asset('images/head_massage.png')}}" class="top_spacing" alt="imagen de una mujer recibiendo un masaje de cabeza">
  </div>
</div>
<div class="buttons_container align top_spacing bottom_spacing">
  <a href="{{ route('home') }}">
    <button type="submit" class="button_text">{{ __('PEDIR UNA CITA') }}</button> 
  </a>
</div>  
@endsection