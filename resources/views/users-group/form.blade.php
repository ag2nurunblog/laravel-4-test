@include('shared.alert')
<div class="form-group">
  <label for="user_id" class="col-md-4 control-label">User</label>
  <div class="col-md-6">
    {!! form::select('user_id', $users, $userGroup->user_id,['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  <label for="group_id" class="col-md-4 control-label">Group</label>
  <div class="col-md-6">
    {!! form::select('group_id', $groups, $userGroup->group_id,['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($submitButton) !!}
    </div>
</div>
