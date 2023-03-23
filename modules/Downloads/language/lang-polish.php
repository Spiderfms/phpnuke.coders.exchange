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
/*                                                                        */
/* Polish translation by Nordavind�(Bolo) (http://forum.phpnuke.org.pl)   */
/*                                                                        */
/**************************************************************************/

define_once("_URL","URL");
define_once("_PREVIOUS","Poprzednia strona");
define_once("_NEXT","Nast�pna strona");
define_once("_CATEGORY","Kategoria");
define_once("_CATEGORIES","Kategorie");
define_once("_LVOTES","G�os�w");
define_once("_TOTALVOTES","Razem g�os�w:");
define_once("_THEREARE","Aktualnie jest(s�)");
define_once("_NOMATCHES","Brak rezultat�w wyszukiwania");
define_once("_SCOMMENTS","Komentarze");
define_once("_UNKNOWN","Nieznany");
define_once("_DOWNLOADS","razy �ci�gany");
define_once("_AUTHORNAME","Imi� autora");
define_once("_AUTHOREMAIL","Adres email autora");
define_once("_DOWNLOADNAME","Nazwa programu");
define_once("_ADDTHISFILE","Dodaj ten plik");
define_once("_INBYTES","w bajtach");
define_once("_FILESIZE","Rozmiar pliku");
define_once("_VERSION","Wersja");
define_once("_DESCRIPTION","Opis");
define_once("_AUTHOR","Autor");
define_once("_HOMEPAGE","Strona WWW");
define_once("_DOWNLOADNOW","�ci�gnij ten plik teraz!");
define_once("_RATERESOURCE","Oce� ten zas�b");
define_once("_FILEURL","Link do pliku");
define_once("_ADDDOWNLOAD","Dodaj plik");
define_once("_DOWNLOADSMAIN","G��wna");
define_once("_DOWNLOADCOMMENTS","Komentarz");
define_once("_DOWNLOADSMAINCAT","G��wne kategorie dzia�u plik�w");
define_once("_ADDADOWNLOAD","Dodaj nowy plik");
define_once("_DSUBMITONCE","Wy�lij dany plik tylko raz.");
define_once("_DPOSTPENDING","Wszystkie pliki i linki przed ich opublikowaniem b�d� sprawdzane.");
define_once("_RESSORTED","Zawarto�� aktualnie sortowana wed�ug");
define_once("_DOWNLOADSNOTUSER1","Nie jeste� zarejestrowanym u�ytkownikiem albo si� nie zalogowa�e�(a�).");
define_once("_DOWNLOADSNOTUSER2","Je�li si� zarejestrujesz, b�dziesz m�g�(mog�a) doda� pliki na t� stron�.");
define_once("_DOWNLOADSNOTUSER3","Rejestracja u�ytkownika to �atwy i szybki proces.");
define_once("_DOWNLOADSNOTUSER4","Dlaczego wymagamy rejestracji, aby� mia�(a) dost�p do niekt�rych opcji?");
define_once("_DOWNLOADSNOTUSER5","Dlatego, �e oferujemy zawarto�� wy��cznie wysokiej jako�ci,");
define_once("_DOWNLOADSNOTUSER6","Ka�da pozycja jest indywidualnie sprawdzana i zatwierdzana przez nasz zesp�.");
define_once("_DOWNLOADSNOTUSER7","Mamy nadziej�, �e oferujemy Ci wy��cznie warto�ciowe pliki.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account&amp;op=new_user\">Zarejestruj konto</a>");
define_once("_DOWNLOADALREADYEXT","B��D: Ten adres ju� istnieje w bazie!");
define_once("_DOWNLOADNOTITLE","B��D: Musisz poda� TYTU� Twego URL-a!");
define_once("_DOWNLOADNOURL","B��D: Musisz poda� Tw�j URL-a!");
define_once("_DOWNLOADNODESC","B��D: Musisz poda� OPIS Twego URL-a!");
define_once("_DOWNLOADRECEIVED","Otrzymali�my Twoj� propozycj� do dzia�u plik�w. Dzi�kujemy!");
define_once("_NEWDOWNLOADS","Nowe pliki");
define_once("_TOTALNEWDOWNLOADS","W sumie nowych plik�w");
define_once("_DTOTALFORLAST","W sumie nowych plik�w w ostatnich");
define_once("_DBESTRATED","Najwy�ej ocenione pliki - Top");
define_once("_TRATEDDOWNLOADS","razem ocenionych plik�w");
define_once("_SORTDOWNLOADSBY","Sortuj pliki wed�ug");
define_once("_DCATNEWTODAY","Nowe pliki w tej kategorii dodane dzisiaj");
define_once("_DCATLAST3DAYS","Nowe pliki w tej kategorii dodane w ci�gu ostatnich 3 dni");
define_once("_DCATTHISWEEK","Nowe pliki w tej kategorii dodane w ci�gu ostatniego tygodnia");
define_once("_DDATE1","Data (stare pliki umieszczone na pocz�tku)");
define_once("_DDATE2","Data (nowe pliki umieszczone na pocz�tku)");
define_once("_DOWNLOADPROFILE","Profil");
define_once("_DOWNLOADRATINGDET","Szczeg�y oceniania");
define_once("_EDITTHISDOWNLOAD","Edytuj ten wpis");
define_once("_DOWNLOADRATING","Oceny");
define_once("_DOWNLOADVOTE","G�osuj!");
define_once("_REQUESTDOWNLOADMOD","Za��daj modyfikacji pliku");
define_once("_DOWNLOADID","ID pliku");
define_once("_DLETSDECIDE","Wpisy od u�ytkownik�w, takich jak Ty, pomog� innym odwiedzaj�cym zdecydowa� si�, kt�ry z plik�w warto �ci�gn��.");
define_once("_DRATENOTE4","Mo�esz zobaczy� list� <a href=\"modules.php?name=Downloads&d_op=TopRated\">najwy�ej ocenionych zasob�w</a>.");
define_once("_DATE","Data");
define_once("_TO","Do");
define_once("_NEW","Nowy");
define_once("_POPULAR","Popularno��");
define_once("_TOPRATED","Najwy�ej ocenione");
define_once("_ADDITIONALDET","Dodatkowe informacje");
define_once("_EDITORREVIEW","Przegl�d redaktora");
define_once("_REPORTBROKEN","Zg�o� nieczynne linki");
define_once("_AND","i");
define_once("_INDB","w naszej bazie");
define_once("_INSTRUCTIONS","Instrukcje");
define_once("_USERANDIP","Nazwa u�ytkownika i adres IP s� rejestrowane, wi�c prosimy nie atakowa� systemu.");
define_once("_LDESCRIPTION","Opis: (maks. 255 znak�w)");
define_once("_CHECKFORIT","Nie odpisuj na list. Sprawdzimy wkr�tce Tw�j link.");
define_once("_LASTWEEK","Ostatni tydzie�");
define_once("_LAST30DAYS","Ostatnie 30 dni");
define_once("_1WEEK","1 tydzie�");
define_once("_2WEEKS","2 tygodnie");
define_once("_30DAYS","30 dni");
define_once("_SHOW","Poka�");
define_once("_DAYS","dni");
define_once("_ADDEDON","Dodano");
define_once("_RATING","Oceny");
define_once("_DETAILS","Detale");
define_once("_OF","z");
define_once("_TVOTESREQ","minimalna ilo�� wymaganych g�os�w");
define_once("_SHOWTOP","Poka� Top");
define_once("_MOSTPOPULAR","Najbardziej popularne - Top");
define_once("_OFALL","wszystkich");
define_once("_POPULARITY","Popularno��");
define_once("_SELECTPAGE","Wybierz stron�");
define_once("_MAIN","G��wna");
define_once("_NEWTODAY","Nowe dzisiaj");
define_once("_NEWLAST3DAYS","Nowe w ostatnich 3 dniach");
define_once("_NEWTHISWEEK","Nowe w tym tygodniu");
define_once("_POPULARITY1","Popularno�� (od najmniej do najcz�ciej �ci�ganych)");
define_once("_POPULARITY2","Popularno�� (Od najcz�ciej do najmniej �ci�ganych)");
define_once("_TITLEAZ","Tytu�y (od A do Z)");
define_once("_TITLEZA","Tytu�y (od Z do A)");
define_once("_RATING1","Ocena (od najni�szych do najwy�szych wynik�w)");
define_once("_RATING2","Ocena (od najwy�szych do najni�szych wynik�w)");
define_once("_SEARCHRESULTS4","Wyniki wyszukiwania dla");
define_once("_USUBCATEGORIES","podkategorie");
define_once("_TRY2SEARCH","Spr�buj poszuka�");
define_once("_INOTHERSENGINES","w innych wyszukiwarkach");
define_once("_EDITORIAL","Redagowany");
define_once("_EDITORIALBY","Redagowany przez");
define_once("_NOEDITORIAL","Aktualnie brak na tej stronie.");
define_once("_RATETHISSITE","Oce� ten zas�b");
define_once("_ISTHISYOURSITE","Czy to Tw�j zas�b?");
define_once("_ALLOWTORATE","Pozw�l innym u�ytkownikom na ocenianie!");
define_once("_OVERALLRATING","Ocena og�lna");
define_once("_TOTALOF","Razem");
define_once("_USER","U�ytkownik");
define_once("_USERAVGRATING","Ocena �rednia u�ytkownika");
define_once("_NUMRATINGS","# ocen");
define_once("_REGISTEREDUSERS","Zarejestrowanych u�ytkownik�w");
define_once("_NUMBEROFRATINGS","Ilo�� ocen");
define_once("_NOREGUSERSVOTES","Brak g�os�w zarejestrowanych u�ytkownik�w");
define_once("_BREAKDOWNBYVAL","Awaria oceniania poprzez warto��");
define_once("_LTOTALVOTES","razem g�os�w");
define_once("_HIGHRATING","Najwy�sze oceny");
define_once("_LOWRATING","Najni�sze oceny");
define_once("_NUMOFCOMMENTS","Liczba komentarzy");
define_once("_WEIGHNOTE","* Nota: Stosunek ocen u�ytkownik�w zarejestrowanych do ocen u�ytkownik�w niezarejestrowanych");
define_once("_NOUNREGUSERSVOTES","Brak g�os�w niezarejestrowanych u�ytkownik�w");
define_once("_WEIGHOUTNOTE","* Nota: Stosunek ocen u�ytkownik�w zarejestrowanych do ocen innych u�ytkownik�w");
define_once("_NOOUTSIDEVOTES","Brak zewn�trznych g�os�w");
define_once("_OUTSIDEVOTERS","G�osuj�cy z zewn�trz");
define_once("_UNREGISTEREDUSERS","Niezarejestrowanych u�ytkownik�w");
define_once("_PROMOTEYOURSITE","Wypromuj swoj� stron�");
define_once("_PROMOTE01","Mo�e jeste� zainteresowany(a) kilkoma dost�pnymi opcjami zdalnego oceniania strony? To pozwoli Ci umie�ci� obraz (lub nawet formularz) na Twojej stronie, aby podnie�� liczb� g�os�w na Twoj� stron�. Prosimy wybra� jedn� z opcji umieszczonych poni�ej:");
define_once("_TEXTLINK","Tekst linku");
define_once("_PROMOTE02","Jedyny spos�b pod��czenia si� do formularza ocen to prosty link tekstowy:");
define_once("_HTMLCODE1","Kod HTML, kt�ry trzeba zastosowa� w tym przypadku, to:");
define_once("_THENUMBER","Numer");
define_once("_IDREFER","Numer ID Twojej strony w bazie danych $sitename. Upewnij si�, czy taki numer istnieje.");
define_once("_BUTTONLINK","Link przyciskowy");
define_once("_PROMOTE03","Je�li szukasz niewiele ponad prosty link tekstowy, to mo�e chcesz zastosowa� link przyciskowy:");
define_once("_RATEIT","Oce� t� stron�!");
define_once("_HTMLCODE2","Kod �r�d�owy powy�szego przycisku to:");
define_once("_REMOTEFORM","Zdalny formularz g�osowania");
define_once("_PROMOTE04","Je�eli b�dziesz tu oszukiwa�, usuniemy Tw�j link. M�wimy, �e to jest zdalny formularz g�osowania, kt�ry wygl�da tak");
define_once("_VOTE4THISSITE","G�osuj na t� stron�!");
define_once("_HTMLCODE3","U�ycie tego formularza powoli u�ytkownikom na ocen� Twego zasobu bezpo�rednio z Twojej strony i zapisanie wyniku tutaj. Powy�szy formularz jest wy��czony, ale nast�puj�cy kod �r�d�owy b�dzie dzia�a� je�eli po prostu skopiujesz go i wkleisz na swoj� stron�. Kod �r�d�owy pokazujemy poni�ej:");
define_once("_PROMOTE05","Dzi�kujemy! Powodzenia w ocenach!");
define_once("_STAFF","Zesp�");
define_once("_THANKSBROKEN","Dzi�kujemy za pomoc w utrzymaniu integralno�ci tego katalogu.");
define_once("_SECURITYBROKEN","Z powod�w bezpiecze�stwa Twoja nazwa u�ytkownika i adres IP b�d� zapisywane.");
define_once("_THANKSFORINFO","Dzi�kujemy za informacje.");
define_once("_LOOKTOREQUEST","Zajrzymy niebawem w Twoj� sugesti�.");
define_once("_SENDREQUEST","Wy�lij ��danie");
define_once("_THANKSTOTAKETIME","Dzi�kujemy za sp�dzenie czasu na ocen� strony");
define_once("_RETURNTO","Powr�t do");
define_once("_RATENOTE1","Prosimy nie g�osowa� na ten sam zas�b wi�cej ni� raz.");
define_once("_RATENOTE2","Skala jest od 1 do 10, gdzie 1 znaczy kiepski i 10 znaczy wspania�y.");
define_once("_RATENOTE3","Prosimy o obiektywizm w g�osowaniu, je�li kto� otrzyma 1 i 10, ocena nie b�dzie zbyt u�yteczna.");
define_once("_RATENOTE5","Nie g�osuj na w�asne zasoby lub zasoby konkurencji.");
define_once("_YOUAREREGGED","Jeste� zarejestrowanym i zalogowanym u�ytkownikiem.");
define_once("_FEELFREE2ADD","Swobodnie dodaj komentarz na temat tego pliku.");
define_once("_YOUARENOTREGGED","Nie jeste� zarejestrowanym u�ytkownikiem lub si� nie zalogowa�e�(a�).");
define_once("_IFYOUWEREREG","Je�li si� zarejestrujesz, mo�esz dodawa� komentarze na tej stronie.");
define_once("_TITLE","Tytu�");
define_once("_MODIFY","Modyfikuj");
define_once("_COMPLETEVOTE1","Tw�j g�os ma du�e znaczenie dla nas.");
define_once("_COMPLETEVOTE2","G�osowa�e� na ten zas�b $anonwaitdays dni temu.");
define_once("_COMPLETEVOTE3","G�osuj tylko raz.<br>Wszystkie g�osy s� logowane i sprawdzane.");
define_once("_COMPLETEVOTE4","Nie mo�esz g�osowa� na link, kt�ry sam doda�e�.<br>Wszystkie g�osy s� logowane i sprawdzane.");
define_once("_COMPLETEVOTE5","Nie wybrana ocena - g�os nie zaliczony");
define_once("_COMPLETEVOTE6","Tylko jeden g�os dozwolony raz na $outsidewaitdays dni.");
define_once("_LINKSDATESTRING","%d-%m-%Y");

