import requests


def envio_mail(cant1, cant2, libro, palabra, salto):
    cantt = cant1 + cant2
    libro = libro.upper()
    return requests.post(
        "https://api.mailgun.net/v3/sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org/messages",
        auth=("api", "key-bccd075f02a12db1dee03a7710800a5d"),
        data={"from": "Cluster Marvel<postmaster@sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org>",
              "to": "miguel <miguel.nunez@ceinf.cl>",
              "subject": "Resultados Bible Black",
              "text":
              "Busqueda en <" + libro +
              ".pdf> terminada.\n" +
              "------------------" +
              "\nSe encontraron:" +
              "\nEn orden: " + str(cant1) +
              "\nInvereso: " + str(cant2) +
              "\nTotal: " + str(cantt) +
              "\n\nPara ver el detalle, ingrese a: http://00-ironman.clustermarvel.utem/webParalela/"})
