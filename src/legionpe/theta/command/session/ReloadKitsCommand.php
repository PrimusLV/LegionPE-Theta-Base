<?php

/*
 * Theta
 *
 * Copyright (C) 2015 PEMapModder and contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PEMapModder
 */

namespace legionpe\theta\command\session;

use legionpe\theta\BasePlugin;
use legionpe\theta\command\SessionCommand;
use legionpe\theta\lang\Phrases;
use legionpe\theta\Session;

class ReloadKitsCommand extends SessionCommand{
	public function __construct(BasePlugin $main){
		parent::__construct($main, "rk", "Reload kits", "/rk");
	}
	protected function run(array $args, Session $sender){
		$sender->reloadKits();
		return $sender->translate(Phrases::KITS_RELOADING);
	}
}
