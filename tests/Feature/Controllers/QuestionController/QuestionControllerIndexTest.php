<?php

namespace Tests\Feature\QuestionController;

use Tests\TestCase;

class QuestionControllerIndexTest extends TestCase
{
    public function test_can_fetch_the_question_list(): void
    {
        $route = route("sections.questions.index", ["section" => 1]);
        $response = $this->getJson($route);

        $response->assertOk()->assertJsonCount(2, "data")->assertJsonStructure([
            "data" => [
                "*" => ["id", "section_id", "content", "theme", "created_at", "updated_at"],
            ],
        ]);
    }
}
