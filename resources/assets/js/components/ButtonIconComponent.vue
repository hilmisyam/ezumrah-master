<template>
    <a :class="'btn btn-rounded btn-sm btn-outline-' + [btnType] + ' '" style="padding:10px 13px;" data-toggle="tooltip" data-placement="right" :title="action" :href="href">
        <i v-if="action == 'add'" class="fa fa-plus"></i>
        <i v-if="action == 'update'" class="fa fa-pencil"></i>
        <i v-if="action == 'delete'" class="fa fa-remove"></i>
        <slot></slot>
    </a>
</template>

<script>
export default {
  props: ["action", "confirm", "ajax", "reload", "href"],
  data: function() {
    return {
      btnType: "default"
    };
  },
  mounted() {
    $(this.$el).tooltip();
    let app = this;

    if (this.action == "add") {
      this.btnType = "primary";
    } else if (this.action == "update") {
      this.btnType = "success";
    } else if (this.action == "delete") {
      this.btnType = "danger";
    }

    if (this.confirm) {
      $(this.$el).click(function(event) {
        event.preventDefault();
        swal({
          title: "Are you sure?",
          showCancelButton: true,
          confirmButtonText: "Delete",
          showLoaderOnConfirm: true,
          preConfirm: function(email) {
            return new Promise(function(resolve, reject) {
              if (app.ajax) {
                $.ajax({
                  type: app.ajax,
                  url: app.href,
                  headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
                  },
                  success: function(msg) {
                    if (msg.success) {
                      toast("success", msg.success);
                      if (app.reload) {
                        window.location.reload();
                      }
                    } else {
                      toast("success", msg.error);
                    }
                    resolve();
                  },
                  error: function(req, status, err) {
                    toast("error", "Something when wrong");
                  }
                });
              } else {
                window.location.href = app.href;
              }
            });
          },
          allowOutsideClick: false
        }).then(function(dismiss) {
          if (dismiss == "cancel") {
            // function when cancel button is clicked
          }
        });
      });
    }
  }
};
</script>
