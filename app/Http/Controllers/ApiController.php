<?php

namespace App\Http\Controllers;

use App\Models\DfComodo;
use App\Models\DfItem;
use App\Models\DfItemTipo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function df_comodos()
    {
        $model = DfComodo::paginate(150);
        return $model;
    }

    public function df_itens()
    {
        $model = DfItem::paginate(150);
        return $model;
    }

    public function df_itens_tipo()
    {
        $model = DfItemTipo::paginate(150);
        return $model;
    }

    public function add_df_comodo(Request $request)
    {

        if (!isset($request->nome)) {
            return response('O campo name nao foi encontrado na requisicao', 500);
        }

        if (strlen($request->nome) > 120) {
            return response('O campo name deve ter no maximo 120 caracteres', 500);
        }

        if (DfComodo::where('nome', $request->nome)->count() > 0) {
            return response('ja existe um comodo com esse nome', 500);
        }

        $model = new DfComodo();
        $model->nome = $request->nome;
        $s = $model->save();

        if ($s) {
            return response(['Comodo cadastrado com sucesso', $model], 200);
        }

        return response('nenhum registro foi processado', 500);
    }


    public function add_vistoria(Request $request){
        return $request->all();
    }
}
