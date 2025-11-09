<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')->latest()->paginate(12);
        return view('cms.jobs.index', compact('jobs'));
    }

    public function create()
    {
        $companies = Company::select('id', 'name')->orderBy('name')->get();
        return view('cms.jobs.create', compact('companies'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'company_id' => ['required', 'exists:companies,id'],
            'title' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'is_active' => ['sometimes', 'boolean'],
        ]);

        $data['tags'] = $data['tags']
            ? json_encode(array_map('trim', explode(',', $data['tags'])))
            : null;

        $data['is_active'] = (bool)($data['is_active'] ?? false);

        Job::create($data);

        return redirect()->route('admin.jobs.index')
                         ->with('success', 'Job created successfully.');
    }

    public function edit(Job $job)
    {
        $companies = Company::select('id', 'name')->orderBy('name')->get();
        return view('cms.jobs.edit', compact('job', 'companies'));
    }

    public function update(Request $request, Job $job)
    {
        $data = $request->validate([
            'company_id' => ['required','exists:companies,id'],
            'title'      => ['required','string','max:255'],
            'location'   => ['nullable','string','max:255'],
            'tags'       => ['nullable','string'],
            'description'=> ['nullable','string'],
            'is_active'  => ['nullable'], 
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['tags'] = isset($data['tags']) && trim($data['tags']) !== ''
            ? array_map('trim', explode(',', $data['tags']))
            : null;

        $job->update($data);

        return redirect()->route('admin.jobs.index')->with('success', 'Job updated successfully.');
    }


    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')
                         ->with('success', 'Job deleted successfully.');
    }
}
