<?php
global $sitename, $anonwaitdays, $outsidewaitdays;


/**************************************************************************/
/* PHP-NUKE: Advanced Content Management System                           */
/* ============================================                           */
/*                                                                        */
/* This is the language module with all the system messages               */
/*                                                                        */
/* If you made a translation, please sent to me (fburzi@gmail.com)    */
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
define_once("_PREVIOUS","˹�ҡ�͹");
define_once("_NEXT","˹�ҶѴ�");
define_once("_CATEGORY","�����");
define_once("_CATEGORIES","������");
define_once("_LVOTES","����ʴ��������");
define_once("_TOTALVOTES","������繷�����:");
define_once("_THEREARE","��й���շ�����");
define_once("_NOMATCHES","��辺�����ŵç������͹�");
define_once("_SCOMMENTS","�������");
define_once("_UNKNOWN","�������ö�к���");
define_once("_AUTHORNAME","������Ңͧ");
define_once("_AUTHOREMAIL","��������Ңͧ");
define_once("_DOWNLOADNAME","���������");
define_once("_ADDTHISFILE","���������");
define_once("_INBYTES","亵�");
define_once("_FILESIZE","��Ҵ");
define_once("_VERSION","���");
define_once("_DESCRIPTION","��������´");
define_once("_AUTHOR","��Ңͧ");
define_once("_HOMEPAGE","���ྨ");
define_once("_DOWNLOADNOW","��ǹ���Ŵ����ǹ��!");
define_once("_RATERESOURCE","����ṹ��ǹ���Ŵ");
define_once("_FILEURL","URL");
define_once("_ADDDOWNLOAD","������ǹ���Ŵ");
define_once("_DOWNLOADSMAIN","˹�Ҵ�ǹ���Ŵ��ѡ");
define_once("_DOWNLOADCOMMENTS","����ʹ��д�ǹ���Ŵ");
define_once("_DOWNLOADSMAINCAT","��ǹ���Ŵ");
define_once("_ADDDOWNLOAD","������ǹ���Ŵ");
define_once("_DSUBMITONCE","��ǹ���Ŵ��ͧ����ӡѹ");
define_once("_DPOSTPENDING","��ǹ���Ŵ������������ҵ�ͧ���Ѻ��õ�Ǩ�ͺ��͹");
define_once("_RESSORTED","���§���");
define_once("_DOWNLOADSNOTUSER1","�س�ѧ�������Ѥ���Ҫԡ�����ѧ���������к�");
define_once("_DOWNLOADSNOTUSER2","��Ҥس��Ѥ���Ҫԡ�س����ö������ǹ���Ŵ���纹����");
define_once("_DOWNLOADSNOTUSER3","�������Ҫԡ�����������");
define_once("_DOWNLOADSNOTUSER4","�����س�����Ѥ���Ҫԡ������ҹ?");
define_once("_DOWNLOADSNOTUSER5","�س����ö������������դس�Ҿ");
define_once("_DOWNLOADSNOTUSER6","������к��������Ѻ��õ�Ǩ�ͺ��С��蹡�ͧ�·���ҹ����դس�Ҿ");
define_once("_DOWNLOADSNOTUSER7","�ҧ�����ѧ�����ʹͼŧҹ����դس�����س");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">��Ѥ���Ҫԡ����</a>");
define_once("_DOWNLOADALREADYEXT","��ͼԴ��Ҵ  URL ���������!");
define_once("_DOWNLOADNOTITLE","��ͼԴ��Ҵ �س��ͧ�����ʹ���!");
define_once("_DOWNLOADNOURL","��ͼԴ��Ҵ �س��ͧ��� URL ����!");
define_once("_DOWNLOADNODESC","��ͼԴ��Ҵ �س��ͧ����͸Ժ�´���!");
define_once("_DOWNLOADRECEIVED","���Ѻ�����Ţͧ�س���� �ͺ�س!");
define_once("_NEWDOWNLOADS","��ǹ���Ŵ������");
define_once("_TOTALNEWDOWNLOADS","��������������");
define_once("_DTOTALFORLAST","��ǹ���Ŵ���������������ҹ��");
define_once("_DBESTRATED","����ṹ�٧�ش - Top");
define_once("_TRATEDDOWNLOADS","��ǹ���Ŵ���Ѵ�ѹ�Ѻ������");
define_once("_SORTDOWNLOADSBY","���§����");
define_once("_DCATNEWTODAY","��ǹ���Ŵ������㹡��������ѹ���");
define_once("_DCATLAST3DAYS","��ǹ���Ŵ������㹡������� 3 �ѹ��͹");
define_once("_DCATTHISWEEK","��ǹ���Ŵ������㹡������� �ҷԵ���͹");
define_once("_DDATE1","�ѹ (����ҡ�͹)");
define_once("_DDATE2","�ѹ (�����ҡ�͹)");
define_once("_DOWNLOADS","��ǹ���Ŵ");
define_once("_DOWNLOADPROFILE","�����Ŵ�ǹ���Ŵ");
define_once("_DOWNLOADRATINGDET","��������´��ṹ��ǹ���Ŵ");
define_once("_EDITTHISDOWNLOAD","��䢴�ǹ���Ŵ");
define_once("_DOWNLOADRATING","�дѺ��ṹ��ǹ���Ŵ");
define_once("_DOWNLOADVOTE","ŧ��ṹ!");
define_once("_DONLYREGUSERSMODIFY","੾����Ҫԡ��ҹ�鹷���йӡ����䢴�ǹ���Ŵ ��س�<a href=\"modules.php?name=Your_Account\">��Ѥ���Ҫԡ��͹ </a>");
define_once("_REQUESTDOWNLOADMOD","�Ӣ���䢴�ǹ���Ŵ");
define_once("_DOWNLOADID","���ʴ�ǹ���Ŵ");
define_once("_DLETSDECIDE","�����Ũҡ��Ҫԡ�蹤س�Ъ��¼�����㹡�õѴ�Թ�㹡�ô�ǹ���Ŵ");
define_once("_DRATENOTE4","�س����ö�� <a href=\"modules.php?op=modload&name=Downloads&file=index&d_op=TopRated\">��èѴ�ѹ�Ѻ</a>");
define_once("_DATE","�ѹ���");
define_once("_TO","���");
define_once("_NEW","��ǹ���Ŵ������");
define_once("_POPULAR","��ǹ���Ŵ�ʹ����");
define_once("_TOPRATED","��ǹ���Ŵ����ṹ�٧�ش ");
define_once("_ADDITIONALDET","��������´�������");
define_once("_EDITORREVIEW","�����Ũҡ����ʹ���");
define_once("_REPORTBROKEN","��§ҹ�ԧ������");
define_once("_AND","���");
define_once("_INDB","㹰ҹ�����Ź��");
define_once("_INSTRUCTIONS","���й�");
define_once("_USERANDIP","�������¡ ��� ��������ͧ IP �ж١�ѹ�֡���ͻ�ͧ�ѹ��á�зӷ��������Դ�����������");
define_once("_LDESCRIPTION","��������´: (����Թ 255 ����ѡ��)");
define_once("_CHECKFORIT","��ҹ������к� ������ ���ҧ�á���  ��Ҩзӡ�õ�Ǩ�ͺ�ԧ�����ʹ��� ������ѧ");
define_once("_LASTWEEK","��ǧ�ѻ����������");
define_once("_LAST30DAYS","��ǧ 30 �ѹ����ҹ��");
define_once("_1WEEK","1 �ѻ����");
define_once("_2WEEKS","2 �ѻ����");
define_once("_30DAYS","30 �ѹ");
define_once("_SHOW","�ʴ�");
define_once("_DAYS","�ѹ");
define_once("_ADDEDON","���������");
define_once("_RATING","��ṹ");
define_once("_DETAILS","��������´");
define_once("_OF","�ͧ");
define_once("_TVOTESREQ","(�ӹǹ��ǵ���ҧ���) ");
define_once("_SHOWTOP","�ʴ��ҡ�ӹǹ ");
define_once("_MOSTPOPULAR","������Ѻ���������ش  - Top");
define_once("_OFALL","�ͧ������");
define_once("_POPULARITY","��������");
define_once("_SELECTPAGE","���͡˹��");
define_once("_MAIN","˹���á");
define_once("_NEWTODAY","��������Ѻ�ѹ��� ");
define_once("_NEWLAST3DAYS","�����ǧ 3 �ѹ");
define_once("_NEWTHISWEEK","�����ѻ������");
define_once("_POPULARITY1","�������� (������ҡ)");
define_once("_POPULARITY2","��������(�ҡ仹���)");
define_once("_TITLEAZ","���� (A �֧ Z)");
define_once("_TITLEZA","���� (Z �֧ A)");
define_once("_RATING1","��ṹ (������ҡ)");
define_once("_RATING2","��ṹ (�ҡ仹���)");
define_once("_SEARCHRESULTS4","���Ң���������Ѻ");
define_once("_USUBCATEGORIES","��Ǵ����");
define_once("_TRY2SEARCH","����");
define_once("_INOTHERSENGINES","�����ͧ��ͤ������");
define_once("_EDITORIAL","����ʹ���");
define_once("_EDITORIALBY","�ʹ�����");
define_once("_NOEDITORIAL","����ռ���ʹ���");
define_once("_RATETHISSITE","����ṹ��纹��");
define_once("_ISTHISYOURSITE","�������������?");
define_once("_ALLOWTORATE","͹حҵ������������ṹ�ҡ��纤س!");
define_once("_OVERALLRATING","��ṹ�����");
define_once("_TOTALOF","������");
define_once("_USER","��Ҫԡ");
define_once("_USERAVGRATING","��ṹ����¢ͧ��Ҫԡ");
define_once("_NUMRATINGS","# �ͧ��ṹ");
define_once("_REGISTEREDUSERS","��Ҫԡ");
define_once("_NUMBEROFRATINGS","��ǵ(��)");
define_once("_NOREGUSERSVOTES","�������Ҫԡŧ��ṹ");
define_once("_BREAKDOWNBYVAL","��ҿ�ʴ����ŧ��ṹ");
define_once("_LTOTALVOTES","��ṹ�����");
define_once("_HIGHRATING","��ṹ�٧�ش");
define_once("_LOWRATING","��ṹ����ش");
define_once("_NUMOFCOMMENTS","�ӹǹ����ʹ���");
define_once("_WEIGHNOTE","* �����˵�: ��纹�������˹ѡ��ҧ�ѹ�����ҧ��Ҫԡ vs. ���������㹡������ṹ");
define_once("_NOUNREGUSERSVOTES","����ռ��������ŧ��ṹ");
define_once("_WEIGHOUTNOTE","* �����˵�: ��纹�������˹ѡ��ҧ�ѹ�����ҧ��Ҫԡ vs. �������ṹ�ҡ��¹͡");
define_once("_NOOUTSIDEVOTES","����ա��ŧ��ṹ�ҡ��¹͡");
define_once("_OUTSIDEVOTERS","ŧ��ṹ�ҡ��¹͡");
define_once("_UNREGISTEREDUSERS","���������");
define_once("_PROMOTEYOURSITE","��Ъ�����ѹ����纤س");
define_once("_PROMOTE01","�������Ը�㹡��������ṹ�ͧ��� ��͹حҵ���س����ٻ����纤س���������ӹǹ��ṹ ��س����͡�ҡ��ǹ��ҧ��ҧ���:");
define_once("_TEXTLINK","�ԧ���ͤ���");
define_once("_PROMOTE02","�ҧ˹�觷����ԧ��� rating form ���ԧ���ͤ���:");
define_once("_HTMLCODE1","�� HTML �س����ö��㹡óչ��ѧ���:");
define_once("_THENUMBER","�ӹǹ");
define_once("_IDREFER","� HTML �����ҧ�ԧ�֧������ʢͧ��纤س㹰ҹ�����Ţͧ $sitename �е�ͧ�ç�ѹ");
define_once("_BUTTONLINK","�����ԧ��");
define_once("_PROMOTE03","��Ҥس�ͧ�����÷��ա��ҧ�ԧ���ͤ��� �س�Ҩ��������ԧ��:");
define_once("_RATEIT","����ṹ��纹��!");
define_once("_HTMLCODE2","source code ����Ѻ�������:");
define_once("_REMOTEFORM","Ẻ������������ṹẺ Remote");
define_once("_PROMOTE04","��Ҥس⡧ �зӡ�������ԧ��س�͡");
define_once("_VOTE4THISSITE","����ṹ��纹��!");
define_once("_HTMLCODE3","��Ẻ���������͹حҵ�����Ҫԡ����ṹ��纤س�µç��Шкѹ�֡�ѹ�� �¤س�е�ͧ�Ѵ�� source code �������红ͧ�س�� source code �������ҧ��ҧ:");
define_once("_PROMOTE05","�ͺ�س! ��Т����⪤��!");
define_once("_STAFF","����ҹ");
define_once("_THANKSBROKEN","�ͺ�س�����´����к�");
define_once("_SECURITYBROKEN","����Ѻ�˵ؼŷҧ��ҹ������ʹ��ª��ͤس��� IP �ж١�ѹ�֡");
define_once("_THANKSFORINFO","�ͺ�س����Ѻ�����Ţͧ��ҹ");
define_once("_LOOKTOREQUEST","��ҨоԨ�ó�������ҧ�Ǵ����");
define_once("_SENDREQUEST","�觤Ӣ�");
define_once("_THANKSTOTAKETIME","�ͺ�س����Ѻ�������ṹ��纷����");
define_once("_RETURNTO","��Ѻ价��");
define_once("_RATENOTE1","��س���������ṹ��������ҡ���� 1 ����");
define_once("_RATENOTE2","��ṹ�����������ҧ 1 - 10 (1-��� ,10-��)");
define_once("_RATENOTE3","��س�����ṹ�����ԧ��ҷء������ṹ 1 ���� 10 �дѺ��ṹ������ջ���ª��");
define_once("_RATENOTE5","����ŧ��ṹ����ä�ǡ�ͧ�س");
define_once("_YOUAREREGGED","�س��ͧ����Ҫԡ��С��ѧ������к�");
define_once("_FEELFREE2ADD","�ʴ������Դ�����");
define_once("_YOUARENOTREGGED","�س�ѧ�������Ѥ���Ҫԡ�����ѧ�������к�");
define_once("_IFYOUWEREREG","��Ҥس��Ѥ���Ҫԡ�س����ö�觢���ʹ������纹����");
define_once("_TITLE","����");
define_once("_MODIFY","��Ѻ��ا���");
define_once("_COMPLETEVOTE1","���Ѻ���ŧ��ṹ�ͧ�س����");
define_once("_COMPLETEVOTE2","�س��ŧ��ṹ����� $anonwaitdays �ѹ����ҹ��");
define_once("_COMPLETEVOTE3","ŧ��ṹ���������");
define_once("_COMPLETEVOTE4","�������öŧ��ṹ��ԧ����س����");
define_once("_COMPLETEVOTE5","���Ѵ�ѹ�Ѻ");
define_once("_COMPLETEVOTE6","ŧ��ṹ��������ǵ�� 1 IP  ŧ��ṹ����ա $outsidewaitdays �ѹ");
define_once("_LINKSDATESTRING","%d-%b -%Y");

