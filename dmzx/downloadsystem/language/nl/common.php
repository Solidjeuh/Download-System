<?php
/**
*
* @package phpBB Extension - Download System
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'EDS_BACK_INDEX'					=> 'Terug naar index',
	'EDS_BACK_LINK'						=> 'Klik %shier%s om terug te keren naar de download index.',
	'EDS_CATS_NAME'						=> 'categorie&euml;n',
	'EDS_CAT_DESC'						=> 'Beschrijving',
	'EDS_CAT_NAME'						=> 'Categorie',
	'EDS_COST'							=> 'Kosten',
	'EDS_COST_ERROR'		            => 'Je hebt meer %1$s nodig voor deze download',
	'EDS_COST_FREE'			            => 'Deze download is gratis',
	'EDS_COST_OK'						=> 'Je hebt genoeg %1$s om dit bestand te downloaden',
	'EDS_DISABLED'						=> 'Het download systeem is momenteel uitgeschakeld. Gelieve later opnieuw te proberen.<br />Indien het systeem uitgeschakeld blijft kan je een beheerder contacteren.',
	'EDS_DL_NOEXISTS'					=> 'Deze download bestaat niet',
	'EDS_DOWNLOAD'						=> 'Download',
	'EDS_DOWNLOADS'						=> 'Downloads',
    'EDS_DOWNLOAD_EXPLAIN'				=> 'Klik op het icoon aan de rechterkant om het bestand te downloaden.',
	'EDS_FILE_CLICKS'					=> 'Totale Downloads',
	'EDS_FILE_DESC'						=> 'Beschrijving',
	'EDS_FILE_TITLE'					=> 'Bestandsnaam',
	'EDS_FILE_VERSION'					=> 'Versie',
	'EDS_FREE'							=> 'Gratis',
	'EDS_INDEX'							=> 'Index',
	'EDS_LAST_CHANGED_ON'				=> 'Laatst bewerkt op',
	'EDS_LAST_DOWNLOAD'					=> '&nbsp;<strong>%1$s</strong><br /><br />&nbsp;Gedownload: %2$s<br />&nbsp;Laatst bewerkt op: %3$s',
	'EDS_LAST_FILE'						=> 'Nieuwste bestand',
	'EDS_LEGEND'						=> 'Legende',
	'EDS_LEGEND_ERROR'					=> 'Je hebt meer %1$s nodig',
	'EDS_LEGEND_FREE'					=> 'Download is gratis',
	'EDS_LEGEND_NO_DL'		            => 'Je mag geen bestanden downloaden.',
	'EDS_LEGEND_OK'			            => 'Je hebt genoeg %1$s',
	'EDS_MULTI'				            => '%1$s Downloads',
	'EDS_NO_CAT'						=> '<strong>Sorry! Er zijn momenteel geen  beschikbaar.</strong><br /><br />',
	'EDS_NO_CAT_IN_UPLOAD'				=> '<strong>Sorry! Er zijn momenteel geen categorie&euml;n beschikbaar.</strong><br /><br />',
	'EDS_NO_DOWNLOADS'					=> '<strong>Sorry! Er zijn momenteel geen downloads beschikbaar.</strong><br /><br />',
	'EDS_NO_FILES'			            => 'Er zijn geen downloads',
	'EDS_NO_ID'				            => 'Geen id opgegeven',
	'EDS_NUMBER_DOWNLOADS'	            => 'Bestanden',
	'EDS_REGULAR_DOWNLOAD'	            => 'Klik hier om het geselecteerde bestand te downloaden',
	'EDS_REQUIRES_POINTS'	            => '<strong>We maken gebruik van een puntensysteem, en je hebt punten nodig voor deze download.<br />Je zal dus moeten inloggen of registreren om bestanden te downloaden.</strong>',
	'EDS_SINGLE'			            => '1 Download',
	'EDS_SUB_CAT'			            => 'Sub categorie',
	'EDS_SUB_CATS'			            => 'Sub categorie&euml;n',
	'EDS_TITLE'				            => 'Downloads',
	'EDS_TITLE_EXPLAIN'		            => 'Selecteer onderaan een categorie',
	'EDS_UPLOADED_ON'		            => 'Geupload op',
	'EDS_UPLOAD'						=> 'Upload',
	'EDS_UPLOADS'						=> 'Download systeem upload sectie',
	'EDS_UPLOAD_SECTION'				=> 'Upload sectie',
	'EDS_UPLOAD_MESSAGE'				=> 'Upload hier je bestand in de juiste categorie.',
	'EDS_FILESIZE'						=> 'Bestandsgrootte',
	'EDS_CAT_NOT_EXIST'		            => 'De geselecteerde categorie bestaat niet!',
	'EDS_BACK_DOWNLOADS'	            => 'Terug naar download overzicht',
	'EDS_NO_PERMISSION'		            => 'Je hebt geen rechten om het download systeem te gebruiken.',
	'EDS_NO_DOWNLOAD'		            => 'Je hebt geen rechten om bestanden te downloaden van ons download systeem',
	'EDS_NO_UPLOAD'						=> 'Je hebt geen rechten op de upload sectie te gebruiken.',
	'EDS_NO_DIRECT_DL'					=> 'Je hebt geen rechten om bestanden te downloaden',
	'EDS_CAT'				            => '1 category',
	'EDS_CATS'				            => '%d categorie&euml;n',
	'EDS_SUB_CATEGORY'					=> 'en %d subcategorie',
	'EDS_SUB_CATEGORIES'				=> 'en %d categorie&euml;n',
	'EDS_CURRENT_VERSION'				=> 'Huidige versie',
	'EDS_NEW_TITLE'						=> 'Titel',
	'EDS_NEW_TITLE_EXPLAIN'				=> 'Titel voor je download.',
	'EDS_NEW_VERSION'					=> 'Versie',
	'EDS_NEW_VERSION_EXPLAIN'			=> 'Versie van je download.',
	'EDS_NEW_DESC'						=> 'Beschrijving',
	'EDS_NEW_DESC_EXPLAIN'				=> 'BBcode & Smileys toegestaan.',
	'EDS_NEW_DL_CAT'					=> 'Categorie',
	'EDS_NEW_DL_CAT_EXPLAIN'			=> 'Selecteer hier een categorie.',
	'EDS_NEW_DOWNLOAD'					=> 'Nieuwe download',
	'EDS_NEW_FILENAME'					=> 'Bestandsnaam',
	'EDS_NEW_FILENAME_EXPLAIN'			=> 'Selecteer een bestand om te uploaden.',
	'EDS_NEW_DOWNLOAD_SIZE'				=> 'De maximum grootte van het bestand is <strong>%1$s %2$s</strong>! Als gevolg van de upload tijd die je nodig zou kunnen hebben, kan deze waarde lager zijn!',
	'EDS_SUBCAT_FILE'					=> '1 bestand',
	'EDS_SUBCAT_FILES'					=> '%1$d bestanden',

	// ACP
	'ACP_ADD'							=> 'Toevoegen',
	'ACP_ALL_DOWNLOADS'					=> 'Alle downloads',
	'ACP_ANNOUNCE_ENABLE'				=> 'Kondig nieuwe downloads aan',
	'ACP_ANNOUNCE_ENABLE_EXPLAIN'		=> 'Kies JA indien je nieuwe downloads wil aankondigen in een bepaald forum..',
	'ACP_ANNOUNCE_LOCK'					=> 'Sluit mededeling',
	'ACP_ANNOUNCE_LOCK_EXPLAIN'			=> 'Indien je JA kiest zal de mededeling gesloten worden.',
	'ACP_ANNOUNCE_ID'					=> 'Mededeling forum',
	'ACP_ANNOUNCE_ID_EXPLAIN'			=> 'Vul hier het ID in van het forum waar je de nieuwe downloads wenst aan te kondigen.',
	'ACP_ANNOUNCE_MSG'					=> 'Hallo,

We hebben een nieuwe download!

[b]Titel:[/b] %1$s
[b]Beschrijving:[/b] %2$s
[b]Categorie:[/b] %3$s
[b]Klik %4$s om naar de download pagina te gaan![/b]

Veel plezier!!',
	'ACP_ANNOUNCE_SETTINGS'				=> 'Mededeling instellingen',
	'ACP_ANNOUNCE_TITLE'				=> '%1$s',
	'ACP_CAT_NAME_SHOW_YES'				=> 'ja',
	'ACP_CAT_NAME_SHOW_NO'				=> 'nee',
	'ACP_NEW_CAT_NAME_SHOW'				=> 'Toon op de index upload',
	'ACP_NEW_CAT_NAME_SHOW_EXPLAIN'		=> 'Toon de categorie op de upload sectie voor groepen dat permissie hebben om te uploaden.<br /><strong>Mededeling:</strong> Beheerders kunnen altijd alle categorie&euml;n zien in de upload sectie.',
	'ACP_ANNOUNCE_UP'					=> 'Kondig download opnieuw aan',
	'ACP_ANNOUNCE_UP_EXPLAIN'			=> 'Activeer indien je de download opnieuw wenst aan te kondigen. Het bericht zal verzonden worden als update informatie',
	'ACP_ANNOUNCE_UP_MSG'				=> 'Hallo,

We hebben een geupdate download!

[b]Titel:[/b] %1$s

[b]Beschrijving:[/b] %2$s

[b]Categorie:[/b] %3$s

[b]Klik %4$s om naar de categorie te gaan![/b]

Veel plezier!',
	'ACP_ANNOUNCE_UP_TITLE'				=> '%1$s',
	'ACP_BASIC'							=> 'Basis instellingen',
	'ACP_CAT'							=> 'Categorie',
	'ACP_CATEGORIES'					=> 'categorie&euml;n',
	'ACP_CAT_DELETE'					=> 'Verwijder categorie',
	'ACP_CAT_DELETE_DONE'				=> 'De categorie is succesvol verwijderd',
	'ACP_CAT_DELETE_EXPLAIN'			=> 'Hier kan je een categoeie verwijderen.',
	'ACP_CAT_EDIT_DONE'					=> 'De categorie is succesvol geupdate',
	'ACP_CAT_EXIST'						=> 'De folder naam bestaat reeds op je server!',
	'ACP_CAT_EXPLAIN'					=> 'Vul hier de categorie naam in waar je download moet geplaats worden',
	'ACP_CAT_INDEX'						=> 'categorie&euml;n Index',
	'ACP_CAT_NAME_ERROR'				=> 'Je moet een folder naam opgevan voor je categorie!',
	'ACP_CAT_NEW'						=> 'Voeg een nieuwe categorie toe',
	'ACP_CAT_NEW_DONE'					=> 'De nieuwe categorie is succesvol aangemaakt en de folder werd toegevoegd aan je webruimte!',
	'ACP_CAT_NEW_EXPLAIN'				=> 'Hier kan je een nieuwe categorie toevoegen.',
	'ACP_CAT_NOT_EXIST'					=> 'De opgevraagde categorie bestaat niet!',
	'ACP_CAT_SELECT'					=> 'Hier kan je categorie&euml;n bewerken, toevoegen of verwijderen.',
	'ACP_CLICK'							=> 'hier',
	'ACP_CONFIG_SUCCESS'				=> 'De configurate is succesvol geupdate',
	'ACP_COPY_NEW'						=> 'Kopieren als concept',
	'ACP_COST_ERROR'					=> 'Je kan geen negatieve kosten instellen voor downloads!<br />Kies 0 om het gratis te maken of een positieve waarde',
	'ACP_COST_EXPLAIN'					=> 'Hier kan je instellen hoeveel %1$s de gebruiker moet betalen voor deze dowload. Zet op 0 om de download gratis te laten.',
	'ACP_COST_FREE'						=> 'Gratis',
	'ACP_COST_SHORT'					=> 'Kosten',
	'ACP_DELETE_HAS_FILES'				=> 'Er zitten nog steeds bestanden in de categorie!<br />Gelieve deze te verwijderen, of verplaats deze naar een andere categorie!',
	'ACP_DELETE_SUB_CATS'				=> 'Gelieve eerst de sub categorie te verwijderen!',
	'ACP_DEL_CAT'						=> 'Ben je zeker dat je de categorie wenst te verwijderen? <strong>%1$s</strong>?<br />De fysieke map op je server zal ook verwjderd worden indien er geen download meer aanwezig zijn.',
	'ACP_DEL_CAT_EXPLAIN'				=> 'Hier kan je een bestaande categorie verwjderen.',
	'ACP_DEL_DOWNLOAD'					=> 'Verwijder een download',
	'ACP_DEL_DOWNLOADS_TO'				=> 'Verplaats downloads naar',
	'ACP_DEL_DOWNLOAD_YES'				=> 'Verwijder categorie inclusief downloads?',
	'ACP_DEL_SUBS'						=> 'Verwijder sub categorie&euml;n',
	'ACP_DEL_SUBS_TO'					=> 'Verplaats sub categorie&euml;n naar',
	'ACP_DEL_SUBS_YES'					=> 'Verwijder categorie inclusief sub categorie&euml;n?',
	'ACP_DOWNLOADS'						=> 'Downloads',
	'ACP_DOWNLOAD_DELETED'				=> 'Je download is succesvol verwijderd.',
	'ACP_DOWNLOAD_UPDATED'				=> 'Je download werd succesvol geupdate',
	'ACP_DOWNLOAD_SYSTEM'				=> 'Download systeem',
	'ACP_EDIT_CAT'						=> 'Bewerk categorie',
	'ACP_EDIT_CAT_EXPLAIN'				=> 'Hier kan je een bestaande categorie bewerken.',
	'ACP_EDIT_DOWNLOADS'				=> 'Bewerk downloads',
	'ACP_EDIT_DOWNLOADS_EXPLAIN'		=> 'Hier kan je de geselecteerde download bewerken.',
	'ACP_EDIT_FILENAME'					=> 'Bestand opgeslagen',
	'ACP_EDIT_FILENAME_EXPLAIN'			=> '<strong>BELANGRIJK:</strong> Indien je de bestandsnaam hier veranderd zal er geen toekomstige controle meer zijn dat het bestand bestaat op je server. <strong>Je moet het nieuwe bestand uploaden via FTP en manueel het oude bestand verwijderen!</strong>',
	'ACP_EDIT_SUB_CAT_EXPLAIN'			=> 'De reeds aangemaakte sub categorie kan niet bewerkt worden. Indien je een andere sub categorie wil moet je eerst de huidige categorie verwijderen en een nieuwe aanmaken!',
	'ACP_FILE_TOO_BIG'					=> 'Het bestand is groter dan u webhosting toelaat!',
	'ACP_FORUM_ID_ERROR'				=> 'Het opgegeven forum ID bestaat niet!',
	'ACP_EDS_INDEX'						=> 'Download Systeem',
	'ACP_MANAGE_DOWNLOADS_EXPLAIN'		=> 'Hier kan je downloads toevoegen, bewerken of verwijderen.',
	'ACP_MULTI_DOWNLOAD'				=> '%d downloads',
	'ACP_NEED_DATA'						=> 'Je moet alle velden invullen!',
	'ACP_NEW_ADDED'						=> 'Uw opgave werd succesvol toegevoegd aan de database',
	'ACP_NEW_CAT'						=> 'Nieuwe categorie',
	'ACP_NEW_CAT_DESC'					=> 'Beschrijving van de categorie',
	'ACP_NEW_CAT_DESC_EXPLAIN'			=> 'Vul een nuttige beschrijving in voor je nieuwe categorie.<br />BB-Codes, smileys en links zullen automatisch herkent worden.',
	'ACP_NEW_CAT_NAME'					=> 'Categorie naam',
	'ACP_NEW_CAT_PARENT'				=> 'Bovenliggende categorie',
	'ACP_NEW_COPY_DOWNLOAD'				=> 'Nieuwe download met een kopie',
	'ACP_NEW_COPY_DOWNLOAD_EXPLAIN'		=> 'Je selecteerde om een kopie te maken van een reeds bestaande download voor een nieuwe download. Dit zal alvast wat tijd winnen, zeker als je een nieuwe update wenst te uploaden.',
	'ACP_NEW_DESC'						=> 'Beschrijving',
	'ACP_NEW_DESC_EXPLAIN'				=> 'Vul hier een beschrijving in voor je download.',
	'ACP_NEW_DL_CAT'					=> 'Categorie',
	'ACP_NEW_DL_CAT_EXPLAIN'			=> 'Selecteer hier een categorie waar je de download wenst te plaatsen.',
	'ACP_NEW_DOWNLOAD'					=> 'Nieuwe download',
	'ACP_NEW_DOWNLOAD_EXPLAIN'			=> 'Hier kan je nieuwe downloads toevoegen.',
	'ACP_NEW_DOWNLOAD_SIZE'				=> 'De maximum grootte van het bestand dat is toegestaan door je host is <strong>%1$s %2$s</strong>! Door de upload tijd van je host kan het zijn dat deze waarde lager is.',
	'ACP_NEW_FILENAME'					=> 'Bestandsnaam',
	'ACP_NEW_FILENAME_EXPLAIN'			=> 'Selecteer bestand voor upload.',
	'ACP_NEW_SUB_CAT_EXPLAIN'			=> 'Vul hier de pad naam is welke je wenst te gebruiken op je server voor deze categorie (zonder schuine strepen ).<br />Deze folder zal automatisch aangemaakt worden in de root/ext/dmzx/downloadsystem/files/ folder.<br />Toegestane karakters zijn a-z, A-Z, 0-9, de horizontale streep ( - ) en de underscore ( _ ) tekens.',
	'ACP_NEW_SUB_CAT_NAME'				=> 'Naam van de directory naar de categorie',
	'ACP_NEW_TITLE'						=> 'Titel',
	'ACP_NEW_TITLE_EXPLAIN'				=> 'Vul hier de titel in van je nieuwe download.',
	'ACP_NEW_VERSION'					=> 'Versie',
	'ACP_NEW_VERSION_EXPLAIN'			=> 'Vul hier de versie in van je nieuwe download.',
	'ACP_NO_CAT'						=> 'Er zijn geen categorie&euml;n beschikbaar!<br />Je moet op zijn minst 1 categorie aanmaken alvorens je kan starten met het toevoegen van downloads!',
	'ACP_NO_CAT_ID'						=> 'Geen Cat ID',
	'ACP_NO_CAT_PARENT'					=> 'geen bovenliggende categorie',
	'ACP_NO_CAT_UPLOAD'					=> 'Er zijn geen categorie&euml;n beschikbaar!<br />Je moet op zijn minst 1 categorie aanmaken alvorens je kan starten met het toevoegen van bestanden!',
	'ACP_NO_DOWNLOADS'					=> 'Geen Downloads',
	'ACP_NO_FILENAME'					=> 'Je moet een bestand opgeven dat toebehoort aan je upload!',
	'ACP_PAGINATION_ACP'				=> 'Voer het aantal downloads in dat je wenst te zien op de download beheer pagina in het beheerderspaneel.',
	'ACP_PAGINATION_ACP_EXPLAIN'		=> 'Zet hier hoeveel downloads je wenst te zien op de download beheer pagina in het beheerderspaneel. <em>Standaard is 5.</em>',
	'ACP_PAGINATION_DOWNLOADS'			=> 'Voer het aantal downloads in dat je wenst te zien op de categorie pagina',
	'ACP_PAGINATION_DOWNLOADS_EXPLAIN'	=> 'Zet hier hoeveel downloads je wenst te zien op de categorie pagina. <em>Standaard is 25.</em>',
	'ACP_PAGINATION_ERROR_ACP'			=> 'Je kan geen waarde kiezen kleiner dan 5!',
	'ACP_PAGINATION_ERROR_USER'			=> 'Je kan geen waarde kiezen kleiner dan 3!',
	'ACP_PAGINATION_ERROR_DOWNLOADS'	=> 'Je kan geen waarde kiezen kleiner dan 10!',
	'ACP_PAGINATION_USER'				=> 'Voer het aantal downloads in dat je wenst te zien op de download pagina',
	'ACP_PAGINATION_USER_EXPLAIN'		=> 'Zet hier hoeveel downloads je wenst te zien op de downloads pagina. <em>Standaard is 5.</em>',
	'ACP_PARENT_OPTION_NAME'			=> 'Selecteer een categorie',
	'ACP_REALLY_DELETE'					=> 'Ben je zeker dat je deze download wenst te verwijderen?<br />Het fysieke bestand om je server zal ook verwijderd worden!',
	'ACP_SINGLE_DOWNLOAD'				=> '1 download',
	'ACP_SORT_ASC'						=> 'Oplopend',
	'ACP_SORT_CAT'						=> 'Categorie',
	'ACP_SORT_DESC'						=> 'Aflopend',
	'ACP_SORT_DIRECTION'				=> 'sorteerrichting',
	'ACP_SORT_KEYS'						=> 'Sorteer op ',
	'ACP_SORT_TITLE'					=> 'Titel',
	'ACP_SUB_DL_CAT'					=> 'Subcategorie',
	'ACP_SUB_NO_CAT'					=> '-----------',
	'ACP_SUB_DL_CAT_EXPLAIN'			=> 'Selecteer hier de subcategorie.',
	'ACP_SUB_HAS_CAT_EXPLAIN'			=> 'Deze categorie heeft sub categorie&euml;n en kan niet gelinkt worden aan een andere categorie.',
	'ACP_UPLOAD_FILE_EXISTS'			=> 'Het bestand dat je wil uploaden bestaat reeds in deze categorie!',
	'ACP_WRONG_CHAR'					=> 'Je voerde een foutief karakter in bij de pad naam voor de categorie!<br />Toegestane karakters zijn a-z, A-Z, 0-9, de horizontale streep ( - ) en de underscore ( _ )!',
	'ACP_MANAGE_CONFIG_EXPLAIN'			=> 'Hier kan je enkele basis waardes invullen',
	'ACP_SET_USERNAME'					=> 'Gebruikersnaam voor een overdracht',
	'ACP_SET_USERNAME_EXPLAIN'			=> 'Hier kan je een gebruikersnaam invullen naar wie de download kosten moeten overgeschreven worden. Laat dit leeg als niemand deze moet ontvangen..',
	'ACP_FTP_OR_UPLOAD'					=> 'Je kan enkel een FTP upload doen <strong>OF</strong> normale upload!',
	'ACP_NEW_FTP_FILENAME_EXPLAIN'		=> 'Voer hier de bestandsnaam in (vb. voorbeeld.zip), indien je de FTP upload wenst te gebruiken.',
	'ACP_NEW_FTP_FILENAME'				=> 'FTP bestandsnaam',
	'ACP_UPLOAD_METHOD'					=> 'Upload Methode',
	'ACP_UPLOAD_METHOD_EXPLAIN'			=> 'Je kan een nieuwe upload toevoegen via FTP of rechtstreeks. Indien je de FTP methode gebruikt moet het bestand geupload worden naar de correcte categorie. <strong>alvorens</strong> je deze hier toevoegd! Je kan de rechtstreekse methode enkel gebruiken met 1 bestand per keer.',
	'ACP_UPLOAD_FILE_NOT_EXISTS'		=> 'Het bestand bestaat niet in de genoemde categorie. Omdat je de FTP upload methode gebruikt moet dit bestand geupload worden naar de correcte categorie <strong>ALVORENS</strong> je deze kan toevoegen!',
));
