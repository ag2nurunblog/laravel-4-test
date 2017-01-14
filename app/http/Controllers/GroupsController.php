<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
class GroupsController extends Controller
{
  public function index()
  {
    return Group::all();
  }
  public function store(Request $request)
  {
    return Group::create($request->all());
  }
  public function show(Group $group)
  {
    return $group;
  }
  public function update(Request $request, Group $group)
  {
    $group->update($request->all());
    return $group;
  }
  public function destroy(Group $group)
  {
    return (string) $group->delete();
  }
}
