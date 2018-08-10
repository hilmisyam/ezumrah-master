<template>
  <table class="table table-hover datatable">
    <thead>
      <slot name="header"></slot> 
    </thead>
    <tbody>
      <slot name="body"></slot>
    </tbody>
  </table>
</template>

<script>
export default {
  props: ["config"],
  mounted() {
    if (this.config) {
      $(this.$el).DataTable(this.config);
    } else {
      $(this.$el).DataTable({
        dom:
          "<'row'<'col-sm-6'><'col-sm-6 pr-4'f>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row'<'col-sm-6 text-left pl-4'i><'col-sm-6 pr-4'p>>"
      });
    }
  }
};
</script>