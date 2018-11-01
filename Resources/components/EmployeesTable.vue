<template>
    <div class="table-reponsive">
        <table class="table table-hover">
            <thead class="bg-primary">
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Region</th>
                    <th>Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(emp, ind) in employees" :key="emp.id || ind">
                    <td>{{emp.contact? emp.contact.name: ''}}</td>
                    <td>{{emp.employee? emp.employee.department: ''}}</td>
                    <td>{{emp.employee? emp.employee.job_title: ''}}</td>
                    <td>{{emp.contact? emp.contact.region: ''}}</td>
                    <td>{{emp.group? emp.group.name: ''}}</td>
                    <td>
                        <a href="#employeeViewer" @click.prevent="loadEmployee(emp)"  data-toggle="modal">
                            <i class="material-icons">settings</i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="employeeViewer" tabindex="-1" role="dialog" aria-labelledby="employeeViewerabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="employeeViewerLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="employeeViewerBody">
                    <employee-viewer :model="employees" :employee="employee"></employee-viewer>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "employees-table",
    props: [ "model" ],
    data(){
        return {
            employees: this.model,
            employee: {}
        }
    },
    mounted(){
        // this.getEmployees();
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
            let self = this;
            axios
                .get(url || '/admin/personnel/employees')
                .then( res => {
                    self.employees = res.data.data;
                })
                .catch( err => {
                    self.errors = err.response.data.errors;
                })
        },
        loadEmployee(employee){
            this.employee = employee;
        }
    }
}
</script>

<style>

</style>
