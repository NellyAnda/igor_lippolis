@extends('layouts.app')

@section('image_header')
<div class="homepage_background_picture">
	<h1>Igor Lippolis</h1>
  <h2>Licenciado en Medicina China y Medicina Natural y Tradicional</h2>
</div>
@endsection

@section('content')

{{-- PAGE D'ACCUEIL --}}

<div class="presentation_container bottom_spacing">
  <div>
    <img src="images/igor_lippolis.jpg" class="igor" alt="imagen del terapeuta Igor Lippolis">
  </div>  
  <div class="bottom_spacing">
    <h2>Presentación</h2>
    <p>Mi nombre es Igor Lippolis, <span class="colored_emphasis">Licenciado en Medicina China y Medicina Natural y Tradicional</span>. Durante toda mi infancia he tenido la gran suerte de acercarme a un concepto de salud enfocado en el cuidado diario de mi cuerpo que considera la alimentación como primer recurso ante la enfermedad.<br>
    En mi adolescencia seguí estudiando por mi cuenta la fitoterapia y otras practicas como el Yoga y el Tai chi hasta encontrar y consolidar mi formación como medico tradicional chino.</p>
  </div>
</div>
<div class="dark_background top_spacing bottom_spacing">
  <h3 class="bottom_spacing">Origen de la Medicina Tradicional China</h3>
  <div class="medicine_origin_container">
    <div class="medicine_origin_containers top_spacing bottom_spacing">
        <p>La vida moderna nos somete a tensiones y a un estilo de vida que nos lleva al deterioro de nuestra salud y bienestar. Existe una sabiduría para la curación que desde hace milenios se ocupa de devolver al ser humano la <span class="colored_emphasis">salud</span> y el <span class="colored_emphasis">bienestar</span>, armonizando todos los aspectos de su ser : <span class="colored_emphasis">La Medicina China</span>.
        </p>
        <p class="top_spacing">La Medicina Tradicional China considera al cuerpo humano como un todo, y atribuye la enfermedad al desequilibrio entre los diferentes elementos del mismo, por lo que su tratamiento, más que destinado a la curación de un síntoma concreto, se enfoca al restablecimiento del equilibrio corporal, enfatizando la necesidad de llevar una vida sana.</p>
      </div>  
      <div>
        <img src="images/chinese_tea_set.jpg" class="tea_set_picture" alt="imagen de un juego de té chino">
      </div>
    
  </div>
  <div class="medicine_origin_container">
      <div>
        <img src="images/bamboo_grove.jpg" class="bamboo_grove_picture" alt="imagen de un camino en un bosque de bambú">
      </div>
      <div class="medicine_origin_containers top_spacing">
        <p>Su efectividad para el incentivo de los cambios bioquimicos necesarios en la superación de ciertas patologías como trastornos del <span class="colored_emphasis">estrés, ansiedad, insomnio, cansancio crónico, dolor, lesiones deportivas, problemas digestivos, problemas de la piel, desequilibrios emocionales, prevención del envejecimiento prematuro y de enfermedades</span>, y muchas otras dolencias ha sido ampliamente comprobada.</p>
        <p class="top_spacing">Para la cultura china la manifestación de una enfermedad grave indica que la persona ha estado por largo tiempo expuesta a una serie de condiciones y situaciones según las cuales descuido o perdió el equilibrio energético, de allí que toda la milenaria medicina oriental haga tanto énfasis en la búsqueda constante del equilibrio energético y los cuidado cotidianos que deben seguirse para mantener la <span class="colored_emphasis">armonía del cuerpo, la mente y el espíritu</span>. En este sitio web se explicará el origen de esta medicina , las teorías básicas de <span class="colored_emphasis">Yin-Yang</span> y de los <span class="colored_emphasis">5 elementos</span> y algunas <span class="colored_emphasis">técnicas principales de tratamiento</span>.</p>
      </div>
  </div>
</div>
<div>
  <h3 class="top_spacing bottom_spacing">Tratamientos populares</h3>
</div>

@endsection
