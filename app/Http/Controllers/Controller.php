<?php

namespace App\Http\Controllers;

use App\Models\DfComodo;
use App\Models\DfItem;
use App\Models\DfItemTipo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function ImportaComodos(){

        $file_csv = "data/Vistoria/item_tipo.csv";

        $row = 0;
        $saves = 0;
        $header = true;

        if (($handle = fopen($file_csv, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $row++;
                if (!$header) {
                    $model = new DfItemTipo();
                    $model->descricao = $data[1];
                    $model->save();
                }
                $header = false;
            }
        }


    }


}
