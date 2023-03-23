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
define_once("_PREVIOUS","Eelmine leht");
define_once("_NEXT","J�rgmine leht");
define_once("_YOURNAME","Sinu nimi");
define_once("_CATEGORY","Kategooria");
define_once("_CATEGORIES","Kategooriat");
define_once("_LVOTES","h��lt");
define_once("_TOTALVOTES","H��li kokku:");
define_once("_LINKTITLE","Lingi pealkiri");
define_once("_HITS","Tabamusi");
define_once("_THEREARE","Praegu on");
define_once("_NOMATCHES","Sinu p�ringule ei leidunud vastust");
define_once("_SCOMMENTS","Kommentaarid");
define_once("_DESCRIPTION","Kirjeldus");
define_once("_DATE","Kuup�ev");
define_once("_TO","Kellele");
define_once("_ADDLINK","Lisa link");
define_once("_NEW","Uus");
define_once("_POPULAR","Populaarseim");
define_once("_TOPRATED","Enim hinnatud");
define_once("_RANDOM","Pisteliselt");
define_once("_LINKSMAIN","Linkide avaleht");
define_once("_LINKCOMMENTS","Lingi kommentaarid");
define_once("_ADDITIONALDET","T�iendavad detailid");
define_once("_EDITORREVIEW","Toimetaja �levaade");
define_once("_REPORTBROKEN","Teavita vigasest lingist");
define_once("_LINKSMAINCAT","Linkide peakategooriad");
define_once("_AND","ja");
define_once("_INDB","meie andmebaasis");
define_once("_ADDALINK","Lisa uus link");
define_once("_INSTRUCTIONS","Juhend");
define_once("_SUBMITONCE","Saada unikaalne link ainult korra.");
define_once("_POSTPENDING","K�ik lingid on saadetud s�ltumata kinnitusest.");
define_once("_USERANDIP","Kasutajanimi ja IP on salvestatud, seega palun �ra solva s�steemi.");
define_once("_PAGETITLE","Lehe pealkiri");
define_once("_PAGEURL","Lehe URL");
define_once("_YOUREMAIL","Sinu email");
define_once("_LDESCRIPTION","Kirjeldus: (255 t�hem�rki max)");
define_once("_ADDURL","Lisa see URL");
define_once("_LINKSNOTUSER1","Sa ei ole registreeritud kasutaja v�i sa ei ole sisse loginud.");
define_once("_LINKSNOTUSER2","Kui sa oled registreeritud, siis sa v�id lisada faile sellelt veebilehelt.");
define_once("_LINKSNOTUSER3","Registreeritud kasutajaks saamine on kiire ja lihtne protsess.");
define_once("_LINKSNOTUSER4","Miks me n�uame registratsiooni juurdep��su teatud v�imalustele?");
define_once("_LINKSNOTUSER5","Niisiis me v�ime pakkuda sulle ainult k�rgema kvaliteedi sisu,");
define_once("_LINKSNOTUSER6","iga asi on �ksikult �le vaadatud ja heaks kiidetud meie koosseisu poolt.");
define_once("_LINKSNOTUSER7","Me loodame sulle pakkuda ainult v��rtuslikku informatsiooni.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Registreeri konto</a>");
define_once("_LINKALREADYEXT","VIGA: See URL on juba olemas andmebaasis!");
define_once("_LINKNOTITLE","VIGA: Sa pead sisestama PEALKIRJA oma URL-ile!");
define_once("_LINKNOURL","VIGA: Sa pead sisestama AADRESSI oma URL-ile!");
define_once("_LINKNODESC","VIGA: Sa pead sisestama KIRJELDUSE oma URL-ile!");
define_once("_LINKRECEIVED","Me v�tsime vastu sinu lingi saadetise. T�nan!");
define_once("_EMAILWHENADD","Sa saad e-maili, kui see on heakskiidetud.");
define_once("_CHECKFORIT","Sa ei andnud e-maili aadressi, aga me kontrollime sinu linki varsti.");
define_once("_NEWLINKS","Uued lingid");
define_once("_TOTALNEWLINKS","Kokku uusi linke");
define_once("_LASTWEEK","Eelmine n�dal");
define_once("_LAST30DAYS","Viimased 30 p�eva");
define_once("_1WEEK","1 n�dal");
define_once("_2WEEKS","2 n�dalat");
define_once("_30DAYS","30 p�eva");
define_once("_SHOW","N�ita");
define_once("_TOTALFORLAST","Kokku uusi linke viimase");
define_once("_DAYS","p�eva jooksul");
define_once("_ADDEDON","Lisatud");
define_once("_RATING","Hinnang");
define_once("_RATESITE","Hinda seda lehte");
define_once("_DETAILS","Detailid");
define_once("_BESTRATED","Parimaks hinnatud lingid - Top");
define_once("_OF","");
define_once("_TRATEDLINKS","kokku hinnatuid linke");
define_once("_TVOTESREQ","minimaalselt h��lt n�utav");
define_once("_SHOWTOP","N�ita top-i");
define_once("_MOSTPOPULAR","Populaarseim - Top");
define_once("_OFALL","kokku");
define_once("_SORTLINKSBY","Sorteeri linke");
define_once("_SITESSORTED","Lehed hetkel sorteeritud");
define_once("_POPULARITY","Populaarsus");
define_once("_SELECTPAGE","Vali leht");
define_once("_MAIN","Linkide avalehele");
define_once("_NEWTODAY","Uued t�na");
define_once("_NEWLAST3DAYS","Uued viimase 3 p�eva jooksul");
define_once("_NEWTHISWEEK","Uued sel n�dalal");
define_once("_CATNEWTODAY","Uued lingid selles kategoorais lisatud t�na");
define_once("_CATLAST3DAYS","Uued lingid selles kategoorias lisatud viimasel 3 p�eva jooksul");
define_once("_CATTHISWEEK","Uued lingid selles kategoorais lisatud sellel n�dalal");
define_once("_POPULARITY1","Populaarsuse j�rgi (v�himast tabamusest suuremani)");
define_once("_POPULARITY2","Populaarsuse j�rgi (suuremast tabamusest v�himani)");
define_once("_TITLEAZ","T�hestik (A-st Z-ni)");
define_once("_TITLEZA","T�hestik (Z-st A-ni)");
define_once("_DATE1","Kuup�ev (vanemad lingid ennem)");
define_once("_DATE2","Kuup�ev (uuemad lingid ennem)");
define_once("_RATING1","Hinnangu j�rgi (madalamatest punktidest k�rgemateni)");
define_once("_RATING2","Hinnangu j�rgi (k�rgematest punktidest madalamateni)");
define_once("_SEARCHRESULTS4","Otsimise tulemused");
define_once("_USUBCATEGORIES","Alamkategooriad");
define_once("_LINKS","Link(i) ");
define_once("_TRY2SEARCH","Proovi otsida");
define_once("_INOTHERSENGINES","teistest otsigumootoritest");
define_once("_EDITORIAL","Toimetaja");
define_once("_LINKPROFILE","Lingi profiil");
define_once("_EDITORIALBY","Toimetas");
define_once("_NOEDITORIAL","Toimetajat ei ole praegu saadaval selle veebilehel.");
define_once("_VISITTHISSITE","K�lasta seda veebilehte");
define_once("_RATETHISSITE","Hinda seda linki");
define_once("_ISTHISYOURSITE","Kas see on sinu link?");
define_once("_ALLOWTORATE","Lase teistel kasutajatel hinnata seda sinu veebilehel!");
define_once("_LINKRATINGDET","Lingi hinnangu detailid");
define_once("_OVERALLRATING","�ldhinnang");
define_once("_TOTALOF","Kokku");
define_once("_USER","Kasutaja");
define_once("_USERAVGRATING","Kasutaja keskimine hinnang");
define_once("_NUMRATINGS","# hinnanguid");
define_once("_EDITTHISLINK","Redigeeri seda linki");
define_once("_REGISTEREDUSERS","Registreeritud kasutajad");
define_once("_NUMBEROFRATINGS","Hinnatud kordi");
define_once("_NOREGUSERSVOTES","Mitteregistreeritud kasutajate h��li");
define_once("_BREAKDOWNBYVAL","Tabel hinnagu v��rtusete j�rgi");
define_once("_LTOTALVOTES","h��li kokku");
define_once("_LINKRATING","Linkide hinnang");
define_once("_HIGHRATING","K�rgeim hinnang");
define_once("_LOWRATING","Madalaim hinnang");
define_once("_NUMOFCOMMENTS","Kommenteeritud kordi");
define_once("_WEIGHNOTE","* NB: Sellel lingil kaalub nii registreeritud kui ka registreerimata kasutajate hinnang");
define_once("_NOUNREGUSERSVOTES","Registreerimata kasutaja h��li ei ole");
define_once("_WEIGHOUTNOTE","*NB: Sellel Lingil kaalub nii registreeritud kui ka v�liste h��letajate hinnang");
define_once("_NOOUTSIDEVOTES","V�lised ei ole h��letajad");
define_once("_OUTSIDEVOTERS","V�lised h��letajad");
define_once("_UNREGISTEREDUSERS","Registreerimata kasutajad");
define_once("_PROMOTEYOURSITE","Edenda oma veebilehte");
define_once("_PROMOTE01","V�ibolla oled sa huvitatud mitmest 'Hinda veebilehte' kaug-valikust, mis on meil saadaval. Need lasevad sul asetada pildi (v�i isegi hindamise vormi) sinu veebilehele, tellides juurdekasvu numbrites h��li oma lingi saamisel. Palun vali �ks valikutest allj�rgnevast nimekirjast:");
define_once("_TEXTLINK","Lingi tekst");
define_once("_PROMOTE02","�ks v�imalus linkida hindamisvormi, on l�bi lihtsa tekstilingi:");
define_once("_HTMLCODE1","HTML koodi peaksid sa kasutama sellisel juhul allj�rgnevalt:");
define_once("_THENUMBER","Number");
define_once("_IDREFER","HTML koodis viitab sinu lehe ID numbrile $sitename andmebaasis. Ole kindel, et number on olemas. ");
define_once("_BUTTONLINK","Nupu Link");
define_once("_PROMOTE03","Kui sa otsid natuke rohkemat kui tavalist tekstilinki v�id sa kasutada seda v�ikest nupulinki:");
define_once("_RATEIT","Hinda seda lehte!");
define_once("_HTMLCODE2","L�htekoodi �leval asuvat nupust:");
define_once("_REMOTEFORM","Kaughindamise vorm.");
define_once("_PROMOTE04","Kui sa petad sellega, siis me k�rvaldame sinu lingi.Siin on see kaughindamise vorm ja v�lja n�eb sellisena.");
define_once("_VOTE4THISSITE","Hinda seda lehte!");
define_once("_LINKVOTE","Hinda!");
define_once("_HTMLCODE3","Kasutades seda vormi, lased sa kasutajatel hinnata oma linki otse oma lehelt ja hinded salvestatakse siia. Allj�rgnev l�htekood t��tab, kui sa lihtsalt kopeerid ja lisad selle oma veebilehele. Selline n�eb siis v�lja l�htekood:");
define_once("_PROMOTE05","T�nan! ja edu sulle sinu hindamisel!");
define_once("_STAFF","");
define_once("_THANKSBROKEN","T�nan sind, et aitad elus hoida selle kataloogi terviklikkust.");
define_once("_THANKSFORINFO","T�nan informatsiooni eest.");
define_once("_LOOKTOREQUEST","Me vaatame sinu taotlust l�hidalt.");
define_once("_ONLYREGUSERSMODIFY","Ainult registreeritud kasutajad v�ivad soovitada linkide muudatusi. Palun <a href=\"modules.php?name=Your_Account\">registreeri v�i logi sisse</a>.");
define_once("_REQUESTLINKMOD","Lingi muudatuse taotlus");
define_once("_LINKID","Lingi ID");
define_once("_SENDREQUEST","Saada taotlus");
define_once("_THANKSTOTAKETIME","T�nan sind, et sa leidsid aega h��letada selle lehe poolt. ");
define_once("_LETSDECIDE","Sellised kasutajad, nagu sina, aitavad teistele k�lastajatele paremini otsustada millisele lingile klikkida.");
define_once("_RETURNTO","Tagasi");
define_once("_RATENOTE1","Palun �ra hinda sama linki rohkem kui �ks kord.");
define_once("_RATENOTE2","Hindeid saab anda 1 - 10. 1 on v�ga halb ja 10 on v�ga hea.");
define_once("_RATENOTE3","Palun ole objektiivne oma hindega, kui k�ik hindavad  1 v�i 10, siis hinded pole eriti kasulikud.");
define_once("_RATENOTE4","Sa v�id n�ha nimekirja <a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">Top Hinnatud Lingid</a>.");
define_once("_RATENOTE5","�ra hinda oma linki v�i v�istlejat.");
define_once("_YOUAREREGGED","Sa oled registreeritud kasutaja ja oled sisse loginud.");
define_once("_FEELFREE2ADD","V�id vabalt lisada kommentaare selle lehe kohta.");
define_once("_YOUARENOTREGGED","Sa ei ole registreeritud kasutaja v�i sa ei ole sisse loginud.");
define_once("_IFYOUWEREREG","Kui sa olid registreeritud, siis v�id sa postitada kommentaare sellel veebilehel..");
define_once("_WEBLINKS","Lingid");
define_once("_TITLE","Pealkiri");
define_once("_MODIFY","Muuda");
define_once("_COMPLETEVOTE1","Sinu hinnang on lisatud.");
define_once("_COMPLETEVOTE2","Sa oled juba hinnanud seda linki viimase $anonwaitdays p�eva jooksul.");
define_once("_COMPLETEVOTE3","H��leta selle lingi poolt ainul kord.<br>K�ik hinnangud on logitud ja arvutatud.");
define_once("_COMPLETEVOTE4","Sa ei saa hindeid anda lingi poolt, mille sa saatsid.<br>K�ik hinnangud on logitud ja arvutatud.");
define_once("_COMPLETEVOTE5","Hinnangut ei ole valitud - h��lt ei ole talletatud.");
define_once("_COMPLETEVOTE6","Ainult �ks hinnag IP addressi kohta on lubatud iga $outsidewaitdays p�eva j�rel.");
define_once("_LINKSDATESTRING","%d-%b-%Y");

