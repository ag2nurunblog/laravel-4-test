/**
 * Created by rsilveira on 14/1/17.
 */


$(function() {
    $('#company').dataTable({
        processing: true,
        serverSide: true,
        searching: true,
        "lengthChange": false,
        "autoWidth": true,
        info: true,
        ajax: '/admin/company/getdata_json',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

});

$(function() {
    $('#group').dataTable({
        processing: true,
        serverSide: true,
        searching: true,
        "lengthChange": false,
        "autoWidth": true,
        info: true,
        ajax: '/admin/group/getdata_json',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

});

$(function() {
    $('#users').dataTable({
        processing: true,
        serverSide: true,
        searching: true,
        "lengthChange": false,
        "autoWidth": true,
        info: true,
        "order": [[3,'desc']],
        ajax: '/admin/user/getdata_json',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'group_id', name: 'group_id'},
            {data: 'company_id', name: 'company_id'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});





