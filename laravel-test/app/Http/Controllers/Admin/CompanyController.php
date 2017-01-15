<?php
/**
 * Created by PhpStorm.
 * User: rsilveira
 * Date: 14/01/17
 * Time: 17:41
 */

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Database;
use App\Http\Controllers\Controller;
use App\Company;
use App\User;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;


class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('admin.company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('admin.company.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['name' => 'required|max:255']
        );

        $requestData = $request->all();

        Company::create($requestData);

        Session::flash('flash_message', ['Company created with success!', 'alert-success']);

        return redirect('admin/companies');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $company = Company::findOrFail($id);

        return view(
            'admin.company.edit',
            compact(
                'company'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate(
            $request,
            ['name' => 'required|max:255']
        );

        $company = Company::findOrFail($id);

        $company->update($request->all());

        Session::flash('flash_message', ['Company updated with success!', 'alert-success']);

        return redirect('admin/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param bool $id
     * @return string
     */
    public function destroy(Request $request, $id = false)
    {
        $data = $request->all();

        if (!isset($data) || empty($data)) {
            return json_encode(0);
        }

        $company = Company::find($data['id']);
        $company->delete();

        Session::flash(
            'flash_message',
            ['Company Deleted!', 'alert-success']
        );

        return json_encode(1);
    }
}
