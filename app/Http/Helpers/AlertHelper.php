<?php

namespace App\Http\Helpers;

use RealRashid\SweetAlert\Facades\Alert;


class AlertHelper
{

    public static function successInsert()
    {
        return Alert::success('Sucesso', 'Cadastro realizado com sucesso.');
    }

    public static function successEdit()
    {
        return Alert::success('Sucesso', 'Registro editado com sucesso.');
    }

    public static function error()
    {
        return Alert::error('Erro', 'Ocorreu algum erro no processo.');
    }
}
