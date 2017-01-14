<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Company;
use App\Group;
use Carbon\Carbon;
use App\User;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts         = $this->getPostsByDate();
        $companies     = Company::select()->count();
        $users         = User::select()->count();
        $groups        = Group::select()->count();

        return view(
            'home',
            compact(
                'title',
                'posts',
                'companies',
                'users',
                'groups'
            )
        );
    }

    /**
     * Method that returns latest activities.
     *
     * @return mixed
     */
    public function getPostsByDate($limit = 8)
    {
        return Company::select()
            ->limit($limit)
            ->orderBy('updated_at', 'desc')
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->updated_at)->format('d'); // grouping by days
            });
    }
}
