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
define_once("_PREVIOUS","P�xina anterior");
define_once("_NEXT","P�xina seguinte");
define_once("_YOURNAME","O seu nome");
define_once("_CATEGORY","Categor�a");
define_once("_CATEGORIES","Categor�as");
define_once("_LVOTES","Votos");
define_once("_TOTALVOTES","Votos Totales:");
define_once("_LINKTITLE","T�tulo do Enlace");
define_once("_HITS","Hits");
define_once("_THEREARE","Hai");
define_once("_NOMATCHES","Non hai rexistros para a s�a consulta");
define_once("_SCOMMENTS","Comentarios");
define_once("_DESCRIPTION","Descripci�n");
define_once("_SUBMITONCE","Enviar un �nico enlace de cada vez");
define_once("_POSTPENDING","T�do-los enlaces enviados ser�n verificados.");
define_once("_CHECKFORIT","Non escribiu un E-Mail. De t�da-las maneiras, revisaremos o seu enlace pronto.");
define_once("_TOTALFORLAST","N�mero total de novos enlaces para os �ltimos");
define_once("_BESTRATED","Enlaces mellor valorados - Top");
define_once("_CATNEWTODAY","Novos enlaces engadidos a esta categor�a hoxe");
define_once("_CATLAST3DAYS","Novos enlaces engadidos a esta categor�a nos �ltimos 3 d�as");
define_once("_CATTHISWEEK","Novos enlaces engadidos a esta categor�a nesta semana");
define_once("_DATE1","Fecha (primeiro os enlaces m�is antigos)");
define_once("_DATE2","Fecha (primeiro os enlaces m�is novos)");
define_once("_PROMOTE02","Unha maneira de liga-lo formulario de evaluaci�n � por este simple texto:");
define_once("_PROMOTE03","Se quere m�is que un simple texto, pode utilizar un pequeno bot�n como:");
define_once("_PROMOTE04","Se fai trampas nisto, quitaremos o seu enlace. Isto � como aparece o formulario de valoraci�n.");
define_once("_ONLYREGUSERSMODIFY","Somentes os usuarios rexistrados poden propor modificaci�ns. Por favor, <a href=\"modules.php?name=Your_Account\">Rex�strese ou Con�ctese</a>.");
define_once("_LETSDECIDE","A s�a informaci�n permitir� a outros visitantes decidir mellor sobre que enlaces facer clic.");
define_once("_RATENOTE4","Pode ver unha lista dos <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">recursos m�is valorados</a>.");
define_once("_DATE","Fecha");
define_once("_TO","Para");
define_once("_ADDLINK","Engadir enlace");
define_once("_NEW","Novo");
define_once("_POPULAR","Popular");
define_once("_TOPRATED","Mellores valorados");
define_once("_RANDOM","Aleatorio");
define_once("_LINKSMAIN","�ndice");
define_once("_LINKCOMMENTS","Comentarios do enlace");
define_once("_ADDITIONALDET","Detalles adicionales");
define_once("_EDITORREVIEW","Rese�a do editor");
define_once("_REPORTBROKEN","Informar dun enlace roto");
define_once("_LINKSMAINCAT","Principales Categor�as de Enlaces");
define_once("_AND","e");
define_once("_INDB","na nosa base de datos");
define_once("_ADDALINK","Engadir Novo Enlace");
define_once("_INSTRUCTIONS","Instrucci�ns");
define_once("_USERANDIP","O nome de usuario e a IP ser�n rexistrados, as� que por favor non abuse do sistema.");
define_once("_PAGETITLE","T�tulo da P�xina");
define_once("_PAGEURL","P�xina da URL");
define_once("_YOUREMAIL","O seu E-Mail");
define_once("_LDESCRIPTION","Descripci�n: (255 caracteres m�x.)");
define_once("_ADDURL","Engadir esta URL");
define_once("_LINKSNOTUSER1","Vostede non � un usuario rexistrado ou non se conectou.");
define_once("_LINKSNOTUSER2","Se estivera rexistrado poder�a engadir enlaces a este sitio web.");
define_once("_LINKSNOTUSER3","Ser un usuario rexistrado � r�pido e f�cil.");
define_once("_LINKSNOTUSER4","�Por qu� se require rexistro para acceder a algunhas funci�ns?");
define_once("_LINKSNOTUSER5","S� lle ofrecemos o contido de maior calidade,");
define_once("_LINKSNOTUSER6","cada artigo � visto e aprobado individualmente polo noso equipo.");
define_once("_LINKSNOTUSER7","Esperamos ofrecerlle s� informaci�n de valor.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Rexistrarse</a>");
define_once("_LINKALREADYEXT","ERROR: �Esta URL xa est� listada na Base de Datos!");
define_once("_LINKNOTITLE","ERROR: �Necesita escribir un T�tulo para este Enlace!");
define_once("_LINKNOURL","ERROR: �Necesita escribir unha URL para este Enlace!");
define_once("_LINKNODESC","ERROR: �Necesita escribir unha Descripci�n para este Enlace!");
define_once("_LINKRECEIVED","Recib�mo-los datos do enlace que enviou. �Gracias!");
define_once("_EMAILWHENADD","Recibir� un E-Mail cando o enlace sexa aprobado.");
define_once("_NEWLINKS","Novos enlaces");
define_once("_TOTALNEWLINKS","Total Novos Enlaces");
define_once("_LASTWEEK","�ltima Semana");
define_once("_LAST30DAYS","�ltimos 30 d�as");
define_once("_1WEEK","1 Semana");
define_once("_2WEEKS","2 Semanas");
define_once("_30DAYS","30 D�as");
define_once("_SHOW","Ver");
define_once("_DAYS","d�as");
define_once("_ADDEDON","Engadido o");
define_once("_RATING","Valoraci�n");
define_once("_RATESITE","Valore este Sitio");
define_once("_DETAILS","Detalles");
define_once("_OF","de");
define_once("_TRATEDLINKS","total enlaces Valorados");
define_once("_TVOTESREQ","m�nimo de votos necesarios");
define_once("_SHOWTOP","Mostrar Top");
define_once("_MOSTPOPULAR","M�is Popular - Top");
define_once("_OFALL","de todo");
define_once("_SORTLINKSBY","Ordear enlaces por");
define_once("_SITESSORTED","Sitios clasificados por");
define_once("_POPULARITY","Popularidade");
define_once("_SELECTPAGE","Seleccionar P�xina");
define_once("_MAIN","Principal");
define_once("_NEWTODAY","Novo Hoxe");
define_once("_NEWLAST3DAYS","Novo nos �ltimos 3 d�as");
define_once("_NEWTHISWEEK","Novo esta semana");
define_once("_POPULARITY1","Popularidade (de menos a m�is hits)");
define_once("_POPULARITY2","Popularidade (de m�is a menos hits)");
define_once("_TITLEAZ","T�tulo (A - Z)");
define_once("_TITLEZA","T�tulo (Z - A)");
define_once("_RATING1","Valoraci�n (de menor a maior)");
define_once("_RATING2","Valoraci�n (de maior a menor)");
define_once("_SEARCHRESULTS4","Buscar resultados por");
define_once("_USUBCATEGORIES","Sub-Categor�as");
define_once("_LINKS","Enlaces");
define_once("_TRY2SEARCH","Intente buscar");
define_once("_INOTHERSENGINES","noutros Motores de B�squeda");
define_once("_EDITORIAL","Editorial");
define_once("_LINKPROFILE","Perfil do enlace");
define_once("_EDITORIALBY","Editorial por");
define_once("_NOEDITORIAL","A editorial non est� actualmente dispo�ible neste sitio web.");
define_once("_VISITTHISSITE","Visitar este sitio web");
define_once("_RATETHISSITE","Valorar este sitio web");
define_once("_ISTHISYOURSITE","�� este o seu recurso?");
define_once("_ALLOWTORATE","Permita que os usuarios o valoren desde o seu sitio Web!");
define_once("_LINKRATINGDET","detalle de valoraci�n de enlaces");
define_once("_OVERALLRATING","Valoraci�n Xeral");
define_once("_TOTALOF","Total de");
define_once("_USER","Usuario");
define_once("_USERAVGRATING","Valoraci�n promedio dos usuarios");
define_once("_NUMRATINGS","Num. de valoraci�ns");
define_once("_EDITTHISLINK","Editar Enlace");
define_once("_REGISTEREDUSERS","Usuarios rexistrados");
define_once("_NUMBEROFRATINGS","N�mero de valoraci�ns");
define_once("_NOREGUSERSVOTES","Non hai votos de usuarios rexistrados");
define_once("_BREAKDOWNBYVAL","Histograma por valoraci�n");
define_once("_LTOTALVOTES","votos totales");
define_once("_LINKRATING","Enlaces valorados");
define_once("_HIGHRATING","Alta valoraci�n");
define_once("_LOWRATING","Baixa valoraci�n");
define_once("_NUMOFCOMMENTS","N�mero de comentarios");
define_once("_WEIGHNOTE","* Nota: Este sitio diferencia os votos dos usuarios rexistrados dos non rexistrados");
define_once("_NOUNREGUSERSVOTES","Non hai votos de non rexistrados");
define_once("_WEIGHOUTNOTE","** Nota: Este sitio diferencia os votos dos usuarios rexistrados dos dem�is");
define_once("_NOOUTSIDEVOTES","Votos de usuarios");
define_once("_OUTSIDEVOTERS","Votos de an�nimos");
define_once("_UNREGISTEREDUSERS","Usuarios non rexistrados");
define_once("_PROMOTEYOURSITE","Promove-lo seu sitio web");
define_once("_PROMOTE01","Tal vez lle interesa unha das opci�ns que temos para a 'Valoraci�n de outros sitios'. �stas perm�tenlle por unha imaxe (ou un formulario de votaci�n) no seu sitio Web para incrementa-los seus votos. Por favor escolla unha destas opci�ns:");
define_once("_TEXTLINK","Texto do enlace");
define_once("_HTMLCODE1","O c�digo HTML que pode usar neste caso, � o seguinte:");
define_once("_THENUMBER","O N�mero");
define_once("_IDREFER","no c�digo HTML referencia o seu ID de sitio na Base de Datos de $sitename. Verifique que este n�mero est� presente.");
define_once("_BUTTONLINK","Bot�n de Enlace");
define_once("_RATEIT","Valore este sitio");
define_once("_HTMLCODE2","O c�digo fuente para o bot�n anterior �:");
define_once("_REMOTEFORM","Formulario de valoraci�n remota");
define_once("_VOTE4THISSITE","Votar por este sitio");
define_once("_LINKVOTE","Votar");
define_once("_HTMLCODE3","Usando este formulario permitir� �s usuarios valora-lo seu sitio directamente desde a s�a p�xina e ser� grabada aqu�. O formulario anterior est� desconectado, pero o seguinte c�digo traballar� se o copia e pega na s�a p�xina. O c�digo � o seguinte:");
define_once("_PROMOTE05","�Gracias!, e boa sorte coa s�a valoraci�n.");
define_once("_STAFF","Plantilla");
define_once("_THANKSBROKEN","Gracias por axudar a mante-la integridade deste directorio.");
define_once("_THANKSFORINFO","Gracias pola informaci�n.");
define_once("_LOOKTOREQUEST","Analizaremos a s�a petici�n pronto.");
define_once("_REQUESTLINKMOD","Pedir modifiaci�n de Enlace");
define_once("_LINKID","ID do Enlace");
define_once("_SENDREQUEST","Enviar Petici�n");
define_once("_THANKSTOTAKETIME","Gracias polo seu tempo na evaluaci�n deste sitio en");
define_once("_RETURNTO","Voltar a");
define_once("_RATENOTE1","Por favor non vote � mesmo enlace m�is dunha vez");
define_once("_RATENOTE2","A escala vai de 1 a 10, sendo 1 Pobre e 10 Excelente.");
define_once("_RATENOTE3","Sexa obxetivo no seu voto, se se recibe sempre 1 ou 10, a valoraci�n non ser� �til.");
define_once("_RATENOTE5","Non vote polo seu propio recurso ou o do seu competidor.");
define_once("_YOUAREREGGED","Vostede � un usuario rexistrado e est� conectado.");
define_once("_FEELFREE2ADD","S�ntase libre de engadir un comentario sobre este sitio.");
define_once("_YOUARENOTREGGED","Vostede non � un usuario rexistrado ou non se conectou.");
define_once("_IFYOUWEREREG","Se vostede estivera rexistrado poder�a ter publicado comentarios neste sitio web.");
define_once("_WEBLINKS","Enlaces");
define_once("_TITLE","T�tulo");
define_once("_MODIFY","Modificar");
define_once("_COMPLETEVOTE1","O seu voto � tido en conta.");
define_once("_COMPLETEVOTE2","Xa votou por este recurso nos �ltimo(s) $anonwaitdays d�a(s).");
define_once("_COMPLETEVOTE3","Vote por un recurso s� unha vez.<br>T�do-los votos son revisados.");
define_once("_COMPLETEVOTE4","Non pode votar por un enlace que vostede enviou.<br>T�do-los votos son revisados.");
define_once("_COMPLETEVOTE5","Se non hai ratio seleccionado, os votos non ser�n contados");
define_once("_COMPLETEVOTE6","S� un voto permitido por direci�n IP cada $outsidewaitdays d�a(s).");
define_once("_LINKSDATESTRING","%d-%m-%Y");

