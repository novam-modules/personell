<template>
    <div class="job-positions">
        <ul>
            <li v-for="(dept, key) in positions"
                :key="dept.id || key">
                {{dept.name}}
            </li>
        </ul>
        <form :action="action" method="post">
            <form-group
                :model="position_id"
                :type="text">
                <input-text></input-text>
            </form-group>
            <form-group
                :model="position_id"
                :type="text">
                <input-text></input-text>
            </form-group>
        </form>
    </div>
</template>

<script>
export default {
    name: 'job-positions',
    props: ["model"],
    data(){
        return {
            position_name: null,
            position_id: null,
            position: {},
            positions: [],

        }
    },
    created(){
        this.positions = this.model
    }
}
</script>

<style>

</style>
