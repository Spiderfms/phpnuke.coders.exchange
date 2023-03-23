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
/* Translated to Brazilian by: Luiz Gustavo Aleagi Nunes - tatau - aleagi */
/* Equipe PHP-Nuke Brasil - http://www.phpnuke.org.br                     */
/* Comments/suggestions: aleagi@terra.com.br - aleagi@phpnuke.org.br      */
/**************************************************************************/

define_once("_URL","Link");
define_once("_PREVIOUS","P�gina anterior");
define_once("_NEXT","Pr�xima p�gina");
define_once("_CATEGORY","Categoria");
define_once("_CATEGORIES","Categorias");
define_once("_LVOTES","votos");
define_once("_TOTALVOTES","Total de Votos:");
define_once("_THEREARE","H�");
define_once("_NOMATCHES","Sem resultados para");
define_once("_SCOMMENTS","Coment�rios");
define_once("_UNKNOWN","Desconhecido");
define_once("_DOWNLOADS","Downloads");
define_once("_AUTHORNAME","Nome do Autor");
define_once("_AUTHOREMAIL","e-mail do Autor");
define_once("_DOWNLOADNAME","Nome do Arquivo");
define_once("_ADDTHISFILE","Adicionar este arquivo");
define_once("_INBYTES","em bytes");
define_once("_FILESIZE","Tamanho");
define_once("_VERSION","Vers�o");
define_once("_DESCRIPTION","Descri��o");
define_once("_AUTHOR","Autor");
define_once("_HOMEPAGE","Homepage");
define_once("_DOWNLOADNOW","Baixe este arquivo agora!");
define_once("_RATERESOURCE","Taxa do Recurso");
define_once("_FILEURL","Link do Arquivo");
define_once("_ADDDOWNLOAD","Adicionar Download");
define_once("_DOWNLOADSMAIN","�ndice Downloads");
define_once("_DOWNLOADCOMMENTS","Coment�rios sobre este Download");
define_once("_DOWNLOADSMAINCAT","�ndice de Categorias para Download");
define_once("_ADDADOWNLOAD","Adicionar um novo arquivo para Download");
define_once("_DSUBMITONCE","Envie um arquivo novo somente um vez.");
define_once("_DPOSTPENDING","Todos os Downloads s�o verificados.");
define_once("_RESSORTED","Recursos atualmente ordenados por");
define_once("_DOWNLOADSNOTUSER1","Voc� n�o � um Usu�rio Registrado ou n�o efetuou seu login.");
define_once("_DOWNLOADSNOTUSER2","Se voc� for um Usu�rio Registrado, por favor efetue o login. Se voc� n�o � nosso usu�rio, desculpe-nos, mas voc� n�o tem permiss�o para enviar arquivos para Download em nosso Site.");
define_once("_DOWNLOADSNOTUSER3","Para se tornar um usu�rio registrado o processo � r�pido, f�cil e gratuito.");
define_once("_DOWNLOADSNOTUSER4","Por que restringimos algumas �rea de nosso Site somente para Usu�rios Registrados?");
define_once("_DOWNLOADSNOTUSER5","Porque s� assim podemos lhe oferecer um conte�do com qualidade,");
define_once("_DOWNLOADSNOTUSER6","pois cada item � revisado individualmente por nossa equipe.");
define_once("_DOWNLOADSNOTUSER7","E n�s desejamos lhe oferecer somente informa��es importantes.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Registre-se</a>");
define_once("_DOWNLOADALREADYEXT","<b>ERRO</b>: Este Link j� existe no Banco de Dados!");
define_once("_DOWNLOADNOTITLE","<b>ERRO</b>: Voc� precisa digitar um t�tulo para seu Download!");
define_once("_DOWNLOADNOURL","<b>ERRO</b>: Voc� precisa digitar um endere�o para seu Download!");
define_once("_DOWNLOADNODESC","<b>ERRO</b>: Voc� precisa digitar uma descri��o para seu Download!");
define_once("_DOWNLOADRECEIVED","Recebemos o envio do seu arquivo. Obrigado!");
define_once("_NEWDOWNLOADS","Novos Downloads");
define_once("_TOTALNEWDOWNLOADS","Total de novos Downloads");
define_once("_DTOTALFORLAST","Total de novos Downloads enviados por �ltimo");
define_once("_DBESTRATED","Top Downloads: os mais baixados!");
define_once("_TRATEDDOWNLOADS","total de downloads taxados");
define_once("_SORTDOWNLOADSBY","Tipo de Download");
define_once("_DCATNEWTODAY","Novos Downloads nesta categoria adicionados hoje");
define_once("_DCATLAST3DAYS","Novos Downloads nesta categoria adicionados nos �ltimos 3 dias");
define_once("_DCATTHISWEEK","Novos Downloads nesta categoria adicionados esta semana");
define_once("_DDATE1","Data (Downloads antigos listados primeiro)");
define_once("_DDATE2","Data (Downloads ovos listados primeiro)");
define_once("_DOWNLOADS","Downloads");
define_once("_DOWNLOADPROFILE","Perfil do Download");
define_once("_DOWNLOADRATINGDET","Detalhes das Taxas de Download");
define_once("_EDITTHISDOWNLOAD","Editar este Download");
define_once("_DOWNLOADRATING","Taxando Download");
define_once("_DOWNLOADVOTE","Vote!");
define_once("_DONLYREGUSERSMODIFY","Apenas usu�rios registrados podem sugerir modifica��es nos downloads. Por favor, <a href=\"modules.php?name=Your_Account\">Cadastre-se ou efetue o login</a>.");
define_once("_REQUESTDOWNLOADMOD","Pedido para modifica��o de Download");
define_once("_DOWNLOADID","ID do Download");
define_once("_DLETSDECIDE","Recomenda��o de usu�rios como voc� ajudar� outros visitantes a fazer um download de determinado arquivo, ent�o clique aqui.");
define_once("_DRATENOTE4","Voc� pode ver uma lista dos <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">Arquivos mais votados</a>.");
define_once("_DATE","Data");
define_once("_TO","Para");
define_once("_NEW","Novo");
define_once("_POPULAR","Popular");
define_once("_TOPRATED","Melhor colocado");
define_once("_ADDITIONALDET","Detalhes adicionais");
define_once("_EDITORREVIEW","Editor da Revis�o");
define_once("_REPORTBROKEN","Reporte Links Inv�lidos");
define_once("_AND","e");
define_once("_INDB","em nosso Banco de Dados");
define_once("_INSTRUCTIONS","Instru��es");
define_once("_USERANDIP","S�o registrados: o nome do Usu�rio bem como o IP de quem enviou o Link, ent�o, por favor n�o abuse!");
define_once("_LDESCRIPTION","Descri��o: (m�ximo de 255 caracteres)");
define_once("_CHECKFORIT","Voc� n�o digitou seu e-mail. De qualquer maneira nossa equipe ir� conferir o seu Link");
define_once("_LASTWEEK","Da �ltima semana");
define_once("_LAST30DAYS","Dos �ltimos 30 dias");
define_once("_1WEEK","1 Semana");
define_once("_2WEEKS","2 Semanas");
define_once("_30DAYS","30 Dias");
define_once("_SHOW","Mostrar");
define_once("_DAYS","dias");
define_once("_ADDEDON","Adicionado em");
define_once("_RATING","P�dium");
define_once("_DETAILS","Detalhes");
define_once("_OF","do");
define_once("_TVOTESREQ","m�nimo de votos requeridos");
define_once("_SHOWTOP","Mostrar Top");
define_once("_MOSTPOPULAR","Os Mais Populares - Top");
define_once("_OFALL","de todos");
define_once("_POPULARITY","Popularidade");
define_once("_SELECTPAGE","P�gina Selecionado");
define_once("_MAIN","�ndice");
define_once("_NEWTODAY","Novo de Hoje");
define_once("_NEWLAST3DAYS","Novo dos �ltimos 3 dias");
define_once("_NEWTHISWEEK","Novo desta Semana");
define_once("_POPULARITY1","Popular (Mais Visitados Primeiro)");
define_once("_POPULARITY2","Popular (Mais Visitados por �ltimos)");
define_once("_TITLEAZ","T�tulo (A a Z)");
define_once("_TITLEZA","T�tulo (Z a A)");
define_once("_RATING1","Classifica��o (Da pontua��o mais baixa para mais alta)");
define_once("_RATING2","Classifica��o (Da pontua��o mais alta para mais baixa)");
define_once("_SEARCHRESULTS4","Resultado da busca por");
define_once("_USUBCATEGORIES","Sub-Categorias");
define_once("_TRY2SEARCH","Experimente Procurar");
define_once("_INOTHERSENGINES","em outros sistemas de busca");
define_once("_EDITORIAL","Editorial");
define_once("_EDITORIALBY","Editorial por");
define_once("_NOEDITORIAL","Nenhum editorial dispon�vel para este site.");
define_once("_RATETHISSITE","Vote neste Recurso");
define_once("_ISTHISYOURSITE","Este � o seu Recurso?");
define_once("_ALLOWTORATE","Permita que os outros Usu�rios o classifiquem apartir do seu site!");
define_once("_OVERALLRATING","Avalia��o Global");
define_once("_TOTALOF","Total de");
define_once("_USER","Usu�rios");
define_once("_USERAVGRATING","A avalia��o m�dia do Usu�rio");
define_once("_NUMRATINGS","No. de Avalia��es");
define_once("_REGISTEREDUSERS","Usu�rios Registrados");
define_once("_NUMBEROFRATINGS","N�mero de avalia��es");
define_once("_NOREGUSERSVOTES","Nenhum usu�rio an�nimo vota");
define_once("_BREAKDOWNBYVAL","Desarranjo de Avalia��es por valor");
define_once("_LTOTALVOTES","Total de votos");
define_once("_HIGHRATING","Avalia��o alta");
define_once("_LOWRATING","Avalia��o baixa");
define_once("_NUMOFCOMMENTS","N�mero de Coment�rios");
define_once("_WEIGHNOTE","<b>*Nota</b>: Este recurso conta para Usu�rios Registrados. Avalia��o de usu�rio an�nimos");
define_once("_NOUNREGUSERSVOTES","Nenhum usu�rio an�nimo vota");
define_once("_WEIGHOUTNOTE","<b>*Nota</b>: Este recurso pesa para usu�rios registrados. Fora a avalia��o dos eleitores");
define_once("_NOOUTSIDEVOTES","Nenhum voto An�nimo");
define_once("_OUTSIDEVOTERS","Votos An�nimos");
define_once("_UNREGISTEREDUSERS","Usu�rios An�nimos");
define_once("_PROMOTEYOURSITE","Promova seu Site");
define_once("_PROMOTE01","Talvez voc� possa se interessar por alguns dos nossos sistemas de 'Avalia��o de Sites' que possu�mos. Estes sistemas permitem colocar uma imagem (ou at� mesmo uma forma de avalia��o) em seu site na Web de modo que possa aumentar o n�mero de visitar que voc� recebe. Por favor selecione uma das op��es listada abaixo:");
define_once("_TEXTLINK","Texto do Link");
define_once("_PROMOTE02","Uma maneira de lincar a forma de avalia��o � usar um Link de texto simples:");
define_once("_HTMLCODE1","O c�digo em HTML que voc� deveria usar neste caso, � o seguinte:");
define_once("_THENUMBER","Um n�mero");
define_once("_IDREFER","em HTML referente ao n�mero de indentifica��o do seu site que no banco de dados do $sitename. Esteja seguro que este n�mero esteja presente.");
define_once("_BUTTONLINK","Bot�o do Link");
define_once("_PROMOTE03","Se voc� est� procurando um pouco mais que Link de texto simples, talvez voc� queira um Link com bot�o pequeno:");
define_once("_RATEIT","Avalie Este Site!");
define_once("_HTMLCODE2","O c�digo fonte para o bot�o acima �:");
define_once("_REMOTEFORM","Forma de avalia��o a dist�ncia");
define_once("_PROMOTE04","N�o tente nos enganar. Se comprovarmos altera��es nos resultados seremos obrigados a remover seu Link. N�s levamos a s�rio nossas avalia��es!");
define_once("_VOTE4THISSITE","Vote neste Site!");
define_once("_HTMLCODE3","Usado desta forma, permite que os usu�rios avaliem o conte�do da sua p�gina direto do seu site e esta avalia��o ser� armazenada aqui. A forma acima � inv�lida, mas o c�digo fonte seguinte funciona basta que voc� copie e cole na sua home-page. O c�digo fonte � mostrado abaixo:");
define_once("_PROMOTE05","Obrigado! E boa sorte com suas avalia��es!");
define_once("_STAFF","Equipe");
define_once("_THANKSBROKEN","Obrigado por manter a integridade deste diret�rio.");
define_once("_SECURITYBROKEN","Por raz�es de seguran��o seu Nome e Endere�o de IP ser�o gravados temporariamente.");
define_once("_THANKSFORINFO","Obrigado pela Informa��o.");
define_once("_LOOKTOREQUEST","Nossa equipe avaliar� seu pedido em breve.");
define_once("_SENDREQUEST","Enviar Pedido");
define_once("_THANKSTOTAKETIME","Obrigado por colaborar conosco!");
define_once("_RETURNTO","Voltar para");
define_once("_RATENOTE1","Por favor n�o vote por mais de uma vez na mesma avalia��o.");
define_once("_RATENOTE2","A escala vai de 1 - 10, sendo 1 para pobre e 10 para excelente.");
define_once("_RATENOTE3","Por favor seja objetivo no seu voto, pois se todo mundo receber somente 1 ou somente 10, as avalia��es n�o ser�o �teis.");
define_once("_RATENOTE5","N�o vote em voc� mesmo ou em qualquer um.");
define_once("_YOUAREREGGED","Voc� � um usu�rio registrado e est� conectado em.");
define_once("_FEELFREE2ADD","Sinta-se a vontade para adicionar coment�rios a este site.");
define_once("_YOUARENOTREGGED","Voc� n�o � um usu�rio registrado ou n�o efetuou sue login.");
define_once("_IFYOUWEREREG","Se voc� fosse um usu�rio registrado poderia enviar v�rios coment�rios a este site.");
define_once("_TITLE","T�tulo");
define_once("_MODIFY","Modificar");
define_once("_COMPLETEVOTE1","Seu voto � bastante importante!");
define_once("_COMPLETEVOTE2","Parece que voc� j� votou neste recurso no(s) �ltimo(s) $anonwaitdays dia(s).");
define_once("_COMPLETEVOTE3","Vote em um recurso apenas UMA VEZ.<br>Todos os votos s�o logados e revistos.");
define_once("_COMPLETEVOTE4","Voc� n�o pode votar em um Link que voc� mesmo enviou!.<br>Todos os votos s�o logados e revistos.");
define_once("_COMPLETEVOTE5","Voc� n�o escolheu uma classifica��o - n�o computei seu voto!");
define_once("_COMPLETEVOTE6","Apenas um voto por endere�o de IP � permitido a cada $outsidewaitdays dia(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

