
import re
import random
import os

def keywordList():
    
    # Abrir ficheros
    #currentDir = os.path.dirname(os.path.abspath(__file__))
    path = "Diccionarios/"
    archivo_apellidos=open(path+'apellidos.txt', 'r')
    archivo_apocalipsis=open(path+'apocalipsis.txt', 'r')
    archivo_marca=open(path+'marca.txt', 'r')
    archivo_moda=open(path+'moda.txt', 'r')
    archivo_nombres=open(path+'nombres.txt', 'r')

    
    # Listas que almacenarán las palabras de los diccionarios
    lista=[]

    #Lectura de ficheros  
    """
    # Lista Nombres
    for linea in archivo_nombre:
        lista.append(re.sub("[^a-z]","",linea))
    # Lista Países
    for linea in archivo_paises:
        lista.append(re.sub("[^a-z]","",linea))
    # Lista Verbos
    for linea in archivo_verbos:
        lista.append(re.sub("[^a-z]","",linea))
    """
    # Lista Cosas
    for linea in archivo_apellidos:
        lista.append(re.sub("[^a-z]","",linea))
    for linea in archivo_apocalipsis:
        lista.append(re.sub("[^a-z]","",linea))
    for linea in archivo_marca:
        lista.append(re.sub("[^a-z]","",linea))    
    for linea in archivo_moda:
        lista.append(re.sub("[^a-z]","",linea))
    for linea in archivo_nombres:
        lista.append(re.sub("[^a-z]","",linea))


    # Cierre de ficheros.
    archivo_nombres.close()
    archivo_apocalipsis.close()
    archivo_marca.close()
    archivo_moda.close()
    archivo_apellidos.close()
    
    return lista

