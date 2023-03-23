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
define_once("_PREVIOUS","Edellinen sivu");
define_once("_NEXT","Uusi sivu");
define_once("_CATEGORY","Kategoria");

 
define_once("_CATEGORIES","Aihepiirit");
define_once("_LVOTES","��nt�");
define_once("_TOTALVOTES","��ni� :");
define_once("_THEREARE","Tietokannassa on");
define_once("_NOMATCHES","Tietoja antamillasi hakuehdoilla ei l�ytynyt");
define_once("_SCOMMENTS","Kommentit");
define_once("_UNKNOWN","tuntematon");
define_once("_DOWNLOADS","imurointia"); 
define_once("_AUTHORNAME","Nimi");
define_once("_AUTHOREMAIL","S�hk�posti");
define_once("_DOWNLOADNAME","Tiedoston nimi");
define_once("_ADDTHISFILE","Lis�� tiedosto");
define_once("_INBYTES","kt");
define_once("_FILESIZE","tiedostokoko");
define_once("_VERSION","Versio");
define_once("_DESCRIPTION","Kuvaus");
define_once("_AUTHOR","Nimi");
define_once("_HOMEPAGE","Kotisivut");
define_once("_DOWNLOADNOW","Imuroi t�m� tiedosto!");
define_once("_RATERESOURCE","Arvostele");
define_once("_FILEURL","Tiedoston URL");
define_once("_ADDDOWNLOAD","Lis�� tiedosto");
define_once("_DOWNLOADSMAIN","Etusivu");
define_once("_DOWNLOADCOMMENTS","Kommentit");
define_once("_DOWNLOADSMAINCAT","Kategoriat");
define_once("_ADDADOWNLOAD","Lis�� tiedosto");
define_once("_DSUBMITONCE","Lis�� tiedosto vain kerran.");
define_once("_DPOSTPENDING","Kaikki tiedostot hyv�ksytet��n yll�pit�j�ll� ennen niiden julkaisemista.");
define_once("_RESSORTED","Lajiteltu");
define_once("_DOWNLOADSNOTUSER1","Et ole joko rekister�itynyt tai kirjautunut.");
define_once("_DOWNLOADSNOTUSER2","Rekister�ityneen� k�ytt�j�n� sinulla on mahdollisuus lis�t� tiedostoja sivuille");
define_once("_DOWNLOADSNOTUSER3","Rekister�ityminen on helppoa ja vaivatonta.");
define_once("_DOWNLOADSNOTUSER4","Miksi me vaadimme k�yttt�ji�mme rekister�itym��n?");
define_once("_DOWNLOADSNOTUSER5","Jotta voimme antaa teille parhaimman laadun,");
define_once("_DOWNLOADSNOTUSER6","kaikki tiedostot ovat tarkistettuja ja yll�pit�j�n hyv�ksymi�.");
define_once("_DOWNLOADSNOTUSER7","Pyrimme my�s tarjoamaan tarpeellisen tiedon tiedostosta.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account&op=new_user\">rekister�idy</a> (tai kirjaudu)");
define_once("_DOWNLOADALREADYEXT","VIRHE: Tiedosto l�ytyy jo tietokannastamme!");
define_once("_DOWNLOADNOTITLE","VIRHE: Annappas tiedostolle nimi!");
define_once("_DOWNLOADNOURL","VIRHE: URL unohtui!");
define_once("_DOWNLOADNODESC","VIRHE: Kuvaus unohtui!");
define_once("_DOWNLOADRECEIVED","Me saimme tiedoston hyv�ksytt�v�ksi - kiitos!");
define_once("_NEWDOWNLOADS","Uudet");
define_once("_TOTALNEWDOWNLOADS","Uusia");
define_once("_DTOTALFORLAST","Uudet tiedostot viimeiselt�");
define_once("_DBESTRATED","Eniten ��ni� - TOP ");
define_once("_TRATEDDOWNLOADS","��ni� kaikkiaan");
define_once("_SORTDOWNLOADSBY","Lajittele");
define_once("_DCATNEWTODAY","Uudet tiedostot, jotka on lis�tty t�n��n");
define_once("_DCATLAST3DAYS","Uudet tiedostot, jotka ovat lis�tty viimeisen 3 p�iv�n aikana");
define_once("_DCATTHISWEEK","Uudet tiedostot, jotka lis�tty t�ll� viikolla");
define_once("_DDATE1","P�iv� (Vanhat ensimm�isen�)");
define_once("_DDATE2","P�iv� (Uudet ensimm�isen�)");
define_once("_DOWNLOADPROFILE","Profiili");
define_once("_DOWNLOADRATINGDET","Arvostelujen tiedot");
define_once("_EDITTHISDOWNLOAD","Muokkaa");
define_once("_DOWNLOADRATING","Arvostelut");
define_once("_DOWNLOADVOTE","Arvostele!");
define_once("_REQUESTDOWNLOADMOD","Muokkaa");
define_once("_DOWNLOADID","ID");
define_once("_DLETSDECIDE","Juuri n�itten arvostelujen perusteella muut surffaajat voivat paremmin p��tt�� mit� itse tahtovat imuroida.");
define_once("_DRATENOTE4","Katso <a href=\"modules.php?name=Downloads&d_op=TopRated\">Parhaat ��net</a>.");
define_once("_DATE","P�iv�");
define_once("_TO","Kenelle:");
define_once("_NEW","Uusi");
define_once("_POPULAR","Suosittu");
define_once("_TOPRATED","Huippuluokiteltu");
define_once("_ADDITIONALDET","Lis�tiedot");
define_once("_EDITORREVIEW","Toimittajan valinnat");
define_once("_REPORTBROKEN","Ilmoita toimimattomasta linkist�");
define_once("_AND","ja");
define_once("_INDB","kannassamme");
define_once("_INSTRUCTIONS","Ohjeet");
define_once("_USERANDIP","K�ytt�j�tunnus ja IP talletetaan, joten eth�n k�yt� j�rjestelm�� v��rin.");
define_once("_LDESCRIPTION","Kuvaus: (255 merkki� max)");
define_once("_CHECKFORIT","Et kirjoittanut s�hk�postiosoitettasi. Tarkistamme kuitenkin linkkisi pian.");
define_once("_LASTWEEK","viime viikolta");
define_once("_LAST30DAYS","viimeisilt� 30 p�iv�lt�");
define_once("_1WEEK","1 viikon ajalta");
define_once("_2WEEKS","2 viikon ajalta");
define_once("_30DAYS","30 p�iv�n ajalta");
define_once("_SHOW","N�yt�");
define_once("_DAYS","p�iv�lt�");
define_once("_ADDEDON","lis�tty");
define_once("_RATING","Sija");
define_once("_DETAILS","Yksityiskohdat");
define_once("_OF","of");
define_once("_TVOTESREQ","��nten m��r�n minimi");
define_once("_SHOWTOP","N�yt� Top");
define_once("_MOSTPOPULAR","Suosituimmat - Top");
define_once("_OFALL","kaikista");
define_once("_POPULARITY","Suosio");
define_once("_SELECTPAGE","Valitse sivu");
define_once("_MAIN","Etusivu");
define_once("_NEWTODAY","Uusia t�n��n");
define_once("_NEWLAST3DAYS","Uudet viimeisten 3 p�iv�n ajalta");
define_once("_NEWTHISWEEK","Uudet t�lt� viikolta");
define_once("_POPULARITY1","Suosio (V�hiten suosituista eniten suosittuihin)");
define_once("_POPULARITY2","Suosio (V�hiten suosituista eniten suosittuihin)");
define_once("_TITLEAZ","Otsikko (A - Z)");
define_once("_TITLEZA","Otsikko (Z - A)");
define_once("_RATING1","Tila (Viimeisest� ensimm�iseen)");
define_once("_RATING2","Tila (Ensimm�isest� viimeiseen)");
define_once("_SEARCHRESULTS4","Hakutulokset");
define_once("_USUBCATEGORIES","Alakategoriat");
define_once("_TRY2SEARCH","Yrit� etsi�");
define_once("_INOTHERSENGINES","muilla hakukoneilla");
define_once("_EDITORIAL","Kommentti");
define_once("_EDITORIALBY","Kommentoinut:");
define_once("_NOEDITORIAL","T�lle sivulle ei t�ll� hetkell� ole kommenttia.");
define_once("_RATETHISSITE","Arvostele t�t� l�hdett�");
define_once("_ISTHISYOURSITE","Onko t�m� l�hteesi?");
define_once("_ALLOWTORATE","Anna muiden k�ytt�jien arvostella sit� omalta sivultasi!");
define_once("_OVERALLRATING","Yleisarvostelu");
define_once("_TOTALOF","Yhteens�");
define_once("_USER","K�ytt�j�");
define_once("_USERAVGRATING","K�ytt�j�n keskim��r�inen sija");
define_once("_NUMRATINGS","��nien m��r�");
define_once("_REGISTEREDUSERS","Rekister�ityneet k�ytt�j�t");
define_once("_NUMBEROFRATINGS","��nien m��r�");
define_once("_NOREGUSERSVOTES","Ei rekister�ityneiden k�ytt�jien ��ni�");
define_once("_BREAKDOWNBYVAL","Sijoituksien erittely arvostelun mukaan");
define_once("_LTOTALVOTES","yhteens� ��ni�");
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
define_once("_HTMLCODE3","K�ytt�en t�t� lomaketta k�ytt�j�t voivat arvostella sivuasi suoraan sivultasi ja arvostelu talletetaan t�nne. Yll�oleva lomake ei toimi, mutta seuraava l�hdekoodi toimii jos yksinkertaisesti leikkaat ja liimaat sen nettisivuusi. L�hdekoodi n�kyy alla:");
define_once("_PROMOTE05","Kiitos! ja onnea arvosteluillesi!");
define_once("_STAFF","Yll�pito");
define_once("_THANKSBROKEN","Kiitos ett� autoit pit�m��n yll� t�m�n luettelon kokonaisuutta.");
define_once("_SECURITYBROKEN","Turvallisuussyist� k�ytt�j�tunnuksesi ja IP-osoitteesi talletetaan v�kiaikaisesti.");
define_once("_THANKSFORINFO","Kiitos tiedoista.");
define_once("_LOOKTOREQUEST","Tarkistamme toiveesi pian.");
define_once("_SENDREQUEST","L�het� ehdotus");
define_once("_THANKSTOTAKETIME","Kiitos ajan k�yt�st�si sivun arvosteluun t��ll�");
define_once("_RETURNTO","Palaa");
define_once("_RATENOTE1","�l� ��nest� samaa l�hdett� enemp�� kuin kerran.");
define_once("_RATENOTE2","Asteikko on 1 - 10, jossa 1 on huono ja 10 erinomainen.");
define_once("_RATENOTE3","Ole puolueeton ��nestyksess�si, jos kaikki saavat 1 tai 10, arvosteluista ei ole paljonkaan hy�ty�.");
define_once("_RATENOTE5","�l� ��nest� oman tai kilpailijasi l�hteest�.");
define_once("_YOUAREREGGED","Olet rekister�ity k�ytt�j� ja olet kirjautunut sis��n.");
define_once("_FEELFREE2ADD","Laita vapaasti kommentti t�lle sivulle.");
define_once("_YOUARENOTREGGED","Et ole rekister�ity k�ytt�j� tai et ole kirjautunut sis��n.");
define_once("_IFYOUWEREREG","Jos olisit rekister�itynyt, voisit kommetoida t�t� sivua.");
define_once("_TITLE","Otsikko");
define_once("_MODIFY","Muokkaa");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

