from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import letter
import time

# parametros a utilizar en la creacion del pdf


def crearPDF(pdf, keyword, forma, salto, tiempo, n_match, np, stats, info):
    words = ""
    if(forma == "Implicita"):
        name = ["Resumen", pdf, "Implicita", str(salto)]
    else:
        words = "_".join(keyword)
        name = ["Resumen", pdf, words, str(salto)]

    nombre_pdf = "_".join(name)
    c = canvas.Canvas("PDF/" + nombre_pdf + ".pdf", pagesize=letter)
    # cabecera
    c.setFont("Helvetica-Oblique", 10)
    c.drawImage("logo.png", 10, 690, width=90, height=90)
    c.drawString(110, 765, "Universidad Tecnologica Metropolitana de Chile")
    c.drawString(
        110, 753, "Ingenieria Civil en Computacion Mencion Informatica")
    c.drawString(110, 741, "Computacion Paralela")
    c.drawString(110, 729, "Plataforma Integrada")

    # Titulo
    c.setFont("Helvetica-Bold", 30)
    c.drawString(180, 629, "Resultado Biblia")
    c.line(50, 620, 562, 620)
    # Subtitulo
    c.setFont("Helvetica-Oblique", 20)
    c.drawString(220, 600, "Busqueda " + forma)

    # SUBTITULO 2
    if(words == ""):
        patron = "Implicito"
    else:
        patron = " ".join(keyword)
    sPatron = "Patrones : " + patron
    c.setFont("Helvetica-Bold", 17)
    c.drawString(50, 550, sPatron)

    # Cuerpo
    # input
    c.setFont("Helvetica", 15)
    c.drawString(50, 530, "A continuacion se muestran los datos solicitados, las coincidencias y estadisti-")
    c.drawString(50, 512, "cas del proceso de investigacion solicitado en la plataforma web. ")
    c.setFont("Helvetica-Oblique", 14)
    sDocumento = "Documento: " + pdf + ".pdf"
    sSalto = "Salto Maximo: " + str(salto) + " posiciones."
    sNP = "Nro de Procesadores: " + str(np) + " en total."
    sTotal = "Total de Coincidencias: " + str(n_match) + " veces."
    sTiempo = "Tiempo de ejecucion: " + str(tiempo) + " segundos."
    sPaginas = "Nro de Paginas: " + str(info['nro_de_paginas']) + "."
    c.drawString(50, 460, sDocumento)
    c.drawString(50, 480, sSalto)
    c.drawString(50, 440, sNP)
    c.setFont("Helvetica-Bold", 14)
    c.drawString(306, 460, sTotal)
    c.drawString(306, 480, sTiempo)
    c.drawString(306, 440, sPaginas)

    # output
    # Subtitulo
    c.setFont("Helvetica-Bold", 20)
    c.drawString(220, 400-20, "Estadisticas")
    c.setFont("Helvetica", 15)

    # info 0-> nombre_pdf 1->patron_a_buscar 2->nro_de_paginas 3-> link 4-> salto_maximo
    # stats {'suma_abc','suma_voc','porc_voc','porc_con','veces_voc','veces_abc','tuple_veces_abc','maximo_veces_abc'}
    # match {<coincidencias>}

    c.setFont("Helvetica", 15)
    c.drawString(50, 370-20, "El analisis del texto del pdf arrojó los siguientes resultados: ")
    c.setFont("Helvetica-Oblique", 15)
    CC = "- Cantidad de caracteres analizados: " + \
        str(stats['suma_abc']) + " letras en el texto."
    SV = "- Total de Vocales: " + str(stats['suma_voc']) + " en el texto."
    PV = "- Porcentaje de Vocales: " + str(stats['porc_voc']) + "% del total ."
    PC = "- Porcentaje de Consonantes: " + \
        str(stats['porc_con']) + "% del total ."
    VV = "VECES VOC -> CUAD"
    VT = "VECES ABC -> GRAFICO"
    c.setFont("Helvetica", 15)
    c.drawString(70, 350-20, CC)
    c.drawString(70, 330-20, SV)
    c.drawString(70, 310-20, PV)
    c.drawString(70, 290-20, PC)

    c.drawString(50, 220, "Para mayor detalle de los resultados finales, visite: ")
    c.setFont("Helvetica", 10)
    c.drawString(50, 200, info['link'])

    # Pie de pagina
    c.line(20, 40, 582, 40)
    c.setFont("Helvetica-Bold", 8)
    c.drawString(
        140, 30, "Recuerda seguir utilizando nuestra pagina : 00-ironman.clustermaarvel.utem/webParalela/biblia.php")
    now = "Documento creado en :" + time.strftime("%c")
    c.drawString(230, 20, now)
    c.showPage()
    c.save()
    print("EXITO PDF!")
