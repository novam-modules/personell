<template>
    <div id="employee-viewer">

        <div class="card-decks">
            <form class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        Basic Info
                    </h4>
                </div>
                <div class="card-body">

                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "employee-view",
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
