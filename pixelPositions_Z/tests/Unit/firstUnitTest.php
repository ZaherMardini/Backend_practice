<?php

namespace Tests\Unit;

use App\Models\Job;
use App\Models\Tag;
use PHPUnit\Framework\TestCase;

class firstUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $job = Job::factory()->create();
        Tag::factory()->create();
        $result = $job->Tags()->first();
        // $this->assert($result);
        dd($result);
    }
}
