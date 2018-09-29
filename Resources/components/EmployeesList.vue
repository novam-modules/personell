<template>
    <div class="card-group">
        <div class="card col p-0">
            <div class="card-body p-0">
                <employees-table
                :model='model'
                >
                </employees-table>
            </div>
        </div>
        <div class="card col-md-4 collapse fade" id="new-emp">
            <div class="card-header card-primary">
                <h4 class="card-title m-0">
                    New Employee
                    <a href="#new-emp" data-toggle="collapse" class="float-right">
                            <i class="material-icons">remove_circle_outline</i>
                        </a>
                </h4>
            </div>
            <div class="card-body px-0">

                <employee-editor
                    :action="action"
                    :model='model'
                >
                </employee-editor>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "employees-list",
    props: ["model", "action"],
    data(){
        return {}
    }
}
</script>

<style>

</style>
