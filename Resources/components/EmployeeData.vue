<template>

</template>

<script>
export default {
  name: "employee-data",
  props: ["model", "employee"],
  data() {
    return {
      first_name: ""
    };
  },
  watch: {
    first_name(first_name) {
      if (!first_name) {
        return this.employee.employee.first_name || "";
      }
    }
  }
};
</script>

<style>
</style>
