<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;
    
    protected $thread;

    public function setUp(){
        
        parent::setUp();

        $this->thread = create('App\Thread');
    }

    /** @test */

    public function a_thread_has_replies()
    {
  
            
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',
            $this->thread->replies);    
    
    }

    /** @test */

    public function a_thread_has_a_creator()
    {
 
        $this->assertInstanceOf('App\User', $this->thread->creator);    
    
    }

     /** @test */

     public function a_thread_can_add_app_reply()
     {
     
         $this->thread->addReply([
             'body' => 'Foobar',
             'id' => 3
        ]);

        $this->assertCount(0, $this->thread->replies); 
     }
}
