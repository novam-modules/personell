<template>
    <form :action="action" method="post" class="form-line border-less" @submit.prevent="doRegister">

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header bg-primary p-0" id="headingOne">
                <h5 class="mb-0">
                    <button class="text-white btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    BASIC INFO
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body p-1">
                    <div class="form-group">
                        <label for="name">First & Last Name</label>
                        <input type="text" autocomplete="off" v-model="name" :class="[{'is-invalid' : errors.name}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.name">
                            {{ errors.name }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="email">Company Email</label>
                        <input type="email" autocomplete="off" v-model="email" :class="[{'is-invalid' : errors.email}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.email">
                            {{ errors.email }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="sec_email">Secondary Email</label>
                        <input type="email" autocomplete="off" v-model="sec_email" :class="[{'is-invalid' : errors.sec_email}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.sec_email">
                            {{ errors.sec_email }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" autocomplete="off" v-model="phone" :class="[{'is-invalid' : errors.phone}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.phone">
                            {{ errors.phone }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Password (Holbrook1)</label>
                        <input type="password" autocomplete="off" v-model="password" :class="[{'is-invalid' : errors.password}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.password">
                            {{ errors.password }}
                        </span>
                    </div>

                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary p-0" id="headingTwo">
                <h5 class="mb-0">
                    <button class="text-white btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    WORK INFO
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body p-1">
                    <div class="form-group">
                        <select @focus="getDepartments" v-model="department_id" :class="[{'is-invalid' : errors.department_id}, 'form-control']" required>
                            <option value="" selected>Department</option>
                            <option v-for="(department, ind) in departments"
                                :key="department.id || ind"
                                :value="department.id">
                                {{department.name}}
                            </option>
                        </select>
                        <span class="invalid-feedback" v-if="errors.department_id">
                            {{ errors.department_id }}
                        </span>
                    </div>
                    <div class="form-group">
                        <select@focus="getPositions" v-model="position_id" :class="[{'is-invalid' : errors.position_id}, 'form-control']" required>
                            <option value="" selected>Positions</option>
                            <option v-for="(position, ind) in positions"
                                :key="position.id || ind"
                                :value="{position_id: position.id}">
                                {{position.name}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Hire Date</label>
                        <date-picker v-model="hired_at" :config="{format: 'Y-m-d'}"></date-picker>
                        <!-- <input type="date" autocomplete="off" v-model="hired_at" :class="[{'is-invalid' : errors.hired_at}, 'form-control']" required /> -->
                        <span class="invalid-feedback" v-if="errors.hired_at">
                            {{ errors.hired_at }}
                        </span>
                    </div>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary p-0" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        OFFICE INFO
                    </button>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="form-group">
                        <label for="payroll_id">Payroll ID</label>
                        <input type="text" autocomplete="off" v-model="payroll_id" :class="[{'is-invalid' : errors.payroll_id}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.payroll_id">
                            {{ errors.payroll_id }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="hr_id">HR ID</label>
                        <input type="text" autocomplete="off" v-model="hr_id" :class="[{'is-invalid' : errors.hr_id}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.hr_id">
                            {{ errors.hr_id }}
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="teamid">Team ID</label>
                        <input type="text" autocomplete="off" v-model="team_id" :class="[{'is-invalid' : errors.team_id}, 'form-control']" required />
                        <span class="invalid-feedback" v-if="errors.team_id">
                            {{ errors.team_id }}
                        </span>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="form-group row my-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block">
                    <span v-if="!submitting">Submit</span>
                    <span v-else><i class="fa fa-spin fa-spinner"></i> Submitting...</span>
                </button>
                </div>
            </div>

    </form>
</template>

<script>
export default {
    name: "employee-editor",
    props: ["model", "action", "dept-url", "dept-data", "emp-url", "emp-data"],
    data(){
        return {
            name: "",
            email: "",
            phone: "",
            sec_email: "",
            password: "Holbrook1",
            position: "",
            empno: "",
            hired_at: "",
            payroll_id: null,
            hr_id: null,
            team_id: null,
            errors: {},
            employee_id: null,
            position_id: null,
            department_id: null,
            submitting: false,
            options: {}
        }
    },
    mounted(){

        this.getDepartments();
        // this.departments = this.$parent.$options.methods.getData(deptUrl);
    },
    computed: {
        employee(){

        },
        employees(){
            return this.empData || [];
        },
        department(){

        },
        departments(){
            return this.deptData || [{id:1, name:'Regular Staff'}];
        },
        position(){

        },
        positions(){
            return this.deptData || [{id:1, name:'Full Time Job'}];
        }


    },
    watch: {
        name(name){
            // if(this.user) return;
            this.email = name.replace(/\s+/g, '.').toLowerCase();
            if(this.email.indexOf('@') == -1){
                this.email += "@holbrookasphalt.com";
            }
            this.name = name.toLowerCase().split(' ')
                .map((s) => s.charAt(0).toUpperCase() + s.substring(1))
                .join(' ');
        },
        employee(employee){
            this.model.push(this.employee);
        },
        employee_id(value){
            this.employee = this.employees.find(emp => emp.id == value);
        },
        department_id(value){
            this.department = this.departments.find(dept => dept.id == value);
        },
        errors(errors){
            _.forEach(errors, (val, k) => {
                if(_.isArray(val)) val = val.join('<br/>');
                errors[k] = val;
            });
            return errors;
        },
        data(data){
            _.forEach(data, (val, k) => {
                if(_.has(k, this.errors)){
                    _.unsete(this.errors, [k]);
                }
            });
        }
    },
    methods: {
        doRegister(){
            let self = this;
            let postData = _.omit(this.$data, ['errors', 'submitting', 'employee']);
            this.submitting = true;
            this.errors = {};

            //Add User First
            axios.post(self.action, postData)
                .then( res => {
                    self.employee = res.data || {};
                })
                .catch( err => {
                    self.errors = err.response.data.errors || {};
                })
                .then(() => self.submitting = false );
        },
        getDepartments(){
            let self = this, deptUrl = this.deptUrl || this.$parent.deptUrl;
            if(this.departments.length) return;

            axios.get(deptUrl)
                .then( res => {
                    this.departments = res.data || [];
                })
                .catch( err => {
                    self.errors = err.response.data.errors || {};
                })
                .then();
        },
        getPositions(){
            let self = this, deptUrl = this.$parent.deptUrl;
            if(this.positions.length) return;

            this.positions = [
                {id: 1, name: 'Regular Employee'}
            ];
        }

    }
}
</script>

<style>

</style>
