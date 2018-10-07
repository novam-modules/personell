<template>
    <table width="100%" class="user-table">
        <tbody>
            <tr>
                <td width="30px"><i class="icon-email"></i></td>
                <td width="33%"><strong>Username:</strong></td>
                <td> {{ employee.email }} </td>
            </tr>
            <tr>
                <td><i class="icon-telephone"></i></td>
                <td><strong>Office Phone:</strong></td>
                <td></td>
            </tr>
            <tr>
                <td><i class="icon-telephone"></i></td>
                <td><strong>Cell Phone:</strong></td>
                <td></td>
            </tr>
            <tr>
                <td><i class="icon-telephone"></i></td>
                <td><strong>Fax:</strong></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        name: "employee-contacts",
        props: ["employee", "empno"],
        data() {
            return {

            }
        }
    }
</script>

<style>

</style>
