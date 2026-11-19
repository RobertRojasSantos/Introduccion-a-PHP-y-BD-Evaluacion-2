# Introducción a PHP y BD (Evaluación  2)

# 📬 Formulario de Contacto con Historial en PHP

Un proyecto web sencillo desarrollado en **PHP puro** y **CSS3** que implementa un formulario de contacto con validación del lado del servidor, persistencia de datos en archivo de texto plano (`.txt`) y visualización en tiempo real de los mensajes registrados.

---

## ✨ Características

* **Validación y Sanitización:** Verifica que los campos no estén vacíos, valida el formato del correo electrónico (`FILTER_VALIDATE_EMAIL`) y protege contra inyección XSS (`htmlspecialchars`).
* **Persistencia sin Base de Datos:** Almacena cada mensaje enviado junto con su fecha y hora en un archivo local (`mensajes.txt`) utilizando funciones de manejo de archivos de PHP (`fopen`, `fwrite`, `fgets`).
* **Historial Dinámico:** Lee el archivo de registros y muestra los mensajes en pantalla ordenados del más reciente al más antiguo (`array_reverse`).
* **Interfaz Limpia y Responsiva:** Diseño centrado con alertas visuales de éxito/error y tarjetas diferenciadas para el historial.

---

## 🛠️ Tecnologías Utilizadas

* **Backend:** PHP 8+
* **Frontend:** HTML5, CSS3
* **Entorno de Desarrollo:** Visual Studio Code (VSC)
* **Servidor Local:** XAMPP (Apache)

---

## 📂 Estructura del Proyecto

```text
evaluacion2/
├── index.php       # Lógica del formulario, validación, escritura/lectura y vista HTML
├── estilos.css     # Estilos del formulario, alertas e historial de mensajes
└── mensajes.txt    # Archivo generado automáticamente al enviar el primer mensaje
```

---

## 🚀 Instalación y Ejecución Local

1. **Clona o descarga este repositorio:**
   ```bash
   git clone https://github.com
   ```

2. **Mueve la carpeta al directorio de XAMPP:**
   Copia la carpeta `evaluacion2` dentro de la ruta `htdocs` de tu instalación de XAMPP (por ejemplo: `C:\xampp\htdocs\evaluacion2`).

3. **Inicia el servidor:**
   Abre el panel de control de **XAMPP** e inicia el módulo **Apache**.

4. **Abre el proyecto en tu navegador:**
   Ingresa a la siguiente URL (ajusta el puerto si usas el 80 por defecto):
   ```text
   http://localhost:8080/evaluacion2/index.php
   ```

---

## 📝 Notas

* El archivo `mensajes.txt` se crea automáticamente en la raíz del proyecto al enviar el primer formulario válido, guardando cada registro con el formato: `Fecha|Nombre|Correo|Mensaje`.

---

## ✒️ Autor

* **Robert Rojas Santos** – https://github.com/RobertRojasSantos/Introduccion-a-PHP-y-BD-Evaluacion-2
