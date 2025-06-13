<?php

namespace App\Controllers;

use App\Models\MedicineModel;

class Medicine extends BaseController
{
    public function index()
    {
        $model = new MedicineModel();
        $data['medicines'] = $model->findAll();
        return view('list', $data);
    }

    public function add()
    {
        return view('add');
    }

    public function save()
    {
        $model = new MedicineModel();
        $model->insert([
            'name' => $this->request->getPost('name'),
            'dosage' => $this->request->getPost('dosage'),
            'schedule' => $this->request->getPost('schedule'),
            'taken' => 0
        ]);

        return redirect()->to('/medicine');
    }

    public function view($id)
    {
        $model = new MedicineModel();
        $medicine = $model->find($id);
        return view('view', ['medicine' => $medicine]);
    }

    public function edit($id)
    {
        $model = new MedicineModel();
        $medicine = $model->find($id);
        return view('edit', ['medicine' => $medicine]);
    }

    public function update($id)
    {
        $model = new MedicineModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'dosage' => $this->request->getPost('dosage'),
            'schedule' => $this->request->getPost('schedule'),
        ]);

        return redirect()->to('/medicine');
    }

    public function delete($id)
    {
        $model = new MedicineModel();
        $model->delete($id);
        return redirect()->to('/medicine');
    }

    public function markTaken($id)
    {
        $model = new MedicineModel();
        $model->update($id, ['taken' => 1]);
        return redirect()->to('/medicine');
    }

    public function history()
    {
        $model = new MedicineModel();
        $data['medicines'] = $model->where('taken', 1)->findAll();
        return view('history', $data);
    }

    public function search()
    {
        $query = strtolower($this->request->getGet('q'));
        $model = new MedicineModel();

        if ($query) {
            $builder = $model->builder();
            $builder->like('LOWER(name)', $query)
                    ->orLike('LOWER(dosage)', $query)
                    ->orLike('LOWER(schedule)', $query);

            $results = $builder->get()->getResultArray();
        } else {
            $results = $model->findAll();
        }

        return view('list', ['medicines' => $results, 'search' => $query]);
    }
}
