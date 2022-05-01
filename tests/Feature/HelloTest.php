<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Todo;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    public function testHello()
    {
        Todo::factory()->create([
            'content'=>'aaa',
        ]);
        $this->assertDatabaseHas('todos',[
            'content'=>'aaa',
        ]);
    }
}