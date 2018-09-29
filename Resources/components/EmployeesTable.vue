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
                    <td>{{emp.contact.name || ''}}</td>
                    <td>{{emp.employee.department || ''}}</td>
                    <td>{{emp.employee.job_title || ''}}</td>
                    <td>{{emp.contact.region || ''}}</td>
                    <td>{{emp.group.name || ''}}</td>
                    <td>{{emp.id}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    name: "employees-table",
    props: [ "model" ],
    data(){
        return {
            employees: this.model
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
                .get(url || '/admin/personell/employees')
                .then( res => {
                    self.employees = res.data.data;
                })
                .catch( err => {
                    self.errors = err.response.data.errors;
                })
        }
    }
}
</script>

<style>

</style>
