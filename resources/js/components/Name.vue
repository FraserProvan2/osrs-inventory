<template>
  <div class="d-flex w-75">
    <input
      v-if="this.show"
      class="form-control mb-1"
      v-model="nameUI"
      @blur="action()"
    />
    <h4 v-else>
      {{ this.name }}
    </h4>
    <span v-if="this.edit">
      <button
        v-if="!this.show"
        type="button"
        class="btn btn-sm btn-default"
        @click="show = true"
      >
        <i class="fa fa-pencil"></i>
      </button>
      <button
        v-else
        type="button"
        class="btn btn-success"
        @click="show = false"
      >
        <i class="fa fa-xs fa-save"></i>
      </button>
    </span>
  </div>
</template>

<script>
export default {
  props: ["id", "name", "edit"],
  data() {
    return {
      nameUI: "",
      show: false,
    };
  },
  methods: {
    action() {
      axios.post(`/inventories/${this.id}/update-name`, {
        name: this.nameUI,
      });
    },
  },
  mounted() {
    this.nameUI = this.name;
  },
};
</script>
