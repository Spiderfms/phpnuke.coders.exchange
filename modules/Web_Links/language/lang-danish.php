<?php
global $sitename;
if(!isset($anonwaitdays)) { $anonwaitdays = 0; }
if(!isset($outsidewaitdays)) { $outsidewaitdays = 0; }


/**************************************************************************/
/* PHP-NUKE: Advanced Content Management System                           */
/* ============================================                           */
/* Dato: 6. september 2002                                                */
/* PHP-NUKE Version: 6.0                                                  */
/* Denne sprog-fil er blevet oversat til dansk fra engelsk af:            */
/*                                                                        */
/* Navn:	Christian Botved Poulsen                                      */
/* E-mail:	Christian_B_P@Get2net.dk                                      */
/* ICQ:	155265588                                                     */
/* Webside:	www.Sjove-Film.dk - HitsMaskinen.dk - FilmCentralen.dk        */
/*                                                                        */
/* Hvis de finder fejl m� og skal de sende en e-mail eller icq til mig!   */
/**************************************************************************/

define_once("_URL","Internetadresse");
define_once("_PREVIOUS","Forrige side");
define_once("_NEXT","N�ste side");
define_once("_YOURNAME","Dit navn");
define_once("_CATEGORY","Kategori");
define_once("_CATEGORIES","Kategorier");
define_once("_LVOTES","stemmer");
define_once("_TOTALVOTES","Antal stemmer:");
define_once("_LINKTITLE","Titel p� link");
define_once("_HITS","Hits");
define_once("_THEREARE","Der er");
define_once("_NOMATCHES","S�gningen gave ingen resultater");
define_once("_SCOMMENTS","Kommentarer");
define_once("_DESCRIPTION","Beskrivelse");
define_once("_ONLYREGUSERSMODIFY","Kun oprettede brugere kan foresl� �ndringer til downloads. V�r venlig at logge ind eller bliv oprettet som bruger.<a href=\"modules.php?name=Your_Account\">Log ind eller bliv bruger</a>.");
define_once("_DATE","Dato");
define_once("_TO","Til");
define_once("_ADDLINK","Foresl� nyt link");
define_once("_NEW","Nye");
define_once("_POPULAR","Popul�re");
define_once("_TOPRATED","Bedste");
define_once("_RANDOM","Pr�v lykken");
define_once("_LINKSMAIN","Oversigt over links");
define_once("_LINKCOMMENTS","Linkkommentarer");
define_once("_ADDITIONALDET","Yderligere oplysninger");
define_once("_EDITORREVIEW","Anmeldelse");
define_once("_REPORTBROKEN","Anmeld et �delagt link");
define_once("_LINKSMAINCAT","Links hovedkategorier");
define_once("_AND","og");
define_once("_INDB","i vores database");
define_once("_ADDALINK","Foresl� nyt link");
define_once("_INSTRUCTIONS","Vejledning");
define_once("_SUBMITONCE","Indsend kun et link en gang.");
define_once("_POSTPENDING","Alle links bliver kontrolleret f�r de bliver publiceret.");
define_once("_USERANDIP","Brugernavn og IP-adresse bliver registreret, s� v�r venlig ikke at misbruge systemet.");
define_once("_PAGETITLE","Navn");
define_once("_PAGEURL","Internetadresse");
define_once("_YOUREMAIL","Din e-mailadresse");
define_once("_LDESCRIPTION","Beskrivelse: (maks 255 tegn)");
define_once("_ADDURL","Send");
define_once("_LINKSNOTUSER1","Du er ikke oprettet som bruger eller ogs� er du ikke logget ind.");
define_once("_LINKSNOTUSER2","Hvis du var oprettet som bruger kunne du oprette links og downloads her p� websitet.");
define_once("_LINKSNOTUSER3","At blive oprettet som bruger er hurtigt og nemt.");
define_once("_LINKSNOTUSER4","Hvorfor kr�ver vi registrering for at opn� adgang til dele af vores site?");
define_once("_LINKSNOTUSER5","Fordi vi s� kan tilbyde dig det bedst mulige kvalitetsindhold,");
define_once("_LINKSNOTUSER6","alt indhold bliver individuelt gennemg�et og godkendt af vores team.");
define_once("_LINKSNOTUSER7","Vi �nsker udelukkende at kunne tilbyde dig kvalitetsindhold.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Opret dig som bruger</a>");
define_once("_LINKALREADYEXT","FEJL: Denne internetadresse er allerede listet i vores database!");
define_once("_LINKNOTITLE","FEJL: Du skal angive en titel til internetadressen!");
define_once("_LINKNOURL","FEJL: Du skal angive en titel til internetadressen!");
define_once("_LINKNODESC","FEJL: Du skal skrve en beskrivelse for internetadressen!");
define_once("_LINKRECEIVED","Vi har modtaget dit forslag til link. Tak!");
define_once("_EMAILWHENADD","Du vil modtage en e-mail n�r det er godkendt.");
define_once("_CHECKFORIT","Du skrev ikke en e-mailadresse. Vi vil alligevel gennemse dit forslag snarest.");
define_once("_NEWLINKS","Nye links");
define_once("_TOTALNEWLINKS","Antal nye links");
define_once("_LASTWEEK","Sidste uge");
define_once("_LAST30DAYS","Sidste 30 dage");
define_once("_1WEEK","1 uge");
define_once("_2WEEKS","2 uger");
define_once("_30DAYS","30 dage");
define_once("_SHOW","Vis");
define_once("_TOTALFORLAST","Antal nye links de(n) sidste");
define_once("_DAYS","dage");
define_once("_ADDEDON","Oprettet");
define_once("_RATING","Rating");
define_once("_RATESITE","Rate dette website");
define_once("_DETAILS","Yderligere oplysninger");
define_once("_BESTRATED","Bedst ratede links");
define_once("_OF","af");
define_once("_TRATEDLINKS","antal ratede links");
define_once("_TVOTESREQ","stemmer er p�kr�vet som minimum");
define_once("_SHOWTOP","Vis bedste");
define_once("_MOSTPOPULAR","Mest popul�re - Top");
define_once("_OFALL","af alle");
define_once("_SORTLINKSBY","Sorter links efter");
define_once("_SITESSORTED","Websites sorteret efter");
define_once("_POPULARITY","Popularitet");
define_once("_SELECTPAGE","V�lg side");
define_once("_MAIN","Hovedkategori");
define_once("_NEWTODAY","Nye i dag");
define_once("_NEWLAST3DAYS","Nye de sidste tre dage");
define_once("_NEWTHISWEEK","Nye denne uge");
define_once("_CATNEWTODAY","Nye links i denne kategori oprettet i dag");
define_once("_CATLAST3DAYS","Nye links i denne kategori oprettet indenfor de sidste tre dage");
define_once("_CATTHISWEEK","Nye links i denne kategori oprettet indenfor den sidste uge");
define_once("_POPULARITY1","Popularitet (F�rrest til flest hits)");
define_once("_POPULARITY2","Popularitet (Flest til f�rrest hits)");
define_once("_TITLEAZ","Titel (A til �)");
define_once("_TITLEZA","Titel (� til A)");
define_once("_DATE1","Dato (Gamle links f�rst)");
define_once("_DATE2","Dato (Nye links f�rst)");
define_once("_RATING1","Rating (Laveste score til h�jeste score)");
define_once("_RATING2","Rating (H�jeste score til laveste score)");
define_once("_SEARCHRESULTS4","S�geresultater for");
define_once("_USUBCATEGORIES","Underkategorier");
define_once("_LINKS","Links");
define_once("_TRY2SEARCH","Pr�v at s�ge");
define_once("_INOTHERSENGINES","i andre s�gemaskiner");
define_once("_EDITORIAL","Redaktionel leder");
define_once("_LINKPROFILE","Linkprofil");
define_once("_EDITORIALBY","Anmeldelse af");
define_once("_NOEDITORIAL","Ingen anmeldelse er tilg�ngeligt for dette website.");
define_once("_VISITTHISSITE","Bes�g siden");
define_once("_RATETHISSITE","Rate denne side");
define_once("_ISTHISYOURSITE","Er dette dit website?");
define_once("_ALLOWTORATE","Tillad andre at rate den fra dit website!");
define_once("_LINKRATINGDET","Ratingoplysninger for link");
define_once("_OVERALLRATING","Samlet rating");
define_once("_TOTALOF","Antal af");
define_once("_USER","Bruger");
define_once("_USERAVGRATING","Brugernes gennemsnitlige rating");
define_once("_NUMRATINGS","# af ratings");
define_once("_EDITTHISLINK","Redig�r dette link");
define_once("_REGISTEREDUSERS","Registerede brugere");
define_once("_NUMBEROFRATINGS","Antal ratings");
define_once("_NOREGUSERSVOTES","Ingen registrede brugerstemmer");
define_once("_BREAKDOWNBYVAL","Nedbryd ratings efter v�rdi");
define_once("_LTOTALVOTES","Antal stemmer");
define_once("_LINKRATING","Linksrating");
define_once("_HIGHRATING","H�je ratings");
define_once("_LOWRATING","Lave ratings");
define_once("_NUMOFCOMMENTS","Antal kommentarer");
define_once("_WEIGHNOTE","* Note: Vi v�gter registrede mod uregistrede brugeres ratings.");
define_once("_NOUNREGUSERSVOTES","Ingen uregistrede brugerstemmer.");
define_once("_WEIGHOUTNOTE","Note: Vi v�gter registrede mod udefrakommende stemmeratings");
define_once("_NOOUTSIDEVOTES","Ingen udefrakommende stemmer");
define_once("_OUTSIDEVOTERS","Udefrakommende stemmer");
define_once("_UNREGISTEREDUSERS","Uregistrerede brugere");
define_once("_PROMOTEYOURSITE","Reklam�r for dit website");
define_once("_PROMOTE01","M�ske vil du v�re interesseret i muligheden for at 'Rate et Website' p� din eget site. Vi har flere muligheder til r�dighed. De tillader, at du kan placere et billede (eller en ratingform) p� dit website for at for�ge antallet af stemmer som dit website modtager. V�lg mellem de forskellige muligheder nedenfor:");
define_once("_TEXTLINK","Tekstlink");
define_once("_PROMOTE02","en mulighed er at linke via et simpelt tekstlink:");
define_once("_HTMLCODE1","HTML-koden du skal bruger er som f�lger:");
define_once("_THENUMBER","Nummeret");
define_once("_IDREFER","i HTML-kilden refererer til dit sites ID-nummer i $sitename-databasen. V�r sikker p�, at nummeret er tilstede.");
define_once("_BUTTONLINK","Knaplink");
define_once("_PROMOTE03","Hvis du er p� udkig efter noget mere end bare et simpelt tekstlink, kan du bruge et lille knaplink:");
define_once("_RATEIT","Rate dette site!");
define_once("_HTMLCODE2","Kildekoden for ovenst�ende knap er:");
define_once("_REMOTEFORM","Udefrakommende ratingform");
define_once("_PROMOTE04","Vi tillader ikke snyd og vi holder �je med fors�g herp�. Hvis vi opdager snyd vil linket blive slettet fra databasen. Med det i baghovedet s� ser den nuv�rende den eksterne ratingform ud s�ledes:");
define_once("_VOTE4THISSITE","Stem p� denne side!");
define_once("_LINKVOTE","Stem!");
define_once("_HTMLCODE3","Hvis du bruger denne ratingform kan dine brugere stemme p� dit website i vores database direkte fra dit eget site. Ratingen vil blive gemt i vors database. Ovenst�ende form er deaktiveret, men den nedenst�ende kildekode virker hvis du laver kopi�r og s�t ind i din side. Husk, at tallet 14 angiver dit sites nummer i vores database. Kontroll�r, at det passer!");
define_once("_PROMOTE05","Held og lykke med dine ratings!");
define_once("_STAFF","-Teamet");
define_once("_THANKSBROKEN","Tak for din hj�lp!");
define_once("_THANKSFORINFO","Tak for oplysningerne.");
define_once("_LOOKTOREQUEST","Vi vil snarest gennemse din forslag.");
define_once("_REQUESTLINKMOD","Foreslag om �ndring af link");
define_once("_LINKID","Link ID");
define_once("_SENDREQUEST","Send anmodning");
define_once("_THANKSTOTAKETIME","Tak fordi du tog dig tid til at rate et site her hos");
define_once("_LETSDECIDE","Tilbagemeldinger fra brugere som dig selv, er med til at hj�lpe andre bes�gende med at v�lge hvilke links, de skal klikke p�.");
define_once("_RETURNTO","Tilbage til");
define_once("_RATENOTE1","Stem ikke p� det samme mere end en gang.");
define_once("_RATENOTE2","Skalaen er 1 til 10, hvor 1 er det laveste og 10 det h�jeste.");
define_once("_RATENOTE3","V�r s� objektiv som muligt i din stemmeafgivelse, hvis alle modtager 1 eller 10, kan ratings ikke bruges til noget.");
define_once("_RATENOTE4","Du kan se en liste med de <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">bedst ratede links</a>.");
define_once("_RATENOTE5","Stem ikke p� din egen side eller p� et konkurrerende site.");
define_once("_YOUAREREGGED","Du er oprettet som bruger og er logget ind.");
define_once("_FEELFREE2ADD","Skriv en kommentar om denne side hvis du har lyst.");
define_once("_YOUARENOTREGGED","Du er ikke oprettet som bruger eller ogs� er du ikke logget ind.");
define_once("_IFYOUWEREREG","Hvis du var oprettet som bruger kunne du komme med kommentarer p� dette website.");
define_once("_WEBLINKS","Administration af Links");
define_once("_TITLE","Titel");
define_once("_MODIFY","�ndring");
define_once("_COMPLETEVOTE1","Tak for deres stemme!");
define_once("_COMPLETEVOTE2","De har allerede stemt p� denne download indenfor $anonwaitdays dage");
define_once("_COMPLETEVOTE3","Stem kun en gang p� en download.<br>Alle stemmer gemmes og gennemses.");
define_once("_COMPLETEVOTE4","De kan ikke stemme p� et download de selv er kommet med.<br>Alle stemmer gemmes og gennemses.");
define_once("_COMPLETEVOTE5","Der er ingen stemme valgt - der bliver derfor ikke afgivet nogen stemme");
define_once("_COMPLETEVOTE6","Det er kun muligt at stemme en gang pr. IP adresse hver $outsidewaitdays dag(e).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

