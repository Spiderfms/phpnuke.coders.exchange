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
define_once("_PREVIOUS","El�z� oldal");
define_once("_NEXT","K�vetkez� oldal");
define_once("_YOURNAME","Neved");
define_once("_CATEGORY","Kateg�ria");
define_once("_CATEGORIES","kateg�ria");
define_once("_LVOTES","szavazat");
define_once("_TOTALVOTES","�sszes szavazat:");
define_once("_LINKTITLE","A c�loldal neve");
define_once("_HITS","tal�lat");
define_once("_THEREARE","Jelenleg");
define_once("_NOMATCHES","A keres�s nem eredm�nyezett tal�latot");
define_once("_SCOMMENTS","Hozz�sz�l�sok");
define_once("_DESCRIPTION","Le�r�s");
define_once("_ONLYREGUSERSMODIFY","Only registered users can suggest links modifications. Please <a href=\"modules.php?name=Your_Account\">register or login</a>.");
define_once("_DATE","D�tum");
define_once("_TO","C�mzett");
define_once("_ADDLINK","Link hozz�ad�sa");
define_once("_NEW","Leg�jabb");
define_once("_POPULAR","Legn�pszer�bb");
define_once("_TOPRATED","Legjobbra oszt�lyozott");
define_once("_RANDOM","V�letlenszer�en");
define_once("_LINKSMAIN","Linkek kezd�oldala");
define_once("_LINKCOMMENTS","V�lem�nyek");
define_once("_ADDITIONALDET","Egy�b r�szletek");
define_once("_EDITORREVIEW","Szerkeszt�i v�lem�ny");
define_once("_REPORTBROKEN","T�r�tt link bejelent�se");
define_once("_LINKSMAINCAT","Linkek - f� kateg�ri�k");
define_once("_AND","�s");
define_once("_INDB","tal�lhat� az adatb�zisban");
define_once("_ADDALINK","�j link hozz�ad�sa");
define_once("_INSTRUCTIONS","�tmutat�");
define_once("_SUBMITONCE","Egy linket csak egyszer k�ldj el.");
define_once("_POSTPENDING","A linkek csak ellen�rz�s ut�n ker�l az adatb�zisba.");
define_once("_USERANDIP","A felhaszn�l�n�v �s az IP c�m feljegyz�sre ker�l, k�rj�k, ne �lj vissza a rendszerrel.");
define_once("_PAGETITLE","Az oldal c�me");
define_once("_PAGEURL","Link");
define_once("_YOUREMAIL","e-mail c�med");
define_once("_LDESCRIPTION","Le�r�s: (max. 255 karakter)");
define_once("_ADDURL","Link hozz�ad�sa");
define_once("_LINKSNOTUSER1","Nem vagy regisztr�lt tagunk, vagy nem l�pt�l be.");
define_once("_LINKSNOTUSER2","Ha regisztr�ln�d magad, te is hozz�adhatn�l �j linkeket.");
define_once("_LINKSNOTUSER3","A regisztr�ci� gyors �s igen egyszer� folyamat.");
define_once("_LINKSNOTUSER4","Hogy mi�rt k�r�nk regisztr�ci�t egyes oldalakon?");
define_once("_LINKSNOTUSER5","Hogy a legmagasabb szint� tartalommal szolg�lhassunk,");
define_once("_LINKSNOTUSER6","minden bevitt adatot egyes�vel ellen�riznek munkat�rsaink.");
define_once("_LINKSNOTUSER7","Rem�lj�k, hogy mindenhol siker�l �rt�kes inform�ci�kat ny�jtanunk.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Regisztr�ld magad!</a>");
define_once("_LINKALREADYEXT","HIBA: Ez az URL m�r benne van az adatb�zisunkban!");
define_once("_LINKNOTITLE","HIBA: Az URL c�m�t is add meg!");
define_once("_LINKNOURL","HIBA: Elfelejtetted megadni mag�t az URL-t!");
define_once("_LINKNODESC","HIBA: K�rj�k, add meg az URL r�vid le�r�s�t is!");
define_once("_LINKRECEIVED","Az �ltalad megadott adatokat regisztr�ltuk. K�sz�nj�k!");
define_once("_EMAILWHENADD","A link j�v�hagy�sakor e-mailt k�ld�nk neked is.");
define_once("_CHECKFORIT","Nem adt�l meg e-mail c�met. Hamarosan ellen�rizz�k a linket, �s beker�l az adatb�zisba.");
define_once("_NEWLINKS","�j linkek");
define_once("_TOTALNEWLINKS","Linkek sz�ma �sszesen");
define_once("_LASTWEEK","M�lt h�ten");
define_once("_LAST30DAYS","M�lt h�napban");
define_once("_1WEEK","1 h�t");
define_once("_2WEEKS","2 h�t");
define_once("_30DAYS","30 nap");
define_once("_SHOW","Megtekint�s");
define_once("_TOTALFORLAST","�sszes link az elm�lt");
define_once("_DAYS","napban");
define_once("_ADDEDON","Felv�tel napja");
define_once("_RATING","oszt�lyzat");
define_once("_RATESITE","Oszt�lyozd ezt az oldalt");
define_once("_DETAILS","R�szletek");
define_once("_BESTRATED","Legjobb oszt�lyzatot kapott oldalak");
define_once("_OF","-");
define_once("_TRATEDLINKS","�sszesen oszt�lyzott oldalak");
define_once("_TVOTESREQ","minim�lisan sz�ks�ges szavazatok");
define_once("_SHOWTOP","Legn�zettebb");
define_once("_MOSTPOPULAR","Legkedveltebb");
define_once("_OFALL","az �sszesb�l");
define_once("_SORTLINKSBY","Sorbarendez�s:");
define_once("_SITESSORTED","Jelenlegi sorbarendez�s:");
define_once("_POPULARITY","N�pszer�s�g");
define_once("_SELECTPAGE","V�lassz oldalt");
define_once("_MAIN","F�oldal");
define_once("_NEWTODAY","Mai linkek");
define_once("_NEWLAST3DAYS","Az elm�lt h�rom nap linkjei");
define_once("_NEWTHISWEEK","Az elm�lt h�t linkjei");
define_once("_CATNEWTODAY","A kateg�ria mai �j linkjei");
define_once("_CATLAST3DAYS","A kateg�ria �j linkjei az elm�lt h�rom napban");
define_once("_CATTHISWEEK","A kateg�ria �j linkjei az elm�lt h�ten");
define_once("_POPULARITY1","N�pszer�s�g (n�vekv� sorrend)");
define_once("_POPULARITY2","N�pszer�s�g (cs�kken� sorrend)");
define_once("_TITLEAZ","C�m (A-Z)");
define_once("_TITLEZA","C�m (Z-A)");
define_once("_DATE1","D�tum (el�sz�r a r�gebbiek)");
define_once("_DATE2","D�tum (el�sz�r az �jabbak)");
define_once("_RATING1","Oszt�lyzatok (n�vekv� sorrend)");
define_once("_RATING2","Oszt�lyzatok (cs�kken� sorrend)");
define_once("_SEARCHRESULTS4","Keres�s:");
define_once("_USUBCATEGORIES","Alkateg�ri�k");
define_once("_LINKS","link");
define_once("_TRY2SEARCH","Keres�s");
define_once("_INOTHERSENGINES","m�s keres�kkel");
define_once("_EDITORIAL","Szerkeszt�i v�lem�ny");
define_once("_LINKPROFILE","Az oldal neve");
define_once("_EDITORIALBY","Szerkeszt�:");
define_once("_NOEDITORIAL","Err�l a weboldalr�l m�g nincs szerkeszt�i v�lem�ny.");
define_once("_VISITTHISSITE","L�togasd meg ezt a weboldalt");
define_once("_RATETHISSITE","Oszt�lyozd ezt a weboldalt");
define_once("_ISTHISYOURSITE","Te k�ldted be ezt a linket?");
define_once("_ALLOWTORATE","Tedd lehet�v�, hogy m�sok is oszt�lyozhass�k a te saj�t oldaladr�l!");
define_once("_LINKRATINGDET","Link oszt�lyoz�s�nak r�szletei");
define_once("_OVERALLRATING","�tlag");
define_once("_TOTALOF","�sszesen");
define_once("_USER","tag");
define_once("_USERAVGRATING","Tagok �tlagos oszt�lyzata");
define_once("_NUMRATINGS","Oszt�lyzatok sz�ma");
define_once("_EDITTHISLINK","Link szerkeszt�se");
define_once("_REGISTEREDUSERS","Regisztr�lt tagok");
define_once("_NUMBEROFRATINGS","Oszt�lyzatok sz�ma");
define_once("_NOREGUSERSVOTES","Regisztr�lt tag m�g nem oszt�lyozta");
define_once("_BREAKDOWNBYVAL","Oszt�lyzatok eloszl�sa");
define_once("_LTOTALVOTES","szavazat");
define_once("_LINKRATING","Link oszt�lyzata");
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
define_once("_LINKVOTE","Szavazz!");
define_once("_HTMLCODE3","Ezzel az �rlappal a l�togat�id k�zvetlen�l szavazhatnak a weboldaladra, a szavazatokat pedig mi t�roljuk. A fenti �rlap nem m�k�dik, de a k�vetkez� k�d m�k�dni fog, ha besz�rod a weboldalad forr�s�ba:");
define_once("_PROMOTE05","K�sz�nj�k! �s sok sikert a szavazatokkal!");
define_once("_STAFF","Munkat�rsak");
define_once("_THANKSBROKEN","K�sz�nj�k, hogy seg�tesz fenntartani a linkt�runk m�k�d�s�t.");
define_once("_THANKSFORINFO","K�sz�nj�k az inform�ci�t.");
define_once("_LOOKTOREQUEST","Hamarosan ellen�rizz�k az inform�ci�id.");
define_once("_REQUESTLINKMOD","Link v�ltoztat�s�nak k�r�se");
define_once("_LINKID","Link sz�ma");
define_once("_SENDREQUEST","K�r�s elk�ld�se");
define_once("_THANKSTOTAKETIME","K�sz�nj�k, hogy id�t sz�nt�l egy oldal oszt�lyoz�s�ra itt n�lunk -");
define_once("_LETSDECIDE","A visszajelz�sek seg�tik, hogy l�togat�ink a megfelel� linkekre kattintsanak.");
define_once("_RETURNTO","Vissza az el�z� oldalra:");
define_once("_RATENOTE1","K�rj�k, ne szavazz k�tszer egy linkre.");
define_once("_RATENOTE2","1-10-ig oszt�lyozhatsz, az 1-es a leggyeng�bb, a 10-es a legjobb oszt�lyzat.");
define_once("_RATENOTE3","K�rj�k, oszt�lyozz objekt�van, ha mindenki egyest vagy tizest kap, nem sok seg�ts�get ny�jtanak az oszt�lyzatok...");
define_once("_RATENOTE4","Megn�zheted a <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">legjobb oszt�lyzatokat kapott oldalak</a> list�j�t.");
define_once("_RATENOTE5","Ha lehet, ne szavazz saj�t, vagy k�zvetlen versenyt�rsaid weboldal�ra.");
define_once("_YOUAREREGGED","Regisztr�lt tag vagy, �s bel�pt�l.");
define_once("_FEELFREE2ADD","Nyugodtan k�ldd el hozz�sz�l�sod ezzel a weboldallal kapcsolatban.");
define_once("_YOUARENOTREGGED","Nem vagy regisztr�lt tagunk, vagy nem l�pt�l be.");
define_once("_IFYOUWEREREG","Regisztr�lt tagk�nt megjegyz�seket f�zhetn�l ehhez a weboldalhoz.");
define_once("_WEBLINKS","Linkek");
define_once("_TITLE","C�m");
define_once("_MODIFY","V�ltoztat�s");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%Y. %m. %d.");

