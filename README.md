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
