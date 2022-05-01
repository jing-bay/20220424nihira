<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HelloTest extends TestCase
{
    public function testHello()
    {
        User::factory()->create([
            'content'=>'aaa',
            'created_at'=>'2121-22-22',
            'updated_at'=>'2121-22-22'
        ]);
        $this->assertDatabaseHas('users',[
            'content'=>'aaa',
            'created_at'=>'2121-22-22',
            'updated_at'=>'2121-22-22'
        ]);
    } 
}
