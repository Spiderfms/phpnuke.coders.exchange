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
define_once("_PREVIOUS","F�reg�ende Sida");
define_once("_NEXT","N�sta Sida");
define_once("_CATEGORY","Kategori");
define_once("_CATEGORIES","Kategorier");
define_once("_LVOTES","r�ster");
define_once("_TOTALVOTES","Totalt antal r�ster:");
define_once("_THEREARE","Det finns");
define_once("_NOMATCHES","Inga tr�ffar hittades p� din fr�ga");
define_once("_SCOMMENTS","Kommentarer");
define_once("_UNKNOWN","Ok�nt");
define_once("_DOWNLOADS","nedladdningar");
define_once("_AUTHORNAME","F�rfattarens Namn");
define_once("_AUTHOREMAIL","F�rfattarens E-postadress");
define_once("_DOWNLOADNAME","Programnamn");
define_once("_ADDTHISFILE","L�gg till denna fil");
define_once("_INBYTES","i bytes");
define_once("_FILESIZE","Filestorlek");
define_once("_VERSION","Version");
define_once("_DESCRIPTION","Beskrivning");
define_once("_AUTHOR","F�rfattare");
define_once("_HOMEPAGE","Hemsida");
define_once("_DOWNLOADNOW","Ladda ner denna fil nu!");
define_once("_RATERESOURCE","Betygs�tt");
define_once("_FILEURL","Fill�nk");
define_once("_ADDDOWNLOAD","L�gg till Nedladdning");
define_once("_DOWNLOADSMAIN","Nedladdningsindex");
define_once("_DOWNLOADCOMMENTS","Nedladdningskommentarer");
define_once("_DOWNLOADSMAINCAT","Nedladdningsavdelningens Huvudkategorier");
define_once("_ADDADOWNLOAD","L�gg till en Ny Nedladdning");
define_once("_DSUBMITONCE","L�gg bara till en unik nedladdning endast en g�ng.");
define_once("_DPOSTPENDING","Alla nedladdningar sparas i databasen i v�ntan p� verifiering.");
define_once("_RESSORTED","Resurser sorteras f�r n�rvarande p�");
define_once("_DOWNLOADSNOTUSER1","Du �r inte en registrerad medlem eller s� har du inte loggat in.");
define_once("_DOWNLOADSNOTUSER2","Om du var registrerad medlem s� kunde du l�gga till filer f�r nedladdning p� denna webbplats.");
define_once("_DOWNLOADSNOTUSER3","Att bli medlem �r en l�tt och snabb process.");
define_once("_DOWNLOADSNOTUSER4","Varf�r kr�ver vi registrering f�r vissa funktioner?");
define_once("_DOWNLOADSNOTUSER5","S� vi kan ge dig h�gsta m�jliga kvalitet p� inneh�llet,");
define_once("_DOWNLOADSNOTUSER6","varje detalj kontrolleras individuellt av v�r personal.");
define_once("_DOWNLOADSNOTUSER7","Vi hoppas kunna erbjuda dig bara v�rdefull information.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Registrera dig som medlem</a>");
define_once("_DOWNLOADALREADYEXT","FEL: Denna URL �r redan listad i databasen!");
define_once("_DOWNLOADNOTITLE","FEL: Du m�ste skriva en TITEL f�r din URL!");
define_once("_DOWNLOADNOURL","FEL: Du m�ste ange en URL f�r din URL!");
define_once("_DOWNLOADNODESC","FEL: Du m�ste ange en BESKRIVNING f�r din URL!");
define_once("_DOWNLOADRECEIVED","Vi har emottagit ditt f�rslag p� Nedladdning. Tack!");
define_once("_NEWDOWNLOADS","Nya Nedladdningar");
define_once("_TOTALNEWDOWNLOADS","Totalt Antal Nya Nedladdningar");
define_once("_DTOTALFORLAST","Totalt Antal Nya Nedladdning f�r de senaste");
define_once("_DBESTRATED","H�gst Betygsatta Nedladdningar - Topp");
define_once("_TRATEDDOWNLOADS","totalt antal betygsatta nedladdningar");
define_once("_SORTDOWNLOADSBY","Sortera Nedladdningar baserat p�");
define_once("_DCATNEWTODAY","Dagens Nya Nedladdningar i den h�r kategorin");
define_once("_DCATLAST3DAYS","De senaste 3 dagarnas Nya Nedladdningar i den h�r kategorin");
define_once("_DCATTHISWEEK","Den h�r veckans Nya Nedladdningar i den h�r kategorin");
define_once("_DDATE1","Datum (Gamla Nedladdningar visas f�rst)");
define_once("_DDATE2","Datum (Nya Nedladdningar visas f�rst)");
define_once("_DOWNLOADPROFILE","Nedladdningsprofil");
define_once("_DOWNLOADRATINGDET","Betygss�ttningsdetaljer");
define_once("_EDITTHISDOWNLOAD","Redigera denna nedladdning");
define_once("_DOWNLOADRATING","Betygss�ttning");
define_once("_DOWNLOADVOTE","R�sta!");
define_once("_REQUESTDOWNLOADMOD","Beg�r Modifiering av Nedladdning");
define_once("_DOWNLOADID","Nedladdnings ID");
define_once("_DLETSDECIDE","�sikter fr�n anv�ndare som dig sj�lv kommer att hj�lpa andra bes�kare att b�ttre v�lja vilka nedladdningar som �r v�rda att ta h�nsyn till.");
define_once("_DRATENOTE4","Du kan se en lista av de <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">h�gst betygsatta resurserna</a>.");
define_once("_DATE","Datum");
define_once("_TO","Till");
define_once("_NEW","Ny");
define_once("_POPULAR","Popul�r");
define_once("_TOPRATED","H�gsta Betyg");
define_once("_ADDITIONALDET","Ytterligare detaljer");
define_once("_EDITORREVIEW","Recension av Redakt�r");
define_once("_REPORTBROKEN","Rapportera Bruten L�nk");
define_once("_AND","och");
define_once("_INDB","i v�r databas");
define_once("_INSTRUCTIONS","Instruktioner");
define_once("_USERANDIP","Anv�ndarnamn och IP sparas, s� missbruka ej systemet.");
define_once("_LDESCRIPTION","Beskrivning: (Max 255 tecken)");
define_once("_CHECKFORIT","Du skrev ingen E-postadress. N�ja, vi kollar din l�nk inom kort.");
define_once("_LASTWEEK","Senaste veckan");
define_once("_LAST30DAYS","Senaste 30 dagarna");
define_once("_1WEEK","1 vecka");
define_once("_2WEEKS","2 veckor");
define_once("_30DAYS","30 dagar");
define_once("_SHOW","Visa");
define_once("_DAYS","dagarna");
define_once("_ADDEDON","Tillagd");
define_once("_RATING","Betyg");
define_once("_DETAILS","Detaljer");
define_once("_OF","av");
define_once("_TVOTESREQ","minst antal r�ster som kr�vs");
define_once("_SHOWTOP","Visa Topp");
define_once("_MOSTPOPULAR","Mest Popul�ra");
define_once("_OFALL","av alla");
define_once("_POPULARITY","Popul�ritet");
define_once("_SELECTPAGE","V�lj Sida");
define_once("_MAIN","Huvudsida");
define_once("_NEWTODAY","Nya Idag");
define_once("_NEWLAST3DAYS","Nya de senaste 3 dagarna");
define_once("_NEWTHISWEEK","Nya denna vecka");
define_once("_POPULARITY1","Popul�ritet (Minst till Mest tr�ffar)");
define_once("_POPULARITY2","Popul�ritet (Mest till Minst tr�ffar)");
define_once("_TITLEAZ","Titel (A till �)");
define_once("_TITLEZA","Titel (� till A)");
define_once("_RATING1","Betyg (L�gst till H�gst)");
define_once("_RATING2","Betyg (H�gst till L�gst)");
define_once("_SEARCHRESULTS4","S�kresultat f�r");
define_once("_USUBCATEGORIES","Underkategorier");
define_once("_TRY2SEARCH","F�rs�k att s�ka");
define_once("_INOTHERSENGINES","i andra s�kmotorer");
define_once("_EDITORIAL","Recension");
define_once("_EDITORIALBY","Recension av");
define_once("_NOEDITORIAL","Ingen recension �r tillg�nglig f�r denna webbplats.");
define_once("_RATETHISSITE","Betygss�tt denna webbplats");
define_once("_ISTHISYOURSITE","�r detta din webbplats?");
define_once("_ALLOWTORATE","Till�t andra bes�kare att betygss�tta den fr�n din webbplats!");
define_once("_OVERALLRATING","Genomsnittligt betyg");
define_once("_TOTALOF","Totalt");
define_once("_USER","Medlemmar");
define_once("_USERAVGRATING","Medlemmars Genomsnittsbetyg");
define_once("_NUMRATINGS","# av Betygs");
define_once("_REGISTEREDUSERS","Medlemmar");
define_once("_NUMBEROFRATINGS","Antal betyg");
define_once("_NOREGUSERSVOTES","Inga medlemmar har r�stat");
define_once("_BREAKDOWNBYVAL","F�rdelning av betyg baserat p� v�rde");
define_once("_LTOTALVOTES","totalt antal r�ster");
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
define_once("_HTMLCODE3","Genom att anv�nda detta formul�r s� till�ter du dina bes�kare att direkt fr�n din webbplats betygss�tta och f� betyget direkt applicerat h�r. Ovanst�ende formul�r �r 'avst�ngt', men f�ljande HTML kod kommer att fungera om du bara klipper ut och klistrar in det p� dinn webbsida. HTML koden visas nedan:");
define_once("_PROMOTE05","Tack! och lycka till med dina betyg!");
define_once("_STAFF","Staff");
define_once("_THANKSBROKEN","Tack f�r att du hj�lper till att bibeh�lla detta l�nkbiblioteks integritet.");
define_once("_SECURITYBROKEN","Av s�kerhetssk�l s� sparas ditt anv�ndarnamn och IP-adress tempor�rt.");
define_once("_THANKSFORINFO","Tack f�r informationen.");
define_once("_LOOKTOREQUEST","Vi tar en titt p� din beg�ran inom kort.");
define_once("_SENDREQUEST","Skicka Beg�ran");
define_once("_THANKSTOTAKETIME","Tack f�r att du tog dig tid att betygss�tta en webbplats h�r p�");
define_once("_RETURNTO","�terv�nd till");
define_once("_RATENOTE1","Betygss�tt inte samma plats mer �n en g�ng s� �r du sn�ll.");
define_once("_RATENOTE2","Skalan l�per fr�n 1 till 10, d�r 1 �r d�lig och 10 �r superb.");
define_once("_RATENOTE3","Var g�rna objektiv i din bed�ming, om alla f�r en 1:a eller en 10:a s� �r inte betygen s� s�rdeles n�dv�ndiga");
define_once("_RATENOTE5","Betygss�tt inte din egen eller en motst�ndares webbplats.");
define_once("_YOUAREREGGED","Du �r medlem och �r inloggad.");
define_once("_FEELFREE2ADD","Kommentera g�rna denna webbplats.");
define_once("_YOUARENOTREGGED","Du �r inte medlem eller �r inte inloggad.");
define_once("_IFYOUWEREREG","Om du var medlem s� skulle du kunna kommentera denna webbplats.");
define_once("_TITLE","Titel");
define_once("_MODIFY","Modifiera");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

