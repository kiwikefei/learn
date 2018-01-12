<?php
interface RepositoryInterface
{
    public function getAll() : array;
}
class Foo{
    public function __construct()
    {
        var_dump('i am instantiated.');
    }
}
class FileRepository implements RepositoryInterface
{

    public function getAll():array
    {
//        return new Foo();
        return [];
    }
}

(new FileRepository())->getAll();