<?php
global $sitename, $anonwaitdays, $outsidewaitdays;


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
define_once("_CATEGORY","Kategori");
define_once("_CATEGORIES","Kategori");
define_once("_LVOTES","oy");
define_once("_TOTALVOTES","Toplam Oy:");
define_once("_THEREARE","Veritaban�nda");
define_once("_NOMATCHES","Uygun sonu� bulunamad�");
define_once("_SCOMMENTS","Yorum");
define_once("_UNKNOWN","Bilinmeyen");
define_once("_AUTHORNAME","Yazar�n �smi");
define_once("_AUTHOREMAIL","Yazar�n Emaili");
define_once("_DOWNLOADNAME","Program �smi");
define_once("_ADDTHISFILE","Dosya Ekle");
define_once("_INBYTES","byte");
define_once("_FILESIZE","Boyutu");
define_once("_VERSION","S�r�m");
define_once("_DESCRIPTION","Tan�m");
define_once("_AUTHOR","Yazar");
define_once("_HOMEPAGE","Ana Sayfa");
define_once("_DOWNLOADNOW","Bu dosyay� indir!");
define_once("_RATERESOURCE","Puan Ver");
define_once("_FILEURL","Dosya Ba�lant�s�");
define_once("_ADDDOWNLOAD","Dosya Ekle");
define_once("_DOWNLOADSMAIN","Dosyalar Anasayfas�");
define_once("_DOWNLOADCOMMENTS","Dosya Yorumlar�");
define_once("_DOWNLOADSMAINCAT","Dosya Ana Kategorileri");
define_once("_ADDADOWNLOAD","Yeni Dosya Ekle");
define_once("_DSUBMITONCE","Bir dosyay� sadece bir kez ekleyin.");
define_once("_DPOSTPENDING","G�nderilen t�m dosyalar onay bekler.");
define_once("_RESSORTED","�u anki s�ralama");
define_once("_DOWNLOADSNOTUSER1","Kay�tl� de�ilsiniz veya giri� yapmam��s�n�z.");
define_once("_DOWNLOADSNOTUSER2","Kay�tl� olsayd�n�z dosya ekleyebilirdiniz.");
define_once("_DOWNLOADSNOTUSER3","Kay�tl� bir kullan�c� olmak k�sa ve kolay bir i�lemdir.");
define_once("_DOWNLOADSNOTUSER4","Neden baz� �zelliklere eri�im i�in kay�t gerekli?");
define_once("_DOWNLOADSNOTUSER5","��nk� size en kaliteli i�eri�i sunabilmek i�in,");
define_once("_DOWNLOADSNOTUSER6","t�m ��elerin tak�m�m�z taraf�ndan incelenip onaylanmas� gerekiyor.");
define_once("_DOWNLOADSNOTUSER7","Size sadece de�erli bilgiler sunmak istiyoruz.");
define_once("_DOWNLOADSNOTUSER8","<a href=\"modules.php?name=Your_Account&op=new_user\">Yeni Hesap</a>");
define_once("_DOWNLOADALREADYEXT","HATA: Bu URL veritaban�nda mevcut!");
define_once("_DOWNLOADNOTITLE","HATA: URL i�in bir BA�LIK girmelisiniz!");
define_once("_DOWNLOADNOURL","HATA: URL i�in bir ADRES girmelisiniz!");
define_once("_DOWNLOADNODESC","HATA: URL i�in bir TANIM girmelisiniz!");
define_once("_DOWNLOADRECEIVED","Dosya �neriniz al�nd�. Te�ekk�rler!");
define_once("_NEWDOWNLOADS","Yeni Dosya");
define_once("_TOTALNEWDOWNLOADS","Toplam Yeni Dosya");
define_once("_DTOTALFORLAST","Toplam yeni dosya:");
define_once("_DBESTRATED","En �yi Dosyalar - Top");
define_once("_TRATEDDOWNLOADS","toplam puanl� dosya");
define_once("_SORTDOWNLOADSBY","Dosyalar� S�rala:");
define_once("_DCATNEWTODAY","Bug�n Eklenen Yeni Dosya");
define_once("_DCATLAST3DAYS","Son 3 G�n ��inde Eklenen Yeni Dosya");
define_once("_DCATTHISWEEK","Bu Hafta Eklenen Yeni Dosya");
define_once("_DDATE1","Tarih (Eskiler Ba�a)");
define_once("_DDATE2","Tarih (Yeniler Ba�a)");
define_once("_DOWNLOADS","Dosyalar");
define_once("_DOWNLOADPROFILE","Dosya Profili");
define_once("_DOWNLOADRATINGDET","Dosya Puanlama Detaylar�");
define_once("_EDITTHISDOWNLOAD","Bu Dosyay� D�zenle");
define_once("_DOWNLOADRATING","Dosya Puanlar�");
define_once("_DOWNLOADVOTE","Oy Ver!");
define_once("_DONLYREGUSERSMODIFY","Sadece kay�tl� kullan�c�lar dosya de�i�ikli�i �nerebilirler. L�tfen <a href=\"modules.php?name=Your_Account\">kay�t olun yada sisteme giri� yap�n</a>.");
define_once("_REQUESTDOWNLOADMOD","Dosya De�i�iklik �ste�i");
define_once("_DOWNLOADID","Dosya ID");
define_once("_DLETSDECIDE","Sizin gibi kullan�c�lardan gelen giri�ler di�er kullan�c�lar�n iyi dosyalar� se�mesine yard�mc� olacakt�r.");
define_once("_DRATENOTE4","<a href=\"downloads.php?op=TopRated\">En �yi Kaynaklar</a> listesini g�rebilirsiniz.");
define_once("_DATE","Tarih");
define_once("_TO","Kime");
define_once("_NEW","Yeni");
define_once("_POPULAR","Pop�ler");
define_once("_TOPRATED","En �yi");
define_once("_ADDITIONALDET","Ek Detaylar");
define_once("_EDITORREVIEW","Edit�r �ncelemesi");
define_once("_REPORTBROKEN","K�r�k Ba�lant� Bildir");
define_once("_AND","ve");
define_once("_INDB","bulunuyor");
define_once("_INSTRUCTIONS","A��klamalar");
define_once("_USERANDIP","Kullan�c� ad� ve IP adresi kaydedilir. Bu y�zden sistemi k�t�ye kullanmay�n.");
define_once("_LDESCRIPTION","Tan�m: (En fazla 255 karakter)");
define_once("_CHECKFORIT","Bir email adresi yazmad�n�z. Yine de ba�lant�n�z kontrol edilecek.");
define_once("_LASTWEEK","Ge�en Hafta");
define_once("_LAST30DAYS","Son 30 G�n");
define_once("_1WEEK","1 Hafta");
define_once("_2WEEKS","2 Hafta");
define_once("_30DAYS","30 G�n");
define_once("_SHOW","G�ster");
define_once("_DAYS","g�n");
define_once("_ADDEDON","Eklenme");
define_once("_RATING","Puan");
define_once("_DETAILS","Detaylar");
define_once("_OF","");
define_once("_TVOTESREQ","minimum oy gerekir");
define_once("_SHOWTOP","En �yi");
define_once("_MOSTPOPULAR","En Pop�ler - Top");
define_once("_OFALL","of all");
define_once("_POPULARITY","Pop�lerlik");
define_once("_SELECTPAGE","Sayfa Se�in");
define_once("_MAIN","Anasayfa");
define_once("_NEWTODAY","Bug�n");
define_once("_NEWLAST3DAYS","Son 3 G�n");
define_once("_NEWTHISWEEK","Bu Hafta");
define_once("_POPULARITY1","Pop�lerlik (En Azdan En Y�kse�e)");
define_once("_POPULARITY2","Pop�lerlik (En Y�ksekten En Aza)");
define_once("_TITLEAZ","Ba�l�k (A - Z)");
define_once("_TITLEZA","Ba�l�k (Z - A)");
define_once("_RATING1","Puan (D���kten Y�kse�e)");
define_once("_RATING2","Paun (Y�ksekten D����e)");
define_once("_SEARCHRESULTS4","Arama Sonu�lar�:");
define_once("_USUBCATEGORIES","Alt-Kategori");
define_once("_TRY2SEARCH","");
define_once("_INOTHERSENGINES","i�in di�er arama motorlar�n� deneyin");
define_once("_EDITORIAL","Edit�rel");
define_once("_EDITORIALBY","Edit�rel:");
define_once("_NOEDITORIAL","Bu site i�in �u an edit�rel yok.");
define_once("_RATETHISSITE","Bu Dosyaya Puan Ver");
define_once("_ISTHISYOURSITE","Bu sizin dosyan�z m�?");
define_once("_ALLOWTORATE","Di�er kullan�c�lar�n sitenizden oy vermesini sa�lay�n!");
define_once("_OVERALLRATING","Puan");
define_once("_TOTALOF","Toplam");
define_once("_USER","Kullan�c�");
define_once("_USERAVGRATING","Ortalama Puan");
define_once("_NUMRATINGS","Puan Say�s�");
define_once("_REGISTEREDUSERS","Kay�tl� Kullan�c�");
define_once("_NUMBEROFRATINGS","Puan Say�s�");
define_once("_NOREGUSERSVOTES","Kay�tl� Kullan�c� Oyu Yok");
define_once("_BREAKDOWNBYVAL","De�er Bak�m�ndan Oylar");
define_once("_LTOTALVOTES","toplam oy");
define_once("_HIGHRATING","Y�ksek Puan");
define_once("_LOWRATING","Al�ak Puan");
define_once("_NUMOFCOMMENTS","Yorum Say�s�");
define_once("_WEIGHNOTE","* Not: Bu kaynak kay�tl� ve kay�ts�z oylar a��rl�kl�d�r");
define_once("_NOUNREGUSERSVOTES","Kay�ts�z Kullan�c� Oyu Yok");
define_once("_WEIGHOUTNOTE","* Not: Bu kaynak kay�tl� ve d��ar�dan oylar a��rl�kl�d�r");
define_once("_NOOUTSIDEVOTES","D��ar�dan Oy Yok");
define_once("_OUTSIDEVOTERS","D��ar�dan Oylayanlar");
define_once("_UNREGISTEREDUSERS","Kay�ts�z Kullan�c�lar");
define_once("_PROMOTEYOURSITE","Sitenizi Tan�t�n");
define_once("_PROMOTE01","Belki 'Dosyaya Puan Ver' se�eneklerimizden biriyle ilgilenebilirsiniz. Bunlar kayna��n�za bir grafik (veya bir form) koyarak ald���n�z oy say�s�n� art�rmay� ama�l�yor. L�tfen a�a��daki se�eneklerden birini se�in:");
define_once("_TEXTLINK","Metin Ba�lant�");
define_once("_PROMOTE02","Puanlama formuna ula�man�n basit bir yolu metin ba�lant�d�r:");
define_once("_HTMLCODE1","Bu durumda kullanman�z gereken HTML kodu a�a��dad�r:");
define_once("_THENUMBER","Say�");
define_once("_IDREFER","HTML kayna�� referanslar�nda $sitename veritaban�ndaki site ID'niz bulunur. Bu numaran�n do�rulu�undan emin olun.");
define_once("_BUTTONLINK","Buton Ba�lant�");
define_once("_PROMOTE03","Basit bir metin ba�lant�dan daha fazlas�n� ar�yorsan�z, k���k bir buton ba�lant� kullanmak isteyebilirsiniz:");
define_once("_RATEIT","Bu Dosyaya Puan Verin!");
define_once("_HTMLCODE2","Yukar�daki buton i�in kaynak kodu:");
define_once("_REMOTEFORM","Uzaktan Puanlama Formu");
define_once("_PROMOTE04","Bunda hile yapmaya �al���rsan�z ba�lant�n�z silinir. Uzaktan puanlama formu buna benzer.");
define_once("_VOTE4THISSITE","Bu Dosyaya Oy Verin!");
define_once("_HTMLCODE3","Bu formu kullanarak kullan�c�lar kayna��n�z� kendi sitenizden oylayabilirler. Yukar�daki form pasiftir, fakat a�a��daki kodu sitenize kopyalarsan�z �al��acakt�r:");
define_once("_PROMOTE05","Te�ekk�rler! ve puanlamalarda ba�ar�lar!");
define_once("_STAFF","Tak�m�");
define_once("_THANKSBROKEN","Bu dizin �al��malar�na katk�da bulundu�unuz i�in te�ekk�rler.");
define_once("_SECURITYBROKEN","G�venlik nedeniyle kullan�c� ad� ve IP'niz ge�ici olarak kaydedilecek.");
define_once("_THANKSFORINFO","Bilgi i�in te�ekk�rler.");
define_once("_LOOKTOREQUEST","�ste�iniz k�sa s�re i�inde de�erlendirilecek.");
define_once("_SENDREQUEST","�stek G�nder");
define_once("_THANKSTOTAKETIME","Burada bir dosya puanlad���n�z i�in te�ekk�rler:");
define_once("_RETURNTO","Geri D�n:");
define_once("_RATENOTE1","L�tfen bir kayna�� bir kereden fazla oylamay�n.");
define_once("_RATENOTE2","�l�� 1 - 10 aras�d�r, 1 zay�f ve 10 m�kemmel.");
define_once("_RATENOTE3","L�tfen objektif olun, herkes 1 veya 10 al�rsa, puanlar kullan��l� olamaz.");
define_once("_RATENOTE5","Kendi dosyan�z� oylamay�n.");
define_once("_YOUAREREGGED","Kay�tl� kullan�c�s�n�z ve giri� yapm��s�n�z.");
define_once("_FEELFREE2ADD","Bu site hakk�nda yorum ekleyebilirsiniz.");
define_once("_YOUARENOTREGGED","Kay�tl� de�ilsiniz veya giri� yapmam��s�n�z.");
define_once("_IFYOUWEREREG","Kay�tl� olsayd�n�z dosya hakk�nda yorum yazabilecektiniz.");
define_once("_TITLE","Ba�l�k");
define_once("_MODIFY","De�i�tir");
define_once("_COMPLETEVOTE1","Oyunuz de�erlendirilmi�tir.");
define_once("_COMPLETEVOTE2","Son $anonwaitdays g�n i�inde zaten oyunuzu kullanm��s�n�z.");
define_once("_COMPLETEVOTE3","Sadece bir kez oy kullan�n.<br>T�m oylar keydedilir ve incelenir.");
define_once("_COMPLETEVOTE4","Kendi �nerdi�iniz link i�in oy kullanamazs�n�z.<br>T�m oylar keydedilir ve incelenir.");
define_once("_COMPLETEVOTE5","Puan se�ilmemi� - oy verilmedi");
define_once("_COMPLETEVOTE6","Her IP adresi $outsidewaitdays g�n i�inde sadece bir oy kullanabilir.");
define_once("_LINKSDATESTRING","%e-%m-%y");

