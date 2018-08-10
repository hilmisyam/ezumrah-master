<template>
  <input type="text" readonly class="form-control timepicker" :value="valueFormated">
</template>

<script>
export default {
  props: ["config", "value"],
  data: function() {
    return {
      valueFormated: null
    };
  },
  mounted() {
    if (this.value) {
      this.valueFormated = moment(this.value, "HH:mm:ss").format("hh:mmA");
    }

    if (this.config) {
      $(this.$el).pickatime(this.config);
    } else {
      $(this.$el).pickatime({ twelvehour: true });
    }
  }
};
</script>