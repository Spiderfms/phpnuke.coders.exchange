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
define_once("_PREVIOUS","��������� ������");
define_once("_NEXT","������ ������");
define_once("_YOURNAME","������ ���");
define_once("_CATEGORY","���������");
define_once("_CATEGORIES","���������");
define_once("_LVOTES","�������");
define_once("_TOTALVOTES","������ �������:");
define_once("_LINKTITLE","������ �� ������");
define_once("_HITS","������");
define_once("_THEREARE","���");
define_once("_NOMATCHES","���� ����� ��������� �� ������ ������");
define_once("_SCOMMENTS","���������");
define_once("_DESCRIPTION","����");
define_once("_DATE","����");
define_once("_TO","��");
define_once("_ADDLINK","������ ����");
define_once("_NEW","����");
define_once("_POPULAR","�����������");
define_once("_TOPRATED","������� �������");
define_once("_RANDOM","�������");
define_once("_LINKSMAIN","�������, ������ ������");
define_once("_LINKCOMMENTS","��������� �� �������");
define_once("_ADDITIONALDET","������������ ������");
define_once("_EDITORREVIEW","������� �� ���������");
define_once("_REPORTBROKEN","������� �� ����������� ����");
define_once("_LINKSMAINCAT","������ ��������� �� ���������");
define_once("_AND","�");
define_once("_INDB","�� ������ ����");
define_once("_ADDALINK","������ ��� ����");
define_once("_INSTRUCTIONS","�������a");
define_once("_SUBMITONCE","�� ������� ��� ���� �������.");
define_once("_POSTPENDING","���� ������� ������ ������ �� �������.");
define_once("_USERANDIP","����������� ��� � IP �������� �� �������, � ����� �� ������ �� �� �� ��������������� ��������.");
define_once("_PAGETITLE","������ �� ��������");
define_once("_PAGEURL","������ �� ��������");
define_once("_YOUREMAIL","����� e-mail");
define_once("_LDESCRIPTION","����: (������� 255 �����)");
define_once("_ADDURL","���� �� ���� ������");
define_once("_LINKSNOTUSER1","�� �� ����������� ��� �������.");
define_once("_LINKSNOTUSER2","��� �� ����������� ��������, ����� �� ������� ������� �� ���� ��������.");
define_once("_LINKSNOTUSER3","�� ������ ����������� �������� � ��� � ����� ������.");
define_once("_LINKSNOTUSER4","����� ������ �� �� ����������� �� ������� �� �������� �����?");
define_once("_LINKSNOTUSER5","�� �� ������ �� �������� �������� �� ������� ����� ��������.");
define_once("_LINKSNOTUSER6","����� �������� � ������������ ���������� � �������� �� ������ ���.");
define_once("_LINKSNOTUSER7","�� �������� ���� �� ������ ���� ���������� �������.");
define_once("_LINKSNOTUSER8","<a href=\modules.php?name=Your_Account\>���������� ��</a>.");
define_once("_LINKALREADYEXT","������: URL-�� � ��� �� ������!");
define_once("_LINKNOTITLE","������: ����� �� ������� ������ �� ������ URL!");
define_once("_LINKNOURL","������: ����� �� ������� ������ �� ������ URL!");
define_once("_LINKNODESC","������: ����� �� ������� ���� �� ������ URL!");
define_once("_LINKRECEIVED","�� ������� ����� ����. �����������!");
define_once("_EMAILWHENADD","�� ������ e-mail ���� �� ���� ��������.");
define_once("_CHECKFORIT","�� �� ������� �-mail. ���� � �� �, �� �� ��������� ����� ���� �������.");
define_once("_NEWLINKS","���� �������");
define_once("_TOTALNEWLINKS","������ ���� �������");
define_once("_LASTWEEK","���������� ������");
define_once("_LAST30DAYS","���������� 30 ����");
define_once("_1WEEK","1 ������");
define_once("_2WEEKS","2 ������");
define_once("_30DAYS","30 ����");
define_once("_SHOW","�������");
define_once("_TOTALFORLAST","������ ���� ������� ��");
define_once("_DAYS","����");
define_once("_ADDEDON","�������� ��");
define_once("_RATING","�����");
define_once("_RATESITE","����� �� ���� ������");
define_once("_DETAILS","������");
define_once("_BESTRATED","������� ������� ������� - ��� �����");
define_once("_OF","��");
define_once("_TRATEDLINKS","������ ������� �������");
define_once("_TVOTESREQ","������� ������� ��������");
define_once("_SHOWTOP","������ �� ���������");
define_once("_MOSTPOPULAR","����������� - ��� �����");
define_once("_OFALL","�� ����");
define_once("_SORTLINKSBY","������� �� ��������� ��");
define_once("_SITESSORTED","�������� �� ���������� ��������� ��");
define_once("_POPULARITY","�����������");
define_once("_SELECTPAGE","������ ������");
define_once("_MAIN","������");
define_once("_NEWTODAY","���� �����");
define_once("_NEWLAST3DAYS","���� �� ���������� 3 ����");
define_once("_NEWTHISWEEK","���� ���� ������");
define_once("_CATNEWTODAY","���� ������� �� ���� ��������� �������� �������");
define_once("_CATLAST3DAYS","���� ������� �������� �� ���� ��������� �� ���������� 3 ����");
define_once("_CATTHISWEEK","���� ������� �� ���� ��������� �������� ���������� ������");
define_once("_POPULARITY1","����������� (�� ������� �� ������� ������)");
define_once("_POPULARITY2","����������� (�� ������� �� ������� ������)");
define_once("_TITLEAZ","������ (A �� �)");
define_once("_TITLEZA","������ (� �� A)");
define_once("_DATE1","���� (������� ������� ����)");
define_once("_DATE2","���� (������ ������� ����)");
define_once("_RATING1","������ (�� ������� ������, ��� �������)");
define_once("_RATING2","������ (�� ������� ������, ��� �������)");
define_once("_SEARCHRESULTS4","��������� �� ������������� ��");
define_once("_USUBCATEGORIES","������������");
define_once("_LINKS","�������");
define_once("_TRY2SEARCH","����� �� �� �����");
define_once("_INOTHERSENGINES","�� ����� �����������");
define_once("_EDITORIAL","����� �� ���������");
define_once("_LINKPROFILE","������ �� ������");
define_once("_EDITORIALBY","�������� ��");
define_once("_NOEDITORIAL","���� ����� �� ���� ������.");
define_once("_VISITTHISSITE","������ �� ��� ���");
define_once("_RATETHISSITE","�����");
define_once("_ISTHISYOURSITE","���� � ��� ���� ������?");
define_once("_ALLOWTORATE","������� � ����� ��������� �� ������ ����� ����� ������ ������!");
define_once("_LINKRATINGDET","������ �� ������� �� ������");
define_once("_OVERALLRATING","������ �����");
define_once("_TOTALOF","��");
define_once("_USER","��������");
define_once("_USERAVGRATING","�������� �����");
define_once("_NUMRATINGS","# ��� �� �����");
define_once("_EDITTHISLINK","������ �� ��� ����");
define_once("_REGISTEREDUSERS","������������ ���������");
define_once("_NUMBEROFRATINGS","��� �� �����");
define_once("_NOREGUSERSVOTES","���� ������� �� ������������ ���������");
define_once("_BREAKDOWNBYVAL","������� �� ��������");
define_once("_LTOTALVOTES","������ �������");
define_once("_LINKRATING","����� �� �������");
define_once("_HIGHRATING","�������� �����");
define_once("_LOWRATING","������� �����");
define_once("_NUMOFCOMMENTS","��� �� ���������");
define_once("_WEIGHNOTE","* ���������: ��� �� ��������� ������� ��� �� ���� ������������ � �������������� ���������");
define_once("_NOUNREGUSERSVOTES","���� ������� �� �������������� ���������");
define_once("_WEIGHOUTNOTE","* ���������: ��� �� ��������� ������� ��� �� ���� ��������� � ���������� ���������");
define_once("_NOOUTSIDEVOTES","���� ���������� �����");
define_once("_OUTSIDEVOTERS","���������� �����");
define_once("_UNREGISTEREDUSERS","�������������� ���������");
define_once("_PROMOTEYOURSITE","������� �������� �� ������ ������");
define_once("_PROMOTE01","������ �� ������������� �� ������� �� ������������ ������ ������� ����� ��� �� �� ��������. ��� �� �� ��������� �� ������ ����� (���� � �������� �� �����) �� ���� �� ��� �� �� �������� ����� �� ������� ��� �� �� ����� ������ ������. ������ �� ������� ��� �� ��������� ������:");
define_once("_TEXTLINK","���������� ����");
define_once("_PROMOTE02","���� �� �������� � �� �������� ���� ����� ������ ��������� ����:");
define_once("_HTMLCODE1","HTML ����� ��� ����� �� �� ������� �� ��� ����� � ��������:");
define_once("_THENUMBER","�����");
define_once("_IDREFER","�� HTML ����� �� �������� �� ���������������� ��� �� ����� ��� �� ������ �� $sitename .  ���� ������� ���� ��� ��� � ��������.");
define_once("_BUTTONLINK","���� - �����");
define_once("_PROMOTE03","��� �� ����� ����� ����� �� ������ ���������� ����, ������ �� ����� �� ������� ������� ����� - ����:");
define_once("_RATEIT","����� �� ���� ������!");
define_once("_HTMLCODE2","����� �� ������� ����� �:");
define_once("_REMOTEFORM","�������� �� ����� �� ������");
define_once("_PROMOTE04","��� ����� �� ��� �� �� ���������� ����� ����. ������ ��� � ������, ��� ���� ������� ���������� �� ����� �������� �� ������ ������.");
define_once("_VOTE4THISSITE","����� �� ���� ������!");
define_once("_LINKVOTE","�����!");
define_once("_HTMLCODE3","������弝� �� ��� �������� �� �� �������� �� ����������� �� �� ������ ������ ������ �������� �� �� ���� � ������� �� ���� ������� ����. ������� �������� � ��������, �� ����� �� ������ ��� ���������� �������� copy&paste �� ������ ���������. ����� � �������� ������:");
define_once("_PROMOTE05","�����������, � ����� �� �������!");
define_once("_STAFF","����� ���");
define_once("_THANKSBROKEN","����������� ��� ������� �� ������� �� ����������� �� �������������.");
define_once("_THANKSFORINFO","����������� �� ������������.");
define_once("_LOOKTOREQUEST","������ ������ ������� �� ���� ����������.");
define_once("_ONLYREGUSERSMODIFY","���� ������������ ��������� ����� �� ��������� ����������� �� ���������. �� �����, <a href=\"modules.php?name=Your_Account\">������������ �� ��� �������� ��</a>.");
define_once("_REQUESTLINKMOD","�������� ����������� �� ������");
define_once("_LINKID","������������� �� ������");
define_once("_SENDREQUEST","������� ������");
define_once("_THANKSTOTAKETIME","����������� �� ����������� ����� �� ����� �� ��������");
define_once("_LETSDECIDE","��������� �� ��������� ���� ���� �� �� ������� �� �� ��������� �� ������� ��������� �� ��������� ���������� �� �� ���� �� ���������.");
define_once("_RETURNTO","����� ���");
define_once("_RATENOTE1","�� ������� �� ������ ������ ����� �� �����.");
define_once("_RATENOTE2","������� � �� 1 - 10.");
define_once("_RATENOTE3","���� ���������. ��� ���� �������� 1 ��� ����� ����� ������� �� �� ����� �������.");
define_once("_RATENOTE4","������ �� �� ���������� <a href=\"links.php?op=TopRated\">��� ������� �� ������</a>.");
define_once("_RATENOTE5","���� �� ������ �� ������ ������, ��� �� �������� �� �����������.");
define_once("_YOUAREREGGED","�� �� ����������� �������� � �� �������.");
define_once("_FEELFREE2ADD","�������� ������ ������� �� ���� ������.");
define_once("_YOUARENOTREGGED","�� �� �� ����������� �������� ��� �� �� �������.");
define_once("_IFYOUWEREREG","��� �� ����������� ����� �� ����� ��������� �� ���� ������.");
define_once("_WEBLINKS","��� �������");
define_once("_TITLE","������");
define_once("_MODIFY","������");
define_once("_COMPLETEVOTE1","����� ���� �� ����.");
define_once("_COMPLETEVOTE2","��� �� ������ �� ��� �� ���������� $anonwaitdays ����.");
define_once("_COMPLETEVOTE3","����� �� ���� ������ ���� �����.<br>���� ������� �� �������� � ������������.");
define_once("_COMPLETEVOTE4","�� ����� �� ������ �� ����� ��� �� �� �� ������.<br>���� ������� �� �������� � ������������.");
define_once("_COMPLETEVOTE5","���� ����� - ���� ����������� ����");
define_once("_COMPLETEVOTE6","�������� � ���� ���� ���� �� IP ������ ����� $outsidewaitdays ����.");
define_once("_LINKSDATESTRING","%d %B %Y");


