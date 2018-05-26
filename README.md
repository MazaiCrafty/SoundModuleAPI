# SoundModuleAPI

### このAPIの使い方＆使用例
#### use文の追加
```php
use mazaicrafty\sm\SoundModuleAPI;
```

#### サウンドのインスタンスを生成
```php
// Vector3 $pos
$sound = SoundModuleAPI::createSound(/*'サウンドの名前'*/, $pos);
```

#### 使用例
プレイヤーの座標に金床が壊れた音を流す
```php
$level = $player->getLevel();
$pos = new Vector3($player->getX(), $player->getY(), $player->getZ());
$sound = SoundModuleAPI::createSound('AnvilBreakSound', $pos);
$level->addSound($sound);
```

#### 関数の仕様
```php
SoundModuleAPI::createSound(/*サウンドの名前*/, /*ポジション*/, /*ピッチ(なくてもええで)*/, /*ID(なくてもええで)*/);
```

#### サウンド一覧
- AnvilBreakSound
金床が壊れる際に発生する音

- AnvilFallSound
金床で使用に失敗した際に発生する音

- AnvilUseSound
金床を使用した際に発生する音

- BatSound
コウモリの羽ばたく際に発生する音

- BlazeShootSound
ブレイズが炎を発射した際に発生する音

- ClickSound
ボタンをクリックする際に発生する音

- DoorBumpSound
ドアに当たる際に発生する音

- DoorCrashSound
ドアが壊れる際に発生する音

- DoorSound
ドアを開閉する際に発生する音

- EndermanTeleportSound
エンダーマンがテレポートする際に発生する音

- FizzSound
火を消す際に発生する音

- GhastShootSound
ガストが炎を発射する際に発生する音

- GhastSound
ガストの鳴き声。キモイ。

- LaunchSound
矢が発射する際に発生する音

- PopSound
アイテムのドロップ音

- GenericSound
ピッチを設定する奴。よくわからん。
