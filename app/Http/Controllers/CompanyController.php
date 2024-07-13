<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyCreate;
use App\Http\Requests\CompanyUpdate;
use App\Services\CompanyService;

class CompanyController extends Controller
{
    private $companyService;
    public function __construct(CompanyService $companyService) {
        $this->companyService = $companyService;
    }

    public function create(CompanyCreate $request) {
        try {
            $validatedData = $request->validated();
            $company = $this->companyService->createCompany($validatedData);

            return response()->json(['status' => true, 'data' => $company], 201);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function get($id) {
        try {
            $company = $this->companyService->getCompany($id);

            return response()->json(['status' => true, 'data' => $company], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 404);
        }
    }

    public function update(CompanyUpdate $request, $id) {
        try {
            $validatedData = $request->validated();
            $company = $this->companyService->updateCompany($validatedData, $id);

            return response()->json(['status' => true, 'data' => $company], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function delete($id) {
        try {
            $this->companyService->deleteCompany($id);

            return response()->json(['status' => true, 'message' => 'Şirket başarıyla silindi'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function list() {
        try {
            $companies = $this->companyService->listCompanies();

            return response()->json(['status' => true, 'data' => $companies], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
