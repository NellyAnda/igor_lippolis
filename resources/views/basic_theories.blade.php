@extends('layouts.app')

@section('image_header')
<div class="basic_theories_background_picture">
	<h1>Teorias basicas de la medicina tradicional China</h1>
</div>
@endsection


@section('content')
  <h2>Teorias basicas de la medicina tradicional China</h2>
    <h3>Yin Yang</h3>
    <div>
      <div class="yin_yang_containers bottom_spacing">
        <p>En un principio, Yin Yang se empleaban para indicar la posición de un lugar respecto al Sol (Yang era el lado soleado y Yin el sombreado), observando la alternancia de los fenómenos naturales, la sucesión del día y la noche...</p>
        <img src="{{asset('images/yin_yang.png')}}" class="yin_yang_pictures" alt="imagen en blanco y negro del símbolo de yin yang">
        <p>Por ejemplo, una moneda tiene dos caras. La dualidad integrada en un mismo ‘uno’ representa el núcleo de la teoría del Yin Yang. A partir de ahí, se dedujo que todo fenómeno de la naturaleza tenía su lado contrario con el que formaba una unidad, un todo. Estos principios se denominaron Yin y Yang.</p>
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
    <div>
      <div class="yin_yang_containers bottom_spacing top_spacing">
        <p>En el lenguaje propio de la medicina china, presentamos la clasificación de órganos, tejidos, substancias corporales, funciones, zonas anatómicas... de acuerdo a parejas Yin Yang.</p>
        <img src="{{asset('images/tao.png')}}" class="yin_yang_pictures" alt="dibujo en blanco y negro del símbolo de yin yang">
        <p>Esta teoría constituye más que una mera clasificación: es un instrumento para discernir la esencia de los fenómenos naturales y de describir la dinámica de los procesos orgánicos.</p>
      </div>
      <div class="basic_theories_containers">
        <p>Por ejemplo, a la hora de identificar un cuadro clínico de un paciente a menudo se aplican unos principios básicos que orientan el terapeuta en su diagnóstico. Dichos principios básicos incluyen Yin/Yang como elemento clasificador pero también tienen en cuenta otros aspectos.</p>
      </div>
    </div>
    <h3>Los Cinco Elementos o Cinco Fases (Wu Xing)</h3>
    <div class="five_elements_background_picture">
    <div class="basic_theories_containers">
      <div>
        <img src="{{asset('images/five_elements.png')}}" class="five_elements_picture" alt="images de los cinco elementos o cinco fases">
      </div>
      <div>
        <div>
          <p class="five_elements_text top_spacing bottom_spacing"><span class="fire_emphasis">Fuego</span> : se relaciona con el Corazón y el sabor amargo. Su color correspondiente es el rojo y su estación es el <span class="fire_emphasis">verano</span></p>
        </div>
        <div>
          <p class="five_elements_text bottom_spacing"><span class="timber_emphasis">Madera</span> : se relaciona con el hígado, el color verde y la <span class="timber_emphasis">primavera</span>, el sabor es el ácido</p>
          <p class="five_elements_text bottom_spacing"><span class="earth_emphasis">Tierra</span> : es el elemento del Bazo, los meses, <span class="earth_emphasis">abril</span>, <span class="earth_emphasis">julio</span>, <span class="earth_emphasis">octubre</span> y <span class="earth_emphasis">enero</span>, corresponderían a la tierra, periodos de transición entre estaciones. Su sabor es el dulce</p>
        </div>
        <div>
          <p class="five_elements_text bottom_spacing"><span class="water_emphasis">Agua</span> : su órgano correspondiente es el Riñón, la estación correspondiente el <span class="water_emphasis">invierno</span> y el sabor es el salado</p>
          <p class="five_elements_text bottom_spacing"><span class="metal_emphasis">Metal</span> : se relaciona con el Pulmón,su color es el gris, la estación del año es el <span class="metal_emphasis">otoño</span> y el sabor es el picante</p>
        </div>
      </div>
    </div>
    </div>
    <div class="dark_background top_spacing">
      <div class="basic_theories_containers">
        <div>
          <div class="five_elements_containers bottom_spacing">
            <img src="{{asset('images/timber_element.png')}}" class="five_elements_pictures" alt="imagen del interior de un arbol, madera">
            <p><span class="timber_emphasis">PRIMAVERA</span> : corresponde al <span class="timber_emphasis">elemento Madera</span>, los órganos correspondientes son el <span class="timber_emphasis">hígado y vesícula biliar</span>, el color es el verde. El movimiento de la energía es ascenso y germinación. Es recomendable <span class="timber_emphasis">tomar frutas, alimentos de sabor amargo (acelgas, ensaladas,espinacas..), ácido (naturales no industriales) y dulce (patatas, boniatos, zanahorias...)</span>.</p>
          </div>
          <div class="five_elements_containers bottom_spacing">
            <img src="{{asset('images/fire_element.png')}}" class="five_elements_pictures" alt="imagen de llamas, fuego">
            <p><span class="fire_emphasis">VERANO</span> : corresponde al <span class="fire_emphasis">elemento Fuego</span>, los órganos son <span class="fire_emphasis">corazón y intestino delgado</span> el color es el rojo. En esta fase el mundo vegetal llega a su máximo crecimiento, se recomienda ingerir principalmente alimentos amargos y frescos, evitar alimentos excesivamente fríos como helados y bebidas refrescantes ya que debilitan la energía del estomago sobre, todo en los niños.<br>
            Recomendados alimentos picantes y frescos,un ejemplo son la Menta o el cilantro. Aumentar el consumo de <span class="fire_emphasis">frutas alimentos frescos y crudos</span> y procurar una alimentación ligera con poca comida evitando comidas que congestionen,muy calientes y muy secas.</p>
          </div>
          <div class="five_elements_containers bottom_spacing">
            <img src="{{asset('images/earth_element.png')}}" class="five_elements_pictures" alt="imagen de las manos de un niño y un adulto sosteniendo una planta en un poco de tierra">
            <p><span class="earth_emphasis">FINAL DE VERANO</span> : corresponde al <span class="earth_emphasis">elemento Tierra</span> relacionado con el centro, <span class="earth_emphasis">bazo y estomago</span>, su color es el
            amarillo o naranja. El clima dominante es la humedad, se recomiendan alimentos <span class="earth_emphasis">picantes y frescos, frutas y verduras de temporada alternando alimentos neutros insípidos y ligeramente aromáticos</span>. Evitar la ingesta de productos lácteos y grasos que debilitan el bazo.</p>
          </div>
        </div>
        <div>
          <div class="five_elements_containers bottom_spacing">
            <img src="{{asset('images/water_element.png')}}" class="five_elements_pictures" alt="imagen de una ola, agua">
            <p><span class="water_emphasis">INVIERNO</span> : corresponde al <span class="water_emphasis">elemento Agua</span>, órganos correspondientes son el <span class="water_emphasis">riñón y la vejiga</span>, el color es el negro.<br>
            Recomendados <span class="water_emphasis">alimentos de sabor salado suave (algas y pescados)</span>. Ingerir alimentos <span class="water_emphasis">calientes picantes y dulces</span>.
            Evitar el exceso de picantes calientes ya que podría ocasionar una disminución de los líquidos orgánicos. Se
            recomiendan <span class="water_emphasis">alimentos de color oscuro (algas marinas, sésamo negro, azukis...)</span>.</p>
          </div>
          <div class="five_elements_containers bottom_spacing">
            <img src="{{asset('images/metal_element.png')}}" class="five_elements_pictures" alt="imagen de una obra de arte en metal">
            <p><span class="metal_emphasis">OTOÑO</span> : se relaciona con el <span class="metal_emphasis">elemento Metal</span> cuyos órganos correspondientes son <span class="metal_emphasis">pulmones y intestino grueso</span>, el color es el blanco. Los frutos y cereales terminan su maduración. Evitar alimentos secantes y favorecer alimentos ligeramente ácidos. Si hay sequedad ingerir alimentos humectantes (queso de soja,cacahuetes,pera...).<br>
            Recomendados <span class="metal_emphasis">alimentos ligeramente amargos y picantes/calientes. Mijo arroz y especias calientes son indicados en esta estación</span>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="basic_theories_containers">
      <p class="top_spacing">La teoría de las <span class="colored_emphasis">Cinco Fases</span> sirve de importante apoyo a la fisiología, etiología y fisiopatología de la medicina china pero, más allá de ser una herramienta teórica de utilidad, su aplicación clínica adquiere especial importancia en el <span class="colored_emphasis">diagnóstico</span> y <span class="colored_emphasis">tratamiento</span>.</p>
      <ul>
        <li>En la <span class="colored_emphasis">función de los órgano</span>, la teoría de las Cinco Fases ayuda a establecer las relaciones entre dichos órganos.</li>
        <li>En cuanto al diagnóstico, el color de la cara, la preferencia exagerada por un sabor, el estado de ánimo predominante, la estación en la que recidiva una enfermedad concreta... estas manifestaciones pueden relacionarse con uno o varios órganos, siguiendo las correspondencias de las Cinco Fases. La información que aportan dichas correspondencias deberá ser contrastada con el resto de elementos diagnósticos en el marco de la <span class="colored_emphasis">Historia Clínica</span>.</li>
        <li>En el <span class="colored_emphasis">tratamiento</span>, esta teoría adquiere especial <span class="colored_emphasis">relevancia</span>. Por ejemplo, tonificar la madre de el que esta en insuficiencia,dispersar el hijo de el que esta en exceso.</li>
      </ul>
      <p class="bottom_spacing">En el <span class="colored_emphasis">tratamiento con materias medicinales</span>, se utilizan los sabores para penetrar en esferas funcionales concretas, es decir, por ejemplo, utilizaremos el sabor amargo para ‘entrar’ en el corazón y reducir el fuego o el sabor salado para estabilizar el riñón.</p>
    </div>
@endsection
