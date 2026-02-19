# Mi Perfil - Proyecto Laravel

📌 **Descripción**

Aplicación web desarrollada con Laravel como parte del Taller Básico de Introducción a Laravel de la asignatura Desarrollo Backend.

El proyecto consiste en la creación de una aplicación web con múltiples vistas navegables, diseño personalizado con CSS propio (sin uso de Bootstrap) y control de versiones mediante Git, siguiendo buenas prácticas de desarrollo.

---

## 🎯 Objetivos del Proyecto

- Configurar un entorno de desarrollo con Laravel
- Crear rutas dinámicas
- Implementar vistas con Blade
- Diseñar interfaz con CSS personalizado
- Aplicar control de versiones con commits estructurados
- Publicar el proyecto en GitHub correctamente

---

## 🛠 Tecnologías Utilizadas

- PHP
- Laravel
- HTML
- CSS
- Git
- GitHub

---

## ⚙️ Requisitos del Sistema

Antes de ejecutar el proyecto debes tener instalado:

- PHP >= 8.1
- Composer
- Git
- Servidor local (XAMPP, Laragon o similar)

---

## 📥 Instalación

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/AndiLinUnab/taller_b-sico_laravel
   ```

2. **Entrar al directorio del proyecto:**
   ```bash
   cd mi-perfil
   ```

3. **Instalar dependencias:**
   ```bash
   composer install
   ```

4. **Copiar el archivo de entorno:**
   ```bash
   cp .env.example .env
   ```

5. **Generar la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

6. **Ejecutar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```

7. **Abrir en el navegador:**
   ```
   http://localhost:8000
   ```

---

## 🌐 Rutas Disponibles

| Ruta | Descripción |
|------|-------------|
| `/` | Página principal |
| `/perfil` | Información personal |
| `/perfil/intereses` | Intereses |
| `/perfil/habilidades` | Habilidades |
| `/perfil/metas` | Metas profesionales |

---

## 🎨 Características

- Navegación funcional entre páginas
- Diseño responsive básico
- Paleta de colores personalizada
- Código limpio y bien estructurado
- Historial de commits organizado

---

## 📈 Control de Versiones

El proyecto cuenta con múltiples commits que evidencian el proceso de desarrollo paso a paso:

1. Instalación inicial del proyecto Laravel
2. Configuración del entorno y archivos base
3. Creación de rutas en `web.php`
4. Vista `perfil.blade.php` creada
5. Vista `intereses.blade.php` creada
6. Vista `habilidades.blade.php` creada
7. Vista `metas.blade.php` creada
8. Hoja de estilos CSS implementada
9. Mejoras de diseño y ajustes visuales
10. README.md final con documentación

---

## 👨‍💻 Autor

**Miguel Angel Solano Diaz**  
Estudiante de Ingeniería de Sistemas  
Universidad Autónoma de Bucaramanga  
17 de febrero de 2026

---

## 📜 Licencia

Proyecto académico con fines educativos — Universidad Autónoma de Bucaramanga.
