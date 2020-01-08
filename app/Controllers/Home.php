<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index($page = 'TodoApp')
    {
        if (!is_file(APPPATH . '/Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $userModel = new UserModel($db);
        $users = $userModel->find([1, 2]);
        $users = array('users' => $users);
        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('templates/header', $data);
        echo view('/' . $page, [$users, $data]);
        echo view('templates/footer', $data);
    }

    //--------------------------------------------------------------------

}
