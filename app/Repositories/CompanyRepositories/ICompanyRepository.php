<?php

namespace App\Repositories\CompanyRepositories;

interface ICompanyRepository
{
    public function create(array $data);
    public function get($id);
    public function update(array $data, $id);
    public function delete($id);
    public function list($filters = []);
}
