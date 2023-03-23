<?php
global $sitename, $anonwaitdays, $outsidewaitdays;


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
define_once("_CATEGORY","Categor�a");
define_once("_CATEGORIES","Categor�as");
define_once("_LVOTES","Votos");
define_once("_TOTALVOTES","Votos Totales:");
define_once("_THEREARE","Hay");
define_once("_NOMATCHES","No hay registros para su consulta");
define_once("_SCOMMENTS","Comentarios");
define_once("_UNKNOWN","Desconocido");
define_once("_DOWNLOADS","Downloads");
define_once("_FILESIZE","Tama�o del archivo");
define_once("_VERSION","Versi�n");
define_once("_DESCRIPTION","Descripci�n");
define_once("_AUTHOR","Autor");
define_once("_HOMEPAGE","P�gina de Inicio");
define_once("_DOWNLOADNOW","Descargar este archivo ahora.");
define_once("_FILEURL","URL del archivo");
define_once("_ADDDOWNLOAD","A�adir Descarga");
define_once("_DOWNLOADSMAIN","Indice");
define_once("_DOWNLOADCOMMENTS","Comentarios de la descarga");
define_once("_DOWNLOADSMAINCAT","Categor�a de la descarga");
define_once("_ADDADOWNLOAD","Agregar una descarga");
define_once("_DOWNLOADALREADYEXT","ERROR: �Este URL ya est� en nuestra Base de Datos!");
define_once("_DOWNLOADNOTITLE","ERROR: �Necesitas poner un t�tulo para tu URL!");
define_once("_DOWNLOADNOURL","ERROR: �Necesitas poner un URL para tu URL!");
define_once("_DOWNLOADNODESC","ERROR: �Necesitas poner una descripci�n para tu URL!");
define_once("_DOWNLOADRECEIVED","Recibimos tu Propuesta. �Gracias!");
define_once("_CHECKFORIT","No has escrito un E-Mail. De todas maneras, revisaremos tu enlace pronto.");
define_once("_NEWDOWNLOADS","Nuevas Descargas");
define_once("_TOTALNEWDOWNLOADS","N�mero total de nuevos enlaces");
define_once("_TRATEDDOWNLOADS","total de descargas valoradas");
define_once("_SORTDOWNLOADSBY","Ordenar los enlaces por");
define_once("_DOWNLOADPROFILE","Perfil de descarga");
define_once("_DOWNLOADRATINGDET","Detalles de la valoraci�n del enlace");
define_once("_EDITTHISDOWNLOAD","Editar esta descarga");
define_once("_DOWNLOADRATING","Valoraci�n de la descarga");
define_once("_PROMOTE02","Una manera de ligar el formulario de evaluaci�n es poner este simple texto:");
define_once("_PROMOTE03","Si quieres m�s que un simple texto, puedes utilizar un peque�o bot�n como:");
define_once("_PROMOTE04","Si haces trampas en esto, quitaremos tu enlace. Una vez aclarado esto, as� es como se ve el formulario de valoraci�n.");
define_once("_DOWNLOADVOTE","�Vota!");
define_once("_REQUESTDOWNLOADMOD","Pedir la modificaci�n de la descarga");
define_once("_DOWNLOADID","ID de la Descarga");
define_once("_DATE","Fecha");
define_once("_TO","Para");
define_once("_NEW","Nuevo");
define_once("_POPULAR","Popular");
define_once("_TOPRATED","Mejores valorados");
define_once("_ADDITIONALDET","Detalles adicionales");
define_once("_EDITORREVIEW","Rese�a del editor");
define_once("_REPORTBROKEN","Informar de un enlace roto");
define_once("_AND","y");
define_once("_INDB","en nuestra base de datos");
define_once("_INSTRUCTIONS","Instrucciones");
define_once("_USERANDIP","El nombre de usuario y el IP ser�n registrados, as� que por favor no abuses del sistema.");
define_once("_LDESCRIPTION","Descripci�n: (255 caracteres m�x.)");
define_once("_LASTWEEK","�ltima Semana");
define_once("_LAST30DAYS","�ltimos 30 d�as");
define_once("_1WEEK","1 Semana");
define_once("_2WEEKS","2 Semanas");
define_once("_30DAYS","30 D�as");
define_once("_SHOW","Ver");
define_once("_DAYS","d�as");
define_once("_ADDEDON","Agregado el");
define_once("_RATING","Valoraci�n");
define_once("_DETAILS","Detalles");
define_once("_OF","de");
define_once("_TVOTESREQ","m�nimo de votos necesarios");
define_once("_SHOWTOP","Mostrar Top");
define_once("_MOSTPOPULAR","M�s Popular - Top");
define_once("_OFALL","de todo");
define_once("_POPULARITY","Popularidad");
define_once("_SELECTPAGE","Seleccionar P�gina");
define_once("_MAIN","Principal");
define_once("_NEWTODAY","Nuevo Hoy");
define_once("_NEWLAST3DAYS","Nuevo en los �ltimos 3 d�as");
define_once("_NEWTHISWEEK","Nuevo esta semana");
define_once("_POPULARITY1","Popularidad (de menos a m�s impresiones)");
define_once("_POPULARITY2","Popularidad (de m�s a menos impresiones)");
define_once("_TITLEAZ","T�tulo (A - Z)");
define_once("_TITLEZA","T�tulo (Z - A)");
define_once("_RATING1","Valoraci�n (de menor a mayor)");
define_once("_RATING2","Valoraci�n (de mayor a menor)");
define_once("_SEARCHRESULTS4","Buscar resultados por");
define_once("_USUBCATEGORIES","Sub-Categor�as");
define_once("_TRY2SEARCH","Intenta buscar");
define_once("_INOTHERSENGINES","en otros Motores de B�squeda");
define_once("_EDITORIAL","Editorial");
define_once("_EDITORIALBY","Editorial por");
define_once("_NOEDITORIAL","El editorial no est� actualmente disponible en este sitio web.");
define_once("_RATETHISSITE","Valorar este sitio web");
define_once("_ISTHISYOURSITE","�Es �ste tu recurso?");
define_once("_ALLOWTORATE","�Permite que los usuarios lo valoren desde tu sitio Web!");
define_once("_OVERALLRATING","Valoraci�n General");
define_once("_TOTALOF","Total de");
define_once("_USER","Usuario");
define_once("_USERAVGRATING","Valoraci�n promedio de los usuarios");
define_once("_NUMRATINGS","N�mero de valoraciones");
define_once("_REGISTEREDUSERS","Usuarios registrados");
define_once("_NUMBEROFRATINGS","N�mero de valoraciones");
define_once("_NOREGUSERSVOTES","No hay votos de usuarios registrados");
define_once("_BREAKDOWNBYVAL","Histograma por valoraci�n");
define_once("_LTOTALVOTES","votos totales");
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
define_once("_PROMOTE01","Tal vez te interesa unas de la opciones que tenemos para la 'Valoraci�n de otros sitios'. Estas te permiten poner una imagen (o un formulario de votaci�n) en tu sitio Web para incrementar sus votos. Por favor elije una de estas opciones:");
define_once("_TEXTLINK","Texto del enlace");
define_once("_HTMLCODE1","El c�digo HTML que puedes usar en este caso, es el siguiente:");
define_once("_THENUMBER","El N�mero");
define_once("_IDREFER","en el c�digo HTML referencia tu ID de sitio en la Base de Datos de $sitename. Verifica que este n�mero este presente.");
define_once("_BUTTONLINK","Bot�n de Enlace");
define_once("_RATEIT","Vota por este sitio");
define_once("_HTMLCODE2","El c�digo fuente para el bot�n anterior es:");
define_once("_REMOTEFORM","Formulario de valoraci�n remota");
define_once("_VOTE4THISSITE","Votar por este sitio");
define_once("_HTMLCODE3","Usar este formulario permitir� a los usuarios valorar tu sitio directamente desde tu p�gina y ser� grabada aqu�. El formulario anterior est� desconectado, pero el siguiente c�digo trabajar� si lo copias y pegas en tu p�gina. El c�digo es el siguiente:");
define_once("_PROMOTE05","�Gracias!, y buena suerte con tu valoraci�n.");
define_once("_STAFF","Plantilla");
define_once("_THANKSBROKEN","Gracias por ayudar a mantener la integridad de este directorio.");
define_once("_SECURITYBROKEN","Por razones de seguridad tu nombre de usuario y direcci�n IP ser�n temporalmente registrados.");
define_once("_THANKSFORINFO","Gracias por la informaci�n.");
define_once("_LOOKTOREQUEST","Analizaremos tu petici�n pronto.");
define_once("_SENDREQUEST","Enviar Petici�n");
define_once("_THANKSTOTAKETIME","Gracias por tu tiempo en la evaluaci�n de este sitio en");
define_once("_RETURNTO","Volver a");
define_once("_RATENOTE1","Por favor no votes por el mismo enlace m�s de una vez");
define_once("_RATENOTE2","La escala va de 1 a 10, siendo 1 Pobre y 10 Excelente.");
define_once("_RATENOTE3","Trata de ser objetivo en tu voto, si se recibe siempre 1 � 10, la valoraci�n no ser� �til.");
define_once("_RATENOTE5","No votes por tu propio recurso o el de tu competidor.");
define_once("_YOUAREREGGED","Eres un usuario registrado y est�s conectado.");
define_once("_FEELFREE2ADD","Si�ntete libre de agregar un comentario sobre este sitio.");
define_once("_YOUARENOTREGGED","No eres un usuario registrado o no est�s conectado.");
define_once("_IFYOUWEREREG","Si estuvieras registrado podr�as haber publicado comentarios en este sitio web.");
define_once("_TITLE","T�tulo");
define_once("_MODIFY","Modificar");
define_once("_COMPLETEVOTE1","Tu voto es apreciado.");
define_once("_COMPLETEVOTE2","T� ya has votado por este recurso en los pasados d�a(s).");
define_once("_COMPLETEVOTE3","Vota por un recurso s�lo una vez.<br>Todos los votos ser�n revisados.");
define_once("_COMPLETEVOTE4","No puedes votar por un recurso que t� enviaste.<br>Todos los votos ser�n revisados.");
define_once("_COMPLETEVOTE5","No has seleccionado un valor - Voto no registrado");
define_once("_COMPLETEVOTE6","S�lo se admite un voto por direcci�n IP cada $outsidewaitdays d�a(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");
define_once("_AUTHORNAME","Nombre del Autor");
define_once("_AUTHOREMAIL","Email del Autor");
define_once("_DOWNLOADNAME","Nombre del Programa");
define_once("_ADDTHISFILE","Agregar este archivo");
define_once("_INBYTES","en bytes");
define_once("_RATERESOURCE","Valorar Recurso");
define_once("_DSUBMITONCE","Enviar un Download s�lo una vez.");
define_once("_DPOSTPENDING","Todos los recursos se verifican antes de publicar.");
define_once("_DTOTALFORLAST","Descargas nuevas de los �ltimos");
define_once("_DBESTRATED","Descargas Mejor Valoradas - Top");
define_once("_RESSORTED","Recurso ordenado por");

