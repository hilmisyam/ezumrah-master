<template>
    <a :class="'btn btn-sm btn-' + [btnType] + ' '" :href="href">
        <i v-if="action == 'add'" class="fa fa-plus mr-1"></i>
        <i v-if="action == 'update'" class="fa fa-pencil mr-1"></i>
        <i v-if="action == 'delete'" class="fa fa-remove mr-1"></i>
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
