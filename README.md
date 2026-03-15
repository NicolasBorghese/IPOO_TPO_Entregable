# TRABAJO FINAL ENTREGABLE (IPOO)

## IPOO TP 4 ENTREGABLE Fecha de cierre 21/06/23

Esta rama corresponde a la entrega número 4 del TP obligatorio de IPOO (TRABAJO FINAL).
Este TPO extiende las funcionalidades desarrolladas en los TP ENTREGABLES 1, 2 y 3 incorporando el tema de mapeo objeto relacional (MOR).

### ENUNCIADO:

Una empresa de transporte desea gestionar la información correspondiente a los viajes que
realiza. De los pasajeros se conoce su nombre, apellido, número de documento y teléfono. El
viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se
desea guardar la información de la persona responsable de realizar el viaje, para ello cree una
clase ResponsableV que registra el número de empleado, número de licencia, nombre y apellido.
La clase Viaje debe hacer referencia al responsable de realizar el viaje.

1. Ejecute el script sql provisto para crear la base de datos bdviajes y sus tablas.
2. Implementar dentro de la clase TestViajes una operación que permita ingresar, modificar
   y eliminar la información de la empresa de viajes.
3. Implementar dentro de la clase TestViajes una operación que permita ingresar, modificar
   y eliminar la información de un viaje, teniendo en cuenta las particularidades expuestas
   en el dominio a lo largo del cuatrimestre.

### MER del proyecto

![MER del proyecto viaje Feliz](img/MER%20Viaje%20Feliz%2002%20Sin%20herencia.png)

## Desarrollado con

- [![PHP][php-shield]][php-url]
- [![PostgreSQL][postgresql-shield]][postgresql-url]

---

## Requisitos previos

- PHP 7.4 o superior
- Extensiones PHP habilitadas: `pdo`, `pdo_pgsql`
- PostgreSQL 13 o superior

---

## Instalación y puesta en marcha

### 1. Clonar el repositorio

```bash
git clone https://github.com/NicolasBorghese/IPOO_TPO_Entregable.git
cd IPOO_TPO_Entregable
```

### 2. Instalar PostgreSQL

Descargarlo desde [postgresql.org/download](https://www.postgresql.org/download/) e instalarlo.
Durante la instalación se te pedirá una contraseña para el usuario `postgres` — **anotala**, la vas a necesitar en el paso 4.

### 3. Habilitar las extensiones PDO en PHP

En el archivo `php.ini` (ubicarlo con `php --ini` en la terminal), asegurarse de que estas líneas estén **sin** el `;` al inicio:

```ini
extension=pdo_pgsql
extension=pgsql
```

Reiniciar el servidor web (Apache, Nginx, etc.) después de guardar el cambio.

### 4. Crear la base de datos

Ejecutar el script SQL desde la terminal. Reemplazar `TU_CONTRASEÑA` por la contraseña elegida al instalar PostgreSQL:

**Linux / macOS:**

```bash
PGPASSWORD="TU_CONTRASEÑA" psql -U postgres -f bdviajefeliz_postgresql.sql
```

**Windows (PowerShell):**

```powershell
$env:PGPASSWORD="TU_CONTRASEÑA"
& "C:\Program Files\PostgreSQL\17\bin\psql.exe" -U postgres -f bdviajefeliz_postgresql.sql
```

Esto crea la base de datos `bdviajefeliz` con todas sus tablas.

### 5. Configurar las credenciales de conexión

Abrir `BaseDatos.php` y ajustar los valores según tu instalación local:

```php
$this->HOSTNAME  = "127.0.0.1";   // host de PostgreSQL (no cambiar si es local)
$this->BASEDATOS = "bdviajefeliz"; // nombre de la base de datos (no cambiar)
$this->USUARIO   = "postgres";     // usuario de PostgreSQL
$this->CLAVE     = "TU_CONTRASEÑA"; // la contraseña que elegiste al instalar
$this->PUERTO    = "5432";          // puerto por defecto de PostgreSQL (no cambiar)
```

### 6. Ejecutar el proyecto

Levantar el servidor PHP integrado desde la raíz del proyecto:

```bash
php -S localhost:8000
```

Luego abrir en el navegador: `http://localhost:8000/testViaje.php`

---

<!-- MARKDOWN LINKS AND IMAGES -->

[php-shield]: https://img.shields.io/badge/PHP-373841?style=for-the-badge&logo=php&logoColor=php
[php-url]: https://www.php.net/manual/es/intro-whatis.php
[postgresql-shield]: https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white
[postgresql-url]: https://www.postgresql.org/
