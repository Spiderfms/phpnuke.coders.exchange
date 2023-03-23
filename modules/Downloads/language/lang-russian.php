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

/**************************************************************************/
/* ���. �������, �������� ����������/Add. Russian transl.& spell checking:*/
/*         ��������� ������ / Alexander Burchak, alexburchak@ua.fm        */
/* ����/Date:                                                             */
/*         15.03.2004                                                     */
/**************************************************************************/

define_once("_URL","URL");
define_once("_PREVIOUS","���������� ��������");
define_once("_NEXT","��������� ��������");
define_once("_CATEGORY","���������");
define_once("_CATEGORIES","���������");
define_once("_LVOTES","������");
define_once("_TOTALVOTES","����� �������:");
define_once("_THEREARE","������");
define_once("_NOMATCHES","������ �� ������� �� ������ �������");
define_once("_SCOMMENTS","�����������");
define_once("_UNKNOWN","�����������");
define_once("_AUTHORNAME","��� ������");
define_once("_AUTHOREMAIL","E-mail ������");
define_once("_DOWNLOADNAME","�������� ���������");
define_once("_ADDTHISFILE","�������� ���� ����");
define_once("_INBYTES","� ������");
define_once("_FILESIZE","������ �����");
define_once("_VERSION","������");
define_once("_DESCRIPTION","��������");
define_once("_AUTHOR","�����");
define_once("_HOMEPAGE","�������� ���������");
define_once("_DOWNLOADNOW","��������� ���� ���� ������!");
define_once("_RATERESOURCE","���������� �� ������");
define_once("_FILEURL","������ �� ����");
define_once("_ADDDOWNLOAD","�������� �������");
define_once("_DOWNLOADSMAIN","������� �������� �������");
define_once("_DOWNLOADCOMMENTS","����������� � �������");
define_once("_DOWNLOADSMAINCAT","������� ��������� �������");
define_once("_ADDADOWNLOAD","�������� ����� �������");
define_once("_DSUBMITONCE","���������� ������ ������� ������ ���� ���.");
define_once("_DPOSTPENDING","��� ����� ����� ����������� �����������.");
define_once("_RESSORTED","������� ������������� ��");
define_once("_DOWNLOADSNOTUSER1","�� �� ���������������� ��� �� ����� � �������.");
define_once("_DOWNLOADSNOTUSER2","������������������ ������������ ����� ����������� ��������� ������� �� ���� �����.");
define_once("_DOWNLOADSNOTUSER3","����������� ������������ - ������� � ������ �������.");
define_once("_DOWNLOADSNOTUSER4","������ �� ������� ����������� ������������?");
define_once("_DOWNLOADSNOTUSER5","����, �� ���������� ��� ������ ����� ������,");
define_once("_DOWNLOADSNOTUSER6","������ ����� ������������� ���������� � ������� ����� ����������.");
define_once("_DOWNLOADSNOTUSER7","�� ��������, ��� ���������� ��� ������ ������ ����������.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">������������������</a>");
define_once("_DOWNLOADALREADYEXT","������: ���� URL ��� ������� � ���� ���� ������!");
define_once("_DOWNLOADNOTITLE","������: �� ������ ������� �������� ��� ������ URL!");
define_once("_DOWNLOADNOURL","������: �� ������ ������� URL ��� ������ URL!");
define_once("_DOWNLOADNODESC","������: �� ������ ������� �������� ������ URL!");
define_once("_DOWNLOADRECEIVED","�������! �� �������� ���� ����������.");
define_once("_NEWDOWNLOADS","����� �������");
define_once("_TOTALNEWDOWNLOADS","��� ����� �������");
define_once("_DTOTALFORLAST","��� ����� ������� �� ���������");
define_once("_DBESTRATED","������ ������� - ������");
define_once("_TRATEDDOWNLOADS","����� ��������� �������");
define_once("_SORTDOWNLOADSBY","����������� ������� ��");
define_once("_DCATNEWTODAY","����� ������� � ���� ���������, ����������� �������");
define_once("_DCATLAST3DAYS","����� ������� � ���� ���������, ����������� �� ��������� 3 ���");
define_once("_DCATTHISWEEK","����� ������� � ���� ���������, ����������� �� ���� ������");
define_once("_DDATE1","���� (������� ������ �������)");
define_once("_DDATE2","���� (������� ����� �������)");
define_once("_DOWNLOADS","�������");
define_once("_DOWNLOADPROFILE","������� �������");
define_once("_DOWNLOADRATINGDET","������ ������ �������");
define_once("_EDITTHISDOWNLOAD","������������� ��� �������");
define_once("_DOWNLOADRATING","������� �������");
define_once("_DOWNLOADVOTE","����������!");
define_once("_DONLYREGUSERSMODIFY","������ ������������������ ������������ ����� ������� ����� ���� ���������. ����������, <a href=\"modules.php?name=Your_Account\">����������������� ��� ������� ��� ����� ������</a>.");
define_once("_REQUESTDOWNLOADMOD","������ �� ��������� �������");
define_once("_DOWNLOADID","ID �������");
define_once("_DLETSDECIDE","���������� �� ����� ��, ��� � ��, ������������� ������� ������ ������������� ����� ��������� ���� �������.");
define_once("_DRATENOTE4","�� ������ ���������� ������ <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">������ �������</a>.");
define_once("_DATE","����");
define_once("_TO","�");
define_once("_NEW","�����");
define_once("_POPULAR","����������");
define_once("_TOPRATED","������");
define_once("_ADDITIONALDET","�������������� ������");
define_once("_EDITORREVIEW","�������� ���������");
define_once("_REPORTBROKEN","�������� � ������� ������");
define_once("_AND","�");
define_once("_INDB","� ����� ���� ������");
define_once("_INSTRUCTIONS","����������");
define_once("_USERANDIP","��� ������������ � IP ��������, ��� ��� �� ������������ �������.");
define_once("_LDESCRIPTION","��������: (�� ����� 255 ��������)");
define_once("_CHECKFORIT","�� �� ������� E-mail, �� �� �������� ���� ������ � ��������� �����.");
define_once("_LASTWEEK","��������� ������");
define_once("_LAST30DAYS","��������� 30 ����");
define_once("_1WEEK","1 ������");
define_once("_2WEEKS","2 ������");
define_once("_30DAYS","30 ����");
define_once("_SHOW","��������");
define_once("_DAYS","����");
define_once("_ADDEDON","�������� ��");
define_once("_RATING","�������");
define_once("_DETAILS","������");
define_once("_OF","");
define_once("_TVOTESREQ","����������� ����������� ������");
define_once("_SHOWTOP","�������� ������");
define_once("_MOSTPOPULAR","����� ���������� - ������");
define_once("_OFALL","�� ����");
define_once("_POPULARITY","������������");
define_once("_SELECTPAGE","��������� ��������");
define_once("_MAIN","�������");
define_once("_NEWTODAY","����� �������");
define_once("_NEWLAST3DAYS","����� �� ��������� 3 ���");
define_once("_NEWTHISWEEK","����� �� ���� ������");
define_once("_POPULARITY1","������������ (�� ������� � �������)");
define_once("_POPULARITY2","������������ (�� ������� � �������)");
define_once("_TITLEAZ","��������� (�� A �� Z)");
define_once("_TITLEZA","��������� (�� Z �� A)");
define_once("_RATING1","������ (�� ����� ������ ������ � ����� �������)");
define_once("_RATING2","������ (�� ����� ������� ������ � ����� ������)");
define_once("_SEARCHRESULTS4","��������� ������ ���");
define_once("_USUBCATEGORIES","������������");
define_once("_TRY2SEARCH","���������� ��������");
define_once("_INOTHERSENGINES","� ������ ��������� ��������");
define_once("_EDITORIAL","������ ������");
define_once("_EDITORIALBY","������ ������ ��");
define_once("_NOEDITORIAL","� ��������� ����� ��� ������ ������ �� ���� �����");
define_once("_RATETHISSITE","���������� �� ���� ������");
define_once("_ISTHISYOURSITE","��� ��� ������?");
define_once("_ALLOWTORATE","��������� ������ ������������� ���������� �� ���� � ������ Web �����!");
define_once("_OVERALLRATING","����� �������");
define_once("_TOTALOF","����� ��");
define_once("_USER","������������");
define_once("_USERAVGRATING","������� ������ ������������");
define_once("_NUMRATINGS","# ��������");
define_once("_REGISTEREDUSERS","������������������ ������������");
define_once("_NUMBEROFRATINGS","����� ���������");
define_once("_NOREGUSERSVOTES","��� ������� ������������������ �������������");
define_once("_BREAKDOWNBYVAL","������� � ��������� �� ��������");
define_once("_LTOTALVOTES","����� �������");
define_once("_HIGHRATING","���������� �������");
define_once("_LOWRATING","���������� �������");
define_once("_NUMOFCOMMENTS","����� ������������");
define_once("_WEIGHNOTE","* ����������: ������ ����� ������� ������������������� � ��������������������� ��������������");
define_once("_NOUNREGUSERSVOTES","��� ������� �������������������� �������������");
define_once("_WEIGHOUTNOTE","* ����������: ������ ����� ������� ������������������� �������������� � �������� ��������");
define_once("_NOOUTSIDEVOTES","��� ������� ������");
define_once("_OUTSIDEVOTERS","������� ������");
define_once("_UNREGISTEREDUSERS","�������������������� ������������");
define_once("_PROMOTEYOURSITE","��������� ������������ ������ �����");
define_once("_PROMOTE01","��������, �� �������� ����������� � ��������� Web ������, ������� �� ����� � ������������. ��� �������� ��� ������������� ������ (��� ���� ����� ������) �� ����� ����� ��� ����, ����� ��������� ���������� �������, ���������� ����� ��������. ����������, �������� ���� �� �����, ����������� ����:");
define_once("_TEXTLINK","��������� ������");
define_once("_PROMOTE02","���� �� �������� ��������� � ����������� ������ - ����� ������� ��������� ������:");
define_once("_HTMLCODE1","��� HTML, ������� �� ������ ������������ � ���� ������, ���������:");
define_once("_THENUMBER","�����");
define_once("_IDREFER","������ � HTML ���� �� ������������� ������ ����� � ���� ������ $sitename. ���������, ��� ��� ����� ������������.");
define_once("_BUTTONLINK","������ ������");
define_once("_PROMOTE03","���� ��� �� ���������� ������� ��������� ������, �� �� ������ ������������ ��������� ������ � �������:");
define_once("_RATEIT","������� �� ���� ����!");
define_once("_HTMLCODE2","�������� ��� ��� ������������� ������:");
define_once("_REMOTEFORM","����� ��������� ������");
define_once("_PROMOTE04","���� �� �������� ��� �������, �� ������ ���� ������. ��� ��� �������� ����� ������:");
define_once("_VOTE4THISSITE","���������� �� ���� ����");
define_once("_HTMLCODE3","������������� ���� ����� �������� ������ ������������� ������� ��� ������ �� ������� ������ ����� � ������� ����� ������� �����. ������������� ����� �������� ������ ��� �������, �� ��������� �������� ��� ����� ��������, ���� �� ���������� ��� � �������� �� �������� ������ �����. �������� ��� �������� ����:");
define_once("_PROMOTE05","�������! ����� � ����� ���������!");
define_once("_STAFF","��������");
define_once("_THANKSBROKEN","���������� ��� �� ������ � ��������� ����������� ����� ��������.");
define_once("_SECURITYBROKEN","��� ����������� ������������ ���� ��� � ����� IP ����� ����� �������� ��������.");
define_once("_THANKSFORINFO","������� �� ����������.");
define_once("_LOOKTOREQUEST","�� �������� ���� ���������� � ��������� �����.");
define_once("_SENDREQUEST","������� ������");
define_once("_THANKSTOTAKETIME","���������� ��� �� �����, ����������� �� ������ ����� ��");
define_once("_RETURNTO","��������� �");
define_once("_RATENOTE1","����������, �� ��������� �� ���� � ��� �� ������ ��������.");
define_once("_RATENOTE2","����� - 1 - 10, � 1 ����� � 10 �������.");
define_once("_RATENOTE3","����������, ������ ����������� � ����� ������, ���� ������ ������� 1 ��� 10, �� �������� ����� �� ����� �������.");
define_once("_RATENOTE5","�� ��������� �� ��� ����������� ������ ��� ������ ����������.");
define_once("_YOUAREREGGED","�� - ������������������ ������������ � �����.");
define_once("_FEELFREE2ADD","�� ����������� ��������� ����������� ������������ ����� �����.");
define_once("_YOUARENOTREGGED","�� �� ������������������ ������������ ��� �� �����.");
define_once("_IFYOUWEREREG","���� �� ������������������, �� ������ �������� ����������� �� ���� ����.");
define_once("_TITLE","��������");
define_once("_MODIFY","��������");
define_once("_COMPLETEVOTE1","��� ����� �����.");
define_once("_COMPLETEVOTE2","�� ��� ���������� �� ���� ������ $anonwaitdays ����(����) �����.");
define_once("_COMPLETEVOTE3","��������� �� ������ ������ ���� ���.<br>��� ������ �������������� � ���������������.");
define_once("_COMPLETEVOTE4","�� �� ������ ���������� �� ������, ������� �� ������������.<br>��� ������ ���������������� � �����������.");
define_once("_COMPLETEVOTE5","������ �� ������� - ����� �� ��������");
define_once("_COMPLETEVOTE6","������ ���� ����� � IP ������ �������� ������ $outsidewaitdays ���(����).");
define_once("_LINKSDATESTRING","%d/%m/%Y");


