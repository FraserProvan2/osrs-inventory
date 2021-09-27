<template>
  <div>
    <button class="btn py-0 px-2" :class="this.btnClass" @click="action">
      <i class="fa fa-thumbs-up"></i> {{ this.likesUI }}
    </button>
  </div>
</template>

<script>
export default {
  props: ["id", "loggedin", "likes", "liked"],
  data() {
    return {
      likedUI: false,
      likesUI: 0,
    };
  },
  methods: {
    action() {
      axios.get('/api/likes/' + this.id)
        .then(res => {
          if (res.data.action == 'liked') {
            this.fireAlert("success", "Success", "Inventory liked.");
             this.likesUI = this.likesUI + 1;
            this.likedUI = true;
          } else if (res.data.action == 'unliked') {
            this.likedUI = false;
             this.likesUI = this.likesUI - 1;
            this.fireAlert("success", "Success", "Inventory unliked.");
          }
        })
        .catch(() => {
          this.fireAlert("error", "Error", "You must be signed in to like.");
        });
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
    this.likesUI = this.likes;
    this.likedUI = this.liked;
  },
};
</script>
