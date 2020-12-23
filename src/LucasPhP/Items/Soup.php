<?php

namespace LucasPhP\Items;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;

class Soup implements Listener {

    public function onInteract(PlayerInteractEvent $event) : void {

        if ($event->getAction() === PlayerInteractEvent::LEFT_CLICK_AIR || $event->getAction() === PlayerInteractEvent::LEFT_CLICK_BLOCK || $event->getAction() === PlayerInteractEvent::RIGHT_CLICK_AIR || $event->getAction() === PlayerInteractEvent::RIGHT_CLICK_BLOCK) {

            $player = $event->getPlayer();
            $item = $player->getInventory()->getItemInHand();

            if ($item->getId() === Item::SLIMEBALL) {

                if ($player->getHealth() < 20) {

                    $player->setHealth($player->getHealth() + 4);
                    $player->sendPopup("§a+ §a2");
                    $player->getInventory()->removeItem(Item::get($item->getId(), 0, 1));

                }
            }
        }
    }
}
