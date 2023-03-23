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
define_once("_PREVIOUS","Edellinen sivu");
define_once("_NEXT","Uusi sivu");
define_once("_YOURNAME","Nimesi");
define_once("_CATEGORY","Kategoria");

 
define_once("_CATEGORIES","Aihepiirit");
define_once("_LVOTES","��nt�");
define_once("_TOTALVOTES","��ni� :");
define_once("_LINKTITLE","Linkin otsikko");
define_once("_HITS","Lukukertoja");
define_once("_THEREARE","Tietokannassa on");
define_once("_NOMATCHES","Tietoja antamillasi hakuehdoilla ei l�ytynyt");
define_once("_SCOMMENTS","Kommentit");
define_once("_DESCRIPTION","Kuvaus");
define_once("_ONLYREGUSERSMODIFY","Vain rekister�ityneet k�ytt�j�t voivat muokata. Ole hyv� ja <a href=\"modules.php?name=Your_Account\">rekister�idy tai kirjaudu</a>.");
define_once("_DATE","P�iv�");
define_once("_TO","Kenelle:");
define_once("_ADDLINK","Lis�� linkki");
define_once("_NEW","Uusi");
define_once("_POPULAR","Suosittu");
define_once("_TOPRATED","Huippuluokiteltu");
define_once("_RANDOM","Satunnainen");
define_once("_LINKSMAIN","Etusivu");
define_once("_LINKCOMMENTS","Linkkien kommentit");
define_once("_ADDITIONALDET","Lis�tiedot");
define_once("_EDITORREVIEW","Toimittajan valinnat");
define_once("_REPORTBROKEN","Ilmoita toimimattomasta linkist�");
define_once("_LINKSMAINCAT","Kategoriat");
define_once("_AND","ja");
define_once("_INDB","kannassamme");
define_once("_ADDALINK","Lis�� linkki");
define_once("_INSTRUCTIONS","Ohjeet");
define_once("_SUBMITONCE","Lis�� linkkisi vain kerran.");
define_once("_POSTPENDING","Linkkisi lis�t��n vasta hyv�ksymisen j�lkeen");
define_once("_USERANDIP","K�ytt�j�tunnus ja IP talletetaan, joten eth�n k�yt� j�rjestelm�� v��rin.");
define_once("_PAGETITLE","Sivun otsikko");
define_once("_PAGEURL","Sivun URL");
define_once("_YOUREMAIL","S�hk�postisi");
define_once("_LDESCRIPTION","Kuvaus: (255 merkki� max)");
define_once("_ADDURL","Lis��");
define_once("_LINKSNOTUSER1","Et ole rekister�ity k�ytt�j� tai et ole kirjautunut sis��n.");
define_once("_LINKSNOTUSER2","Jos olisit rekister�ity k�ytt�j�, voisit lis�t� linkkej� t�lle sivulle.");
define_once("_LINKSNOTUSER3","Rekister�ityminen on helppoa ja vaivatonta.");
define_once("_LINKSNOTUSER4","Miksi vaadimme rekister�itymist� p��semiseksi k�siksi tiettyihin ominaisuuksiin?");
define_once("_LINKSNOTUSER5","Jotta voisimme tarjota sinulle vain korkeimman laatuisen sis�ll�n,");
define_once("_LINKSNOTUSER6","jokainen kohta tarkastetaan ja hyv�ksyt��n yll�pidossa.");
define_once("_LINKSNOTUSER7","Toivomme voivamme tarjota sinulle vain arvokasta tietoa.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Rekister�idy</a>");
define_once("_LINKALREADYEXT","VIRHE: T�m� osoite on jo kannassa!");
define_once("_LINKNOTITLE","VIRHE: Sinun t�ytyy kirjoittaa OTSIKKO osoitteellesi!");
define_once("_LINKNOURL","VIRHE: Sinun t�ytyy kirjoittaa URL osoitteellesi!");
define_once("_LINKNODESC","VIRHE: Sinun t�ytyy kirjoittaa KUVAUS osoitteellesi!");
define_once("_LINKRECEIVED","Vastaanotimme linkkiehdotuksesi. Kiitos!");
define_once("_EMAILWHENADD","Saat s�hk�postin, kun se on hyv�ksytty.");
define_once("_CHECKFORIT","Et kirjoittanut s�hk�postiosoitettasi. Tarkistamme kuitenkin linkkisi pian.");
define_once("_NEWLINKS","Uudet linkit");
define_once("_TOTALNEWLINKS","Kaikki uudet linkit");
define_once("_LASTWEEK","viime viikolta");
define_once("_LAST30DAYS","viimeisilt� 30 p�iv�lt�");
define_once("_1WEEK","1 viikon ajalta");
define_once("_2WEEKS","2 viikon ajalta");
define_once("_30DAYS","30 p�iv�n ajalta");
define_once("_SHOW","N�yt�");
define_once("_TOTALFORLAST","Kaikki uudet linkit viimeisilt�");
define_once("_DAYS","p�iv�lt�");
define_once("_ADDEDON","lis�tty");
define_once("_RATING","Sija");
define_once("_RATESITE","Arvostele t�t� sivua");
define_once("_DETAILS","Yksityiskohdat");
define_once("_BESTRATED","Parhaiten arvostellut linkit - Top");
define_once("_OF","of");
define_once("_TRATEDLINKS","kaikki arvostellut linkit");
define_once("_TVOTESREQ","��nten m��r�n minimi");
define_once("_SHOWTOP","N�yt� Top");
define_once("_MOSTPOPULAR","Suosituimmat - Top");
define_once("_OFALL","kaikista");
define_once("_SORTLINKSBY","Lajittele");
define_once("_SITESSORTED","T�ll� hetkell� lajiteltu");
define_once("_POPULARITY","Suosio");
define_once("_SELECTPAGE","Valitse sivu");
define_once("_MAIN","Etusivu");
define_once("_NEWTODAY","Uusia t�n��n");
define_once("_NEWLAST3DAYS","Uudet viimeisten 3 p�iv�n ajalta");
define_once("_NEWTHISWEEK","Uudet t�lt� viikolta");
define_once("_CATNEWTODAY","Uudet t�n��n lis�tyt linkit t�ss� kategoriassa");
define_once("_CATLAST3DAYS","Uudet viimeisten 3 p�iv�n aikana lis�tyt linkit t�ss� kategoriassa");
define_once("_CATTHISWEEK","Uudet t�m�n viikon aikana lis�tyt linkit t�ss� kategoriassa");
define_once("_POPULARITY1","Suosio (V�hiten suosituista eniten suosittuihin)");
define_once("_POPULARITY2","Suosio (V�hiten suosituista eniten suosittuihin)");
define_once("_TITLEAZ","Otsikko (A - Z)");
define_once("_TITLEZA","Otsikko (Z - A)");
define_once("_DATE1","P�iv�ys (Vanhat ensin)");
define_once("_DATE2","P�iv�ys (Uudet ensin)");
define_once("_RATING1","Tila (Viimeisest� ensimm�iseen)");
define_once("_RATING2","Tila (Ensimm�isest� viimeiseen)");
define_once("_SEARCHRESULTS4","Hakutulokset");
define_once("_USUBCATEGORIES","Alakategoriat");
define_once("_LINKS","Linkit");
define_once("_TRY2SEARCH","Yrit� etsi�");
define_once("_INOTHERSENGINES","muilla hakukoneilla");
define_once("_EDITORIAL","Kommentti");
define_once("_LINKPROFILE","Linkin profiili");
define_once("_EDITORIALBY","Kommentoinut:");
define_once("_NOEDITORIAL","T�lle sivulle ei t�ll� hetkell� ole kommenttia.");
define_once("_VISITTHISSITE","K�y t�ll� sivulla");
define_once("_RATETHISSITE","Arvostele t�t� l�hdett�");
define_once("_ISTHISYOURSITE","Onko t�m� l�hteesi?");
define_once("_ALLOWTORATE","Anna muiden k�ytt�jien arvostella sit� omalta sivultasi!");
define_once("_LINKRATINGDET","Linkin sijan tiedot");
define_once("_OVERALLRATING","Yleisarvostelu");
define_once("_TOTALOF","Yhteens�");
define_once("_USER","K�ytt�j�");
define_once("_USERAVGRATING","K�ytt�j�n keskim��r�inen sija");
define_once("_NUMRATINGS","��nien m��r�");
define_once("_EDITTHISLINK","Muokkaa t�t� linkki�");
define_once("_REGISTEREDUSERS","Rekister�ityneet k�ytt�j�t");
define_once("_NUMBEROFRATINGS","��nien m��r�");
define_once("_NOREGUSERSVOTES","Ei rekister�ityneiden k�ytt�jien ��ni�");
define_once("_BREAKDOWNBYVAL","Sijoituksien erittely arvostelun mukaan");
define_once("_LTOTALVOTES","yhteens� ��ni�");
define_once("_LINKRATING","Linkkien sijoitukset");
define_once("_HIGHRATING","Korkea sija");
define_once("_LOWRATING","Huono sija");
define_once("_NUMOFCOMMENTS","Kommenttien m��r�");
define_once("_WEIGHNOTE","* Huom: T�m� l�hde punnitsee rekister�ityjen vs. rekister�itym�tt�mien k�ytt�jien arvostelut");
define_once("_NOUNREGUSERSVOTES","Ei rekister�itym�tt�mien k�ytt�jien ��ni�");
define_once("_WEIGHOUTNOTE","* Huom.: T�m� l�hde punnitsee rekister�ityjen vs. rekister�itym�tt�mien ��nest�jien arvostelut");
define_once("_NOOUTSIDEVOTES","Ei ulkopuolisten ��ni�");
define_once("_OUTSIDEVOTERS","Ulkopuoliset ��nest�j�t");
define_once("_UNREGISTEREDUSERS","Rekister�itym�tt�m�t k�ytt�j�t");
define_once("_PROMOTEYOURSITE","Mainosta sivuasi");
define_once("_PROMOTE01","Voit ehk� olla kiinnostunut et�isist� 'Arvostele sivua' vaihtoehdoistamme. Ne antavat sinulle mahdollisuuden laittaa kuvan (tai jopa arvostelun) sivullesi kasvattamaan l�hteesi ��nien m��r��. Valitse yhdest� alla listatuista vaihtosehdoista:");
define_once("_TEXTLINK","Tekstilinkki");
define_once("_PROMOTE02","Yksi tapa linkitt�� arvostelukaavakkeeseen on yksinkertainen tekstilinkki:");
define_once("_HTMLCODE1","HTML-koodi, jota sinun tulisi t�ss� tapauksessa k�ytt��, on seuraava:");
define_once("_THENUMBER","M��r�");
define_once("_IDREFER","HTML-l�hdekoodissa viitataan sivusi tunnusnumeroon $sivunimi -tietokannassa. Varmista ett� t�m� numero on mainittu.");
define_once("_BUTTONLINK","Nappilinkki");
define_once("_PROMOTE03","Jos etsit jotain muuta kuin tekstilinkki�, saatat haluta k�ytt�� pient� nappilinkki�:");
define_once("_RATEIT","Arvostele t�t� sivua!");
define_once("_HTMLCODE2","L�hdekoodi edell� mainitulle napille on:");
define_once("_REMOTEFORM","Et�hallittu arvostelulomake");
define_once("_PROMOTE04","Jos huijaat t�ss�, poistamme linkkisi. T�lt� n�ytt�� nykyinen et�hallittu arvostelulomake.");
define_once("_VOTE4THISSITE","��nest� t�t� sivua!");
define_once("_LINKVOTE","��nest�!");
define_once("_HTMLCODE3","K�ytt�en t�t� lomaketta k�ytt�j�t voivat arvostella sivuasi suoraan sivultasi ja arvostelu talletetaan t�nne. Yll�oleva lomake ei toimi, mutta seuraava l�hdekoodi toimii jos yksinkertaisesti leikkaat ja liimaat sen nettisivuusi. L�hdekoodi n�kyy alla:");
define_once("_PROMOTE05","Kiitos! ja onnea arvosteluillesi!");
define_once("_STAFF","Yll�pito");
define_once("_THANKSBROKEN","Kiitos ett� autoit pit�m��n yll� t�m�n luettelon kokonaisuutta.");
define_once("_THANKSFORINFO","Kiitos tiedoista.");
define_once("_LOOKTOREQUEST","Tarkistamme toiveesi pian.");
define_once("_REQUESTLINKMOD","Esit� muutos linkkeihin");
define_once("_LINKID","Linkin tunnus");
define_once("_SENDREQUEST","L�het� ehdotus");
define_once("_THANKSTOTAKETIME","Kiitos ajan k�yt�st�si sivun arvosteluun t��ll�");
define_once("_LETSDECIDE","K�ytt�jien, kuten sinun, mielipiteet auttavat muita vierailijoita paremmin p��tt�m��n mist� linkist� painaa.");
define_once("_RETURNTO","Palaa");
define_once("_RATENOTE1","�l� ��nest� samaa l�hdett� enemp�� kuin kerran.");
define_once("_RATENOTE2","Asteikko on 1 - 10, jossa 1 on huono ja 10 erinomainen.");
define_once("_RATENOTE3","Ole puolueeton ��nestyksess�si, jos kaikki saavat 1 tai 10, arvosteluista ei ole paljonkaan hy�ty�.");
define_once("_RATENOTE4","Voit katsoa listaa <a href=\"links.php?op=TopRated\">Parhaan arvosanan saaneista l�hteist�</a>.");
define_once("_RATENOTE5","�l� ��nest� oman tai kilpailijasi l�hteest�.");
define_once("_YOUAREREGGED","Olet rekister�ity k�ytt�j� ja olet kirjautunut sis��n.");
define_once("_FEELFREE2ADD","Laita vapaasti kommentti t�lle sivulle.");
define_once("_YOUARENOTREGGED","Et ole rekister�ity k�ytt�j� tai et ole kirjautunut sis��n.");
define_once("_IFYOUWEREREG","Jos olisit rekister�itynyt, voisit kommetoida t�t� sivua.");
define_once("_WEBLINKS","Linkit");
define_once("_TITLE","Otsikko");
define_once("_MODIFY","Muokkaa");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

