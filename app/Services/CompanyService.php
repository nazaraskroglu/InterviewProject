<?php

namespace App\Services;

use App\Repositories\CompanyRepositories\ICompanyRepository;

class CompanyService
{
    private $companyRepository;

    public function __construct(ICompanyRepository $companyRepository) {
        $this->companyRepository = $companyRepository;
    }

    public function createCompany(array $data) {
        return $this->companyRepository->create($data);
    }

    public function getCompany($id) {
        return $this->companyRepository->get($id);
    }

    public function updateCompany(array $data, $id) {
        return $this->companyRepository->update($data, $id);
    }

    public function deleteCompany($id) {
        $this->companyRepository->delete($id);
    }

    public function listCompanies() {
        return $this->companyRepository->list();
    }
}
