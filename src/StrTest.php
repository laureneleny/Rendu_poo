<?php

namespace Strings;


use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function testExo1()
    {
        $string = (string) Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();
        $this->assertSame('myString',$string);

    }

    public function testExo2()
    {
        $this->assertSame('myString', Str::on('my_string')->camelCase()->toString()); // true
        $this->assertSame('myString', Str::on('myString')->camelCase()->toString()); // true
        $this->assertSame('myString', Str::on('my-string')->camelCase()->toString()); // true
        $this->assertSame('myString', Str::on('my string')->camelCase()->toString() ); // true
        $this->assertSame('myString', Str::on('My String')->camelCase()->toString() ); // true

    }

    public function testExo3()
    {
        $this->assertSame('my_string', Str::on('my_string')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('myString')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('my-string')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('my string')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('My String')->snakeCase()->toString()); // true

    }

    public function testExo4()
    {
        $this->assertSame('my-string', Str::on('my_string')->slugCase()->toString()); // true
        $this->assertSame('my-string', Str::on('myString')->slugCase()->toString()); // true
        $this->assertSame('my-string', Str::on('my-string')->slugCase()->toString()); // true
        $this->assertSame('my-string', Str::on('my string')->slugCase()->toString()); // true
        $this->assertSame('my-string', Str::on('My String')->slugCase()->toString()); // true
    }

    public function testExo5()
    {

        $this->assertSame('MyString', Str::on('my_string')->studlyCase()->toString()); // true
        $this->assertSame('MyString', Str::on('myString')->studlyCase()->toString()); // true
        $this->assertSame('MyString', Str::on('my-string')->studlyCase()->toString()); // true
        $this->assertSame('MyString', Str::on('my string')->studlyCase()->toString()); // true
        $this->assertSame('MyString', Str::on('My String')->studlyCase()->toString()); // true
    }


}
?>