[path]
dns = http://localhost,http://192.168.1.246

folder = /apps/sams/trunk/
folder_plugin = /moonlight/plugin/
folder_js = /moonlight/js/

[designer]
;designer mode is main for development copy
;IMPORTANT: turn off designer mode for production copy
designer_mode = 1
show_usr_id_in_window_title = 0

[general]
lang = en
block_invalid_browser = 1
firewall = 0
ssl=1
ssl_all=1
; this will determine how many second will redirect the url
redirect_in_second = 15
admin_email = admin@sains.com.my
basic_user_info = 1
form_token=1
form_token_by_session=0
;form_token_exception setting is to exclude certain page posting from form_token validation
;form_token_exception=demo/home/index,demo/user/list

[firewall]
active = 1
type = detail
strict_session_protection = 1
;gc_blacklist, post_blacklist, uri_blacklist are for overwrite blacklist keyword in firewall class
;gc_blacklist = "information_schema,t_anms,asdasd'dd"
;post_blacklist = information_schema,t_anms
;uri_blacklist = information_schema,t_anms
denied_msg = Firewall block your access, please try again.
unset_session = 1

[session]
root = vui
;life_time = 60
;close_after_write = 0

[page]
total_row_per_page = 20

[datetime]
date = d/m/Y
date_long = l, j F Y
time = h:i A
time_long = h:i:s A
datetime = d/m/Y h:i:s A

[gui]
theme = system
color = blue

[smtp]
server = smtp.sarawaknet.gov.my
port = 25


[email]
auto_reset = 1
auto_reset_interval = 1