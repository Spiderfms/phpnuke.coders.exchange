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
define_once("_PREVIOUS","Forrige side");
define_once("_NEXT","Neste side");
define_once("_CATEGORY","Kategori");
define_once("_CATEGORIES","Kategorier");
define_once("_LVOTES","stemmer");
define_once("_TOTALVOTES","Totalt antall stemmer:");
define_once("_THEREARE","Det finnes");
define_once("_NOMATCHES","Ingen treff p� din foresp�rsel");
define_once("_SCOMMENTS","Kommentarer");
define_once("_UNKNOWN","Ukjent");
define_once("_DOWNLOADS","nedlastninger");
define_once("_AUTHORNAME","Forfatterens navn");
define_once("_AUTHOREMAIL","Forfatterens e-postadresse");
define_once("_DOWNLOADNAME","Programnavn");
define_once("_ADDTHISFILE","Legg til denne filen");
define_once("_INBYTES","i bytes");
define_once("_FILESIZE","Filst�rrelse");
define_once("_VERSION","Versjon");
define_once("_DESCRIPTION","Beskrivelse");
define_once("_AUTHOR","Forfatter");
define_once("_HOMEPAGE","Hjemmeside");
define_once("_DOWNLOADNOW","Last ned denne filen n�!");
define_once("_RATERESOURCE","Poengsetting");
define_once("_FILEURL","Fil-link");
define_once("_ADDDOWNLOAD","Leg til nedlastning");
define_once("_DOWNLOADSMAIN","Nedlastningsindex");
define_once("_DOWNLOADCOMMENTS","Nedlastningskommentarer");
define_once("_DOWNLOADSMAINCAT","Nedlastningsavdelingens hovedkategorier");
define_once("_ADDADOWNLOAD","Legg til ny nedlastning");
define_once("_DSUBMITONCE","Legg til unike nedlastninger kun en gang.");
define_once("_DPOSTPENDING","Alle nedlastninger blir lagret i databasen i p�vente av godkjenning.");
define_once("_RESSORTED","Resursene sorteres n� etter");
define_once("_DOWNLOADSNOTUSER1","Du er ikke et registrert medlem eller du har ikke logget inn.");
define_once("_DOWNLOADSNOTUSER2","N�r du registrerer deg kan du legge til filer for nedlastning p� dette webstedet.");
define_once("_DOWNLOADSNOTUSER3","� bli medlem er en enkel og smertefri prosess.");
define_once("_DOWNLOADSNOTUSER4","Hvorfor krever vi registrering for visse funksjoner?");
define_once("_DOWNLOADSNOTUSER5","Det er fordi vi vil gi deg h�yest mulig kvalitet p� innholdet.");
define_once("_DOWNLOADSNOTUSER6","Hver detalj blir kontrollert av v�rt personale.");
define_once("_DOWNLOADSNOTUSER7","Vi h�per � kunne tilby deg kun verdifull informasjon.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Registrer deg som medlem</a>");
define_once("_DOWNLOADALREADYEXT","FEIL: Denne URLen er allerede i v�r database!");
define_once("_DOWNLOADNOTITLE","FEIL: Du m� skrive en TITTEL for din URL!");
define_once("_DOWNLOADNOURL","FEIL: Du m� angi en URL!");
define_once("_DOWNLOADNODESC","FEIL: Du m� angi en BESKRIVELSE for din URL!");
define_once("_DOWNLOADRECEIVED","Vi har mottatt ditt forslag. Takk!");
define_once("_NEWDOWNLOADS","Nye nedlastninger");
define_once("_TOTALNEWDOWNLOADS","Totalt antall nye nedlastninger");
define_once("_DTOTALFORLAST","Totalt antall nye nedlastninger de siste");
define_once("_DBESTRATED","Nedlastninger med h�yst poengsum - Topp");
define_once("_TRATEDDOWNLOADS","totalt antall nedlastninger med poengsum");
define_once("_SORTDOWNLOADSBY","Sorter nedlastninger etter");
define_once("_DCATNEWTODAY","Dagens nye nedlastninger i denne kategorien");
define_once("_DCATLAST3DAYS","De siste 3 dagers nye nedlasninger i denne kategorien");
define_once("_DCATTHISWEEK","Denne ukens nye nedlastninger i denne kategorien");
define_once("_DDATE1","Dato (De eldste vises f�rst)");
define_once("_DDATE2","Dato (De nyeste vises f�rst)");
define_once("_DOWNLOADPROFILE","Nedlastningsprofil");
define_once("_DOWNLOADRATINGDET","Poengsettingsdetaljer");
define_once("_EDITTHISDOWNLOAD","Rediger denne nedlastningen");
define_once("_DOWNLOADRATING","Poengsetting");
define_once("_DOWNLOADVOTE","Stem!");
define_once("_REQUESTDOWNLOADMOD","Be om modifisering av nedlastning");
define_once("_DOWNLOADID","NedlastningsID");
define_once("_DLETSDECIDE","Innspill fra brukere som deg vil hjelpe v�re bes�kende til bedre � velge hvilke nedlastninger som er best.");
define_once("_DRATENOTE4","Du kan se en liste over nedlastningene med h�yest poengsum <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">her</a>.");
define_once("_DATE","Dato");
define_once("_TO","Til");
define_once("_NEW","Ny");
define_once("_POPULAR","Popul�r");
define_once("_TOPRATED","H�yest poengsum");
define_once("_ADDITIONALDET","Fler detaljer");
define_once("_EDITORREVIEW","Anmeldelse av redakt�r");
define_once("_REPORTBROKEN","Rapporter �delagt link");
define_once("_AND","og");
define_once("_INDB","i v�r database");
define_once("_INSTRUCTIONS","Instruksjoner");
define_once("_USERANDIP","Brukernavn og IPadresse blir lagret. Ikke misbruk systemet.");
define_once("_LDESCRIPTION","Beskrivelse: (Maks 255 tegn)");
define_once("_CHECKFORIT","Du skrev ingen e-postadresse. Vi vil likevel se p� din link.");
define_once("_LASTWEEK","Siste uken");
define_once("_LAST30DAYS","Siste 30 dager");
define_once("_1WEEK","1 uke");
define_once("_2WEEKS","2 uker");
define_once("_30DAYS","30 dager");
define_once("_SHOW","Vis");
define_once("_DAYS","dagene");
define_once("_ADDEDON","Lagt til");
define_once("_RATING","Karakter");
define_once("_DETAILS","Detaljer");
define_once("_OF","av");
define_once("_TVOTESREQ","minste antall stemmer som kreves");
define_once("_SHOWTOP","Vis Topp");
define_once("_MOSTPOPULAR","Mest Popul�re");
define_once("_OFALL","av alle");
define_once("_POPULARITY","Popularitet");
define_once("_SELECTPAGE","Velg side");
define_once("_MAIN","Hovedside");
define_once("_NEWTODAY","Nye i dag");
define_once("_NEWLAST3DAYS","Nye de siste 3 dagene");
define_once("_NEWTHISWEEK","Nye denne uken");
define_once("_POPULARITY1","Popularitet (Fra minst til mest treff)");
define_once("_POPULARITY2","Popularitet (Fra mest til minst treff)");
define_once("_TITLEAZ","Tittel (Fra A til �)");
define_once("_TITLEZA","Tittel (Fra � til A)");
define_once("_RATING1","Poengsum (Fra lavest til h�yest)");
define_once("_RATING2","Poengsum (Fra h�yest til lavest)");
define_once("_SEARCHRESULTS4","S�keresultat for");
define_once("_USUBCATEGORIES","Underkategorier");
define_once("_TRY2SEARCH","Pr�v � s�ke");
define_once("_INOTHERSENGINES","i andre s�kemotorer");
define_once("_EDITORIAL","Leder");
define_once("_EDITORIALBY","Leder av");
define_once("_NOEDITORIAL","Ingen ledere er tilgjengelig for dette webstedet.");
define_once("_RATETHISSITE","Poengsett dette webstedet");
define_once("_ISTHISYOURSITE","Er dette ditt websted?");
define_once("_ALLOWTORATE","La andre p� stemme fra ditt eget websted!");
define_once("_OVERALLRATING","Gjennomstnittlig poengsum");
define_once("_TOTALOF","Totalt");
define_once("_USER","Medlemmer");
define_once("_USERAVGRATING","Medlemmers gjennomsnittssum");
define_once("_NUMRATINGS","# av stemmer");
define_once("_REGISTEREDUSERS","Medlemmer");
define_once("_NUMBEROFRATINGS","Antall stemmer");
define_once("_NOREGUSERSVOTES","Ingen medlemmer har stemt");
define_once("_BREAKDOWNBYVAL","Fordelingen av stemmer basert p� verdi");
define_once("_LTOTALVOTES","totalt antall stemmer");
define_once("_HIGHRATING","H�yeste poengsum");
define_once("_LOWRATING","Laveste poengsum");
define_once("_NUMOFCOMMENTS","Antall kommentarer");
define_once("_WEIGHNOTE","* Obs: Dette webstedet veier medlemmers poengsum opp mot ikke-medlemmers");
define_once("_NOUNREGUSERSVOTES","Ingen ikke-medlemmer har stemt");
define_once("_WEIGHOUTNOTE","* Obs: Dette webstedet veier medlemmers poengsum opp mot poengsummer fra andre websteder");
define_once("_NOOUTSIDEVOTES","Ingen poengsummer fra andre websteder");
define_once("_OUTSIDEVOTERS","Poengsummer fra andre websteder");
define_once("_UNREGISTEREDUSERS","Ikke-registrerte medlemmer");
define_once("_PROMOTEYOURSITE","Markedsf�r ditt websted");
define_once("_PROMOTE01","Du er kanskje interessert i de ulike 'Poengsettingsmodellene' vi kan tilby. Disse gj�r at du kan legge et bilde eller et skjema p� din egen webside slik at dine brukere kan stemme p� deg direkte. Velg en av mulighetene under:");
define_once("_TEXTLINK","Tekstlink");
define_once("_PROMOTE02","En m�te � linke p� er ganske enkelt en tekstlink:");
define_once("_HTMLCODE1","HTML koden du b�r bruke er f�lgende:");
define_once("_THENUMBER","Nummeret");
define_once("_IDREFER","i HTML koden refererer til ditt websteds IDnummer i $sitename database. P�se at dette nummeret er med.");
define_once("_BUTTONLINK","Knapp");
define_once("_PROMOTE03","Dersom du vil ha mer enn en vanlig tekst-link kan du bruke en knapp i steden:");
define_once("_RATEIT","Stem p� dette webstedet!");
define_once("_HTMLCODE2","HTML koden for knappen over er:");
define_once("_REMOTEFORM","Skjema");
define_once("_PROMOTE04","Jukser du med dette skjemaet vil din link fjernes. Skjemaet ser slik ut.");
define_once("_VOTE4THISSITE","Stem p� dette webstedet!");
define_once("_HTMLCODE3","Ved � bruke dette skjemaet blir poengsummen registrert direkte fra ditt websted. Skjemaet over er l�st, men f�lgende HTML-kode virker, det er bare � klippe det ut og lime det inn p� din side. HTML-koden vises under:");
define_once("_PROMOTE05","Takk! Og lykke til med dine stemmer!");
define_once("_STAFF","Stab");
define_once("_THANKSBROKEN","Takk for at du hjelper til � vedlikeholde v�r integritet.");
define_once("_SECURITYBROKEN","Av sikkerhetshensyn blir ditt brukernavn og din IPadresse midlertidig lagret.");
define_once("_THANKSFORINFO","Takk for informasjonen!");
define_once("_LOOKTOREQUEST","Vi vil se p� dette s� snart vi kan.");
define_once("_SENDREQUEST","Send");
define_once("_THANKSTOTAKETIME","Takk for at du stemte p� et websted her p�");
define_once("_RETURNTO","G� tilbake til");
define_once("_RATENOTE1","Stem ikke p� samme sted mer enn en gang.");
define_once("_RATENOTE2","Skalaen g�r fra 1 til 10, der 1 er d�rligst.");
define_once("_RATENOTE3","V�r objektiv i din stemming! Om alle f�r 10 mister poengene sin betydning");
define_once("_RATENOTE5","Stem ikke p� ditt eget eller en motstanders websted.");
define_once("_YOUAREREGGED","Du er medlem og innlogget.");
define_once("_FEELFREE2ADD","Kommenter gjerne dette webstedet.");
define_once("_YOUARENOTREGGED","Du er ikke medlem eller ikke innlogget.");
define_once("_IFYOUWEREREG","N�r du blir medlem kan du kommentere dette webstedet.");
define_once("_TITLE","Tittel");
define_once("_MODIFY","Modifiser");
define_once("_COMPLETEVOTE1","Vi setter pris p� din stemme.");
define_once("_COMPLETEVOTE2","Du har allerede stemt p� denne de(n) siste $anonwaitdays dagen(e).");
define_once("_COMPLETEVOTE3","Stem kun en gang.<br>Alle stemmer er logget og blir gjennomg�tt.");
define_once("_COMPLETEVOTE4","Du kan ikke stemme p� en nedlastning du selv har lagt til.<br>Alle stemmer blir lagret og gjennomg�tt.");
define_once("_COMPLETEVOTE5","Ingen poengsum valgt - stemme ikke registrert");
define_once("_COMPLETEVOTE6","Kun en stemme per IP-adresse er tillat per $outsidewaitdays dag(er).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

