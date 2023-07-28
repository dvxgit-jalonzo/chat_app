<?php

abstract class Crud
{
    use Database;
    abstract function Select();
    abstract function Create($array);
    abstract function Edit($array, $id);
    abstract function Delete($id);
}