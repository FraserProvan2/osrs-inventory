<template>
  <div
    class="grid-item"
    data-toggle="tooltip"
    data-placement="top"
    :title="this.item.name"
  >
    <img :src="getItemImgSrc(item)" alt="" />
    <div class="item-details">
      <div class="item-detail float-right" v-if="this.item.fuzzy">*</div>
      <div
        class="item-detail float-left"
        v-if="this.item.quantity && this.item.quantity > 1"
      >
        {{ this.item.quantity }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["item"],
  data() {
    console.log();
    return {};
  },
  methods: {
    getItemImgSrc(item) {
      return `https://www.osrsbox.com/osrsbox-db/items-icons/${item.id}.png`;
    },
  },
};
</script>

<style lang="scss">
.item-details {
  position: relative;
  bottom: 38px;
}

.item-detail {
  font-size: 13px;
  display: inline-block;
  padding: 3px;
}
</style>