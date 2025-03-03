# Gestión de Oficinas y Empleados 🏢👨‍💼
Este es un proyecto desarrollado en Laravel para la gestión de una red de oficinas, empleados y recursos de una empresa. La aplicación permite administrar oficinas, registrar empleados y gestionar la información de cada uno de ellos de manera eficiente.

## 🚀 Características
- Listado y creación de oficinas.

- Listado y gestión de empleados asignados a cada oficina.

- Formulario de registro y edición de empleados con validaciones.

- Relación entre oficinas y empleados mediante claves foráneas.

- Arquitectura basada en MVC, utilizando migraciones, modelos y controladores de Laravel.

## 🛠 Tecnologías Utilizadas
- Laravel 10 (Framework PHP)

- Blade (Sistema de plantillas)

- MySQL (Base de datos)

- Git y GitHub (Control de versiones)

## 📌 Instalación y Configuración

1. Clonar el repositorio:
- git clone https://github.com/tu-usuario/gestion-oficinas.git
- cd gestion-oficinas

2.  Instalar dependencias:
- composer install

3. Configurar el archivo .env con los datos de la base de datos.
4. Generar clave de la aplicación y migrar la base de datos: 
- php artisan key:generate 
- php artisan migrate