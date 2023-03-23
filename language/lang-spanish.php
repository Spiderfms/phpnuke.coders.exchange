<?php
if(!isset($subscription_url)) $subscription_url = '';

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

define_once("_CHARSET","ISO-8859-1");
define_once("_SEARCH","Buscar");
define_once("_LOGIN","Login");
define_once("_WRITES", "escribi�");
define_once("_POSTEDON","Enviado el");
define_once("_NICKNAME","Nickname");
define_once("_PASSWORD","Contrase�a");
define_once("_WELCOMETO","Bienvenido a");
define_once("_EDIT","Editar");
define_once("_DELETE","Borrar");
define_once("_POSTEDBY","Enviado por");
define_once("_READS","Lecturas");
define_once("_GOBACK","[ <a href=\"javascript:history.go(-1)\">Volver Atr�s</a> ]");
define_once("_COMMENTS","Comentarios");
define_once("_PASTARTICLES","Art�culos Pasados");
define_once("_OLDERARTICLES","Art�culos Viejos");
define_once("_BY","por");
define_once("_ON","el");
define_once("_LOGOUT","Salir");
define_once("_WAITINGCONT","Contenido Esperando");
define_once("_SUBMISSIONS","Env�os");
define_once("_WREVIEWS","Reviews");
define_once("_WLINKS","Enlaces");
define_once("_EPHEMERIDS","Efem�rides");
define_once("_ONEDAY","En un d�a como hoy...");
define_once("_ASREGISTERED","�Todav�a no tienes una cuenta? Puedes <a href=\"modules.php?name=Your_Account&op=new_user\">crearte una</a>. Como usuario registrado tendr�s ventajas como seleccionar la apariencia de la p�gina, configurar los comentarios y enviar los comentarios con tu nombre.");
define_once("_MENUFOR","Men� de");
define_once("_NOBIGSTORY","Hoy a�n no hay una Gran Historia.");
define_once("_BIGSTORY","La Historia m�s le�da hoy:");
define_once("_SURVEY","Encuesta");
define_once("_POLLS","Encuestas");
define_once("_PCOMMENTS","Comentarios:");
define_once("_RESULTS","Resultados");
define_once("_HREADMORE","Leer m�s...");
define_once("_CURRENTLY","Actualmente hay");
define_once("_GUESTS","invitados,");
define_once("_MEMBERS","miembro(s) conectado(s).");
define_once("_YOUARELOGGED","Est�s conectado como");
define_once("_YOUHAVE","Tienes");
define_once("_PRIVATEMSG","mensaje(s) privado(s).");
define_once("_YOUAREANON","Eres un usuario an�nimo. Puedes registrarte <a href=\"modules.php?name=Your_Account&op=new_user\">aqu�</a>");
define_once("_NOTE","Nota:");
define_once("_ADMIN","Admin:");
define_once("_WERECEIVED","Hemos recibido");
define_once("_PAGESVIEWS","impresiones desde");
define_once("_TOPIC","T�pico");
define_once("_UDOWNLOADS","Descargas");
define_once("_VOTE","voto");
define_once("_VOTES","votos");
define_once("_MVIEWADMIN","Ver: S�lo Administradores");
define_once("_MVIEWUSERS","Ver: S�lo Usuarios Registrados");
define_once("_MVIEWANON","Ver: S�lo Usuarios An�nimos");
define_once("_MVIEWALL","Ver: Todos los Visitantes");
define_once("_EXPIRELESSHOUR","Caducidad: menos de una hora");
define_once("_EXPIREIN","Caduca en");
define_once("_HTTPREFERERS","HTTP Referers");
define_once("_UNLIMITED","Ilimitado");
define_once("_HOURS","Horas");
define_once("_RSSPROBLEM","Actualmente hay un problema con los titulares de este sitio");
define_once("_SELECTLANGUAGE","Seleccionar Idioma");
define_once("_SELECTGUILANG","Selecciona Idioma de la Interfaz:");
define_once("_NONE","Ninguno");
define_once("_BLOCKPROBLEM","<center>Hay un problema con este bloque.</center>");
define_once("_BLOCKPROBLEM2","<center>En este momento no existe contenido para este bloque.</center>");
define_once("_MODULENOTACTIVE","Disculpa, este M�dulo no est� Activo!");
define_once("_NOACTIVEMODULES","M�dulos Inactivos");
define_once("_FORADMINTESTS","(Para Pruebas)");
define_once("_BBFORUMS","Foros");
define_once("_ACCESSDENIED", "Acceso Denegado");
define_once("_RESTRICTEDAREA", "Est�s intentando entrar en �rea restringida.");
define_once("_MODULEUSERS", "Lo sentimos pero esta secci�n de nuestro sitio es s�lo para <i>Usuarios Registrados</i><br><br>Puedes registrarte de forma gratu�ta <a href=\"modules.php?name=Your_Account&op=new_user\">aqu�</a>, luego podr�s<br>acceder a esta secci�n sin restricciones. Gracias.<br><br>");
define_once("_MODULESADMINS", "Lo sentimos pero esta secci�n de nuestro sitio es s�lo para <i>Administradores</i><br><br>");
define_once("_HOME","Home");
define_once("_HOMEPROBLEM","Hay un gran problema aqu�: No tenemos un p�gina de Inicio!!!");
define_once("_ADDAHOME","Agregar un m�dulo en el Inicio");
define_once("_ADD","Agregar");
define_once("_HOMEPROBLEMUSER","Existe un problema en nuestro sitio. Por favor intenta m�s tarde.");
define_once("_MORENEWS","M�s en la Secci�n de Noticias");
define_once("_ALLCATEGORIES","Todas las Categor�as");
define_once("_DATESTRING","%A, %d %B a las %T");
define_once("_DATESTRING2","%A, %d %B");
define_once("_DATE","Fecha");
define_once("_HOUR","Hora");
define_once("_UMONTH","Mes");
define_once("_YEAR","A�o");
define_once("_JANUARY","Enero");
define_once("_FEBRUARY","Febrero");
define_once("_MARCH","Marzo");
define_once("_APRIL","Abril");
define_once("_MAY","Mayo");
define_once("_JUNE","Junio");
define_once("_JULY","Julio");
define_once("_AUGUST","Agosto");
define_once("_SEPTEMBER","Septiembre");
define_once("_OCTOBER","Octubre");
define_once("_NOVEMBER","Noviembre");
define_once("_DECEMBER","Diciembre");
define_once("_BWEL","Bienvenido");
define_once("_BPM","Mensajes Privados");
define_once("_BUNREAD","Sin Leer");
define_once("_BREAD","Le�dos");
define_once("_BMEMP","Membres�a");
define_once("_BLATEST","�ltimo");
define_once("_BTD","Nuevos Hoy");
define_once("_BYD","Nuevos Ayer");
define_once("_BOVER","Total");
define_once("_BVISIT","Gente en l�nea");
define_once("_BVIS","Visitantes");
define_once("_BMEM","Miembros");
define_once("_BTT","Total");
define_once("_BON","En l�nea ahora");
define_once("_BREG","Reg�strate");
define_once("_BROADCAST","Transmisi�n de Mensaje P�blico");
define_once("_BROADCASTFROM","Mensaje P�blico de");
define_once("_TURNOFFMSG","Desactivar Mensajes P�blicos");
define_once("_YES","S�");
define_once("_NO","No");
define_once("_INVISIBLEMODULES","M�dulos Invisibles");
define_once("_ACTIVEBUTNOTSEE","(Activos con nombre invisible)");
define_once("_THISISAUTOMATED","Este es un mensaje automatizado para informarle que su banner publicitario en nuestro sitio ha terminado en este momento.");
define_once("_THERESULTS","Los resultados de su campa�a publicitaria son los siguientes:");
define_once("_TOTALIMPRESSIONS","Total de Impresiones Realizadas:");
define_once("_CLICKSRECEIVED","Clicks Recibidos:");
define_once("_IMAGEURL","URL de la Imagen:");
define_once("_CLICKURL","URL del Click:");
define_once("_ALTERNATETEXT","Texto Alternativo:");
define_once("_HOPEYOULIKED","Esperamos que haya disfrutado nuestro servicio deseando tenerlo nuevamente como nuestro cliente de publicidad muy pronto.");
define_once("_THANKSUPPORT","Gracias por su Soporte");
define_once("_TEAM","Administraci�n");
define_once("_BANNERSFINNISHED","Banners Terminados");
define_once("_MODREQLINKS","Modif. Links");
define_once("_BROKENLINKS","Links Rotos");
define_once("_MODREQDOWN","Modif. Downloads");
define_once("_BROKENDOWN","Downloads Rotos");
define_once("_PAGEGENERATION","P�gina Generada en:");
define_once("_SECONDS","Segundos");
define_once("_YOUHAVEONEMSG","Tienes 1 Mensaje Privado Nuevo");
define_once("_YOUHAVE","Tienes");
define_once("_NEWPMSG","Mensajes Privados Nuevos");
define_once("_CONTRIBUTEDBY","Contribuci�n de");
define_once("_CHAT","Chat");
define_once("_REGISTERED","Registrados");
define_once("_CHATGUESTS","Invitados");
define_once("_USERSTALKINGNOW","Usuarios Chateando");
define_once("_ENTERTOCHAT","Entrar al Chat");
define_once("_CHATROOMS","Salas de Chat");
define_once("_SECURITYCODE","C�digo de Seguridad");
define_once("_TYPESECCODE","Teclea C�digo de Seguridad");
define_once("_ASSOTOPIC","T�picos Asociados");
define_once("_ADDITIONALYGRP","Adem�s este m�dulo pertenece al Grupo de Usuarios");
define_once("_YOUHAVEPOINTS","Puntos acumulados por tu participaci�n en este sitio:");
define_once("_MVIEWSUBUSERS","Ver: Usuarios Suscritos Solamente");
define_once("_MODULESSUBSCRIBER","Lo lamentamos, pero esta secci�n de nuestro sitio es para <i>Usuarios Suscritos Solamente.</i>");
define_once("_SUBHERE","Puedes suscribirte a nuestros servicios desde <a href=\"$subscription_url\">aqu�</a>");
define_once("_SUBEXPIRED","Tu Suscripci�n Expir�");
define_once("_HELLO","Hola");
define_once("_SUBSCRIPTIONAT","Este es un mensaje autom�tico para avisarte que tu suscripci�n a");
define_once("_HASEXPIRED","ha expirado ahora.");
define_once("_HOPESERVED","Esperamos haberte servido satisfactoriamente...");
define_once("_SUBRENEW","Si quieres renovar tu suscripci�n, por favor v� a:");
define_once("_YOUARE","Eres");
define_once("_SUBSCRIBER","suscriptor");
define_once("_OF","de");
define_once("_SBYEARS","a�os");
define_once("_SBYEAR","a�o");
define_once("_SBMINUTES","minutos");
define_once("_SBHOURS","horas");
define_once("_SBSECONDS","segundos");
define_once("_SBDAYS","d�as");
define_once("_SUBEXPIREIN","Tu suscripci�n expirar� en:");
define_once("_NOTSUB","No eres un suscriptor de");
define_once("_SUBFROM","Te puedes suscribir desde");
define_once("_HERE","aqu�");
define_once("_NOW","ahora!");
define_once("_ADMSUB","�Usuario Suscrito!");
define_once("_ADMNOTSUB","Usuario NO Suscrito");
define_once("_ADMSUBEXPIREIN","Subscripci�n Expira en:");
define_once("_LASTIP","IP del �ltimo Usuario:");
define_once("_BANTHIS","Bloquear este IP");
define_once("_HTMLNOTALLOWED","C�digo HTML no est� permitido. Por favor usa las funciones del editor.");
define_once("_KARMAGOOD","Karma Bueno");
define_once("_KARMALOW","Karma Regular");
define_once("_KARMABAD","Karma Malo");
define_once("_KARMADEVIL","Karma de Demonio");
define_once("_COMMENTMODERATED","Tu comentario ha sido enviado, pero debido a que has sido marcado por el administrador de este sitio como un usuario con Karma Malo, tu comentario est� sujeto a previa aprobaci�n por nuestro equipo. Por favor no reenv�es tu comentario o tu Karma podr�a bajar al siguiente nivel.<br><br>Nuestro eqipo se reserva el derecho de aprobar o borrar tu comentario a su propia discreci�n.");
define_once("_MODERATEDTITLE","Comentario Enviado - Aprobaci�n Pendiente");
define_once("_MODERATEDRETURN","Regresar a la P�gina del Art�culo");

/*****************************************************/
/* Function to translate Datestrings                 */
/*****************************************************/

function translate($phrase) {
    switch($phrase) {
	case "xdatestring":	$tmp = "%A, %B %d @ %T %Z"; break;
	case "linksdatestring":	$tmp = "%d-%b-%Y"; break;
	case "xdatestring2":	$tmp = "%A, %B %d"; break;
	default:		$tmp = "$phrase"; break;
    }
    return $tmp;
}
define_once("_HTMLNOTALLOWED2","HTML code isn't allowed here.");
define_once("_ERRORINVEMAIL","ERROR: Invalid Email");

