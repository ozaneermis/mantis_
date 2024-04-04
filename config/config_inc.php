<?php
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'bugtracker';
$g_db_username            = 'root';
$g_db_password            = '';

$g_default_timezone       = 'UTC';

$g_crypto_master_salt     = 'Jkr7BVCn+fvqr5XwD+eoguTx5PpdN8goMOfL3Cc+iMo=';

# --- Email Configuration ---
#$g_phpMailer_method	= PHPMAILER_METHOD_MAIL; # or PHPMAILER_METHOD_SMTP, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host			= 'smtp.masdaf.local';		 # used with PHPMAILER_METHOD_SMTP
$g_smtp_port 			= 25;
$g_smtp_username		= '';						# used with PHPMAILER_METHOD_SMTP
$g_smtp_password		= '';						# used with PHPMAILER_METHOD_SMTP
$g_webmaster_email      = 'bt@masgrup.com'; 		# testin gideceği mail
$g_from_email           = 'noreply@masgrup.com';	# the "From: " field in emails
$g_return_path_email    = 'bt@masgrup.com';			# the return address for bounced mail
$g_phpMailer_method		=  PHPMAILER_METHOD_SMTP;  	# PHPMAILER_METHOD_MAIL  or , PHPMAILER_METHOD_SENDMAIL
$g_smtp_connection_mode = '';
$g_from_name			= 'Mantis Ticket Sistem';
$g_email_receive_own	= OFF;
$g_email_send_using_cronjob = OFF;

# --- User Profile Create  ---
$g_default_timezone       = 'Europe/Istanbul';
$g_default_new_account_access_level = REPORTER;
$g_default_home_page = 'my_view_page.php';	# Set to name of page to go to after login

# Optionally, if you want to use blank email addresses
$g_allow_blank_email = ON;

# --- Own User Create  ---
$g_allow_signup		= ON;

# --- anonymous login -----------
$g_allow_anonymous_login = OFF;
$g_anonymous_account = 'guest';

# --- HATA ICIN ----------
$g_form_security_validaton = OFF;
$g_allow_browser_cache = OFF;
#$g_reauthentication_expiry = 10*28800;

# --- Status ---
$g_rassign_on_feedback = ON;

# --- Attachments / File Uploads ---
$g_allow_file_upload	= ON;
$g_file_upload_method	= DISK; #DATABASE or DISK
$g_absolute_path_default_upload_folder = 'C:\wamp64\www\mantisbt\uploads/';  # used with DISK, must contain trailing \ or /.
$g_dropzone_enabled = ON;
$g_max_file_size		= 55000000;	# in bytes
$g_preview_attachments_inline_max_size = 512 * 2048;
$g_file_upload_max_num = 10;
$g_allowed_files		= '';		# extensions comma separated, e.g. 'php,html,java,exe,pl'
$g_disallowed_files		= '';		# extensions comma separated
$g_show_attachments     =   ON;
$g_preview_text_extensions = 'txt';
$g_preview_image_extensions = 'png';

# --- Resolution---
$g_resolution_enum_string = '10:10-Yeni,20:20-Çözümlenmiş,30:30-Tekrar Açıldı,40:40-Tekrarlanamadı,50:50-Çözümlenemez,60:60-Kopyası Var,';
$g_resolution_enum_string = '10:10-open,20:20-fixed,30:30-reopened,40:40-unable to reproduce,50:50-not fixable,60:60-duplicate,';
#$g_bug_resolution_fixed_threshold = 'FIXED';
#$g_bug_resolution_not_fixed_threshold = 'UNABLE_TO_REPRODUCE';
$g_status_enum_workflow[FEEDBACK]       ='40:confirmed';

# --- Time Tracking---
$g_time_tracking_enabled = ON;

# --- Branding ---
$g_window_title		= 'Masdaf Mantis Ticket Sistem';
$g_logo_image		= '../images/mantis_logo.png';
$g_favicon_image	= '../images/favicon.ico';

# --- Real Names ---
$g_show_realname = ON; // Kişilerin Gerçek isimlerini gösterir. OFF olunca kullanıcı adlarını
$g_show_user_realname_threshold = VIEWER;	# Set to access level (e.g. NOBODY, VIEWER, REPORTER, DEVELOPER, MANAGER, etc)

# --- Department ---
$g_show_department = ON; 
$g_show_user_department_threshold = VIEWER;

# -- LDAP Ayarları ---
$g_login_method = LDAP;
$g_ldap_server = 'ldap://192.168.0.11:389';
$g_ldap_root_dn = 'OU=Users,OU=MASDAF,DC=masdaf,DC=local';
$g_ldap_organization = '(objectClass=*)';
$g_ldap_realname_field  = 'cn';
$g_ldap_department_field  = 'department';
$g_ldap_uid_field = 'sAMAccountName';   
#$g_ldap_bind_dn = 'CN=Ali GUMUS,OU=DUZCE,OU=Users,OU=MASDAF,DC=masdaf,DC=local';
#$g_ldap_bind_passwd = 'MasDaf!!..'; 
$g_ldap_bind_dn = 'CN=Administrator,OU=Sistem,OU=MASDAF,DC=masdaf,DC=local';
$g_ldap_bind_passwd = 'M@s77*24*!.'; 
$g_ldap_protocol_version = 3;
$g_use_ldap_email		= ON;
$g_use_ldap_realname	= ON;
$g_use_ldap_department	= ON;
$g_log_level = LOG_LDAP;
//$g_log_destination = 'file:C:\xampp\htdocs\mantisbt\Logs\mantisbt.log';

$g_form_security_validation =OFF; //Kullanıcıları zaman zaman aldığı cache hataları engellemek için Off yapıldı. bir süre denenecek.
//$g_show_project_menu_bar = OFF; // Sorun bildir sayfasında ek projeler çıkıyor ON olunca.
$g_reporter_summary_limit = 100; // Limit how many reporters to show in the summary page. This is useful when there are dozens or hundreds of reporters. The default value is 10
//$g_view_summary_threshold    = REPORTER; // Özet Sayfasını Açıyor.
//$g_aliMultiLogin = True;

$g_html_valid_tags = 'p, li, ul, ol, br, pre, i, b, u, em, strong, code';

# -- LDAP Engeli ---
#$g_ldap_engelli = array('bilgi.islem','mcelik');  #Aktif Olduğunda ilgli kullanıcıları engeller