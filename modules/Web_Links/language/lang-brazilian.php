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
/* Translated to Brazilian by: Luiz Gustavo Aleagi Nunes - tatau - aleagi */
/* Equipe PHP-Nuke Brasil - http://www.phpnuke.org.br                     */
/* Comments/suggestions: aleagi@terra.com.br - aleagi@phpnuke.org.br      */
/**************************************************************************/


define_once("_URL","Link");
define_once("_PREVIOUS","P�gina anterior");
define_once("_NEXT","Pr�xima p�gina");
define_once("_YOURNAME","Seu nome");
define_once("_CATEGORY","Categoria");
define_once("_CATEGORIES","Categorias");
define_once("_LVOTES","votos");
define_once("_TOTALVOTES","Total de votos:");
define_once("_LINKTITLE","T�tulo do link ");
define_once("_HITS","Cliques");
define_once("_THEREARE","H�");
define_once("_NOMATCHES","Nada encontrado para");
define_once("_SCOMMENTS","Coment�rios");
define_once("_DESCRIPTION","Descri��o");
define_once("_DATE","Data");
define_once("_TO","Para");
define_once("_ADDLINK","Adicionar link");
define_once("_NEW","Novo");
define_once("_POPULAR","Popular");
define_once("_TOPRATED","Melhor colocado");
define_once("_RANDOM","Aleat�rio");
define_once("_LINKSMAIN","�ndice de Links");
define_once("_LINKCOMMENTS","Link comentado");
define_once("_ADDITIONALDET","Detalhes adicionais");
define_once("_EDITORREVIEW","Editor de Revis�es");
define_once("_REPORTBROKEN","Reporte Links quebrados");
define_once("_LINKSMAINCAT","�ndice de Categorias de Links");
define_once("_AND","e");
define_once("_INDB","em nosso Banco de Dados");
define_once("_ADDALINK","Adicionar novo Link");
define_once("_INSTRUCTIONS","Instru��es");
define_once("_SUBMITONCE","Clique no bot�o Enviar somente uma vez. Por favor, n�o envie Links repetidos!");
define_once("_POSTPENDING","Todos os Links s�o verificados antes de serem publicados.");
define_once("_USERANDIP","S�o registrados o nome do usu�rio bem como o endere�o de IP de quem enviou o Link, ent�o, por favor n�o abuse!");
define_once("_PAGETITLE","T�tulo da p�gina");
define_once("_PAGEURL","Endere�o da p�gina");
define_once("_YOUREMAIL","Seu e-mail");
define_once("_LDESCRIPTION","Descri��o: (m�ximo de 255 caracteres)");
define_once("_ADDURL","Adicionar este Link");
define_once("_LINKSNOTUSER1","Voc� n�o � um Usu�rio cadstrado ou n�o efetuou seu login.");
define_once("_LINKSNOTUSER2","Se voc� for um Usu�rio cadastrado, por favor efetue o login. Se voc� n�o � nosso usu�rio, desculpe-nos, mas voc� n�o tem permiss�o para incluir links em nosso portal.");
define_once("_LINKSNOTUSER3","Para se tornar um usu�rio cadastrado, o processo � r�pido, f�cil e gratuito.");
define_once("_LINKSNOTUSER4","Por que restringimos algumas �rea de nosso portal somente para usu�rios cadastrados?!?");
define_once("_LINKSNOTUSER5","Porque s� assim podemos estr sempre oferecendo um conte�do de qualidade.");
define_once("_LINKSNOTUSER6","Cada item � revisado individualmente por nossa equipe.");
define_once("_LINKSNOTUSER7","E n�s desejamos lhe oferecer somente informa��es importantes.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Cadastre-se</a>");
define_once("_LINKALREADYEXT","<b>ERRO</b>: Esta URL j� existe em nosso Banco de Dados!");
define_once("_LINKNOTITLE","<b>ERRO</b>: Voc� precisa fornecer um t�tulo para seu Link!");
define_once("_LINKNOURL","<b>ERRO</b>: Voc� precisa digitar uma URL para seu Link!");
define_once("_LINKNODESC","<b>ERRO</b>: Voc� precisa descrever seu Link!");
define_once("_LINKRECEIVED","Recebemos sua contribui��o. Obrigado!");
define_once("_EMAILWHENADD","Voc� receber� um e-mail quando sua contribui��o for aprovada.");
define_once("_CHECKFORIT","Voc� n�o digitou seu endere�o de e-mail. De qualquer maneira nossa equipe ir� conferir sua emiss�o.");
define_once("_NEWLINKS","Links novos");
define_once("_TOTALNEWLINKS","Total de links novos");
define_once("_LASTWEEK","Da ultima semana");
define_once("_LAST30DAYS","Dos �ltimos 30 dias");
define_once("_1WEEK","1 semana");
define_once("_2WEEKS","2 semanas");
define_once("_30DAYS","30 dias");
define_once("_SHOW","Mostrar");
define_once("_TOTALFORLAST","Total de links novos nos �ltimos");
define_once("_DAYS","dias");
define_once("_ADDEDON","Adicionado em");
define_once("_RATING","P�dium");
define_once("_RATESITE","Avalie este Link");
define_once("_DETAILS","Detalhes");
define_once("_BESTRATED","P�dium do Melhores Links - Top");
define_once("_OF","do");
define_once("_TRATEDLINKS","Total de sites avaliados ");
define_once("_TVOTESREQ","M�nimo de votos requeridos");
define_once("_SHOWTOP","Mostrar o Top");
define_once("_MOSTPOPULAR","Os mais populares - Top");
define_once("_OFALL","de todos");
define_once("_SORTLINKSBY","Links ordenados por");
define_once("_SITESSORTED","Links atualmente ordenados por");
define_once("_POPULARITY","Popularidade");
define_once("_SELECTPAGE","Selecione a p�gina");
define_once("_MAIN","�ndice");
define_once("_NEWTODAY","Novo(s) hoje");
define_once("_NEWLAST3DAYS","Novo(s) nos �ltimos 3 dias");
define_once("_NEWTHISWEEK","Novo(s) desta semana");
define_once("_CATNEWTODAY","Novo(s) Link(s) adicionado(s) hoje nesta Categoria");
define_once("_CATLAST3DAYS","Novo(s) Link(s) adicionado(s) nos �ltimos 3 dias nesta Categoria");
define_once("_CATTHISWEEK","Novo(s) Link(s) adicionado(s) esta semana nesta Categoria");
define_once("_POPULARITY1","Popular (Mais visitados primeiro)");
define_once("_POPULARITY2","Popular (Menos visitados primeiro)");
define_once("_TITLEAZ","T�tulo (A a Z)");
define_once("_TITLEZA","T�tulo (Z a A)");
define_once("_DATE1","Data (Links antigos listados primeiro)");
define_once("_DATE2","Data (Links novos listados primeiro)");
define_once("_RATING1","Classifica��o (Da pontua��o mais baixa para mais alta)");
define_once("_RATING2","Classifica��o (Da pontua��o mais alta para mais baixa)");
define_once("_SEARCHRESULTS4","Resultado da busca por");
define_once("_USUBCATEGORIES","Sub-categorias");
define_once("_LINKS","Links");
define_once("_TRY2SEARCH","Experimente procurar");
define_once("_INOTHERSENGINES","em outros Sistemas de Busca");
define_once("_EDITORIAL","Editorial");
define_once("_LINKPROFILE","Perfil do Link");
define_once("_EDITORIALBY","Editorial por");
define_once("_NOEDITORIAL","Nenhum editorial est� atualmente dispon�vel para este site.");
define_once("_VISITTHISSITE","<b>Visite este Link</b>");
define_once("_RATETHISSITE","Classifique este Link");
define_once("_ISTHISYOURSITE","Este � o seu Link?");
define_once("_ALLOWTORATE","Permita que outros usu�rios classifiquem este Link apartir do seu site!");
define_once("_LINKRATINGDET","Classifica��o detalhada do Link");
define_once("_OVERALLRATING","Avalia��o global");
define_once("_TOTALOF","Total de");
define_once("_USER","Usu�rios");
define_once("_USERAVGRATING","A avalia��o m�dia do usu�rio");
define_once("_NUMRATINGS","No. de avalia��es");
define_once("_EDITTHISLINK","Editar este Link");
define_once("_REGISTEREDUSERS","Usu�rios cadastrados");
define_once("_NUMBEROFRATINGS","N�mero de avalia��es");
define_once("_NOREGUSERSVOTES","Nenhum usu�rio an�nimo vota");
define_once("_BREAKDOWNBYVAL","Desarranjo de avalia��es por valor");
define_once("_LTOTALVOTES","Total de votos");
define_once("_LINKRATING","Avalia��o de Links");
define_once("_HIGHRATING","Avalia��o alta");
define_once("_LOWRATING","Avalia��o baixa");
define_once("_NUMOFCOMMENTS","N�mero de coment�rios");
define_once("_WEIGHNOTE","<b>*Nota</b>: Este recurso conta para usu�rios cadastrados. Avalia��o de usu�rios an�nimos");
define_once("_NOUNREGUSERSVOTES","Nenhum usu�rio an�nimo vota");
define_once("_WEIGHOUTNOTE","<b>*Nota</a>: Este recurso pesa para usu�rios cadastrados. Fora a avalia��o dos eleitores");
define_once("_NOOUTSIDEVOTES","Nenhum voto an�nimo");
define_once("_OUTSIDEVOTERS","Votos an�nimos");
define_once("_UNREGISTEREDUSERS","Usu�rios an�nimos");
define_once("_PROMOTEYOURSITE","Promova seu Site");
define_once("_PROMOTE01","Talvez voc� possa se interessar por alguns dos nossos sistemas de 'Avalia��o de Sites' que possu�mos. Estes sistemas permitem colocar uma imagem (ou at� mesmo uma forma de avalia��o) em seu site na Web de modo que possa aumentar o n�mero de visitas que voc� recebe. Por favor selecione uma das op��es listadas abaixo:");
define_once("_TEXTLINK","Texto do Link");
define_once("_PROMOTE02","Uma maneira de lincar com a forma de avalia��o � usar um link de texto simples:");
define_once("_HTMLCODE1","O c�digo em HTML que voc� deve usar neste caso, � o seguinte:");
define_once("_THENUMBER","Um n�mero");
define_once("_IDREFER","no c�digo HTML referente ao ID do seu site $sitename no Banco de Dados. Certifique-se que este n�mero esteja presente.");
define_once("_BUTTONLINK","Bot�o do Link");
define_once("_PROMOTE03","Se voc� est� procurando algo um pouco mais sofisticado, talvez voc� queira um link com um pequeno bot�o:");
define_once("_RATEIT","Avalie este site!");
define_once("_HTMLCODE2","O c�digo fonte para o bot�o acima �:");
define_once("_REMOTEFORM","Forma de avalia��o a dist�ncia");
define_once("_PROMOTE04","Se houver algum tipo de procedimento incorreto, removeremos seu Link. Isto fica claro, pois desejamos uma forma de avalia��o remota s�ria e justa.");
define_once("_VOTE4THISSITE","Vote neste site!");
define_once("_LINKVOTE","Vote!");
define_once("_HTMLCODE3","Usando este formul�rio voc� permite que os usu�rios avaliem o conte�do da sua p�gina direto do seu site e esta avalia��o ser� armazenada aqui. O formul�rio acima est� desabilitado, mas o c�digo fonte seguinte funcionar�. Basta voc� copiar e colar este c�digo na sua home-page. O c�digo fonte � mostrado abaixo:");
define_once("_PROMOTE05","Obrigado! E boa sorte com suas avalia��es!");
define_once("_STAFF","Equipe");
define_once("_THANKSBROKEN","Obrigado por manter a integridade deste diret�rio.");
define_once("_THANKSFORINFO","Obrigado pela Informa��o.");
define_once("_LOOKTOREQUEST","Nossa equipe olhar� em breve seu pedido.");
define_once("_ONLYREGUSERSMODIFY","Somente usu�rios registrado podem sugerir modifica��es nos Links. Por favor <a href=\"modules.php?name=Your_Account\">Cadastre-se ou efetue seu login</a>.");
define_once("_REQUESTLINKMOD","Pedido para Modifica��o de Link");
define_once("_LINKID","ID do Link");
define_once("_SENDREQUEST","Enviar pedido");
define_once("_THANKSTOTAKETIME","Obrigado por avaliar este site aqui em");
define_once("_LETSDECIDE","Avalia��o de usu�rios como voc� ajudar� para que outros visitantes decidam quais links eles desejam visitar em.");
define_once("_RETURNTO","Voltar para");
define_once("_RATENOTE1","Por favor n�o vote por mais de uma vez na mesma avalia��o.");
define_once("_RATENOTE2","A escala vai de 1 - 10, sendo <b>1</b> para <b>ruim</b> e <b>10</b> para <b>excelente</b>.");
define_once("_RATENOTE3","Por favor seja objetivo ao votar, pois se todo mundo receber somente 1 ou somente 10, as avalia��es n�o ser�o �teis.");
define_once("_RATENOTE4","Voc� pode ver uma lista de <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">Top Links</a> avaliados.");
define_once("_RATENOTE5","N�o vote em voc� mesmo ou em qualquer um.");
define_once("_YOUAREREGGED","Voc� � um usu�rio cadastrado e est� conectado em.");
define_once("_FEELFREE2ADD","Sinta-se a vontade para adicionar coment�rios para este Site.");
define_once("_YOUARENOTREGGED","Voc� n�o � um usu�rio cadastrado ou n�o efetuou sue login.");
define_once("_IFYOUWEREREG","Se voc� fosse um usu�rio cadastrado poderia enviar v�rios coment�rios a este Site.");
define_once("_WEBLINKS","Links");
define_once("_TITLE","T�tulo");
define_once("_MODIFY","Modificar");
define_once("_COMPLETEVOTE1","Seu voto � apreciado.");
define_once("_COMPLETEVOTE2","Voc� j� votou neste Link no(s) �ltimo(s) $anonwaitdays dia(s).");
define_once("_COMPLETEVOTE3","Vote em um Link apenas uma vez.<br>TODOS os votos s�o logados e revistos.");
define_once("_COMPLETEVOTE4","Voc� n�o pode votar em um Link que voc� mesmo enviou!<br>TODOS os votos s�o logados e revistos.");
define_once("_COMPLETEVOTE5","Nenhuma pontua��o selecionada - nenhum voto computado!");
define_once("_COMPLETEVOTE6","� permitido apenas UM voto por endere�o de IP a cada $outsidewaitdays dia(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

