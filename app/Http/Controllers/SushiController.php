<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sushi;
use \App\SushiGroup;

class SushiController extends Controller
{
    //
    public function mainInfo() {
        return view('mainInfo');
    }
    
    public function delivery(){
        return view('delivery');
    }
    
    public function contacts(){
        return view('contacts');
    }
    
    public function actions(){
        return view('actions');
    }
    

    public function getSushi()
    {
        $sushiId = $_GET['id'];
        return view('sushiInfo', ['sushi'=>$sushiId]);
    }
    
    public function getAllSushi(){
        $allSushi = Sushi::all();
        return view('menu', ['sushis'=>$allSushi]);
    }
    
    public function getSushiInGroup(){
        $groupId = $_GET('group');
        $allSushiInGroup = Sushi::all()->where('groupId', '=', $groupId)->get();
        return view('menu', ['sushis'=>$allSushi]);
    }
    
    public function check(){
        $email = $_GET['email'];
        if (!preg_match( '/^[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,4}$/i', $email)) { 
            echo 'Некорректный email'; 
        } 
        else
        { 
            echo 'Письмо отправлено'; 
        } 

    }
}
