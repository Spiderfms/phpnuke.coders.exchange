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
define_once("_PREVIOUS","P�edchoz� str�nka");
define_once("_NEXT","Dal�� str�nka");
define_once("_CATEGORY","Kategorie");
define_once("_CATEGORIES","Kategorie");
define_once("_LVOTES","hlasovalo");
define_once("_TOTALVOTES","Celkem hlasovalo:");
define_once("_THEREARE","V sou�asn� dob� je");
define_once("_NOMATCHES","Nebyl nalezen z�znam na v� po�adavek");
define_once("_SCOMMENTS","Koment��e");
define_once("_UNKNOWN","Nezn�m�");
define_once("_DOWNLOADS","sta�en�");
define_once("_AUTHORNAME","Jm�no autora");
define_once("_AUTHOREMAIL","Autor�v e-mail");
define_once("_DOWNLOADNAME","N�zev souboru");
define_once("_ADDTHISFILE","P�idat tento soubor");
define_once("_INBYTES","v bytech");
define_once("_FILESIZE","Velikost souboru");
define_once("_VERSION","Verze");
define_once("_DESCRIPTION","Popis");
define_once("_AUTHOR","Autor");
define_once("_HOMEPAGE","Domovsk� str�nka");
define_once("_DOWNLOADNOW","Za��t stahovat tento soubor!");
define_once("_RATERESOURCE","Ohodno�te tento produkt");
define_once("_FILEURL","Adresa souboru");
define_once("_ADDDOWNLOAD","P�idat ke sta�en�");
define_once("_DOWNLOADSMAIN","Hlavn� kategorie");
define_once("_DOWNLOADCOMMENTS","Koment��e");
define_once("_DOWNLOADSMAINCAT","Hlavn� kategorie");
define_once("_ADDADOWNLOAD","P�idat soubor ke sta�en�");
define_once("_DSUBMITONCE","Po�lete soubor pouze jednou.");
define_once("_DPOSTPENDING","V�echny poslan� soubory mus� b�t ov��eny.");
define_once("_RESSORTED","Soubory jsou moment�ln� �azeny");
define_once("_DOWNLOADSNOTUSER1","Nejste registrovan� u�ivatel nebo nejste p�ihl�en(a).");
define_once("_DOWNLOADSNOTUSER2","Pokud se zaregistrujete, m��ete p�id�vat soubory ke sta�en� na tomto webu.");
define_once("_DOWNLOADSNOTUSER3","St�t se registrovan�m u�ivatelem je snadn� a rychl� proces..");
define_once("_DOWNLOADSNOTUSER4","Pro� vy�adujeme registraci?");
define_once("_DOWNLOADSNOTUSER5","Chceme v�m poskytnou slu�by nejvy��� kvality,");
define_once("_DOWNLOADSNOTUSER6","ka�d� polo�ka je samostan� zkontrolov�na a odsouhlasena na�imi spolupracovn�ky.");
define_once("_DOWNLOADSNOTUSER7","Douf�me, �e v�m budeme poskytovat pouze hodnotn� informace.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Zalo�it ��et</a>");
define_once("_DOWNLOADALREADYEXT","CHYBA: This URL is already listed in the Database!");
define_once("_DOWNLOADNOTITLE","CHYBA: Mus�te zadat n�zev souboru ke sta�en�!");
define_once("_DOWNLOADNOURL","CHYBA: Mus�te zadat adresu souboru ke sta�en�!");
define_once("_DOWNLOADNODESC","CHYBA: Mus�te zadat popis souboru ke sta�en�!");
define_once("_DOWNLOADRECEIVED","P�ijali jsme v� odkaz ke zpracov�n�. D�ky!");
define_once("_NEWDOWNLOADS","nov�ch soubor�");
define_once("_DTOTALFORLAST","Celkem nov�ch soubor� za posledn�ch ");
define_once("_DBESTRATED","Top");
define_once("_TRATEDDOWNLOADS","v�ech hodnocen�ch soubor�");
define_once("_SORTDOWNLOADSBY","T��dit podle");
define_once("_DCATNEWTODAY","Nov� dnes");
define_once("_DCATLAST3DAYS","Nov� za posledn� 3 dny");
define_once("_DCATTHISWEEK","Nov� za tento t�den");
define_once("_DDATE1","data (nejd��ve star��)");
define_once("_DDATE2","data (nejd��ve nov�j��)");
define_once("_DOWNLOADPROFILE","Profil");
define_once("_DOWNLOADRATINGDET","Detaily hodnocen�");
define_once("_EDITTHISDOWNLOAD","Upravit tento soubor");
define_once("_DOWNLOADRATING","Hodnocen�");
define_once("_DOWNLOADVOTE","Hlasovat!");
define_once("_REQUESTDOWNLOADMOD","Po�adavek na �pravu souboru pro sta�en�");
define_once("_DOWNLOADID","ID souboru ke sta�en�");
define_once("_DLETSDECIDE","Hlasov�n�m pom�h�te ostatn�m u�ivatel�m p�i rozhodov�n� kter� soubor st�hnout.");
define_once("_DATE","Datum");
define_once("_TO","Komu");
define_once("_NEW","Nov�");
define_once("_POPULAR","Popul�rn�");
define_once("_TOPRATED","Nejl�pe hodnocen�");
define_once("_ADDITIONALDET","Detaily");
define_once("_EDITORREVIEW","Kontroloval");
define_once("_REPORTBROKEN","Zpr�va o neplatn�m odkazu");
define_once("_AND","a");
define_once("_INDB","v na�� datab�zi");
define_once("_INSTRUCTIONS","Instrukce");
define_once("_USERANDIP","P�ezd�vka a IP adresa jsou zaznamen�v�ny, net�rejte pros�m n� syst�m.");
define_once("_LDESCRIPTION","Popis: (max. 255 znak�)");
define_once("_CHECKFORIT","Nepi�te n�m e-maily. V� odkaz bude prov��en co nejd��ve.");
define_once("_LASTWEEK","Posledn� t�den");
define_once("_LAST30DAYS","Posledn�ch 30 dn�");
define_once("_1WEEK","1 t�den");
define_once("_2WEEKS","2 t�dny");
define_once("_30DAYS","30 dn�");
define_once("_SHOW","Uk�zat");
define_once("_DAYS","dn�");
define_once("_ADDEDON","P�id�no dne:");
define_once("_RATING","Hodnocen�");
define_once("_DETAILS","Detaily");
define_once("_OF","ze");
define_once("_TVOTESREQ","je minimum po�adovan�ch hlas�");
define_once("_SHOWTOP","Uk�zat TOP");
define_once("_MOSTPOPULAR","Nejpopul�rn�j�� - TOP");
define_once("_OFALL","ze v�ech");
define_once("_POPULARITY","Obl�ben�");
define_once("_SELECTPAGE","Vybrat str�nku");
define_once("_MAIN","Hlavn�");
define_once("_NEWTODAY","Nov� dnes");
define_once("_NEWLAST3DAYS","Nov� za posledn� 3 dny");
define_once("_NEWTHISWEEK","Nov� za tento t�den");
define_once("_POPULARITY1","Obl�benost� (od nejm�n� po nejv�ce)");
define_once("_POPULARITY2","Obl�benost� (od nejv�ce po nejm�n�)");
define_once("_TITLEAZ","N�zvu (od A do Z)");
define_once("_TITLEZA","N�zvu (od Z do A)");
define_once("_RATING1","Hodnocen� (od nejni���ho k nejvy���mu)");
define_once("_RATING2","Hodnocen� (od nejvy���ho k nejni���mu)");
define_once("_SEARCHRESULTS4","V�sledky hled�n� pro heslo");
define_once("_USUBCATEGORIES","Subkategorie");
define_once("_TRY2SEARCH","Pokuste se naj�t");
define_once("_INOTHERSENGINES","v dal��ch vyhled�va��ch");
define_once("_EDITORIAL","�vodn�k");
define_once("_EDITORIALBY","�vodn�k napsal");
define_once("_NOEDITORIAL","Nen� dostupn� ��dn� koment�� k tomuto webu.");
define_once("_RATETHISSITE","Hodnotit tento web");
define_once("_ISTHISYOURSITE","Je to v� web?");
define_once("_ALLOWTORATE","Umo�n�te va�im u�ivatel�m hodnotit p��mo z va�� str�nky!");
define_once("_OVERALLRATING","Celkov� hodnocen�");
define_once("_TOTALOF","Celkem z");
define_once("_USER","u�ivatel");
define_once("_USERAVGRATING","pr�m�rn� hodnocen�");
define_once("_NUMRATINGS","# z hodnocen�ch");
define_once("_REGISTEREDUSERS","Registrovan� u�ivatel�");
define_once("_NUMBEROFRATINGS","Po�et hodnocen�ch");
define_once("_NOREGUSERSVOTES","Nehlasoval ��dn� registrovan� u�ivatel");
define_once("_BREAKDOWNBYVAL","Chyba v hodnocen� u");
define_once("_LTOTALVOTES","celkem hlas�");
define_once("_HIGHRATING","Vysok� hodnocen�");
define_once("_LOWRATING","N�zk� hodnocen�");
define_once("_NUMOFCOMMENTS","Po�et koment���");
define_once("_WEIGHNOTE","* Pozn�mka: Porovn�vaj� se hlasy registrovan�ch a neregistrovan�ch u�ivatel�");
define_once("_NOUNREGUSERSVOTES","��dn� neregistrovan� u�ivatel nehlasoval");
define_once("_WEIGHOUTNOTE","* Pozn�mka: D�l�me rozd�l mezi hodnocen�m registrovan�ch a hodnotitel� od jinud");
define_once("_NOOUTSIDEVOTES","Nehodnotil nikdo od jinud");
define_once("_OUTSIDEVOTERS","Hlasy od jinud");
define_once("_UNREGISTEREDUSERS","Neregistrovan� u�ivatel�");
define_once("_PROMOTEYOURSITE","Podporujte sv�j web");
define_once("_PROMOTE01","P�ipravili jsme pro v�s n�kolik mo�nost�, jak hodnotit va�� str�nku v na�em Arch�vu odkaz�.");
define_once("_TEXTLINK","Textov� odkaz");
define_once("_PROMOTE02","Jednou z cest k hodnocen� va�ich str�nek je jednoduch� textov� odkaz");
define_once("_HTMLCODE1","Zkop�rujte si tento HTML k�d na svou str�nku:");
define_once("_THENUMBER","��slo");
define_once("_IDREFER","v tomto k�du znamen� ID, pod kter�m je ulo�en odkaz v na�� datab�zi. P�esv��te se, pros�m, �e odkaz skute�n� odkazuje na va�i str�nku.");
define_once("_BUTTONLINK","Tla��tko");
define_once("_PROMOTE03","Pokud hled�te n�co jin�ho ne� jednoduch� textov� odkaz, m��ete pou��t toto tla��tko:");
define_once("_RATEIT","Hodnotit tuto str�nku!");
define_once("_HTMLCODE2","K�d pro p�id�n� je zde:");
define_once("_REMOTEFORM","D�lkov� hodnot�c� formul��");
define_once("_PROMOTE04","Nezneu��vejte hodnot�c� formul��e. Na�e politika je jednoduch�: Pokud najdeme web s formul��em, kter� neodpov�d� z�pisu v datab�zi, zablokujeme mo�nost hodnocen� tohoto webu nebo ho vy�ad�me z na�� datab�ze.");
define_once("_VOTE4THISSITE","Hlasujte pro tuto str�nku!");
define_once("_HTMLCODE3","Pokud pou�ijete tento formul��, mohou n�v�t�vn�ci va�� str�nky hodnotit v� wb p��mo na va�� str�nce. P�edchoz� dva typy to neumo��uj�.Zdrojov� k�d formul��e je zde:");
define_once("_PROMOTE05","D�ky a hodn� �t�st� v hodnocen�!");
define_once("_STAFF","t�m");
define_once("_THANKSBROKEN","D�ky za va�i pomoc p�i udr�ov�n� platnosti datab�ze.");
define_once("_SECURITYBROKEN","Z bezpe�nostn�ch d�vod� bude do�asn� zaznamen�na va�e IP adresa a u�.jm�no.");
define_once("_THANKSFORINFO","D�ky za informaci.");
define_once("_LOOKTOREQUEST","Co nejd��ve v� po�adavek vy��d�me.");
define_once("_SENDREQUEST","Poslat po�adavek");
define_once("_THANKSTOTAKETIME","D�ky za �as v�novan� hodnocen� str�nky na");
define_once("_RETURNTO","Zp�t na");
define_once("_RATENOTE1","Nehlasujte, pros�m, pro jeden odkaz v�ce ne� jednou.");
define_once("_RATENOTE2","Stupnice je 1 - 10, kde 1 je nejhor�� a 10 nejlep��.");
define_once("_RATENOTE3","Pros�m bu�te objektivn�, pokud bude ka�d� hlasovat 1 nebo 10, nen� hodnocen� k ni�emu.");
define_once("_RATENOTE5","Nehlasujte pro sv�j p��sp�vek.");
define_once("_YOUAREREGGED","Jste registrovan� u�ivatel a jste p�ihl�en(a).");
define_once("_FEELFREE2ADD","Neost�chejte se komentovat tuto str�nku.");
define_once("_YOUARENOTREGGED","Nejste registrovan� u�ivatel nebo nejste p�ihl�en(a).");
define_once("_IFYOUWEREREG","Pokud se zaregistrujete, m��ete komentovat na tomto webu.");
define_once("_TITLE","N�zev");
define_once("_MODIFY","Upravit");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

