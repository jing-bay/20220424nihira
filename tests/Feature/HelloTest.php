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
            'created_at'=>'2222-22-22 00:00:00',
            'updated_at'=>'2222-22-22 00:00:00'
        ]);
        $this->assertDatabaseHas('todos',[
            'content'=>'aaa',
            'created_at'=>'2222-22-22 00:00:00',
            'updated_at'=>'2222-22-22 00:00:00'
        ]);
    }
}