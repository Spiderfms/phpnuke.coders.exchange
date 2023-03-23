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
define_once("_PREVIOUS","P�edchoz� str�nka");
define_once("_NEXT","Dal�� str�nka");
define_once("_YOURNAME","Va�e jm�no");
define_once("_CATEGORY","Kategorie");
define_once("_CATEGORIES","Kategorie");
define_once("_LVOTES","hlasovalo");
define_once("_TOTALVOTES","Celkem hlasovalo:");
define_once("_LINKTITLE","N�zev odkazu");
define_once("_HITS","Klinkut�");
define_once("_THEREARE","V sou�asn� dob� je");
define_once("_NOMATCHES","Nebyl nalezen z�znam na v� po�adavek");
define_once("_SCOMMENTS","Koment��e");
define_once("_DESCRIPTION","Popis");
define_once("_ONLYREGUSERSMODIFY","Pouze registrovan� u�ivatel� mohou hl�sit �pravy. Pros�m <a href=\"modules.php?name=Your_Account\">Registrujte se nebo se p�ihla�te</a>.");
define_once("_RATENOTE4","M��ete si prohl�dnout <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">�eb���ek nejl�pe hodnocen�ch</a>.");
define_once("_DATE","Datum");
define_once("_TO","Komu");
define_once("_ADDLINK","P�idat odkaz");
define_once("_NEW","Nov�");
define_once("_POPULAR","Popul�rn�");
define_once("_TOPRATED","Nejl�pe hodnocen�");
define_once("_RANDOM","N�hodn�");
define_once("_LINKSMAIN","Hlavn� str�nka odkaz�");
define_once("_LINKCOMMENTS","Koment��e k odkazu");
define_once("_ADDITIONALDET","Detaily");
define_once("_EDITORREVIEW","Kontroloval");
define_once("_REPORTBROKEN","Zpr�va o neplatn�m odkazu");
define_once("_LINKSMAINCAT","Hlavn� kategorie odkaz�");
define_once("_AND","a");
define_once("_INDB","v na�� datab�zi");
define_once("_ADDALINK","P�idat nov� odkaz");
define_once("_INSTRUCTIONS","Instrukce");
define_once("_SUBMITONCE","Ode�lete jeden odkaz pouze jednou.");
define_once("_POSTPENDING","V�echny odeslan� odkazy a soubory mus� b�t ov��eny.");
define_once("_USERANDIP","P�ezd�vka a IP adresa jsou zaznamen�v�ny, net�rejte pros�m n� syst�m.");
define_once("_PAGETITLE","N�zev str�nky");
define_once("_PAGEURL","URL");
define_once("_YOUREMAIL","V� e-mail");
define_once("_LDESCRIPTION","Popis: (max. 255 znak�)");
define_once("_ADDURL","P�idat tuto URL");
define_once("_LINKSNOTUSER1","Nejste p�ihl�en(a) nebo nejste zaregistrov�n(a).");
define_once("_LINKSNOTUSER2","Pokud se zaregistrujete m��ete p�id�vat odkazy na tomto webu.");
define_once("_LINKSNOTUSER3","St�t se registrovan�m u�ivatelem je snadn� a rychl� proces.");
define_once("_LINKSNOTUSER4","Pro� vy�adujeme registraci?");
define_once("_LINKSNOTUSER5","Chceme v�m poskytnou slu�by nejvy��� kvality,");
define_once("_LINKSNOTUSER6","ka�d� polo�ka je samostan� zkontrolov�na a odsouhlasena na�imi spolupracovn�ky.");
define_once("_LINKSNOTUSER7","Douf�me, �e v�m budeme poskytovat pouze hodnotn� informace.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Zalo�it ��et</a>");
define_once("_LINKALREADYEXT","CHYBA: Tuto adresu ji� v datab�zi evidujeme!");
define_once("_LINKNOTITLE","CHYBA: Mus� b�t zad�n n�zev str�nky!");
define_once("_LINKNOURL","CHYBA: Mus� b�t zad�na adresa str�nky!");
define_once("_LINKNODESC","CHYBA: Mus� b�t zad�n popis str�nky!");
define_once("_LINKRECEIVED","P�ijali jsme v� odkaz ke zpracov�n�. D�ky!");
define_once("_EMAILWHENADD","Po prov��en� odkazu V�m p�ijde potvrzuj�c� e-mail.");
define_once("_CHECKFORIT","Nepi�te n�m e-maily. V� odkaz bude prov��en co nejd��ve.");
define_once("_NEWLINKS","Nov� odkazy");
define_once("_TOTALNEWLINKS","V�echny nov� odkazy");
define_once("_LASTWEEK","Posledn� t�den");
define_once("_LAST30DAYS","Posledn�ch 30 dn�");
define_once("_1WEEK","1 t�den");
define_once("_2WEEKS","2 t�dny");
define_once("_30DAYS","30 dn�");
define_once("_SHOW","Uk�zat");
define_once("_TOTALFORLAST","v�echny nov� odkazy za");
define_once("_DAYS","dn�");
define_once("_ADDEDON","P�id�no dne:");
define_once("_RATING","Hodnocen�");
define_once("_RATESITE","Zhodno�te tuto str�nku");
define_once("_DETAILS","Detaily");
define_once("_BESTRATED","Nejl�pe hodnocen� odkazy - TOP");
define_once("_OF","ze");
define_once("_TRATEDLINKS","v�ech hodnocen�ch odkaz�");
define_once("_TVOTESREQ","je minimum po�adovan�ch hlas�");
define_once("_SHOWTOP","Uk�zat TOP");
define_once("_MOSTPOPULAR","Nejpopul�rn�j�� - TOP");
define_once("_OFALL","ze v�ech");
define_once("_SORTLINKSBY","T��dit odkazy podle");
define_once("_SITESSORTED","Str�nky jsou moment�ln� �azeny podle");
define_once("_POPULARITY","Obl�ben�");
define_once("_SELECTPAGE","Vybrat str�nku");
define_once("_MAIN","Hlavn�");
define_once("_NEWTODAY","Nov� dnes");
define_once("_NEWLAST3DAYS","Nov� za posledn� 3 dny");
define_once("_NEWTHISWEEK","Nov� za tento t�den");
define_once("_CATNEWTODAY","Nov� odkazy v t�to kategorii p�idan� dnes");
define_once("_CATLAST3DAYS","Nov� odkazy v t�to kategorii p�idan� za posledn� 3 dny");
define_once("_CATTHISWEEK","Nov� odkazy v t�to kategorii p�idan� tento t�den");
define_once("_POPULARITY1","Obl�benost� (od nejm�n� po nejv�ce)");
define_once("_POPULARITY2","Obl�benost� (od nejv�ce po nejm�n�)");
define_once("_TITLEAZ","N�zvu (od A do Z)");
define_once("_TITLEZA","N�zvu (od Z do A)");
define_once("_DATE1","Data (Nejd��ve star��)");
define_once("_DATE2","Data (nejd��ve nov�)");
define_once("_RATING1","Hodnocen� (od nejni���ho k nejvy���mu)");
define_once("_RATING2","Hodnocen� (od nejvy���ho k nejni���mu)");
define_once("_SEARCHRESULTS4","V�sledky hled�n� pro heslo");
define_once("_USUBCATEGORIES","Subkategorie");
define_once("_LINKS","Odkazy");
define_once("_TRY2SEARCH","Pokuste se naj�t");
define_once("_INOTHERSENGINES","v dal��ch vyhled�va��ch");
define_once("_EDITORIAL","�vodn�k");
define_once("_LINKPROFILE","Profil odkazu");
define_once("_EDITORIALBY","�vodn�k napsal");
define_once("_NOEDITORIAL","Nen� dostupn� ��dn� koment�� k tomuto webu.");
define_once("_VISITTHISSITE","Nav�t�vit tento web");
define_once("_RATETHISSITE","Hodnotit tento web");
define_once("_ISTHISYOURSITE","Je to v� web?");
define_once("_ALLOWTORATE","Umo�n�te va�im u�ivatel�m hodnotit p��mo z va�� str�nky!");
define_once("_LINKRATINGDET","Detaily hodnocen�");
define_once("_OVERALLRATING","Celkov� hodnocen�");
define_once("_TOTALOF","Celkem z");
define_once("_USER","u�ivatel");
define_once("_USERAVGRATING","pr�m�rn� hodnocen�");
define_once("_NUMRATINGS","# z hodnocen�ch");
define_once("_EDITTHISLINK","Upravit tento odkaz");
define_once("_REGISTEREDUSERS","Registrovan� u�ivatel�");
define_once("_NUMBEROFRATINGS","Po�et hodnocen�ch");
define_once("_NOREGUSERSVOTES","Nehlasoval ��dn� registrovan� u�ivatel");
define_once("_BREAKDOWNBYVAL","Chyba v hodnocen� u");
define_once("_LTOTALVOTES","celkem hlas�");
define_once("_LINKRATING","Hodnocen� odkaz�");
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
define_once("_LINKVOTE","Hlasovat!");
define_once("_HTMLCODE3","Pokud pou�ijete tento formul��, mohou n�v�t�vn�ci va�� str�nky hodnotit v� wb p��mo na va�� str�nce. P�edchoz� dva typy to neumo��uj�.Zdrojov� k�d formul��e je zde:");
define_once("_PROMOTE05","D�ky a hodn� �t�st� v hodnocen�!");
define_once("_STAFF","t�m");
define_once("_THANKSBROKEN","D�ky za va�i pomoc p�i udr�ov�n� platnosti datab�ze.");
define_once("_THANKSFORINFO","D�ky za informaci.");
define_once("_LOOKTOREQUEST","Co nejd��ve v� po�adavek vy��d�me.");
define_once("_REQUESTLINKMOD","Po�adavek na �pravu odkazu");
define_once("_LINKID","Odkaz ID");
define_once("_SENDREQUEST","Poslat po�adavek");
define_once("_THANKSTOTAKETIME","D�ky za �as v�novan� hodnocen� str�nky na");
define_once("_LETSDECIDE","U�ivatel� jako jste vy poh�haj� ostatn�m p�i rozhodov�n� na kter� odkaz kliknout.");
define_once("_RETURNTO","Zp�t na");
define_once("_RATENOTE1","Nehlasujte, pros�m, pro jeden odkaz v�ce ne� jednou.");
define_once("_RATENOTE2","Stupnice je 1 - 10, kde 1 je nejhor�� a 10 nejlep��.");
define_once("_RATENOTE3","Pros�m bu�te objektivn�, pokud bude ka�d� hlasovat 1 nebo 10, nen� hodnocen� k ni�emu.");
define_once("_RATENOTE5","Nehlasujte pro sv�j p��sp�vek.");
define_once("_YOUAREREGGED","Jste registrovan� u�ivatel a jste p�ihl�en(a).");
define_once("_FEELFREE2ADD","Neost�chejte se komentovat tuto str�nku.");
define_once("_YOUARENOTREGGED","Nejste registrovan� u�ivatel nebo nejste p�ihl�en(a).");
define_once("_IFYOUWEREREG","Pokud se zaregistrujete, m��ete komentovat na tomto webu.");
define_once("_WEBLINKS","Arch�v odkaz�");
define_once("_TITLE","N�zev");
define_once("_MODIFY","Upravit");
define_once("_COMPLETEVOTE1","Your vote is appreciated.");
define_once("_COMPLETEVOTE2","You have already voted for this resource in the past $anonwaitdays day(s).");
define_once("_COMPLETEVOTE3","Vote for a resource only once.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE4","You cannot vote on a link you submitted.<br>All votes are logged and reviewed.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Only one vote per IP address allowed every $outsidewaitdays day(s).");
define_once("_LINKSDATESTRING","%d-%b-%Y");

