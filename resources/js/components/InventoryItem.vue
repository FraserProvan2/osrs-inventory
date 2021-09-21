<template>
  <span
    class="grid-item"
    :class="(this.item.id != -1) ? 'osrstooltip' : ''"
    :id='this.item.id'
  >
    <img :src="getItemImgSrc(item)" alt="" />
    <div class="item-details">
      <div class="item-detail">
        <div v-if="this.item.quantity && this.item.quantity > 1">
          {{ this.item.quantity }}
        </div>
      </div>
      <div class="item-detail">
        <div id="fuzzy" v-if="this.item.fuzzy">*</div>
      </div>
    </div>
  </span>
</template>

<script>
export default {
  props: ["item"],
  data() {
    return {};
  },
  methods: {
    getItemImgSrc(item) {
      if (item.id != -1) {
        return `https://www.osrsbox.com/osrsbox-db/items-icons/${item.id}.png`;
      }
    },
  },
};
</script>