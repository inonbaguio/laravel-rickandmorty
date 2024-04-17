<?php

namespace Tests\Unit;

use Modules\RickAndMorty\src\Api\Character;
use Modules\RickAndMorty\src\Enums\Status;
use Modules\RickAndMorty\src\Exceptions\NotFoundException;
use Tests\TestCase;

class CharacterTest extends TestCase
{
    public function test_it_can_list_all_characters(): void
    {
        try {
            $characters = (new Character())
                ->get();
        } catch (NotFoundException) {
            $characters = null;
        }

        $this->assertIsObject($characters);
        $this->assertNull($characters->info->prev);
        $this->assertEquals('Earth (C-137)', $characters->results[0]->origin->name);
    }


    public function test_it_can_list_all_characters_on_second_page()
    {
        try {
            $characters = (new Character())
                ->page(2)
                ->get();
        } catch (NotFoundException) {
            $characters = null;
        }

        $this->assertIsObject($characters);
        $this->assertNotNull($characters->info->prev);
        $this->assertEquals('Fish-Person', $characters->results[0]->type);
    }


    public function test_it_cannot_show_a_nonexistent_character_page()
    {
        $this->expectException(NotFoundException::class);

        $characters = (new Character())
            ->page(999)
            ->get();

        $this->assertIsNotObject($characters);
    }

    public function it_can_filter_out_all_alive_ricks()
    {
        try {
            $aliveRicks = (new Character())
                ->withName('Rick')
                ->withStatus(Status::Alive)
                ->get();
        } catch (NotFoundException) {
            $aliveRicks = null;
        }

        $this->assertIsObject($aliveRicks);
        $this->assertIsArray($aliveRicks->results);
        $this->assertEquals('Rick Sanchez',$aliveRicks->results[0]->name);
    }

}
