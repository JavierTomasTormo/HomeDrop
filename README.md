# 🏡 HomeDrop - Sistema de Gestión de Propiedades

HomeDrop es una aplicación web diseñada para facilitar la gestión de propiedades. Ya sea que estés administrando alquileres, ventas o servicios, HomeDrop te ayuda a mantener todo organizado con una interfaz intuitiva y características potentes.

## 🚀 Comenzando

### 1. Requisitos Previos

Asegúrate de tener instalados y configurados los siguientes elementos en tu máquina:

- **PHP** (versión 7.4 o superior)
- Un servidor web (como Apache o Nginx)
- **MySQL** u otro servidor de base de datos compatible

### 2. Configura tu Entorno

1. Clona o descarga este repositorio en tu máquina local.

2. Importa la base de datos:
   - Dirígete a la carpeta `DB/`.
   - Importa el archivo de base de datos `HomeDrop.sql` en tu servidor MySQL.

   Puedes utilizar una herramienta como phpMyAdmin o la línea de comandos de MySQL:
   ```bash
   mysql -u tu_usuario -p tu_nombre_de_base_de_datos < DB/HomeDrop.sql ```

### 3. Levanta el Servidor
Para ver HomeDrop en tu navegador, ejecuta el siguiente comando desde el directorio raíz del proyecto para iniciar el servidor de desarrollo de PHP:

```bash
php -S localhost:8000
```
Luego, abre tu navegador y ve a http://localhost:8000 para ver HomeDrop en acción. ¡Magia! ✨
## 🛠️ Funcionalidades Clave

### Validación de Formularios

- **Lado del Servidor (PHP):** La validación de formularios se gestiona en `validate.php` para asegurar la corrección y seguridad de las entradas de los usuarios.
- **Lado del Cliente (JavaScript):** Feedback instantáneo sobre las entradas del usuario proporcionado por `validateForm.js`.

### Controladores

- **Lógica de Negocio:** El controlador principal, `modeloController.php`, maneja la lógica de negocio y la interacción entre el modelo y la vista.

### Vistas

- **Inicio:** Los usuarios son recibidos en la página de inicio ubicada en `inicio/inicio.php`.
- **Servicios:** Conoce los servicios que ofrecemos en `services/servicios.php`.
- **Acerca de Nosotros:** Aprende más sobre nosotros en `aboutus/aboutus.php`.

### Operaciones CRUD

Todas las operaciones CRUD (Crear, Leer, Actualizar, Eliminar) para la gestión de propiedades y usuarios están gestionadas en `model/CRUD.php`.

---

## 🎨 Estilos

HomeDrop está estilizado utilizando los siguientes archivos CSS:

- `bootstrap.css`: Para una interfaz moderna y responsive utilizando el framework Bootstrap.
- `styleHomeDrop.css`: Estilos personalizados específicos del proyecto HomeDrop.

Ambos archivos están ubicados en el directorio `view/css/`.

---

## 📸 Imágenes

Todas las imágenes necesarias para el sitio están ubicadas en la carpeta `view/img/`.

---

## 🧩 Componentes Reutilizables

Varios componentes reutilizables se encuentran en la carpeta `inc/`, lo que facilita mantener la consistencia en toda la aplicación:

- `header.php`: El encabezado del sitio.
- `footer.php`: El pie de página con navegación y enlaces.
- `nav.php`: La barra de navegación.
- `editar.php`, `nuevo.php`: Formularios reutilizables para editar y agregar nuevas propiedades.

---

## 🤝 Contribuciones

¡Las contribuciones son bienvenidas! Si deseas mejorar HomeDrop o añadir nuevas funciones, siéntete libre de:

- Abrir un issue para discutir mejoras.
- Enviar un pull request con tus cambios.

¡Trabajemos juntos para hacer de HomeDrop la mejor plataforma para la gestión de propiedades! 🏠

---

## 📜 Licencia

HomeDrop es un proyecto de código abierto y se publica bajo la Licencia MIT. Siéntete libre de usar, modificar y distribuir este proyecto como lo consideres.

## 🗂️ Estructura del Proyecto

Aquí tienes un desglose rápido de la estructura del proyecto:

```bash
HomeDrop/
│
├── config.php                  # Archivo de configuración
├── controller/
│   └── modeloController.php     # Controlador principal que gestiona la lógica
├── DB/
│   ├── homedrop (07-01-2024).sql # Archivo de respaldo de la base de datos
│   └── HomeDrop.sql             # Archivo SQL principal para importar
├── index.php                    # Punto de entrada de la aplicación
├── model/
│   └── CRUD.php                 # Operaciones CRUD para interactuar con la base de datos
├── module/
│   ├── aboutus/
│   │   └── aboutus.php          # Módulo "Acerca de Nosotros"
│   ├── contact/
│   │   └── contact.php          # Página de contacto
│   ├── inicio/
│   │   └── inicio.php           # Página de inicio
│   └── services/
│       └── servicios.php        # Módulo de servicios
├── view/
│   ├── css/
│   │   ├── bootstrap.css        # Estilos de Bootstrap
│   │   └── styleHomeDrop.css    # Estilos personalizados de HomeDrop
│   ├── img/                     # Carpeta de imágenes
│   ├── inc/
│   │   ├── editar.php           # Componente de formulario de edición
│   │   ├── footer.php           # Componente de pie de página
│   │   ├── header.php           # Componente de encabezado
│   │   ├── header_Form_Alta.php # Encabezado para el formulario de alta
│   │   ├── header_Form_Update.php # Encabezado para el formulario de actualización
│   │   ├── nav.php              # Barra de navegación
│   │   └── nuevo.php            # Formulario para nueva propiedad
├── promises.js                  # Promesas en JavaScript
├── validate.php                 # Validación de formularios del lado del servidor
├── validateForm.js              # Validación de formularios del lado del cliente
└── TESTCODE.info                # Archivo de información para pruebas

```



# Gracias por revisar HomeDrop. 
## ¡Esperamos que te ayude a gestionar tus propiedades con éxito! 🏡
