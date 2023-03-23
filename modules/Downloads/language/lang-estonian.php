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
define_once("_PREVIOUS","Eelmine Leht");
define_once("_NEXT","J�rgmine Leht");
define_once("_CATEGORY","Kategooria");
define_once("_CATEGORIES","Kategooriat");
define_once("_LVOTES","h��l(t)");
define_once("_TOTALVOTES","H��li Kokku:");
define_once("_THEREARE","Praegu on");
define_once("_NOMATCHES","Sinu p�ringule ei leitud vastust");
define_once("_SCOMMENTS","Kommentaarid");
define_once("_UNKNOWN","Tundmatu");
define_once("_AUTHORNAME","Autori nimi");
define_once("_AUTHOREMAIL","Autori Email");
define_once("_DOWNLOADNAME","Programmi nimi");
define_once("_ADDTHISFILE","Lisa see fail");
define_once("_INBYTES","baitides");
define_once("_FILESIZE","Faili suurus");
define_once("_VERSION","Versioon");
define_once("_DESCRIPTION","Kirjeldus");
define_once("_AUTHOR","Autor");
define_once("_HOMEPAGE","Kodulehek�lg");
define_once("_DOWNLOADNOW","Lae see fail n��d alla!");
define_once("_RATERESOURCE","Hinda faili");
define_once("_FILEURL","Faili link");
define_once("_ADDDOWNLOAD","Lisa fail");
define_once("_DOWNLOADSMAIN","Failide avaleht");
define_once("_DOWNLOADCOMMENTS","Failide kommentaarid");
define_once("_DOWNLOADSMAINCAT","Failide peakategooriad");
define_once("_ADDADOWNLOAD","Lisa uus fail");
define_once("_DSUBMITONCE","Saada unikaalne fail ainul korra.");
define_once("_DPOSTPENDING","K�ik failid on saadetud s�ltumatta kinnitusest.");
define_once("_RESSORTED","Failid hetkel sorteeritud");
define_once("_DOWNLOADSNOTUSER1","Sa ei ole registreeritud kasutaja v�i sa pole sisse loginud.");
define_once("_DOWNLOADSNOTUSER2","Kui sa oled registreeritud, siis sa v�id lisada faile sellelt veebilehelt.");
define_once("_DOWNLOADSNOTUSER3","Registreeritud kasutajaks saamine on kiire ja lihtne protsess.");
define_once("_DOWNLOADSNOTUSER4","Miks me n�uame registratsiooni teatud v�imalustele juurdep��suks?");
define_once("_DOWNLOADSNOTUSER5","Niisiis me v�ime pakkuda sulle ainult k�rgema kvaliteediga sisu,");
define_once("_DOWNLOADSNOTUSER6","iga asi on �ksikult �le vaadatud ja heaks kiidetud meie koosseisu poolt.");
define_once("_DOWNLOADSNOTUSER7","Me loodame sulle pakkuda ainult v��rtuslikku informatsiooni.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Registreeri Konto</a>");
define_once("_DOWNLOADALREADYEXT","VIGA: See URL on juba olemas andmebaasis!");
define_once("_DOWNLOADNOTITLE","VIGA: Sa pead sisestama PEALKIRJA oma URL-ile!");
define_once("_DOWNLOADNOURL","VIGA: Sa pead sisestama AADRESSI oma URL-ile!");
define_once("_DOWNLOADNODESC","VIGA: Sa pead sisestama KIRJELDUSE oma URL-ile!");
define_once("_DOWNLOADRECEIVED","Me v�tsime vastu sinu faili. T�nud!");
define_once("_NEWDOWNLOADS","Uued failid");
define_once("_TOTALNEWDOWNLOADS","Kokku uusi faile");
define_once("_DTOTALFORLAST","Kokku uusi faile viimasest");
define_once("_DBESTRATED","Enim hinnatud failid - Top");
define_once("_TRATEDDOWNLOADS","kokku hinnatud faile");
define_once("_SORTDOWNLOADSBY","Sorteeri faile");
define_once("_DCATNEWTODAY","Uued failid selles kategoorias. Lisatud t�na");
define_once("_DCATLAST3DAYS","Uued failid selles kategoorias. Lisatud viimase 3 p�eva jooksul");
define_once("_DCATTHISWEEK","Uued failid selles kategoorias. Lisatud sellel n�dalal");
define_once("_DDATE1","Kuup�evalises j�rjekorras (vanemad failid loendatud ennem)");
define_once("_DDATE2","Kuup�evalises j�rjekorras (uuemad failid loendatud ennem)");
define_once("_DOWNLOADS","Failid");
define_once("_DOWNLOADPROFILE","Faili profiil");
define_once("_DOWNLOADRATINGDET","Faili hinnagu detailid");
define_once("_EDITTHISDOWNLOAD","Redigeeri faili");
define_once("_DOWNLOADRATING","Failide hindamine");
define_once("_DOWNLOADVOTE","H��leta!");
define_once("_DONLYREGUSERSMODIFY","Ainult registreeritud kasutajad v�ivad soovitada failide modifikatsiooni. Palun <a href=\"modules.php?name=Your_Account\">registreeri v�i logi sisse</a>.");
define_once("_REQUESTDOWNLOADMOD","Soovita faili modifikatsiooni");
define_once("_DOWNLOADID","Faili ID");
define_once("_DLETSDECIDE","Sisesed kasutajad nagu Sina, aitavad teistele k�lastajatele paremini otsustada millisele Failile klikkida.");
define_once("_DRATENOTE4","Sa v�id n�ha nimekirja <a href=\"modules.php?name=Downloads&amp;d_op=TopRated\">Top hinnatud failid</a>.");
define_once("_DATE","Kuup�ev");
define_once("_TO","Kellele");
define_once("_NEW","Uued");
define_once("_POPULAR","Populaarsemad");
define_once("_TOPRATED","Hinnatumad");
define_once("_ADDITIONALDET","Lisainfo");
define_once("_EDITORREVIEW","Toimetaja �levaade");
define_once("_REPORTBROKEN","Teavita vigasest lingist");
define_once("_AND","ja");
define_once("_INDB","meie andmebaasis");
define_once("_INSTRUCTIONS","Juhend");
define_once("_USERANDIP","Kasutajanimi ja IP on salvestatud, seega palun �ra solva s�steemi.");
define_once("_LDESCRIPTION","Kirjeldus: (255 t�hem�rki max)");
define_once("_CHECKFORIT","Sa ei andnud Emaili addressi, aga me kontrollime sinu linki varsti.");
define_once("_LASTWEEK","Eelmine n�dal");
define_once("_LAST30DAYS","Viimased 30 P�eva");
define_once("_1WEEK","1 n�dal");
define_once("_2WEEKS","2 n�dalat");
define_once("_30DAYS","30 p�eva");
define_once("_SHOW","N�ita");
define_once("_DAYS","p�eva");
define_once("_ADDEDON","Lisatud");
define_once("_RATING","Hinnang");
define_once("_DETAILS","T�psemalt");
define_once("_OF","");
define_once("_TVOTESREQ","miinimum h��lt n�utav");
define_once("_SHOWTOP","N�ita Top'i");
define_once("_MOSTPOPULAR","K�ige Populaarsem - Top");
define_once("_OFALL","k�ikidest");
define_once("_POPULARITY","Populaarsus");
define_once("_SELECTPAGE","Vali leht");
define_once("_MAIN","Falilide avaleht");
define_once("_NEWTODAY","Uued t�na");
define_once("_NEWLAST3DAYS","Uued viimase 3 p�eva jooksul");
define_once("_NEWTHISWEEK","Uued sellel n�dalal");
define_once("_POPULARITY1","Populaarsuse j�rgi (V�himast tabamusest Suuremani)");
define_once("_POPULARITY2","Populaarsuse j�rgi (Suuremast tabamusest V�himani)");
define_once("_TITLEAZ","T�hestikulises j�rjekorras (A-st Z-ni)");
define_once("_TITLEZA","T�hestikulises j�rjekorras (Z-st A-ni)");
define_once("_RATING1","Hinnangu j�rgi (Madalamatest punktidest K�rgemateni)");
define_once("_RATING2","Hinnangu j�rgi (K�rgematest punktidest Madalamateni)");
define_once("_SEARCHRESULTS4","Otsimise tulemused");
define_once("_USUBCATEGORIES","Alamkategooriad");
define_once("_TRY2SEARCH","Proovi otsida");
define_once("_INOTHERSENGINES","teistest Otsingumootoritest");
define_once("_EDITORIAL","Toimetaja");
define_once("_EDITORIALBY","Toimetas");
define_once("_NOEDITORIAL","Toimetajat ei ole praegu saadaval selle veebilehel.");
define_once("_RATETHISSITE","Hinda seda faili");
define_once("_ISTHISYOURSITE","Kas see on sinu fail?");
define_once("_ALLOWTORATE","Lase teistel kasutajatel hinnata seda oma veebilehelt!");
define_once("_OVERALLRATING","�ldine Hinnang");
define_once("_TOTALOF","Kokku");
define_once("_USER","Kasutaja");
define_once("_USERAVGRATING","Kasutajate keskimine hinnang");
define_once("_NUMRATINGS","# hinnanguid");
define_once("_REGISTEREDUSERS","Registreeritud kasutajad");
define_once("_NUMBEROFRATINGS","Hindamisi kokku");
define_once("_NOREGUSERSVOTES","Registreerunud kasutaja h��li pole");
define_once("_BREAKDOWNBYVAL","Tabel hinnagu v��rtusete j�rgi");
define_once("_LTOTALVOTES","h��li kokku");
define_once("_HIGHRATING","K�rgeim hinne");
define_once("_LOWRATING","Madalaim hinne");
define_once("_NUMOFCOMMENTS","Kommentaaride arv");
define_once("_WEIGHNOTE","* NB: Sellel failil kaalub Registreeritud ja Registreerimata kasutajate hinnang");
define_once("_NOUNREGUSERSVOTES","Registreerimata kasutaja h��li ei ole");
define_once("_WEIGHOUTNOTE","* NB: Sellel failil kaal registreeritud ja v�liste h��letajate hinnang");
define_once("_NOOUTSIDEVOTES","V�liseid h��li ei ole");
define_once("_OUTSIDEVOTERS","V�liseid h��letajaid");
define_once("_UNREGISTEREDUSERS","Registreerimata kasutajaid");
define_once("_PROMOTEYOURSITE","Edenda oma veebilehte");
define_once("_PROMOTE01","V�ibolla oled Sa huvitatud mitme kaug 'Hinda veebilehte' valikust, mis on meil saadaval. Need lasevad sul asetada pildi (v�i isegi hindamise vormi) sinu webi lehele, tellides juurdekasvu numbrites h��li oma faili saamisel. Palun vali �ks valikutest allj�rgnevast nimekirjast:");
define_once("_TEXTLINK","Teksti link");
define_once("_PROMOTE02","�ks v�imalus linkida hindamisvormi, on l�bi lihtsa tekstilingi:");
define_once("_HTMLCODE1","HTML koodi peaksid sa kasutama sellisel juhul allj�rgnevalt:");
define_once("_THENUMBER","Number");
define_once("_IDREFER","HTML koodis viitab sinu lehe ID numbrile $sitename andmebaasis. Ole kindel, et number on olemas.");
define_once("_BUTTONLINK","Nupu link");
define_once("_PROMOTE03","Kui sa otsid natuke rohkemat kui tavalist tekstilinki v�id sa kasutada seda v�ikest nupulinki:");
define_once("_RATEIT","Hinda seda lehte!");
define_once("_HTMLCODE2","L�htekood nupust allpool on:");
define_once("_REMOTEFORM","Kaughindamise vorm");
define_once("_PROMOTE04","Kui sa petad sellega, siis me k�rvaldame Sinu lingi.Siin on see kaughindamise vorm ja v�lja n�eb sellisena.");
define_once("_VOTE4THISSITE","H��leta seda lehte!");
define_once("_HTMLCODE3","Kasutades seda vormi, lased sa kasutajatel hinnata oma faili otse oma lehelt ja hinded salvestatakse siia. Allj�rgnev l�htekood t��tab, kui sa lihtsalt kopeerid ja lisad selle oma veebilehele. Selline n�eb siis v�lja l�htekood:");
define_once("_PROMOTE05","T�nud! ja edu sinu hindamistel!");
define_once("_STAFF","");
define_once("_THANKSBROKEN","T�nan sind abi eest, et aitad �lal hoida kataloogi terviklikkust.");
define_once("_SECURITYBROKEN","Turavlisuse p�hjusel Sinu kasutajanimi ja IP address on ajutiselt salvestatud.");
define_once("_THANKSFORINFO","T�nan informatsiooni eest.");
define_once("_LOOKTOREQUEST","Me vaatame Sinu taotlust peagi.");
define_once("_SENDREQUEST","Saada Taotlus");
define_once("_THANKSTOTAKETIME","T�nan Sind, et leidsid aega hinnata seda lehte siin");
define_once("_RETURNTO","Tagasi");
define_once("_RATENOTE1","Palun, �ra h��leta sama faili rohkem kui �ks kord.");
define_once("_RATENOTE2","Hindeid saab anda 1 - 10. 1 on v�ga halb ja 10 on v�ga hea.");
define_once("_RATENOTE3","Palun ole objektiivne oma hindega, kui k�ik hindavad  1 v�i 10, siis hinded pole eriti kasulikud.");
define_once("_RATENOTE5","�ra hinda oma faili v�i v�istlejat.");
define_once("_YOUAREREGGED","Sa oled registreeritud kasutaja ja oled sisse loginud.");
define_once("_FEELFREE2ADD","Julgelt lisa kommentaare selle lehe kohta.");
define_once("_YOUARENOTREGGED","Sa ei ole registreeritud kasutaja v�i sa ei ole sisse loginud.");
define_once("_IFYOUWEREREG","Kui sa olid registreeritud, siis v�id sa postitada kommentaare sellel veebilehel.");
define_once("_TITLE","Pealkiri");
define_once("_MODIFY","Muuda");
define_once("_COMPLETEVOTE1","Sinu hinnang on lisatud.");
define_once("_COMPLETEVOTE2","Sa juba oled hinnanud seda faili viimasel $anonwaitdays p�eva jooksul.");
define_once("_COMPLETEVOTE3","Hinda faili ainul korra.<br>K�ik hinnangud on logitud ja arvutatud.");
define_once("_COMPLETEVOTE4","Sa ei saa hindeid anda faili poolt, mille sa saatsid.<br>K�ik hinnangud on logitud ja arvutatud.");
define_once("_COMPLETEVOTE5","Hinnangut ei ole valitud - h��lt ei ole talletatud");
define_once("_COMPLETEVOTE6","Ainult �ks hinnag IP addressi kohta on lubatud iga $outsidewaitdays p�eva j�rel.");
define_once("_LINKSDATESTRING","%d-%b-%Y");

