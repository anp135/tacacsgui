<?php

#########################################
########TACACS GUI API###################
		define('APIVER', '0.9.55');
		define('TACVER', preg_replace('/^tac_plus\s+version\s+/i', '', shell_exec('tac_plus -v 2>&1') ) );
#########################################
#########################################