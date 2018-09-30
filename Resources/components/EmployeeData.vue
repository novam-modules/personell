<template>
    <div id="employee-data">

        <form action="" method="post">
            <form-group :type="'text'"></form-group>
        </form>
    </div>
</template>

<script>
export default {
    name: "employee-data",
    props: ["model", "employee"],
    data(){
        return{
            first_name: ""
        }
    },
    watch: {
        first_name(first_name){
            if(!first_name) {
                return this.employee.employee.first_name || "";
            }
        }
    }

}
</script>

<style>

</style>
