class Persona:
    def __init__(self,identificacion,nombre,apellido,sexo,tipo):
        self.identificacion=identificacion
        self.nombre=nombre
        self.apellido=apellido
        self.sexo=sexo
        self.tipo=tipo

class Profesor(Persona):
    def __init__(self,identificacion,nombre,apellido,sexo,tipo,colegio,grado):
        Persona.__init__(self,identificacion,nombre,apellido,sexo,tipo)
        self.colegio=colegio
        self.grado=grado

class Medico(Persona):
    def __init__(self,identificacion,nombre,apellido,sexo,tipo,hospital,especialidad):
        Persona.__init__(self,identificacion,nombre,apellido,sexo,tipo)
        self.hospital=hospital
        self.especialidad=especialidad

def Capturar():
    videntificacion=input("Digite la identificación: ")
    vnombre=input("Digite el nombre: ")
    vapellido=input("Digite el apellido: ")
    osexo=True
    while(osexo==True):
        sexo=input("Digite el Sexo [M-F]: ")
        if sexo.upper() in ['M','F']:
            osexo=False
    otipo=True
    while (otipo==True):
        vtipo=input("1->Profesor   2->Medico : ")
        otipo=False
        if(vtipo=='1'):
            vcolegio=input("Digite el colegio: ")
            ogrado=True
            while(ogrado==True):
                vgrado=input("Digite el grado [1-10]: ")
                if int(vgrado) in range(1,11):
                    ogrado=False
            profesor1=Profesor(videntificacion,vnombre,vapellido,sexo.upper(),vtipo,vcolegio,vgrado)
            cadena=profesor1.identificacion+","+profesor1.nombre+","+profesor1.apellido+"," \
            +profesor1.sexo+","+profesor1.tipo+","+profesor1.colegio+","+profesor1.grado
        elif(vtipo=='2'):
            vhospital=input("Digite el Hospital: ")
            vespecialidad=input("Digite la especialidad: ")
            medico1=Medico(videntificacion,vnombre,vapellido,sexo.upper(),vtipo,vhospital,vespecialidad)
            cadena=medico1.identificacion+","+medico1.nombre+","+medico1.apellido+","+medico1.sexo+"," \
            +medico1.tipo+","+medico1.hospital+","+medico1.especialidad
        else:
            otipo=True
            print("Error el tipo de profesional (1 o 2)")
        f = open ('Archivo_persona','a')
        f.write(cadena+'\n')
        f.close()

def Consultar():
    try:
        f = open ('Archivo_persona.txt','r')


        for line in f:
            
            print(line.split(','))
        f.close()
    except:
        print("Error al leer el archivo")

def Consultar2():
    try:
        f = open ('Archivo_persona.txt','r')
        videntificacion=input("Digite la identificación: ")
        encontrado=0
        for line in f:
            c=line.split(',')
            if videntificacion==c[0]:
                print(c)
                encontrado=1
                break
        if encontrado==0:
            print("Datos no encontrados")
        f.close()
    except :
        print("Error al leer el archivo")

def Modificar():

        f = open ('Archivo_persona.txt','r')
        videntificacion=input("Digite la identificación: ")
        encontrado=0
        cadena=""
        for line in f:
            c=line.split(',')
            if videntificacion==c[0]:
                cadena2=input(f"{line}")
                encontrado=1
                cadena=cadena+cadena2+'\n'

            else:
                cadena=cadena+line
        f.close()
        if encontrado==0:
            print("Datos no encontrados")
        else:
            f = open ('Archivo_persona.txt','w')
            f.write(cadena)
            f.close()
            print("Registro actualizado exitosamente")
    

def Eliminar():
    try:
        f = open ('Archivo_persona.txt','r')
        videntificacion=input("Digite la identificación: ")
        encontrado=0
        cadena=""
        for line in f:
            c=line.split(',')
            if videntificacion==c[0]:
                encontrado=1
            else:
                cadena=cadena+line
        f.close()
        if encontrado==0:
            print("Datos no encontrados")
        else:
            f = open ('Archivo_persona.txt','w')
            f.write(cadena)
            f.close()
            print("Registro eliminado exitosamente")
    except:
        print("Error al leer el archivo")

Condicion=True
while(Condicion==True):
    opcion=input("1-> Capturar  2->Consultar  3->Consulta individual  4->Modificar  5->Eliminar  0->Salir : ")
    if(opcion=='1'):
        Capturar()
    elif(opcion=='2'):
        Consultar()
    elif(opcion=='3'):
        Consultar2()
    elif(opcion=='4'):
        Modificar()
    elif(opcion=='5'):
        Eliminar()
    elif(opcion=='0'):
        Condicion=False
    else:
        print("Seleccione una opción valida")




