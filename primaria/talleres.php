<?php
// Functions of the website
include '../interfaz/functions.php';
// Seo || title || subtitle =>
$subtitle = 'Talleres';
// Active class on nav
$active = 4; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<?php include 'head.php'; ?>
</head>
<body>
  <div id="wrapper"><!-- Wrapper -->
    <div id="inner">
      <div id="wrapp-content">
        <?php include 'header.php' ?>
          <main id="content" class="cfix"><!-- MAIN => [CONTENT] -->
            <section id="contenido">
              <div id="inner-content">
                <div id="block">
                  <article id="talleres"><!-- Dinamic => [CONTENT] -->
                    <h1 class="margin-bottom">TALLERES</h1>
                    <p>
                      Hoy los niños y niñas nos proponen entenderlos como seres con potencialidades y proyectos, deseosos de ser
                      activos en su desarrollo y optimistas al encarar experiencias de exploración del mundo, de los sentidos y
                      de significados. Desde esta perspectiva, en el Colegio Antonio Berni se proponen diferentes espacios para
                      experiencias que dan lugar al desarrollo de sus potencialidades y recursos, poniendo en juego sus conocimientos,
                      compartiendo ideas y vivencias y relacionándose con pares y adultos apartir de temas que los convocan
                    </p>

                    <section id="titeres" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Titeres</h2>
                      <p>
                        El títere propende a la descarga emocional, espiritual y psicológica del niño. Un niño con un muñeco en la mano
                        será un libro abierto. Contará, representando a través de los personajes, su momento vital. Sus alegrías y sus
                        tristezas estarán presentes allí. El títere contribuye a facilitar la relación con sus pares y adultos.
                      </p>
                    </section>
                    <div class="imageHolder gallery-parent">
                      <a href="img/fotos/clh1.jpg">
                        <img src="img/fotos/clh1.jpg" title="Un titulo" />
                      </a>
                      <a href="img/fotos/clh2.jpg">
                        <img src="img/fotos/clh2.jpg" title="Un titulo" />
                      </a>
                    </div>

                    <section id="Juguetes-de-madera">
                      <h2 class="margin-bottom">Juguetes de madera</h2>
                      <p>
                        La madera es un material cálido que se puede romper y recomponer; destruir y reformar; pintar y despintar.
                      </p>
                      <br />
                      <p>
                        La madera es uno de los materiales más cercanos al ser humano. Nos permite fabricar "JUGUETES" más simples,
                        que le ofrecen al niño la oportunidad de poner en juego sus CAPACIDADES INTELECTUALES, ya que un niño puede
                        sacar mucho más provecho de un juguete simple que de uno programado, para hacer las cosas por su cuenta. Un
                        juguete de madera transmitirá la DEDICACION y PACIENCIA con las que fue hecha una pieza única y con cierto
                        gusto estético. Está visto que la madera nunca va a pasar de moda, ya que representa el acercamiento a esa
                        fantasía del niño que le permite tocar un material noble, que por el simple hecho de poseer forma y un
                        mecanismo elemental, se hace atractivo para él. Los juguetes de madera son más románticos y estimulan la
                        fantasía al moverse sin usar baterías.
                      </p>
                    </section>
                    <div class="imageHolder gallery-parent">
                      <a href="img/fotos/clh1.jpg">
                        <img src="img/fotos/clh1.jpg" title="Un titulo" />
                      </a>
                      <a href="img/fotos/clh2.jpg">
                        <img src="img/fotos/clh2.jpg" title="Un titulo" />
                      </a>
                    </div>

                    <section id="Filosofia-para-ninos" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Filosofía para niños</h2>
                      <p>
                        Las vivencias en la infancia están llenas de inquietudes, y la respuesta natural ante ellas, sobre todo en el
                        primer ciclo, suele ser de asombro o perplejidad. Sin embargo, a medida que avanzamos en el proceso de
                        escolarización, aprendemos, paradójicamente, a perder esta capacidad innata de formular preguntas, priorizando
                        la “corrección o incorrección” de aquello que decimos y hacemos. El taller de Filosofía propone darle lugar a
                        la necesidad que tienen los niños de examinar y discutir los interrogantes que se les presentan, sin brindarles
                        una respuesta cerrada, sino justamente, potenciando esta actitud indagatoria. La palabra de los niños es entonces
                        la gran protagonista del taller de Filosofía.
                      </p>
                    </section>

                    <section id="Ajedrez" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Ajedrez</h2>
                      <p>
                        El ajedrez es un juego que puede ser utilizado como herramienta pedagógica para las demás áreas curriculares ya
                        que estimula la memoria, el cálculo, el análisis entre otros beneficios. También afianza la personalidad de los
                        que lo practican ya que al aceptar la derrota y los errores, el jugador se ve en un constante duelo emocional
                        que con la práctica logra desarrollar cada vez más su creatividad e inventiva.
                      </p>
                    </section>

                    <section id="Carpinteria" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Carpintería</h2>
                      <p>
                        El taller de carpintería está orientado a estimular habilidades motoras desde las herramientas propias de la actividad.
                        Los niños conocen el manejo de las mismas, terminología específica del quehacer y realizan a lo largo del ciclo varios
                        productos elegidos después de pasar por un proceso del dibujado y bocetado. Medidas, cálculos y el manejo de
                        herramientas se mezclan en un momento lúdico para los niños.
                      </p>
                    </section>
                    <div class="imageHolder gallery-parent">
                      <a href="img/fotos/clh1.jpg">
                        <img src="img/fotos/clh1.jpg" title="Un titulo" />
                      </a>
                      <a href="img/fotos/clh2.jpg">
                        <img src="img/fotos/clh2.jpg" title="Un titulo" />
                      </a>
                    </div>

                    <section id="Fotografia" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Fotografía</h2>
                      <p>
                        El taller surge con idea de ofrecer una aproximación a la expresión a través de un medio visual como la fotografía.
                        El objetivo es explorar y profundizar en la búsqueda temática y personal en una la indagación constante de nuevas
                        miradas.
                      </p>
                    </section>
                    <figure class="gallery-3 gallery-parent cfix">
                        <a href="img/plataforma/1-1.jpg">
                            <img src="img/plataforma/1-1.jpg" alt="" title="Titulo 1">
                        </a>
                        <a href="img/plataforma/1-2.jpg">
                            <img src="img/plataforma/1-2.jpg" alt="" title="Titulo 2">
                        </a>
                        <a href="img/plataforma/1-1.jpg">
                            <img src="img/plataforma/1-1.jpg" alt="" title="Titulo 3">
                        </a>
                    </figure>

                    <section id="Iniciacion-deportiva" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Iniciación Deportiva</h2>
                      <p>
                        Desde el Taller de Iniciación Deportiva se propone a los niños a participar de actividades lúdicas conducidas por
                        profesores de educación física. El objetivo para los más pequeños es insertarlos, de manera recreativa, en el mundo
                        de los deportes y la actividad física.
                      </p>
                    </section>
                    <div class="imageHolder gallery-parent">
                      <a href="img/fotos/clh1.jpg">
                        <img src="img/fotos/clh1.jpg" title="Un titulo" />
                      </a>
                      <a href="img/fotos/clh2.jpg">
                        <img src="img/fotos/clh2.jpg" title="Un titulo" />
                      </a>
                    </div>

                    <section id="Ceramica" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Cerámica</h2>
                      <p>
                        En el taller de Cerámica nos proponemos el desarrollo y descubrimiento de las posibilidades que brinda la acilla y
                        el proceso cerámico con el objetivo no solo de acercarse y disfrutar de la experiencia sino también con la intención
                        de lograr producir obras ricas en elementos plásticos. Trabajaremos con disparadores claros incluyendo y valorando
                        las inquietudes, reflexiones y percepciones de los niños dentro del marco de la propuesta. Promovemos, de esta manera,
                        la comunicación del niño consigo mismo, con sus pares y con los adultos.
                      </p>
                    </section>
                    <figure class="gallery-3 gallery-parent cfix">
                        <a href="img/plataforma/1-1.jpg">
                            <img src="img/plataforma/1-1.jpg" alt="" title="Titulo 1">
                        </a>
                        <a href="img/plataforma/1-2.jpg">
                            <img src="img/plataforma/1-2.jpg" alt="" title="Titulo 2">
                        </a>
                        <a href="img/plataforma/1-1.jpg">
                            <img src="img/plataforma/1-1.jpg" alt="" title="Titulo 3">
                        </a>
                    </figure>

                    <section id="Orquesta" class="margin-top margin-bottom">
                      <h2 class="margin-bottom">Orquesta</h2>
                      <p>
                        Formamos un área de desarrollo de las disciplinas sonoro- musicales, donde los niños y jóvenes incorporan herramientas
                        técnicas en el campo de la formación instrumental además de herramientas discursivas y expresivas dentro del propio
                        lenguaje de la Música. Buscamos aunar los contenidos técnicos y estéticos con vivencias provenientes de otras
                        instancias de formación integradoras y de producción y exposición.
                      </p>
                    </section>

</article><!-- END: dinamic => [CONTENT] -->
</div>
</div>
</section>
<?php include '../interfaz/aside.php'; ?>
</main><!-- END: MAIN => [CONTENT] -->
</div>
<?php include 'buttons.php'; ?>
</div>
<?php include 'footer.php'; ?>
</div><!-- END: wrapper -->
</body>
</html>
