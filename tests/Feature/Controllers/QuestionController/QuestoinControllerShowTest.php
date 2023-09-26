<?php

namespace Tests\Feature\QuestionController;

use Tests\TestCase;

class QuestoinControllerShowTest extends TestCase
{
    public function test_can__see_created_questions(): void
    {

        $route = route("questions.show", ["question" => 1]);
        $response = $this->getJson($route);

        $response->assertOk()->assertJson(["previousId" => null, "nextId" => 2]);
    }
}
