<template>
    <div class="departments">
        <div class="card-deck">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="card-title m-0">All Departments</h4>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="(dept, key) in departments"
                            :key="dept.id || key">
                            <a @click="setDept(dept)" data-toggle="modal" href="#department-info">
                            {{dept.name}}
                            </a>
                            <span class="float-right">
                                <a href="#" class="fa fa-chevron-right tooltipped" title="edit"></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card collapse fade" id="new-dept">
                <div class="card-header bg-primary">
                    <h4 class="card-title m-0">New Department</h4>
                </div>
                <form :action="action" method="post" class="form-line border-less card-body" @submit.prevent="addDept">
                    <div class="form-group">
                        <label for="dept">Department Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" v-model="name" placeholder="Enter new department">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <modal-viewer
            :modal-id="'department-info'"
            :modal-title="'Department Info'">
            <form :action="action+'/'+department.id" method="post" class="form-line border-less" @submit.prevent="updateDept">
                <div class="form-group">
                    <label for="dept">Department Name</label>
                    <input type="text" class="form-control" name="name" :value="department.name" placeholder="Enter new department">
                </div>
                <div class="form-group">
                    <label for="code">Department Code</label>
                    <input type="text" class="form-control" name="code" :value="department.code" placeholder="Enter department code">
                </div>
                <div class="form-group">
                    <label for="info">Department Info</label>
                    <input type="text" class="form-control" name="info" :value="department.info" placeholder="Add department info">
                </div>
            </form>
        </modal-viewer>
    </div>
</template>

<script>
export default {
  name: "departments",
  props: ["action"],
  data() {
    return {
      departments: [],
      department: {},
      department_id: null,
      name: null,
      label: null
    };
  },
  created() {
    this.getDepts();
  },
  computed: {},
  watch: {
    name(name) {
      this.label = name.replace(/\s+/g, "-").toLowerCase();
    },
    department(dept) {
      this.department_id = dept.id;
      this.getDepts();
    }
  },
  methods: {
    addDept(form) {
      let self = this;

      axios
        .post(self.action, {
          name: self.name,
          label: self.label
        })
        .then(res => {
          this.department = res.data;
        })
        .catch(err => {
          console.log(err.response.data);
        });
    },
    setDept(dept) {
      this.department = dept;
    },
    getDepts() {
      let self = this;

      axios
        .get(self.action)
        .then(res => {
          this.departments = res.data;
        })
        .catch(err => {
          console.log(err.response.data);
        });
    },
    updateDept(form) {
      let self = this,
        postData = {},
        formData = $(form.target).serializeArray();

      formData.forEach(data => (postData[data.name] = data.value));

      axios
        .put(self.action, postData)
        .then(res => {
          self.department = res.data;
        })
        .catch(err => {
          console.log(err.response.data);
        });
    }
  }
};
</script>

<style>
</style>
