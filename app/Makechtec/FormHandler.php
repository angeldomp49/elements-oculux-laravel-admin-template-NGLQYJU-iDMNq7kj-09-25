<?php 
namespace App\Makechtec;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FormHandler{
    public function postHandler(Request $request, String $methodName){
        return $this->findMethod($request, $methodName);
    }

    public function findMethod($request, $methodName){
        $methods = $this->formHandlers();
        if(!array_key_exists( $methodName, $methods )){
            $this->notAllowed();
        }

        return $methods[$methodName]($request);
    }

    public function notAllowed(){
        abort(401);
    }

    public function formHandlers(){
        return [
            'form1' => function( $request ){

            }
        ];
    }
}