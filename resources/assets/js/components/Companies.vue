<template>
  <div>
    <ul class="nav nav-tabs">
  			<li class="active">
          <a  href="#list" data-toggle="tab">Companies</a>
  			</li>
  			<li>
          <a href="#create" data-toggle="tab">Create</a>
  			</li>
  			<li v-if="editing >= 0">
          <a href="#edit" data-toggle="tab">Edit</a>
  			</li>
  	</ul>

		<div class="tab-content clearfix">
		  <div class="tab-pane active" id="list">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Company</th>
              <th>Users</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in items">
              <td>{{ item.name }}</td>
              <td>{{ item.users.length }}</td>
              <td>
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
        <h4>Name:</h4>
        <div class="input-group">
          <input type="text" class="form-control" v-model="createCompany.name">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default" @click="create()">
              <i class="fa fa-save" aria-hidden="true"></i>
            </button>
          </div>
        </div>
			</div>
			<div class="tab-pane" id="edit" v-if="editing >= 0">
        <h4>Name:</h4>
        <div class="input-group">
          <input type="text" class="form-control" v-model="editCompany.name">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default" @click="save()">
              <i class="fa fa-save" aria-hidden="true"></i>
            </button>
          </div>
        </div>
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
        createCompany: {
          name: ''
        },
        editCompany: {
          name: ''
        }
      }
    },

    created() {
      this.load();
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
        if (this.createCompany.name) {
          this.$http.post(this.url, this.createCompany).then((response) => {
            if (response.data.id) {
              if (!this.items.filter((e) => e.id === response.data.id).length) {
                this.items.unshift({
                  id: response.data.id,
                  name: this.createCompany.name,
                  users: []
                });
              }
              this.createCompany.name = '';
              $('.nav-tabs [href="#list"]').tab('show');
            }
          }, () => {
            alert('Request error.');
          });
        }
      },
      edit(index) {
        this.editing = index;
        this.editCompany.name = this.items[index].name;
        setTimeout(() => {
          $('.nav-tabs [href="#edit"]').tab('show');
          $('input', '#edit').focus();
        }, 200);
      },
      save() {
        if (this.editCompany.name) {
          let id = this.items[this.editing].id;
          this.$http.put(this.url + '/' + id, this.editCompany).then((response) => {
            this.items[this.editing].name = this.editCompany.name;
            this.editCompany.name = '';
            this.editing = -1;
            $('.nav-tabs [href="#list"]').tab('show');
          }, () => {
            alert('Request error.');
          });
        }
      }
    }
  }
</script>
