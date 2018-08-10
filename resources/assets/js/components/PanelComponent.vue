<template>
  <div class="card card-cascade narrower z-depth-1">

        <div class="card-header white">

            <div class="row">
                <div class="col-sm text-left">
                    <h4 class="text-left my-2">
                        <slot name="title"></slot>
                    </h4>
                </div>
                <div class="col-sm text-right">
                    <ul class="nav nav-pills card-header-pills float-right">
                        <slot name="action"></slot>
                    </ul>
                </div>
            </div>

        </div>

        <div class="py-4" v-if="$slots.table">

            <slot name="table"></slot>

        </div>

        <div class="card-body" v-if="$slots.content">

            <slot name="content"></slot>

        </div>

        <div class="rounded-bottom p-3 text-right" v-if="$slots.footer">

            <slot name="footer"></slot>
            
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
