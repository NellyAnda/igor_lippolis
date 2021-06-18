@extends('layouts.app')

@section('pageTitle', 'Tratamientos')

@section('image_header')
<div class="treatments_background_picture">
  <h1>Tratamientos</h1>
</div>
@endsection


@section('content')

<h2>Tratamientos</h2>
<div class="lotus_background_picture top_spacing bottom_spacing"  id="cosmetic_acupuncture">
  <img src="{{asset('images/lotus.jpg')}}" class="lotus_picture" alt="imagen de un flor de loto rosa">
  <div class="lotus_text_container"> 
    <div class="lotus_text_containers">
      <div>
        <h3 class="top_spacing bottom_spacing">Beneficios de la acupuntura cosmetica</h3>
      </div>
      <div class="treatments_containers">
        <ul>
          <li>Incrementa la producción de colágeno</li>
          <li>Técnica indolora que se realiza en el gabinete, sin necesidad de un periodo de recuperación</li>
          <li>Provoca un lifting natural, no altera la expresión facial</li>
          <li>No ocasiona secuelas ni procesos inflamatorio</li>
          <li>Favorece el tono muscular a facial y corporal</li>
          <li>Disminuye el estrés que se refleja en la cara</li>
          <li>Elimina las líneas de expresión y mejora la apariencia de las arrugas profundas</li>
          <li>Es excelente para tensar parpados caídos</li>
          <li>Aminora las bolsas que se ubican debajo de los ojos</li>
          <li>Ayuda a disminuir la papada</li>
          <li>Reduce pigmentaciones de la piel</li>
          <li>Devuelve la luminosidad natural de la piel</li>
          <li>Retarda el envejecimiento facial y corporal</li>
          <li>Reduce el tamaño de los poros</li>
          <li>Aumenta el efecto lifting a nivel facial</li>
        </ul>
      </div>
    </div>
    <div class="lotus_text_containers">
      <div>
        <h3 class="top_spacing bottom_spacing">¿Cuándo se perciben los resultados?</h3>
      </div>
      <div class="treatments_containers">
        <p>
          La <span class="colored_emphasis">acupuntura estética</span> destaca principalmente por sus efectos inmediatos. Muchas personas afirman que ya después de la primera sesión de acupuntura sienten la piel más tersa y más suave.<br>
          <span class="colored_emphasis">Al recibir mejor aporte de sangre, los tejidos reaccionan al momento.</span>
        </p>
      </div>
    </div>
    
  </div>
</div>
<div class="woman_breathing_background_picture top_spacing bottom_spacing"  id="smoking">
  <img src="{{asset('images/woman_breathing.jpg')}}" class="woman_breathing_picture" alt="imagen de una mujer mirando al cielo, respirando profundamente y estirando los brazos hacia atrás">
  <div class="smoking_text_container"> 
    <div class="smoking_text_containers">
      <h3 class="top_spacing bottom_spacing">Tabaquismo</h3>
    </div>
    <div class="treatments_containers smoking_text_containers">
      <p>La medicina tradicional china ayuda a retomar una <span class="dark_emphasis">vida sana</span> sin tabaco :</p>
      <p>Ayuda a <span class="dark_emphasis">reducir o eliminar los síntomas del síndrome de abstinencia</span> tales como ansiedad, ganas compulsivas de fumar, irritabilidad, falta de concentración, depresión, migraña, cansancio.</p>
      <p>Contribuye a <span class="dark_emphasis">limpiar los pulmones y el organismo</span> de todas las sustancias nocivas del tabaco.</p>
      <p>La dependencia a la nicotina y los síntomas que derivan de esta <span class="dark_emphasis">se pueden tratar</span> con la auriculoterapia (microsistema del pabellón auricular) y acupuntura.</p>
      <p>El factor importante que el paciente debe tener bien claro es que sin la propria fuerza de voluntad el efecto terapéutico puede disminuir.</p>
    </div>
  </div>
</div>
<div class="dark_background acupuncture_main_container top_spacing bottom_spacing" id="diet">
  <h3 class="bottom_spacing">Acupuntura para perder peso</h3>
  <div class="acupuncture_treatment">
    <div class="treatments_containers acupuncture_text_containers top_spacing bottom_spacing">
      <p>
        Los tratamientos de la Medicina China para <span class="colored_emphasis">adelgazar</span> no son nuevos y son altamente eficaces. Para la Medicina Tradicional China la <span class="colored_emphasis">obesidad</span> y el <span class="colored_emphasis">peso en exceso</span>, una vez que se hayan descartado causas médicas más complejas, son el resultado de la acumulación de Tan-Humedad. El Tan es un desecho que <span class="colored_emphasis">se acumula en el cuerpo</span> debido a que los órganos que están implicados en la <span class="colored_emphasis">digestión</span> y el <span class="colored_emphasis">metabolismo de los líquidos</span>, el bazo y el estómago, no funcionan bien. Lo más adecuado antes de comenzar el tratamiento es realizar un mediante una diferenciación de síndromes según la Medicina Tradicional China.</p>
        <p>Una de las diferencias de la Medicina China con respecto a la Occidental es que no sólo realiza el tratamiento del síndrome actual y sus síntomas, sino también <span class="colored_emphasis">la causa que lo ha originado</span>. En la estadística basada en la evidencia que mide la eficacia de la acupuntura para la pérdida de peso se comprobó que los tratamientos aumentan y regulan la grelina, una hormona que controla la iniciación de las comidas y la <span class="colored_emphasis">disminución de la insulina y la leptina</span>, hormona que estimula la sensación de estar lleno y regula el almacenamiento de grasa y el metabolismo. La insulina regula el metabolismo de los <span class="colored_emphasis">carbohidratos</span> y las <span class="colored_emphasis">grasas</span> y la absorción de la <span class="colored_emphasis">glucosa</span> de la sangre.
        </p>
      </div>
      <img src="images/acupuncture.jpg" class="abdominal_acupuncture_picture top_spacing" alt="imagen del vientre de una mujer recibiendo tratamiento de acupuntura">
    </div>
    <div class="acupuncture_treatment">
      <img src="images/acupuncture_meridian_traditional_chinese_medicine.png" class="meridian_picture" alt="imagen del cuerpo humano con las líneas de los meridianos utilizados en la medicina china">
      <div class="treatments_containers acupuncture_text_containers top_spacing">
        <p>Está demostrado ademas que, como reacción al pinchazo de la aguja, en unos puntos muy específicos del organismo, éste libera sustancias transmisoras específicas y que por esta razón el estímulo de la aguja actúa como <span class="colored_emphasis">calmante</span> y <span class="colored_emphasis">regulador del sistema vegetativo</span> (o autónomo). Como efecto directo, los trastornos funcionales de los órganos y los del sistema nervioso, en particular los del sistema vegetativo, así como los <span class="colored_emphasis">problemas de circulación</span> y los <span class="colored_emphasis">dolores crónicos</span> pueden <span class="colored_emphasis">ser mejorados</span>.</p>
        <p>Este hallazgo sugiere que la acupuntura puede realmente reducir las hormonas que conducen a comer en exceso. Por lo tanto esta técnica puede controlar el apetito <span class="colored_emphasis">aumentando el metabolismo basal y estimulando la eliminación de líquidos a nivel renal</span>, es decir, los estímulos producidos por la acupuntura, controlan el apetito, disminuyen la ansiedad por comer exageradamente y regulan el metabolismo, todo lo cual, <span class="colored_emphasis">favorece la pérdida de peso</span> y <span class="colored_emphasis">potencia la autoestima</span>.</p>
      </div>
    </div>
  </div>
  <div class="hand_massage_background_picture top_spacing bottom_spacing" id="pms">
    <img src="{{asset('images/hand_massage.png')}}" class="hand_massage_picture" alt="imagen de una mujer recibiendo un masaje de manos">
    <div class="treatments_containers hand_massage_text_container"> 
      <div class="hand_massage_text_containers">
        <h3 class="top_spacing bottom_spacing">Sindrome premenstrual</h3>
      </div>
      <div class="hand_massage_text_containers">
        <p>El <span class="colored_emphasis">síndrome premenstrual</span> comprende síntomas emocionales y físicos que aparecen antes del <span class="colored_emphasis">período menstrual</span> (agotamiento, tristeza, perdida de concentración, irritabilidad, agresividad, distensión abdominal, insomnio...).<br>
          La sintomatología puede aparecer desde las dos semanas anteriores hasta el día previo a la menstruación.</p>
          <p>El tratamiento incluye técnicas de acupuntura, digitopresion, moxibustion así como la integración de plantas medicinales y alimentos apropiados dependiendo de las manifestaciones patológicas, de la lengua, del pulso, y otras técnicas de diagnostico.</p>
        </div>  
      </div>
    </div>
    <div class="woman_closed_eyes_background_picture top_spacing bottom_spacing" id="migraine">
      <img src="{{asset('images/woman_closed_eyes.jpg')}}" class="woman_closed_eyes_picture" alt="imagen del rostro de una mujer en las sombras con los ojos cerrados">
      <div class="headache_text_container"> 
        <div class="treatments_containers headache_text_containers">
          <div>
            <h3 class="top_spacing bottom_spacing">Cefalea</h3>
          </div>
          <div>
            <p>En la medicina tradicional china las <span class="colored_emphasis">cefaleas</span> no constituyen entidades aisladas patológicamente hablando, sino que son la consecuencia de desequilibrios fisiologicos y/o emocionales provocados por causas como debilidad constitucional, irregularidades alimentarias, alteraciones emocionales, traumatismos o descanso insuficiente entre otras.</p>
          </div>
        </div>
        <div class="treatments_containers headache_text_containers">
          <p>Se pueden diferenciar tres diferentes grados de cefalea :</p>
          <p><span class="colored_emphasis">Cefalalgia</span> : dolor de cabeza que se caracteriza por una sensación de pesadez, hinchazón, dolor pulsátil, sensación de quemazón...</p>
          <p><span class="colored_emphasis">Cefalea</span> : grado de intensidad mayor, aunque a menudo se emplea como sinónimo de cefalea. La causa es más tensional.</p>
          <p><span class="colored_emphasis">Migraña</span> : es el cuadro más grave. Tipo de cefalea secundaria a un trastorno paroxístico y periódico de los vasos craneales. Se manifiesta con cefalea hemicraneal (afectación unilateral), a veces acompañada de vómitos, sensación de nausea y otra sintomatología neurológica.</p>
        </div>
      </div>
    </div>
    <div class="lumbalgia_insomnia_container" id="lumbago">
      <div class="man_stretching_background_picture top_spacing bottom_spacing">
        <img src="{{asset('images/man_stretching.jpg')}}" class="man_stretching_picture" alt="imagen de un hombre estirando frente al mar">
        <div>
          <h3 class="top_spacing bottom_spacing">Lumbalgia</h3>
        </div>
        <div class="treatments_containers">
          <p>Es la forma con la que se denomina al dolor en la región lumbar. Puede ser <span class="dark_emphasis">bilateral o unilateral</span>.<br>
            Según la MTC, la lumbalgia, ya sea unilateral o bilateral, está estrechamente relacionada con el riñón que es el regente de esa área del cuerpo. Estasis, estancamiento de sangre o Insuficiencia del riñón pueden provocar un bloqueo o insuficiencia energética en la zona lumbar que da lugar a la inflamación (definida como <span class="dark_emphasis">lumbalgia</span>).<br>
            Con la combinación de técnicas como acupuntura, masaje tuina, moxa, auriculoterapia o ventosas se obtiene un resultado muy efectivo que <span class="dark_emphasis">disminuye progresivamente el dolor</span> lumbar en pocas sesiones de tratamiento. </p>
          </div>
        </div>
        <div class="woman_opened_eyes_background_picture top_spacing bottom_spacing" id="insomnia">
          <img src="{{asset('images/woman_in_bed.jpg')}}" class="woman_opened_eyes_picture" alt="imagen de una mujer acostada en la cama sosteniendo una manta hasta debajo de sus ojos bien abiertos">
          <div class="woman_opened_eyes_text_container">
            <div>
              <h3 class="top_spacing bottom_spacing">Insomnio</h3>
            </div>
            <div class="treatments_containers">
              <p>La acupuntura para el insomnio ha sido practicada durante cientos de años con resultados óptimos.<br>
                La MTC es muy efectiva para tratar este trastorno, incluyendo el <span class="dark_emphasis">insomnio</span> de tipo crónico que se ha tratado con fármacos durante mucho tiempo.<br>
                El tratamiento puede tener duraciones diferentes, dependiendo de cada persona. El insomnio suele remitir entre las cuatro y diez sesiones. A menudo es necesario añadir a la terapia la moxibustión y el uso de plantas medicinales.</p>
              </div>
            </div>
          </div>
        </div>        
        <div class="chinese_herbal_medicine_background_picture top_spacing bottom_spacing" id="immune_system">
          <img src="{{asset('images/chinese_herbal_medicine_small.png')}}" class="chinese_herbal_medicine_picture" alt="imágenes de diferentes hierbas utilizadas en la medicina china">
          <div class="immune_system_text_container">
            <div class="immune_system_text_containers">
              <h3 class="top_spacing bottom_spacing">Defensas imunitarias</h3>
            </div>
            <div class="treatments_containers immune_system_text_containers bottom_spacing">
              <p><span class="colored_emphasis">Energéticamente</span> debe haber un equilibrio en el organismo para que los diferentes sistemas que lo integran puedan funcionar a su máximo potencial y en armonía. En el caso del <span class="colored_emphasis">sistema inmunologico</span>, en la medicina tradicional china encontramos el Wei Qi (energía defensiva) que tiene función de protección y adaptación del organismo análogas al sistema inmunológico.</p>
              <p>Objetivo del tratamiento es que el organismo sea capaz de <span class="colored_emphasis">mantener el equilibrio</span> (homeostasis) aunque las condiciones externas cambien.</p>
            </div>
          </div>
        </div>
        <div class="woman_meditating_background_picture top_spacing bottom_spacing" id="anxiety">
          <img src="{{asset('images/woman_meditating.jpg')}}" class="woman_meditating_picture" alt="imagen de una mujer sentada con las piernas cruzadas sobre una duna de arena y frente al desierto">
          <div class="anxiety_text_main_container"> 
            <div>
              <h3 class="top_spacing bottom_spacing">Tratamiento del ansiedad</h3>
            </div>
            <div class="treatments_containers anxiety_text_container">
              <div class="anxiety_text_containers">
                <p>Por <span class="colored_emphasis">ansiedad</span> se entiende un <span class="colored_emphasis">estado crónico de desasosiego y miedo</span>; que puede ser inducido también de otras emociones tales como la reflexión excesiva, el exceso de alegría, la preocupación, la conmoción, la vergüenza, la culpa.<br>
                  Cada uno de estos estados anímicos puede llevar a un estancamiento de energía o de sangre y provocar desequilibrios fisiológicos en el Yin o en el Yang y en los diferentes elementos (u órganos).
                </p>
              </div>
              <div class="anxiety_text_containers">
                <p>Se ha demostrado que la acupuntura  tiene acción sobre el sistema nervioso autónomo <span class="colored_emphasis">disminuyendo la presión arterial en situaciones de estrés y también tiene efectos en los centros del dolor y del miedo en el cerebro</span>, regiones que se activan a raíz de trastornos postraumáticos ocasionados por el estrés , por lo que se puede llegar a sentir un importante alivio de la sintomatologia propria del ansiedad a partir de las primeras sesiones.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="buttons_container align top_spacing bottom_spacing">
          <a href="{{ route('home') }}">
            <button type="submit" class="button_text">{{ __('PEDIR UNA CITA') }}</button> 
          </a>
        </div>
        @endsection 
        
        
        