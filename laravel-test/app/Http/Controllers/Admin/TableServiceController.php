<?php
/**
 * Created by PhpStorm.
 * User: rsilveira
 * Date: 13/01/17
 * Time: 19:19
 */

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;


class TableServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function companyJsonService(Request $request)
    {
        $company = App\Company::select();

        return Datatables::of($company)
            ->addColumn('action', function ($item) {
                $html = '<a href="/admin/company/' . $item->id .'/edit" class="btn btn-primary btn-xs" title="Edit Company"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>';
                $disabledButton = App\User::where(['company_id' => $item->id])->exists() ? 'disabled' : '';

                $html .=  '<button type="button" class="btn btn-danger btn-xs delete-buttom-'.$item->id.'" data-toggle="modal" data-target="#modal-delete-'.$item->id.'" title="Delete Company" '.$disabledButton.'>
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Company" />
                              </button>
                              <div class="modal fade" id="modal-delete-'.$item->id.'">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Delete Company</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Delete Company?</p>
                                                <small>'.$item->name.'</small>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                <button type="button" class="btn btn-primary" onclick="confirmCompanyFunction('.$item->id.')">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';

                return $html;
            })
            ->editColumn('name', function ($item) { return '<a href="/admin/company/' . $item->id . '/edit">' . $item->name . '</a>'; })
            ->addColumn('created_at', function ($item) { return Carbon::parse($item['created_at'])->format('d/m/Y H:i:s'); })
            ->addColumn('updated_at', function ($item) {
                return ($item->created_at != $item->updated_at) ? Carbon::parse($item->updated_at)->format('d/m/Y H:i:s') : 'No updates.';
            })
            ->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function groupJsonService(Request $request)
    {
        $company = App\Group::select();

        return Datatables::of($company)
            ->addColumn('action', function ($item) {
                $html = '<a href="/admin/group/' . $item->id .'/edit" class="btn btn-primary btn-xs" title="Edit User Group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>';

                $disabledButton =  DB::table('user_group')->where('group_id', $item->id)->first() ? 'disabled' : '';

                $html .=  '<button type="button" class="btn btn-danger btn-xs delete-buttom-'.$item->id.'" data-toggle="modal" data-target="#modal-delete-'.$item->id.'" title="Delete User Group" '.$disabledButton.'>
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete User Group" />
                              </button>
                              <div class="modal fade" id="modal-delete-'.$item->id.'">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Delete User Group</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Delete User Group?</p>
                                                <small>'.$item->name.'</small>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                <button type="button" class="btn btn-primary" onclick="confirmGroupFunction('.$item->id.')">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';

                return $html;
            })
            ->editColumn('name', function ($item) { return '<a href="/admin/group/' . $item->id . '/edit">' . $item->name . '</a>'; })
            ->addColumn('created_at', function ($item) { return Carbon::parse($item['created_at'])->format('d/m/Y H:i:s'); })
            ->addColumn('updated_at', function ($item) {
                return ($item->created_at != $item->updated_at) ? Carbon::parse($item->updated_at)->format('d/m/Y H:i:s') : 'No updates.';
            })
            ->make(true);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function usersJsonService(Request $request)
    {
        $users = App\User::select();

        return Datatables::of($users)
            ->addColumn('action', function ($item) {
                $html = '<a href="/admin/user/' . $item->id .'/edit" class="btn btn-primary btn-xs" title="Edit User"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>';
                $html .= '<a href="/admin/user/detail/' . $item->id .'" class="btn btn-success btn-xs" title="User Detail"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>';
                $disabledItem = Auth::user()->id == $item->id ? 'disabled' : '';

                $html .=  '<button type="button" class="btn btn-danger btn-xs delete-buttom-'.$item->id.'" data-toggle="modal" data-target="#modal-delete-'.$item->id.'" title="Delete User"'.$disabledItem.'>
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete User" />
                              </button>
                              <div class="modal fade" id="modal-delete-'.$item->id.'">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Delete User</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Delete User?</p>
                                                <small>'.$item->name.'</small>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                <button type="button" class="btn btn-primary" onclick="confirmUserFunction('.$item->id.')">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';

                return $html;
            })
            ->editColumn('name', function ($item) {
                return ($item->id == Auth::user()->id) ? '<a href="/admin/user/detail/' . $item->id .'"><span class="badge bg-yellow"> '. $item->name .'</span></a>' : '<a href="/admin/user/detail/' . $item->id .'">'.$item->name.'</a>';
            })
            ->editColumn('group_id', function ($item) {
                $groupsNames = [];
                foreach ($item->groups as $group) {
                    $groupsNames[] ='<a href="/admin/group/'.$group->id.'/edit">'.$group->name .'</a>';
                }

                return implode(', ', $groupsNames);
            })
            ->editColumn('company_id', function ($item) {
                return '<a href="/admin/company/'.$item->company_id.'/edit">'.$item->companies->name .'</a>';
            })
            ->editColumn('email', function ($item) {
                return '<a href="mailto:'.$item->email.'" target="_top">'.$item->email.'</a>';
            })
            ->addColumn('created_at', function ($item) { return Carbon::parse($item['created_at'])->format('d/m/Y H:i:s'); })
            ->addColumn('updated_at', function ($item) {
                return ($item->created_at != $item->updated_at) ? Carbon::parse($item->updated_at)->format('d/m/Y H:i:s') : 'No Updates.';
            })
            ->make(true);
    }
}