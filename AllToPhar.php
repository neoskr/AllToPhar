<?php

/**
 * @name AllToPhar
 * @main AllToPhar\AllToPhar
 * @author NeosPE
 * @version 0.1
 * @api 3.9.3
 * @description 어쩌라구 ㅡㅡ;
 */
 
namespace AllToPhar;

use pocketmine\plugin\PluginBase;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\Server;

class AllToPhar extends PluginBase
{

    public function onEnable()
    {

		$server = Server::getInstance();
		
		foreach ($server->getPluginManager()->getPlugins() as $plugin) {
			
			$pluginName = explode (' ', $plugin->getDescription()->getFullName())[0];
			$server->dispatchCommand (new ConsoleCommandSender(), 'makeplugin ' . $pluginName);
			
			//echo $pluginName;
			
		}

    }

}
