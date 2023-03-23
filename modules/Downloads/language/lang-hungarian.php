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
define_once("_PREVIOUS","El�z� oldal");
define_once("_NEXT","K�vetkez� oldal");
define_once("_CATEGORY","Kateg�ria");
define_once("_CATEGORIES","kateg�ria");
define_once("_LVOTES","szavazat");
define_once("_TOTALVOTES","�sszes szavazat:");
define_once("_THEREARE","Jelenleg");
define_once("_NOMATCHES","A keres�s nem eredm�nyezett tal�latot");
define_once("_SCOMMENTS","Hozz�sz�l�sok");
define_once("_UNKNOWN","Ismeretlen");
define_once("_DOWNLOADS","Downloads");
define_once("_AUTHORNAME","Szerz� neve");
define_once("_AUTHOREMAIL","Szerz� e-mail c�me");
define_once("_DOWNLOADNAME","Program neve");
define_once("_ADDTHISFILE","F�jl felv�tele");
define_once("_INBYTES","b�jtokban");
define_once("_FILESIZE","M�ret");
define_once("_VERSION","Verzi�");
define_once("_DESCRIPTION","Le�r�s");
define_once("_AUTHOR","Szerz�");
define_once("_HOMEPAGE","Honlap");
define_once("_DOWNLOADNOW","T�ltsd le most!");
define_once("_RATERESOURCE","Oszt�lyoz�s");
define_once("_FILEURL","F�jl linkje");
define_once("_ADDDOWNLOAD","Let�lt�s hozz�ad�sa");
define_once("_DOWNLOADSMAIN","Let�lt�sek");
define_once("_DOWNLOADCOMMENTS","Megjegyz�sek");
define_once("_DOWNLOADSMAINCAT","Let�lt�sek - f� kateg�ri�k");
define_once("_ADDADOWNLOAD","�j let�lt�s hozz�ad�sa");
define_once("_DSUBMITONCE","Egy let�lt�st csak egyszer k�ldj el!");
define_once("_DPOSTPENDING","Az elk�ld�tt let�lt�sek j�v�hagy�sra v�rnak.");
define_once("_RESSORTED","Sorbarendez�s:");
define_once("_DOWNLOADSNOTUSER1","Nem vagy regisztr�lt tagunk, vagy nem l�pt�l be!");
define_once("_DOWNLOADSNOTUSER2","Miut�n regisztr�lod magad, te is k�ldhetsz be linkeket.");
define_once("_DOWNLOADSNOTUSER3","A regisztr�ci� gyors �s egyszer� folyamat.");
define_once("_DOWNLOADSNOTUSER4","Mi�rt k�r�nk regisztr�ci�t egyes szolg�ltat�saink el�r�s�hez?");
define_once("_DOWNLOADSNOTUSER5","Hogy min�s�gi �s �rt�kes tartalmat ny�jthassunk nektek, ");
define_once("_DOWNLOADSNOTUSER6","minden linket szem�lyesen ellen�rz�nk.");
define_once("_DOWNLOADSNOTUSER7","Rem�lj�k, hogy j�nak tal�lod szolg�ltat�sainkat.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Regisztr�lj!</a>");
define_once("_DOWNLOADALREADYEXT","HIBA: adatb�zisunk m�r tartalmazza ezt a linket!");
define_once("_DOWNLOADNOTITLE","HIBA: nem adtad meg a link nev�t!");
define_once("_DOWNLOADNOURL","HIBA: nem adtad meg a linket!");
define_once("_DOWNLOADNODESC","HIBA: nem adtad meg a link le�r�s�t!");
define_once("_DOWNLOADRECEIVED","Megkaptuk az �ltalad aj�nlott let�lt�s adatait. K�sz�nj�k!");
define_once("_NEWDOWNLOADS","�j let�lt�sek");
define_once("_TOTALNEWDOWNLOADS","�j let�lt�s �sszesen");
define_once("_DTOTALFORLAST","�j let�lt�s az elm�lt");
define_once("_DBESTRATED","Legjobbra oszt�lyozott let�lt�sek");
define_once("_TRATEDDOWNLOADS","oszt�lyozott let�lt�s");
define_once("_SORTDOWNLOADSBY","Let�lt�sek sorbarendez�se:");
define_once("_DCATNEWTODAY","A ma hozz�adott let�lt�sek ebben a kateg�ri�ban");
define_once("_DCATLAST3DAYS","Az elm�lt 3 napban hozz�adott let�lt�sek ebben a kateg�ri�ban");
define_once("_DCATTHISWEEK","Az elm�lt h�ten hozz�adott let�lt�sek ebben a kateg�ri�ban");
define_once("_DDATE1","D�tum (fel�l a r�gebbi let�lt�sek)");
define_once("_DDATE2","D�tum (fel�l a legfrissebb let�lt�sek)");
define_once("_DOWNLOADPROFILE","Let�lt�s profilja");
define_once("_DOWNLOADRATINGDET","Oszt�lyoz�s r�szletez�se");
define_once("_EDITTHISDOWNLOAD","Let�lt�s szerkeszt�se");
define_once("_DOWNLOADRATING","Let�lt�s oszt�lyoz�sa");
define_once("_DOWNLOADVOTE","Szavazz!");
define_once("_REQUESTDOWNLOADMOD","Let�lt�s v�ltoztat�s�nak k�relme");
define_once("_DOWNLOADID","Let�lt�s azonos�t�ja");
define_once("_DLETSDECIDE","A visszajelz�sed seg�t m�soknak eld�nteni, mely f�jlokat �rdemes let�lteni.");
define_once("_DRATENOTE4","N�zd meg a legjobbra oszt�lyozott <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">Top let�lt�sek list�j�t</a>.");
define_once("_DATE","D�tum");
define_once("_TO","C�mzett");
define_once("_NEW","Leg�jabb");
define_once("_POPULAR","Legn�pszer�bb");
define_once("_TOPRATED","Legjobbra oszt�lyozott");
define_once("_ADDITIONALDET","Egy�b r�szletek");
define_once("_EDITORREVIEW","Szerkeszt�i v�lem�ny");
define_once("_REPORTBROKEN","T�r�tt link bejelent�se");
define_once("_AND","�s");
define_once("_INDB","tal�lhat� az adatb�zisban");
define_once("_INSTRUCTIONS","�tmutat�");
define_once("_USERANDIP","A felhaszn�l�n�v �s az IP c�m feljegyz�sre ker�l, k�rj�k, ne �lj vissza a rendszerrel.");
define_once("_LDESCRIPTION","Le�r�s: (max. 255 karakter)");
define_once("_CHECKFORIT","Nem adt�l meg e-mail c�met. Hamarosan ellen�rizz�k a linket, �s beker�l az adatb�zisba.");
define_once("_LASTWEEK","M�lt h�ten");
define_once("_LAST30DAYS","M�lt h�napban");
define_once("_1WEEK","1 h�t");
define_once("_2WEEKS","2 h�t");
define_once("_30DAYS","30 nap");
define_once("_SHOW","Megtekint�s");
define_once("_DAYS","napban");
define_once("_ADDEDON","Felv�tel napja");
define_once("_RATING","oszt�lyzat");
define_once("_DETAILS","R�szletek");
define_once("_OF","-");
define_once("_TVOTESREQ","minim�lisan sz�ks�ges szavazatok");
define_once("_SHOWTOP","Legn�zettebb");
define_once("_MOSTPOPULAR","Legkedveltebb");
define_once("_OFALL","az �sszesb�l");
define_once("_POPULARITY","N�pszer�s�g");
define_once("_SELECTPAGE","V�lassz oldalt");
define_once("_MAIN","F�oldal");
define_once("_NEWTODAY","Mai linkek");
define_once("_NEWLAST3DAYS","Az elm�lt h�rom nap linkjei");
define_once("_NEWTHISWEEK","Az elm�lt h�t linkjei");
define_once("_POPULARITY1","N�pszer�s�g (n�vekv� sorrend)");
define_once("_POPULARITY2","N�pszer�s�g (cs�kken� sorrend)");
define_once("_TITLEAZ","C�m (A-Z)");
define_once("_TITLEZA","C�m (Z-A)");
define_once("_RATING1","Oszt�lyzatok (n�vekv� sorrend)");
define_once("_RATING2","Oszt�lyzatok (cs�kken� sorrend)");
define_once("_SEARCHRESULTS4","Keres�s:");
define_once("_USUBCATEGORIES","Alkateg�ri�k");
define_once("_TRY2SEARCH","Keres�s");
define_once("_INOTHERSENGINES","m�s keres�kkel");
define_once("_EDITORIAL","Szerkeszt�i v�lem�ny");
define_once("_EDITORIALBY","Szerkeszt�:");
define_once("_NOEDITORIAL","Err�l a weboldalr�l m�g nincs szerkeszt�i v�lem�ny.");
define_once("_RATETHISSITE","Oszt�lyozd ezt a weboldalt");
define_once("_ISTHISYOURSITE","Te k�ldted be ezt a linket?");
define_once("_ALLOWTORATE","Tedd lehet�v�, hogy m�sok is oszt�lyozhass�k a te saj�t oldaladr�l!");
define_once("_OVERALLRATING","�tlag");
define_once("_TOTALOF","�sszesen");
define_once("_USER","tag");
define_once("_USERAVGRATING","Tagok �tlagos oszt�lyzata");
define_once("_NUMRATINGS","Oszt�lyzatok sz�ma");
define_once("_REGISTEREDUSERS","Regisztr�lt tagok");
define_once("_NUMBEROFRATINGS","Oszt�lyzatok sz�ma");
define_once("_NOREGUSERSVOTES","Regisztr�lt tag m�g nem oszt�lyozta");
define_once("_BREAKDOWNBYVAL","Oszt�lyzatok eloszl�sa");
define_once("_LTOTALVOTES","szavazat");
define_once("_HIGHRATING","Legmagasabb oszt�lyzat");
define_once("_LOWRATING","Legalacsonyabb oszt�lyzat");
define_once("_NUMOFCOMMENTS","Hozz�sz�l�sok sz�ma");
define_once("_WEIGHNOTE","* Megjegyz�s: a regisztr�lt tagok oszt�lyzata t�bbet nyom, mint a l�togat�k�");
define_once("_NOUNREGUSERSVOTES","Regisztr�latlan l�togat� m�g nem oszt�lyozta");
define_once("_WEIGHOUTNOTE","* Megjegyz�s: a regisztr�lt tagok oszt�lyzata t�bbet nyom, mint a m�s weboldalakon szavaz�k�");
define_once("_NOOUTSIDEVOTES","M�s weboldalakon m�g nem oszt�lyozt�k");
define_once("_OUTSIDEVOTERS","Szavazatok m�s weboldalakr�l");
define_once("_UNREGISTEREDUSERS","Regisztr�latlan l�togat�k");
define_once("_PROMOTEYOURSITE","N�pszer�s�tsd a weboldalad");
define_once("_PROMOTE01","Tal�n �rdekel valamelyik 'Szavazz erre a weboldalra' lehet�s�g�nk. Ezek lehet�v� teszik egy link (vagy ak�r szavaz��rlap) elhelyez�s�t a weboldaladon, hogy n�veld az oldalad szavazatainak sz�m�t. V�lassz a lenti lehet�s�gek k�z�l:");
define_once("_TEXTLINK","Sz�veges link");
define_once("_PROMOTE02","L�togat�id szavazhatnak egyszer� sz�veges link seg�ts�g�vel:");
define_once("_HTMLCODE1","Ebben az esetben haszn�ld a k�vetkez� HTML k�dot:");
define_once("_THENUMBER","A");
define_once("_IDREFER","sz�m a HTML forr�sban a weboldalad azonos�t� sz�ma a(z) $sitename adatb�zisban. Vigy�zz, nehogy kihagyd!");
define_once("_BUTTONLINK","Nyom�gomb");
define_once("_PROMOTE03","Ha esetleg t�bbet szeretn�l, mint egy egyszer� sz�veglink, haszn�lhatsz nyom�gombot:");
define_once("_RATEIT","Szavazz erre az oldalra!");
define_once("_HTMLCODE2","A fenti gomb forr�sk�dja:");
define_once("_REMOTEFORM","T�voli szavaz��rlap");
define_once("_PROMOTE04","Ha valaki csal, a linkj�t elt�vol�tjuk. Having said that, here is what the current remote rating form looks like.");
define_once("_VOTE4THISSITE","Szavazz erre az oldalra!");
define_once("_HTMLCODE3","Ezzel az �rlappal a l�togat�id k�zvetlen�l szavazhatnak a weboldaladra, a szavazatokat pedig mi t�roljuk. A fenti �rlap nem m�k�dik, de a k�vetkez� k�d m�k�dni fog, ha besz�rod a weboldalad forr�s�ba:");
define_once("_PROMOTE05","K�sz�nj�k! �s sok sikert a szavazatokkal!");
define_once("_STAFF","Munkat�rsak");
define_once("_THANKSBROKEN","K�sz�nj�k, hogy seg�tesz fenntartani a linkt�runk m�k�d�s�t.");
define_once("_SECURITYBROKEN","Biztons�gi szempontb�l ideiglenesen feljegyezz�k a felhaszn�l�neved �s az IP c�med is.");
define_once("_THANKSFORINFO","K�sz�nj�k az inform�ci�t.");
define_once("_LOOKTOREQUEST","Hamarosan ellen�rizz�k az inform�ci�id.");
define_once("_SENDREQUEST","K�r�s elk�ld�se");
define_once("_THANKSTOTAKETIME","K�sz�nj�k, hogy id�t sz�nt�l egy oldal oszt�lyoz�s�ra itt n�lunk -");
define_once("_RETURNTO","Vissza az el�z� oldalra:");
define_once("_RATENOTE1","K�rj�k, ne szavazz k�tszer egy linkre.");
define_once("_RATENOTE2","1-10-ig oszt�lyozhatsz, az 1-es a leggyeng�bb, a 10-es a legjobb oszt�lyzat.");
define_once("_RATENOTE3","K�rj�k, oszt�lyozz objekt�van, ha mindenki egyest vagy tizest kap, nem sok seg�ts�get ny�jtanak az oszt�lyzatok...");
define_once("_RATENOTE5","Ha lehet, ne szavazz saj�t, vagy k�zvetlen versenyt�rsaid weboldal�ra.");
define_once("_YOUAREREGGED","Regisztr�lt tag vagy, �s bel�pt�l.");
define_once("_FEELFREE2ADD","Nyugodtan k�ldd el hozz�sz�l�sod ezzel a weboldallal kapcsolatban.");
define_once("_YOUARENOTREGGED","Nem vagy regisztr�lt tagunk, vagy nem l�pt�l be.");
define_once("_IFYOUWEREREG","Regisztr�lt tagk�nt megjegyz�seket f�zhetn�l ehhez a weboldalhoz.");
define_once("_TITLE","C�m");
define_once("_MODIFY","V�ltoztat�s");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%Y. %m. %d.");

