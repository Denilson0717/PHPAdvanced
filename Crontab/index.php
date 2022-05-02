<?php

include "Ssh2_crontab_manager.php";

$crontab = new Ssh2_crontab_manager('11.11.111.111', '22', 'my_username', 'my_password');
$crontab->append_cronjob('30 8 * * 6 home/path/to/command/the_command.sh >/dev/null 2>&1');

//----------------------------------------------------------------------------------
$crontab = new Ssh2_crontab_manager('11.11.111.111', '22', 'my_username', 'my_password');
 
$new_cronjobs = array(
    '0 0 1 * * home/path/to/command/the_command.sh',
    '30 8 * * 6 home/path/to/command/the_command.sh >/dev/null 2>&1'
);
 
$crontab->append_cronjob($new_cronjobs);

//----------------------------------------------------------------------------------
$crontab = new Ssh2_crontab_manager('11.11.111.111', '22', 'my_username', 'my_password');
 
$cron_regex = '/home\/path\/to\/command\/the_command\.sh\/';
 
$crontab->remove_cronjob($cron_regex);

//----------------------------------------------------------------------------------
$crontab = new Ssh2_crontab_manager('11.11.111.111', '22', 'my_username', 'my_password');
 
$cron_regex = array(
    '/0 0 1 \* \*/',
    '/home\/path\/to\/command\/the_command\.sh\/'
);
 
$crontab->remove_cronjob($cron_regex);