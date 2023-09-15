<?php

namespace Tests\Feature\SectionController;

use Tests\TestCase;

class SectionControllerIndexTest extends TestCase
{
    public function test_can_fetch_the_section_list(): void
    {
        $route = route("sections.index");

        $response = $this->getJson($route);

        $response->assertOk()->assertJsonCount(2, "sections")->assertJsonStructure([
            "sections" => [
                "*" => ["id", "title", "created_at", "updated_at"],
            ],
        ]);
    }
}
