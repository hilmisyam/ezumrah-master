<template>
  <div class="form-group row">
    <label :class="['col-lg-' + col[0]] + ' col-form-label text-left'">
      <slot name="label"></slot>
    </label>
    <div :class="['col-lg-' + col[1]]">
      <slot name="input"></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ["col"],
  data: function() {
    return {
      count: 0
    };
  },
  mounted() {}
};
</script>
