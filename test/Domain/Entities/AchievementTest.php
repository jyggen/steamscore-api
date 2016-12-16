<?php

declare(strict_types=1);

/*
 * This file is part of SteamScore.
 *
 * (c) SteamScore <code@steamscore.info>
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

namespace SteamScore\Api\Tests\Domain\Entities;

use Ramsey\Uuid\UuidInterface;
use SteamScore\Api\Domain\Entities\Achievement;
use SteamScore\Api\Domain\Entities\Game;
use SteamScore\Api\Tests\AbstractTestCase;

/**
 * @covers \SteamScore\Api\Domain\Entities\Achievement
 */
class AchievementTest extends AbstractTestCase
{
    /**
     * Tests that `getGame()` returns a game.
     */
    public function testGetGame()
    {
        $achievement = new Achievement(new Game());

        $this->assertInstanceOf(Game::class, $achievement->getGame());
    }

    /**
     * Tests that `getId()` returns a UUID.
     */
    public function testGetId()
    {
        $achievement = new Achievement(new Game());

        $this->assertInstanceOf(UuidInterface::class, $achievement->getId());
    }
}
