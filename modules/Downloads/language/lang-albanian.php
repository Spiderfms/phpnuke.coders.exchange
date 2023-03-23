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
define_once("_PREVIOUS","Faqja e Kaluar");
define_once("_NEXT","Faqja n� Vijim");
define_once("_CATEGORY","Kategoria");
define_once("_CATEGORIES","Kategori");
define_once("_LVOTES","Vota");
define_once("_TOTALVOTES","Gjithsej Vota:");
define_once("_THEREARE","Ndodhen");
define_once("_NOMATCHES","Asnj� Rezultat p�r k�rkimin tuaj");
define_once("_SCOMMENTS","Komente");
define_once("_UNKNOWN","I/E Panjohur");
define_once("_AUTHORNAME","Emri Autorit");
define_once("_AUTHOREMAIL","Email i Autorit");
define_once("_DOWNLOADNAME","Emri i Programit");
define_once("_ADDTHISFILE","Shtoje");
define_once("_INBYTES","n� bytes");
define_once("_FILESIZE","Dimensioni i File");
define_once("_VERSION","Versioni");
define_once("_DESCRIPTION","P�rshkrimi");
define_once("_AUTHOR","Autori");
define_once("_HOMEPAGE","Home");
define_once("_DOWNLOADNOW","Shkarkoje k�t� file!");
define_once("_RATERESOURCE","Votoje");
define_once("_FILEURL","Lidhja e File");
define_once("_ADDDOWNLOAD","Shto File");
define_once("_DOWNLOADSMAIN","Treguesi i Downloads");
define_once("_DOWNLOADCOMMENTS","Komente");
define_once("_DOWNLOADSMAINCAT","Treguesi i Kategorive t� Downloads");
define_once("_ADDADOWNLOAD","Shto nj� File t� Ri");
define_once("_DSUBMITONCE","Shto vet�m nj� download t� vet�m p�r aksion.");
define_once("_DPOSTPENDING","T� gjith� downloads e shtuar do t� kontrollohen nga ne.");
define_once("_RESSORTED","Rezerva t� rrjeshtuara aktualisht p�r");
define_once("_DOWNLOADSNOTUSER1","Nuk je i regjistruar ose nuk je identifikuar nga sistemi.");
define_once("_DOWNLOADSNOTUSER2","Mbasi t� jesh regjistruar mund t� shtosh downloads n� k�t� sit.");
define_once("_DOWNLOADSNOTUSER3","T� b�hesh an�tar �sht� e thjesht�, e shpejt� dhe falas.");
define_once("_DOWNLOADSNOTUSER4","P�rse ju k�rkojm� regjistrimin p�r t� patur hyrje n� disa sh�rbime?");
define_once("_DOWNLOADSNOTUSER5","Vet�m k�shtu mund t� garantojm� nj� kualitet m� t� lart� t� p�rmbajtjes,");
define_once("_DOWNLOADSNOTUSER6","�do shtim i ri verifikohet me kujdes dhe, n�se korrispondon me kriteret tan�, aprovohet nga staffi yn�.");
define_once("_DOWNLOADSNOTUSER7","K�rkojm� t'ju afrojm� vet�m informacione t� v�rteta dhe t� dobishme.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Regjistrohu</a>");
define_once("_DOWNLOADALREADYEXT","GABIM: Kjo URL ekziston n� Database ton�!");
define_once("_DOWNLOADNOTITLE","GABIM: Duhet t� shkruash TITULLIN!");
define_once("_DOWNLOADNOURL","GABIM: Duhet t� shkruash URL!");
define_once("_DOWNLOADNODESC","GABIM: Duhet t� shkruash nj� P�RSHKRIM!");
define_once("_DOWNLOADRECEIVED","E mor�m njoftimin tuaj. Faleminderit!");
define_once("_NEWDOWNLOADS","T� rinj");
define_once("_TOTALNEWDOWNLOADS","Downloads t� Rinj Gjithsej");
define_once("_DTOTALFORLAST","Gjithsej downloads t� rinj n� t� fundit");
define_once("_DBESTRATED","Top");
define_once("_TRATEDDOWNLOADS","gjithsej downloads t� votuar");
define_once("_SORTDOWNLOADSBY","Rrjeshto sipas");
define_once("_DCATNEWTODAY","Downloads t� Rinj Shtuar Sot n� k�t� Kategori");
define_once("_DCATLAST3DAYS","Downloads t� Rinj Shtuar n� 3 Dit�t e Fundit n� k�t� Kategori");
define_once("_DCATTHISWEEK","Downloads t� Rinj Shtuar Jav�n e Fundit n� k�t� Kategori");
define_once("_DDATE1","Data (P�rpara t� Vjetrit)");
define_once("_DDATE2","Data (P�rpara t� Rinjt�)");
define_once("_DOWNLOADS","downloads");
define_once("_DOWNLOADPROFILE","Profili");
define_once("_DOWNLOADRATINGDET","Holl�si mbi Votat");
define_once("_EDITTHISDOWNLOAD","Modifiko");
define_once("_DOWNLOADRATING","Vota");
define_once("_DOWNLOADVOTE","Voto!");
define_once("_DONLYREGUSERSMODIFY","Vet�m an�tar�t mund t� propozojn� ndryshime n� downloads. Ju lutem <a href=\"modules.php?name=Your_Account\">regjistrohuni ose identifikohuni</a>.");
define_once("_REQUESTDOWNLOADMOD","K�rkesa p�r Modifikim Download");
define_once("_DOWNLOADID","ID e Download");
define_once("_DLETSDECIDE","Input i P�rdoruesve mund t� ndihmoj� vizituesit e tjer� p�r t� zgjedhur me leht�si file m� t� mir� p�r t'a shkarkuar.");
define_once("_DRATENOTE4","Mund t� shikosh list�n e <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">Top Downloads</a>.");
define_once("_DATE","Data");
define_once("_TO","P�R");
define_once("_NEW","I RI");
define_once("_POPULAR","Popullor");
define_once("_TOPRATED","Top");
define_once("_ADDITIONALDET","Holl�si");
define_once("_EDITORREVIEW","Recensim i Editorit");
define_once("_REPORTBROKEN","Njofto Link t� Gabuar");
define_once("_AND","dhe");
define_once("_INDB","n� database ton�");
define_once("_INSTRUCTIONS","Instruksione");
define_once("_USERANDIP","Username dhe IP regjistrohen, prandaj mos abuzo nga sistemi.");
define_once("_LDESCRIPTION","P�rshkrimi: (255 karaktere max)");
define_once("_CHECKFORIT","Nuk ke shkruar nj� Email. Sidoqoft� do t'a kontrollojm� brenda pak koh�sh link-un tuaj.");
define_once("_LASTWEEK","Java e Fundit");
define_once("_LAST30DAYS","30 Dit�t e Fundit");
define_once("_1WEEK","1 Jav�");
define_once("_2WEEKS","2 Jav�");
define_once("_30DAYS","30 Dit�");
define_once("_SHOW","Shiko");
define_once("_DAYS","dit�");
define_once("_ADDEDON","Shtuar m�");
define_once("_RATING","Vlersimi");
define_once("_DETAILS","Holl�si");
define_once("_OF","nga");
define_once("_TVOTESREQ","minimumi i votave t� k�rkuara");
define_once("_SHOWTOP","Shiko Top");
define_once("_MOSTPOPULAR","Popullor� - Top");
define_once("_OFALL","nga t� gjith�");
define_once("_POPULARITY","Popullaritet");
define_once("_SELECTPAGE","Seleksiono Faqe");
define_once("_MAIN","Qendrore");
define_once("_NEWTODAY","E Re p�r Sot");
define_once("_NEWLAST3DAYS","E Re 3 dit�t e Fundit");
define_once("_NEWTHISWEEK","E Re K�t� Jav�");
define_once("_POPULARITY1","Popullaritet (Nga Hits M� t� Pakt� tek M� t� Shumt� )");
define_once("_POPULARITY2","Popullaritet (Nga Hits M� t� Shumt� tek M� t� Pakt�)");
define_once("_TITLEAZ","Titulli (A - Z)");
define_once("_TITLEZA","Titulli (Z - A)");
define_once("_RATING1","Vlersimi (I Ul�t - I Lart�)");
define_once("_RATING2","Vlersimi (I Lart� - I Ul�t)");
define_once("_SEARCHRESULTS4","Rezultatet e K�rkimit p�r");
define_once("_USUBCATEGORIES","N�n-Kategori");
define_once("_TRY2SEARCH","Provo t� k�rkosh");
define_once("_INOTHERSENGINES","n� Motor� K�rkimi t� tjer�");
define_once("_EDITORIAL","Editorial");
define_once("_EDITORIALBY","Editorial i");
define_once("_NOEDITORIAL","Asnj� editorial aktualisht n� dispozicion p�r k�t� sit.");
define_once("_RATETHISSITE","Voto k�t� Sit");
define_once("_ISTHISYOURSITE","�sht� kjo Rezerva juaj?");
define_once("_ALLOWTORATE","Jepi mund�si p�rdoruesve t� tjer� t'a votojn� direkt nga Faqet e tua Web!");
define_once("_OVERALLRATING","Vlersimi Global");
define_once("_TOTALOF","Totali i");
define_once("_USER","P�rdorues");
define_once("_USERAVGRATING","Vlersimi Mesatar i P�rdoruesve");
define_once("_NUMRATINGS","# Vlersimesh");
define_once("_REGISTEREDUSERS","P�rdorues t� Regjistruar");
define_once("_NUMBEROFRATINGS","Numri i Vlersimeve");
define_once("_NOREGUSERSVOTES","N� Votash nga P�rdorues t� Regjistruar");
define_once("_BREAKDOWNBYVAL","Analiza e Vlersimeve sipas Vler�s");
define_once("_LTOTALVOTES","totali i votave");
define_once("_HIGHRATING","M� e Madhe");
define_once("_LOWRATING","M� e Vog�l");
define_once("_NUMOFCOMMENTS","Numri i Komenteve");
define_once("_WEIGHNOTE","* Sh�nim: Ky sit krahason Votat e P�rdoruesve t� Regjistruar me ato t� Anonim�ve");
define_once("_NOUNREGUSERSVOTES","Asnj� Vot� nga Anonim�t");
define_once("_WEIGHOUTNOTE","* Sh�nim: Ky sit krahason Votat e P�rdoruesve t� Regjistruar me ato t� Votuesve t� Jasht�m");
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
define_once("_HTMLCODE3","Duke p�rdorur k�t� formular u jepet mund�sia p�rdoruesve t� japin nj� vlersim direkt nga siti i tyre, vlersim q� regjistrohet nga ne. Formulari i m�posht�m �sht� i disaktivuar, por kodi n� vazhdim funksionon si� duhet duke prer� dhe ngjitur n� faqet personale k�t� kod:");
define_once("_PROMOTE05","Faleminderit! dhe pa� fat!");
define_once("_STAFF","Ekipi");
define_once("_THANKSBROKEN","Faleminderit p�r ndihm�n e dh�n� n� mbajtjen e integritetit t� k�saj directory.");
define_once("_SECURITYBROKEN","P�r arsye sigurie username dhe adresa IP ka mund�si t� regjistrohen p�rkoh�sisht.");
define_once("_THANKSFORINFO","Faleminderit p�r informacionin.");
define_once("_LOOKTOREQUEST","Do ta shqyrtojm� s� shpejti k�rkes�n tuaj.");
define_once("_SENDREQUEST","D�rgoje K�rkes�n");
define_once("_THANKSTOTAKETIME","Faleminderit q� harxhuat pak nga koha juaj p�r t� votuar nj� sit k�tu tek");
define_once("_RETURNTO","Kthehu tek");
define_once("_RATENOTE1","Mos voto p�r t� nj�jtin burim m� shum� se nj� her�, faleminderit.");
define_once("_RATENOTE2","Shkalla �sht� nga 1 - 10, ku 1 sinjifikon nuk b�n nj� lek dhe 10 sinjifikon i shk�lqyer.");
define_once("_RATENOTE3","Mundohu t� jesh sa m� objektiv gjat� votimit.");
define_once("_RATENOTE5","Mos voto vet� ti p�r sitin t�nd apo p�r sitet e konkurrent�ve t� tu t� drejt� p�r drejt�, faleminderit.");
define_once("_YOUAREREGGED","Je nj� P�rdorues i Regjistruar dhe i njohur me korrektsi nga sistemi.");
define_once("_FEELFREE2ADD","Shto komentet q� d�shiron n� k�t� sit.");
define_once("_YOUARENOTREGGED","Nuk je i Regjistruar ose nuk je identifikuar nga sistemi.");
define_once("_IFYOUWEREREG","Mbasi t� regjistrohesh mund t� d�rgosh sa komente t� duash n� k�t� sit.");
define_once("_TITLE","Titulli");
define_once("_MODIFY","Modifiko");
define_once("_COMPLETEVOTE1","Vota juaj �sht� e mir�pritur.");
define_once("_COMPLETEVOTE2","Ke votuar nj�her� p�r k�t� argument n� $anonwaitdays dit�(t) e shkuara.");
define_once("_COMPLETEVOTE3","Voto p�r nj� argument vet�m nj� her�.<br>T� gjitha votat regjistrohen dhe valutohen.");
define_once("_COMPLETEVOTE4","Nuk mund t� votosh nj� link t� shtuar nga vet� ti.<br>T� gjitha votat regjistrohen dhe valutohen.");
define_once("_COMPLETEVOTE5","Asnj� valutim i seleksionuar - Asnj� vot� e shprehur");
define_once("_COMPLETEVOTE6","Vet�m nj� vot� p�r adres� IP lejohet �do $outsidewaitdays dit�.");
define_once("_LINKSDATESTRING","%d-%b-%Y");


