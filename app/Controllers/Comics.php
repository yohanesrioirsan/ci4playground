<?php

namespace App\Controllers;

use App\Models\ComicsModel;

class Comics extends BaseController
{
    protected $comicModel;

    public function __construct()
    {
        $this->comicModel = new ComicsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'All Comics Collection',
            'comic' => $this->comicModel->getComics()
        ];

        return view('/comics', $data);
    }

    public function detail($slug)
    {
        $comic =  $this->comicModel->getComics($slug);

        $data = [
            'title' => $comic['title'] . " Details",
            'comic' => $comic
        ];

        if (empty($data['comic'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Title ' . $comic['title'] . ' Not Found');
        }

        return view('detail', $data);
    }

    public function modal()
    {
        $slug = $this->request->getGet('slug');
        $comic =  $this->comicModel->getComics($slug);

        $data = [
            'title' => $comic['title'] . " Details",
            'comic' => $comic
        ];


        echo view('quickview', $data);
    }

    public function add()
    {
        return view('add');
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[comic.title]',
                'errors' => [
                    'required' => 'Title is needed! Cannot be empty.',
                    'is_unique' => 'Title cannot be the same with another.'
                ]
            ]
        ])) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }


        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->comicModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'writer' => $this->request->getVar('writer'),
            'author' => $this->request->getVar('author'),
            'synopsis' => $this->request->getVar('synopsis'),
            'cover' => $this->request->getVar('cover')
        ]);


        session()->setFlashdata('Message', 'Data Added!');

        return redirect()->to('/comics');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit ' . $slug . ' details.',
            'validation' => \Config\Services::validation(),
            'comic' => $this->comicModel->getComics($slug)
        ];

        return view('edit', $data);
    }

    public function update($id)
    {
        $oldData = $this->comicModel->getComics($this->request->getVar('slug'));

        if ($oldData['title'] == $this->request->getVar('title')) {
            $setNewRules = 'required';
        } else {
            $setNewRules = 'required|is_unique[comic.title]';
        }

        if (!$this->validate([
            'title' => [
                'rules' => $setNewRules,
                'errors' => [
                    'required' => 'Title is needed! Cannot be empty.',
                    'is_unique' => 'Title cannot be the same with another.'
                ]
            ]
        ])) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->comicModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'writer' => $this->request->getVar('writer'),
            'author' => $this->request->getVar('author'),
            'synopsis' => $this->request->getVar('synopsis'),
            'cover' => $this->request->getVar('cover')
        ]);

        session()->setFlashdata('Message', 'Data Changed!');

        return redirect()->to('/comics');
    }

    public function delete($slug)
    {
        $data = [
            'comic' => $this->comicModel->getComics($slug)
        ];
        return view('delete', $data);
    }

    public function DeleteComics($slug)
    {
        $this->comicModel->deletes($slug);
    }
}
