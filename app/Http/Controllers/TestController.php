<?php

namespace App\Http\Controllers;

class TestController extends Controller
{

    private $employees;

    public function __construct()
    {
        $this->employees = [
            1 => [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            2 => [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            3 => [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            4 => [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            5 => [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];
    }

    public function show() // получаем переданный параметр
    {
        return view('test.show', ['name' => $this->employees, 'surname' => 'efef']);
    }
    public function showOne($id)
    {
        $user=$this->employees[$id];
        print_r($user);
    }
    public function showField($id, $val)
    {
        $user=$this->employees[$id][$val];
        echo $val .' = ' . $user;
    }
}

