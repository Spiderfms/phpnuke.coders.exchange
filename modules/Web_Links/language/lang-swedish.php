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
define_once("_PREVIOUS","F�reg�ende Sida");
define_once("_NEXT","N�sta Sida");
define_once("_YOURNAME","Ditt Namn");
define_once("_CATEGORY","Kategori");
define_once("_CATEGORIES","Kategorier");
define_once("_LVOTES","r�ster");
define_once("_TOTALVOTES","Totalt antal r�ster:");
define_once("_LINKTITLE","Titel p� l�nken");
define_once("_HITS","Tr�ffar");
define_once("_THEREARE","Det finns");
define_once("_NOMATCHES","Inga tr�ffar hittades p� din fr�ga");
define_once("_SCOMMENTS","Kommentarer");
define_once("_DESCRIPTION","Beskrivning");
define_once("_ONLYREGUSERSMODIFY","Bara registrerade medlemmar kan f�resl� modifieringar. V�nligen <a href=\"modules.php?name=Your_Account\">registrerad dig eller logga in</a>.");
define_once("_DATE","Datum");
define_once("_TO","Till");
define_once("_ADDLINK","Addera L�nk");
define_once("_NEW","Ny");
define_once("_POPULAR","Popul�r");
define_once("_TOPRATED","H�gsta Betyg");
define_once("_RANDOM","Slumpm�ssig");
define_once("_LINKSMAIN","Huvudsida");
define_once("_LINKCOMMENTS","L�nkkommentarer");
define_once("_ADDITIONALDET","Ytterligare detaljer");
define_once("_EDITORREVIEW","Recension av Redakt�r");
define_once("_REPORTBROKEN","Rapportera Bruten L�nk");
define_once("_LINKSMAINCAT","Webbl�nkare Huvudkategorier");
define_once("_AND","och");
define_once("_INDB","i v�r databas");
define_once("_ADDALINK","L�gg till en ny l�nk");
define_once("_INSTRUCTIONS","Instruktioner");
define_once("_SUBMITONCE","Skicka bara in en l�nk en g�ng.");
define_once("_POSTPENDING","Alla l�nkar skrivs in i databasen i v�ntan p� verifiering.");
define_once("_USERANDIP","Anv�ndarnamn och IP sparas, s� missbruka ej systemet.");
define_once("_PAGETITLE","Webbplatsens Titel");
define_once("_PAGEURL","Webbplatsens Adress");
define_once("_YOUREMAIL","Din E-postadress");
define_once("_LDESCRIPTION","Beskrivning: (Max 255 tecken)");
define_once("_ADDURL","L�gg till denna adress");
define_once("_LINKSNOTUSER1","Du �r inte medlem eller har inte loggat in.");
define_once("_LINKSNOTUSER2","Om du var medlem skulle du kunna l�gga till l�nkar p� denna webbplats.");
define_once("_LINKSNOTUSER3","Att bli medlem �r en snabb och enkel process.");
define_once("_LINKSNOTUSER4","Varf�r kr�ver vi medlemsskap f�r vissa funktioner?");
define_once("_LINKSNOTUSER5","Det �r f�r att kunna erbjuda dig h�gsta m�jliga kvalitet p� inneh�llet,");
define_once("_LINKSNOTUSER6","varje sak kontrolleras individuellt och godk�nns av v�r personal.");
define_once("_LINKSNOTUSER7","Vi hoppas att vi ska kunna erbjuda dig bara v�rdefull information.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Bli medlem</a>");
define_once("_LINKALREADYEXT","FEL: Denna adress finns redan listad i v�r databas!");
define_once("_LINKNOTITLE","FEL: Du m�ste skriva en titel p� din adress!");
define_once("_LINKNOURL","FEL: En l�nk utan adress �r inte s� nyttig!");
define_once("_LINKNODESC","FEL: Du m�ste beskriva din adress!");
define_once("_LINKRECEIVED","Vi har tagit emot ditt l�nkf�rslag. Tack!");
define_once("_EMAILWHENADD","Du f�r ett E-postmeddelande n�r den �r godk�nd.");
define_once("_CHECKFORIT","Du skrev ingen E-postadress. N�ja, vi kollar din l�nk inom kort.");
define_once("_NEWLINKS","Nya L�nkar");
define_once("_TOTALNEWLINKS","Totalt antal nya l�nkar");
define_once("_LASTWEEK","Senaste veckan");
define_once("_LAST30DAYS","Senaste 30 dagarna");
define_once("_1WEEK","1 vecka");
define_once("_2WEEKS","2 veckor");
define_once("_30DAYS","30 dagar");
define_once("_SHOW","Visa");
define_once("_TOTALFORLAST","Totalt antal nya l�nkar f�r de senaste");
define_once("_DAYS","dagarna");
define_once("_ADDEDON","Tillagd");
define_once("_RATING","Betyg");
define_once("_RATESITE","Betygss�tt denna webbplats");
define_once("_DETAILS","Detaljer");
define_once("_BESTRATED","H�gst betygssatta l�nkar");
define_once("_OF","av");
define_once("_TRATEDLINKS","totalt antal betygssatta l�nkar");
define_once("_TVOTESREQ","minst antal r�ster som kr�vs");
define_once("_SHOWTOP","Visa Topp");
define_once("_MOSTPOPULAR","Mest Popul�ra");
define_once("_OFALL","av alla");
define_once("_SORTLINKSBY","Sortera L�nkar efter");
define_once("_SITESSORTED","Webbplatserna sorteras f�r n�rvarande efter");
define_once("_POPULARITY","Popul�ritet");
define_once("_SELECTPAGE","V�lj Sida");
define_once("_MAIN","Huvudsida");
define_once("_NEWTODAY","Nya Idag");
define_once("_NEWLAST3DAYS","Nya de senaste 3 dagarna");
define_once("_NEWTHISWEEK","Nya denna vecka");
define_once("_CATNEWTODAY","Nya l�nkar i den h�r kategorin tillagda idag");
define_once("_CATLAST3DAYS","Nya l�nkar i den h�r kategorin tillagda de senaste 3 dagarna");
define_once("_CATTHISWEEK","Nya l�nkar i den h�r kategorin tillagda denna vecka");
define_once("_POPULARITY1","Popul�ritet (Minst till Mest tr�ffar)");
define_once("_POPULARITY2","Popul�ritet (Mest till Minst tr�ffar)");
define_once("_TITLEAZ","Titel (A till �)");
define_once("_TITLEZA","Titel (� till A)");
define_once("_DATE1","Datum (Gamla l�nkar visas f�rst)");
define_once("_DATE2","Datum (Nya l�nkar visas f�rst)");
define_once("_RATING1","Betyg (L�gst till H�gst)");
define_once("_RATING2","Betyg (H�gst till L�gst)");
define_once("_SEARCHRESULTS4","S�kresultat f�r");
define_once("_USUBCATEGORIES","Underkategorier");
define_once("_LINKS","L�nkar");
define_once("_TRY2SEARCH","F�rs�k att s�ka");
define_once("_INOTHERSENGINES","i andra s�kmotorer");
define_once("_EDITORIAL","Recension");
define_once("_LINKPROFILE","L�nkprofil");
define_once("_EDITORIALBY","Recension av");
define_once("_NOEDITORIAL","Ingen recension �r tillg�nglig f�r denna webbplats.");
define_once("_VISITTHISSITE","Bes�k denna webbplats");
define_once("_RATETHISSITE","Betygss�tt denna webbplats");
define_once("_ISTHISYOURSITE","�r detta din webbplats?");
define_once("_ALLOWTORATE","Till�t andra bes�kare att betygss�tta den fr�n din webbplats!");
define_once("_LINKRATINGDET","Betygss�ttningsdetaljer");
define_once("_OVERALLRATING","Genomsnittligt betyg");
define_once("_TOTALOF","Totalt");
define_once("_USER","Medlemmar");
define_once("_USERAVGRATING","Medlemmars Genomsnittsbetyg");
define_once("_NUMRATINGS","# av Betygs");
define_once("_EDITTHISLINK","Redigera denna l�nk");
define_once("_REGISTEREDUSERS","Medlemmar");
define_once("_NUMBEROFRATINGS","Antal betyg");
define_once("_NOREGUSERSVOTES","Inga medlemmar har r�stat");
define_once("_BREAKDOWNBYVAL","F�rdelning av betyg baserat p� v�rde");
define_once("_LTOTALVOTES","totalt antal r�ster");
define_once("_LINKRATING","L�nkbetyg");
define_once("_HIGHRATING","H�gsta betyg");
define_once("_LOWRATING","L�gsta betyg");
define_once("_NUMOFCOMMENTS","Antal kommentarer");
define_once("_WEIGHNOTE","* Obs: Denna webbplats v�ger medlemmars betyg gentemot icke-medlemmars betyg");
define_once("_NOUNREGUSERSVOTES","Inga icke-medlemmar har r�stat");
define_once("_WEIGHOUTNOTE","* Obs: Denna webbplats v�ger medlemmars betyg genotemot betyg fr�n andra webbplatser");
define_once("_NOOUTSIDEVOTES","Inga betyg fr�n andra webbplatser");
define_once("_OUTSIDEVOTERS","Betyg fr�n andra webbplatser");
define_once("_UNREGISTEREDUSERS","Icke registerade medlemmar");
define_once("_PROMOTEYOURSITE","Marknadsf�r Din Webbplats");
define_once("_PROMOTE01","Du kanske kan vara intresserad av de olika 'Betygs�ttningsm�jligheter' vi har att tillg�. Dessa till�ter dig ett l�gga en bild (eller till och med ett betygsformul�r) p� din webbplats f�r att �ka antalet betygss�ttningar p� din egen webbplats. V�lj en av m�jligheterna nedan:");
define_once("_TEXTLINK","Textl�nk");
define_once("_PROMOTE02","Ett s�tt att l�nka till betygsformul�ret �r genom en enkel textl�nk:");
define_once("_HTMLCODE1","HTML koden du b�r anv�nda i dett fall �r f�ljande:");
define_once("_THENUMBER","Numret");
define_once("_IDREFER","i HTML koden refererar till din webbplats ID nummer i $sitename databas. Se till att detta nummer finns med.");
define_once("_BUTTONLINK","Knappl�nk");
define_once("_PROMOTE03","Om du vill ha lite mer �n en vanlig textl�nk, s� kanske du vill ha en liten knapp som l�nk ist�llet:");
define_once("_RATEIT","Betygss�tt denna webbplats!");
define_once("_HTMLCODE2","HTML koden f�r ovanst�ende knapp �r:");
define_once("_REMOTEFORM","Betygsformul�r");
define_once("_PROMOTE04","Om du fuskar med denna s� tar vi bort din l�nk. Genom att ha sagt detta s� �r det s� h�r formul�ret ser ut.");
define_once("_VOTE4THISSITE","Betygss�tt denna webbplats!");
define_once("_LINKVOTE","R�sta!");
define_once("_HTMLCODE3","Genom att anv�nda detta formul�r s� till�ter du dina bes�kare att direkt fr�n din webbplats betygss�tta och f� betyget direkt applicerat h�r. Ovanst�ende formul�r �r 'avst�ngt', men f�ljande HTML kod kommer att fungera om du bara klipper ut och klistrar in det p� dinn webbsida. HTML koden visas nedan:");
define_once("_PROMOTE05","Tack! och lycka till med dina betyg!");
define_once("_STAFF","Staff");
define_once("_THANKSBROKEN","Tack f�r att du hj�lper till att bibeh�lla detta l�nkbiblioteks integritet.");
define_once("_THANKSFORINFO","Tack f�r informationen.");
define_once("_LOOKTOREQUEST","Vi tar en titt p� din beg�ran inom kort.");
define_once("_REQUESTLINKMOD","Beg�ran om L�nkmodifikation");
define_once("_LINKID","L�nk ID");
define_once("_SENDREQUEST","Skicka Beg�ran");
define_once("_THANKSTOTAKETIME","Tack f�r att du tog dig tid att betygss�tta en webbplats h�r p�");
define_once("_LETSDECIDE","�sikter fr�n m�nniskor som dig sj�lv kommer att hj�lpa v�ra bes�kare att b�ttre best�mma vilka l�nkar som �r v�rda ett bes�k.");
define_once("_RETURNTO","�terv�nd till");
define_once("_RATENOTE1","Betygss�tt inte samma plats mer �n en g�ng s� �r du sn�ll.");
define_once("_RATENOTE2","Skalan l�per fr�n 1 till 10, d�r 1 �r d�lig och 10 �r superb.");
define_once("_RATENOTE3","Var g�rna objektiv i din bed�ming, om alla f�r en 1:a eller en 10:a s� �r inte betygen s� s�rdeles n�dv�ndiga");
define_once("_RATENOTE4","Du kan se en lista �ver <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">De H�gst Betygssatta Webbplatserna</a>.");
define_once("_RATENOTE5","Betygss�tt inte din egen eller en motst�ndares webbplats.");
define_once("_YOUAREREGGED","Du �r medlem och �r inloggad.");
define_once("_FEELFREE2ADD","Kommentera g�rna denna webbplats.");
define_once("_YOUARENOTREGGED","Du �r inte medlem eller �r inte inloggad.");
define_once("_IFYOUWEREREG","Om du var medlem s� skulle du kunna kommentera denna webbplats.");
define_once("_WEBLINKS","Webbl�nkar");
define_once("_TITLE","Titel");
define_once("_MODIFY","Modifiera");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

