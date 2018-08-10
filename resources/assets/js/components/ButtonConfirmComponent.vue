<template>
    <a :class="'btn btn-sm btn-' + [btnType] + ' '">
        <i v-if="action == 'add'" class="fa fa-plus mr-1"></i>
        <i v-if="action == 'update'" class="fa fa-pencil mr-1"></i>
        <i v-if="action == 'delete'" class="fa fa-remove mr-1"></i>
        <slot></slot>
    </a>
</template>

<script>
export default {
  props: ["action"],
  data: function() {
    return {
      btnType: "default"
    };
  },
  mounted() {
    if (this.action == "add") {
      this.btnType = "primary";
    } else if (this.action == "update") {
      this.btnType = "success";
    } else if (this.action == "delete") {
      this.btnType = "danger";
    }
  }
};
</script>
