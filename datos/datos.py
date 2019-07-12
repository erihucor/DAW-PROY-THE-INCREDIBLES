texto = """Azuay, Cuenca
Bolívar, Guaranda
Cañar, Azogues
Carchi, Tulcán
Chimborazo, Riobamba
Cotopaxi, Latacunga
El Oro, Machala
Esmeraldas, Esmeraldas
Galápagos, Puerto Baquerizo Moreno
Guayas, Guayaquil
Imbabura, Ibarra
Loja, Loja
Los Ríos, Babahoyo
Manabí, Portoviejo
Morona Santiago, Macas
Napo, Tena
Orellana, Francisco de Orellana
Pastaza, Puyo
Pichincha, Quito
Santa Elena, Santa Elena
Santo Domingo de los Tsáchilas, Santo Domingo
Sucumbíos, Nueva Loja
Tungurahua, Ambato
Zamora Chinchipe, Zamora"""

f = open("provincias.xml","w")
f.write('<?xml version="1.0" encoding="UTF-8"?>\n')
f.write("<provincias>\n")
for tupla in texto.split("\n"):
	prov = tupla.split(",")[0]
	f.write('<provincia>' + '<nombre>' + prov + '</nombre>' + '</provincia>\n' )
f.write("</provincias>")
f.close()