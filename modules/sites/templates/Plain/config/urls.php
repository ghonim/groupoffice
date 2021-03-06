<?php
/*
 * Copyright Intermesh BV
 *
 * This file is part of Group-Office. You should have received a copy of the
 * Group-Office license along with Group-Office. See the file /LICENSE.TXT
 *
 * If you have questions write an e-mail to info@intermesh.nl
 */

/**
 * Rewrite rules for SEO friendly urls
 *
 * @package GO.sites.templates.intermeshshop.config
 * @copyright Copyright Intermesh
 * @version $Id config.php 2012-06-07 12:37:50 mdhart $ 
 * @author Michael de Hart <mdehart@intermesh.nl> 
 */
return array(
		
		''=>'addressbook/site/contact',
		
		'<action:(login|logout|register|profile|resetpassword|recoverpassword)>' => 'sites/site/<action>',//TODO: login, logout, profile resetpassword, register, recover/lostpassword
		'<slug>'=>'sites/site/content', //TODO: requirements, contact	
		
		'<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>'
			
);

?>
