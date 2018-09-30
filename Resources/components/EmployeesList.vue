<template>
    <div class="table-responsive">
        <table class="table table-hover datatable table-sm m-0">
            <thead class="bg-primary">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Region</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody v-if="employees">
                <tr v-for="(emp, ind) in employees" :key="emp.id || ind">
                    <td>{{emp.contact? emp.contact.first_name: ''}}</td>
                    <td>{{emp.contact? emp.contact.last_name: ''}}</td>
                    <td>{{emp.employee? emp.employee.job_title: ''}}</td>
                    <td>{{emp.contact? emp.contact.region: ''}}</td>
                    <td>{{emp.employee && emp.employee.department? emp.employee.department.name: ''}}</td>
                    <td>{{emp.group? emp.group.name: ''}}</td>
                    <td>
                        <a :href="action+'/'+emp.id">
                            <i class="material-icons">settings</i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <modal-viewer
            :modal-id="'new-emp'"
            :modal-title="'New employee'">
            <employee-editor
                :action="action"
                :model='employees'>
            </employee-editor>
        </modal-viewer>
    </div>
</template>

<script>
export default {
  name: "employees-list",
  props: ["model", "action", "deptUrl"],
  data() {
    return {
        employee: {}
    };
  },
  created() {
    this.employees = this.model || this.getEmployees();
  },
  watch: {
        employees(employees){
            _.forEach(employees, emp => {
                this.model.push(emp);
            });
        }
    },
  methods: {
      getEmployees(url){
            let self = this, data = [];
            axios
                .get(url || '/admin/personell/employees')
                .then( res => {
                    self.employees = res.data.data;
                })
                .catch( err => {
                    self.errors = err.response.data.errors;
                })
        },
        loadEmployee(employee){
            this.employee = employee;
        },
        getDepartments(url){

        }
  }
};
</script>

<style>
</style>
