<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->paginate(12);
        return view('cms.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('cms.companies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'one_liner' => 'nullable',
            'category' => 'nullable',
            'logo_url' => 'nullable',
            'website' => 'nullable'
        ]);

        Company::create($data);
        return redirect()->route('admin.companies.index')
                         ->with('success', 'Company created successfully.');
    }

    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company)
    {
        return view('cms.companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $data = $request->validate([
            'name' => 'required',
            'one_liner' => 'nullable',
            'category' => 'nullable',
            'logo_url' => 'nullable',
            'website' => 'nullable'
        ]);

        $company->update($data);
        return redirect()->route('admin.companies.index')
                         ->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.companies.index')
                         ->with('success', 'Company deleted successfully.');
    }
}
