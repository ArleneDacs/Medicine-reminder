<?php

namespace App\Controllers;

class Medicine extends BaseController
{
    public function index()
    {
        $session = session();
        $data['medicines'] = $session->get('medicines') ?? [];
        return view('list', $data);
    }

    public function add()
    {
        return view('add');
    }

    public function save()
    {
        $session = session();
        $medicines = $session->get('medicines') ?? [];

        $newMedicine = [
            'id' => uniqid(),
            'name' => $this->request->getPost('name'),
            'dosage' => $this->request->getPost('dosage'),
            'schedule' => $this->request->getPost('schedule'),
            'taken' => false
        ];

        $medicines[] = $newMedicine;
        $session->set('medicines', $medicines);

        return redirect()->to('/medicine');
    }

    public function view($id)
    {
        $medicines = session()->get('medicines') ?? [];
        $medicine = $this->findMedicine($medicines, $id);
        return view('view', ['medicine' => $medicine]);
    }

    public function edit($id)
    {
        $medicines = session()->get('medicines') ?? [];
        $medicine = $this->findMedicine($medicines, $id);
        return view('edit', ['medicine' => $medicine]);
    }

    public function update($id)
    {
        $session = session();
        $medicines = $session->get('medicines') ?? [];

        foreach ($medicines as &$m) {
            if ($m['id'] === $id) {
                $m['name'] = $this->request->getPost('name');
                $m['dosage'] = $this->request->getPost('dosage');
                $m['schedule'] = $this->request->getPost('schedule');
                break;
            }
        }

        $session->set('medicines', $medicines);
        return redirect()->to('/medicine');
    }

    public function delete($id)
    {
        $session = session();
        $medicines = $session->get('medicines') ?? [];

        $medicines = array_filter($medicines, fn($m) => $m['id'] !== $id);
        $session->set('medicines', $medicines);

        return redirect()->to('/medicine');
    }

    public function markTaken($id)
    {
        $session = session();
        $medicines = $session->get('medicines') ?? [];

        foreach ($medicines as &$m) {
            if ($m['id'] === $id) {
                $m['taken'] = true;
                break;
            }
        }

        $session->set('medicines', $medicines);
        return redirect()->to('/medicine');
    }

    private function findMedicine($medicines, $id)
    {
        foreach ($medicines as $m) {
            if ($m['id'] === $id) return $m;
        }
        return null;
    }

    public function history()
{
    $medicines = session()->get('medicines') ?? [];
    $takenMeds = array_filter($medicines, fn($m) => $m['taken'] === true);
    return view('history', ['medicines' => $takenMeds]);
}
public function search()
{
    $query = $this->request->getGet('q');
    $medicines = session()->get('medicines') ?? [];

    if ($query) {
        $query = strtolower($query);
        $filtered = array_filter($medicines, function ($m) use ($query) {
            return strpos(strtolower($m['name']), $query) !== false ||
                   strpos(strtolower($m['dosage']), $query) !== false ||
                   strpos(strtolower($m['schedule']), $query) !== false;
        });
    } else {
        $filtered = $medicines;
    }

    return view('list', ['medicines' => $filtered, 'search' => $query]);
}


}
