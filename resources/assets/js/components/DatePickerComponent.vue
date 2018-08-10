<template>
  <input type="text" class="form-control datepicker">
</template>

<script>
export default {
  props: ["config"],
  mounted() {
    if (this.config) {
      $(this.$el).pickadate(this.config);
    } else {
      $(this.$el).pickadate();
    }
  }
};
</script>