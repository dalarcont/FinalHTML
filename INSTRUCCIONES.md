# FinalHTML
Proyecto final HTML como sustentación y validación acorde a instrucción y acuerdo docente


- Versiones:
- - Antigua: Construida de manera estructurada pero su código a lo novato: El código spaghetti. 
    Es necesario crear en su gestor de BD la tabla con nombre 'universidad' y en ella aplicar el archivo: MYSQL_VERSION_ANTERIOR_TS.sql
- - Nueva: En proceso de migración a la forma orientada a objetos.
    Es necesario crear en su gestor de BD la tabla con nombre 'universidad' y en ella aplicar el archivo: MYSQL_VERSION_NUEVA.sql
    
- Configuración:
- - Para conexión correcta a la BD, debe ingresar en la siguiente ruta para que conecte a la base de datos:
- - Para versión nueva:
- - - _DDSI/ControlSistemasInformacion.php_ -> clase Root_BasesDatos. 
- - - - Cambie _localhost_ -> dirección donde reside el servidor BD, 
- - - - Cambie _universidad_ por el nombre de usuario de su base de datos (debe tener permisos de R/W)
- - - - Cambie _eLzxVpaY2PABPUg_ -> contraseña asociada a su usuario de base de datos
- - - - Guarde.
- - Para versión antigua:
- - - _estudiantes_old/divsys/umcdssictrl.php_ -> clase Root_BasesDatos. 
- - - - Cambie _$linkdir_ -> dirección donde reside el servidor BD, 
- - - - Cambie _$linkusr_ por el nombre de usuario de su base de datos (debe tener permisos de R/W)
- - - - Cambie _$linkpss_ -> contraseña asociada a su usuario de base de datos
- - - - Guarde.

- Funcionalidades:
-  - Antigua:
-  -  - Inicio de sesión -> Plan de estudios; Ajuste de matrícula; CancelaciónRetiro; ConsultarPagos; notas; Historial; Perfil Estudiante
-  - Nueva:
-  -  - Inicio de sesión -> Cancelar semestre; Horario de clases; Perfil estudiante

- A tener en cuenta:
-  - En la versión antigua se declaran las funciones y están regadas en su carpeta sea para vista, modelo o controlador. Cuando una vista o controlador se necesita
      estará declarado en forma que vuelva y se llame así mismo durante la compilación del archivo y por órden de declaración. Es decir
      si al principio del archivo tenemos _DecirHola.php_ y más abajo se declara nuevamente, el archivo cumple con mandar 2 veces por que se declaró dos veces.
-  - En la versión nueva se transforma a orientado a objetos y separado en modelo-vista-controlador y una interface donde se definen todos los servicios.
-  En la versión antigua se ingresa como programa académico para prueba el programa "INGENIERÍA PRESIDENCIAL" con sus respectivas asignaturas.
-  En la versión antigua en la app Ajuste de matrícula dispone de asignaturas matriculadas y no matriculadas para ser canceladas y adicionadas respectivamente.
