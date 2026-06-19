# WEB2_TEPE_3
API REST para gestionar álbumes musicales y reseñas

# Obtener todos los álbumes
# REQUEST
GET /api/albums

# Respuesta (ejemplo)
[
  {
    "id_album": 1,
    "nombre_album": "24K Magic",
    "genero": "Funk, Pop"
    "fecha_lanzamiento": '2016-11-18'
    "duracion_minutos": 33
    "cantidad_canciones": 9
    "imagen": https://...
    "id_artista": 1
  }
  ...
]

# Obtener un álbum por ID
# REQUEST
GET /api/albums/1

# Respuesta (ejemplo)
{
    "id_album": 1,
    "nombre_album": "24K Magic",
    "genero": "Funk, Pop"
    "fecha_lanzamiento": '2016-11-18'
    "duracion_minutos": 33
    "cantidad_canciones": 9
    "imagen": https://...
    "id_artista": 1
  }

# Agregar un álbum
# Request

POST /api/albums

# Body (ejemplo)
{
  "nombre_album": "Album",
  "genero": "Pop",
  "fecha_lanzamiento": "2026-05-08",
  "duracion_minutos": 43,
  "cantidad_canciones": 12,
  "imagen": "foto.jpg",
  "id_artista": 1
}


# Modificar un álbum
# Request

PUT /api/albums/1

# Body (ejemplo)
{
  "nombre_album": "Nuevo nombre",
  "genero": "Rock",
  "fecha_lanzamiento": "2026-01-01",
  "duracion_minutos": 50,
  "cantidad_canciones": 10,
  "imagen": "imagen.jpg",
  "id_artista": 1
}


# Filtrado
# REQUEST

GET /api/albums?genero=Pop

Obtiene únicamente los álbumes del género indicado. (solo disponible con genero)

# Ordenamiento
# REQUEST

GET /api/albums?sort=nombre_album&order=asc

# Parámetros
sort: campo por el cual ordenar (disponibles todos los campos de la tabla)
order: asc | desc

# Paginado

El endpoint de listado de álbumes permite paginar resultados mediante los parámetros page y limit.

# Parámetros
page: número de página (comienza en 1).
limit: cantidad de elementos por página.

# Ejemplo

GET /api/albums?page=1&limit=5

Obtiene los primeros 5 álbumes.

# Obtener reseñas
# Request

GET /api/reseñas

# Respuesta (ejemplo)
[
  {
    "id_reseña": 1,
    "comentario": "Un album bueno que no se destaca demasiado, regular.",
    "puntuacion": "3"
    "id_album": 1
  }
  ...
]

# Agregar reseña
# Request

POST /api/reseñas

# Body
{
    "id_reseña": 3,
    "comentario": "Un album malo.",
    "puntuacion": "1"
    "id_album": 2
  }
  "puntaje": 5,
  "id_album": 1
}
