<template>
    <div>
        <span>{{ employee.email }}</span>
        <br>
        <span>
            <br>
            , UT
            <br>
        </span>
    </div>
</template>

<script>
    export default {
        name: "employee-profile",
        props: ["employee", "empno"],
        data() {
            return {

            }
        }
    }
</script>

<style>

</style>
