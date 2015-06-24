from Serial.formatPDF import toStringFormat
from Serial.searchMatches import buscaPatron
from Serial.mail import envio_mail_serial_implicito
from time import *
import sys
import json
from run_pdf import Principal
from dictionary import keywordList

# Se lee el argumento 2 con el nombre del documento pdf
pdf = str(sys.argv[1])
direccion = "Serial/" + pdf + ".pdf"

# Transforma el texto del pdf en texto, y se almacena en la variable txt.
txt = toStringFormat(direccion)

# Recibe Salto Maximo y Correo por consola
jumpMax = int(sys.argv[2])
email = str(sys.argv[3])

# Obtiene Palabras de los Diccionarios e invierte dichas palabras
keyword = keywordList()
keyword = keyword + [w[::-1] for w in keyword]

# Almaceno los resultados en una sola variable
match = []

# Comienza la medicion de tiempos
start = time()

# Etapa Principal en que se buscan Resultados
for i in range(len(keyword)):
    match += buscaPatron(txt, keyword[i], jumpMax)

cont = 0
for i in range(len(txt)):
    cont += len(txt[i])
print("\nLa cantidad de caracteres analizados fue de: ", cont)

if (len(match) == 0):
    tot = 1
    print("Recopilacion Nodo Maestro 00-Ironman (Secuencial)")
    print(
        "*******************************************************************************\n")
    print("\tResultado Final : NO SE ENCONTRO LA PALABRA")
else:
    print("")
    print("Recopilacion Nodo Maestro 00-Ironman (Secuencial)")
    print(
        "\n***********************************ENORDEN***********************************\n")
    for i in range(len(match)):
        print(match[i])
    print(
        "\n*****************************************************************************\n")
    print("\tResultado Final : ", len(match), ".")
    print(
        "\n*****************************************************************************\n")
    print("\tTiempo estimado de ejecucion: ", round(time() - start, 3),
          " segundos. En recorrer ", len(txt), " paginas. Salto Maximo: ", jumpMax, ".")
    print(
        "\n*****************************************************************************\n")

    prim_pag_o = 1  # json.loads('["dato":'+match[0]+']')

    # Estadisticas pdf
    abc = "abcdefghijklmnopqrstuvwxyz"
    voc = "aeiou"
    suma_abc = 0
    suma_voc = 0
    maximo_veces_abc = -1
    veces_abc = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    veces_voc = [0, 0, 0, 0, 0]
    for i in range(len(txt)):
        for j in range(len(txt[i])):
            for k in range(len(abc)):
                if(txt[i][j] == abc[k]):
                    veces_abc[k] += 1
                    suma_abc += 1
            for k in range(len(voc)):
                if(txt[i][j] == voc[k]):
                    veces_voc[k] += 1
                    suma_voc += 1
    for i in range(len(veces_abc)):
        if(maximo_veces_abc < veces_abc[i]):
            maximo_veces_abc = veces_abc[i]

    porc_voc = round((suma_voc / suma_abc) * 100, 1)
    porc_con = round(100 - porc_voc, 1)
    tuple_veces_abc = []
    tuple_veces_abc.append(tuple(veces_abc))

    # Cadena de palabras unidas
    unidas = "implicito"
    unidas_t = "implicito_total"

    # Generacion de archivos output
    final = open(
        'Respuestas/respuesta_' + pdf + '_' + unidas + '.json', 'w')
    texto = json.dumps(match)
    final.write(texto)

    final = open('Textos/' + pdf + ".txt", 'w')
    texto = json.dumps(txt)
    final.write(texto)

    # Envia email al usuario
    link = "http://localhost:8888/webParalela/BIBLIA/index.php?pagina=" + \
        str(prim_pag_o) + "&file=" + pdf + "&pattern=" + unidas
    link = link.replace(' ', '')
    print ("\n\nAcceda (orden  ) a : ", link)

    # Preparacion de datos a enviar
    stats = {'suma_abc': suma_abc, 'suma_voc': suma_voc,
             'porc_voc': porc_voc, 'porc_con': porc_con, 'veces_voc': veces_voc,
             'veces_abc': veces_abc, 'tuple_veces_abc': tuple_veces_abc, 'maximo_veces_abc': maximo_veces_abc}

    info = {'nombre_pdf': pdf, 'patron_a_buscar': unidas_t,
            'nro_de_paginas': len(txt), 'link': link, 'salto_maximo': jumpMax}

    print(stats['veces_abc'])
    print("Paramatros Generados!")

    # Generar PDF
    # Principal(info, stats, match)
    print("Documento PDF creado!")

    # Envio de Mail
    envio_mail_serial_implicito(len(match), pdf, keyword, jumpMax, email)
    print("Correo Enviado a ", email, "!\n")

    # Muestra resultados
    print("\nLa cantidad de caracteres analizados fue de: ",
          suma_abc, " con ", suma_voc, " vocales.")
    print("\nLos porcentajes encontrados fueron: ",
          porc_voc, '% vocales y ', porc_con, '% consonantes.')
