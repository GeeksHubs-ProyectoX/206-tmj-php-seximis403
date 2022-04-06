<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Matcher\Matcher;

class Test01Test extends TestCase
{
    public function test1()
    {
        $input = "foo:poo:buu:puu";
        $result = (new Matcher())->apply01($input);
        $this->assertEquals($result[0], "foo");
        $this->assertEquals($result[1], "poo");
        $this->assertEquals($result[2], "buu");
        $this->assertEquals($result[3], "puu");
    }

    public function test2()
    {
        $input = 123457;
        $result = (new Matcher())->apply02($input);
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply03("hello world");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply03("hello world 123");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply03("hello world");
        $this->assertEquals($result, true);
    }

    public function test3()
    {
        $input = "hello world";

        $result = (new Matcher())->apply03($input);
        $this->assertEquals($result, true);

        $result = strtoupper($input);
        $result = (new Matcher())->apply03($result);
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply03("12345");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply03("Hello World");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply03("geekshubs");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply03("academy");
        $this->assertEquals($result, true);
    }

    public function test4()
    {
        $result = (new Matcher())->apply04("HELLO WORLD");
        $this->assertEquals($result, true);
    }

    public function test41()
    {
        $result = (new Matcher())->apply04("12345");
        $this->assertEquals($result, false);
    }

    public function test42()
    {
        $result = (new Matcher())->apply04("Hello World");
        $this->assertEquals($result, true);
    }

    public function test43()
    {
        $result = (new Matcher())->apply04("geekshubs");
        $this->assertEquals($result, false);
    }

    public function test44()
    {
        $result = (new Matcher())->apply04("academy");
        $this->assertEquals($result, false);
    }

    public function test5()
    {
        $input = "hello world";

        $result = (new Matcher())->apply05($input);
        $this->assertEquals($result, true);

        $result = strtoupper($input);
        $result = (new Matcher())->apply05($result);
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply05("12345");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply05("Hello World");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply05("geekshubs");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply05("academy");
        $this->assertEquals($result, true);

        $input = "HELLO WORLD";
        $result = (new Matcher())->apply05($input);
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply05("12345");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply05("Hello World");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply05("geekshubs");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply05("academy");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply05(123);
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply05(5678);
        $this->assertEquals($result, false);
    }

    public function test6()
    {
        $input = 123457;
        $result = (new Matcher())->apply06($input);
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply06("hello world");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply06("hello world 123");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply06("hello world");
        $this->assertEquals($result, false);
    }

    public function test7()
    {

        $result = (new Matcher())->apply07("hello world ");
        $this->assertEquals($result, true);
    }

    public function test71()
    {
        $result = (new Matcher())->apply07("hello world");
        $this->assertEquals($result, true);
    }

    public function test73()
    {

        $result = (new Matcher())->apply07("Hello World");
        $this->assertEquals($result, true);
    }

    public function test74()
    {
        $result = (new Matcher())->apply07("geekshubs ");
        $this->assertEquals($result, true);
    }

    public function test75()
    {
        $result = (new Matcher())->apply07("academy ");
        $this->assertEquals($result, true);
    }


    public function test9()
    {
        $result = (new Matcher())->apply09("20200102");
        $this->assertEquals($result, false);
    }

    public function test99()
    {
        $result = (new Matcher())->apply09("01-02-2222");
        $this->assertEquals($result, true);
    }

    public function test98()
    {
        $result = (new Matcher())->apply09("010-02-2222");
        $this->assertEquals($result, false);
    }


    public function test97()
    {
        $result = (new Matcher())->apply09("00-022-2222");
        $this->assertEquals($result, false);
    }

    public function test96()
    {
        $result = (new Matcher())->apply09("05-02-222");
        $this->assertEquals($result, false);
    }

    public function test95()
    {
        $result = (new Matcher())->apply09("05-02-22");
        $this->assertEquals($result, false);
    }

    public function test94()
    {
        $result = (new Matcher())->apply09("05-02-2");
        $this->assertEquals($result, false);
    }

    public function test93()
    {
        $result = (new Matcher())->apply09("5-02-22");
        $this->assertEquals($result, false);

    }

    public function test92()
    {
        $result = (new Matcher())->apply09("5-0-2");
        $this->assertEquals($result, false);
    }

    public function test91()
    {
        $result = (new Matcher())->apply09("30-02-2222");
        $this->assertEquals($result, true);
    }

    public function test10()
    {
        $result = (new Matcher())->apply10("test.pptx");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply10("test.doc");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply10("test.word");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply10("testgmailcom");
        $this->assertEquals($result, false);
    }

    public function test11()
    {
        $result = (new Matcher())->apply11("test@gmail.com");
        $this->assertEquals($result, true);

        $result = (new Matcher())->apply11("testgmail.com");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply11("test@gmailcom");
        $this->assertEquals($result, false);

        $result = (new Matcher())->apply11("testgmailcom");
        $this->assertEquals($result, false);
    }

}


