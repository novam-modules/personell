Vue.component('EmployeeViewer', require('../../components/EmployeeViewer.vue'));
Vue.component('EmployeesTable', require('../../components/EmployeesTable.vue'));
Vue.component('EmployeeEditor', require('../../components/EmployeeEditor.vue'));
Vue.component('EmployeeData', require('../../components/EmployeeData.vue'));
Vue.component('EmployeesList', require('../../components/EmployeesList.vue'));
Vue.component('Departments', require('../../components/Departments.vue'));
Vue.component('JobPositions', require('../../components/JobPositions.vue'));

Vue.component('EmployeeProfile', require('../../components/employees/Profile.vue'));
Vue.component('EmployeeContacts', require('../../components/employees/Contacts.vue'));

const personnel = new Vue({
    el: "#personnel",
    methods: {
        getData(action){
            let data = {};
            console.log('parent');
            axios.get(action)
            .then(res =>  {
                data = res.data;
            })
            .catch( err => {
                data.errors = err.response.data;
            });
            return data;
        }
    }
});
