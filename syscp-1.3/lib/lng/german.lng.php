<?php
/**
 * This file is part of the SysCP project. 
 * Copyright (c) 2003-2006 the SysCP Project. 
 * 
 * For the full copyright and license information, please view the COPYING 
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 * 
 * @author     Florian Lippert <flo@redenswert.de>
 * @copyright  (c) 2003-2006 Florian Lippert
 * @package    Org.Syscp.Core
 * @subpackage Language
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @version    $Id$
 */



/**
 * Global
 */
$lng['panel']['edit'] = 'bearbeiten';
$lng['panel']['delete'] = 'l&ouml;schen';
$lng['panel']['create'] = 'anlegen';
$lng['panel']['save'] = 'Speichern';
$lng['panel']['yes'] = 'Ja';
$lng['panel']['no'] = 'Nein';
$lng['panel']['emptyfornochanges'] = 'leer f&uuml;r keine &Auml;nderung';
$lng['panel']['emptyfordefault'] = 'leer f&uuml;r Standardeinstellung';
$lng['panel']['path'] = 'Pfad';
$lng['panel']['toggle'] = 'Umschalten';
$lng['panel']['next'] = 'weiter';
$lng['panel']['dirsmissing'] = 'Verzeichnisse nicht verf&uuml;gbar oder lesbar';

/**
 * Login
 */
$lng['login']['username'] = 'Benutzername';
$lng['login']['password'] = 'Passwort';
$lng['login']['language'] = 'Sprache';
$lng['login']['login'] = 'Anmelden';
$lng['login']['logout'] = 'Abmelden';
$lng['login']['profile_lng'] = 'Profilsprache';

/**
 * Customer
 */
$lng['customer']['documentroot'] = 'Heimverzeichnis';
$lng['customer']['name'] = 'Name';
$lng['customer']['firstname'] = 'Vorname';
$lng['customer']['company'] = 'Firma';
$lng['customer']['street'] = 'Strasse';
$lng['customer']['zipcode'] = 'PLZ';
$lng['customer']['city'] = 'Ort';
$lng['customer']['phone'] = 'Telephon';
$lng['customer']['fax'] = 'Fax';
$lng['customer']['email'] = 'eMail';
$lng['customer']['customernumber'] = 'KundenNummer';
$lng['customer']['diskspace'] = 'Webspace (MB)';
$lng['customer']['traffic'] = 'Traffic (GB)';
$lng['customer']['mysqls'] = 'MySQL-Datenbanken';
$lng['customer']['emails'] = 'eMail-Adressen';
$lng['customer']['accounts'] = 'eMail-Konten';
$lng['customer']['forwarders'] = 'eMail-Weiterleitungen';
$lng['customer']['ftps'] = 'FTP-Accounts';
$lng['customer']['subdomains'] = 'Sub-Domain(s)';
$lng['customer']['domains'] = 'Domain(s)';
$lng['customer']['unlimited'] = 'unendlich';

/**
 * Customermenue
 */
$lng['menue']['main']['main'] = 'Allgemein';
$lng['menue']['main']['changepassword'] = 'Passwort &auml;ndern';
$lng['menue']['main']['changelanguage'] = 'Sprache &auml;ndern';
$lng['menue']['email']['email'] = 'eMail';
$lng['menue']['email']['emails'] = 'Adressen';
$lng['menue']['email']['webmail'] = 'WebMail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Datenbanken';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Domains';
$lng['menue']['domains']['settings'] = 'Einstellungen';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Accounts';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extras';
$lng['menue']['extras']['directoryprotection'] = 'Verzeichnisschutz';
$lng['menue']['extras']['pathoptions'] = 'Pfadoptionen';

/**
 * Index
 */
$lng['index']['customerdetails'] = 'Kundendaten';
$lng['index']['accountdetails'] = 'Accountdaten';

/**
 * Change Password
 */
$lng['changepassword']['old_password'] = 'Altes Passwort';
$lng['changepassword']['new_password'] = 'Neues Passwort';
$lng['changepassword']['new_password_confirm'] = 'Neues Passwort (best&auml;tigen)';
$lng['changepassword']['new_password_ifnotempty'] = 'Neues Passwort (leer = nicht &auml;ndern)';
$lng['changepassword']['also_change_ftp'] = ' Auch Passwort vom Haupt-FTP-Zugang &auml;ndern';

/**
 * Domains
 */
$lng['domains']['description'] = 'Hier k&ouml;nnen Sie (Sub-)Domains erstellen und deren Pfade &auml;ndern.<br />Nach jeder &Auml;nderung braucht das System etwas Zeit um die Konfiguration neu einzulesen.';
$lng['domains']['domainsettings'] = 'Domaineinstellungen';
$lng['domains']['domainname'] = 'Domainname';
$lng['domains']['subdomain_add'] = 'Subdomain anlegen';
$lng['domains']['subdomain_edit'] = '(Sub-)Domain bearbeiten';
$lng['domains']['wildcarddomain'] = 'Als Wildcarddomain eintragen?';
$lng['domains']['aliasdomain'] = 'Alias f&uuml;r Domain';
$lng['domains']['noaliasdomain'] = 'Keine Aliasdomain';

/**
 * eMails
 */
$lng['emails']['description'] = 'Hier k&ouml;nnen Sie Ihre eMail Adressen einrichten.<br />Ein Konto ist wie Ihr Briefkasten vor der Haust&uuml;re. Wenn jemand eine email an Sie schreibt, dann wird diese in dieses Konto gelegt.<br><br>Die Zugangsdaten von Ihrem Mailprogramm sind wie folgt: (Die Angaben in <i>kursiver</i> Schrift sind durch die jeweiligen Eintr&auml;ge zu ersetzen!)<br>Hostname: <b><i>Domainname</i></b><br>Benutzername: <b><i>Kontoname / eMail-Adresse</i></b><br>Passwort: <b><i>das gew&auml;hlte Passwort</i></b>';
$lng['emails']['emailaddress'] = 'eMail-Adresse';
$lng['emails']['emails_add'] = 'eMail-Adresse anlegen';
$lng['emails']['emails_edit'] = 'eMail-Adresse &auml;ndern';
$lng['emails']['catchall'] = 'Catchall';
$lng['emails']['iscatchall'] = 'Als catchall-Adresse definieren?';
$lng['emails']['account'] = 'Konto';
$lng['emails']['account_add'] = 'Konto anlegen';
$lng['emails']['account_delete'] = 'Konto l&ouml;schen';
$lng['emails']['from'] = 'Von';
$lng['emails']['to'] = 'Nach';
$lng['emails']['forwarders'] = 'Weiterleitungen';
$lng['emails']['forwarder_add'] = 'Weiterleitung hinzuf&uuml;gen';

/**
 * FTP
 */
$lng['ftp']['description'] = 'Hier k&ouml;nnen Sie zus&auml;tzliche FTP-Accounts einrichten.<br />Die &Auml;nderungen sind sofort wirksam und die FTP-Accounts sofort benutzbar.';
$lng['ftp']['account_add'] = 'Account anlegen';

/**
 * MySQL
 */
$lng['mysql']['databasename'] = 'Benutzer-/Datenbankname';
$lng['mysql']['database_create'] = 'Datenbank anlegen';

/**
 * Extras
 */
$lng['extras']['description'] = 'Hier k&ouml;nnen Sie zus&auml;tzliche Extras einrichten, wie zum Beispiel Verzeichnisschutz.<br />Die &Auml;nderungen sind erst nach einer bestimmten Zeit wirksam.';
$lng['extras']['directoryprotection_add'] = 'Verzeichnisschutz anlegen';
$lng['extras']['view_directory'] = 'Verzeichnis anzeigen';
$lng['extras']['pathoptions_add'] = 'Pfadoptionen hinzuf&uuml;gen';
$lng['extras']['directory_browsing'] = 'Verzeichnisinhalt anzeigen';
$lng['extras']['pathoptions_edit'] = 'Pfadoptionen bearbeiten';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'URL zum Fehlerdokument 404';
$lng['extras']['errordocument403path'] = 'URL zum Fehlerdokument 403';
$lng['extras']['errordocument500path'] = 'URL zum Fehlerdokument 500';
$lng['extras']['errordocument401path'] = 'URL zum Fehlerdokument 401';

/**
 * Errors
 */
$lng['error']['error'] = 'Fehlermeldung';
$lng['error']['directorymustexist'] = 'Das Verzeichnis %s muss existieren. Legen Sie es bitte mit Ihrem FTP-Programm an.';
$lng['error']['filemustexist'] = 'Die Datei %s muss existieren.';
$lng['error']['allresourcesused'] = 'Sie haben bereits alle Ihnen zur Verf&uuml;gung stehenden Ressourcen verbraucht.';
$lng['error']['domains_cantdeletemaindomain'] = 'Sie k&ouml;nnen keine Domain, die als eMail-Domain verwendet wird l&ouml;schen. ';
$lng['error']['domains_canteditdomain'] = 'Sie k&ouml;nnen diese Domain nicht bearbeiten. Dies wurde durch den Admin verweigert';
$lng['error']['domains_cantdeletedomainwithemail'] = 'Sie k&ouml;nnen keine Domain l&ouml;schen die noch als eMail-Domain verwendet wird. L&ouml;schen Sie zuerst alle eMail-Adressen dieser Domain.';
$lng['error']['firstdeleteallsubdomains'] = 'Sie m&uuml;ssen erst alle Subdomains l&ouml;schen, bevor Sie eine Wildcarddomain anlegen k&ouml;nnen.';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'Sie haben bereits eine Adresse als Catchall f&uuml;r diese Domain definiert.';
$lng['error']['ftp_cantdeletemainaccount'] = 'Sie k&ouml;nnen Ihren Hauptaccount nicht l&ouml;schen.';
$lng['error']['login'] = 'Der angegebene Benutzername/Passwort ist falsch.';
$lng['error']['login_blocked'] = 'Dieser Account wurde aufgrund zu vieler Fehlversuche vorr&uuml;bergehend geschlossen. <br />Bitte versuchen Sie es in %s Sekunden erneut.';
$lng['error']['notallreqfieldsorerrors'] = 'Sie haben nicht alle Felder oder ein Feld mit fehlerhaften Angaben ausgef&uuml;llt.';
$lng['error']['oldpasswordnotcorrect'] = 'Das alte Passwort ist nicht korrekt.';
$lng['error']['youcantallocatemorethanyouhave'] = 'Sie k&ouml;nnen nicht mehr Ressourcen verteilen als Sie noch frei haben.';
$lng['error']['youcantdeletechangemainadmin'] = 'Aus Sicherheitsgr&uuml;nden k&ouml;nnen Sie den Hauptadmin nicht l&ouml;schen oder bearbeiten.';

$lng['error']['mustbeurl'] = 'Sie m&uuml;ssen eine vollst&auml;ndige URL angeben (z.B. http://irgendwas.de/error404.htm)';
$lng['error']['invalidpath'] = 'Sie haben keine g&uuml;ltige URL ausgew&auml;hlt (Evtl. Probleme beim Verzeichnislisting?)';
$lng['error']['stringisempty'] ='Fehlende Eingabe im Feld';
$lng['error']['stringiswrong'] ='Falsche Eingabe im Feld';
$lng['error']['myloginname'] = '\''.$lng['login']['username'].'\'';
$lng['error']['mypassword'] = '\''.$lng['login']['password'].'\'';
$lng['error']['oldpassword'] = '\''.$lng['changepassword']['old_password'].'\'';
$lng['error']['newpassword'] = '\''.$lng['changepassword']['new_password'].'\'';
$lng['error']['newpasswordconfirm']= '\''.$lng['changepassword']['new_password_confirm'].'\'';
$lng['error']['newpasswordconfirmerror']='Das neue Passwort und die Best&auml;tigung sind nicht identisch.';
$lng['error']['myname'] = '\''.$lng['customer']['name'].'\'';
$lng['error']['myfirstname'] = '\''.$lng['customer']['firstname'].'\'';
$lng['error']['emailadd'] = '\''.$lng['customer']['email'].'\'';
$lng['error']['mydomain'] = '\'Domain\'';
$lng['error']['mydocumentroot'] = '\'Documentroot\'';
$lng['error']['loginnameexists']= 'Login-Name %s existiert bereits.';
$lng['error']['emailiswrong']= 'eMail-Adresse %s beinhaltet ung&uuml;ltige Zeichen oder ist nicht vollst&auml;ndig.';
$lng['error']['loginnameiswrong']= 'Login-Name %s beinhaltet ung&uuml;ltige Zeichen.';
$lng['error']['userpathcombinationdupe']='Kombination aus Benutzername und Pfad existiert bereits.';
$lng['error']['patherror']='allgemeiner Fehler! Pfad darf nicht leer sein.';
$lng['error']['errordocpathdupe']='Option f&uuml;r Pfad %s existiert bereits.';
$lng['error']['adduserfirst']='Sie m&uuml;ssen zuerst einen Kunden anlegen.';
$lng['error']['domainalreadyexists']= 'Die Domain %s wurde bereits einem Kunden zugeordnet.';
$lng['error']['nolanguageselect']='Keine Sprache ausgew&auml;hlt.';
$lng['error']['nosubjectcreate']='Sie m&uuml;ssen einen Betreff angeben.';
$lng['error']['nomailbodycreate']='Sie m&uuml;ssen einen Mail-Text eingeben.';
$lng['error']['templatenotfound']='Template wurde nicht gefunden.';
$lng['error']['alltemplatesdefined']='Sie k&ouml;nnen keine weiteren Templates anlegen, da bereits alle Sprachen mit Templates versorgt sind.';
$lng['error']['wwwnotallowed']='Ihre Subdomain darf nicht www heissen.';
$lng['error']['subdomainiswrong']='Die Subdomain %s beinhaltet ung&uuml;ltige Zeichen.';
$lng['error']['domaincantbeempty']='Der Domain-Name darf nicht leer sein.';
$lng['error']['domainexistalready']='Die Domain %s existiert bereits.';
$lng['error']['domainisaliasorothercustomer']='Die ausgew&auml;hlte Aliasdomain ist entweder selber eine Aliasdomain oder geh&ouml;t zu einem anderen Kunden.';
$lng['error']['emailexistalready']='Die eMail-Adresse %s existiert bereits.';
$lng['error']['maindomainnonexist']='Die Haupt-Domain %s existiert nicht.';
$lng['error']['destinationnonexist']='Bitte geben Sie Ihre Weiterleitungsadresse im Feld \'Nach\' ein.';
$lng['error']['destinationalreadyexistasmail']='Die Weiterleitung zu %s exisitiert bereits als aktive eMail-Adresse.';
$lng['error']['destinationalreadyexist']='Es gibt bereits eine Weiterleitung nach %s .';
$lng['error']['destinationiswrong']= 'Die Weiterleitungsadresse-Adresse %s beinhaltet ung&uuml;ltige Zeichen oder ist nicht vollst&auml;ndig.';
$lng['error']['domainname']=$lng['domains']['domainname'];

/**
 * Questions
 */
$lng['question']['question'] = 'Sicherheitsabfrage';
$lng['question']['admin_customer_reallydelete'] = 'Wollen Sie den Kunden %s wirklich l&ouml;schen?<br />ACHTUNG! Alle Daten gehen unwiederruflich verloren! Nach dem Vorgang m&uuml;ssen Sie die Daten aus dem Dateisystem noch manuell entfernen.';
$lng['question']['admin_domain_reallydelete'] = 'Wollen Sie die Domain %s wirklich l&ouml;schen?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Wollen Sie diese wichtigen Sicherheitseinstellungen (OpenBasedir und/oder SafeMode) wirklich deaktivieren?';
$lng['question']['admin_admin_reallydelete'] = 'Wollen Sie den Admin %s wirklich l&ouml;schen?<br />Alle Kunden und Domains werden dem Hauptadmin zugeteilt.';
$lng['question']['admin_template_reallydelete'] = 'Wollen Sie die Vorlage \'%s\' wirklich l&ouml;schen?';
$lng['question']['domains_reallydelete'] = 'Wollen Sie die Domain %s wirklich l&ouml;schen?';
$lng['question']['email_reallydelete'] = 'Wollen Sie die eMail-Adresse %s wirklich l&ouml;schen?';
$lng['question']['email_reallydelete_account'] = 'Wollen Sie das Konto von %s wirklich l&ouml;schen?';
$lng['question']['email_reallydelete_forwarder'] = 'Wollen Sie die Weiterleitung %s wirklich l&ouml;schen?';
$lng['question']['extras_reallydelete'] = 'Wollen Sie den Verzeichnisschutz f&uuml;r %s wirklich l&ouml;schen?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Wollen Sie die Optionen f&uuml;r den Pfad %s wirklich l&ouml;schen?';
$lng['question']['ftp_reallydelete'] = 'Wollen Sie den FTP-Account %s wirklich l&ouml;schen?';
$lng['question']['mysql_reallydelete'] = 'Wollen Sie die Datenbank %s wirklich l&ouml;schen?<br />ACHTUNG! Alle Daten gehen unwiederruflich verloren!';
$lng['question']['admin_configs_reallyrebuild'] = 'Wollen Sie wirklich Ihre Apache und Bind Konfigurationsdateien neu erstellen lassen?';

/**
 * Mails
 */
$lng['mails']['pop_success']['mailbody'] = 'Hallo,\n\nihr eMail-Konto {USERNAME}\nwurde erfolgreich eingerichtet.\n\nDies ist eine automatisch generierte\neMail, bitte antworten Sie nicht auf\ndiese Mitteilung.\n\nIhr SysCP-Team';
$lng['mails']['pop_success']['subject'] = 'eMail-Konto erfolgreich eingerichtet';
$lng['mails']['createcustomer']['mailbody'] = 'Hallo {FIRSTNAME} {NAME},\n\nhier ihre Accountinformationen:\n\nBenutzername: {USERNAME}\nPassword: {PASSWORD}\n\nVielen Dank,\nIhr SysCP-Team';
$lng['mails']['createcustomer']['subject'] = 'Accountinformationen';

/**
 * Admin
 */
$lng['admin']['overview'] = '&Uuml;bersicht';
$lng['admin']['ressourcedetails'] = 'Verbrauchte Ressourcen';
$lng['admin']['systemdetails'] = 'Systemdetails';
$lng['admin']['syscpdetails'] = 'SysCP-Details';
$lng['admin']['installedversion'] = 'Installierte Version';
$lng['admin']['latestversion'] = 'Neueste Version';
$lng['admin']['lookfornewversion']['clickhere'] = 'per Webservice abfragen';
$lng['admin']['lookfornewversion']['error'] = 'Fehler beim Auslesen';
$lng['admin']['resources'] = 'Ressourcen';
$lng['admin']['customer'] = 'Kunde';
$lng['admin']['customers'] = 'Kunden';
$lng['admin']['customer_add'] = 'Kunden anlegen';
$lng['admin']['customer_edit'] = 'Kunden bearbeiten';
$lng['admin']['domains'] = 'Domains';
$lng['admin']['domain_add'] = 'Domain anlegen';
$lng['admin']['domain_edit'] = 'Domain bearbeiten';
$lng['admin']['subdomainforemail'] = 'Subdomains als E-Mail-Domains';
$lng['admin']['admin'] = 'Admin';
$lng['admin']['admins'] = 'Admins';
$lng['admin']['admin_add'] = 'Admin anlegen';
$lng['admin']['admin_edit'] = 'Admin bearbeiten';
$lng['admin']['customers_see_all'] = 'Kann alle Kunden sehen?';
$lng['admin']['domains_see_all'] = 'Kann alle Domains sehen?';
$lng['admin']['change_serversettings'] = 'Kann Servereinstellungen bearbeiten?';
$lng['admin']['server'] = 'Server';
$lng['admin']['serversettings'] = 'Einstellungen';
$lng['admin']['rebuildconf'] = 'Configs neuschreiben';
$lng['admin']['stdsubdomain'] = 'Standardsubdomain';
$lng['admin']['stdsubdomain_add'] = 'Standardsubdomain anlegen';
$lng['admin']['deactivated'] = 'Gesperrt';
$lng['admin']['deactivated_user'] = 'Benutzer sperren';
$lng['admin']['sendpassword'] = 'Passwort zusenden';
$lng['admin']['ownvhostsettings'] = 'Eigene vHost-Einstellungen';
$lng['admin']['configfiles']['serverconfiguration'] = 'Konfiguration';
$lng['admin']['configfiles']['files'] = '<b>Konfigurationsdateien:</b> Bitte &auml;ndern Sie die entsprechenden Konfigurationsdateien<br />oder legen sie mit dem folgenden Inhalt neu an, falls sie nicht existieren.<br /><b>Bitte beachten Sie:</b> Das MySQL-Passwort wurde aus Sicherheitsgr&uuml;nden nicht ersetzt.<br />Bitte ersetzen Sie &quot;MYSQL_PASSWORD&quot; manuell durch das entsprechende Passwort.<br />Falls Sie es vergessen haben sollten, finden Sie es in der Datei &quot;lib/userdata.inc.php&quot;.';
$lng['admin']['configfiles']['commands'] = '<b>Kommandos:</b> Bitte f&uuml;hren Sie die folgenden Kommandos in einer Shell aus.';
$lng['admin']['configfiles']['restart'] = '<b>Neustart:</b> Bitte f&uuml;hren Sie die folgenden Kommandos zum Neuladen<br />der Konfigurationsdateuen in einer Shell aus.';
$lng['admin']['templates']['templates'] = 'Vorlagen';
$lng['admin']['templates']['template_add'] = 'Vorlage hinzuf&uuml;gen';
$lng['admin']['templates']['template_edit'] = 'Vorlage bearbeiten';
$lng['admin']['templates']['action'] = 'Aktion';
$lng['admin']['templates']['email'] = 'E-Mail';
$lng['admin']['templates']['subject'] = 'Betreff';
$lng['admin']['templates']['mailbody'] = 'Mailtext';
$lng['admin']['templates']['createcustomer'] = 'Willkommensmail f&uuml;r neue Kunden';
$lng['admin']['templates']['pop_success'] = 'Willkommensmail f&uuml;r neue E-Mail Konten';
$lng['admin']['templates']['template_replace_vars'] = 'Variablen die in den Vorlagen ersetzt werden:';
$lng['admin']['templates']['FIRSTNAME'] = 'Wird mit dem Vornamen des Kunden ersetzt.';
$lng['admin']['templates']['NAME'] = 'Wird mit dem Namen des Kunden ersetzt.';
$lng['admin']['templates']['USERNAME'] = 'Wird mit dem Benutzernamen des neuen Kundenaccounts ersetzt.';
$lng['admin']['templates']['PASSWORD'] = 'Wird mit dem Passwort des neuen Kundenaccounts ersetzt.';
$lng['admin']['templates']['EMAIL'] = 'Wird mit der Adresse des neuen POP3/IMAP Kontos ersetzt.';

/**
 * Serversettings
 */
$lng['serversettings']['session_timeout']['title'] = 'Session Timeout';
$lng['serversettings']['session_timeout']['description'] = 'Wie lange muss ein Benutzer inaktiv sein, damit die Session ung&uuml;ltig wird? (Sekunden)';
$lng['serversettings']['accountprefix']['title'] = 'Kundenprefix';
$lng['serversettings']['accountprefix']['description'] = 'Welchen Prefix sollen die Kundenaccounts haben?';
$lng['serversettings']['mysqlprefix']['title'] = 'SQL-Prefix';
$lng['serversettings']['mysqlprefix']['description'] = 'Welchen Prefix sollen die MySQL-Accounts haben?';
$lng['serversettings']['ftpprefix']['title'] = 'FTP-Prefix';
$lng['serversettings']['ftpprefix']['description'] = 'Welchen Prefix sollen die FTP-Accounts haben?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Documentdirectory';
$lng['serversettings']['documentroot_prefix']['description'] = 'Wo sollen alle Kunden liegen?';
$lng['serversettings']['logfiles_directory']['title'] = 'Logfilesdirectory';
$lng['serversettings']['logfiles_directory']['description'] = 'Wo sollen alle Logfiles liegen?';
$lng['serversettings']['ipaddress']['title'] = 'IP-Adresse';
$lng['serversettings']['ipaddress']['description'] = 'Welche IP-Adresse hat der Server?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = 'Welchen Hostname hat der Server?';
$lng['serversettings']['apacheconf_directory']['title'] = 'Apache-Config-Verzeichnis';
$lng['serversettings']['apacheconf_directory']['description'] = 'Wo liegen die Apache-Konfigdateien?';
$lng['serversettings']['apachereload_command']['title'] = 'Apache-Reload-Command';
$lng['serversettings']['apachereload_command']['description'] = 'Wie heisst das Skript zum reloaden des Apache?';
$lng['serversettings']['bindconf_directory']['title'] = 'Bind-Config-Directory';
$lng['serversettings']['bindconf_directory']['description'] = 'Wo liegen die Bind-Konfigdateien?';
$lng['serversettings']['bindreload_command']['title'] = 'Bind-Reload-Command';
$lng['serversettings']['bindreload_command']['description'] = 'Wie heisst das Skript zum reloaden des Bind?';
$lng['serversettings']['binddefaultzone']['title'] = 'Bind-Default-Zone';
$lng['serversettings']['binddefaultzone']['description'] = 'Wie heisst die Default-Zone f&uuml;r alle Domains?';
$lng['serversettings']['vmail_uid']['title'] = 'Mails-Uid';
$lng['serversettings']['vmail_uid']['description'] = 'Welche UID sollen die Mails haben?';
$lng['serversettings']['vmail_gid']['title'] = 'Mails-Gid';
$lng['serversettings']['vmail_gid']['description'] = 'Welche GID sollen die Mails haben?';
$lng['serversettings']['vmail_homedir']['title'] = 'Mails-Homedir';
$lng['serversettings']['vmail_homedir']['description'] = 'Wo sollen die Mails liegen?';
$lng['serversettings']['adminmail']['title'] = 'Absenderadresse';
$lng['serversettings']['adminmail']['description'] = 'Wie ist die Absenderadresse f&uuml;r eMails aus dem Panel?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'phpMyAdmin-URL';
$lng['serversettings']['phpmyadmin_url']['description'] = 'Wo liegt der phpMyAdmin? (muss mit http:// beginnen)';
$lng['serversettings']['webmail_url']['title'] = 'WebMail-URL';
$lng['serversettings']['webmail_url']['description'] = 'Wo liegt das WebMail? (muss mit http:// beginnen)';
$lng['serversettings']['webftp_url']['title'] = 'WebFTP-URL';
$lng['serversettings']['webftp_url']['description'] = 'Wo liegt das WebFTP? (muss mit http:// beginnen)';
$lng['serversettings']['language']['description'] = 'Welche Sprache ist ihre Standardsprache?';
$lng['serversettings']['maxloginattempts']['title'] = 'Max Loginversuche';
$lng['serversettings']['maxloginattempts']['description'] = 'Maximale Anzahl an Loginversuchen bis der Account deaktiviert wird.';
$lng['serversettings']['deactivatetime']['title'] = 'L&auml;nge der Deaktivierung';
$lng['serversettings']['deactivatetime']['description'] = 'Zeitraum (in sek.) f&uuml;r den der Account deaktiviert ist.';
$lng['serversettings']['pathedit']['title'] = 'Pfad-Eingabemethode';
$lng['serversettings']['pathedit']['description'] = 'Soll ein Pfad via Dropdown-Men&uuml; ausgew&auml;hlt oder manuell eingegeben werden k&ouml;nnen.';

/**
 * CHANGED BETWEEN 1.2.12 and 1.2.13
 */
$lng['mysql']['description'] = 'Hier k&ouml;nnen Sie MySQL-Datenbanken anlegen und l&ouml;schen.<br>Die &Auml;nderungen werden sofort wirksam und die Datenbanken sofort benutzbar.<br>Im Men&uuml; finden Sie einen Link zum phpMyAdmin, mit dem Sie Ihre Datenbankeninhalte einfach bearbeiten k&ouml;nnen.<br><br>Die Zugangsdaten von php-Skripten sind wie folgt: (Die Angaben in <i>kursiver</i> Schrift sind durch die jeweiligen Eintr&auml;ge zu ersetzen!)<br>Hostname: <b>localhost</b><br>Benutzername: <b><i>Datenbankname</i></b><br>Passwort: <b><i>das gew&auml;hlte Passwort</i></b><br>Datenbank: <b><i>Datenbankname</i></b>';

/**
 * ADDED BETWEEN 1.2.12 and 1.2.13
 */
$lng['admin']['cronlastrun'] = 'Last Cron';
$lng['serversettings']['apacheconf_filename']['title'] = 'Apache-Config-Dateiname';
$lng['serversettings']['apacheconf_filename']['description'] = 'Wie soll die Apache-Konfigurationsdatei genannt werden?';
$lng['serversettings']['paging']['title']       = 'Eintr&auml;ge pro Seite';
$lng['serversettings']['paging']['description'] = 'Wieviele Eintr&auml;ge sollen auf einer Seite gezeigt werden? (0 = Paging deaktivieren)';
$lng['error']['ipstillhasdomains']= 'Die IP/Port Kombination, die Sie l&ouml;schen wollen ist noch bei einer oder mehreren Domains eingetragen. Bitte &Auml;ndern sie die Domains vorher auf eine andere IP/Port Kombination um diese l&ouml;schen zu k&ouml;nnen.';
$lng['error']['cantdeletedefaultip'] = 'Sie k&ouml;nnen die Standard IP/Port Kombination f&uuml;r Reseller nicht l&ouml;schen. Bitte setzen Sie eine andere IP/Port Kombination als Standard um diese l&ouml;schen zu k&ouml;nnen.';
$lng['error']['cantdeletesystemip'] = 'Sie k&ouml;nnen die letzte System IP nicht l&ouml;schen. Entweder legen Sie eine neue IP/Port Kombination als Systemeinstellung an oder &Auml;ndern die System IP.';
$lng['error']['myipaddress'] = '\'IP\'';
$lng['error']['myport'] = '\'Port\'';
$lng['error']['myipdefault'] = 'Sie m&uuml;ssen eine IP/Port Kombination ausw&auml;hlen, die den Standard defninieren soll.';
$lng['error']['myipnotdouble'] = 'Diese Kombination aus IP und Post existiert bereits.';
$lng['question']['admin_ip_reallydelete'] = 'Wollen Sie wirklich die IP %s l&ouml;schen?';
$lng['admin']['ipsandports']['ipsandports'] = 'IPs und Ports';
$lng['admin']['ipsandports']['add'] = 'IP/Port hinzuf&uuml;gen';
$lng['admin']['ipsandports']['edit'] = 'IP/Port bearbeiten';
$lng['admin']['ipsandports']['ipandport'] = 'IP/Port';
$lng['admin']['ipsandports']['ip'] = 'IP';
$lng['admin']['ipsandports']['port'] = 'Port';
$lng['admin']['ipsandports']['default'] = 'Standard Reseller IP/Port'; 

// ADDED IN 1.2.13-rc3
$lng['error']['cantchangesystemip'] = 'Sie k&ouml;nnen die letzte System IP nicht l&ouml;schen. Entweder legen Sie noch eine neue IP/Port Kombination als Systemeinstellung an oder &Auml;ndern die System IP.';

/**
 * CHANGED BETWEEN 1.2.13 and 1.2.14
 */
$lng['mysql']['databasedescription'] = 'Datenbankbeschreibung';

?>