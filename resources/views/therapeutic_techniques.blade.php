@extends('layouts.app')

@section('image_header')
<div class="therapeutic_techniques_background_picture">
  <h1>Tecnicas<br> Terapeuticas</h1>
</div>
@endsection

@section('content')
<h2>Tecnicas Terapeuticas</h2>
<div class="therapies_colorless_containers">
  <div class="therapies_text_containers">
    <h3 class="align">Moxibustión</h3>
    <p class="top_spacing">Se realizan tratamientos aprovechando las propriedades curativas de la <span class="colored_emphasis"> planta</span> “<span class="colored_emphasis">Artemisae Vulgaris</span>”. Con la moxa es posible aplicar calor sobre una zona muy pequeña y precisa, aumentando la eficacia y los efectos beneficiosos que tienen otras técnicas de termoterapia (lámparas de infrarrojos, o la sencilla bolsa de agua).</p>
    <p>Es muy usada para dolores articulares (artrosis, reuma), lumbago, constitución débil, problemas respiratorios, cansancio, diarrea crónica, dolor abdominal, vómitos, retención de líquidos, dolores menstruales.</p>
    <p class="treatment_duration top_spacing bottom_spacing">Duración aproximada de tratamiento : 15/20min</p>
  </div>
  <div>
    <img src="{{asset('images/moxibustion.png')}}" class="top_spacing" alt="imagen de un paciente que recibe un tratamiento de moxibustión.">
  </div>
</div>



<div class="light_background therapies_colored_containers">
  <div>
    <img src="{{asset('images/suction_cups.png')}}" class="suction_cups_picture" alt="imagen de un paciente que recibe un tratamiento de ventosa">
  </div>
  <div class="bottom_spacing therapies_text_containers">
    <h3 class="align">Ventosas</h3>
    <p class="top_spacing">Utilizando copas de diversos materiales se realiza un efecto de succión para <span class="light_emphasis">aliviar el dolor</span>, <span class="light_emphasis">tonificar</span> o <span class="light_emphasis">disminuir los excesos y acumulaciones</span>. La succión provoca un aumento de la irrigación sanguínea en la zona, estimulando la circulación sanguínea y linfática, así como el metabolismo celular (aporta nutrientes y oxígeno), activando el sistema inmunitario, y desencadenando un proceso depurativo (eliminación de toxinas).</p>
    <p>Las principales aplicaciones son problemas musculares (contracturas), celulitis, retención de líquidos, ayuda a la pérdida de peso, ya que estimula el metabolismo, alivia el estrés y la ansiedad, enfermedades respiratorias.</p>
    <p class="treatment_duration top_spacing">Duración aproximada de tratamiento : 15/20min</p>
  </div>
</div>
<div class="therapies_colorless_containers">
  <div class="therapies_text_containers">
    <h3 class="align">Electroacupuntura</h3>
    <p class="top_spacing">Aplicación de micro frecuencias (de 2 a 100Hz) sobre las agujas de acupuntura. La técnica, aunque lo parezca, <span class="colored_emphasis">no es dolorosa</span>, la sensación se asemeja a la de un hormigueo y, además, la intensidad del estímulo se puede graduar de una forma muy precisa y, de esta manera <span class="colored_emphasis">se puede adaptar</span> el tratamiento <span class="colored_emphasis">a la tolerancia del paciente</span>.</p>
    <p>Entre los efectos terapéuticos principales se encuentran : recuperación de lesiones postraumáticas, inflamaciones de tejidos, rehabilitación funcional tendinomuscular y nerviosa, tensión muscular y contracturas, atrofia muscular y dolor en general. Muy usada también en lesiones deportivas, lumbalgias, ciáticas, parálisis facial, parálisis periféricas o neuropatías periféricas. También está indicada en la rehabilitación de las secuelas post ACV (Accidente Cerebrovascular o Ictus).</p>
    <p class="treatment_duration top_spacing bottom_spacing">Duración aproximada de tratamiento : 20/30min</p>
  </div>
  <div>
    <img src="{{asset('images/acupuncture_needles.png')}}" class="top_spacing" alt="imagen de agujas de acupuntura y diferentes tratamientos de medicina china">
  </div>
</div>
<div class="dark_background therapies_colored_containers">
  <div>
    <img src="{{asset('images/ear_acupuncture.png')}}" class="ear_acupuncture_picture" alt="imagen de dos maniquíes que muestran puntos de acupuntura">
  </div>

  <div class="bottom_spacing therapies_text_containers">
    <h3 class="align">Auriculoterapia</h3>
    <p class="top_spacing">Tecnica terapeutica de la medicina tradicional china en la que se estimulan puntos especificos del pabellon auricular y la oreja para generar un efecto en el organismo que <span class="colored_emphasis">favorezca</span> y <span class="colored_emphasis">armonize ciertas funciones corporales</span>. La <span class="colored_emphasis">auriculoterapia</span> se puede utilizar, en muchos casos, como <span class="colored_emphasis">tratamiento único</span> aunque lo más habitual es que se utilice como complemento a otros tratamientos (acupuntura, fitoterapia, alimentación, etc...).</p>
    <p>Una de las aplicaciones de la <span class="colored_emphasis">auriculoterapia</span> que, hoy en día está retomando mucho auge, es para combatir adicciones (especialmente la del tabaco) o para adelgazar ya que ayuda mucho a reducir los niveles de ansiedad.También podemos destacar entre las aplicaciones de la Auriculoterapia su uso para tratar casos agudos (lumbalgias, ciáticas, hemorroides, alergias, anginas, migrañas, etc...).</p>
  </div>
</div>
<div class="therapies_colorless_containers">
  <div class="therapies_text_containers">
    <h3 class="align">Tui Na</h3>
    <p class="top_spacing"><span class="colored_emphasis">Tui Na</span> es una rama de la medicina china tradicional que utiliza el <span class="colored_emphasis">masaje</span> como medio terapeutico.</p>
    <p>Al igual que la acupuntura, esta técnica actúa sobre los <span class="colored_emphasis">meridianos energéticos</span> y los <span class="colored_emphasis">puntos comando</span> de estos.</p>
    <p>Algunas de las principales aplicaciones son problemas de espalda, ciática, lumbalgias, contracturas musculares, calambres musculares, dolor de rodillas y otras articulaciones, epicondilitis (codo de tenista), síndrome del canal carpiano ( dolor de muñecas).</p>
    <p class="treatment_duration top_spacing bottom_spacing">Duración aproximada de tratamiento : 45 min</p>
  </div>
  <div>
    <img src="{{asset('images/back_massage.png')}}" class="top_spacing" alt="imagen de un paciente recibiendo un masaje de espalda">
  </div>
</div>
<div class="light_background therapies_colored_containers">
  <div>
    <img src="{{asset('images/food.png')}}" class="phytotherapy_picture" alt="imagen con macetas que contienen hierbas de fitoterapia">
  </div>
  <div class="bottom_spacing therapies_text_containers">
    <h3 class="align">Fitoterapia china</h3>
    <p class="top_spacing"> Prescripciones herbarias constituidas por <span class="light_emphasis">muchas hierbas</span> (o materias medicas) adaptadas a cada paciente. La evaluación del paciente en todos sus planos y la aplicación de <span class="light_emphasis">fórmulas individualizadas</span> para cada situación son instrumentos fundamentales en la medicina tradicional china.</p>
  </div>
</div>
<div class="therapies_colorless_containers">
  <div class="therapies_text_containers">
    <h3 class="align">Su Jok</h3>
    <p class="top_spacing">El <span class="colored_emphasis">Su Jok</span> es una terapia complementar descubierta por el médico coreano Park Jae Woo en la década de los 70. Se utiliza para <span class="colored_emphasis">primeros auxilios</span> y <span class="colored_emphasis">dolencias comunes</span> (problemas del sueño, dolores lumbares, cansancio crónico, estrés y problemas digestivos entre otros) y se basa en la <span class="colored_emphasis">reflexoterapia</span> y la <span class="colored_emphasis">medicina china</span>.</p>
    <p>Las <span class="colored_emphasis">manos</span> y los <span class="colored_emphasis">pies</span> representan en la terapia <span class="colored_emphasis">So Jok</span> a todo el cuerpo en miniatura por lo tanto el tratamiento consiste en <span class="colored_emphasis">estimular</span>, con el uso de <span class="colored_emphasis">semillas</span> o <span class="colored_emphasis">anillos</span>, las zonas reflejas y dolorosas de manos y pies para <span class="colored_emphasis">influir sobre todo el cuerpo</span> mejorando así la sintomatologia patológica de las enfermedades.</p>
    <p class="bottom_spacing">Al comprender las similitudes exactas entre las diferentes áreas del cuerpo y las manos y los pies se puede influir en cualquier problema utilizando la combinación de puntos correspondiente.</p>
  </div>
  <div>
    <img src="{{asset('images/hand_massage.png')}}" class="top_spacing" alt="imagen de una mujer recibiendo un masaje de manos">
  </div>
</div>
<div class="dark_background therapies_colored_containers">
  <div>
    <img src="{{asset('images/chinese_teapot_on_a_bamboo_surface.png')}}" class="teapot_picture" alt="imagen de un juego de té chino">
  </div>
  <div class="therapies_text_containers">
    <h3 class="align">Dietética según Yin Yang</h3>
    <p class="top_spacing">En la Medicina Tradicional China el <span class="colored_emphasis">diagnóstico</span>, la <span class="colored_emphasis">fisiología</span>, la <span class="colored_emphasis">patología</span> y el <span class="colored_emphasis">tratamiento</span> pueden ser clasificados según la teoría del <span class="colored_emphasis">Yin - Yang</span>. De esta dualidad parte todo en el macrocosmos y el cuerpo humano como microcosmos es un reflejo que puede ser observado a través de este eje.</p>
    <p>Todos los procesos fisiológicos, signos y síntomas pueden analizarse bajo la luz de esta teoría.</p>
    <p class="bottom_spacing">En el diagnostico diferencial por lo tanto dependiendo de las características de la persona, se pueden encontrar desequilibrios con tendencia al exceso de Yin e consecuente deficiencia Yang o viceversa. La dietética y los alimentos también pueden ser clasificados según el Yin (hidratan y enfrían el cuerpo) o el Yang (calientan y promueven los movimientos fisiológicos) y constituyen <span class="colored_emphasis">una herramienta esencial para recobrar la armonía del organismo</span>.</p>
  </div>
</div>
<div class="buttons_container align top_spacing bottom_spacing">
  <a href="{{ route('home') }}">
    <button type="submit" class="button_text">{{ __('PEDIR UNA CITA') }}</button> 
  </a>
</div>
@endsection