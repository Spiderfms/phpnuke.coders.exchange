<?php
global $sitename;
if(!isset($anonwaitdays)) { $anonwaitdays = 0; }
if(!isset($outsidewaitdays)) { $outsidewaitdays = 0; }


/**************************************************************************/
/* PHP-NUKE: Advanced Content Management System                           */
/* ============================================                           */
/*                                                                        */
/* This is the language module with all the system messages               */
/*                                                                        */
/* If you made a translation, please go to the site and send to me        */
/* the translated file. Please keep the original text order by modules,   */
/* and just one message per line, also double check your translation!     */
/*                                                                        */
/* You need to change the second quoted phrase, not the capital one!      */
/*                                                                        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* And, if you use HTML code, please double check it.                     */
/**************************************************************************/

define_once("_URL","URL");
define_once("_PREVIOUS","P�gina Anterior");
define_once("_NEXT","P�gina Siguiente");
define_once("_YOURNAME","Tu nombre");
define_once("_CATEGORY","Categor�a");
define_once("_CATEGORIES","Categor�as");
define_once("_LVOTES","Votos");
define_once("_TOTALVOTES","Votos Totales:");
define_once("_LINKTITLE","T�tulo del Enlace");
define_once("_HITS","Hits");
define_once("_THEREARE","Hay");
define_once("_NOMATCHES","No hay registros para su consulta");
define_once("_SCOMMENTS","Comentarios");
define_once("_DESCRIPTION","Descripci�n");
define_once("_SUBMITONCE","Enviar un �nico enlace de cada vez");
define_once("_POSTPENDING","Todos los enlaces enviados ser�n verificados.");
define_once("_CHECKFORIT","No has escrito un E-Mail. De todas maneras, revisaremos tu enlace pronto.");
define_once("_TOTALFORLAST","N�mero total de nuevos enlaces para los �ltimos");
define_once("_BESTRATED","Enlaces mejor valorados - Top");
define_once("_CATNEWTODAY","Nuevos enlaces a�adidos a esta categor�a hoy");
define_once("_CATLAST3DAYS","Nuevos enlaces a�adidos a esta categor�a en los �ltimos 3 d�as");
define_once("_CATTHISWEEK","Nuevos enlaces a�adidos a esta categor�a en esta semana");
define_once("_DATE1","Fecha (primero los enlaces m�s antiguos)");
define_once("_DATE2","Fecha (primero los enlaces m�s nuevos)");
define_once("_PROMOTE02","Una manera de ligar el formulario de evaluaci�n es poner este simple texto:");
define_once("_PROMOTE03","Si quieres m�s que un simple texto, puedes utilizar un peque�o bot�n como:");
define_once("_PROMOTE04","Si haces trampas en esto, quitaremos tu enlace. Una vez aclarado esto, as� es como se ve el formulario de valoraci�n.");
define_once("_ONLYREGUSERSMODIFY","Solamente los usuarios registrados pueden proponer modificaciones. Por favor, <a href=\"modules.php?name=Your_Account\">Reg�strate o Con�ctate</a>.");
define_once("_LETSDECIDE","Tu informaci�n permitir� a otros visitantes decidir mejor sobre qu� enlaces escoger.");
define_once("_RATENOTE4","Puedes ver una lista de <a href=\"modules.php?name=Downloads&d_op=TopRated\">los recursos m�s valorados</a>.");
define_once("_DATE","Fecha");
define_once("_TO","Para");
define_once("_ADDLINK","A�adir Enlace");
define_once("_NEW","Nuevo");
define_once("_POPULAR","Popular");
define_once("_TOPRATED","Mejores valorados");
define_once("_RANDOM","Aleatorio");
define_once("_LINKSMAIN","�ndice");
define_once("_LINKCOMMENTS","Comentarios del enlace");
define_once("_ADDITIONALDET","Detalles adicionales");
define_once("_EDITORREVIEW","Rese�a del editor");
define_once("_REPORTBROKEN","Informar de un enlace roto");
define_once("_LINKSMAINCAT","Principales Categor�as de Enlaces");
define_once("_AND","y");
define_once("_INDB","en nuestra base de datos");
define_once("_ADDALINK","Agregar Nuevo Enlace");
define_once("_INSTRUCTIONS","Instrucciones");
define_once("_USERANDIP","El nombre de usuario y el IP ser�n registrados, as� que por favor no abuses del sistema.");
define_once("_PAGETITLE","T�tulo de la P�gina");
define_once("_PAGEURL","P�gina del URL");
define_once("_YOUREMAIL","Tu E-Mail");
define_once("_LDESCRIPTION","Descripci�n: (255 caracteres m�x.)");
define_once("_ADDURL","Agregar este URL");
define_once("_LINKSNOTUSER1","No eres un usuario registrado o no te has conectado.");
define_once("_LINKSNOTUSER2","Si estuvieras registrado podr�as a�adir enlaces a este sitio web.");
define_once("_LINKSNOTUSER3","Ser un usuario registrado es r�pido y f�cil.");
define_once("_LINKSNOTUSER4","�Por qu� se requiere registro para acceder a algunas funciones?");
define_once("_LINKSNOTUSER5","S�lo le ofrecemos el contenido de mayor calidad,");
define_once("_LINKSNOTUSER6","cada art�culo es visto y aprobado individualmente por nuestra plantilla.");
define_once("_LINKSNOTUSER7","Esperamos ofrecerte s�lo informaci�n de valor.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Registrarse</a>");
define_once("_LINKALREADYEXT","ERROR: �Este URL ya est� listado en la Base de Datos!");
define_once("_LINKNOTITLE","ERROR: �Necesitas escribir un T�tulo para este Enlace!");
define_once("_LINKNOURL","ERROR: �Necesitas escribir una URL para este Enlace!");
define_once("_LINKNODESC","ERROR: �Necesitas escribir una Descripci�n para este Enlace!");
define_once("_LINKRECEIVED","Hemos recibido los datos del enlace que enviaste. �Gracias!");
define_once("_EMAILWHENADD","Recibir�s un E-Mail cuando el enlace sea aprobado.");
define_once("_NEWLINKS","Nuevos enlaces");
define_once("_TOTALNEWLINKS","Total de Nuevos Enlaces");
define_once("_LASTWEEK","Ultima Semana");
define_once("_LAST30DAYS","Ultimos 30 d�as");
define_once("_1WEEK","1 Semana");
define_once("_2WEEKS","2 Semanas");
define_once("_30DAYS","30 D�as");
define_once("_SHOW","Ver");
define_once("_DAYS","d�as");
define_once("_ADDEDON","Agregado el");
define_once("_RATING","Valoraci�n");
define_once("_RATESITE","Valore este Sitio");
define_once("_DETAILS","Detalles");
define_once("_OF","de");
define_once("_TRATEDLINKS","total enlaces Valorados");
define_once("_TVOTESREQ","m�nimo de votos necesarios");
define_once("_SHOWTOP","Mostrar Top");
define_once("_MOSTPOPULAR","M�s Popular - Top");
define_once("_OFALL","de todo");
define_once("_SORTLINKSBY","Ordenar enlaces por");
define_once("_SITESSORTED","Sitios clasificados por");
define_once("_POPULARITY","Popularidad");
define_once("_SELECTPAGE","Seleccionar P�gina");
define_once("_MAIN","Principal");
define_once("_NEWTODAY","Nuevo Hoy");
define_once("_NEWLAST3DAYS","Nuevo en los �ltimos 3 d�as");
define_once("_NEWTHISWEEK","Nuevo esta semana");
define_once("_POPULARITY1","Popularidad (de menos a m�s hits)");
define_once("_POPULARITY2","Popularidad (de m�s a menos hits)");
define_once("_TITLEAZ","T�tulo (A - Z)");
define_once("_TITLEZA","T�tulo (Z - A)");
define_once("_RATING1","Valoraci�n (de menor a mayor)");
define_once("_RATING2","Valoraci�n (de mayor a menor)");
define_once("_SEARCHRESULTS4","Buscar resultados por");
define_once("_USUBCATEGORIES","Sub-Categor�as");
define_once("_LINKS","Enlaces");
define_once("_TRY2SEARCH","Intenta buscar");
define_once("_INOTHERSENGINES","en otros Motores de B�squeda");
define_once("_EDITORIAL","Editorial");
define_once("_LINKPROFILE","Perfil del enlace");
define_once("_EDITORIALBY","Editorial por");
define_once("_NOEDITORIAL","El editorial no est� actualmente disponible en este sitio web.");
define_once("_VISITTHISSITE","Visitar este sitio web");
define_once("_RATETHISSITE","Valorar este sitio web");
define_once("_ISTHISYOURSITE","�Es este tu recurso?");
define_once("_ALLOWTORATE","Permite que los usuarios lo valoren desde tu sitio Web");
define_once("_LINKRATINGDET","detalle de valoraci�n de enlaces");
define_once("_OVERALLRATING","Valoraci�n General");
define_once("_TOTALOF","Total de");
define_once("_USER","Usuario");
define_once("_USERAVGRATING","Valoraci�n promedio de los usuarios");
define_once("_NUMRATINGS","Num. de valoraciones");
define_once("_EDITTHISLINK","Editar Enlace");
define_once("_REGISTEREDUSERS","Usuarios registrados");
define_once("_NUMBEROFRATINGS","N�mero de valoraciones");
define_once("_NOREGUSERSVOTES","No hay votos de usuarios registrados");
define_once("_BREAKDOWNBYVAL","Histograma por valoraci�n");
define_once("_LTOTALVOTES","votos totales");
define_once("_LINKRATING","Enlaces valorados");
define_once("_HIGHRATING","Alta valoraci�n");
define_once("_LOWRATING","Baja valoraci�n");
define_once("_NUMOFCOMMENTS","N�mero de comentarios");
define_once("_WEIGHNOTE","* Nota: Este sitio diferencia los votos de los usuarios registrados de los no registrados");
define_once("_NOUNREGUSERSVOTES","No hay votos de no registrados");
define_once("_WEIGHOUTNOTE","** Nota: Este sitio diferencia los votos de los usuarios registrados de los for�neos");
define_once("_NOOUTSIDEVOTES","Votos de usuarios");
define_once("_OUTSIDEVOTERS","Votos de an�nimos");
define_once("_UNREGISTEREDUSERS","Usuarios no registrados");
define_once("_PROMOTEYOURSITE","Promover tu sitio web");
define_once("_PROMOTE01","Tal vez te interesa unas de la opciones que tenemos para la 'Valoraci�n de otros sitios'. Estas te permiten poner una imagen (o un formulario de votaci�n) en tu sitio Web para incrementar sus votos. Por favor elige una de estas opciones:");
define_once("_TEXTLINK","Texto del enlace");
define_once("_HTMLCODE1","El c�digo HTML que puedes usar en este caso, es el siguiente:");
define_once("_THENUMBER","El N�mero");
define_once("_IDREFER","en el c�digo HTML referencia tu ID de sitio en la Base de Datos de $sitename. Verifica que este n�mero este presente.");
define_once("_BUTTONLINK","Bot�n de Enlace");
define_once("_RATEIT","Vota por este sitio");
define_once("_HTMLCODE2","El c�digo fuente para el bot�n anterior es:");
define_once("_REMOTEFORM","Formulario de valoraci�n remota");
define_once("_VOTE4THISSITE","Votar por este sitio");
define_once("_LINKVOTE","Votar");
define_once("_HTMLCODE3","Usando este formulario permitir� a los usuarios valorar tu sitio directamente desde tu p�gina y ser� grabada aqu�. El formulario anterior est� desconectado, pero el siguiente c�digo trabajar� si lo copias y pegas en tu p�gina. El c�digo es el siguiente:");
define_once("_PROMOTE05","�Gracias!, y buena suerte con tu valoraci�n.");
define_once("_STAFF","Plantilla");
define_once("_THANKSBROKEN","Gracias por ayudar a mantener la integridad de este directorio.");
define_once("_THANKSFORINFO","Gracias por la informaci�n.");
define_once("_LOOKTOREQUEST","Analizaremos tu petici�n pronto.");
define_once("_REQUESTLINKMOD","Pedir modifiaci�n de Enlace");
define_once("_LINKID","ID del Enlace");
define_once("_SENDREQUEST","Enviar Petici�n");
define_once("_THANKSTOTAKETIME","Gracias por tu tiempo en la evaluaci�n de este sitio en");
define_once("_RETURNTO","Volver a");
define_once("_RATENOTE1","Por favor no votes por el mismo enlace m�s de una vez");
define_once("_RATENOTE2","La escala va de 1 a 10, siendo 1 Pobre y 10 Excelente.");
define_once("_RATENOTE3","Trate de ser objetivo en tu voto, si se recibe siempre 1 � 10, la valoraci�n no ser� �til.");
define_once("_RATENOTE5","No votes por tu propio recurso o el de tu competidor.");
define_once("_YOUAREREGGED","Eres un usuario registrado y est�s conectado.");
define_once("_FEELFREE2ADD","Si�ntete libre de agregar un comentario sobre este sitio.");
define_once("_YOUARENOTREGGED","No eres un usuario registrado o no est�s conectado.");
define_once("_IFYOUWEREREG","Si estuvieras registrado podr�as haber publicado comentarios en este sitio web.");
define_once("_WEBLINKS","Enlaces");
define_once("_TITLE","T�tulo");
define_once("_MODIFY","Modificar");
define_once("_COMPLETEVOTE1","Tu vote es apreciado.");
define_once("_COMPLETEVOTE2","T� ya has votado por este recurso en los pasados $outsidewaitdays d�a(s).");
define_once("_COMPLETEVOTE3","Vota por un recurso s�lo una vez.<br>Todos los votos ser�n revisados.");
define_once("_COMPLETEVOTE4","No puedes votar por un recurso que t� enviaste.<br>Todos los votos ser�n revisados.");
define_once("_COMPLETEVOTE5","No has seleccionado un valor - Voto no registrado");
define_once("_COMPLETEVOTE6","S�lo se admite un voto por direcci�n IP cada $outsidewaitdays d�a(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

