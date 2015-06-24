# Se incluyen las funciones desarrolladas del codigo secuencial
from Paralelo.formatPDF import toStringFormat
from Paralelo.searchMatches import buscaPatron
from Paralelo.saltoProcesador import saltoProc
from Paralelo.elimRep import elimina_rep
from Paralelo.mail import envio_mail
from time import *
import sys

# Se incluyen modulos para sacar Advertencias (warnings)
import warnings
warnings.filterwarnings('ignore')

# Y las funciones de los modulos mpi4py, numpy
from mpi4py import MPI
from numpy import *

# Variable de comunicacion
comm = MPI.COMM_WORLD

# Se obtiene el numero de procesador que se le asigna a cada nodo
rank = comm.Get_rank()

# Es el tamaÒo ingresado junto a mpirun (-np). Numero de procesadores
size = comm.Get_size()

# Se obtiene el nonbre del Nodo en que se esta ejecutando el codigo
name = MPI.Get_processor_name()

# Establece que el numero de procesadores sera el parametro -np ingresado
# en la ejecucion
procesadores = size
gtime = time()


def run():
    if(rank == 0):
        # print("<INICIALIZANDO> Nodo Maestro",
        #      name, ", Procesador Nro ", rank)

        # Indica al usario que ingrese el nombre del documentos PDF
        # pdf = input("\tIngrese nombre del arhivo PDF: ")
        # direccion = "Serial/" + pdf + ".pdf"

        direccion = "Serial/" + str(sys.argv[1]) + ".pdf"

        # Transforma el texto del pdf en texto, y se almacena en
        # la variable txt
        txt = toStringFormat(direccion)

        # Comienza a medir el tiempo de ejecucion
        start = time()

        # Pide al usuario ingresar la palabra a buscar
        # keyword = input("\tIngrese la palabra a buscar: ")
        keyword = str(sys.argv[2])

        keyword = keyword.split()

        # Pide el salto maximo al usuario
        # jumpMax = int(input("\tIngrese salto maximo: "))

        jumpMax = int(sys.argv[3])

        # Invierte la palabra ingresada
        keyword = keyword + [w[::-1] for w in keyword]

        # Calcula los saltos segun el salto maximo y la cantidad de
        # procesadores en una lista
        lsaltos = saltoProc(jumpMax, procesadores - 1)

        # Estima el tiempo antes de enviar datos a nodos esclavos
        trans = time() - start

        # Distribucion de carga en los nodos esclavos
        # Se envia a cada nodo la palabra, el documento como texto,
        # y el salto minimo y maximo.
        for i in range(1, procesadores):
            datos = {"minimo": lsaltos[(i * 2) - 2],
                     "maximo": lsaltos[(i * 2) - 1],
                     "texto": txt,
                     "palabra": keyword}
            # Se envia la lista de variables al nodo con rank i
            # print("<ENVIANDO>: Hacia procesador ",i," el salto [", lsaltos[(i * 2) - 2], "->", lsaltos[(i * 2) - 1],"]")
            comm.send(datos, dest=i, tag=1)

    if(rank != 0):
        # Recepcion de parametros desde el nodo maestro
        datos = comm.recv(source=0, tag=1)

        match, matchReverse = [], []
        
        # Establece el tiempo inicial
        start2 = time()

        # Asignacion de valores
        jumpMin = datos["minimo"]
        jumpMax = datos["maximo"]
        txt = datos["texto"]
        keyword = datos["palabra"]

        # print("<EJECUTANDO>: Esclavo ",
        # name, ", Procesador Nro ", rank, "salto [", jumpMin, "->",
        # jumpMax,"]")

        for i in range(len(keyword)):
            if(i>=int(len(keyword)/2)):
                # Busca las coincidencias con la keyword leida al reves.
                matchReverse += buscaPatron(txt, keyword[i], jumpMin, jumpMax)
            else:
                # Busca las coincidencias con la keyword normal.
                match += buscaPatron(txt, keyword[i], jumpMin, jumpMax)

        # Calcula el tiempo final del nodo esclavo
        trans2 = time() - start2

        # Envio de Respuestas a nodo Maestro
        comm.send(match, dest=0, tag=1)
        comm.send(matchReverse, dest=0, tag=2)
        comm.send(trans2, dest=0, tag=3)

    if(rank == 0):
        datos = []
        datos_inversos = []
        tiempo_min_sl = 9999
        start3 = time()

        toolbar_width = 50
        aux = (procesadores - 1) / toolbar_width
        cont = aux
        print("\nBuscando : ", keyword)
        print("----------------------------------------------------------")
        sys.stdout.write("0 [%s] 100" % (" " * (toolbar_width)))
        sys.stdout.flush()

        # return to start of line, after '['
        sys.stdout.write("\b" * (toolbar_width + 1 + 4))

        # Recepcion de parametros desde los nodos esclavos
        for i in range(1, procesadores):
            datos += comm.recv(source=i, tag=1)
            datos_inversos += comm.recv(source=i, tag=2)

            if(procesadores + 1 >= cont):
                sys.stdout.write("#")
                sys.stdout.flush()
                cont += aux

            # Recibe y estima el mayor tiempo de ejecucion en los esclavos
            tiempo = comm.recv(source=i, tag=3)
            if (tiempo < tiempo_min_sl):
                tiempo_min_sl = tiempo

            # print("< RECIBIENDO>: Respuesta desde procesador ", i, "en ", name,"[",rank,"]")
        if(toolbar_width > (procesadores - 1)):
            for i in range(toolbar_width - (procesadores - 1)):
                sys.stdout.write("#")
                sys.stdout.flush()
        sys.stdout.write("\n")

        # Calculo final de metricas
        trans3 = time() - start3
        total_time = trans + trans3  # + tiempo_min_sl

        # Eliminar resultados repetidos
        datos = elimina_rep(datos)
        datos = elimina_rep(datos)
        datos_inversos = elimina_rep(datos_inversos)
        datos_inversos = elimina_rep(datos_inversos)

        # Se obtiene el numero de resultados en ambos sentidos y el total
        cant1 = len(datos)
        cant2 = len(datos_inversos)
        tot = cant1 + cant2

        # Se establece si hubo cohincidencias o no, y muestra los resultados
        # segun corresponda
        if (tot == 0):
            tot = 1
            print("Recopilacion Final Nodo ", name, "[", rank, "].")
            print(
                "*******************************************************************************\n")
            print("\tResultado Final : NO SE ENCONTRO LA PALABRA")
        else:
            print("")
            print("Recopilacion Final Nodo ", name, "[", rank, "].")
            print(
                "\n***********************************ENORDEN***********************************\n")
            # for i in range(len(datos)):
            #     print(datos[i])
            print(
                "\n***********************************INVERSO***********************************\n")
            # for i in range(len(datos_inversos)):
            #     print(datos_inversos[i])
            print(
                "\n*****************************************************************************\n")
            print("\tResultado Final ")
            print("\t En orden: ", cant1, " porc. ", int(
                round((cant1 / tot), 2) * 100), "%.")
            print("\t Inversa%: ", cant2, " porc. ", int(
                round((cant2 / tot), 2) * 100), "%.")
            print("\t En total: ", tot, ".")
            print(
                "\n*****************************************************************************\n")
        print("\tEn recorrer ", len(txt),
              " paginas. Salto Maximo: ", jumpMax, ".")
        print("\tT(e): ", round(total_time, 3), " segundos.")
        print("\tT(c): ", round(
            round(time() - gtime, 3) - round(total_time, 3), 3), " segundos.")
        print("\tT(t): ", round(time() - gtime, 3), " segundos.")
        print(
            "\n*****************************************************************************\n")
        print("trans ", round(trans, 3), " trans3 ", round(trans3, 3),
              " tiempo_min_sl ", round(tiempo_min_sl, 3), ".")

        # envio_mail(cant1, cant2, sys.argv[1], sys.argv[2], sys.argv[3])
run()
