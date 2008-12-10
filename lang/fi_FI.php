<?php

/**
 * Finnish (Finland) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('fi_FI', $lang) && is_array($lang['fi_FI'])) {
	$lang['fi_FI'] = array_merge($lang['en_US'], $lang['fi_FI']);
} else {
	$lang['fi_FI'] = $lang['en_US'];
}

$lang['fi_FI']['AssetAdmin']['CHOOSEFILE'] = 'Valitse tiedosto';
$lang['fi_FI']['AssetAdmin']['CONTENTMODBY'] = 'Sisältö on muokattavissa henkilöillä';
$lang['fi_FI']['AssetAdmin']['CONTENTUSABLEBY'] = 'Sisältö on käytettävissä henkilöillä';
$lang['fi_FI']['AssetAdmin']['DELETEDX'] = 'Poistettu %s tiedostoa.%s';
$lang['fi_FI']['AssetAdmin']['FILESREADY'] = 'Tiedostot, jotka ovat valmiita kopiointiin:';
$lang['fi_FI']['AssetAdmin']['FOLDERDELETED'] = 'hakemisto poistettu.';
$lang['fi_FI']['AssetAdmin']['FOLDERSDELETED'] = 'hakemistot poistettu.';
$lang['fi_FI']['AssetAdmin']['MENUTITLE'] = 'Tiedostot ja kuvat';
$lang['fi_FI']['AssetAdmin']['MOVEDX'] = 'Siirrettiin %s tiedostoa';
$lang['fi_FI']['AssetAdmin']['NEWFOLDER'] = 'Uusi kansio';
$lang['fi_FI']['AssetAdmin']['NOTEMP'] = 'Väliaikaiskansiota palvelimelle kopiointeja varten ei ole asetettu. Ole hyvä ja määrittele upload_tmp_dir tiedostossa php.ini';
$lang['fi_FI']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Palvelimelle ei ollut mitään kopioitavaa';
$lang['fi_FI']['AssetAdmin']['NOWBROKEN'] = 'Seuraavilla sivuilla on rikkinäisiä linkkejä:';
$lang['fi_FI']['AssetAdmin']['OWNER'] = 'Omistaja';
$lang['fi_FI']['AssetAdmin']['SAVEDFILE'] = 'Tallennettu tiedosto %s';
$lang['fi_FI']['AssetAdmin']['SAVEFOLDERNAME'] = 'Tallenna kansion nimi';
$lang['fi_FI']['AssetAdmin']['THUMBSDELETED'] = 'Kaikki käyttämättömät pikkukuvat on poistettu';
$lang['fi_FI']['AssetAdmin']['UPLOAD'] = 'Kopioi alla luetellut tiedostot palvelimelle';
$lang['fi_FI']['AssetAdmin']['UPLOADEDX'] = 'Palvelimelle kopioitiin %s tiedostoa';
$lang['fi_FI']['AssetAdmin_left.ss']['CREATE'] = 'Luo';
$lang['fi_FI']['AssetAdmin_left.ss']['DELETE'] = 'Poista';
$lang['fi_FI']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Poista valitut kansiot';
$lang['fi_FI']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Salli vedä &amp; pudota uudelleenjärjestäminen';
$lang['fi_FI']['AssetAdmin_left.ss']['FOLDERS'] = 'Kansiot';
$lang['fi_FI']['AssetAdmin_left.ss']['GO'] = 'Siirry';
$lang['fi_FI']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Valitse kansiot, jotka haluat poistaa ja paina alla olevaa nappia';
$lang['fi_FI']['AssetAdmin_left.ss']['TOREORG'] = 'Voit järjestellä kansiot uudelleen siirtämällä ne halutuille paoikoille.';
$lang['fi_FI']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Valitse sivu vasemmalta.';
$lang['fi_FI']['AssetAdmin_right.ss']['WELCOME'] = 'Tervetuloa';
$lang['fi_FI']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Sinulla ei ole oikeuksia kopioida tiedostoja tähän kansioon.';
$lang['fi_FI']['AssetTableField']['CAPTION'] = 'Kuvateksti';
$lang['fi_FI']['AssetTableField']['CREATED'] = 'Ensimmäisen kerran ladattu palvelimelle';
$lang['fi_FI']['AssetTableField']['DIM'] = 'Mitat';
$lang['fi_FI']['AssetTableField']['DIMLIMT'] = 'Rajoita ponnahdusikkunan kokoa';
$lang['fi_FI']['AssetTableField']['EDITIMAGE'] = 'Muokkaa tätä kuvaa';
$lang['fi_FI']['AssetTableField']['FILENAME'] = 'Tiedoston nimi';
$lang['fi_FI']['AssetTableField']['GALLERYOPTIONS'] = 'Gallerian asetukset';
$lang['fi_FI']['AssetTableField']['IMAGE'] = 'Kuva';
$lang['fi_FI']['AssetTableField']['ISFLASH'] = 'on Flash-dokumentti';
$lang['fi_FI']['AssetTableField']['LASTEDIT'] = 'Viimeksi muokattu';
$lang['fi_FI']['AssetTableField']['NOLINKS'] = 'Millään sivulla ei ole linkkiä tähän tiedostoon.';
$lang['fi_FI']['AssetTableField']['OWNER'] = 'Omistaja';
$lang['fi_FI']['AssetTableField']['PAGESLINKING'] = 'Seuraavilla sivuilla on linkki tähän tiedostoon:';
$lang['fi_FI']['AssetTableField']['POPUPHEIGHT'] = 'Ponnahdusikkunan korkeus';
$lang['fi_FI']['AssetTableField']['POPUPWIDTH'] = 'Ponnahdusikkunan leveys';
$lang['fi_FI']['AssetTableField']['SIZE'] = 'Koko';
$lang['fi_FI']['AssetTableField.ss']['DELFILE'] = 'Poista tämä tiedosto';
$lang['fi_FI']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Siirrä kansio vasemmalle siirrettävästä tiedostosta';
$lang['fi_FI']['AssetTableField']['SWFFILEOPTIONS'] = 'SWF-tiedoston asetukset';
$lang['fi_FI']['AssetTableField']['TITLE'] = 'Otsikko';
$lang['fi_FI']['AssetTableField']['TYPE'] = 'Tyyppi';
$lang['fi_FI']['AssetTableField']['URL'] = 'URL';
$lang['fi_FI']['CMSLeft.ss']['DELPAGE'] = 'Poista sivut...';
$lang['fi_FI']['CMSLeft.ss']['DELPAGES'] = 'Poista valitut sivut';
$lang['fi_FI']['CMSLeft.ss']['GO'] = 'Siirry';
$lang['fi_FI']['CMSLeft.ss']['NEWPAGE'] = 'Uusi sivu...';
$lang['fi_FI']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Valitse poistettavat sivut ja paina alla olevaa nappia';
$lang['fi_FI']['CMSLeft.ss']['SITECONT'] = 'Sivuston sisältö';
$lang['fi_FI']['CMSMain']['ACCESS'] = 'Pääsy %s:ään CMS:ssä';
$lang['fi_FI']['CMSMain']['CANCEL'] = 'Peruuta';
$lang['fi_FI']['CMSMain']['CHOOSEREPORT'] = '(Valitse raportti)';
$lang['fi_FI']['CMSMain']['COMPARINGV'] = 'Olet vertaamassa versioita #%d ja #%d';
$lang['fi_FI']['CMSMain']['COPYPUBTOSTAGE'] = 'Haluatko varmasti kopioida julkaistun sisällön luonnossivustolle?';
$lang['fi_FI']['CMSMain']['DELETE'] = 'Poista luonnossivustolta';
$lang['fi_FI']['CMSMain']['DELETEFP'] = 'Poista julkaistulta sivustolta';
$lang['fi_FI']['CMSMain']['DESCREMOVED'] = 'ja %s jälkeläistä';
$lang['fi_FI']['CMSMain']['EMAIL'] = 'Sähköposti';
$lang['fi_FI']['CMSMain']['GO'] = 'Siirry';
$lang['fi_FI']['CMSMain']['MENUTITLE'] = 'Sivuston sisältö';
$lang['fi_FI']['CMSMain']['METADESCOPT'] = 'Kuvaus';
$lang['fi_FI']['CMSMain']['METAKEYWORDSOPT'] = 'Avainsanat';
$lang['fi_FI']['CMSMain']['NEW'] = 'Uusi';
$lang['fi_FI']['CMSMain']['NOCONTENT'] = 'ei sisältöä';
$lang['fi_FI']['CMSMain']['NOWAITINGON'] = 'Et ole odottamassa ketään.';
$lang['fi_FI']['CMSMain']['NOWBROKEN'] = 'Seuraavilla sivuilla on rikkinäisiä linkkejä:';
$lang['fi_FI']['CMSMain']['NOWBROKEN2'] = 'Niiden omistajille on lähetetty sähköpostia ja he korjaavat sivunsa.';
$lang['fi_FI']['CMSMain']['OK'] = 'OK';
$lang['fi_FI']['CMSMain']['PAGEDEL'] = 'Poistettiin %d sivu';
$lang['fi_FI']['CMSMain']['PAGENOTEXISTS'] = 'Tätä sivua ei ole olemassa';
$lang['fi_FI']['CMSMain']['PAGEPUB'] = '%d sivu julkaistiin';
$lang['fi_FI']['CMSMain']['PAGESDEL'] = 'Poistetiin %s sivua';
$lang['fi_FI']['CMSMain']['PAGESPUB'] = '%d sivua julkaistiin';
$lang['fi_FI']['CMSMain']['PAGETYPEOPT'] = 'Sivun tyyppi';
$lang['fi_FI']['CMSMain']['PRINT'] = 'Tulosta';
$lang['fi_FI']['CMSMain']['PUBALLCONFIRM'] = 'Julkaise jokainen sivu tällä sivustolla kopioiden luonnosten sisältö julkiselle sivustolle';
$lang['fi_FI']['CMSMain']['PUBALLFUN'] = 'Julkaise kaikki -toiminto';
$lang['fi_FI']['CMSMain']['PUBALLFUN2'] = 'Painamalla tätä nappia, tekee se saman kuin kävisit painamassa joka sivulla "julkaise". Se on käytännöllinen, jos on tehnyt isoja muutoksia sisältöön, esim. kun sivusto luotiin.';
$lang['fi_FI']['CMSMain']['PUBPAGES'] = 'Valmis, julkaistiin %s sivua';
$lang['fi_FI']['CMSMain']['REMOVED'] = '\'%s\'%s poistettu julkaistulta sivustolta';
$lang['fi_FI']['CMSMain']['REMOVEDFD'] = 'Poistettu luonnossivustolta';
$lang['fi_FI']['CMSMain']['REMOVEDPAGE'] = '%s poistettiin julkaistulta sivulta';
$lang['fi_FI']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Poistettu \'%s\' luonnossivustolta';
$lang['fi_FI']['CMSMain']['REPORT'] = 'Raportti';
$lang['fi_FI']['CMSMain']['RESTORE'] = 'Palauta';
$lang['fi_FI']['CMSMain']['RESTORED'] = '%s palautettiin';
$lang['fi_FI']['CMSMain']['ROLLBACK'] = 'Siirry takaisin tähän versioon.';
$lang['fi_FI']['CMSMain']['ROLLEDBACKPUB'] = 'Siirrytty takaisin julkaistuun versioon. Uusi versionumero on #%d';
$lang['fi_FI']['CMSMain']['ROLLEDBACKVERSION'] = 'Siirrytty takaisin versioon #%d. Uusi versionumero on #%d';
$lang['fi_FI']['CMSMain']['SAVE'] = 'Tallenna';
$lang['fi_FI']['CMSMain']['SENTTO'] = 'Lähetettiin henkilölle %s %s hyväksyttäväksi.';
$lang['fi_FI']['CMSMain']['STATUSOPT'] = 'Tila';
$lang['fi_FI']['CMSMain']['TOTALPAGES'] = 'Kaikki sivut:';
$lang['fi_FI']['CMSMain']['VERSIONSNOPAGE'] = 'Sivua #%d ei löydy';
$lang['fi_FI']['CMSMain']['VIEWING'] = 'Olet katsomassa versiota #%d. %s luotiin.';
$lang['fi_FI']['CMSMain']['VISITRESTORE'] = 'vieraile sivulla restorepage/(ID)';
$lang['fi_FI']['CMSMain']['WAITINGON'] = 'Odotat muiden henkilöiden työskentelevän sivuilla <b>%d</b>.';
$lang['fi_FI']['CMSMain']['WORKTODO'] = 'Sinulla on töitä sivuilla <b>%s</b>.';
$lang['fi_FI']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Painikkeen nimeä ei löytynyt';
$lang['fi_FI']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Lisätty luonnossivustolle, mutta ei julkaistu vielä';
$lang['fi_FI']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Lisää suodatin...';
$lang['fi_FI']['CMSMain_left.ss']['BATCHACTIONS'] = 'Toiminnot';
$lang['fi_FI']['CMSMain_left.ss']['CHANGED'] = 'vaihdettu';
$lang['fi_FI']['CMSMain_left.ss']['CLOSEBOX'] = 'sulkeaksesi laatikon napsauta tästä';
$lang['fi_FI']['CMSMain_left.ss']['COMMENTS'] = 'Kommentit';
$lang['fi_FI']['CMSMain_left.ss']['COMPAREMODE'] = 'Vertailutila (valitse kaksi alta)';
$lang['fi_FI']['CMSMain_left.ss']['CREATE'] = 'Luo';
$lang['fi_FI']['CMSMain_left.ss']['DEL'] = 'poistettu';
$lang['fi_FI']['CMSMain_left.ss']['DELETECONFIRM'] = 'Poista valitut sivut';
$lang['fi_FI']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Poistettu luonnossivustolta, mutta silti vielä live-sivustolla';
$lang['fi_FI']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Muokattu luonnossivustoa, mutta ei julkaistu vielä';
$lang['fi_FI']['CMSMain_left.ss']['EDITEDSINCE'] = 'Muokattu jstk. lähtien';
$lang['fi_FI']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Salli vedä ja pudota -järjestely';
$lang['fi_FI']['CMSMain_left.ss']['GO'] = 'Siirry';
$lang['fi_FI']['CMSMain_left.ss']['KEY'] = 'Avain:';
$lang['fi_FI']['CMSMain_left.ss']['NEW'] = 'uusi';
$lang['fi_FI']['CMSMain_left.ss']['OPENBOX'] = 'avataksesi laatikon napsauta tästä';
$lang['fi_FI']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Sivun versiohistoria';
$lang['fi_FI']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Julkaise valitut sivut';
$lang['fi_FI']['CMSMain_left.ss']['SEARCH'] = 'Etsi';
$lang['fi_FI']['CMSMain_left.ss']['SEARCHTITLE'] = 'Etsi URL-osoitteesta, otsikosta, valikon otsikosta ja sisällöstä';
$lang['fi_FI']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Valitse sivut, joita haluat muutettavan ja napsauta toimintoa:';
$lang['fi_FI']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Valitse sivut, joista tehdään kaksoiskappaleet, ja minne kaksoiskappaleet sijoitetaan. Sivujen alasivut kopioidaan myös.';
$lang['fi_FI']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Näytä ainoastaan muutetut sivut';
$lang['fi_FI']['CMSMain_left.ss']['SHOWUNPUB'] = 'Näytä julkaisemattomat versiot';
$lang['fi_FI']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Sivuston sisältö ja rakenne';
$lang['fi_FI']['CMSMain_left.ss']['SITEREPORTS'] = 'Sivuston raportit';
$lang['fi_FI']['CMSMain_left.ss']['TASKLIST'] = 'Tehtävälista';
$lang['fi_FI']['CMSMain_left.ss']['WAITINGON'] = 'Odotetaan';
$lang['fi_FI']['CMSMain_right.ss']['ANYMESSAGE'] = 'Onko sinulla viestejä muokkaajallesi?';
$lang['fi_FI']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Valitse sivu vasemmalta.';
$lang['fi_FI']['CMSMain_right.ss']['LOADING'] = 'ladataan...';
$lang['fi_FI']['CMSMain_right.ss']['MESSAGE'] = 'Viesti';
$lang['fi_FI']['CMSMain_right.ss']['SENDTO'] = 'Lähetä...';
$lang['fi_FI']['CMSMain_right.ss']['STATUS'] = 'Tila';
$lang['fi_FI']['CMSMain_right.ss']['SUBMIT'] = 'Lähetä hyväksyttäväksi';
$lang['fi_FI']['CMSMain_right.ss']['WELCOMETO'] = 'Tervetuloa';
$lang['fi_FI']['CMSMain_versions.ss']['AUTHOR'] = 'Tekijä';
$lang['fi_FI']['CMSMain_versions.ss']['NOTPUB'] = 'Ei julkaistu';
$lang['fi_FI']['CMSMain_versions.ss']['PUBR'] = 'Julkaisija';
$lang['fi_FI']['CMSMain_versions.ss']['UNKNOWN'] = 'Tuntematon';
$lang['fi_FI']['CMSMain_versions.ss']['WHEN'] = 'Milloin';
$lang['fi_FI']['CMSRight.ss']['CHOOSEPAGE'] = 'Valitse sivu vasemmalta.';
$lang['fi_FI']['CMSRight.ss']['ECONTENT'] = 'Muokkaa sisältöä';
$lang['fi_FI']['CMSRight.ss']['WELCOMETO'] = 'Tervetuloa';
$lang['fi_FI']['CommentAdmin']['ACCEPT'] = 'Hyväksy';
$lang['fi_FI']['CommentAdmin']['APPROVED'] = 'Hyväksytty %s kommenttia.';
$lang['fi_FI']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Hyväksytyt kommentit';
$lang['fi_FI']['CommentAdmin']['AUTHOR'] = 'Kirjoittaja';
$lang['fi_FI']['CommentAdmin']['COMMENT'] = 'Kommentti';
$lang['fi_FI']['CommentAdmin']['COMMENTS'] = 'Kommentit';
$lang['fi_FI']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Hyväksymistä odottavat kommentit';
$lang['fi_FI']['CommentAdmin']['DATEPOSTED'] = 'Lähetetty';
$lang['fi_FI']['CommentAdmin']['DELETE'] = 'Poista';
$lang['fi_FI']['CommentAdmin']['DELETEALL'] = 'Poista kaikki';
$lang['fi_FI']['CommentAdmin']['DELETED'] = 'Poistettu %s kommenttia.';
$lang['fi_FI']['CommentAdmin']['MARKASNOTSPAM'] = 'Merkkaa ei-roskapostiksi';
$lang['fi_FI']['CommentAdmin']['MARKEDNOTSPAM'] = 'Merkattu %s kommenttia ei-roskapostiksi.';
$lang['fi_FI']['CommentAdmin']['MARKEDSPAM'] = 'Merkattu %s kommenttia roskapostiksi.';
$lang['fi_FI']['CommentAdmin']['MENUTITLE'] = 'Kommentit';
$lang['fi_FI']['CommentAdmin']['NAME'] = 'Nimi';
$lang['fi_FI']['CommentAdmin']['PAGE'] = 'Sivu';
$lang['fi_FI']['CommentAdmin']['SPAM'] = 'Roskapostia';
$lang['fi_FI']['CommentAdmin']['SPAMMARKED'] = 'Merkkaa roskapostiksi';
$lang['fi_FI']['CommentAdmin_left.ss']['COMMENTS'] = 'Kommentit';
$lang['fi_FI']['CommentAdmin_right.ss']['WELCOME1'] = 'Tervetuloa ';
$lang['fi_FI']['CommentAdmin_right.ss']['WELCOME2'] = 'kommenttejen hallinta. Valitse hakemisto hakemistopuusta vasemmalla.';
$lang['fi_FI']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Hyväksytty';
$lang['fi_FI']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Odottaa moderointia';
$lang['fi_FI']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Kommentit';
$lang['fi_FI']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Roskaposti';
$lang['fi_FI']['CommentList.ss']['NOCOM'] = 'Tällä sivulla ei ole kommentteja.';
$lang['fi_FI']['CommentTableField']['FILTER'] = 'Suodata';
$lang['fi_FI']['CommentTableField']['SEARCH'] = 'Etsi';
$lang['fi_FI']['CommentTableField.ss']['APPROVE'] = 'hyväksy';
$lang['fi_FI']['CommentTableField.ss']['APPROVECOMMENT'] = 'Hyväksy tämä kommentti';
$lang['fi_FI']['CommentTableField.ss']['DELETE'] = 'poista';
$lang['fi_FI']['CommentTableField.ss']['DELETEROW'] = 'Poista tämä rivi';
$lang['fi_FI']['CommentTableField.ss']['EDIT'] = 'muokkaa';
$lang['fi_FI']['CommentTableField.ss']['MARKASSPAM'] = 'Merkitse tämä kommentti roskapostiksi';
$lang['fi_FI']['CommentTableField.ss']['MARKNOSPAM'] = 'Merkkaa tämä kommentti ei-roskapostiksi';
$lang['fi_FI']['CommentTableField.ss']['SPAM'] = 'roskaposti';
$lang['fi_FI']['GenericDataAdmin']['CHOOSECRIT'] = 'Ole hyvä ja valitse hakuehto ja paina "Mene".';
$lang['fi_FI']['GenericDataAdmin']['CREATE'] = 'Luo';
$lang['fi_FI']['GenericDataAdmin']['DELETE'] = 'Poista';
$lang['fi_FI']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Poistettu onnistuneesti';
$lang['fi_FI']['GenericDataAdmin']['EXPORTCSV'] = 'Vie CSV:nä';
$lang['fi_FI']['GenericDataAdmin']['FOUND'] = 'löydetty:';
$lang['fi_FI']['GenericDataAdmin']['GO'] = 'Mene';
$lang['fi_FI']['GenericDataAdmin']['SAVE'] = 'Tallenna';
$lang['fi_FI']['GenericDataAdmin']['SAVED'] = 'Tallennettu';
$lang['fi_FI']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Lisää luettelointi';
$lang['fi_FI']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Etsi luettelointeja';
$lang['fi_FI']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Etsinnän tulokset';
$lang['fi_FI']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Tervetuloa ';
$lang['fi_FI']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Ole hyvä ja valitse merkintä vasemmasta paneelista.';
$lang['fi_FI']['ImageEditor.ss']['ACTIONS'] = 'toiminnot';
$lang['fi_FI']['ImageEditor.ss']['APPLY'] = 'käytä';
$lang['fi_FI']['ImageEditor.ss']['CANCEL'] = 'peruuta';
$lang['fi_FI']['ImageEditor.ss']['CROP'] = 'rajaa';
$lang['fi_FI']['ImageEditor.ss']['CURRENTACTION'] = 'tämän hetkinen&nbsp;toiminto';
$lang['fi_FI']['ImageEditor.ss']['EDITFUNCTIONS'] = 'muokkaa&nbsp;funktioita';
$lang['fi_FI']['ImageEditor.ss']['EXIT'] = 'poistu';
$lang['fi_FI']['ImageEditor.ss']['HEIGHT'] = 'korkeus';
$lang['fi_FI']['ImageEditor.ss']['REDO'] = 'tee uudelleen';
$lang['fi_FI']['ImageEditor.ss']['ROT'] = 'kierrä';
$lang['fi_FI']['ImageEditor.ss']['SAVE'] = 'tallenna kuva';
$lang['fi_FI']['ImageEditor.ss']['UNDO'] = 'kumoa';
$lang['fi_FI']['ImageEditor.ss']['UNTITLED'] = 'Nimeämätön asiakirja';
$lang['fi_FI']['ImageEditor.ss']['WIDTH'] = 'leveys';
$lang['fi_FI']['LeftAndMain']['CHANGEDURL'] = 'URL-osoite vaihdettiin osoitteeksi %s';
$lang['fi_FI']['LeftAndMain']['HELP'] = 'Ohje';
$lang['fi_FI']['LeftAndMain']['PAGETYPE'] = 'Sivun tyyppi:';
$lang['fi_FI']['LeftAndMain']['PERMAGAIN'] = 'Olet kirjautunut ulos CMS:stä. Jos haluat kirjautua uudelleen sisään, syötä käyttäjätunnuksesi ja salasanasi alla.';
$lang['fi_FI']['LeftAndMain']['PERMALREADY'] = 'Paihoittelut, mutta et pääse tähän osaan CMS:ää. Jos haluat kirjautua jonain muuna, voit tehdä sen alla.';
$lang['fi_FI']['LeftAndMain']['PERMDEFAULT'] = 'Valitse tunnistustapa ja syötä tunnistetietosi CMS:ään.';
$lang['fi_FI']['LeftAndMain']['PLEASESAVE'] = 'Tätä sivua ei voitu päivittää, koska sitä ei ole vielä tallennettu. Tallenna sivu.';
$lang['fi_FI']['LeftAndMain']['REQUESTERROR'] = 'Virhe pyynnössä';
$lang['fi_FI']['LeftAndMain']['SAVED'] = 'tallennettu';
$lang['fi_FI']['LeftAndMain']['SAVEDUP'] = 'Tallennettu';
$lang['fi_FI']['LeftAndMain']['SITECONTENTLEFT'] = 'Sivuston sisältö';
$lang['fi_FI']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Tämä on';
$lang['fi_FI']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versio, jota sinä käytät, on CVS-versio';
$lang['fi_FI']['LeftAndMain.ss']['ARCHS'] = 'Arkistoitu sivusto';
$lang['fi_FI']['LeftAndMain.ss']['DRAFTS'] = 'Luonnossivusto';
$lang['fi_FI']['LeftAndMain.ss']['EDIT'] = 'Muokkaa';
$lang['fi_FI']['LeftAndMain.ss']['EDITINCMS'] = 'Muokkaa tätä sivua CMS:ssä';
$lang['fi_FI']['LeftAndMain.ss']['EDITPROFILE'] = 'Profiili';
$lang['fi_FI']['LeftAndMain.ss']['LOADING'] = 'Ladataan...';
$lang['fi_FI']['LeftAndMain.ss']['LOGGEDINAS'] = 'Kirjautuneena käyttäjänä';
$lang['fi_FI']['LeftAndMain.ss']['LOGOUT'] = 'Kirjaudu ulos';
$lang['fi_FI']['LeftAndMain.ss']['PUBLIS'] = 'Julkaistu sivusto';
$lang['fi_FI']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe-verkkosivusto';
$lang['fi_FI']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Näytä tämä sivu luonnossivustolla';
$lang['fi_FI']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Näytä tämä sivu julkaistulla sivustolla';
$lang['fi_FI']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Sivun katselu:';
$lang['fi_FI']['LeftAndMain']['STATUSTO'] = 'Tila vaihdettiin tilaksi %s';
$lang['fi_FI']['LeftAndMain']['TREESITECONTENT'] = 'Sivuston sisältö';
$lang['fi_FI']['MemberList']['ADD'] = 'Lisää';
$lang['fi_FI']['MemberList']['ANYGROUP'] = 'Mikä tahansa ryhmä';
$lang['fi_FI']['MemberList']['ASC'] = 'Nousevasti';
$lang['fi_FI']['MemberList']['DESC'] = 'Laskevasti';
$lang['fi_FI']['MemberList']['EMAIL'] = 'Sähköposti';
$lang['fi_FI']['MemberList']['FILTERBYG'] = 'Suodata ryhmän mukaan';
$lang['fi_FI']['MemberList']['FN'] = 'Etunimi';
$lang['fi_FI']['MemberList']['ORDERBY'] = 'Lajittele';
$lang['fi_FI']['MemberList']['PASSWD'] = 'Salasana';
$lang['fi_FI']['MemberList']['SEARCH'] = 'Etsi';
$lang['fi_FI']['MemberList']['SN'] = 'Sukunimi';
$lang['fi_FI']['MemberList.ss']['FILTER'] = 'Suodata';
$lang['fi_FI']['MemberList_PageControls.ss']['DISPLAYING'] = 'Näytetään';
$lang['fi_FI']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'jäsenet';
$lang['fi_FI']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'jäsenet';
$lang['fi_FI']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'jäsenet';
$lang['fi_FI']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'jäsenet';
$lang['fi_FI']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Katso ensimmäinen';
$lang['fi_FI']['MemberList_PageControls.ss']['VIEWLAST'] = 'Katso viimeisin';
$lang['fi_FI']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Katso seuraava';
$lang['fi_FI']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Katso edellinen';
$lang['fi_FI']['MemberList_Table.ss']['EMAIL'] = 'Sähköpostiosoite';
$lang['fi_FI']['MemberList_Table.ss']['FN'] = 'Etunimi';
$lang['fi_FI']['MemberList_Table.ss']['PASSWD'] = 'Salasana';
$lang['fi_FI']['MemberList_Table.ss']['SN'] = 'Sukunimi';
$lang['fi_FI']['MemberTableField']['ADD'] = 'Lisää';
$lang['fi_FI']['MemberTableField']['ADDEDTOGROUP'] = 'Ryhmään lisättiin jäsen';
$lang['fi_FI']['MemberTableField']['ADDINGFIELD'] = 'Lisäys epäonnistui';
$lang['fi_FI']['MemberTableField']['ANYGROUP'] = 'Mikä tahansa ryhmä';
$lang['fi_FI']['MemberTableField']['ASC'] = 'Nousevasti';
$lang['fi_FI']['MemberTableField']['DESC'] = 'Laskevasti';
$lang['fi_FI']['MemberTableField']['EMAIL'] = 'Sähköposti';
$lang['fi_FI']['MemberTableField']['FILTER'] = 'Suodata';
$lang['fi_FI']['MemberTableField']['FILTERBYGROUP'] = 'Suodata ryhmän mukaan';
$lang['fi_FI']['MemberTableField']['FIRSTNAME'] = 'Etunimi';
$lang['fi_FI']['MemberTableField']['ORDERBY'] = 'Lajittele';
$lang['fi_FI']['MemberTableField']['SEARCH'] = 'Etsi';
$lang['fi_FI']['MemberTableField.ss']['ADDNEW'] = 'Lisää uusi';
$lang['fi_FI']['MemberTableField.ss']['DELETEMEMBER'] = 'Poista tämä käyttäjä';
$lang['fi_FI']['MemberTableField.ss']['EDITMEMBER'] = 'Muokkaa tätä käyttäjää';
$lang['fi_FI']['MemberTableField.ss']['SHOWMEMBER'] = 'Näytä tämä käyttäjä';
$lang['fi_FI']['MemberTableField']['SURNAME'] = 'Sukunimi';
$lang['fi_FI']['ModelAdmin']['ADDBUTTON'] = 'Lisää';
$lang['fi_FI']['ModelAdmin']['CLASSTYPE'] = 'Tyyppi';
$lang['fi_FI']['ModelAdmin']['CLEAR_SEARCH'] = 'Tyhjennä haku';
$lang['fi_FI']['ModelAdmin']['DELETE'] = 'Poista';
$lang['fi_FI']['ModelAdmin']['DELETEDRECORDS'] = 'Poistettu %s tietuetta.';
$lang['fi_FI']['ModelAdmin']['GOBACK'] = 'Palaa';
$lang['fi_FI']['ModelAdmin']['IMPORTEDRECORDS'] = 'Tuotu %s tietuetta.';
$lang['fi_FI']['ModelAdmin']['SAVE'] = 'Tallenna';
$lang['fi_FI']['ModelAdmin']['SEARCHRESULTS'] = 'Haun tulokset';
$lang['fi_FI']['ModelAdmin']['SELECTALL'] = 'valitse kaikki';
$lang['fi_FI']['ModelAdmin']['SELECTNONE'] = 'poista valinta';
$lang['fi_FI']['ModelAdmin']['UPDATEDRECORDS'] = 'Päivitetty %s tietuetta.';
$lang['fi_FI']['ModelAdmin_left.ss']['ADD_TAB_HEADER'] = 'Lisää';
$lang['fi_FI']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Tuo';
$lang['fi_FI']['PageComment']['COMMENTBY'] = 'Henkilön %s kommentti sivulla %s';
$lang['fi_FI']['PageCommentInterface']['POST'] = 'Lähetä';
$lang['fi_FI']['PageCommentInterface']['SPAMQUESTION'] = 'Roskapostin estokysymys: %s';
$lang['fi_FI']['PageCommentInterface.ss']['COMMENTS'] = 'Kommentit';
$lang['fi_FI']['PageCommentInterface.ss']['NEXT'] = 'seuraava';
$lang['fi_FI']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Kukaan ei ole kommentoinut tätä sivua.';
$lang['fi_FI']['PageCommentInterface.ss']['POSTCOM'] = 'Lähetä kommenttisi';
$lang['fi_FI']['PageCommentInterface.ss']['PREV'] = 'edellinen';
$lang['fi_FI']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'Tämän sivun kommenttejen RSS-lähde';
$lang['fi_FI']['PageCommentInterface']['YOURCOMMENT'] = 'Kommentit';
$lang['fi_FI']['PageCommentInterface']['YOURNAME'] = 'Sinun nimesi';
$lang['fi_FI']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Roskapostin estokysymys: %s';
$lang['fi_FI']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Kommenttisi on nyt lähetetty ja se odottaa hyväksymistä.';
$lang['fi_FI']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Lähettämäsi viesti oli: ';
$lang['fi_FI']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Roskapostia havaittu!';
$lang['fi_FI']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'hyväksy tämä kommentti';
$lang['fi_FI']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'tämä kommentti ei ole roskapostia';
$lang['fi_FI']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'tämä kommentti on roskapostia';
$lang['fi_FI']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Lähettäjä:';
$lang['fi_FI']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'poista tämä kommentti';
$lang['fi_FI']['ReportAdmin_left.ss']['REPORTS'] = 'Raportit';
$lang['fi_FI']['ReportAdmin_right.ss']['WELCOME1'] = 'Tervetuloa ohjelman';
$lang['fi_FI']['ReportAdmin_right.ss']['WELCOME2'] = 'raportoinnin hallintaosioon. Valitse raportti vasemmalta.';
$lang['fi_FI']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Raportit';
$lang['fi_FI']['SecurityAdmin']['ADDMEMBER'] = 'Lisää jäsen';
$lang['fi_FI']['SecurityAdmin']['EDITPERMISSIONS'] = 'Muokkaa jokaisen ryhmän oikeuksia ja IP-osotteita.';
$lang['fi_FI']['SecurityAdmin']['MENUTITLE'] = 'Suojaus';
$lang['fi_FI']['SecurityAdmin']['NEWGROUP'] = 'Uusi ryhmä';
$lang['fi_FI']['SecurityAdmin']['SAVE'] = 'Tallenna';
$lang['fi_FI']['SecurityAdmin']['SGROUPS'] = 'Tietoturvaryhmät';
$lang['fi_FI']['SecurityAdmin_left.ss']['CREATE'] = 'Luo';
$lang['fi_FI']['SecurityAdmin_left.ss']['DEL'] = 'Poista';
$lang['fi_FI']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Poista valitut ryhmät';
$lang['fi_FI']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Salli vedä &amp; pudota uudelleenjärjestäminen';
$lang['fi_FI']['SecurityAdmin_left.ss']['GO'] = 'Siirry';
$lang['fi_FI']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Tietoturvaryhmät';
$lang['fi_FI']['SecurityAdmin_left.ss']['SELECT'] = 'Valitse poistettavat sivut ja paina alla olevaa nappia';
$lang['fi_FI']['SecurityAdmin_left.ss']['TOREORG'] = 'Jos haluat järjestellä sivustosi uudelleen, vedä sivut sinne minne haluat.';
$lang['fi_FI']['SecurityAdmin_right.ss']['WELCOME1'] = 'Tervetuloa ohjelman';
$lang['fi_FI']['SecurityAdmin_right.ss']['WELCOME2'] = 'tietoturvan hallintaosioon. Valitse ryhmä vasemmalta.';
$lang['fi_FI']['SideReport']['EMPTYPAGES'] = 'Tyhjennä sivut';
$lang['fi_FI']['SideReport']['LAST2WEEKS'] = 'Sivut, joita on muokattu viimeisen kahden viikon aikana';
$lang['fi_FI']['SideReport']['REPEMPTY'] = 'Raportti %s on tyhjä.';
$lang['fi_FI']['StaticExporter']['BASEURL'] = 'Kannan URL-osoite';
$lang['fi_FI']['StaticExporter']['EXPORTTO'] = 'Vie tähän kansioon';
$lang['fi_FI']['StaticExporter']['FOLDEREXPORT'] = 'Kansio, jonne viedään:';
$lang['fi_FI']['StaticExporter']['NAME'] = 'Staattinen viejä';
$lang['fi_FI']['StaticExporter']['ONETHATEXISTS'] = 'Anna olemassaoleva kansio';
$lang['fi_FI']['TaskList.ss']['BY'] = 'henkilöltä';
$lang['fi_FI']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Kuvia ei löytynyt kohteesta ';
$lang['fi_FI']['ThumbnailStripField']['NOTAFOLDER'] = 'Tämä ei ole kansio';
$lang['fi_FI']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Valitse yllä kansio)';
$lang['fi_FI']['ViewArchivedEmail.ss']['CANACCESS'] = 'Pääset arkistoidulle sivulle tällä linkillä:';
$lang['fi_FI']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Sinua on pyydetty katsomaan sivun sisältöä ';
$lang['fi_FI']['WaitingOn.ss']['ATO'] = 'osoitettu henkilölle';
$lang['fi_FI']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Saatavilla olevat widgetit';
$lang['fi_FI']['WidgetAreaEditor.ss']['INUSE'] = 'Tällä hetkellä käytetyt widgetit';
$lang['fi_FI']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Widgettejä ei tällä hetkellä ole saatavilla.';
$lang['fi_FI']['WidgetAreaEditor.ss']['TOADD'] = 'Lisätäksesi widgettejä vedä ne vasemmalta alueelta tähän.';
$lang['fi_FI']['WidgetEditor.ss']['DELETE'] = 'Poista';

?>