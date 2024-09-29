<?php
// Finnish translation (FI)
// (c) Atte "Mixerboy24" Oksanen, atte.oksanen@localghost.fi
// Module: https://deploymentcode.com/backup-provisioning/backup-manager-whmcs-freenas/

$_LANG['freenas_servicemanagement_headline'] = 'Palvelun hallinta';

$_LANG['freenas_servicemanagement_tabmenu_services'] = 'Palvelut';
$_LANG['freenas_servicemanagement_tabmenu_ipcontrol'] = 'IP Hallinta';
$_LANG['freenas_servicemanagement_tabmenu_snapshots'] = 'Varmuuskopiot';

$_LANG['freenas_servicemanagement_tabcontent_services_th_service'] = 'Palvelu';
$_LANG['freenas_servicemanagement_tabcontent_services_th_status'] = 'Tila';
$_LANG['freenas_servicemanagement_tabcontent_services_th_action'] = 'Toimenpide';

$_LANG['freenas_servicemanagement_tabcontent_services_td_status_used'] = 'Käytössä';
$_LANG['freenas_servicemanagement_tabcontent_services_td_status_notused'] = 'Ei käytössä';

$_LANG['freenas_servicemanagement_tabcontent_services_td_action_btn_usage'] = 'Käyttötydet';
$_LANG['freenas_servicemanagement_tabcontent_services_td_action_btn_activateService'] = 'Aktivoi';
$_LANG['freenas_servicemanagement_tabcontent_services_td_action_btn_disableService'] = 'Poista käytöstä';

$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_btn_addip'] = 'Lisää';
$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_btn_delip'] = 'Poista';
$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_th_ip'] = 'IP Osoite';
$_LANG['freenas_servicemanagement_tabcontent_ipcontrol_th_services'] = 'Palvelu';

$_LANG['freenas_servicemanagement_tabcontent_snapshot_btn_create'] = 'Uusi varmuuskopio';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_date'] = 'Päivämäärä';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_refer'] = 'Varmuuskopion viite';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_comment'] = 'Kommentti';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_th_action'] = 'Toimenpide';

$_LANG['freenas_servicemanagement_tabcontent_snapshot_td_action_btn_rollback'] = 'Palauta';
$_LANG['freenas_servicemanagement_tabcontent_snapshot_td_action_btn_destroy'] = 'Tuhoa';

$_LANG['freenas_accountinformations_headline'] = 'Tilin tiedot';

$_LANG['freenas_accountinformations_tabmenu_accountAndBilling'] = 'Käyttötiedot & Laskutus';
$_LANG['freenas_accountinformations_tabcontent_account_accessHead'] = 'Käyttötiedot';
$_LANG['freenas_accountinformations_tabcontent_account_billingHead'] = 'Laskutustiedot';
$_LANG['freenas_accountinformations_tabcontent_account_volume'] = 'Tallennustila';

$_LANG['freenas_modal_btn_close'] = 'Sulje';
$_LANG['freenas_modal_btn_create'] = 'Luo';
$_LANG['freenas_modal_btn_add'] = 'Lisää';

$_LANG['freenas_modal_instructions_serverip'] = 'Palvelimen IP';
$_LANG['freenas_modal_instructions_port'] = 'Portti';
$_LANG['freenas_modal_instructions_username'] = 'Käyttäjänimi';
$_LANG['freenas_modal_instructions_password'] = 'Salasana';
$_LANG['freenas_modal_instructions_nfsPath'] = 'NFS Polku';
$_LANG['freenas_modal_instructions_cifsPath'] = 'CIFS Polku';
$_LANG['freenas_modal_instructions_iscsiServer'] = 'Palvelin';
$_LANG['freenas_modal_instructions_iscsiTarget'] = 'Kohde';
$_LANG['freenas_modal_instructions_iscsiAuthentication'] = 'Todennus';
$_LANG['freenas_modal_instructions_iscsiServer'] = 'Palvelin';
$_LANG['freenas_modal_instructions_getDetails'] = 'Tietojen vastaanotto...';

$_LANG['freenas_modal_instructions_ftp_head'] = 'FTP Käyttötiedot';
$_LANG['freenas_modal_instructions_ssh_head'] = 'SSH Käyttötiedot';
$_LANG['freenas_modal_instructions_nfs_head'] = 'NFS Käyttötiedot';
$_LANG['freenas_modal_instructions_cifs_head'] = 'CIFS Käyttötiedot';
$_LANG['freenas_modal_instructions_iscsi_head'] = 'iSCSI Käyttötiedot';

$_LANG['freenas_modal_createSnapshot_head'] = 'Luo uusi varmuuskopio';
$_LANG['freenas_modal_createSnapshot_form_comment_short'] = 'Varmuuskopion kommentti';
$_LANG['freenas_modal_createSnapshot_form_comment_desc'] = 'Syötä kuvaus (ei pakollinen)';

$_LANG['freenas_modal_ipcontrol_head'] = 'Lisää uusi sallittu IP';
$_LANG['freenas_modal_ipcontrol_form_ip_short'] = 'IP Osoite';
$_LANG['freenas_modal_ipcontrol_form_ip_desc'] = 'Syötä IP Osoite';
$_LANG['freenas_modal_ipcontrol_form_allow_iscsi_short'] = 'Salli iSCSI';
$_LANG['freenas_modal_ipcontrol_form_allow_iscsi_desc'] = 'Vain yksi IP voidaan sallia ISCSI:lle. Syötä "ALL" salliaksesi kaikki IP:t.';
$_LANG['freenas_modal_ipcontrol_form_allow_nfs_short'] = 'Salli NFS';
$_LANG['freenas_modal_ipcontrol_form_allow_nfs_desc'] = 'Pitää olla IP. Rajattomasti IP:itä voidaan sallia.';
$_LANG['freenas_modal_ipcontrol_form_allow_cifs_short'] = 'Salli CIFS';
$_LANG['freenas_modal_ipcontrol_form_allow_cifs_desc'] = 'Pitää olla IP. Rajattomasti IP:itä voidaan sallia.';

$_LANG['freenas_ajax_inprogress'] = 'Työskentelee';
$_LANG['freenas_ajax_fatalError'] = 'Virhe, yritä uudelleen';
$_LANG['freenas_ajax_snapshot_limit_reached'] = 'Varmuuskopioiden raja saavutettu';
$_LANG['freenas_ajax_snapshot_fatalError'] = 'Varmuuskopio epäonnistui';
$_LANG['freenas_ajax_ipcontrol_incomplete_input'] = 'Täytä lomake.';
$_LANG['freenas_ajax_ipcontrol_invalidip'] = 'Virheellinen IP';
$_LANG['freenas_ajax_ipcontrol_invalidip_iscsi'] = 'Sinun on syötettävä voimassa oleva IP tai sallittava "ALL".';

