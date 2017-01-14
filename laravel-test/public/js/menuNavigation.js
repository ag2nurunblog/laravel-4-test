/**
 * Created by rsilveira on 14/01/17.
 */

$(document).ready(function() {

    var path = window.location.pathname;

    if (path.indexOf('company/new') != -1) {
        $(".company").addClass("active");
        $(".new-company").addClass("active");
    }
    else if (path.indexOf('admin/companies') != -1) {
        $(".company").addClass("active");
        $(".list-companies").addClass("active");
    }
    else if (path.indexOf('admin/groups') != -1) {
        $(".group").addClass("active");
        $(".list-groups").addClass("active");
    }
    else if (path.indexOf('admin/group/new') != -1) {
        $(".group").addClass("active");
        $(".new-group").addClass("active");
    }
    else if (path.indexOf('admin/user/new') != -1) {
        $(".users.treeview").addClass("active");
        $(".new-user").addClass("active");
    }
    else if (path.indexOf('admin/user/perfil') != -1) {
        $(".users.treeview").addClass("active");
        $(".perfil").addClass("active");
    }
    else if (path.indexOf('admin/users') != -1) {
        $(".users").addClass("active");
        $(".list-users").addClass("active");
    }
});
