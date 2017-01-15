<template>
  <div>
    <ul class="nav nav-tabs">
  			<li class="active">
          <a  href="#list" data-toggle="tab">Users</a>
  			</li>
  			<li>
          <a href="#create" data-toggle="tab">Create</a>
  			</li>
  			<li v-if="editing >= 0">
          <a href="#edit" data-toggle="tab">Edit</a>
  			</li>
  			<li v-if="viewing >= 0">
          <a href="#view" data-toggle="tab">View</a>
  			</li>
  	</ul>

		<div class="tab-content clearfix">
		  <div class="tab-pane active" id="list">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in items">
              <td>{{ item.id }}</td>
              <td>{{ item.name }}</td>
              <td>{{ item.email }}</td>
              <td>
                <button class="btn btn-primary" title="View" @click="view(index)">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
                <button class="btn btn-primary" title="Edit" @click="edit(index)">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button class="btn btn-danger" title="Remove" @click="remove(index)">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
			</div>
			<div class="tab-pane" id="create">
        <div class="form-group">
          <label for="create_name">Name</label>
          <input type="text" class="form-control" id="create_name" v-model="createUser.name">
        </div>
        <div class="form-group">
          <label for="create_email">Email</label>
          <input type="email" class="form-control" id="create_email" v-model="createUser.email">
        </div>
        <div class="form-group">
          <label for="create_password">New Password</label>
          <input type="password" class="form-control" id="create_password" v-model="createUser.password">
        </div>
        <div class="form-group">
          <label for="create_companies">Companies</label>
          <input type="text" class="form-control" id="create_companies">
        </div>
        <div class="form-group" v-show="createUser.groups.length">
          <label>Groups</label>
          <ul>
            <li v-for="(group, gi) in createUser.groups">
              {{ group.name }} [<a href="#" @click.prevent="remGroup(createUser, gi)">remove</a>]
            </li>
          </ul>
        </div>
        <div class="form-group">
          <label for="create_groups">Group Select</label>
          <div class="input-group">
            <input type="text" class="form-control" id="create_groups">
            <div class="input-group-btn">
              <button type="button" class="btn btn-default" @click="addGroup(createUser, '#create_groups')">
                <i class="fa fa-plus" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" v-model="createUser.active"> Active
          </label>
        </div>
        <button type="button" class="btn btn-primary" @click="create()">
          <i class="fa fa-save" aria-hidden="true"></i> Save
        </button>
			</div>
			<div class="tab-pane" id="edit" v-show="editing >= 0">
        <div class="form-group">
          <label for="edit_name">Name</label>
          <input type="text" class="form-control" id="edit_name" v-model="editUser.name">
        </div>
        <div class="form-group">
          <label for="edit_email">Email</label>
          <input type="email" class="form-control" id="edit_email" v-model="editUser.email">
        </div>
        <div class="form-group">
          <label for="edit_password">New Password</label>
          <input type="password" class="form-control" id="edit_password" v-model="editUser.password">
        </div>
        <div class="form-group">
          <label for="edit_companies">Companies</label>
          <input type="text" class="form-control" id="edit_companies">
        </div>
        <div class="form-group" v-show="editUser.groups.length">
          <label>Groups</label>
          <ul>
            <li v-for="(group, gi) in editUser.groups">
              {{ group.name }} [<a href="#" @click.prevent="remGroup(editUser, gi)">remove</a>]
            </li>
          </ul>
        </div>
        <div class="form-group">
          <label for="edit_groups">Group Select</label>
          <div class="input-group">
            <input type="text" class="form-control" id="edit_groups">
            <div class="input-group-btn">
              <button type="button" class="btn btn-default" @click="addGroup(editUser, '#edit_groups')">
                <i class="fa fa-plus" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" v-model="editUser.active"> Active
          </label>
        </div>
        <button type="button" class="btn btn-primary" @click="save()">
          <i class="fa fa-save" aria-hidden="true"></i> Save
        </button>
			</div>
			<div class="tab-pane" id="view" v-if="viewing >= 0">
        <p>
          <strong>Name:</strong> {{ items[viewing].name }}
        </p>
        <p>
          <strong>Email:</strong> {{ items[viewing].email }}
        </p>
        <p>
          <strong>Status:</strong> {{ items[viewing].active ? 'Activated' : 'Deactivated' }}
        </p>
        <p v-if="items[viewing].company">
          <strong>Company:</strong> {{ items[viewing].company.name }}
        </p>
        <p v-if="items[viewing].groups.length">
          <strong>Groups:</strong> {{ items[viewing].groups.map((e) => e.name).join(', ') }}
        </p>
        <p>
          <strong>Created At:</strong> {{ items[viewing].created_at }}
        </p>
        <p>
          <strong>Updated At:</strong> {{ items[viewing].updated_at }}
        </p>
        <button type="button" class="btn btn-primary" @click="close()">
          <i class="fa fa-close" aria-hidden="true"></i> Fechar
        </button>
			</div>
		</div>
  </div>
</template>

<script>
  export default {
    props: {
      url: {
        type: String,
        required: true
      }
    },

    data() {
      return {
        items: [],
        editing: -1,
        viewing: -1,
        createUser: {
          name: '',
          email: '',
          password: '',
          active: false,
          company: 0,
          groups: []
        },
        editUser: {
          name: '',
          email: '',
          password: '',
          active: false,
          company: 0,
          groups: []
        },
        group: 0
      }
    },

    created() {
      this.load();
    },

    mounted() {
      $('#create_companies, #edit_companies').autocomplete({
        serviceUrl: '/api/companies',
        params: {
          limit: 5
        },
        onSearchStart: () => {
          this.createUser.company = 0;
          this.editUser.company = 0;
        },
        onSelect: (suggestion) => {
          if (suggestion.id) {
            this.createUser.company = suggestion.id;
            this.editUser.company = suggestion.id;
          }
        },
        transformResult: (response) => {
          response = (typeof response === 'string') ? $.parseJSON(response) : response;
          return {
            suggestions: $.map(response, (e) => {
              return {id: e.id, value: e.name};
            })
          };
        }
      });
      $('#create_companies, #edit_companies').on('keyup', (function(_this) {
        return function() {
          if (!this.value) {
            _this.createUser.company = 0;
            _this.editUser.company = 0;
          }
        }
      })(this));
      $('#create_groups, #edit_groups').autocomplete({
        serviceUrl: '/api/groups',
        params: {
          limit: 5
        },
        onSearchStart: () => {
          this.group = 0;
        },
        onSelect: (suggestion) => {
          if (suggestion.id) {
            this.group = suggestion.id;
          }
        },
        transformResult: (response) => {
          response = (typeof response === 'string') ? $.parseJSON(response) : response;
          return {
            suggestions: $.map(response, (e) => {
              return {id: e.id, value: e.name};
            })
          };
        }
      });
      $('#create_groups, #edit_groups').on('keyup', (function(_this) {
        return function() {
          if (!this.value) {
            _this.group = 0;
          }
        }
      })(this));
    },

    methods: {
      load() {
        this.$http.get(this.url).then((response) => {
          if (response.data.length) {
            this.items = response.data;
          }
        }, () => {
          alert('Request error.');
        });
      },
      addGroup(obj, el) {
        if (this.group || $(el).val()) {
          obj.groups.push({
            id: this.group,
            name: $(el).val()
          });
        }
        this.group = 0;
        $(el).val('').focus();
      },
      remGroup(obj, index) {
        obj.groups.splice(index, 1);
      },
      remove(index) {
        if (confirm('Remove this resource?')) {
          let id = this.items[index].id;
          this.$http.delete(this.url + '/' + id).then((response) => {
            this.items.splice(index, 1);
          }, () => {
            alert('Request error.');
          });
        }
      },
      create() {
        if (this.createUser.name && this.createUser.email && this.createUser.password) {
          let data = JSON.parse(JSON.stringify(this.createUser));
          data.active = Boolean(data.active);
          if (this.createUser.company) {
            data.company = this.createUser.company;
          } else if ($('#create_companies').val()) {
            data.company = $('#create_companies').val();
          }
          data.groups = data.groups.map((e) => {
            if (e.id) {
              return e.id;
            }
            return e.name;
          });
          this.$http.post(this.url, data).then((response) => {
            if (response.data.id) {
              if (!this.items.filter((e) => e.id === response.data.id).length) {
                this.$http.get(this.url + '/' + response.data.id).then((response) => {
                  if (response.data) {
                    this.items.unshift(response.data);
                  }
                  this.createUser = {
                    name: '',
                    email: '',
                    password: '',
                    active: false,
                    company: 0,
                    groups: []
                  };
                  this.group = 0;
                  $('#create_groups').val('');
                  $('#create_companies').val('');
                  $('.nav-tabs [href="#list"]').tab('show');
                }, () => {
                  alert('Request error.');
                });
              }
            }
          }, () => {
            alert('Request error.');
          });
        }
      },
      edit(index) {
        this.editing = index;
        this.editUser.name = this.items[index].name;
        this.editUser.email = this.items[index].email;
        this.editUser.active = Boolean(this.items[index].active);
        if (this.items[index].company) {
          this.editUser.company = this.items[index].company.id;
          $('#edit_companies').val(this.items[index].company.name);
        }
        this.editUser.groups = this.items[index].groups;
        setTimeout(() => {
          $('.nav-tabs [href="#edit"]').tab('show');
          $('#edit_name').focus();
        }, 200);
      },
      save() {
        if (this.editUser.name && this.editUser.email) {
          let id = this.items[this.editing].id;
          let data = {
            name: this.editUser.name,
            email: this.editUser.email,
            active: Number(this.editUser.active),
          };
          if (this.editUser.password) {
            data.password = this.editUser.password;
          }
          if (this.editUser.company) {
            data.company = this.editUser.company;
          } else if ($('#edit_companies').val()) {
            data.company = $('#edit_companies').val();
          } else {
            data.company = null;
          }
          data.groups = this.editUser.groups.map((e) => {
            if (e.id) {
              return e.id;
            }
            return e.name;
          });
          this.$http.put(this.url + '/' + id, data).then((response) => {
            this.$http.get(this.url + '/' + id).then((response) => {
              if (response.data) {
                this.items[this.editing] = response.data;
              }
              this.editUser = {
                name: '',
                email: '',
                password: '',
                company: 0,
                groups: []
              };
              this.group = 0;
              this.editing = -1;
              $('#create_groups').val('');
              $('#create_companies').val('');
              $('.nav-tabs [href="#list"]').tab('show');
            }, () => {
              alert('Request error.');
            });
          }, () => {
            alert('Request error.');
          });
        }
      },
      view(index) {
        this.viewing = index;
        setTimeout(() => {
          $('.nav-tabs [href="#view"]').tab('show');
        }, 200);
      },
      close() {
        this.viewing = -1;
        setTimeout(() => {
          $('.nav-tabs [href="#list"]').tab('show');
        }, 200);
      }
    }
  }
</script>
