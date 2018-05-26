# SoundModuleAPI

### このAPIの使い方＆使用例
#### use文の追加
```php
use mazaicrafty\sm\SoundModuleAPI;
use mazaicrafty\sm\Sound;
```

#### サウンドの定数
```php
class Sound{
    const ANVIL_BREAK = 1;
    const ANVIL_FALL = 2;
    const ANVIL_USE = 3;
    const BAT = 4;
    const BLAZESHOOT = 5;
    const CLICK = 6;
    const DOOR_BUMP = 7;
    const DOOR_CRASH = 8;
    const DOOR = 9;
    const ENDERMAN_TELEPORT = 10;
    const FIZZ = 11;
    const GHAST_SHOOT = 12;
    const GHAST = 13;
    const LAUNCH = 14;
    const POP = 15;
    const GENERIC = 16;
}
```

#### 使用例
プレイヤーの座標に金床が壊れた音を流す
```php
$sound = SoundModuleAPI::createSoundToPlayer(Sound::ANVIL_BREAK, $player);
$level->addSound($sound);
```

114X、514Y、1919Zの座標に金床が壊れた音を流す
```php
$pos = new Vector3(114, 514, 1919);
$sound = SoundModuleAPI::createSound(Sound::ANVIL_BREAK, $pos);
$level->addSound($sound);
```

#### 関数の仕様
```php
SoundModuleAPI::createSound(/*Sound ID*/, /*Vector3*/, /*Pitch*/, /*ID(Only GenericSound*/);
SoundModuleAPI::createSoundToPlayer(/*Sound ID*/, /*Player Object*/, /*Pitch*/, /*ID(GeneticSound)*/);
```

#### サウンド一覧
- AnvilBreakSound (ID: 1, Sound::ANVIL_BREAK)
金床が壊れる際に発生する音

- AnvilFallSound (ID: 2, Sound::ANVIL_FALL)
金床で使用に失敗した際に発生する音

- AnvilUseSound (ID: 3, Sound::ANVIL_USE)
金床を使用した際に発生する音

- BatSound (ID: 4, Sound::BAT)
コウモリの羽ばたく際に発生する音

- BlazeShootSound (ID: 5, Sound::BLAZE_SHOOT)
ブレイズが炎を発射した際に発生する音

- ClickSound (ID: 6, Sound::CLICK)
ボタンをクリックする際に発生する音

- DoorBumpSound (ID: 7, Sound::DOOR_BUMP)
ドアに当たる際に発生する音

- DoorCrashSound (ID: 8, Sound::DOOR_CRASH)
ドアが壊れる際に発生する音

- DoorSound (ID: 9, Sound::DOOR)
ドアを開閉する際に発生する音

- EndermanTeleportSound (ID: 10, Sound::ENDERMAN_TELEPORT)
エンダーマンがテレポートする際に発生する音

- FizzSound (ID: 11, Sound::FIZZ)
火を消す際に発生する音

- GhastShootSound (ID: 12, Sound::GHAST_SHOOT)
ガストが炎を発射する際に発生する音

- GhastSound (ID: 13, Sound::GHAST)
ガストの鳴き声。キモイ。

- LaunchSound (ID: 14, Sound::LAUNCH)
矢が発射する際に発生する音

- PopSound (ID: 15, Sound::POP)
アイテムのドロップ音

- GenericSound (ID: 16, Sound::GENERIC)
ピッチを設定する奴。よくわからん。
