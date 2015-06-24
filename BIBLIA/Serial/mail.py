import requests


def envio_mail_paralelo_implicito(largo, pdf, keyword, jumpMax, email):
    pdf = pdf.upper()
    return requests.post(
        "https://api.mailgun.net/v3/sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org/messages",
        auth=("api", "key-bccd075f02a12db1dee03a7710800a5d"),
        data={"from": "Cluster Marvel<postmaster@sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org>",
              "to": "Usuario <" + email + ">",
              "subject": "Resultados Bible Black - SERIAL IMPLICITO",
              "text":
              "Busqueda en <" + pdf +
              ".pdf> terminada.\n" +
              "------------------\n" + " ".join(keyword) +
              "\n------------------" +
              "\nSe encontraron: " +  str(largo) + " resultados con salto " + str(jumpMax) +
              ".\n\nPara ver el detalle, ingrese a: http://00-ironman.clustermarvel.utem/webParalela/"})


def envio_mail_paralelo_explicito(largo, pdf, keyword, jumpMax, email):
    pdf = pdf.upper()
    return requests.post(
        "https://api.mailgun.net/v3/sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org/messages",
        auth=("api", "key-bccd075f02a12db1dee03a7710800a5d"),
        data={"from": "Cluster Marvel<postmaster@sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org>",
              "to": "Usuario <" + email+ ">",
              "subject": "Resultados Bible Black - SERIAL EXPLICITO",
              "text":
              "Busqueda en <" + pdf +
              ".pdf> terminada.\n" +
              "------------------\n" + " ".join(keyword) +
              "\n------------------" +
              "\nSe encontraron: " +  str(largo) + " resultados con salto " + str(jumpMax) +
              ".\n\nPara ver el detalle, ingrese a: http://00-ironman.clustermarvel.utem/webParalela/"})
