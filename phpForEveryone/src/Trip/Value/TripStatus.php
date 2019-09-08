<?php declare(strict_types=1);

namespace PhpForEveryone\Trip\Value;

final class TripStatus extends Enum
{
    // See also https://huber-japan.com/ja/help/751
    const UNDER_CONSTRUCTION = 1; // 調整中
    const REQUEST = 2; // ツアー予約リクエスト中
    const CANCELED = 3;
    const BOOKED = 4; // ツアーの予約が成立　
}
