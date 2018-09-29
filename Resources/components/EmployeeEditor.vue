<template>
    <form :action="action" method="post" class="form-line" @submit.prevent="doRegister">

        <!-- <div class="form-group">
            <label for="empno">Employee Number</label>
            <input type="text" v-model="empno" :class="[{'is-invalid' : errors.last_name}, 'form-control']" required />
            <span class="invalid-feedback" v-if="errors.last_name">
                {{ errors.empno }}
            </span>
        </div> -->
        <div class="form-group">
            <label for="name">First & Last Name</label>
            <input type="text" v-model="name" :class="[{'is-invalid' : errors.name}, 'form-control']" required />
            <span class="invalid-feedback" v-if="errors.name">
                {{ errors.name }}
            </span>
        </div>
        <div class="form-group">
            <label for="email">Company Email</label>
            <input type="text" v-model="email" :class="[{'is-invalid' : errors.email}, 'form-control']" required />
            <span class="invalid-feedback" v-if="errors.email">
                {{ errors.email }}
            </span>
        </div>
        <div class="form-group">
            <label for="sec_email">Secondary Email</label>
            <input type="text" v-model="sec_email" :class="[{'is-invalid' : errors.sec_email}, 'form-control']" required />
            <span class="invalid-feedback" v-if="errors.sec_email">
                {{ errors.sec_email }}
            </span>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" v-model="phone" :class="[{'is-invalid' : errors.phone}, 'form-control']" required />
            <span class="invalid-feedback" v-if="errors.phone">
                {{ errors.phone }}
            </span>
        </div>
        <div class="form-group">
            <label for="first_name">Password (Holbrook1)</label>
            <input type="password" v-model="password" :class="[{'is-invalid' : errors.password}, 'form-control']" required />
            <span class="invalid-feedback" v-if="errors.password">
                {{ errors.password }}
            </span>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
                <span v-if="!submitting">Submit</span>
                <span v-else><i class="fa fa-spin fa-spinner"></i> Submitting...</span>
            </button>
        </div>
    </form>
</template>

<script>
export default {
    name: "employee-editor",
    props: ["model", "action"],
    data(){
        return {
            name: "",
            email: "",
            phone: "",
            sec_email: "",
            password: "Holbrook1",
            empno: "",
            errors: {},
            employee: {},
            submitting: false
        }
    },
    mounted(){
        // model.push(_.omit(this.$data, ['errors', 'submitting']));
    },
    computed: {


    },
    watch: {
        name(name){
            // if(this.user) return;
            this.email = name.replace(/\s+/g, '.').toLowerCase();
            if(this.email.indexOf('@') == -1){
                this.email += "@holbrookasphalt.com";
            }
        },
        employee(employee){
            this.model.push(this.employee);
        }
    },
    methods: {
        doRegister(){
            let self = this;
            let postData = _.omit(this.$data, ['errors', 'submitting', 'employee']);
            this.submitting = true;

            //Add User First
            axios.post(self.action, postData)
                .then( res => {
                    self.employee = res.data;
                })
                .catch( err => {
                    self.errors = err.response.data;
                })
                .then(() => self.submitting = false );
        }
    }
}
</script>

<style>

</style>
