<?php
global $sitename;
if(!isset($anonwaitdays)) { $anonwaitdays = 0; }
if(!isset($outsidewaitdays)) { $outsidewaitdays = 0; }

 
/**************************************************************************/
/* PHP-NUKE: Advanced Content Management System                           */
/* ============================================                           */
/*                                                                        */
/* Php-Nuke'nin s�rekli geli�mesine ba�l� olarak eski T�rk�e dil dosyalar�*/
/* g�ncelli�ini yitirdi�i i�in "HighLAndeR" taraf�ndan "MaXCoDeR"in       */
/* yapm�� oldu�u �eviriler g�ncelle�tirilip yeni �eviriler eklenmi�tir... */
/*                                                                        */
/* NOT: Yard�mlar� i�in Gurol400(gurol400@propc.org)'e te�ekk�rler.       */
/*                                                                        */
/* T�rk�e �evirmeni: HighLAndeR                                           */
/* Email: highlander@propc.org ICQ#: 110930777 	URL: http://www.propc.org */
/*                                                                        */
/* T�rk�e �evirmeni: Selim "MaXCoDeR" �umlu                               */
/* Mail:webmaster@pcnet.com.tr ICQ:19648424 URL: http://www.turknuke.com  */
/**************************************************************************/

define_once("_URL","URL");
define_once("_PREVIOUS","�nceki Sayfa");
define_once("_NEXT","Sonraki Sayfa");
define_once("_YOURNAME","�sminiz");
define_once("_CATEGORY","Kategori");
define_once("_CATEGORIES","Kategori");
define_once("_LVOTES","oy");
define_once("_TOTALVOTES","Toplam Oy:");
define_once("_LINKTITLE","Ba�lant� Ba�l���");
define_once("_HITS","Hit");
define_once("_THEREARE","Veritaban�nda");
define_once("_NOMATCHES","Uygun sonu� bulunamad�");
define_once("_SCOMMENTS","Yorum");
define_once("_DESCRIPTION","Tan�m");
define_once("_DATE","Tarih");
define_once("_TO","Kime");
define_once("_ADDLINK","Ba�lant� Ekle");
define_once("_NEW","Yeni");
define_once("_POPULAR","Pop�ler");
define_once("_TOPRATED","En �yi");
define_once("_RANDOM","Rastgele");
define_once("_LINKSMAIN","Ba�lant�lar Anasayfas�");
define_once("_LINKCOMMENTS","Ba�lant� Yorumlar�");
define_once("_ADDITIONALDET","Ek Detaylar");
define_once("_EDITORREVIEW","Edit�r �ncelemesi");
define_once("_REPORTBROKEN","K�r�k Ba�lant� Bildir");
define_once("_LINKSMAINCAT","Ba�lant� Ana Kategorileri");
define_once("_AND","ve");
define_once("_INDB","bulunuyor");
define_once("_ADDALINK","Yeni Ba�lant� Ekle");
define_once("_INSTRUCTIONS","A��klamalar");
define_once("_SUBMITONCE","Bir ba�lant�y� sadece bir kez g�nderin.");
define_once("_POSTPENDING","G�nderilen t�m ba�lant�lar onaylanmal�d�r.");
define_once("_USERANDIP","Kullan�c� ve IP adresi kaydedilir. Bu y�zden sistemi k�t�ye kullanmay�n.");
define_once("_PAGETITLE","Sayfa Ba�l���");
define_once("_PAGEURL","Sayfa Adresi");
define_once("_YOUREMAIL","Email'iniz");
define_once("_LDESCRIPTION","Tan�m: (En fazla 255 karakter)");
define_once("_ADDURL","Adres Ekle");
define_once("_LINKSNOTUSER1","Kay�tl� de�ilsiniz veya giri� yapmam��s�n�z.");
define_once("_LINKSNOTUSER2","Kay�tl� olsayd�n�z bu siteye ba�lant� g�nderebilecektiniz.");
define_once("_LINKSNOTUSER3","Kay�tl� kullan�c� olmak k�sa ve basit bir i�lemdir.");
define_once("_LINKSNOTUSER4","Neden baz� �zelliklere eri�im i�in kay�t gerekli?");
define_once("_LINKSNOTUSER5","��nk� size en kaliteli i�eri�i sunabilmek i�in,");
define_once("_LINKSNOTUSER6","her ��e tek tek edit�rlerimiz taraf�ndan incelenip onaylan�yor.");
define_once("_LINKSNOTUSER7","Size sadece de�erli bilgielr sunmak istiyoruz.");
define_once("_LINKSNOTUSER8","<a href=\"modules.php?name=Your_Account\">Hesap Kayd�</a>");
define_once("_LINKALREADYEXT","HATA: Bu adres zaten veritaban�m�zda kay�tl�!");
define_once("_LINKNOTITLE","HATA: Adres i�in BA�LIK girmelisiniz!");
define_once("_LINKNOURL","HATA: Adres i�in bir URL girmelisiniz!");
define_once("_LINKNODESC","HATA: Adres i�in bir TANIM girmelisiniz!");
define_once("_LINKRECEIVED","Ba�lant� �neriniz al�nd�. Te�ekk�rler!");
define_once("_EMAILWHENADD","Kabul edildi�inde bir email alacaks�n�z.");
define_once("_CHECKFORIT","Bir email adresi yazmad�n�z. Yine de ba�lant�n�z kontrol edilecek.");
define_once("_NEWLINKS","Yeni Ba�lant�lar");
define_once("_TOTALNEWLINKS","Yeni Ba�lant�lar");
define_once("_LASTWEEK","Ge�en Hafta");
define_once("_LAST30DAYS","Son 30 G�n");
define_once("_1WEEK","1 Hafta");
define_once("_2WEEKS","2 Hafta");
define_once("_30DAYS","30 G�n");
define_once("_SHOW","G�ster");
define_once("_TOTALFORLAST","Yeni linkler: Son");
define_once("_DAYS","g�n");
define_once("_ADDEDON","Eklenme");
define_once("_RATING","Puan");
define_once("_RATESITE","Siteye Puan Ver");
define_once("_DETAILS","Detaylar");
define_once("_BESTRATED","En �yi Ba�lant�lar - Top");
define_once("_OF","");
define_once("_TRATEDLINKS","toplam ba�lant�");
define_once("_TVOTESREQ","minimum oy gerekir");
define_once("_SHOWTOP","En �yi");
define_once("_MOSTPOPULAR","En Pop�ler - Top");
define_once("_OFALL","of all");
define_once("_SORTLINKSBY","Ba�lant�lar� S�rala");
define_once("_SITESSORTED","�u Anki S�ralama");
define_once("_POPULARITY","Pop�lerlik");
define_once("_SELECTPAGE","Sayfa Se�in");
define_once("_MAIN","Anasayfa");
define_once("_NEWTODAY","Bug�n");
define_once("_NEWLAST3DAYS","Son 3 G�n");
define_once("_NEWTHISWEEK","Bu Hafta");
define_once("_CATNEWTODAY","Bu Kategoriye Bug�n Eklenen Ba�lant�lar");
define_once("_CATLAST3DAYS","Bu Kategoriye Son 3 G�n ��inde Eklenenler");
define_once("_CATTHISWEEK","Bu Kategoriye Bu Hafta Eklenen Ba�lant�lar");
define_once("_POPULARITY1","Pop�lerlik (En Azdan En Y�kse�e)");
define_once("_POPULARITY2","Pop�lerlik (En Y�ksekten En Aza)");
define_once("_TITLEAZ","Ba�l�k (A - Z)");
define_once("_TITLEZA","Ba�l�k (Z - A)");
define_once("_DATE1","Tarih (Eskiler Ba�a)");
define_once("_DATE2","Tarih (Yeniler Ba�a)");
define_once("_RATING1","Puan (D���kten Y�kse�e)");
define_once("_RATING2","Paun (Y�ksekten D����e)");
define_once("_SEARCHRESULTS4","Arama Sonu�lar�:");
define_once("_USUBCATEGORIES","Alt-Kategori");
define_once("_LINKS","Ba�lant�");
define_once("_TRY2SEARCH","");
define_once("_INOTHERSENGINES","i�in di�er arama motorlar�n� deneyin");
define_once("_EDITORIAL","Edit�rel");
define_once("_LINKPROFILE","Ba�lant� Profili");
define_once("_EDITORIALBY","Edit�rel:");
define_once("_NOEDITORIAL","Bu site i�in �u an edit�rel yok.");
define_once("_VISITTHISSITE","Siteyi Ziyaret Et");
define_once("_RATETHISSITE","Bu Kayna�a Puan Ver");
define_once("_ISTHISYOURSITE","Bu sizin kayna��n�z m�?");
define_once("_ALLOWTORATE","Di�er kullan�c�lar�n sitenizden oy vermesini sa�lay�n!");
define_once("_LINKRATINGDET","Ba�lant� Puan� Detaylar�");
define_once("_OVERALLRATING","Puan");
define_once("_TOTALOF","Toplam");
define_once("_USER","Kullan�c�");
define_once("_USERAVGRATING","Ortalama Puan");
define_once("_NUMRATINGS","Puan Say�s�");
define_once("_EDITTHISLINK","Ba�lant� D�zenle");
define_once("_REGISTEREDUSERS","Kay�tl� Kullan�c�");
define_once("_NUMBEROFRATINGS","Puan Say�s�");
define_once("_NOREGUSERSVOTES","Kay�tl� Kullan�c� Oyu Yok");
define_once("_BREAKDOWNBYVAL","De�er Bak�m�ndan Oylar");
define_once("_LTOTALVOTES","toplam oy");
define_once("_LINKRATING","Ba�lant� Reytingi");
define_once("_HIGHRATING","Y�ksek Puan");
define_once("_LOWRATING","Al�ak Puan");
define_once("_NUMOFCOMMENTS","Yorum Say�s�");
define_once("_WEIGHNOTE","* Not: Bu ba�lant� kay�tl� ve kay�ts�z oylar a��rl�kl�d�r");
define_once("_NOUNREGUSERSVOTES","Kay�ts�z Kullan�c� Oyu Yok");
define_once("_WEIGHOUTNOTE","* Not: Bu ba�lant� kay�tl� ve d��ar�dan oylar a��rl�kl�d�r");
define_once("_NOOUTSIDEVOTES","D��ar�dan Oy Yok");
define_once("_OUTSIDEVOTERS","D��ar�dan Oylayanlar");
define_once("_UNREGISTEREDUSERS","Kay�ts�z Kullan�c�lar");
define_once("_PROMOTEYOURSITE","Sitenizi Tan�t�n");
define_once("_PROMOTE01","Belki 'Siteye Puan Ver' se�eneklerimizden biriyle ilgilenebilirsiniz. Bunlar kayna��n�za bir grafik (veya bir form) koyarak ald���n�z oy say�s�n� art�rmay� ama�l�yor. L�tfen a�a��daki se�eneklerden birini se�in:");
define_once("_TEXTLINK","Metin Ba�lant�");
define_once("_PROMOTE02","Puanlama formuna ula�man�n basit bir yolu metin ba�lant�d�r:");
define_once("_HTMLCODE1","Bu durumda kullanman�z gereken HTML kodu a�a��dad�r:");
define_once("_THENUMBER","Say�");
define_once("_IDREFER","HTML kayna�� referanslar�nda $sitename veritaban�ndaki site ID'niz bulunur. Bu numaran�n do�rulu�undan emin olun.");
define_once("_BUTTONLINK","Buton Ba�lant�");
define_once("_PROMOTE03","Basit bir metin ba�lant�dan daha fazlas�n� ar�yorsan�z, k���k bir buton ba�lant� kullanmak isteyebilirsiniz:");
define_once("_RATEIT","Bu Siteye Puan Verin!");
define_once("_HTMLCODE2","Yukar�daki buton i�in kaynak kodu:");
define_once("_REMOTEFORM","Uzaktan Puanlama Formu");
define_once("_PROMOTE04","Bunda hile yapmaya �al���rsan�z ba�lant�n�z silinir. Uzaktan puanlama formu buna benzer.");
define_once("_VOTE4THISSITE","Bu Siteye Oy Verin!");
define_once("_LINKVOTE","Oy Ver!");
define_once("_HTMLCODE3","Bu formu kullanarak kullan�c�lar kayna��n�z� kendi sitenizden oylayabilirler. Yukar�daki form pasiftir, fakat a�a��daki kodu sitenize kopyalarsan�z �al��acakt�r:");
define_once("_PROMOTE05","Te�ekk�rler ve puanlamalarda ba�ar�lar!");
define_once("_STAFF","Tak�m�");
define_once("_THANKSBROKEN","Bu dizin �al��malar�na katk�da bulundu�unuz i�in te�ekk�rler.");
define_once("_THANKSFORINFO","Bilgi i�in te�ekk�rler.");
define_once("_LOOKTOREQUEST","�ste�iniz k�sa s�re i�inde de�erlendirilecek.");
define_once("_ONLYREGUSERSMODIFY","Sadece kay�tl� kullan�c�lar dosya de�i�iklik ba�vurusu yapabilir. L�tfen <a href=\"modules.php?name=Your_Account\">kay�t olun yada sisteme giri� yap�n</a>.");
define_once("_REQUESTLINKMOD","Ba�lant� De�i�ikli�i �ste");
define_once("_LINKID","Ba�lant� ID");
define_once("_SENDREQUEST","�stek G�nder");
define_once("_THANKSTOTAKETIME","Burada bir site puanlad���n�z i�in te�ekk�rler:");
define_once("_LETSDECIDE","Sizin gibi kullan�c�lar�n oylar� di�er kullan�c�lar�n daha iyi ba�lant�lar� se�mesi yard�mc� olacakt�r.");
define_once("_RETURNTO","Geri D�n:");
define_once("_RATENOTE1","L�tfen bir kayna�� bir kereden fazla oylamay�n.");
define_once("_RATENOTE2","�l�� 1 - 10 aras�d�r, 1 zay�f ve 10 m�kemmel.");
define_once("_RATENOTE3","L�tfen objektif olun, herkes 1 veya 10 al�rsa, puanlar kullan��l� olamaz.");
define_once("_RATENOTE4","<a href=\"modules.php?name=Web_Links&amp;l_op=TopRated\">En �yi Kaynaklar</a> listesini g�rebilirsiniz.");
define_once("_RATENOTE5","Kendi kayna��n�z� oylamay�n.");
define_once("_YOUAREREGGED","Kay�tl� kullan�c�s�n�z ve giri� yapm��s�n�z.");
define_once("_FEELFREE2ADD","Bu site hakk�nda yorum ekleyebilirsiniz.");
define_once("_YOUARENOTREGGED","Kay�tl� de�ilsiniz veya giri� yapmam��s�n�z.");
define_once("_IFYOUWEREREG","Kay�tl� olsayd�n�z site hakk�nda yorum yazabilecektiniz.");
define_once("_WEBLINKS","Web Ba�lant�lar�");
define_once("_TITLE","Ba�l�k");
define_once("_MODIFY","De�i�tir");
define_once("_COMPLETEVOTE1","Oyunuz de�erlendirilmi�tir.");
define_once("_COMPLETEVOTE2","Son $anonwaitdays g�n i�inde zaten oyunuzu kullanm��s�n�z.");
define_once("_COMPLETEVOTE3","Sadece bir kez oy kullan�n.<br>T�m oylar keydedilir ve incelenir.");
define_once("_COMPLETEVOTE4","Kendi �nerdi�iniz link i�in oy kullanamazs�n�z.<br>T�m oylar keydedilir ve incelenir.");
define_once("_COMPLETEVOTE5","Puan se�ilmemi� - oy verilmedi");
define_once("_COMPLETEVOTE6","Her IP adresi $outsidewaitdays g�n i�inde sadece bir oy kullanabilir.");
define_once("_LINKSDATESTRING","%e-%m-%y");

