<?php

namespace Tests\Feature;

use Tests\FeatureTestCase;

class ExampleTest extends FeatureTestCase
{

    function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
