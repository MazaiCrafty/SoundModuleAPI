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

class SoundModuleAPI extends PluginBase{
    
    use mazaicrafty\sm\Sound;

    public function onEnable(): void{
        $this->getLogger()->info("SoundModuleAPI was enabled...");
    }
    
    private static $sounds = [];
    public static function registerSounds(){
        SoundModuleAPI::$sounds[Sound::ANVIL_BREAK] = AnvilBreakSound::class;
        SoundModuleAPI::$sounds[Sound::ANVIL_FALL] = AnvilFallSound::class;
        SoundModuleAPI::$sounds[Sound::ANVIL_USE] = AnvilUseSound::class;
        SoundModuleAPI::$sounds[Sound::BAT] = BatSound::class;
        SoundModuleAPI::$sounds[Sound::BLAZESHOOT] = BlazeShootSound::class;
        SoundModuleAPI::$sounds[Sound::CLICK] = ClickSound::class;
        SoundModuleAPI::$sounds[Sound::DOOR_BUMP] = DoorBumpSound::class;
        SoundModuleAPI::$sounds[Sound::DOOR_CRASH] = DoorCrashSound::class;
        SoundModuleAPI::$sounds[Sound::DOOR] = DoorSound::class;
        SoundModuleAPI::$sounds[Sound::ENDERMAN_TELEPORT] = EndermanTeleportSound::class;
        SoundModuleAPI::$sounds[Sound::FIZZ] = FizzSound::class;
        SoundModuleAPI::$sounds[Sound::GHAST_SHOOT] = GhastShootSound::class;
        SoundModuleAPI::$sounds[Sound::GHAST] = GhastSound::class;
        SoundModuleAPI::$sounds[Sound::LAUNCH] = LaunchSound::class;
        SoundModuleAPI::$sounds[Sound::POP] = PopSound::class;
        SoundModuleAPI::$sounds[Sound::GENERIC] = GenericSound::class;
    }
    
    public static function createSoundToPlayer($sound, Player $player, float $pitch = 0, int $id = null){
        $result = SoundModuleAPI::createSound($sound, new Vector3($player->getX(), $player->getY(), $player->getZ()), $pitch, $id);
        return $result;
    }
    
    /**
    * @param $sound
    * @param Vector3 $pos
    * @param float $pitch = 0
    * @param int $id = null
    * @return new $sound_class
    */
    public static function createSound($sound, Vector3 $pos, float $pitch = 0, int $id = null){
        $sound_class = SoundModuleAPI::$sounds[$sound];
        if($sound == Sound::GENERIC){
            return new $sound_class($pos, $id, $pitch);
        }
        
        return new $sound_class($pos, $pitch);
    }
}

