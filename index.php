<!-- Vista -->
<!DOCTYPE html>
<html lang="es">
<head>
    <div class="has-background-primary">
	<title>El Faro - Noticias de última hora</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
	<header>
		<section class="hero is-primary">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">El Faro</h1>
					<img src="https://upload.wikimedia.org/wikipedia/commons/8/85/Logo_El_Faro.jpg" alt="Logo de El Faro" class="image is-128x128">
				</div>
			</div>
		</section>
    </div>
    <head>
  <title>Registro de usuario</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <h1>Registro de usuario</h1>
    <hr>

    <form action="Controlador/Formulario.php" method="POST">
      <div class="form-group">
        <label for="Usuario">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirmar contraseña:</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
      </div>
      <button type="submit" class="btn btn-primary" name="register">Registrar</button>
    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
<div class="container">
    <h1>Formulario de contacto</h1>
    <hr>
<!-- Formulario de contacto -->
<form action="Mensaje.php" method="POST">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>
        <br><br>
      </div>

      <button type="submit" class="btn btn-primary" name="Enviar">Enviar Mensaje</button>
    </form>
 </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</form>
</div>
		<nav class="navbar" role="navigation" aria-label="main navigation">
           
			<div class="navbar-menu">
				<div class="navbar-start">
					<a href="#inicio" class="navbar-item">Inicio</a>
					<a href="#deporte" class="navbar-item">Deporte</a>
					<a href="#negocios" class="navbar-item">Negocios</a>
				</div>
			</div>
		</nav>
	</header>
	<main>
        <footer class="footer is-medium">
            <div class="content has-text-centered">
        <div class="notification is-danger has-text-centered">
            <p>Aviso importante: Se ha detectado un corte del suministro eléctrico que afecta a cerca de 300 mil clientes en varias regiones del país. Más información en la sección de noticias.</p>
          </div>
        <section class="section"></div>
            <div class="container">
              <h2 class="title is-2">Artículos Recientes</h2>
              <div class="columns is-multiline">
                <div class="column is-one-third">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="https://www.latercera.com/resizer/biL4FF-NEsQ28ZbxCF3TOv-w03I=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/Q6S3ETVLD5BLXCGGJJAGDH7KXI.jpg" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <p class="title is-4">Detienen a un cuarto sospechoso del crimen del suboficial Daniel Palma</p>
                      <p class="subtitle is-6">La Tercera
                    </p>
                      <div class="content">
                        <p>Fue capturado en la ciudad de Ovalle por personal del OS-9 de Carabineros, según confirmó el general director de la institución, Ricardo Yáñez.</p>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <a href="https://www.latercera.com/nacional/noticia/detienen-a-un-cuarto-presunto-involucrado-en-el-crimen-del-suboficial-daniel-palma/F3DTYVRH4BEUFGZ7O5AW2NPUNE/#" class="card-footer-item">Leer más</a>
                    </footer>
                  </div>
                </div>
                <div class="column is-one-third">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="https://cooperativa.cl/noticias/site/artic/20230427/imag/foto_0000000120230427195629.jpg" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <p class="title is-4">Primer ministro peruano pidió a Boric no tirar "sus problemas" a otro país</p>
                      <p class="subtitle is-6">Periodista Digital: EFE</p>
                      <div class="content">
                        <p>El primer ministro de Perú, Alberto Otárola, exhortó este jueves al Presidente Gabriel Boric a que "solucione sus problemas y que no los tire hacia otro país", en alusión a la crisis migratoria que afecta a la frontera entre ambos países, donde cientos de personas se encuentran varadas desde hace días.</p>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <a href="https://cooperativa.cl/noticias/pais/poblacion/inmigrantes/primer-ministro-peruano-pidio-a-boric-no-tirar-sus-problemas-a-otro/2023-04-27/195629.html#" class="card-footer-item">Leer más</a>
                    </footer>
                  </div>
                </div>
                <div class="column is-one-third">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="https://media.biobiochile.cl/wp-content/uploads/2023/04/autonomia-financiera-gobiernos-regionales-750x400.png" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <p class="title is-4">Boric anuncia proyecto de ley que busca favorecer autonomía financiera de Gobiernos Regionales</p>
                      <p class="subtitle is-6">Manuel Cabrera</p>
                      <div class="content">
                        <p>El Presidente de la República, Gabriel Boric, anunció este jueves la presentación de un proyecto de ley que fortalece la autonomía financiera, presupuestaria y fiscal de los Gobiernos Regionales.</p>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <a href="https://www.biobiochile.cl/noticias/nacional/chile/2023/04/27/boric-anuncia-proyecto-de-ley-que-busca-favorecer-autonomia-financiera-de-gobiernos-regionales.shtml#" class="card-footer-item">Leer más</a>
                    </footer>
                  </div>
                </div>
            </div>
        </div>
		<section id="inicio" class="section">
			<div class="container">
				<h2 class="title is-2">Últimas noticias</h2>
				<table class="table is-striped is-fullwidth">
					<thead>
						<tr>
							<th>Título</th>
							<th>Fecha</th>
							<th>Categoría</th>
						</tr>
					</thead>
					<tbody>
						<tr>

							<td>Hombre que acabó con su vida</td>
							<td>3 ABR 2023</td>
							<td>General</td>
						</tr>
						<tr>

							<td>Corte de luz afecta a cerca de 300 mil clientes</td>
							<td>4 ABR 2023</td>
							<td>General</td>
						</tr>
						<tr>

							<td>La U gana de forma consecutiva como local tras siete meses</td>
							<td>11 FEB 2023</td>
							<td>Deporte</td>
						</tr>
					</tbody>
				</table>
                <div>
                </div>
            </div>
        </div>
    </div>
   </table>
                </div>
                <div class="has-background-primary">
                <div class="columns is-multiline">
                    <div class="columns is-centered">
                        <div class="column is-half">
						<div class="card">
							<header class="card-header">
								<p class="card-header-title">El dramático caso de un hombre que acabó con su vida tras conversar con una Inteligencia Artificial</p>
							</header>
							<div class="card-content">
								<div class="media">
									<div class="media-left">
										<figure class="image is-148x148">
											<img src="https://www.latercera.com/resizer/f_NUd_zO5hNzvFnCglJWTeDSNGg=/800x0/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/GCM6K3AUS5GP7EXWNVB2WZYQQA.png" alt="Imagen referencial">
										</figure>
									</div>
									</div>
								</div>
								<div class="content">
									<p class="subtitle is-6">Categoría: General</p>
									<p>Como una forma de despejar sus inquietudes, un joven belga conversaba muy seguido con Eliza, un chatbot de Inteligencia Artificial. En sus últimos días, el hombre se aisló de todo su entorno y se convenció que su única esperanza estaba en lo que la tecnología podría arreglar en el mundo.
									Tenía una vida normal y estable: buen trabajo, una familia y 30 años de edad. Un joven científico de Bélgica, muy preocupado por el medioambiente, se suicidó luego de tener una serie de conversaciones por seis semanas con un chatbot de Inteligencia Artificial (IA).
									Hasta ahora se ha revelado que tenía dos hijos, estaba casado y se desempeñaba como investigador en el área de la salud. De acuerdo al testimonio de su esposa, brindado al diario La Libre Belgique, por lo menos desde hace dos años que el joven tenía profundas inquietudes por los efectos del cambio climático.
									Al final, la tecnología habría manipulado emocionalmente al hombre hasta convencerlo de que se quitara la vida.
									</p>
                                    <div class="media-content">
										<audio controls src="audio_ia.mp3">
                                            Tu navegador no soporta la etiqueta audio.
                                            <audio>
								</div>
							</div>
						</div>
					</div>
			</div>
            <div class="has-background-primary">
            <div class="columns is-multiline">
                <div class="columns is-centered">
                    <div class="column is-half">
                 <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Corte de luz afecta a cerca de 300 mil clientes en varias regiones del país</p>
                </header>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-148x148">
                                <img src="https://assets.tvu.cl/2019/03/corte_luz.jpeg" alt="Imagen referencial">
                            </figure>
                        </div>
                        </div>
                            </div>
                          <div class="content">
                                 <p class="subtitle is-6">Categoría: General</p>
                                 <P>Región más afectada por interrupción del suministro eléctrico es Valparaíso. En la Región Metropolitana se registran 15.545 afectados y la falla obligó a suspender el servicio Metrotren Nos y ha dejado varios semáforos apagados.
							     Un corte del suministro eléctrico se registra durante la jornada de este martes, situación que se habría iniciado cerca de las 17.30 horas en las regiones de Valparaíso, Biobío, La Araucanía y Metropolitana, según han reportado clientes y las compañías de distribución que afecta a cerca de 300 mil clientes.
							    De acuerdo a la Superintendencia de Electricidad y Combustibles (SEC), hasta las 18.26 horas a lo largo del país existen 298.816 clientes sin servicio. Estos se concentran en Valparaíso con 234.917 usuarios que no cuentan con suministro y donde la empresa Chilquinta ha informado de la normalización del servicio para cerca de las 22 horas.
                        </P>
                    </div>
                </div>
                </div>
                 </div>
           </div>
           <div class="has-background-primary">
           <div class="columns is-multiline">
            <div class="columns is-centered">
                <div class="column is-half">
           <div class="card">
            <header class="card-header">
                <p class="card-header-title">La U gana de forma consecutiva como local tras siete meses</p>
            </header>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-148x148">
                            <img src="https://www.latercera.com/resizer/p4iaBYsgeb15IheuPzcARx6aKXs=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/U37DUNKTMFFRNK7VMJA3LVHERY.jpg" alt="Imagen referencial">
                        </figure>
                    </div>
                    </div>
                </div>
                <div class="content">
                    <p class="subtitle is-6">Categoría: Deporte</p>
                    <P>Sonríen en la U. El doblete de Cristian Palacios les dio un triunfo clave frente a Magallanes en el arranque de la jornada sabatina del fútbol chileno. El Chorri le da una victoria valiosa a los de Mauricio Pellegrino, que llegan a seis puntos en el Campeonato Nacional. Además, rompe una mala racha de siete meses.
                    Esto porque Universidad de Chile no sumaba dos victorias al hilo en condición de local desde mayo y julio del año pasado, cuando vencieron a Deportes La Serena, Huachipato y Unión La Calera. Ahí llegaron a tres duelos sumando abrazos. En esta ocasión, el próximo desafío recibiendo a un rival será ante los cementeros, en marzo.
                    </p>
                </div>
            </div>
         </div>
        </table>
		</section>
        <section id="deporte" class="section">
            <div class="has-background-primary">
			<div class="container">
				<h2 class="title is-2">Deporte</h2>
				<p> En esta sección encontrarás noticias sobre deportes.</p><div>
			</div>
        </div>
    </div>
    <div class="has-background-primary">
    <div class="columns is-multiline">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="column is-half"></div>
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Se busca combatir el sedentarismo: el torneo que reunirá a jóvenes de todo Chile</p>
                        </header>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-148x148">
                                        <img src="https://cdn.shopify.com/s/files/1/2618/5696/articles/calistenia_1024x460.jpg?v=1572250985" alt="Imagen referencial">
                                    </figure>
                                </div>
                                </div>
                            </div>
                            <div class="content">
                                <p class="subtitle is-6">Categoría: Deporte</p>
                                <p>Se efectuará un torneo de calistenia, en el que se llevarán a cabo diferentes etapas clasificatorias en todo Chile totalmente gratuitas.
                                    Los jóvenes de todo Chile cada día buscan hacer más actividad física, tanto como un beneficio social, salud y entretención. Bajo ese contexto, Rexona Calle está de vuelta para tomarse las calles y las plazas con el deporte callejero, pero ahora busca dar un salto y llegar a todas las regiones del país y seguir acercando la actividad física a los chilenos.
                                    Como una forma de incentivar a las personas a tener una vida más activa, busca combatir el sedentarismo a través de una series de acciones para motivar a la comunidad a realizar deporte callejero como: trotar, trial, yoga, bailar, entrenamiento funcional, calistenia, etc.
                                    En esta ocasión se realizará este año la competencia gratuita de calistenia en las zonas norte, centro y sur de Chile buscando a los mejores exponentes del país, en búsqueda de clasificar a la final nacional del campeonato Streetworkout Freestyle.
                                    El evento deportivo tiene como objetivo reunir la mayor cantidad posible de deportes callejeros, teniendo como evento principal un campeonato de calistenia para buscar a los mejores atletas de cada zona para que así estos tengan la oportunidad de disputar el primer lugar en la gran final que se desarrollará en Santiago el 9 de diciembre.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="has-background-primary">
        <div class="columns is-multiline">
            <div class="columns is-centered">
                <div class="column is-half">
             <div class="card">
            <header class="card-header">
                <p class="card-header-title">Colo Colo paga caro los incidentes en el Superclásico y sufre un duro castigo</p>
            </header>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-148x148">
                            <img src="https://img.asmedia.epimg.net/resizer/AetXsxrIBRg04NstjOIFJVfPYDM=/644x362/filters:focal(2868x675:2878x685)/cloudfront-eu-central-1.images.arcpublishing.com/diarioas/RU4ZQVCWJRCKZFBSGQCTCDDITU.jpg" alt="Imagen referencial">
                        </figure>
                    </div>

                    </div>
                        </div>
                      <div class="content">
                             <p class="subtitle is-6">Categoría: Deporte</p>
                             <P>El Tribunal de Disciplina dio a conocer la sanción al cuadro albo por los incidentes vividos en el último duelo contra Universidad de Chile en marzo pasado.
                                En la previa a su estreno en la Copa Libertadores, Colo Colo recibió una mala noticia. El Tribunal de Disciplina dio a conocer el castigo al Cacique por los incidentes vividos en el Superclásico contra Universidad de Chile en marzo pasado.
                                Además, como segunda medida, el próximo clásico ante la U con la localía para los albos, en cualquier torneo oficial chileno, también será sin público, sin importar el estadio.
                                El informe del árbitro Cristián Garay fue clave para la determinación. El juez consignó el lanzamiento de una cortapluma desde el sector Caupolicán y el disparo de fuegos artificiales en dirección a la barra azul, en la galería Magallanes.
                                El tribunal también indicó que Colo Colo trató de eximirse al cumplir los protocolos de los organismos pertinentes, pero desde la ANFP argumentaron que “las medidas tendientes a evitarlos (incidentes) resultaron insuficientes en su aplicación”.
                    </P>
                </div>
            </div>
            </div>
             </div>
       </div>
       <div class="has-background-primary">
       <div class="columns is-multiline">
        <div class="columns is-centered">
            <div class="column is-half">
       <div class="card">
        <header class="card-header">
            <p class="card-header-title">Video: graves incidentes obligan a suspender amistoso entre Osorno y Puerto Montt</p>
        </header>
        <div class="card-content">
                    </figure>
                    <div class="video-responsive">
                        <iframe class="has-ratio is-16by9" width="560" height="315" src="https://www.youtube.com/watch?v=4vZeUkElJeY&pp=ygVQaWRlbzogZ3JhdmVzIGluY2lkZW50ZXMgb2JsaWdhbiBhIHN1c3BlbmRlciBhbWlzdG9zbyBlbnRyZSBPc29ybm8geSBQdWVydG8gTW9udHQ%3D" frameborder="0" allowfullscreen></iframe>
                      </div>
            </div>
            <div class="content">
                <p class="subtitle is-6">Categoría: Deporte</p>
                <P>Las dos escuadras del sur se medían en el Estadio Rubén Marcos, sin embargo, la violencia en las tribunas escaló de tal forma que el árbitro se vio obligado a cancelar el encuentro, debido a que las condiciones mínimas de seguridad no estaban aseguradas.
                    La violencia obliga a suspender un partido de fútbol. Este sábado, Provincial Osorno recibía a Deportes Puerto Montt en un duelo amistoso en el Estadio Rubén Marcos. Parecía un duelo tranquilo, con la visita ganando por la cuenta mínima, pero una pelea entre hinchas escaló muy lejos y desvirtuó el encuentro deportivo.

                   De acuerdo a lo expuesto por el medio SoyChile, el informe de Carabineros indicó que algunos fanáticos de la escuadra de los defines trepó una reja, para saltar al lugar donde se encontraba la parcialidad del elenco local. Allí buscaron destruir algunos elementos del recinto, siendo disuadidos por el personal policial.

                   Las imágenes difundidas exponen que, además, se lanzaron bombas de humo desde la zona de las barras y que la violencia se trasladó hasta el sector de la tribuna, donde algunos hinchas se midieron a los golpes. El ambiente obligó a que el árbitro del choque decidiera que no se jugara más, ya que no estaban las condiciones mínimas para poder efectuar el duelo. Incluso hubo enfrentamientos en las inmediaciones del estadio.
                </p>
            </div>
        </div>
        </div>
    </table>
		</section>
		<section id="negocios" class="section">
            <div class="has-background-primary">
            <div class="container">
				<h2 class="title is-2">Negocios</h2>
				<p>En esta sección encontrarás noticias sobre negocios.</p>
			</div>
            <div class="has-background-primary">
            <div class="columns is-multiline">
                <div class="columns is-centered">
                    <div class="column is-half">
                <div class="column is-half"></div>
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">El multimillonario plan de Japón para que las parejas tengan más hijos (y por qué el dinero no siempre es la solución)</p>
                                </header>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-148x148">
                                                <img src="https://ichef.bbci.co.uk/news/800/cpsprodpb/AC57/production/_128691144_gettyimages-141251337.jpg" alt="Imagen referencial">
                                            </figure>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p class="subtitle is-6">Categoría: Negocios</p>
                                        <p>Es "ahora o nunca", advirtió el primer ministro de Japón, refiriéndose a la brusca caída de la fertilidad en su país.

                                            Fumio Kishida dijo hace unas semanas que su país está al borde de no poder funcionar como sociedad por la histórica baja en la tasa de natalidad: por primera vez en más de un siglo la cantidad de bebés nacidos en Japón cayó por debajo de los 800.000 el año pasado, según estimaciones oficiales.
                                            En la década de 1970, esa cifra superaba los dos millones.
            
                                            "Enfocar la atención en las políticas relacionadas con los niños y la crianza de los niños es un tema que no puede esperar ni posponerse", dijo Kishida frente a los legisladores, y agregó que es uno de los temas más apremiantes en la agenda de este año.
                                            Aunque la caída de los nacimientos es un fenómeno bastante extendido en países desarrollados, el problema es más grave para Japón, dado que la esperanza de vida ha aumentado en las últimas décadas, lo que significa que hay un número creciente de personas mayores y una cantidad cada vez menor de trabajadores para mantenerlos.
                                            El gobierno de Japón ya ha dejado claro que la inmigración no es su solución y decide apostar por el dinero.
            
                                           El plan del primer ministro Kishida es duplicar el gasto público en programas dedicados a apoyar el cuidado de los niños.
            
                                           Pero algunos analistas como Poh Lin Tan, académica de la Escuela de Políticas Públicas Lee Kuan Yew de la Universidad Nacional de Singapur, argumentan que en otros países asiáticos, como Singapur, un mayor gasto fiscal para estimular la natalidad no funcionó.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="has-background-primary">
                    <div class="columns is-multiline">
                    <div class="columns is-centered">
                        <div class="column is-half">
                            <div class="has-background-primary">
                     <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">El joven de 20 años que fundó una empresa que ahora vale casi US$1.000 millones</p>
                    </header>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-148x148">
                                    <img src="https://ichef.bbci.co.uk/news/800/cpsprodpb/69A4/production/_128644072_apandkv.jpg" alt="Imagen referencial">
                                </figure>
                            </div>

                            </div>
                                </div>
                              <div class="content">
                                     <p class="subtitle is-6">Categoría: Emprendimientos</p>
                                     <P>Logró triunfar con una fórmula clásica en el mundo de los negocios: encontrando la solución a un problema.
                                        Pero en el caso de Aadit Palicha, lo que más sorprende es su juventud -tiene apenas 20 años- y la velocidad con la que ha podido crear de cero un negocio que actualmente está valorado en US$900 millones.
                                        Palicha es cofundador de Zepto, una empresa que se dedica al reparto a domicilio de todo tipo de víveres con la promesa de hacer sus entregas en menos de 10 minutos y que en la actualidad es considerada como una de las start-ups de crecimiento más rápido en India.
                                        "Ha sido un viaje bastante loco. Lanzamos Zepto en julio de 2021 y desde entonces, en unos 16-17 meses, pasamos de no vender nada a unos US$200 millones en ventas anuales. Esperamos que esta trayectoria de crecimiento nos lleve a tener ventas anuales deUS$1.000 millones en el tercer o cuarto trimestre de 2023", comentó Palicha durante una entrevista con el programa de Radio Business Daily de la BBC.
                                        Todo comenzó durante la pandemia de coronavirus. Palicha y su cofundador, Kaivalya Vohra, estaban viviendo en Mumbai y buscando una idea de negocio.
        
                                        "Durante el primer confinamiento conseguir alimentosera una pesadilla total. La mayor parte de las opciones fuera de línea estaban cerradas y las opciones en línea tomaban 6 o 7 días en el mejor de los casos, dado el caos reinante", cuenta.
        
                                        "Para nosotros dos era un esfuerzo tremendo solucionar eso y cuando hablamos con nuestros vecinos -la mayor parte de los cuales eran mucho mayores que nosotros-, vimos que para ellos era un problema inmenso. Entonces, se nos ocurrió la idea: ¿por qué no repartimos alimentos para ellos? Y eso terminó convirtiéndose en Zepto: una forma más rápida, cómoda, confiable y fresca de conseguir alimentos", agrega.
                            </P>
                        </div>
                    </div>
                    </div>
                     </div>
               </div>
               <div class="has-background-primary">
               <div class="columns is-multiline">
                <div class="columns is-centered">
                    <div class="column is-half">
               <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Cuáles han sido los principales obstáculos para que América Latina tenga una moneda única</p>
                </header>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-148x148">
                                <img src="https://ichef.bbci.co.uk/news/800/cpsprodpb/E170/production/_128521775_gettyimages-1328043714.jpg" alt="Imagen referencial">
                            </figure>
                        </div>
                    </div>
                    <div class="content">
                        <p class="subtitle is-6">Categoría: Negocios</p>
                        <P>"En el comercio de América Latina ya hay una moneda única. Se llama dólar".

                            Esta mezcla de ironía y escepticismo que destilan las palabras de Juan Batteleme, profesor de relaciones internacionales de la Universidad de Buenos Aires, sobre el anuncio de Brasil y Argentina de articular una divisa común, es la misma que se extiende entre muchos analistas.
                            
                            El ex economista jefe del FMI, Olivier Blanchard, respondió a la noticia con cuatro palabras: "Esto es una locura", al tiempo que la prestigiosa revista The Economist tachó el proyecto de "estrambótico".
                            "Uniría a la economía más grande de América del Sur con una de las más enfermas", afirmó el semanal en referencia a Argentina, un país que trata estos meses de evitar a toda costa el que sería su décimo default de deuda soberana desde su independencia en 1816.

                            Y es que tras el anuncio muchos creyeron que las principales economías de América del Sur pretendían crear algo como el euro que reemplazaría tanto al peso argentino como al real brasileño.
                            La sugerencia de invitar más adelante a otras naciones latinoamericanas a unirse tendría potencial de crear el segundo bloque monetario más grande del mundo, tras la Unión Europea.
                            Una unión monetaria que cubriera toda América Latina representaría alrededor del 5% del PIB mundial. Por comparar el euro, abarca alrededor del 14% del PIB mundial cuando se mide en términos de dólares.

                           Pero esta aspiración, coinciden los economistas, carece de fundamento ya en su origen.

                           "No tendría ningún sentido que un país como Brasil, que tiene una inflación del 5,8% y 330.000 millones de dólares de reservas internacionales, vinculara su destino monetario a un país que incurre en impagos en serie como Argentina, con una inflación del 95% anual y menos de 10.000 millones de dólares de reservas internacionales netas", argumenta Thierry Larose, gestor senior de la firma Vontobel.
                        </p>
                    </div>
                </div>
                </div>
            </table>
		</section>
	</main>
	<footer class="footer">
		<div class="content has-text-centered">
			<p>
				<strong>El Faro</strong> - Noticias de última hora.
			</p>
		</div>
	</footer>
</body>
</html>