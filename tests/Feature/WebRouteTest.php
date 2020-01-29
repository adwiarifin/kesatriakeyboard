<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebRouteTest extends TestCase
{
    /**
     * See index root
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * See blog list
     *
     * @return void
     */
    public function testBlogList()
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
    }

    /**
     * See blog single
     *
     * @return void
     */
    public function testBlogSingle()
    {
        $response = $this->get('/blog/lorem-ipsum');
        $response->assertStatus(200);
    }

    /**
     * See work list
     *
     * @return void
     */
    public function testPortfolioList()
    {
        $response = $this->get('/portfolio');
        $response->assertStatus(200);
    }

    /**
     * See work single
     *
     * @return void
     */
    public function testPortfolioSingle()
    {
        $response = $this->get('/portfolio/lorem-ipsum');
        $response->assertStatus(200);
    }
}
