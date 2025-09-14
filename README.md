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
    touch database/tarea.sqlite   # Linux/macOS o Git Bash
    ```
    ```powershell
    echo. > database\tarea.sqlite  # Windows PowerShell
    ```
7. **Ejecutar migraciones y seeders**
     ```bash
    php artisan migrate --seed
    ```
8. **Ejecutar el servidor de desarollo*
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
          "name" : Test
        }
        ```
  * Al enviar la petición resivira una respuesta que tendra el token, copielo.
    
3.Agregar token a la cabeza
  * En Postman o Thunder client:
     1. Localize la pestaña headers
     2. agregrue lo siguiente:
            - `key` : Authorization
            - `value`: Bearer {token}, ejemplo: Bearer 1|Aalsdaldajkgjas921340rmask
        
4.Probar los endopints CRUD de la sección endpoints principales
