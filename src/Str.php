<?php

namespace Strings;

// Exo 1

class Str
{

    private $string;

    public static function on($string)
    {
        return new self($string);
    }

    public function __construct($string)
    {
        $this->string = $string;

    }

    public function replace($search, $replace)
    {
        $this->string = str_replace($search, $replace, $this->string);
        return $this;
    }

    public function __toString()
    {
        return $this->string;
    }

    public function ucwords()
    {
        $this->string = ucwords($this->string);
        return $this;
    }

    public function lcfirst()
    {
        $this->string = lcfirst($this->string);
        return $this;
    }

    // exo 2
    public function camelCase()
    {
        return $this
            ->replace('_', ' ')
            ->replace('-', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();

    }
    public function toString()
    {
        return $this->string;
    }

    //exo 3

    public function snakeCase()
    {
        return $this
            ->replace(' ', '_')
            ->replace('-','_')
            ->pregReplace('/(.)(?=[A-Z])/', '$1_')
            ->minuscule()
            ->replace('__', '_');

    }

    public function minuscule()
    {
       $this->string = mb_strtolower($this->string);
       return $this;
    }

    public function pregReplace($search, $replace) {
        $this->string = preg_replace($search, $replace, $this->string);
        return $this;
    }

    // exo4

    public function slugCase()
    {
        return $this
            ->replace(' ', '-')
            ->replace('_', '-')
            ->pregReplace('/(.)(?=[A-Z])/', '$1-')
            ->minuscule()
            ->replace('--', '-');
    }

    // exo 5
    public function studlyCase()
    {
        return $this
            ->replace()
    }




}
