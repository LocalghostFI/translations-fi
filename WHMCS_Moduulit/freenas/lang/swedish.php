<?php
// Swedish translation (SV)
// (c) Atte "Mixerboy24" Oksanen, atte.oksanen@localghost.fi
// Module: https://deploymentcode.com/backup-provisioning/backup-manager-whmcs-freenas/

$_LANG['freenas_servicemanagement_headline'] = 'Tjänstehantering';

$_LANG['freenas_servicemanagement_tabmenu_services'] = 'Tjänster';
$_LANG['freenas_servicemanagement_tabmenu_ipcontrol'] = 'IP Kontroll';
$_LANG['freenas_servicemanagement_tabmenu_snapshots'] = 'Säkerhetskopior';

$_LANG['freenas_servicemanagement_tabcontent_services_th_service'] = 'Tjänst';
$_LANG['freenas_servicemanagement_tabcontent_services_th_status'] = 'Status';
$_LANG['freenas_servicemanagement_tabcontent_services_th_action'] = 'Åtgärd';

$_LANG['freenas_servicemanagement_tabcontent_services_td_status_used'] = 'I bruk';
$_LANG['freenas_servicemanagement_tabcontent_services_td_status_notused'] = 'Inte i bruk';

$_LANG['freenas_servicemanagement_tabcontent_services_td_action_btn_usage'] = 'Åtkomstdetaljer';
$_LANG['freenas_servicemanagement_tabcontent_services_td_action_btn_activateService'] = 'Aktivera';
$_LANG['freenas_servicemanagement_tabcontent_services_td_action_btn_disableService'] = 'Inaktivera';

$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_btn_addip'] = 'Lägg till';
$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_btn_delip'] = 'Ta bort';
$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_th_ip'] = 'IP Adress';
$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_th_services'] = 'Tjänst';

$_LANG['freenas_servicemanagement_tabcontent_snapshot_btn_create'] = 'Ny säkerhetskopia';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_date'] = 'Datum';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_refer'] = 'Säkerhetskopians referens';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_comment'] = 'Kommentar';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_action'] = 'Åtgärd';

$_LANG['freenas_servicemanagement_tabcontent_snapshot_td_action_btn_rollback'] = 'Återställ';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_td_action_btn_destroy'] = 'Förstör';

$_LANG['freenas_accountinformations_headline'] = 'Kontoinformation';

$_LANG['freenas_accountinformations_tabmenu_accountAndBilling'] = 'Åtkomstdetaljer & Fakturering';
$_LANG['freenas_accountinformations_tabcontent_account_accessHead'] = 'Åtkomstdetaljer';
$_LANG['freenas_accountinformations_tabcontent_account_billingHead'] = 'Fakturainformation';
$_LANG['freenas_accountinformations_tabcontent_account_volume'] = 'Volym';

$_LANG['freenas_modal_btn_close'] = 'Stäng';
$_LANG['freenas_modal_btn_create'] = 'Skapa';
$_LANG['freenas_modal_btn_add'] = 'Lägg till';

$_LANG['freenas_modal_instructions_serverip'] = 'Server IP';
$_LANG['freenas_modal_instructions_port'] = 'Port';
$_LANG['freenas_modal_instructions_username'] = 'Användarnamn';
$_LANG['freenas_modal_instructions_password'] = 'Lösenord';
$_LANG['freenas_modal_instructions_nfsPath'] = 'NFS Sökväg';
$_LANG['freenas_modal_instructions_cifsPath'] = 'CIFS Sökväg';
$_LANG['freenas_modal_instructions_iscsiServer'] = 'Server';
$_LANG['freenas_modal_instructions_iscsiTarget'] = 'Mål';
$_LANG['freenas_modal_instructions_iscsiAuthentication'] = 'Autentisering';
$_LANG['freenas_modal_instructions_iscsiServer'] = 'Server';
$_LANG['freenas_modal_instructions_getDetails'] = 'Mottar detaljer...';

$_LANG['freenas_modal_instructions_ftp_head'] = 'FTP Åtkomstdetaljer';
$_LANG['freenas_modal_instructions_ssh_head'] = 'SSH Åtkomstdetaljer';
$_LANG['freenas_modal_instructions_nfs_head'] = 'NFS Åtkomstdetaljer';
$_LANG['freenas_modal_instructions_cifs_head'] = 'CIFS Åtkomstdetaljer';
$_LANG['freenas_modal_instructions_iscsi_head'] = 'iSCSI Åtkomstdetaljer';

$_LANG['freenas_modal_createSnapshot_head'] = 'Skapa en ny säkerhetskopia';
$_LANG['freenas_modal_createSnapshot_form_comment_short'] = 'Säkerhetskopians kommentar';
$_LANG['freenas_modal_createSnapshot_form_comment_desc'] = 'Ange en beskrivning (ej obligatorisk)';

$_LANG['freenas_modal_ipcontrol_head'] = 'Lägg till ny tillåten IP';
$_LANG['freenas_modal_ipcontrol_form_ip_short'] = 'IP Adress';
$_LANG['freenas_modal_ipcontrol_form_ip_desc'] = 'Ange en IP Adress';
$_LANG['freenas_modal_ipcontrol_form_allow_iscsi_short'] = 'Tillåt iSCSI';
$_LANG['freenas_modal_ipcontrol_form_allow_iscsi_desc'] = 'Endast en IP kan tillåtas för iSCSI. Ange "ALL" för att tillåta alla IP.';
$_LANG['freenas_modal_ipcontrol_form_allow_nfs_short'] = 'Tillåt NFS';
$_LANG['freenas_modal_ipcontrol_form_allow_nfs_desc'] = 'Måste vara en IP. Obegränsat antal IP kan tillåtas.';
$_LANG['freenas_modal_ipcontrol_form_allow_cifs_short'] = 'Tillåt CIFS';
$_LANG['freenas_modal_ipcontrol_form_allow_cifs_desc'] = 'Måste vara en IP. Obegränsat antal IP kan tillåtas.';

$_LANG['freenas_ajax_inprogress'] = 'Arbetar';
$_LANG['freenas_ajax_fatalError'] = 'Fel, försök igen';
$_LANG['freenas_ajax_snapshot_limit_reached'] = 'Säkerhetskopieringsgräns nådd';
$_LANG['freenas_ajax_snapshot_fatalError'] = 'Säkerhetskopiering misslyckades';
$_LANG['freenas_ajax_ipcontrol_incomplete_input'] = 'Fyll i formuläret.';
$_LANG['freenas_ajax_ipcontrol_invalidip'] = 'Ogiltig IP';
$_LANG['freenas_ajax_ipcontrol_invalidip_iscsi'] = 'Du måste ange en giltig IP eller tillåta "ALL".';
