<?php

namespace Tests\Unit;

use App\Helpers\UrlHelper;
use PHPUnit\Framework\TestCase;

class UrlHelperTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExtractLinksFromString()
    {
        $urlHelper = new UrlHelper();

        // UseCase-1: our function should return blank array when blank string is given
        $this->assertEmpty($urlHelper->extractLinksFromString(''));
    }
}