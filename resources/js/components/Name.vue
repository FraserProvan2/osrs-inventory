<template>
    <div class="w-75">
        <input v-if="this.edit"
            class="form-control mb-1"
            v-model="nameUI"
            @blur="action()"
        />
        <h4 v-else>
            {{ this.name }}
        </h4>
    </div>
</template>

<script>
export default {
  props: ["id", "name", "edit"],
  data() {
    return {
      nameUI: '',
    };
  },
  methods: {
    action() {
      axios.post(`/inventories/${this.id}/update-name`, {
            name: this.nameUI
        })
        .then(res => {
            console.log(res);
        })
        .catch(() => {
    
        });
    },
  },
  mounted() {
    this.nameUI = this.name
  },
};
</script>
