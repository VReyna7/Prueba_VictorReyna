# Prueba Victor Reyna 

## Tecnologías
* Framework: Laravel v 12
* Database: sqlite
* PHP: 8.3.16
  
## Herramientas
* Postman -> herramienta para probar endpoints de APIs (REST) enviar peticiones HTTP y ver las respuestas
* DBeaver -> herramienta de visualización y administración de bases de datos
* Laragon -> herramienta de entorno de desarrollo local para PHP (incluye Apache/Nginx, MySQL/MariaDB, PHP, y facilita usar Composer, Node, etc.).

## Descripcion
API REST desarrollada en Laravel que implementa operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una tabla Tareas

## Instalación y configuración
1. **Clonar el repositorio**
    
    ```bash 
    git clone https://github.com/VReyna7/Prueba_VictorReyna.git
    ```

    ```bash
    cd Prueba_VictorReyna
    ```
2. **Abrir el proyecto en un editor de código**  
    - Recomendación: **Visual Studio Code**.

3. **Instalar dependencias con Composer**
    
    ```bash
    composer install
    ```
    
4. **Crear el archivo `.env` a partir de `.env.example`**  

   - En **Windows CMD**:
     ```cmd
     copy .env.example .env
     ```
   - En **PowerShell o Linux/macOS**:
     ```bash
     cp .env.example .env
     ```
5. **Generar la clave de aplicación**
    ```bash
    php artisan key:generate
    ```
6. **Crear la base de datos SQLite vacía**
    ```bash
    touch database/tareas.sqlite   # Linux/macOS o Git Bash
    ```
    ```powershell
    echo > database\tareas.sqlite  # Windows PowerShell
    ```
    * Tambien es posible crear el archivo con click derecho -> nuevo. (Crear el archivo en la carpeta database con el nombre tareas.sqlite)

7. ** Configurar .env **
     - Editar los siguientes parametros
        * SESSION_DRIVER = file
        * Descomentar #DB_DATABASE=LARAVEL, Y colocar DB_DATABAsE = tareas.sqlite 
       
9. **Ejecutar migraciones y seeders**
     ```bash
    php artisan migrate --seed
    ```
10. **Ejecutar el servidor de desarollo*
     ```bash
    php artisan serve
    ```

## Endpoints principales
 Todos necesitan Authorization: Bearer {token}
* **GET** `/api/tareas` -> Listar todas las tareas
* **POST** `/api/tareas` -> Crear una tarea
* **GET** `/api/tareas/{id}` -> mostrar una tarea
* **PUT/PATCH&** `/api/tareas/{id}` -> actualizar una tarea
* **DELETE** `/api/tareas/{id}` -> eliminar una tarea

## Autenticación con Sanctum
* **Login y obtención de token**
  - **POST** `/api/login` -> login de usuario para obtener un token
* **Usuario pre-registrado**
  - **name** -> `Tester`
  - **email** -> `test@example.com`
  - **password** -> `password123`

## Cómo probar la API con Postman o Thunderclient
1. Abrir postman o thunder client en vs
    * Descargar e instalar desde https://www.postman.com/downloads/
      
2. Configurar el login y obtener el token
  * Crea una nueva petición POST a:
      - ```bash
        http://127.0.0.1:8000/api/login
        ```
  * En la pestaña Body, seleccionar raw -> JSON e ingesar:
      - ```bash
        {
          "email": "test@example.com",
          "password": "password123"
          "name" : "Test"
        }
        ```
  * Al enviar la petición resivira una respuesta que tendra el token, copielo.
    
3.Agregar token a la cabeza
  * En Postman o Thunder client:
     1. Localize la pestaña headers
     2. agregrue lo siguiente:
        * `key` : Authorization
        * `value`: Bearer {token}, ejemplo: Bearer 1|Aalsdaldajkgjas921340rmask
        
4.Probar los endopints CRUD de la sección endpoints principales

# Preguntas teóricas
* **¿Cuál es la diferencia entre `hasMany` y `belongsToMany` en Eloquent?**
HasMany representa la relación de uno a muchos y belongToMany la relación muchos a muchos. normalmente estas relaciones usan una tabla intermedia.
* **¿Qué es una migración y como se utiliza?**
Una migración es una estructura de base de datos que utilizan los ORM para con un comando ejecutar y hacer la creación de dicha BDD sin necesidad de empezarla manualmente por ejemplo en laravel se crean en /database/migrate con php artisan make:migration nombre y se ejecutan con php artisan migrate.
* **¿Como funciona el Service Conteiner en Laravel?**
Es lo que utiliza laravel para resolver y administrar clases. hace que no se tengan que crear instancias manualmente con new, además es útil como inyección de dependencias. es muy parecido a lo que pasa con los beans en java spring boot.
* **¿Que es un middleware y para que se usa?**
Un middleware es una función que se ejecuta antes o despues de una petición http, normalmente se usa para autentificación y autorización, modificar los request o los response.
* **¿Qué ventajas ofrece usar laravel Sanctum o Passport?**
Sanctum es muy sencillo de configurar y utilizar como por ejemplo con personal_acces_token. facilita el desarrolló en el apartado de la autentificación, pero es usado en apps simples.
