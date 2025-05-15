<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP CANAL</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/admin/styles.css') }}">
        <!-- candidatos -->
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">

    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- candidatos -->
    <link rel="stylesheet" href="https://codepen.io/GreenSock/pen/xxmzBrw.css"> <!--candidatos-->
	<link rel="stylesheet" href="{{ asset('css/admin/candidatos.css') }}"> <!--candidatos-->
    <link rel="stylesheet" href="https://codepen.io/GreenSock/pen/xxmzBrw.css"> <!--candidatos-->
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    
    
    <!-- Si usas Laravel Mix u otro bundler, este no es necesario directamente -->
    <!-- <script src="{{ asset('resources/js/app.js') }}"></script> -->
</head>
<body>
<!-- En tu HTML (justo después de <body>) -->
<div class="fullpage-background"></div>

<!-- Redes sociales -->
<div class="social-icons">
    <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
    <a href="https://twitter.com/" target="_blank" class="twitter"><i class="fab fa-x-twitter"></i></a>
    <a href="https://www.twitch.tv/" target="_blank" class="twitch"><i class="fab fa-twitch"></i></a>
</div>

<!-- Navbar Fijo -->
<div class="navbar-blur-background"></div>
<div class="navbar-container">
    <div class="navbar-content">
        <!-- Barra de navegación -->
        <div class="navbar-menu">

            <!-- Acceso Admin para invitados -->
            @guest
            <div class="nav-item nav-submenu">
                <i class="fas fa-lock" style="font-size: 14px; margin-right: 8px; vertical-align: middle;"></i>
                <div class="admin-submenu">
                    <div class="login-form">
                        <h4>Acceso Admin</h4>
                        <input type="text" id="admin-user" placeholder="Usuario">
                        <input type="password" id="admin-pass" placeholder="Contraseña">
                        <button id="admin-login">Ingresar</button>
                        <div class="login-message"></div>
                    </div>
                </div>
            </div>
            @endguest

            <!-- Acceso Admin para usuarios autenticados y con rol de admin -->
            @auth
                @if(auth()->user()->is_admin)
                    <div class="nav-item nav-submenu" id="admin-toggle">
                        <i class="fas fa-lock" style="font-size: 14px; margin-right: 8px;"></i>
                        <div class="admin-submenu">
                            <div class="admin-actions">
                                <a href="{{ route('admin.news.index') }}" class="admin-link">
                                    <i class="fas fa-newspaper"></i> Noticias
                                </a>
                                <a href="{{ route('admin.videos.index') }}" class="admin-link">
                                    <i class="fas fa-video"></i> Videos
                                </a>
                                <form action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="admin-logout">
                                        <i class="fas fa-sign-out-alt"></i> Salir
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endauth

            <a href="{{ route('admin.videos.index') }}" class="nav-item nav-videos">Videos</a>
            <div class="nav-item nav-noticias">Noticias</div>
            <div class="nav-item nav-encuestas">Encuestas</div>

            <!-- Logo en medio -->
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('images/logogpcanal.jpg') }}" alt="Logo GP Canal" class="navbar-logo">
                </a>
            </div>
            
            <div class="nav-item nav-politicos">Partidos Politicos</div>

            <!-- Botón de búsqueda estilizado -->
            <button id="search-icon" class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</div>

<!-- Botón para volver al modo Usuario -->
<div style="margin-top: 10px;">
    <a href="{{ route('app') }}" class="btn-volver-usuario">
        <i class="fas fa-arrow-left"></i> Volver al modo Usuario
    </a>
</div>

<!-- Contenedor de la barra de búsqueda (inicialmente oculta) -->
<div id="search-container" class="search-container">
    <input type="text" class="search-input" placeholder="Buscar...">
    <button class="search-button">🔍</button>
</div>

<!-- Espaciado fijo para el contenido principal -->
<div class="main-content-spacer" style="height: 140px;"></div>


<div class="container my-4">
  <!-- Contenido principal -->
  <h2 class="section-title mb-3">El Mejor Lugar para Mantenerte Informado</h2>

  <!-- Botones fuera del slider -->
  <div class="d-flex mb-4">
    <button class="btn btn-success btn-sm me-2" id="create-buttonS">
      Agregar Imagen
    </button>
    <button 
      class="btn btn-danger btn-sm" 
      id="open-delete-buttonS"
      onclick="
        (function(){
          const active = document.querySelector('.carousel-item.active');
          if (active) {
            openDeleteModal(active.getAttribute('data-id'));
          }
        })();
      ">
      Eliminar Imagen
    </button>
  </div>

  <!-- Modal de creación -->
  <div id="create-modalS" class="modal" style="display: none;">
    <div class="modal-content p-3 border rounded shadow">
      <span class="close" style="cursor:pointer;">&times;</span>
      <form id="create-formS" enctype="multipart/form-data">
        @csrf
        <label for="create-logoS" class="mt-2">Imagen:</label>
        <input 
          type="file"
          id="create-logoS"
          name="image"
          accept="image/*"
          class="form-control"
          required>
        <button type="submit" class="btn btn-primary mt-3">Agregar</button>
      </form>
      <p id="image-limit-warning" style="color: red; display: none;">
        ¡Solo puedes subir hasta 5 imágenes!
      </p>
    </div>
  </div>

  <!-- Modal de eliminación -->
  <div id="delete-modalS" class="modal" style="display: none;">
    <div class="modal-content p-3 border rounded shadow">
      <span class="close" style="cursor:pointer;">&times;</span>
      <h4>¿Estás seguro de que quieres eliminar la imagen activa?</h4>
      <button id="confirm-delete" class="btn btn-danger">Eliminar</button>
      <button id="cancel-delete" class="btn btn-secondary">Cancelar</button>
    </div>
  </div>

  <!-- Slider de imágenes -->
  <div class="slider-container-3d">
    <div 
      id="mainCarousel" 
      class="carousel slide position-relative" 
      data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach(App\Models\SliderImagen::all() as $index => $imagen)
          <div 
            class="carousel-item {{ $index == 0 ? 'active' : '' }}"
            data-id="{{ $imagen->id }}"
            id="image-{{ $imagen->id }}">
            <img 
              src="{{ asset($imagen->filename) }}" 
              class="d-block w-100" 
              alt="Noticia {{ $index + 1 }}">
          </div>
        @endforeach
      </div>
      <button 
        class="carousel-control-prev" 
        type="button" 
        data-bs-target="#mainCarousel" 
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button 
        class="carousel-control-next" 
        type="button" 
        data-bs-target="#mainCarousel" 
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
  </div>
</div>
<!-- Sección Noticias -->
<section class="news-section-3d">
  <div class="section-header-3d">
    <h2>Noticias</h2>
    <a href="{{ url('noticias') }}" class="btn-3d news-btn">
      Buscar noticias <i class="fas fa-arrow-right"></i>
    </a>
  </div>

  <div class="botones-acciones">
    <button class="btn btn-warning btn-edi">Editar</button>
    <button class="btn btn-success btn-cre">Crear Noticia</button>
    <button class="btn btn-danger btn-eli">Eliminar</button>
  </div>

  <!-- Modal Crear Noticia -->
  <div id="form-noticia" class="modal-noticia">
    <div class="modal-content-noticia">
      <!-- Botón cerrar -->
      <button type="button" id="btn-cerrar-noticia" class="btn btn-secondary cerrar-noticia">
        ✖
      </button>

      <form action="{{ route('noticias.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="form-noticia">
        @csrf

        <h3 style="font-weight: bold; color: #000; font-size: 24px;">
          Crear Noticia
        </h3>

        <label for="titulo">Título de la noticia:</label>
        <input type="text"
               id="titulo"
               name="titulo"
               required
               placeholder="Escribe el título...">

        <label for="foto">Foto de la noticia:</label>
        <input type="file"
               id="foto"
               name="foto"
               accept="image/*"
               required>

        <label for="video">Video de la noticia (opcional):</label>
        <input type="file"
               id="video"
               name="video"
               accept="video/*">

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion"
                  name="descripcion"
                  rows="8"
                  placeholder="Escribe una descripción clara..."
                  required></textarea>

        <button type="submit"
                class="btn btn-primary btn-publicar">
          Publicar Noticia
        </button>
      </form>
    </div>
  </div>
  <!-- /Modal Crear Noticia -->

  <!-- Modal Eliminar Noticia -->
  <div id="modal-eliminar-noticia" class="modal-noticia">
    <div class="modal-content-noticia">
      <!-- Botón cerrar -->
      <button type="button" id="btn-cerrar-eliminar" class="btn btn-secondary cerrar-noticia">
        ✖
      </button>

      <form id="form-eliminar-noticia" method="POST">
        @csrf
        @method('DELETE')

        <h3 style="font-weight: bold; color: #000; font-size: 24px;">
          Eliminar Noticia
        </h3>

        <label for="noticia_id">Selecciona la noticia a eliminar:</label>
        <select name="noticia_id"
                id="noticia_id"
                class="form-control"
                required>
          <option value="" disabled selected>
            -- Elige una noticia --
          </option>
          @foreach ($noticias as $noticia)
            <option value="{{ $noticia->id }}">{{ $noticia->titulo }}</option>
          @endforeach
        </select>

        <button type="submit" class="btn btn-danger mt-3">
          Eliminar Noticia
        </button>
      </form>
    </div>
  </div>
  <!-- /Modal Eliminar Noticia -->

    <!-- Modal Editar Noticia -->
    <div id="modal-editar-noticia" class="modal-noticia">
    <div class="modal-content-noticia">
        <!-- Botón cerrar -->
        <button type="button" id="btn-cerrar-editar" class="btn btn-secondary cerrar-noticia">✖</button>

        <form id="form-editar-noticia" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h3 style="font-weight: bold; color: #000; font-size: 24px;">Editar Noticia</h3>

        <label for="editar_noticia_id">Selecciona la noticia a editar:</label>
        <select name="editar_noticia_id" id="editar_noticia_id" class="form-control" required>
            <option value="" disabled selected>-- Elige una noticia --</option>
            @foreach($noticias as $noticia)
            <option 
                value="{{ $noticia->id }}"
                data-titulo="{{ htmlspecialchars($noticia->titulo, ENT_QUOTES) }}"
                data-descripcion="{{ htmlspecialchars($noticia->descripcion, ENT_QUOTES) }}"
                data-foto-url="{{ asset('storage/' . $noticia->foto) }}"
                @if($noticia->video)
                data-video-url="{{ asset('storage/' . $noticia->video) }}"
                @endif
            >
                {{ $noticia->titulo }}
            </option>
            @endforeach
        </select>

        <label for="editar_titulo">Título:</label>
        <input type="text" id="editar_titulo" name="titulo" class="form-control" required>

        <label for="editar_descripcion">Descripción:</label>
        <textarea id="editar_descripcion" name="descripcion" rows="4" class="form-control" required></textarea>

        <div id="preview-contenido" style="margin: 1rem 0;">
            <p><strong>Foto actual:</strong></p>
            <img id="preview-foto" src="" alt="Foto noticia" style="max-width:100%; border:1px solid #ccc; border-radius:4px;">
            <p style="margin-top:0.5rem;"><strong>Video actual:</strong></p>
            <video id="preview-video" src="" controls style="max-width:100%; border:1px solid #ccc; border-radius:4px;"></video>
        </div>

        <label for="editar_foto">Cambiar foto (opcional):</label>
        <input type="file" id="editar_foto" name="foto" accept="image/*" class="form-control">

        <label for="editar_video">Cambiar video (opcional):</label>
        <input type="file" id="editar_video" name="video" accept="video/*" class="form-control">

        <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
        </form>
    </div>
    </div>
  <!-- /Modal Editar Noticia -->


  <!-- Overlay opcional (si lo necesitas) -->
  <div id="overlay" style="display:none;"></div>

<!-- Grid de Noticias Dinámico -->
<div class="news-grid-3d">
  @foreach($noticias as $noticia)
    <div class="news-card-3d">
      <div class="news-img-container">
        {{-- Imagen --}}
        <img src="{{ asset('storage/' . $noticia->foto) }}" 
             alt="{{ $noticia->titulo }}" 
             class="news-img">

        {{-- Badge “Nuevo” si fue creada en las últimas 24 h --}}
        @if($noticia->created_at->gt(now()->subDay()))
          <div class="news-badge">Nuevo</div>
        @endif
      </div>

      <div class="news-content">
        {{-- Título --}}
        <h3>{{ $noticia->titulo }}</h3>

        {{-- Descripción (resumida a 100 caracteres) --}}
        <p>{{ \Illuminate\Support\Str::limit($noticia->descripcion, 100) }}</p>

        {{-- Vídeo incrustado si existe --}}
        @if($noticia->video)
          <video controls class="news-video" style="width:100%; margin:1rem 0;">
            <source src="{{ asset('storage/' . $noticia->video) }}" type="video/mp4">
            Tu navegador no soporta el elemento <code>video</code>.
          </video>
        @endif

        {{-- Leer más: puedes redirigir a una ruta show --}}
        <a href="{{ route('noticias.show', $noticia->id) }}" class="read-more">
          Leer más <i class="fas fa-angle-double-right"></i>
        </a>
      </div>
    </div>
  @endforeach

  {{-- Mensaje si no hay noticias --}}
  @if($noticias->isEmpty())
    <p>No hay noticias publicadas aún.</p>
  @endif
</div>


</section>

<!-- Sección Encuestas -->
    <section class="polls-section-3d">
        <h2 class="section-title-3d">Encuestas <span class="highlight">Populares</span></h2>
        
        <div class="polls-container-3d">
            <!-- Encuesta 1 -->
            <div class="poll-card-3d">
                <div class="poll-header">
                    <h3>Encuestas Presidenciales</h3>
                    <div class="poll-toggle" data-target="presidential-polls">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                
                <div class="poll-content" id="presidential-polls">
                    <a href="{{ url('encuestas/lima') }}" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-city"></i></div>
                        <div class="poll-info">
                            <h4>Lima</h4>
                            <p>Última encuesta: 15 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/chiclayo.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-umbrella-beach"></i></div>
                        <div class="poll-info">
                            <h4>Chiclayo</h4>
                            <p>Última encuesta: 12 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/piura.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-sun"></i></div>
                        <div class="poll-info">
                            <h4>Piura</h4>
                            <p>Última encuesta: 10 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
            
            <!-- Encuesta 2 -->
            <div class="poll-card-3d">
                <div class="poll-header">
                    <h3>Encuestas Regionales</h3>
                    <div class="poll-toggle" data-target="regional-polls">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                
                <div class="poll-content" id="regional-polls">
                    <a href="encuestas/morropon.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-mountain"></i></div>
                        <div class="poll-info">
                            <h4>Piura</h4>
                            <p>Última encuesta: 8 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/castilla.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-archway"></i></div>
                        <div class="poll-info">
                            <h4>Castilla</h4>
                            <p>Última encuesta: 5 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/plura2.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-water"></i></div>
                        <div class="poll-info">
                            <h4>Morropon</h4>
                            <p>Última encuesta: 3 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<!--seccion candidatos -------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Nueva sección: Partidos Políticos -->
    <div class="title-container">
        <h1 class="title">Partidos Políticos</h1>
        <div class="dynamic-line"></div>
    </div>

    <div class="buscador">
        <label for="party-select">Buscar partido:</label>
        <select id="party-select">
            <option value="" disabled selected>Selecciona un partido</option>
            <!-- Opciones generadas dinámicamente -->
        </select>
    </div>
    <div class="gallery">
        <ul class="cards">
            <!-- Las tarjetas de los partidos se insertarán aquí mediante JavaScript -->
        </ul>
        <div class="actions">
            <button class="prev">Anterior</button>
            <button class="next">Siguiente</button>
        </div>
    </div>
</section>


<!-- Fin de la sección de candidatos -->
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->

<section id="contacto" class="contacto-3d">
  <div class="container">
    <div class="card-3d">
      <!-- Contacto -->
      <div class="columna">
        <h3>📩 Contáctanos</h3>
        <p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@noticias.com">info@noticias.com</a></p>
        <p><i class="bi bi-telephone-fill"></i> <a href="tel:+51987654321">+51 987 654 321</a></p>
        <p><i class="bi bi-geo-alt-fill"></i> Av. Principal 123, Lima, Perú</p>
        <p><i class="bi bi-clock-fill"></i> Lunes a Viernes: 9am - 6pm</p>
      </div>
      
      <!-- Redes -->
      <div class="columna">
        <h3>🌐 Síguenos</h3>
        <div class="redes">
          <a href="#" class="bi bi-facebook" title="Facebook"></a>
          <a href="#" class="bi bi-youtube" title="Youtube"></a>
          <a href="#" class="bi bi-instagram" title="Instagram"></a>
          <a href="#" class="bi bi-twitter" title="Twitter"></a>
          <a href="#" class="bi bi-twitch" title="Twitch"></a>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!--Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Scripts al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/victor@1.1.0/build/victor.min.js"></script>
    <script src="{{ asset('js/scroll-efect.js') }}"></script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <script type="module" src="{{ asset('js/candidatos.js') }}"></script> 
    <script type="module" src="{{ asset('js/functions.js') }}"></script> 
    <script type="module" src="{{ asset('js/scriptENC.js') }}"></script> 
    <script type="module" src="{{ asset('js/noticias.js') }}"></script> 
    <script type="module" src="{{ asset('js/admin.js') }}"></script> 
    <script type="module" src="{{ asset('js/adminpartidos.js') }}"></script> 
    <script type="module" src="{{ asset('js/noticiasAD.js') }}"></script> 
    <script type="module" src="{{ asset('js/admin-slider.js') }}"></script> 
    <script src="{{ asset('js/noticias-admin.js') }}"></script>


</body>
</html>
