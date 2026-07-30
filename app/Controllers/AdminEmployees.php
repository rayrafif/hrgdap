<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class AdminEmployees extends BaseController
{
    public function index()
    {
        $model = new EmployeeModel();
        $search = $this->request->getGet('search') ?? '';

        $builder = $model->builder();
        if ($search !== '') {
            $builder->like('full_name', $search, 'both');
            $builder->orLike('current_designation', $search, 'both');
            $builder->orLike('work_location', $search, 'both');
            $builder->orLike('email', $search, 'both');
        }

        $employees = $builder->orderBy('id', 'ASC')->get()->getResultArray();

        return view('admin/employees/index', [
            'employees' => $employees,
            'search'    => $search,
        ]);
    }

    public function create()
    {
        return view('admin/employees/form', ['employee' => []]);
    }

    public function store()
    {
        $model = new EmployeeModel();
        $data = $this->request->getPost();

        if ($model->insert($data)) {
            return redirect()->to('/admin/employees')->with('success', 'Data karyawan berhasil ditambahkan.');
        }

        return redirect()->back()->withInput()->with('errors', $model->errors());
    }

    public function edit($id)
    {
        $model = new EmployeeModel();
        $employee = $model->find($id);

        if (!$employee) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/employees/form', ['employee' => $employee]);
    }

    public function update($id)
    {
        $model = new EmployeeModel();
        $data = $this->request->getPost();

        if ($model->update($id, $data)) {
            return redirect()->to('/admin/employees')->with('success', 'Data karyawan berhasil diperbarui.');
        }

        return redirect()->back()->withInput()->with('errors', $model->errors());
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);

        return redirect()->to('/admin/employees')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
