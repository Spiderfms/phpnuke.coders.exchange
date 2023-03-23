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
define_once("_PREVIOUS","Forrige side");
define_once("_NEXT","Neste side");
define_once("_YOURNAME","Ditt navn");
define_once("_CATEGORY","Kategori");
define_once("_CATEGORIES","Kategorier");
define_once("_LVOTES","stemmer");
define_once("_TOTALVOTES","Totalt antall stemmer:");
define_once("_LINKTITLE","Titell p� linken");
define_once("_HITS","Treff");
define_once("_THEREARE","Det finnes");
define_once("_NOMATCHES","Ingen treff p� ditt sp�rsm�l");
define_once("_SCOMMENTS","Kommentarer");
define_once("_DESCRIPTION","Beskrivelse");
define_once("_ONLYREGUSERSMODIFY","Bare registrerte medlemmer kan foresl� endringer. Vennligst <a href=\"modules.php?name=Your_Account\">registrer deg eller logg inn</a>.");
define_once("_DATE","Dato");
define_once("_TO","Til");
define_once("_ADDLINK","Legg til link");
define_once("_NEW","Ny");
define_once("_POPULAR","Populer");
define_once("_TOPRATED","H�yeste karakter");
define_once("_RANDOM","Tilfeldig");
define_once("_LINKSMAIN","Hovedside");
define_once("_LINKCOMMENTS","Kommentarer til link");
define_once("_ADDITIONALDET","Fler detaljer");
define_once("_EDITORREVIEW","Anmeldelse av redakt�r");
define_once("_REPORTBROKEN","Rapporter �delagt link");
define_once("_LINKSMAINCAT","Weblinker hovedkategorier");
define_once("_AND","og");
define_once("_INDB","i v�r database");
define_once("_ADDALINK","Legg til en link");
define_once("_INSTRUCTIONS","Instruksjoner");
define_once("_SUBMITONCE","Send inn hver link kun en gang.");
define_once("_POSTPENDING","Alle linker blir lagret i databasen i p�vente av godkjenning.");
define_once("_USERANDIP","Brukernavn og IP-adresse blir lagret, s� ikke misbruk systemet.");
define_once("_PAGETITLE","Webstedets tittel");
define_once("_PAGEURL","Webstedets adresse");
define_once("_YOUREMAIL","Din e-postadresse");
define_once("_LDESCRIPTION","Beskrivelse: (Maks 255 tecken)");
define_once("_ADDURL","Legg til denne adressen");
define_once("_LINKSNOTUSER1","Du er ikke medlem eller har ikke logget inn.");
define_once("_LINKSNOTUSER2","Som medlem kan du enkelt legge til linker p� denne siden.");
define_once("_LINKSNOTUSER3","� bli medlem er en kjapp og enkel prosess.");
define_once("_LINKSNOTUSER4","Hvorfor krever vi medlemsskap for enkelte funksjoner?");
define_once("_LINKSNOTUSER5","Det er for � kunne tilby deg best mulig kvalitet p� innholdet.");
define_once("_LINKSNOTUSER6","Hver sak blir kontrollert individuelt og eventuelt godkjent av v�rt personal.");
define_once("_LINKSNOTUSER7","Vi h�per vi kan tilby deg kun verdifull informasjon.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Bli medlem!</a>");
define_once("_LINKALREADYEXT","FEIL: Denne adressen finnes allerede i v�r database!");
define_once("_LINKNOTITLE","FEIL: Du m� skrive en tittel p� din adresse!");
define_once("_LINKNOURL","FEIL: En link uten adresse er ikke s� nyttig!");
define_once("_LINKNODESC","FEIL: Du m� beskrive din adresse!");
define_once("_LINKRECEIVED","Vi har mottatt ditt forslag. Takk!");
define_once("_EMAILWHENADD","Du f�r en e-post n�r den er godkjent.");
define_once("_CHECKFORIT","Du skrev ingen e-postadresse. Vi vil likevel se p� din link.");
define_once("_NEWLINKS","Nye linker");
define_once("_TOTALNEWLINKS","Totalt antall nye linker");
define_once("_LASTWEEK","Siste uken");
define_once("_LAST30DAYS","Siste 30 dager");
define_once("_1WEEK","1 uke");
define_once("_2WEEKS","2 uker");
define_once("_30DAYS","30 dager");
define_once("_SHOW","Vis");
define_once("_TOTALFORLAST","Totalt antall nye lenker de siste");
define_once("_DAYS","dagene");
define_once("_ADDEDON","Lagt til");
define_once("_RATING","Karakter");
define_once("_RATESITE","Gi karakter til dette webstedet");
define_once("_DETAILS","Detaljer");
define_once("_BESTRATED","Linker med h�yest karakter");
define_once("_OF","av");
define_once("_TRATEDLINKS","totalt antall linker med karakter");
define_once("_TVOTESREQ","minste antall stemmer som trengs");
define_once("_SHOWTOP","Vis topp");
define_once("_MOSTPOPULAR","Mest popul�re");
define_once("_OFALL","av alle");
define_once("_SORTLINKSBY","Sorter linkene etter");
define_once("_SITESSORTED","Webstedene sorteres n� etter");
define_once("_POPULARITY","Popularitet");
define_once("_SELECTPAGE","Velg side");
define_once("_MAIN","Hovedside");
define_once("_NEWTODAY","Nye i dag");
define_once("_NEWLAST3DAYS","Nye de siste 3 dagene");
define_once("_NEWTHISWEEK","Nye denne uken");
define_once("_CATNEWTODAY","Nye linker i denne kategorien, lagt til i dag");
define_once("_CATLAST3DAYS","Nye linker i denne kategorien, lagt til de siste 3 dagene");
define_once("_CATTHISWEEK","Nye linker i denne kategorien, lagt til denne uken");
define_once("_POPULARITY1","Popularitet (Fra minst til mest treff)");
define_once("_POPULARITY2","Popularitet (Fra mest til minst treff)");
define_once("_TITLEAZ","Tittel (Fra A til �)");
define_once("_TITLEZA","Tittel (Fra � til A)");
define_once("_DATE1","Dato (Gamle linker f�rst)");
define_once("_DATE2","Dato (Nye linker f�rst)");
define_once("_RATING1","Poengsum(Fra lavest til h�yest)");
define_once("_RATING2","Poengsum (Fra h�yest til lavest)");
define_once("_SEARCHRESULTS4","S�keresultat for");
define_once("_USUBCATEGORIES","Underkategorier");
define_once("_LINKS","Linker");
define_once("_TRY2SEARCH","Pr�v � s�ke");
define_once("_INOTHERSENGINES","i andre s�kemotorer");
define_once("_EDITORIAL","Leder");
define_once("_LINKPROFILE","Linkprovil");
define_once("_EDITORIALBY","Leder av");
define_once("_NOEDITORIAL","Ingen ledere er tilgjengelig for dette webstedet.");
define_once("_VISITTHISSITE","Bes�k dette webstedet");
define_once("_RATETHISSITE","Sett karakter p� dette webstedet");
define_once("_ISTHISYOURSITE","Er dette ditt websted?");
define_once("_ALLOWTORATE","La andre brukere gi deg poeng fra ditt eget websted!");
define_once("_LINKRATINGDET","Poengsettingsdetaljer");
define_once("_OVERALLRATING","Gjennomstnittspoeng");
define_once("_TOTALOF","Totalt");
define_once("_USER","Medlemmer");
define_once("_USERAVGRATING","Medlemmers gjennomsnittspoeng");
define_once("_NUMRATINGS","# av poeng");
define_once("_EDITTHISLINK","Rediger denne linken");
define_once("_REGISTEREDUSERS","Medlemmer");
define_once("_NUMBEROFRATINGS","Antall poeng");
define_once("_NOREGUSERSVOTES","Ingen medlemmer har stemt");
define_once("_BREAKDOWNBYVAL","Fordeling av poeng basert p� verdi");
define_once("_LTOTALVOTES","totalt antall stemmer");
define_once("_LINKRATING","Poengsum");
define_once("_HIGHRATING","H�yeste poeng");
define_once("_LOWRATING","Laveste poeng");
define_once("_NUMOFCOMMENTS","Antall kommentarer");
define_once("_WEIGHNOTE","* OBS: Dette webstedet veier medlemmers poengsummer opp mot ikke-medlemmers!");
define_once("_NOUNREGUSERSVOTES","Ingen ikke-medlemmer har stemt");
define_once("_WEIGHOUTNOTE","* OBS: Dette webstedet veier medlemmers poengsummer opp mot poengsummer fra andre websteder!");
define_once("_NOOUTSIDEVOTES","Ingen poeng fra andre websteder");
define_once("_OUTSIDEVOTERS","Poeng fra andre websteder");
define_once("_UNREGISTEREDUSERS","Ikke-registrerte medlemmer");
define_once("_PROMOTEYOURSITE","Markedsf�r ditt websted");
define_once("_PROMOTE01","Du er kanskje interessert av de forskjellige 'Poengsettingsmulighetene' vi tilbyr. Disse tillater deg � legge et bilde (eller et skjema) p� ditt eget websted for � �ke antallet stemmer p� ditt websted. Velg en av mulighetene under:");
define_once("_TEXTLINK","Tekstlink");
define_once("_PROMOTE02","En enkel m�te � sette inn en stemmelink p�:");
define_once("_HTMLCODE1","HTML koden du b�r bruke er f�lgende:");
define_once("_THENUMBER","Nummeret");
define_once("_IDREFER","i HTML koden refererer til ditt websteds IDnummer i $sitename database. P�se at dette nummeret blir med i linken.");
define_once("_BUTTONLINK","Knapplink");
define_once("_PROMOTE03","Dersom du vil ha noe mer enn en vanlig tekstlink kan du bruke en liten knapp:");
define_once("_RATEIT","Stem p� dette webstedet!");
define_once("_HTMLCODE2","HTML koden for knappen er:");
define_once("_REMOTEFORM","Skjema");
define_once("_PROMOTE04","Jukser du med denne tar vi bort din link. Skjemaet ser slik ut.");
define_once("_VOTE4THISSITE","Stem p� dette webstedet!");
define_once("_LINKVOTE","Stem!");
define_once("_HTMLCODE3","Gjennom � bruke dette skjemaet tillater du dine bes�kere � stemme direkte fra ditt websted. Skjemaet over er l�st, men f�lgende HTML-kode vil fungere dersom du klipper den ut og limer den inn p� din egen side. Koden vises under:");
define_once("_PROMOTE05","Takk! Og lykke til med dine stemmer!");
define_once("_STAFF","Stab");
define_once("_THANKSBROKEN","Takk for at du hjelper til med � beholde v�rt linkbiblioteks integritet");
define_once("_THANKSFORINFO","Takk for informasjonen.");
define_once("_LOOKTOREQUEST","Vi vil se p� dette s� fort som mulig.");
define_once("_REQUESTLINKMOD","Forslag om endring av link");
define_once("_LINKID","Link ID");
define_once("_SENDREQUEST","Send forslag");
define_once("_THANKSTOTAKETIME","Takk for at du tok deg tid til � stemme p� et websted her p�");
define_once("_LETSDECIDE","Meninger fra mennesker som deg vil hjelpe v�re bes�kende til bedre � bestemme hvilke linker som er verdt et bes�k.");
define_once("_RETURNTO","Returner til");
define_once("_RATENOTE1","Stem ikke p� samme sted mer enn en gang.");
define_once("_RATENOTE2","Skalaen g�r fra 1 til 10, der 1 er lavest.");
define_once("_RATENOTE3","V�r objektiv i din bed�mming. Dersom alle f�r topp-karakter gir ikke avstemmingen noe resultat.");
define_once("_RATENOTE4","Du kan se en liste over <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">webstedene med h�yest poengsum</a>.");
define_once("_RATENOTE5","Stem ikke p� ditt eget eller en motstanders websted.");
define_once("_YOUAREREGGED","Du er medlem og innlogget.");
define_once("_FEELFREE2ADD","Kommenter gjerne dette webstedet.");
define_once("_YOUARENOTREGGED","Du er ikke medlem eller ikke logget inn.");
define_once("_IFYOUWEREREG","Dersom du blir medlem kan du kommentere dette webstedet.");
define_once("_WEBLINKS","Weblinker");
define_once("_TITLE","Tittel");
define_once("_MODIFY","Modifiser");
define_once("_COMPLETEVOTE1","Din stemme blir satt pris p�.");
define_once("_COMPLETEVOTE2","Du har allerede stemt p� denne linken i l�pet av de(n) siste $anonwaitdays dagen(e).");
define_once("_COMPLETEVOTE3","Stem p� en link kun en gang.<br>Alle stemmer er lagret og blir gjennomg�tt.");
define_once("_COMPLETEVOTE4","Du kan ikke stemme p� en link du foreslo.<br>Alle stemmer blir lagret og gjennomg�tt.");
define_once("_COMPLETEVOTE5","Poengsum ikke valgt - stemmen blir ikke talt");
define_once("_COMPLETEVOTE6","Kun en stemme per IP-adresse er tillatt hver $outsidewaitdays dag.");
define_once("_LINKSDATESTRING","%d-%b-%Y");

