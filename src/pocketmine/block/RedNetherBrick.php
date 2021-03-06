<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/


namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\item\Tool;

class RedNetherBrick extends Solid{

	protected $id = Block::RED_NETHER_BRICK;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getName(): string{
		return "Red Nether Brick";
	}

	public function getHardness(): float{
		return 0.5;
	}

	public function getToolType(): int{
		return Tool::TYPE_PICKAXE;
	}

	public function getLightLevel(): int{
		return 3;
	}

	public function hasEntityCollision(): bool{
		return true;
	}

	public function getDrops(Item $item): array{
		if ($item->isPickaxe() >= Tool::TIER_WOODEN){
			return parent::getDrops($item);
		}

		return [];
	}

}
