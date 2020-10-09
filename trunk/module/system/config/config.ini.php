[general]
dummy_email = dummy_email@dummy_company.com

[page_hit]
activate = 1
database = moonlight_cph

[auth]
method = SWKID,LDAP,SYSTEM

;[swkid]
;url = https://sarawakid.tnt.sarawak.gov.my/web/apiv1/login
;client_id = localapp
;secret_key = 58349845d1b326db26f185f3f1b1b613

[LDAP]
activate = 1
login_passport = 1
name = SarawakNet

url = ldap.sarawak.gov.my

port = 389
org = SAINS,SarawakNet
change_password_url = http://ldap.sarawaknet.gov.my:1113/

[ldap2]
activate = 1
login_passport = 1
name = SarawakNet

url = ldap.mysecuresign.net

port = 389
org = JKM,SarawakNet
change_password_url = http://ldap.sarawaknet.gov.my:1113/

[AD]


[lang]
default = en
supported = en, bm

[sync]
database = moonlight_sync
table_prefix = t_syn_

[login_attempt]
; 1 = on, 0 = off.
attempt_check = 0

; option : usr_id / ip   (checking on user id or ip, if check on user id, checking will be base on same ip and same id)
mode = usr_id

; option : block / redirect / captcha ( block user from login for a time period / redirect to other page after 3 times login attempt / display captcha after 3 times attempt )
method = block

; redirect url for method "redirect" ( for redirection to forgot password page )
redirect_url = /apps/ems/branches/

; time interval for blocking in minutes
block_interval = 1

[single_session_per_user]
mode = 0

; replace_existing_session = 1
replace_existing_session = 1 

; Apply to LIFO
block_interval = 1
redirect_url = demo/home/index

[demo]
mode = 1
usr_short_name = google, apple, lmltiong