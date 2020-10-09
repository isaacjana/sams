[db]
type = mysql
;host = 10.18.4.40
host = 
database = common_share
table_prefix = t_sys_
user = root
password = password

[page_hit]
activate = 1
database = moonlight_cph

[ldap]
activate = 1
login_passport = 1
name = SarawakNet
url = 172.22.22.20
port = 389
org = SarawakNet
change_password_url = http://ldap.sarawaknet.gov.my:1113/

[lang]
default = en
supported = en

[offline]
enable = 0
online_db_type = mysql
online_db_host = 
online_db_database = 
online_db_table_prefix = t_sys_
online_db_user = root
online_db_password = password

[sync]
database = moonlight_sync
table_prefix = t_syn_