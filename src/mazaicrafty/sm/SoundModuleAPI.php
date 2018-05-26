<?php

/**
* The MIT License
* Copyright (c) 2018 MazaiCrafty
*/

namespace mazaicrafty\sm;

use pocketmine\plugin\PluginBase;

use pocketmine\math\Vector3;

use pocketmine\level\sound\AnvilBreakSound;
use pocketmine\level\sound\AnvilFallSound;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\level\sound\BatSound;
use pocketmine\level\sound\BlazeShootSound;
use pocketmine\level\sound\ClickSound;
use pocketmine\level\sound\DoorBumpSound;
use pocketmine\level\sound\DoorCrashSound;
use pocketmine\level\sound\DoorSound;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\level\sound\FizzSound;
use pocketmine\level\sound\GhastShootSound;
use pocketmine\level\sound\GhastSound;
use pocketmine\level\sound\LaunchSound;
use pocketmine\level\sound\PopSound;
use pocketmine\level\sound\GenericSound;

use mazaicrafty\sm\Sound;

class SoundModuleAPI extends PluginBase{

    public function onEnable(): void{
        $this->getLogger()->info("SoundModuleAPI was enabled...");
    }
    
    public static function createSoundToPlayer($sound, Player $player, float $pitch = 0, int $id = null){
        $result = self::createSound($sound, new Vector3($player->getX(), $player->getY(), $player->getZ()), $pitch, $id);
        return $result;
    }
    
    /**
    * @param $sound
    * @param Vector3 $pos
    * @param float $pitch = 0
    * @param int $id = null
    * @return new $sound($pos)
    */
    public static function createSound($sound, Vector3 $pos, float $pitch = 0, int $id = null){
        switch ($sound){
            case Sound::ANVIL_BREAK:
            return new AnvilBreakSound($pos, $pitch);

            case Sound::ANVIL_FALL:
            return new AnvilFallSound($pos, $pitch);

            case Sound::ANVIL_USE:
            return new AnvilUseSound($pos, $pitch);

            case Sound::BAT:
            return new BatSound($pos, $pitch);

            case Sound::BLAZE_SHOOT:
            return new BlazeShootSound($pos, $pitch);

            case Sound::CLICK:
            return new ClickSound($pos, $pitch);

            case Sound::DOOR_BUMP:
            return new DoorBumpSound($pos, $pitch);

            case Sound::DOOR_CRASH:
            return new DoorCrashSound($pos, $pitch);

            case Sound::DOOR:
            return new DoorSound($pos, $pitch);

            case Sound::ENDERMAN_TELEPORT:
            return new EndermanTeleportSound($pos, $pitch);

            case Sound::FIZZ:
            return new FizzSound($pos, $pitch);

            case Sound::GHAST_SHOOT:
            return new GhastShootSound($pos, $pitch);

            case Sound::GHAST:
            return new GhastSound($pos, $pitch);

            case Sound::LAUNCH:
            return new LaunchSound($pos, $pitch);

            case Sound::POP:
            return new PopSound($pos, $pitch);

            case Sound::GENERIC:
            return new GenericSound($pos, $id, $pitch);
        }
    }
}

