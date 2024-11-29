import os

# Ruta base (asegúrate de ajustar esta ruta según tu estructura de carpetas)
# ruta_base = r"C:\Users\Marvi\SSE"
ruta_base = r"/home/d/Desktop/SSE-UTM-2024/"
ruta_vistas = os.path.join(ruta_base, "resources", "views", "administrador")
archivo_documentacion = os.path.join(ruta_base, "documentacion", "documentacion.md")

def generar_documentacion(ruta_vistas, archivo_documentacion):
    # Verificar si la ruta de vistas existe
    if not os.path.exists(ruta_vistas):
        print(f"Error: La ruta {ruta_vistas} no existe.")
        return

    # Verificar si la carpeta de documentación existe, si no, crearla
    ruta_documentacion_dir = os.path.dirname(archivo_documentacion)
    if not os.path.exists(ruta_documentacion_dir):
        print(f"La carpeta {ruta_documentacion_dir} no existe. Creando...")
        os.makedirs(ruta_documentacion_dir)

    # Encabezado del archivo Markdown
    contenido_md = "# SSEyB | Vistas/Views para el administrador\n\n"
    contenido_md += "![This is an alt text.](utm_u31.png \"Imagen insana\")\n\n"
    contenido_md += "### Nombre:\n##### Bacilio Anota Marvin Salvador\n"
    contenido_md += "### Fecha:\n##### 15 de noviembre de 2024\n"
    contenido_md += "___\n\n"
    contenido_md += "# **Vistas/Views**\n"
    contenido_md += "Directorio en el proyecto\n"
    contenido_md += "> SSE\\resources\\views\n\n"
    
    # Recorremos la carpeta de vistas para obtener todos los archivos .blade.php
    vistas_lista = [f for f in os.listdir(ruta_vistas) if f.endswith('.blade.php')]
    
    # Iterar sobre las vistas
    for vista in vistas_lista:
        vista_nombre = vista.replace('.blade.php', '')  # Nombre de la vista sin la extensión
        vista_ruta = os.path.join(ruta_vistas, vista)
        print(vista_nombre)
        # Agregar encabezado de vista en el Markdown
        contenido_md += f"## **{vista_nombre}**\n"
        contenido_md += f"> `{vista_ruta}`\n\n"
        
        # Agregar imagen (puedes poner una imagen diferente si es necesario)
        contenido_md += f"![This is an alt text.]({vista_nombre}.png \"Imagen insana\")\n\n"
        
        # Agregar comentario para incluir el código
        contenido_md += f"<!-- mdinclude: {vista_ruta} -->\n\n"
        
        # Agregar la ruta de descarga
        contenido_md += f"[Nombre del archivo]({vista_ruta})\n\n"
        
        # Agregar el código HTML dentro de los bloques ```html
        contenido_md += "```html\n"
        
        # Leer el archivo de la vista y agregar su contenido
        with open(vista_ruta, "r", encoding="utf-8") as f:
            contenido_vista = f.read()
            contenido_md += contenido_vista + "\n"
        
        contenido_md += "```\n\n"
    
    # Guardar el archivo Markdown actualizado
    with open(archivo_documentacion, "w", encoding="utf-8") as f:
        f.write(contenido_md)
    print(f"Documentación generada en: {archivo_documentacion}")

# Ejecutar el script
generar_documentacion(ruta_vistas, archivo_documentacion)
