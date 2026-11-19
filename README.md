# Introducción a PHP y BD (Evaluación  2)

# 📬 Formulario de Contacto con Historial en PHP

Un proyecto web sencillo desarrollado en **PHP puro** y **CSS3** que implementa un formulario de contacto con validación del lado del servidor, persistencia de datos en archivo de texto plano (`.txt`) y visualización en tiempo real de los mensajes registrados.

👉 <a href="http://localhost:8080/evaluacion2/index.php" target="_blank" rel="noopener noreferrer"><strong>Haz clic aquí para abrir el proyecto en Localhost</strong></a> *(Requiere tener XAMPP encendido)*

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
* **Servidor Local:** XAMPP (Apache y MySQL)

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

3. **Configuración de Puertos e Inicio en XAMPP:**
   * En este entorno se modificaron los puertos por defecto de Apache: el puerto **80** fue cambiado al **8080**, y el puerto **443** (SSL) al **4433**.
   * Abre el panel de control de **XAMPP** y haz clic en **Start** tanto en el módulo **Apache** como en **MySQL**.

4. **Abre el proyecto en tu navegador:**
   Haz clic en el siguiente enlace directo o pégalo en tu navegador:
   * 🔗 <a href="http://localhost:8080/evaluacion2/index.php" target="_blank" rel="noopener noreferrer"><strong>http://localhost:8080/evaluacion2/index.php</strong></a>

---

## 📝 Notas

* El archivo `mensajes.txt` se crea automáticamente en la raíz del proyecto al enviar el primer formulario válido, guardando cada registro con el formato: `Fecha|Nombre|Correo|Mensaje`.

---

## ✒️ Autor

* **Robert Rojas Santos** – [Repositorio del proyecto en GitHub](https://github.com/RobertRojasSantos/Introduccion-a-PHP-y-BD-Evaluacion-2)
