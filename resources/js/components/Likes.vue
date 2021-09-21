<template>
  <div>
    <button class="btn py-0 px-2" :class="this.btnClass" @click="action">
      <i class="fa fa-thumbs-up"></i> {{ this.likesUI }}
    </button>
  </div>
</template>

<script>
export default {
  props: ["loggedin", "likes", "liked"],
  data() {
    return {
      likedUI: false,
      likesUI: 0,
    };
  },
  methods: {
    action() {
      if (!this.loggedin) {
        return this.fireAlert(
          "error",
          "Error",
          "You must be logged in to like."
        );
      }

      if (this.likedUI) {
        console.log("unliked");
        this.fireAlert("success", "Success", "Inventory unliked.");
        // TODO

        this.likedUI = false;
        this.likesUI = this.likesUI - 1;
      } else {
        console.log("liked");
        this.fireAlert("success", "Success", "Inventory liked.");
        // TODO

        this.likedUI = true;
        this.likesUI = this.likesUI + 1;
      }
    },
    fireAlert(type, title, text) {
      this.$notify({ group: "all", title, type, text, duration: 2500 });
    },
  },
  computed: {
    btnClass: function () {
      if (this.likedUI) return "likes-true";
      return "likes-false";
    },
  },
  mounted() {
    this.likedUI = this.liked;
    this.likesUI = this.likes;
  },
};
</script>
