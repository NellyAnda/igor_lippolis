@extends('layouts.app')

@section('image_header')
<div class="treatments_background_picture">
  <h1>Tratamientos</h1>
</div>
@endsection


@section('content')

<h2>Tratamientos</h2>

<div class="stones_background_picture">
  <img src="{{asset('images/stones.png')}}" class="stones_picture" alt="imagen de una pila de pedras con un fundo de naturaleza">
  <div class="basic_theories_containers top_spacing bottom_spacing"> 
    <p>Al Yin se relacionaron todos los aspectos aparentemente pasivos, lo que es calmado, oscuro, húmedo, sensitivo y los periodos de gestación y fertilidad asociados con la condición femenina. Igualmente, los antiguos asociaron a Yang todo lo opuesto como movimiento, caliente, y todos los aspectos generativos relacionados con la condición masculina. Sus relaciones se expresan en las Cuatro Leyes Básicas de la Teoría de Yin/Yang.</p>
    <ul>
      <li>Antagonismo e inhibición mutua: si Yin crece, Yang desciende y viceversa. Por ello, la esencia de la patología es el desequilibrio de Yin/Yang.</li>
      <li>Tienen el mismo origen y se generan mutuamente Son parte del mismo todo, y cada uno constituye la base del otro, es decir, no pueden existir separadamente.</li>
      <li>Sus disminuciones e incrementos están en equilibrio</li>
      <li>Se transforma el uno en el otro : el Yin y el Yang no están siempre estáticos, sino que se mantienen en constante movimiento de transformación pasando de Yin a Yang y viceversa.</li>
    </ul>
  </div>
</div>

@endsection 
{{-- 

<div class="stones_background_picture">
  <img src="{{asset('images/stones.png')}}" class="stones_picture" alt="imagen de una pila de pedras con un fundo de naturaleza">
  <div class="basic_theories_containers top_spacing bottom_spacing"> 
    <p>Al Yin se relacionaron todos los aspectos aparentemente pasivos, lo que es calmado, oscuro, húmedo, sensitivo y los periodos de gestación y fertilidad asociados con la condición femenina. Igualmente, los antiguos asociaron a Yang todo lo opuesto como movimiento, caliente, y todos los aspectos generativos relacionados con la condición masculina. Sus relaciones se expresan en las Cuatro Leyes Básicas de la Teoría de Yin/Yang.</p>
    <ul>
      <li>Antagonismo e inhibición mutua: si Yin crece, Yang desciende y viceversa. Por ello, la esencia de la patología es el desequilibrio de Yin/Yang.</li>
      <li>Tienen el mismo origen y se generan mutuamente Son parte del mismo todo, y cada uno constituye la base del otro, es decir, no pueden existir separadamente.</li>
      <li>Sus disminuciones e incrementos están en equilibrio</li>
      <li>Se transforma el uno en el otro : el Yin y el Yang no están siempre estáticos, sino que se mantienen en constante movimiento de transformación pasando de Yin a Yang y viceversa.</li>
    </ul>
  </div>
</div>


<div class="dark_background top_spacing">
  <h2>Origen de la Medicina Tradicional China</h2>
  <div>
    <div>
      <p>La vida moderna nos somete a tensiones y a un estilo de vida que nos lleva al deterioro de nuestra salud y bienestar. Existe una sabiduría para la curación que desde hace milenios se ocupa de devolver al ser humano la <span class="colored_emphasis">salud</span> y el <span class="colored_emphasis">bienestar</span>, armonizando todos los aspectos de su ser : <span class="colored_emphasis">La Medicina China</span>.
      </p>
      <p>La Medicina Tradicional China considera al cuerpo humano como un todo, y atribuye la enfermedad al desequilibrio entre los diferentes elementos del mismo, por lo que su tratamiento, más que destinado a la curación de un síntoma concreto, se enfoca al restablecimiento del equilibrio corporal, enfatizando la necesidad de llevar una vida sana. </p>
    </div>
    <div>
      <img src="images/chinese_tea_set.jpg" alt="imagen de un juego de té chino">
    </div>
  </div>
  <div>
    <div>
      <img src="images/bamboo_grove.jpg" alt="imagen de un camino en un bosque de bambú">
    </div>
    <div>
      <p>Su efectividad para el incentivo de los cambios bioquimicos necesarios en la superación de ciertas patologías como trastornos del <span class="colored_emphasis">estrés, ansiedad, insomnio, cansancio crónico, dolor, lesiones deportivas, problemas digestivos, problemas de la piel, desequilibrios emocionales, prevención del envejecimiento prematuro y de enfermedades</span>, y muchas otras dolencias ha sido ampliamente comprobada.</p>
      <p>Para la cultura china la manifestación de una enfermedad grave indica que la persona ha estado por largo tiempo expuesta a una serie de condiciones y situaciones según las cuales descuido o perdió el equilibrio energético, de allí que toda la milenaria medicina oriental haga tanto énfasis en la búsqueda constante del equilibrio energético y los cuidado cotidianos que deben seguirse para mantener la <span class="colored_emphasis">armonía del cuerpo, la mente y el espíritu</span>. En este sitio web se explicará el origen de esta medicina , las teorías básicas de <span class="colored_emphasis">Yin-Yang</span> y de los <span class="colored_emphasis">5 elementos</span> y algunas <span class="colored_emphasis">técnicas principales de tratamiento</span>.</p>
    </div>
  </div>
</div>




<div class="stones_background_picture">
  <img src="{{asset('images/stones.png')}}" class="stones_picture" alt="imagen de una pila de pedras con un fundo de naturaleza">
  <div class="basic_theories_containers top_spacing bottom_spacing"> 
    <p>Al Yin se relacionaron todos los aspectos aparentemente pasivos, lo que es calmado, oscuro, húmedo, sensitivo y los periodos de gestación y fertilidad asociados con la condición femenina. Igualmente, los antiguos asociaron a Yang todo lo opuesto como movimiento, caliente, y todos los aspectos generativos relacionados con la condición masculina. Sus relaciones se expresan en las Cuatro Leyes Básicas de la Teoría de Yin/Yang.</p>
    <ul>
      <li>Antagonismo e inhibición mutua: si Yin crece, Yang desciende y viceversa. Por ello, la esencia de la patología es el desequilibrio de Yin/Yang.</li>
      <li>Tienen el mismo origen y se generan mutuamente Son parte del mismo todo, y cada uno constituye la base del otro, es decir, no pueden existir separadamente.</li>
      <li>Sus disminuciones e incrementos están en equilibrio</li>
      <li>Se transforma el uno en el otro : el Yin y el Yang no están siempre estáticos, sino que se mantienen en constante movimiento de transformación pasando de Yin a Yang y viceversa.</li>
    </ul>
  </div>
</div>


<div class="stones_background_picture">
  <img src="{{asset('images/stones.png')}}" class="stones_picture" alt="imagen de una pila de pedras con un fundo de naturaleza">
  <div class="basic_theories_containers top_spacing bottom_spacing"> 
    <p>Al Yin se relacionaron todos los aspectos aparentemente pasivos, lo que es calmado, oscuro, húmedo, sensitivo y los periodos de gestación y fertilidad asociados con la condición femenina. Igualmente, los antiguos asociaron a Yang todo lo opuesto como movimiento, caliente, y todos los aspectos generativos relacionados con la condición masculina. Sus relaciones se expresan en las Cuatro Leyes Básicas de la Teoría de Yin/Yang.</p>
    <ul>
      <li>Antagonismo e inhibición mutua: si Yin crece, Yang desciende y viceversa. Por ello, la esencia de la patología es el desequilibrio de Yin/Yang.</li>
      <li>Tienen el mismo origen y se generan mutuamente Son parte del mismo todo, y cada uno constituye la base del otro, es decir, no pueden existir separadamente.</li>
      <li>Sus disminuciones e incrementos están en equilibrio</li>
      <li>Se transforma el uno en el otro : el Yin y el Yang no están siempre estáticos, sino que se mantienen en constante movimiento de transformación pasando de Yin a Yang y viceversa.</li>
    </ul>
  </div>
</div>




--}}
