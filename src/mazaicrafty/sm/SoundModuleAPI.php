<?php

namespace mazaicrafty\sm;

use pocketmine\plugin\PluginBase;

use pocketmine\level\Position;
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

class SoundModuleAPI extends PluginBase{

    public function onEnable(): void{
        $this->getLogger()->info("SoundModuleAPI was enabled...");
    }
    
    /**
    * @param string $sound
    * @param Position $pos
    * @param float $pitch = 0
    * @param int $id = null
    * @return new $sound($pos)
    */
    public static function createSound(string $sound, Position $pos, float $pitch = 0, int $id = null){
        switch ($sound){
            case 'AnvilBreakSound':
            return new AnvilBreakSound($pos, $pitch);

            case 'AnvilFallSound':
            return new AnvilFallSound($pos, $pitch);

            case 'AnvilUseSound':
            return new AnvilUseSound($pos, $pitch);

            case 'BatSound':
            return new BatSound($pos, $pitch);

            case 'BlazeShootSound':
            return new BlazeShootSound($pos, $pitch);

            case 'ClickSound':
            return new ClickSound($pos, $pitch);

            case 'DoorBumpSound':
            return new DoorBumpSound($pos, $pitch);

            case 'DoorCrashSound':
            return new DoorCrashSound($pos, $pitch);

            case 'DoorSound':
            return new DoorSound($pos, $pitch);

            case 'EndermanTeleportSound':
            return new EndermanTeleportSound($pos, $pitch);

            case 'FizzSound':
            return new FizzSound($pos, $pitch);

            case 'GhastShootSound':
            return new GhastShootSound($pos, $pitch);

            case 'GhastSound':
            return new GhastSound($pos, $pitch);

            case 'LaunchSound':
            return new LaunchSound($pos, $pitch);

            case 'PopSound':
            return new PopSound($pos, $pitch);

            case 'GenericSound':
            return new GenericSound($pos, $id, $pitch);
    }
}
