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
define_once("_PREVIOUS","Prej�nja stran");
define_once("_NEXT","Naslednja stran");
define_once("_YOURNAME","Va�e ime");
define_once("_CATEGORY","Kategorija");
define_once("_CATEGORIES","Kategorije");
define_once("_LVOTES","glasovi");
define_once("_TOTALVOTES","Skupno glasov:");
define_once("_LINKTITLE","Naslov povezave");
define_once("_HITS","Prebrano");
define_once("_THEREARE","Trenutno se nahaja");
define_once("_NOMATCHES","Noben rezultat, ki bi odgovarjal va�emu iskanju ni bil najden");
define_once("_SCOMMENTS","Komentarji");
define_once("_DESCRIPTION","Opis");
define_once("_ONLYREGUSERSMODIFY","Samo �lani lahko predlagajo spremembe downloada. Prosim <a href=\"modules.php?name=Your_Account\">registrirajte se ali pa se prijavite</a>.");
define_once("_DATE","Datum");
define_once("_TO","Prejemnik");
define_once("_ADDLINK","Dodaj povezavo");
define_once("_NEW","Novo");
define_once("_POPULAR","Popularno");
define_once("_TOPRATED","Najvi�je ocenjeno");
define_once("_RANDOM","Naklju�no");
define_once("_LINKSMAIN","Gl. kazalo povezav");
define_once("_LINKCOMMENTS","Komentarji povezav");
define_once("_ADDITIONALDET","Dodatni detajli");
define_once("_EDITORREVIEW","Recenzija urednika");
define_once("_REPORTBROKEN","Prijavi nepravilno povezavo");
define_once("_LINKSMAINCAT","Gl. kategorije povezav");
define_once("_AND","in");
define_once("_INDB","v na�i bazi podatkov");
define_once("_ADDALINK","Dodaj novo povezavo");
define_once("_INSTRUCTIONS","Navodila");
define_once("_SUBMITONCE","Eno povezavo po�ljite samo enkrat.");
define_once("_POSTPENDING","Vse povezave se objavljajo po preverjanju.");
define_once("_USERANDIP","Uporabni�ko ime in IP se shranjuje, zato prosim da sistema ne zlouporabljate.");
define_once("_PAGETITLE","Naslov strani");
define_once("_PAGEURL","URL strani");
define_once("_YOUREMAIL","Va� E-mail");
define_once("_LDESCRIPTION","Opis: (255 znakov max)");
define_once("_ADDURL","Dodaj ta URL");
define_once("_LINKSNOTUSER1","Niste �lan, ali pa se niste prijavili(login).");
define_once("_LINKSNOTUSER2","Samo �lani lahko dodajajo povezave na to stran.");
define_once("_LINKSNOTUSER3","Registriranje je hiter in enostaven proces.");
define_once("_LINKSNOTUSER4","Zakaj zahtevamo registracijo za pristop dolo�enim stvarem?");
define_once("_LINKSNOTUSER5","Zato, da Vam lahko ponudimo samo vsebino visoke kvalitete,");
define_once("_LINKSNOTUSER6","Zato, ker vsako postavko posebej pregleduje in preverja na�e osebje.");
define_once("_LINKSNOTUSER7","Zato, ker Vam �elimo Vam ponuditi samo to�ne in prave informacije.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Registrirajte se</a>");
define_once("_LINKALREADYEXT","NAPAKA: Ta URL se �e nahaja v bazi podatakov!");
define_once("_LINKNOTITLE","NAPAKA: Morate napisati naslov URL-ja!");
define_once("_LINKNOURL","NAPAKA: Morate napisati naslov URL-ja!");
define_once("_LINKNODESC","NAPAKA: Morate napisati opis URL-ja!");
define_once("_LINKRECEIVED","Va� predlog je bil sprejet. Hvala!");
define_once("_EMAILWHENADD","Ko bo Va� predlog odobren boste prejeli E-mail.");
define_once("_CHECKFORIT","Va�ega e-mail naslova niste vpisali, vendar pa bomo vseeno kmalu preverili Va�o povezavo.");
define_once("_NEWLINKS","Nove povezave");
define_once("_TOTALNEWLINKS","Skupno novih povezav");
define_once("_LASTWEEK","Prej�nji teden");
define_once("_LAST30DAYS","Preteklih 30 dni");
define_once("_1WEEK","1 teden");
define_once("_2WEEKS","2 tedna");
define_once("_30DAYS","30 dni");
define_once("_SHOW","Poka�i");
define_once("_TOTALFORLAST","Skupno novih povezav v zadnjih");
define_once("_DAYS","dni");
define_once("_ADDEDON","Dodano dne");
define_once("_RATING","Ocena");
define_once("_RATESITE","Oceni to stran");
define_once("_DETAILS","Podrobnosti");
define_once("_BESTRATED","Najvi�je ocenjene strani - Top");
define_once("_OF","od");
define_once("_TRATEDLINKS","skupno ocenjenih strani");
define_once("_TVOTESREQ","glasov je minimum");
define_once("_SHOWTOP","Poka�i Top");
define_once("_MOSTPOPULAR","Najpopularnej�e - Top");
define_once("_OFALL","od vseh");
define_once("_SORTLINKSBY","Sortiraj povezave po");
define_once("_SITESSORTED","Strani so trenutno sortirane po");
define_once("_POPULARITY","Popularnosti");
define_once("_SELECTPAGE","Izberi stran");
define_once("_MAIN","Gl. kazalo");
define_once("_NEWTODAY","Nove danes");
define_once("_NEWLAST3DAYS","Nove zadnje tri dni");
define_once("_NEWTHISWEEK","Nove tega tedna");
define_once("_CATNEWTODAY","Nove povezave te kategorije dodane danes");
define_once("_CATLAST3DAYS","Nove povezave te kategorije dodane v zadnjih treh dnevih");
define_once("_CATTHISWEEK","Nove povezave te kategorije dodane ta teden");
define_once("_POPULARITY1","Popularnost (izpis povezav - od najmanj do najve� obiska)");
define_once("_POPULARITY2","Popularnost (izpis povezav - od najve� do najmanj obiska)");
define_once("_TITLEAZ","Naslovu (A do �)");
define_once("_TITLEZA","Naslovu (� do A)");
define_once("_DATE1","Datumu (Starej�e povezave prikazani prve)");
define_once("_DATE2","Datumu (Novej�e povezave prikazane prve)");
define_once("_RATING1","Ocenah (od najni�je do najvi�je ocenjenih)");
define_once("_RATING2","Ocenah (od najvi�je do najni�je ocenjenih)");
define_once("_SEARCHRESULTS4","Rezultati iskanja za");
define_once("_USUBCATEGORIES","Pod-kategorije");
define_once("_LINKS","Povezav");
define_once("_TRY2SEARCH","Poizkusi iskati");
define_once("_INOTHERSENGINES","na drugih iskalnikih");
define_once("_EDITORIAL","Recenzija");
define_once("_LINKPROFILE","Profil povezave");
define_once("_EDITORIALBY","Recenzijo napisal");
define_once("_NOEDITORIAL","Zasedaj ni recenzij za to stran.");
define_once("_VISITTHISSITE","Obi��ite to stran");
define_once("_RATETHISSITE","Ocenite to stran");
define_once("_ISTHISYOURSITE","Ali je to Va�a stran?");
define_once("_ALLOWTORATE","Omogo�ite ostalim obiskovalcem da ocenjujejo Va�o povezavo na Va�e strani!");
define_once("_LINKRATINGDET","Podrobnosti o oceni povezave");
define_once("_TOTALOF","Skupno od");
define_once("_USER","uporabnik");
define_once("_USERAVGRATING","Povpre�na ocena uporabnika");
define_once("_NUMRATINGS","# ocen");
define_once("_EDITTHISLINK","Spremeni to povezavo");
define_once("_REGISTEREDUSERS","Registrirani uporabniki");
define_once("_NUMBEROFRATINGS","�tevilo ocen");
define_once("_NOREGUSERSVOTES","Ni ocena registriranih uporabnikov");
define_once("_BREAKDOWNBYVAL","Razslojevanje ocen po vrednosti");
define_once("_LTOTALVOTES","skupno glasov");
define_once("_LINKRATING","Ocena povezave");
define_once("_HIGHRATING","Visoko ocenjeni");
define_once("_LOWRATING","Nizko ocenjeni");
define_once("_NUMOFCOMMENTS","�tevilo komentarjev");
define_once("_WEIGHNOTE","* Opomba: Ocene registriranih uporabnikov imajo druga�no te�o od ocen neregistriranih uporabnikov");
define_once("_NOUNREGUSERSVOTES","Ni ocen neregistriranih uporabnikov");
define_once("_WEIGHOUTNOTE","* Opomba: Ocene registriranih uporabnikov imaju druga�no te�o od ocen zunajnih ocenjevalcev.");
define_once("_NOOUTSIDEVOTES","Ni zunanjih ocena");
define_once("_OUTSIDEVOTERS","Zunanji ocenjevalci");
define_once("_UNREGISTEREDUSERS","Neregistrirani uporabniki");
define_once("_PROMOTEYOURSITE","Promovirajte Va�o stran");
define_once("_PROMOTE01","Morda Vas interesira nekaj remote 'Oceni stran' opcij ki jih imamo. To Vam dopu��a postavljanje slik (ali celo obrazca za ocenjevanje) na Va�o stran z namenom ve�anja �tevila glasov. Izberite eno od spodaj navedenih opcij:");
define_once("_TEXTLINK","Tekstualna povezava");
define_once("_PROMOTE02","Eden od na�inov povezave na obrazec za ocenjevanje je preko obi�ajne tekstualne povezave:");
define_once("_HTMLCODE1","V tom slu�aju uporabite slede�o HTML kodo:");
define_once("_THENUMBER","�tevilka");
define_once("_IDREFER","HTML koda  povezuje Va� stran preko njene ID �tevilke v $sitename bazi podatakov. PAZITE da postavite to �tevilko(ID).");
define_once("_BUTTONLINK","Povezava preko gumba");
define_once("_PROMOTE03","�e i��ete nekaj ve� od obi�jane tekstovne povezave, Vas morda zanima uporaba malega gumba za povezavo:");
define_once("_RATEIT","Oceni to stran!");
define_once("_HTMLCODE2","Source koda za gornji gumb je:");
define_once("_REMOTEFORM","Remote obrazec za ocenjevanje");
define_once("_PROMOTE04","�e boste pri tem varali bo Va�a povezava takoj izbrisana. Sedaj ko se razumemo, lahko pogledate kako trenutni remote obrazec izgleda.");
define_once("_VOTE4THISSITE","Glasujte za to stran!");
define_once("_LINKVOTE","Glasuj!");
define_once("_HTMLCODE3","Preko tega obrazca je omogo�eno uporabnikom da ocenjujejo Va�o stran direktno iz nje. Zgornji obrazec je onemogo�en, vendar pa bo slede�a koda delovala �e jo postavite na va�o stran. Source koda je prikazana spodaj:");
define_once("_PROMOTE05","Hvala! In sre�no z ocenami!");
define_once("_STAFF","Osebje");
define_once("_THANKSBROKEN","Hvala pri pomo�i v ohranjevanju integritete.");
define_once("_THANKSFORINFO","Hvala za informacijo.");
define_once("_LOOKTOREQUEST","Hitro bomo pregledali Va�o zahtevo.");
define_once("_REQUESTLINKMOD","Predlagaj izmenjavo povezav");
define_once("_LINKID","ID povezave");
define_once("_SENDREQUEST","Po�lji predlog");
define_once("_THANKSTOTAKETIME","Hvala za ocenjevanje strani na");
define_once("_LETSDECIDE","Komentarji in ocene uporabnika kakor Vi bo pomagalo ostalim uporabnikom pri odlo�itvi na katere povezave naj kliknejo.");
define_once("_RETURNTO","Nazaj na");
define_once("_RATENOTE1","Prosim, da ne glasujete za isto stvar ve�krat.");
define_once("_RATENOTE2","Razpon ocen je 1 - 10, 1 je najslab�e 10 najbolj�e.");
define_once("_RATENOTE3","Prosim bodite objektivni pri ocenjevanju. �e bodo vsi imeli oceno 1 ali 10, potem od  ocen ne bo nobene koristi.");
define_once("_RATENOTE4","Pogledate lahko listo <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">najvi�je ocenjenih strani</a>.");
define_once("_RATENOTE5","Ne glasujte za lastno ali nasprotnikovo stran.");
define_once("_YOUAREREGGED","Vi ste �lan in ste prijavljeni.");
define_once("_FEELFREE2ADD","Svobodno dodajte komentar o ter strani.");
define_once("_YOUARENOTREGGED","Vi niste �lan ali niste prijavljeni(login).");
define_once("_IFYOUWEREREG","�e bi bili �lan bi lahko komentirali to stran.");
define_once("_WEBLINKS","Povezave");
define_once("_TITLE","Naslov");
define_once("_MODIFY","Spremeni");
define_once("_COMPLETEVOTE1","Hvala za Va�e glasovanje.");
define_once("_COMPLETEVOTE2","Za to ste �e glasovali tekom preteklih $anonwaitdays dni.");
define_once("_COMPLETEVOTE3","Glasujte samo enkrat.<br>Vsi glasovi se bele�ijo in bodo pregledani.");
define_once("_COMPLETEVOTE4","Ne morete glasovati za va�o povezavo.<br>Vsi glasovi se bele�ijo in pregledujejo.");
define_once("_COMPLETEVOTE5","No rating selected - no vote tallied");
define_once("_COMPLETEVOTE6","Samo en glas po IP naslovu tekom $outsidewaitdays dni.");
define_once("_LINKSDATESTRING","%d.%m.%Y");

