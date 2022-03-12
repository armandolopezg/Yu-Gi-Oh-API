<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cartas;

class api_controller extends Controller
{
    public function inicio(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $cartas = [];
        $carta= 0;

        foreach ($datos['data'] as $carta){
            
            $cartas[]= [
                'id'=>$carta['id'],
                'nombre'=>$carta['name'],
                'categoria'=>$carta['type'],
                'imagen'=>$carta['card_images']['0']['image_url'],
                'descripcion'=>$carta['desc']
            ];
            
        }

        return view('index',['cartas'=>$cartas]);
    }




    public function monster(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Normal Monster');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $monsters = [];

        foreach ($datos['data'] as $monster){
            $monsters[]= [
                'nombre'=>$monster['name'],
                'categoria'=>$monster['type'],
                'imagen'=>$monster['card_images']['0']['image_url'],
                'descripcion'=>$monster['desc']
            ];
        }

        return view('monster',['monsters'=>$monsters]);
    }


    public function monsterEF(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Effect Monster');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $monstersEF = [];

        foreach ($datos['data'] as $monsterEF){
            $monstersEF[]= [
                'nombre'=>$monsterEF['name'],
                'categoria'=>$monsterEF['type'],
                'imagen'=>$monsterEF['card_images']['0']['image_url'],
                'descripcion'=>$monsterEF['desc']
            ];
        }

        return view('monsterEF',['monstersEF'=>$monstersEF]);
    }


    public function monsterF(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Fusion Monster');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $monstersF = [];

        foreach ($datos['data'] as $monsterF){
            $monstersF[]= [
                'nombre'=>$monsterF['name'],
                'categoria'=>$monsterF['type'],
                'imagen'=>$monsterF['card_images']['0']['image_url'],
                'descripcion'=>$monsterF['desc']
            ];
        }

        return view('monsterF',['monstersF'=>$monstersF]);
    }


    
    public function monsterS(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Synchro Monster');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $monstersS = [];

        foreach ($datos['data'] as $monsterS){
            $monstersS[]= [
                'nombre'=>$monsterS['name'],
                'categoria'=>$monsterS['type'],
                'imagen'=>$monsterS['card_images']['0']['image_url'],
                'descripcion'=>$monsterS['desc']
            ];
        }

        return view('monsterS',['monstersS'=>$monstersS]);
    }


    public function monsterXYZ(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=XYZ Monster');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $monstersXYZ = [];

        foreach ($datos['data'] as $monsterXYZ){
            $monstersXYZ[]= [
                'nombre'=>$monsterXYZ['name'],
                'categoria'=>$monsterXYZ['type'],
                'imagen'=>$monsterXYZ['card_images']['0']['image_url'],
                'descripcion'=>$monsterXYZ['desc']
            ];
        }

        return view('monsterXYZ',['monstersXYZ'=>$monstersXYZ]);
    }

    public function monsterPENDULUM(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Pendulum Effect Monster');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $monstersPENDULUM = [];

        foreach ($datos['data'] as $monsterPENDULUM){
            $monstersPENDULUM[]= [
                'nombre'=>$monsterPENDULUM['name'],
                'categoria'=>$monsterPENDULUM['type'],
                'imagen'=>$monsterPENDULUM['card_images']['0']['image_url'],
                'descripcion'=>$monsterPENDULUM['desc']
            ];
        }

        return view('monsterPENDULUM',['monstersPENDULUM'=>$monstersPENDULUM]);
    }


    public function monsterLINK(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Link Monster');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $monstersLINK = [];

        foreach ($datos['data'] as $monsterLINK){
            $monstersLINK[]= [
                'nombre'=>$monsterLINK['name'],
                'categoria'=>$monsterLINK['type'],
                'imagen'=>$monsterLINK['card_images']['0']['image_url'],
                'descripcion'=>$monsterLINK['desc']
            ];
        }

        return view('monsterLINK',['monstersLINK'=>$monstersLINK]);
    }


    public function spell(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Spell Card');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $spells = [];

        foreach ($datos['data'] as $spell){
            $spells[]= [
                'nombre'=>$spell['name'],
                'categoria'=>$spell['type'],
                'imagen'=>$spell['card_images']['0']['image_url'],
                'descripcion'=>$spell['desc']
            ];
        }

        return view('spell',['spells'=>$spells]);
    }


    public function spellNormal(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=normal');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $spellsNormal = [];

        foreach ($datos['data'] as $spellNormal){
            $spellsNormal[]= [
                'nombre'=>$spellNormal['name'],
                'categoria'=>$spellNormal['type'],
                'imagen'=>$spellNormal['card_images']['0']['image_url'],
                'descripcion'=>$spellNormal['desc']
            ];
        }

        return view('spellNormal',['spellsNormal'=>$spellsNormal]);
    }


    
    public function spellEquip(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=equip');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $spellsEquip = [];

        foreach ($datos['data'] as $spellEquip){
            $spellsEquip[]= [
                'nombre'=>$spellEquip['name'],
                'categoria'=>$spellEquip['type'],
                'imagen'=>$spellEquip['card_images']['0']['image_url'],
                'descripcion'=>$spellEquip['desc']
            ];
        }

        return view('spellEquip',['spellsEquip'=>$spellsEquip]);
    }



    public function spellRitual(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=ritual');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $spellsRitual = [];

        foreach ($datos['data'] as $spellRitual){
            $spellsRitual[]= [
                'nombre'=>$spellRitual['name'],
                'categoria'=>$spellRitual['type'],
                'imagen'=>$spellRitual['card_images']['0']['image_url'],
                'descripcion'=>$spellRitual['desc']
            ];
        }

        return view('spellRitual',['spellsRitual'=>$spellsRitual]);
    }


    public function spellContinuous(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=continuous');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $spellsContinuous = [];

        foreach ($datos['data'] as $spellContinuous){
            $spellsContinuous[]= [
                'nombre'=>$spellContinuous['name'],
                'categoria'=>$spellContinuous['type'],
                'imagen'=>$spellContinuous['card_images']['0']['image_url'],
                'descripcion'=>$spellContinuous['desc']
            ];
        }

        return view('spellContinuous',['spellsContinuous'=>$spellsContinuous]);
    }

    public function spellField(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=field');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $spellsField = [];

        foreach ($datos['data'] as $spellField){
            $spellsField[]= [
                'nombre'=>$spellField['name'],
                'categoria'=>$spellField['type'],
                'imagen'=>$spellField['card_images']['0']['image_url'],
                'descripcion'=>$spellField['desc']
            ];
        }

        return view('spellField',['spellsField'=>$spellsField]);
    }


    public function spellQuickPlay(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=field');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $spellsQuickPlay = [];

        foreach ($datos['data'] as $spellQuickPlay){
            $spellsQuickPlay[]= [
                'nombre'=>$spellQuickPlay['name'],
                'categoria'=>$spellQuickPlay['type'],
                'imagen'=>$spellQuickPlay['card_images']['0']['image_url'],
                'descripcion'=>$spellQuickPlay['desc']
            ];
        }

        return view('spellQuickPlay',['spellsQuickPlay'=>$spellsQuickPlay]);
    }


    public function trap(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=Trap Card');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $traps = [];

        foreach ($datos['data'] as $trap){
            $traps[]= [
                'nombre'=>$trap['name'],
                'categoria'=>$trap['type'],
                'imagen'=>$trap['card_images']['0']['image_url'],
                'descripcion'=>$trap['desc']
            ];
        }

        return view('trap',['traps'=>$traps]);
    }


    public function trapNormal(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=Normal');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $trapsNormal = [];

        foreach ($datos['data'] as $trapNormal){
            $trapsNormal[]= [
                'nombre'=>$trapNormal['name'],
                'categoria'=>$trapNormal['type'],
                'imagen'=>$trapNormal['card_images']['0']['image_url'],
                'descripcion'=>$trapNormal['desc']
            ];
        }

        return view('trapNormal',['trapsNormal'=>$trapsNormal]);
    }


    public function trapContinuous(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=Continuous');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $trapsContinuous = [];

        foreach ($datos['data'] as $trapContinuous){
            $trapsContinuous[]= [
                'nombre'=>$trapContinuous['name'],
                'categoria'=>$trapContinuous['type'],
                'imagen'=>$trapContinuous['card_images']['0']['image_url'],
                'descripcion'=>$trapContinuous['desc']
            ];
        }

        return view('trapContinuous',['trapsContinuous'=>$trapsContinuous]);
    }

    public function trapCounter(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=Counter');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $trapsCounter = [];

        foreach ($datos['data'] as $trapCounter){
            $trapsCounter[]= [
                'nombre'=>$trapCounter['name'],
                'categoria'=>$trapCounter['type'],
                'imagen'=>$trapCounter['card_images']['0']['image_url'],
                'descripcion'=>$trapCounter['desc']
            ];
        }

        return view('trapCounter',['trapsCounter'=>$trapsCounter]);
    }


    public function detallecarta($name){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php?name='.$name);
        $data = json_decode($response->getBody()->getContents(), true);
        $cards=[];
        foreach($data['data'] as $card){
            $cards[]=[
                'nombre' => $card['name'],
                'imagen'=>$card['card_images']['0']['image_url'],
            ];
        }

        return view('cards',['cards'=>$cards]);
    }



    public function bebidas(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://bebidasapi.herokuapp.com/api/bebidas');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $bebidas = [];

        foreach ($datos['bebidas'] as $bebida){
            $bebidas[]= [
                'nombre'=>$bebida['idbebida'],
                'categoria'=>$bebida['nombre'],
                'imagen'=>$bebida['imagen'],
                
                
            ];
        }

        return view('bebidas',['bebidas'=>$bebidas]);











    }


    public function basedatos(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','https://db.ygoprodeck.com/api/v7/cardinfo.php');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $carta= 0;

        foreach ($datos['data'] as $carta){
            $nuevacarta=new Cartas;
            if($carta>10){



        
            $nuevacarta->idcarta=$carta['id'];
            $nuevacarta->nombre=$carta['name'];
            $nuevacarta->tipo=$carta['type'];
            $nuevacarta->descripcion=$carta['desc'];
            $nuevacarta->imagen=$carta['card_images']['0']['image_url'];
            

            $nuevacarta->save();

            $carta++;
            
            }
            
        }

        return view('index',['cartas'=>$cartas]);
    }

    public function api () {
        
            $cartas = Cartas::all();
            return response()->json(['cartas'=>$cartas]);
            
    }


    public function cartasApi ($parametro) {
        $variable=$parametro;
        $cartas = Cartas::find($variable);
        return response()->json(['cartas'=>$cartas]);
        
}
    
}
