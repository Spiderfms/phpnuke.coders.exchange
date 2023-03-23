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
define_once("_PREVIOUS","Faqja e Kaluar");
define_once("_NEXT","Faqja n� Vijim");
define_once("_YOURNAME","Emri Juaj");
define_once("_CATEGORY","Kategoria");
define_once("_CATEGORIES","Kategori");
define_once("_LVOTES","Vota");
define_once("_TOTALVOTES","Gjithsej Vota:");
define_once("_LINKTITLE","Titulli i Link");
define_once("_HITS","Hits");
define_once("_THEREARE","Gjenden");
define_once("_NOMATCHES","Asnj� Rezultat p�r k�rkimin tuaj");
define_once("_SCOMMENTS","Komente");
define_once("_DESCRIPTION","P�rshkrimi");
define_once("_DATE","Data");
define_once("_TO","TEK");
define_once("_ADDLINK","Shto Sit");
define_once("_NEW","I ri");
define_once("_POPULAR","Popullor");
define_once("_TOPRATED","Top");
define_once("_RANDOM","I rastit");
define_once("_LINKSMAIN","Treguesi i Links");
define_once("_LINKCOMMENTS","Komente");
define_once("_ADDITIONALDET","Holl�si");
define_once("_EDITORREVIEW","Recensimi i Editorit");
define_once("_REPORTBROKEN","Njofto Link t� Gabuar");
define_once("_LINKSMAINCAT","Treguesi i Directory");
define_once("_AND","dhe");
define_once("_INDB","n� database ton�");
define_once("_ADDALINK","Shto nj� Link t� Ri");
define_once("_INSTRUCTIONS","Instruksione");
define_once("_SUBMITONCE","Njofto vet�m nj� link p�r �do njoftim.");
define_once("_POSTPENDING","T� gjith� links kalojn� n�p�rmjet verifikimit ton�.");
define_once("_USERANDIP","Username dhe IP regjistrohen, prandaj mos abuzo me sistemin.");
define_once("_PAGETITLE","Titulli i Faqes");
define_once("_PAGEURL","URL e Faqes");
define_once("_YOUREMAIL","Email Juaj");
define_once("_LDESCRIPTION","P�rshkrimi: (255 karaktere max)");
define_once("_ADDURL","Shtoje k�t� URL");
define_once("_LINKSNOTUSER1","Nuk dukesh t� jesh nj� P�rdorues i Regjistruar, por, n.q.s. je duhet t� kryesh login.");
define_once("_LINKSNOTUSER2","N.q.s. je i regjistruar mund t� shtosh links n� sitin ton�.");
define_once("_LINKSNOTUSER3","Regjistrimi �sht� nj� operacion i thjesht� dhe i shpejt�.");
define_once("_LINKSNOTUSER4","P�rse k�rkohet regjistrimi p�r t'u futur n� disa nga sh�rbimet tona?");
define_once("_LINKSNOTUSER5","Sepse vet�m k�shtu kemi mund�si t� afrojm� nj� p�rmbajtje me cil�si m� t� lart�,");
define_once("_LINKSNOTUSER6","�do artikull rishikohet dhe aprovohet nga ekipi yn�.");
define_once("_LINKSNOTUSER7","K�rkojm� t� afrojm� vet�m informacione me vler� q� mund t'ju ndihmojn� me t� v�rtet�.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Regjistro Account-in T�nd</a>");
define_once("_LINKALREADYEXT","GABIM: Kjo URL ekziston n� Database!");
define_once("_LINKNOTITLE","GABIM: Duhet t� jap�sh nj� TITULL!");
define_once("_LINKNOURL","GABIM: Duhet t� shkruash URL!");
define_once("_LINKNODESC","GABIM: Duhet t� shkruash P�RSHKRIMIN!");
define_once("_LINKRECEIVED","E Mor�m Njoftimin Tuaj. Faleminderit!");
define_once("_EMAILWHENADD","Do t'ju arrij nj� E-mail kur t� jet� aprovuar.");
define_once("_CHECKFORIT","Nuk ke dh�n� nj� Email. Sidoqoft� shum� shpejt do t� kontrollojm� link-un tuaj.");
define_once("_NEWLINKS","Links t� Rinj");
define_once("_TOTALNEWLINKS","Gjithsej Links t� Rinj");
define_once("_LASTWEEK","Java e fundit");
define_once("_LAST30DAYS","30 Dit�t e Fundit");
define_once("_1WEEK","1 Jav�");
define_once("_2WEEKS","2 Jav�");
define_once("_30DAYS","30 Dit�");
define_once("_SHOW","Shiko");
define_once("_TOTALFORLAST","Gjithsej links t� rinj n� t� fundit");
define_once("_DAYS","dit�");
define_once("_ADDEDON","Shtuar m�");
define_once("_RATING","Vlersimi");
define_once("_RATESITE","Voto k�t� Sit");
define_once("_DETAILS","Holl�si");
define_once("_BESTRATED","Links m� t� Mir� - Top");
define_once("_OF","nga");
define_once("_TRATEDLINKS","gjithsej links t� votuar");
define_once("_TVOTESREQ","minimumi i votave t� k�rkuara");
define_once("_SHOWTOP","Shiko Top");
define_once("_MOSTPOPULAR","Popullor� - Top");
define_once("_OFALL","nga t� gjith�");
define_once("_SORTLINKSBY","Rrjeshto Links sipas");
define_once("_SITESSORTED","Sitet aktualisht t� rrjeshtuar sipas");
define_once("_POPULARITY","Popullaritetit");
define_once("_SELECTPAGE","Seleksiono Faqe");
define_once("_MAIN","Qendrore");
define_once("_NEWTODAY","E Re Sot");
define_once("_NEWLAST3DAYS","E Re 3 Dit�t e fundit");
define_once("_NEWTHISWEEK","E Re K�t� Jav�");
define_once("_CATNEWTODAY","Links t� Rinj Shtuar Sot n� k�t� Kategori");
define_once("_CATLAST3DAYS","Links t� Rinj Shtuar 3 Dit�t e fundit n� k�t� Kategori");
define_once("_CATTHISWEEK","Links t� Rinj Shtuar k�t� Jav� n� k�t� Kategori");
define_once("_POPULARITY1","Popullaritet (Nga m� me Pak tek m� me Shum� Hits)");
define_once("_POPULARITY2","Popullaritet (Nga m� me Shum� tek m� me Pak Hits)");
define_once("_TITLEAZ","Titulli (A - Z)");
define_once("_TITLEZA","Titulli (Z - A)");
define_once("_DATE1","Data (T� Vjetrit n� Fillim)");
define_once("_DATE2","Data (T� Rinjt� n� Fillim)");
define_once("_RATING1","Vlersimi (I Ul�t - I Lart�)");
define_once("_RATING2","Vlersimi (I Lart� - I Ul�t)");
define_once("_SEARCHRESULTS4","Rezultatet e K�rkimit t�");
define_once("_USUBCATEGORIES","N�n-Kategori");
define_once("_LINKS","Lidhje");
define_once("_TRY2SEARCH","Provo t� k�rkosh");
define_once("_INOTHERSENGINES","n� Motor� t� tjer� K�rkimi");
define_once("_EDITORIAL","Editorial");
define_once("_LINKPROFILE","Profili i Link");
define_once("_EDITORIALBY","Editoriali i");
define_once("_NOEDITORIAL","Asnj� editorial n� dispozicion aktualisht p�r k�t� sit.");
define_once("_VISITTHISSITE","Vizito k�t� Sit");
define_once("_RATETHISSITE","Voto k�t� Sit");
define_once("_ISTHISYOURSITE","�sht� ky Burimi Yt?");
define_once("_ALLOWTORATE","Jepu mund�sin� p�rdoruesve t� tjer� t'a votojn� direkt nga Faqet e tua Web!");
define_once("_LINKRATINGDET","Holl�si Vlersimi i Sitit");
define_once("_OVERALLRATING","Vlersimi Global");
define_once("_TOTALOF","Totali i");
define_once("_USER","P�rdoruesve");
define_once("_USERAVGRATING","Vlersimi Mesatar i P�rdoruesve");
define_once("_NUMRATINGS","# Vlersimesh");
define_once("_EDITTHISLINK","Modifiko k�t� Link");
define_once("_REGISTEREDUSERS","P�rdorues t� Regjistruar");
define_once("_NUMBEROFRATINGS","Numri i Vlersimeve");
define_once("_NOREGUSERSVOTES","N� Votash nga P�rdorues t� Regjistruar");
define_once("_BREAKDOWNBYVAL","Analiza e Vlersimeve sipas Vler�s");
define_once("_LTOTALVOTES","gjithsej vota");
define_once("_LINKRATING","Vlersimi i Links");
define_once("_HIGHRATING","M� i Madh");
define_once("_LOWRATING","M� i Vog�l");
define_once("_NUMOFCOMMENTS","Numri i Komenteve");
define_once("_WEIGHNOTE","* Sh�nim: Ky sit vlerson n� menyr� jo t� nj�jt� Votat e P�rdoruesve t� Regjistruar me ato t� Anonim�ve");
define_once("_NOUNREGUSERSVOTES","Asnj� Vot� nga Anonim�t");
define_once("_WEIGHOUTNOTE","* Sh�nim: Ky sit vlerson n� menyr� jo t� nj�jt� Votat e P�rdoruesve t� Regjistruar me ato t� Votuesve t� Jasht�m");
define_once("_NOOUTSIDEVOTES","Asnj� Vot� e Jashtme");
define_once("_OUTSIDEVOTERS","Votues t� Jasht�m");
define_once("_UNREGISTEREDUSERS","P�rdorues t� Pa Regjistruar");
define_once("_PROMOTEYOURSITE","Reklamo Sitin T�nd");
define_once("_PROMOTE01","N.q.s.d�shiron t� reklamosh me efikasitet Sitit t�nd, sigurisht do t� jesh i interesuar p�r nj�r�n nga metodat tona t� shumta t� votimit n� distanc� q� t� japim n� dispozicion. K�to metoda n� praktik� u japin mund�sin�, duke vendosur nj� figur� (apo nj� formular votimi) n� sitin t�nd, p�rdoruesve t� t� votojn� drejt� p�r s� drejti nga aty duke rritur k�shtu numrin e votave t� marra e si rrjedhim vizibilitetin n� directory ton� me shtimin relativ t� klikimeve t� marra. Zgjidh midis nj�r�s prej metodave t� ilustruara m� posht�:");
define_once("_TEXTLINK","Link Tekti");
define_once("_PROMOTE02","Nj� nga m�nyrat p�r t� link-uar formularin e votimit �sht� me an� t� nj� link-u t� thjesht� teksti:");
define_once("_HTMLCODE1","Kodi HTML q� duhet p�rdorur n� k�t� rast �sht� si n� vazhdim:");
define_once("_THENUMBER","Numri");
define_once("_IDREFER","n� kodin HTML identifikuesi i sitit tuaj n� database e $sitename . Ki kujdes q� ky numur t� ekzistoj� dhe t� jet� korrekt.");
define_once("_BUTTONLINK","Buton");
define_once("_PROMOTE03","N.q.s. d�shiron pak m�shum� se nj� link teksti t� thjesht�, mund t� zgjedh�sh vendosjen e nj� butoni t� vog�l:");
define_once("_RATEIT","Voto k�t� Sit!");
define_once("_HTMLCODE2","Kodi relativ �sht�:");
define_once("_REMOTEFORM","Formular Votimi n� Distanc�");
define_once("_PROMOTE04","Abuzimet ndaj k�tij sistemi sjellin heqjen e lidhjeve nga database yn�. Kie parasysh. Ja si do t� duket formulari i votimit n� distanc�.");
define_once("_VOTE4THISSITE","Voto p�r k�t� Sit!");
define_once("_LINKVOTE","Voto!");
define_once("_HTMLCODE3","Duke p�rdorur k�t� formular u jepet mund�sia p�rdoruesve t� japin nj� vlersim direkt nga siti i tyre, vlersim q� regjistrohet nga ne. Formulari i m�posht�m �sht� i disaktivuar, por kodi n� vazhdim funksionon si� duhet duke prer� dhe ngjitur n� faqet personale k�t� kod:");
define_once("_PROMOTE05","Faleminderit! dhe pa� fat!");
define_once("_STAFF","Ekipi");
define_once("_THANKSBROKEN","Faleminderit p�r ndihm�n e dh�n� n� mbajtjen e integritetit t� k�saj directory.");
define_once("_THANKSFORINFO","Faleminderit p�r informacionin.");
define_once("_LOOKTOREQUEST","Do ta shqyrtojm� s� shpejti k�rkes�n tuaj.");
define_once("_ONLYREGUSERSMODIFY","Vet�m P�rdoruesit e Regjistruar mund t� propozojn� ndryshime p�r Downloads.  <a href=\"modules.php?name=Your_Account\">Regjistrim/Login</a>.");
define_once("_REQUESTLINKMOD","K�rkes� P�r Modifikim Lidhje");
define_once("_LINKID","ID e Lidhjes");
define_once("_SENDREQUEST","D�rgoje K�rkes�n");
define_once("_THANKSTOTAKETIME","Faleminderit q� harxhuat pak nga koha juaj p�r t� votuar nj� sit k�tu tek");
define_once("_LETSDECIDE","L'Input da te fornito pu&ograve; aiutare gli altri visitatori a decidere pi&ugrave; facilmente su quali link cliccare.");
define_once("_RETURNTO","Kthehu tek");
define_once("_RATENOTE1","Mos voto p�r t� nj�jtin burim m� shum� se nj� her�, faleminderit.");
define_once("_RATENOTE2","Shkalla �sht� nga 1 - 10, ku 1 sinjifikon nuk b�n nj� lek dhe 10 sinjifikon i shk�lqyer.");
define_once("_RATENOTE3","Mundohu t� jesh sa m� objektiv gjat� votimit.");
define_once("_RATENOTE4","Mund t� shoh�sh list�n e <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">Siteve Top</a>.");
define_once("_RATENOTE5","Mos voto vet� ti p�r sitin t�nd apo p�r sitet e konkurrent�ve t� tu t� drejt� p�r drejt�, faleminderit.");
define_once("_YOUAREREGGED","Je nj� P�rdorues i Regjistruar dhe i njohur me korrektsi nga sistemi.");
define_once("_FEELFREE2ADD","Shto komentet q� d�shiron n� k�t� sit.");
define_once("_YOUARENOTREGGED","Nuk je i Regjistruar ose nuk je identifikuar nga sistemi.");
define_once("_IFYOUWEREREG","Mbasi t� regjistrohesh mund t� d�rgosh sa komente t� duash n� k�t� sit.");
define_once("_WEBLINKS","Lidhje Web");
define_once("_TITLE","Titulli");
define_once("_MODIFY","Modifiko");
define_once("_COMPLETEVOTE1","Vota juaj �sht� e mir�pritur.");
define_once("_COMPLETEVOTE2","Ke votuar nj�her� p�r k�t� argument n� $anonwaitdays dit�(t) e shkuara.");
define_once("_COMPLETEVOTE3","Voto p�r nj� argument vet�m nj� her�.<br>T� gjitha votat regjistrohen dhe valutohen.");
define_once("_COMPLETEVOTE4","Nuk mund t� votosh nj� link t� shtuar nga vet� ti.<br>T� gjitha votat regjistrohen dhe valutohen.");
define_once("_COMPLETEVOTE5","Asnj� valutim i seleksionuar - Asnj� vot� e shprehur");
define_once("_COMPLETEVOTE6","Vet�m nj� vot� p�r adres� IP lejohet �do $outsidewaitdays dit�.");
define_once("_LINKSDATESTRING","%d-%b-%Y");


