<?php

namespace App\Controllers\Admin;

use App\Models\Kategori_M;
use App\Controllers\BaseController;


class Kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "<h1>belajar ci4</h1>";
    }

    public function read()
    {

        $pager = \Config\Services::pager();

        $model = new Kategori_M();

        $data = [
            'judul' => 'DATA KATEGORI',
            'kategori' => $model->paginate(3,'group1'),
            'pager' => $model->pager
        ];
        
        return view ("kategori/select", $data);
        
    }

    // public function selectWhere($id = null)
    // {
    //     echo "<h1>menampilkan data yang dipilih $id</h1>";
    // }

    public function create()
    {
        
        return view ("kategori/insert");
        
    }

    public function insert()
    {
       
        $model = new Kategori_M();

        if ($model->insert($_POST)===false) {
            $error = $model->errors();
            echo $error['kategori'];
        } else {
            return redirect()->to(base_url("/admin/kategori"));
        }
    
    }

    public function find($id=null)
    {
        $model = new Kategori_M();
        $kategori = $model ->find($id);

        $data = [
            'judul' => 'UPDATE DATA',
            'kategori' => $kategori
        ];

        return view ("kategori/update", $data);
    }

    public function update()
    {
        $model = new Kategori_M();
        $model ->save($_POST);

        return redirect()->to(base_url("/admin/kategori"));
    }

    public function delete($id = null)
    {
        $model = new Kategori_M();

        $model -> delete ($id);

        return redirect()->to(base_url("/admin/kategori"));
    }
}
