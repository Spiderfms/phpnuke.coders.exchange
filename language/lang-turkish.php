<?php
if(!isset($subscription_url)) $subscription_url = '';

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

define_once("_CHARSET","windows-1254");
define_once("_SEARCH","Ara");
define_once("_LOGIN","Giri�");
define_once("_WRITES","bildirdi:");
define_once("_POSTEDON","Tarih:");
define_once("_NICKNAME","�ye Ad�");
define_once("_PASSWORD","�ifre");
define_once("_WELCOMETO","Ho�geldiniz:");
define_once("_EDIT","D�zenle");
define_once("_DELETE","Sil");
define_once("_POSTEDBY","G�nderen:");
define_once("_READS","okuma");
define_once("_GOBACK","[ <a href=\"javascript:history.go(-1)\">Geri D�n</a> ]");
define_once("_COMMENTS","yorum");
define_once("_PASTARTICLES","Ge�mi� Haberler");
define_once("_OLDERARTICLES","Eski Haberler");
define_once("_BY","G�nderen:");
define_once("_ON","Tarih:");
define_once("_LOGOUT","��k��");
define_once("_WAITINGCONT","Bekleyen ��erik");
define_once("_SUBMISSIONS","Haber");
define_once("_WREVIEWS","�zlenim");
define_once("_WLINKS","Ba�lant�");
define_once("_EPHEMERIDS","Ge�iciler");
define_once("_ONEDAY","Tarihte Bu G�n...");
define_once("_ASREGISTERED","Hala hesab�n�z yok mu? Hemen <a href=\"modules.php?name=Your_Account&op=new_user\">a�abilirsiniz</a>. Kay�tl� bir kullan�c� olarak tema y�netici, yorum ayarlar� ve isminizle yorum g�nderme gibi avantajlara sahip olacaks�n�z.");
define_once("_MENUFOR","Men�:");
define_once("_NOBIGSTORY","Bu g�n i�in hen�z �nemli bir haber yok.");
define_once("_BIGSTORY","G�n�n en �ok okunan haberi:");
define_once("_SURVEY","Anket");
define_once("_POLLS","Anketler");
define_once("_PCOMMENTS","Yorum:");
define_once("_RESULTS","Sonu�lar");
define_once("_HREADMORE","devam�...");
define_once("_CURRENTLY","�u an sitede,");
define_once("_GUESTS","ziyaret�i ve");
define_once("_MEMBERS","�ye bulunuyor.");
define_once("_YOUARELOGGED","Merhaba");
define_once("_YOUHAVE","");
define_once("_PRIVATEMSG","�zel mesaj�n var.");
define_once("_YOUAREANON","Hen�z �ye de�ilseniz, <a href=\"modules.php?name=Your_Account&op=new_user\">Buraya</a> t�klayarak �cretsiz kay�t olabilirsiniz.");
define_once("_NOTE","Not:");
define_once("_ADMIN","Y�netici:");
define_once("_WERECEIVED","�u ana kadar");
define_once("_PAGESVIEWS","sayfa izlenimi ald�k. Ba�lang��:");
define_once("_TOPIC","Konu");
define_once("_UDOWNLOADS","�ndirme");
define_once("_VOTE","Oy Ver");
define_once("_VOTES","Toplam Oy");
define_once("_MVIEWADMIN","�zle: Sadece Edit�rler");
define_once("_MVIEWUSERS","�zle: Sadece Kay�tl� Kullan�c�lar");
define_once("_MVIEWANON","�zle: Sadece Anonim Kullan�c�lar");
define_once("_MVIEWALL","�zle: T�m Ziyaret�iler");
define_once("_EXPIRELESSHOUR","�mha: 1 saat i�inde");
define_once("_EXPIREIN","�mha:");
define_once("_HTTPREFERERS","HTTP �nerenler");
define_once("_UNLIMITED","Limitsiz");
define_once("_HOURS","Saat");
define_once("_RSSPROBLEM","�u an bu sitenin ba�l�klar�nda problem var");
define_once("_SELECTLANGUAGE","Dil Se�in");
define_once("_SELECTGUILANG","Site Lisan�n� Se�in");
define_once("_NONE","Yok");
define_once("_BLOCKPROBLEM","<center>�u an bu blokta bir sorun var.</center>");
define_once("_BLOCKPROBLEM2","<center>�u an bu blo�un i�eri�i yok.</center>");
define_once("_MODULENOTACTIVE","�sg�n�m, bu mod�l aktif de�il!");
define_once("_NOACTIVEMODULES","Pasif Mod�ller");
define_once("_FORADMINTESTS","(Y�netici tesleri i�in)");
define_once("_BBFORUMS","Forumlar�");
define_once("_ACCESSDENIED", "Eri�im Engellendi");
define_once("_RESTRICTEDAREA", "K�s�tl� bir alana ula�maya �al���yorsunuz.");
define_once("_MODULEUSERS", "�zg�n�z, sitemizin bu b�l�m� <i>sadece kay�tl� kullan�c�lar</i> i�indir.<br><br><a href=\"modules.php?name=Your_Account&op=new_user\">Buraya</a> t�klayarak �cretsiz kay�t olabilir, daha sonra<br>bu b�l�me k�s�tlamalarla kar��la�madan eri�ebilirsiniz. Te�ekk�rler.<br><br>");
define_once("_MODULESADMINS", "�zg�n�z, sitemizin bu b�l�m� <i>sadece edit�rler</i> i�indir.<br><br>");
define_once("_HOME","Ana Sayfa");
define_once("_HOMEPROBLEM","�nemli bir sorunumuz var: Ana Sayfa yok!!!");
define_once("_ADDAHOME","Ana Sayfaya bir Mod�l ekle");
define_once("_HOMEPROBLEMUSER","�u an ana sayfada bir sorun var. L�tfen daha sonra tekrar deneyin.");
define_once("_MORENEWS","Devam� Haberler B�l�m�nde");
define_once("_ALLCATEGORIES","T�m Kategoriler");
define_once("_DATESTRING","%d.%m.20%y Saat: %H:%M");
define_once("_DATESTRING2","%d.%m.%y");
define_once("_DATE","Tarih");
define_once("_HOUR","Saat");
define_once("_UMONTH","Ay");
define_once("_YEAR","Y�l");
define_once("_JANUARY","Ocak");
define_once("_FEBRUARY","�ubat");
define_once("_MARCH","Mart");
define_once("_APRIL","Nisan");
define_once("_MAY","May�s");
define_once("_JUNE","Haziran");
define_once("_JULY","Temmuz");
define_once("_AUGUST","A�ustos");
define_once("_SEPTEMBER","Eyl�l");
define_once("_OCTOBER","Ekim");
define_once("_NOVEMBER","Kas�m");
define_once("_DECEMBER","Aral�k");
define_once("_BWEL","Ho�geldin");
define_once("_BPM","�zel Mesajlar");
define_once("_BUNREAD","Okunmam��");
define_once("_BREAD","Okunmu�");
define_once("_BMEMP","�yelik");
define_once("_BLATEST","Son �ye");
define_once("_BTD","Bug�n");
define_once("_BYD","D�n");
define_once("_BOVER","Toplam");
define_once("_BVISIT","�u An Ba�l�");
define_once("_BVIS","Ziyaret�i");
define_once("_BMEM","�ye");
define_once("_BTT","Toplam");
define_once("_BON","�u An Ba�l�");
define_once("_BREG","Kay�t Ol");
define_once("_BROADCAST","Herkese A��k Mesaj Yay�nla");
define_once("_BROADCASTFROM","Genel Mesaj:");
define_once("_TURNOFFMSG","Herkese A��k Mesajlar� Kapat");
define_once("_JOURNAL","G�nl�k");
define_once("_READMYJOURNAL","G�nl���m� Oku");
define_once("_ADD","Ekle");
define_once("_YES","Evet");
define_once("_NO","Hay�r");
define_once("_INVISIBLEMODULES","G�r�nmez Mod�ller");
define_once("_ACTIVEBUTNOTSEE","(Aktif ama g�r�nmez link)");
define_once("_THISISAUTOMATED","Bu, sitemizdeki banner reklam yay�n�n�z�n �u an itibari ile bitti�ini bildiren otomatik bir mesajd�r.");
define_once("_THERESULTS","Reklam�n�z�n sonu�lar� a�a��dad�r");
define_once("_TOTALIMPRESSIONS","Yap�lan Toplam G�ster:");
define_once("_CLICKSRECEIVED","Al�nan T�klama:");
define_once("_IMAGEURL","Grafik Adresi");
define_once("_CLICKURL","T�klama Adresi:");
define_once("_ALTERNATETEXT","Alternatif Metin:");
define_once("_HOPEYOULIKED","Servisimizden memnun kald���n�z� umuyoruz. Sizi tekrar reklam m��terimiz olarak g�rmeyi diliyoruz.");
define_once("_THANKSUPPORT","Deste�iniz i�in te�ekk�rler");
define_once("_TEAM","Tak�m�");
define_once("_BANNERSFINNISHED","Bitmi� Banner Reklamlar�");
define_once("_MODREQLINKS","Ba�lant� Y�netimi");
define_once("_BROKENLINKS","K�r�k Ba�lant�lar");
define_once("_MODREQDOWN","Dosya Y�netimi");
define_once("_BROKENDOWN","K�r�k Dosyalar");
define_once("_PAGEGENERATION","Sayfa �retimi:");
define_once("_SECONDS","Saniye");
define_once("_YOUHAVEONEMSG","Yeni 1 �zel Mesaj�n�z Var");
define_once("_YOUHAVE","Senin");
define_once("_NEWPMSG","NYeni �zel Mesaj�n Var");
define_once("_CONTRIBUTEDBY","Katk�da Bulundu");
define_once("_CHAT","Chat");
define_once("_REGISTERED","Kay�tl�");
define_once("_CHATGUESTS","Ziyaret�iler");
define_once("_USERSTALKINGNOW","�imdi Kullan�c�larla Konu�");
define_once("_ENTERTOCHAT","Chate Gir");
define_once("_CHATROOMS","Uygun Chat Odalar�");
define_once("_SECURITYCODE","G�venlik Kodu");
define_once("_TYPESECCODE","G�venlik Kodunu Girin");
define_once("_ASSOTOPIC","�lgili Konular");
define_once("_ADDITIONALYGRP","Additionaly this module belongs to the Users Group");
define_once("_YOUHAVEPOINTS","Points you have by participating on the site's content:");
define_once("_MVIEWSUBUSERS","View: Subscribed Users Only");
define_once("_MODULESSUBSCRIBER","We are Sorry but this section of our site is for <i>Subscribed Users Only.</i>");
define_once("_SUBHERE","You can subscribe to our services from <a href=\"$subscription_url\">here</a>");
define_once("_SUBEXPIRED","Your Subscription Expired");
define_once("_HELLO","Hello");
define_once("_SUBSCRIPTIONAT","This is an automated message to let you know that your subscription at");
define_once("_HASEXPIRED","has been expired now.");
define_once("_HOPESERVED","Hope to have served you with satisfaction...");
define_once("_SUBRENEW","If you want to renew your subscription please go to:");
define_once("_YOUARE","You are");
define_once("_SUBSCRIBER","subscriber");
define_once("_OF","of");
define_once("_SBYEARS","years");
define_once("_SBYEAR","year");
define_once("_SBMINUTES","minutes");
define_once("_SBHOURS","hours");
define_once("_SBSECONDS","seconds");
define_once("_SBDAYS","days");
define_once("_SUBEXPIREIN","Your subscription will expire in:");
define_once("_NOTSUB","You are not subscriber of");
define_once("_SUBFROM","You can subscribe from");
define_once("_HERE","here");
define_once("_NOW","now!");
define_once("_ADMSUB","Subscribed User!");
define_once("_ADMNOTSUB","User NOT Subscribed");
define_once("_ADMSUBEXPIREIN","Subscription Expire in:");
define_once("_LASTIP","Last user IP:");
define_once("_BANTHIS","Ban This IP");
define_once("_HTMLNOTALLOWED","HTML code isn't allowed. Please use the editor functions instead.");
define_once("_KARMAGOOD","Good Karma");
define_once("_KARMALOW","Regular Karma");
define_once("_KARMABAD","Bad Karma");
define_once("_KARMADEVIL","Devil Karma");
define_once("_COMMENTMODERATED","Your comments has been submitted, but since you have been marked by the administrator of this site as an user with Bad Karma, your comment is subject to prior approval by our staff. Please don't submit your comment twice or your Karma may fall to the next level.<br><br>Our staff reserves the right to approve or delete your comment at their sole discretion.");
define_once("_MODERATEDTITLE","Comment Submitted - Approval Pending");
define_once("_MODERATEDRETURN","Return to Article's Page");

/*****************************************************/
/* Function to translate Datestrings                 */
/*****************************************************/

function translate($phrase) {
    switch($phrase) {
	case "xdatestring":	$tmp = "%A, %B %d @ %T %Z"; break;
	case "linksdatestring":	$tmp = "%d-%b-%Y"; break;
	case "xdatestring2":	$tmp = "%A, %B %d"; break;
	default:		$tmp = "$phrase"; break;
    }
    return $tmp;
}
define_once("_HTMLNOTALLOWED2","HTML code isn't allowed here.");
define_once("_ERRORINVEMAIL","ERROR: Invalid Email");

