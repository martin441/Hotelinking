# Hotelinking
Tech test

# Sobre la Aplicación

Es una pequeña plataforma donde un usuario puede acceder, ve una lista de ofertas, y puede, haciendo click sobre alguna de ellas, generar un código único que se guardará en la base de datos y después puede revisar que códigos promocionales tiene en una página de detalle. En la página de detalle, el usuario puede pulsar sobre un botón canjear código que marcará como canjeado el código de la BBDD y confirmará al usuario que se ha canjeado.

# Requisitos del pedido:

- Un usuario se registra o hace login en la aplicación.
- El usuario ve una lista de ofertas y un botón para generar un código promocional.
- Un usuario puede hacer click en el botón para recibir un código promocional, éste tiene que ser único.
- El usuario puede ver un listado de sus códigos promocionales, en otra página y, haciendo click sobre cada uno de ellos, canjearlos. (No se necesita realizar un sistema de canjeo complejo, simplemente marcarlo como canjeado).
- En todos los casos, aparecerá confirmación (Feedback) de las operaciones realizadas.
- Se ha de usar preferiblemente Laravel.
- Se puede usar MySql.
- Se valorará el uso de Frameworks de Frontend.

# Requisitos extras:

- Se valorará muy positivamente el uso de Docker.
- Se valorará muy positivamente que se realicen test unitarios y de integración.
- Se valorará muy positivamente una arquitectura modular y reutilizable en la medida de lo posible como el service repository pattern.

### Características de la apliación desarrollada
- Se desarrolló una aplicación responsive, con las siguientes herramientas y tecnologías: **PHP, Laravel, SQLite, Javascript, React, Vite, Tailwind, Tests y Docker**
- Se definió el siguiente [Schema Design](https://dbdiagram.io/d/64590dc5dca9fb07c4b463da)

### Pasos para utilizar la apliación 
- Clona en tu dispositvo local [este repositorio](https://github.com/martin441/Hotelinking.git).
- Abre el proyecto en un editor de código y asegúrate de estar en la rama *main*.
- Crea un archivo llamado *database.sqlite* en el directorio *database*.
- Crea un archivo ```.env``` en el directorio raíz y copia el contenido de ```.env.example```.
- En el archivo ```.env```, en la línea ```DB_DATABASE ``` pega el path del archivo *database.sqlite* creado.
- Ejecuta en la terminal el comando ```composer install``` .
- Ejecuta en la terminal el comando ```npm install``` .
- Ejecuta en la terminal el comando ```php artisan key:generate```, luego ```php artisan migrate``` y por último ```php artisan db:seed```.

### Iniciar la apliación
- Ejecuta en una terminal el comando ```php artisan serve```.
- Ejecuta en otra terminal (sin detener al anterior) el comando ```npm run dev``` .
- Cuando ambos estén en ejecución, ingresa al puerto que te indica *php artisan serve*.

### Disfrutando la aplicación
**¡Una vez que hayas ingresado, registrate con tu cuenta y podrás disfrutar de la aplicación!**
