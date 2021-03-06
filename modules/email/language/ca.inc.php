<?php
//Uncomment this line in new translations!
require($GLOBALS['GO_LANGUAGE']->get_fallback_language_file('email'));
$lang['email']['name'] = 'Email';
$lang['email']['description'] = 'Mòdul d\'e-mail. Els usuaris podran enviar i rebre mails';

$lang['link_type'][9]='E-mail';

$lang['email']['feedbackNoReciepent'] = 'Heu d\'ingressar un destinatari';
$lang['email']['feedbackSMTPProblem'] = 'Problema de connexió amb el servidor SMTP:';
$lang['email']['feedbackUnexpectedError'] = 'Error inesperat en crear l\'email';
$lang['email']['feedbackCreateFolderFailed'] = 'No es pot crear la carpeta';
$lang['email']['feedbackSubscribeFolderFailed'] = 'No es pot esborrar la carpeta';
$lang['email']['feedbackUnsubscribeFolderFailed'] = 'No es pot desregistrar la carpeta';
$lang['email']['feedbackCannotConnect'] = 'No s\'ha pogut connectar amb %1$s port %3$s<br/><br/> El servidor de correu ha retornat: %2$s';
$lang['email']['inbox'] = 'Safata d\'entrada';

$lang['email']['spam']='Spam';
$lang['email']['trash']='Paperera';
$lang['email']['sent']='Missatges enviats';
$lang['email']['drafts']='Borradors';

$lang['email']['no_subject']='Sense assumpte';
$lang['email']['to']='Per';
$lang['email']['from']='De';
$lang['email']['subject']='Assumpte';
$lang['email']['no_recipients']='Destinataris ocults';
$lang['email']['original_message']='--- Missatge original ---';
$lang['email']['attachments']='Adjunts';

$lang['email']['notification_subject']='Llegir: %s';
$lang['email']['notification_body']='El vostre missatge amb assumpte "%s" fou mostrat a les %s';
$lang['email']['feedbackDeleteFolderFailed']= 'No s\'ha pogut eliminar la carpeta';
$lang['email']['errorGettingMessage']='No s\'ha pogut obtenir missatge del servidor';
$lang['email']['no_recipients_drafts']='Sense destinataris';
$lang['email']['usage_limit']= '%s de %s usat';
$lang['email']['usage']= '%s usat';

$lang['email']['event']='Esdeveniment';
$lang['email']['calendar']='calendari';
$lang['email']['quotaError']="La vostra safata està plena. Buideu la vostra paperera. Si ja està buida i la safata encara està plena, cal que desactiveu la paperera i desprès esborrar missatges de les altres carpetes. podeu desactivar la paperera a:\n\nAdministració -> Comptes -> doble clic en el vostre compte -> Carpetes.";
$lang['email']['draftsDisabled']="El missatge no s\'ha pogut desar per que la carpeta 'Borradors' està desactivada.<br /><br />Aneu a E-Mail -> Administració -> Comptes -> doble clic en el vostre compte -> Carpetes per configurar-la";
$lang['email']['noSaveWithPop3']='El missatge no s\'ha pogut desar per que els comptes POP3 no permeten aquesta opció';
$lang['email']['goAlreadyStarted']='{product_name} ja està carregat. El compositor d\'e-mail està carregat en {product_name}. Tanqueu aquesta finestra i composeu el vostre missatge a {product_name}.';
$lang['email']['replyHeader']='A les %s, %s en %s %s escrigué:';
$lang['email']['alias']='Àlies';
$lang['email']['aliases']='Àlies';
$lang['email']['noUidNext']='El vostre servidor de mail no suporta UIDNEXT. La carpeta \'Drafts\' serà deshabilitada per aquest compte';
$lang['email']['disable_trash_folder']='Error en moure el mail a la paperera. Això podria ser ocasionat per que no disposeu de més espai. Podeu alliberar espai desactivant la paperera a Administració -> Comptes -> doble clic en el vostre compte -> Carpetes';
$lang['email']['error_move_folder']='No es pot moure la carpeta';
$lang['email']['error_getaddrinfo']='Nom de host invàlid';
$lang['email']['error_authentication']='Usuari o contrasenya invàlids';
$lang['email']['error_connection_refused']='Error de connexió. Verifiqueu el host i el port';

$lang['email']['iCalendar_event_invitation']='Aquest missatge conté una invitació a un esdeveniment.';
$lang['email']['iCalendar_event_not_found']='Aquest missatge conté una actualització d\'un esdeveniment que ja no existeix.';
$lang['email']['iCalendar_update_available']='Aquest missatge conté una actualització d\'un esdeveniment existent.';
$lang['email']['iCalendar_update_old']='Aquest missatge conté un esdeveniment que ja ha estat processat.';
$lang['email']['iCalendar_event_cancelled']='Aquest missatge conté la cancel·lació d\'un esdeveniment.';
$lang['email']['iCalendar_event_invitation_declined']='Aquest missatge conté la invitació a un esdeveniment que heu rebutjat.';

$lang['email']['name']= 'E-mail';
$lang['email']['description']= 'Client d\'e-mail plenament funcional. Tots els usuaris podran rebre i enviar e-mails';
$lang['link_type'][9]='E-mail';
$lang['email']['feedbackNoReciepent']= 'No heu introduït un destinatari';
$lang['email']['feedbackSMTPProblem']= 'Hi ha hagut un problema comunicant-se amb SMTP: ';
$lang['email']['feedbackUnexpectedError']= 'Hi ha hagut un problema inesperat construïnt l\'e-mail: ';
$lang['email']['feedbackCreateFolderFailed']= 'No s\'ha pogut crear la carpeta';
$lang['email']['feedbackDeleteFolderFailed']= 'No s\'ha pogut esborrar la carpeta';
$lang['email']['feedbackSubscribeFolderFailed']= 'No s\'ha pogut subscriure la carpeta';
$lang['email']['feedbackUnsubscribeFolderFailed']= 'No s\'ha pogu desubscriure la carpeta';
$lang['email']['feedbackCannotConnect']= 'No s\'ha pogut connectar a %1$s al port %3$s<br /><br />El servidor de mail ha retornat: %2$s';
$lang['email']['inbox']= 'Safata d\'entrada';
$lang['email']['spam']='Spam';
$lang['email']['trash']='Brossa';
$lang['email']['sent']='Ítems enviats';
$lang['email']['drafts']='Pendents d\'enviament';
$lang['email']['no_subject']='Sense assumpte';
$lang['email']['to']='Per';
$lang['email']['from']='De';
$lang['email']['subject']='Assumpte';
$lang['email']['no_recipients']='Destinataris ocults';
$lang['email']['original_message']='--- Missatge original ---';
$lang['email']['attachments']='Adjunts';
$lang['email']['notification_subject']='Llegit: %s';
$lang['email']['notification_body']='El vostre missatge amb assumpte "%s" s\'ha mostrat a %s';
$lang['email']['errorGettingMessage']='No s\'ha pogut obtenir el missatge del servidor';
$lang['email']['no_recipients_drafts']='Sense destinataris';
$lang['email']['usage_limit']= '%s de %s usat';
$lang['email']['usage']= '%s usat';
$lang['email']['event']='Trobada';
$lang['email']['calendar']='calendari';
$lang['email']['quotaError']="La vostra bústia de correu està plena. Buideu la vostra carpeta de brossa primer. Si ja està buida i la vostra bústia encara està plena, heu de desactivar la carpeta de brossa per eliminar missatges d\'altres carpetes. Podeu desactivar-la a:\n\nConfiguració -> Comptes -> Doble clic compte -> Carpetes.";
$lang['email']['draftsDisabled']="El missatge no s\'ha pogut desar perque la carpeta 'Pendents d'enviament' està desactivada.<br /><br />Aneu a E-mail -> Administració -> Comptes -> Doble clic compte -> Carpetes per configurar-la.";
$lang['email']['noSaveWithPop3']='El missatge no s\'ha pogut desar perque un compte POP3 no ho suporta.';
$lang['email']['goAlreadyStarted']='{product_name} ja està funcionant. El redactor d\'e-mail està carregat en {product_name}. Tanqueu aquesta finestra i redacteu el vostre missatge en {product_name}.';
$lang['email']['replyHeader']='A %s, %s a %s %s escrigué:';
$lang['email']['alias']='Àlias';
$lang['email']['aliases']='Àlias';
$lang['email']['noUidNext']='El vostre servidor de mail no suporta UIDNEXT. La carpeta \'Pendents d\'enviament\' s\'ha desactivat automàticament per aquest compte.';
$lang['email']['disable_trash_folder']='Ha fallat el trasllat d\'aquest missatge a la carpeta \'brossa\'. Això pot ser degut a que esteu sense espai en el disc. Només podeu alliberar espai desactivantla carpeta brossa a Administració -> Comptes -> Doble clic sobre el vostre compte -> Carpetes';
$lang['email']['error_move_folder']='No s\'ha pogut moure la carpeta';
$lang['email']['error_getaddrinfo']='Adreça de host especificada invàlida';
$lang['email']['error_authentication']='Nom d\'usuari o contrasenya invàlids';
$lang['email']['error_connection_refused']='La connexió ha estat refusada. Si us plau verifiqueu el host i el nombre de port.';
$lang['email']['iCalendar_event_invitation']='Aquest missatge conté una invitació a un esdeveniment.';
$lang['email']['iCalendar_event_not_found']='Aquest missatge conté una actualització d\'un esdeveniment que ja no existeix.';
$lang['email']['iCalendar_update_available']='Aquest missatge conté una actualització d\'un esdeveniment existent.';
$lang['email']['iCalendar_update_old']='Aquest missatge conté un esdeveniment que ja ha estat processat.';
$lang['email']['iCalendar_event_cancelled']='Aquest missatge conté la cancel·lació d\'un esdeveniment.';
$lang['email']['iCalendar_event_invitation_declined']='Aquest missatge conté una invitació a un esdeveniment que heu refusat.';
