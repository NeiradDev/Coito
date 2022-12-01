<?php

namespace App\Controllers;

class Provincia extends BaseController
{
    public function index()
    {
        echo ($this->A13);
    }

    public function list()
    {
        $provincias = model('Provincia');

        $data["provincias"] = $provincias->orderBy('NAME', 'ASC')->findAll();
        return view('provincia/list', $data);
    }

    public function add()
    {
        return view('provincia/add');
    }
    public function list1()
    {
        return view('provincia/list1');
    }
    public function contactanos()
    {
        return view('provincia/contactanos');
    }

    public function save()
    {
        $guardar = model('Provincia');

        if (!$this->validate([
            "NAME"          => 'required',
            "CAPITAL"       => 'required',
            "REGION"        => 'required',
            "DESCRIPTION"   => 'required',
        ])) {
            return redirect()->back()->with('msg', [
                "type" => "danger",
                "body" => "¡Los campos deben estar llenos!"
            ])->withInput();
        }

        if (!empty($_FILES['IMAGE']['tmp_name'])) {
            $tamaño = $_FILES['IMAGE']['size'];
            $imagenSubida = fopen($_FILES['IMAGE']['tmp_name'], 'r');
            $_POST["IMAGE"] = fread($imagenSubida, $tamaño);
        }

        if (!empty($_GET["ID"])) {
            if ($guardar->where('ID_PROVINCIA', $_GET["ID"])->first() > 1) $guardar->update($_GET['ID'], $_POST);
        } else {
            $guardar->insert($_POST);
        }

        return redirect()->back()->with('msg',[
            "type" => "info",
            "body" => "¡Datos Guardados!"
        ]);
    }

    public function edition()
    {
        $provincia = model('Provincia');

        $data["provincia"] = $provincia->where('ID_PROVINCIA', $_GET['ID'])->first();

        return view('provincia/edition', $data);
    }

    public function delete()
    {
        $delete = model ('Provincia');
        $delete->delete($_GET['ID']);

        return redirect('Provincia-listar')->with('msg', [
            "type" => "danger",
            "body" => "¡Provincia Eliminada!"
        ]);
    }
}