<?php

namespace App\Repositories\CompanyRepositories;

use App\Models\Company;

class CompanyRepository implements ICompanyRepository {
    public function create(array $data) {
        return Company::create($data);
    }

    public function get($id) {
        return Company::findOrFail($id);
    }

    public function update(array $data, $id) {
        $company = Company::findOrFail($id);
        $company->update($data);
        return $company;
    }

    public function delete($id) {
        $company = Company::findOrFail($id);
        $company->delete();
    }

    public function list($filters = []) {
        $query = Company::query();
        if (isset($filters['company_name'])) {
            $query->where('company_name', 'like', '%' . $filters['company_name'] . '%');
        } return $query->get();
    }
}
