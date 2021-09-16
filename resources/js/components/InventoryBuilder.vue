<template>
  <div class="w-100">
    <!-- Inventory -->
    <div class="mb-3">
      <h5 class="text-center">Inventory</h5>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[0]"
          @click.native="itemClick(invent.getInventory()[0], 'inventory.0')"
        />
        <inventory-item
          :item="invent.getInventory()[1]"
          @click.native="itemClick(invent.getInventory()[1], 'inventory.1')"
        />
        <inventory-item
          :item="invent.getInventory()[2]"
          @click.native="itemClick(invent.getInventory()[2], 'inventory.2')"
        />
        <inventory-item
          :item="invent.getInventory()[3]"
          @click.native="itemClick(invent.getInventory()[3], 'inventory.3')"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[4]"
          @click.native="itemClick(invent.getInventory()[4], 'inventory.4')"
        />
        <inventory-item
          :item="invent.getInventory()[5]"
          @click.native="itemClick(invent.getInventory()[5], 'inventory.5')"
        />
        <inventory-item
          :item="invent.getInventory()[6]"
          @click.native="itemClick(invent.getInventory()[6], 'inventory.6')"
        />
        <inventory-item
          :item="invent.getInventory()[7]"
          @click.native="itemClick(invent.getInventory()[7], 'inventory.7')"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[8]"
          @click.native="itemClick(invent.getInventory()[8], 'inventory.8')"
        />
        <inventory-item
          :item="invent.getInventory()[9]"
          @click.native="itemClick(invent.getInventory()[9], 'inventory.9')"
        />
        <inventory-item
          :item="invent.getInventory()[10]"
          @click.native="itemClick(invent.getInventory()[10], 'inventory.10')"
        />
        <inventory-item
          :item="invent.getInventory()[11]"
          @click.native="itemClick(invent.getInventory()[11], 'inventory.11')"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[12]"
          @click.native="itemClick(invent.getInventory()[12], 'inventory.12')"
        />
        <inventory-item
          :item="invent.getInventory()[13]"
          @click.native="itemClick(invent.getInventory()[13], 'inventory.13')"
        />
        <inventory-item
          :item="invent.getInventory()[14]"
          @click.native="itemClick(invent.getInventory()[14], 'inventory.14')"
        />
        <inventory-item
          :item="invent.getInventory()[15]"
          @click.native="itemClick(invent.getInventory()[15], 'inventory.15')"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[16]"
          @click.native="itemClick(invent.getInventory()[16], 'inventory.16')"
        />
        <inventory-item
          :item="invent.getInventory()[17]"
          @click.native="itemClick(invent.getInventory()[17], 'inventory.17')"
        />
        <inventory-item
          :item="invent.getInventory()[18]"
          @click.native="itemClick(invent.getInventory()[18], 'inventory.18')"
        />
        <inventory-item
          :item="invent.getInventory()[19]"
          @click.native="itemClick(invent.getInventory()[19], 'inventory.19')"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[20]"
          @click.native="itemClick(invent.getInventory()[20], 'inventory.20')"
        />
        <inventory-item
          :item="invent.getInventory()[21]"
          @click.native="itemClick(invent.getInventory()[21], 'inventory.21')"
        />
        <inventory-item
          :item="invent.getInventory()[22]"
          @click.native="itemClick(invent.getInventory()[22], 'inventory.22')"
        />
        <inventory-item
          :item="invent.getInventory()[23]"
          @click.native="itemClick(invent.getInventory()[23], 'inventory.23')"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[24]"
          @click.native="itemClick(invent.getInventory()[24], 'inventory.24')"
        />
        <inventory-item
          :item="invent.getInventory()[25]"
          @click.native="itemClick(invent.getInventory()[25], 'inventory.25')"
        />
        <inventory-item
          :item="invent.getInventory()[26]"
          @click.native="itemClick(invent.getInventory()[26], 'inventory.26')"
        />
        <inventory-item
          :item="invent.getInventory()[27]"
          @click.native="itemClick(invent.getInventory()[27], 'inventory.27')"
        />
      </div>
    </div>

    <!-- Rune Pouch -->
    <div class="mb-3" v-if="invent.getRunePouch()">
      <h5 class="text-center">Rune Pouch</h5>
      <div class="grid-row">
        <inventory-item
          :item="invent.getRunePouch()[0]"
          @click.native="itemClick(invent.getRunePouch()[0], 'pouch.0')"
        />
        <inventory-item
          :item="invent.getRunePouch()[1]"
          @click.native="itemClick(invent.getRunePouch()[1], 'pouch.1')"
        />
        <inventory-item
          :item="invent.getRunePouch()[2]"
          @click.native="itemClick(invent.getRunePouch()[2], 'pouch.2')"
        />
      </div>
    </div>

    <!-- Equipment -->
    <div class="mb-3">
      <div class="text-center mb-2">
        <h5>Equipment</h5>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[0]"
            @click.native="itemClick(invent.getEquipment()[0], 'equipment.0')"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[1]"
            @click.native="itemClick(invent.getEquipment()[1], 'equipment.1')"
          />
          <inventory-item
            :item="invent.getEquipment()[2]"
            @click.native="itemClick(invent.getEquipment()[2], 'equipment.2')"
          />
          <inventory-item
            :item="invent.getEquipment()[13]"
            @click.native="itemClick(invent.getEquipment()[13], 'equipment.13')"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[3]"
            @click.native="itemClick(invent.getEquipment()[3], 'equipment.3')"
          />
          <inventory-item
            :item="invent.getEquipment()[4]"
            @click.native="itemClick(invent.getEquipment()[4], 'equipment.4')"
          />
          <inventory-item
            :item="invent.getEquipment()[5]"
            @click.native="itemClick(invent.getEquipment()[5], 'equipment.5')"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[7]"
            @click.native="itemClick(invent.getEquipment()[7], 'equipment.7')"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[9]"
            @click.native="itemClick(invent.getEquipment()[9], 'equipment.9')"
          />
          <inventory-item
            :item="invent.getEquipment()[10]"
            @click.native="itemClick(invent.getEquipment()[10], 'equipment.10')"
          />
          <inventory-item
            :item="invent.getEquipment()[12]"
            @click.native="itemClick(invent.getEquipment()[12], 'equipment.12')"
          />
        </div>
      </div>
    </div>

    <!-- Spell Book -->
    <div class="mb-3">
      <h5 class="text-center">Spell Book</h5>
      <div class="grid-row">
        <div class="grid-item pt-1">
          <img :src="`/img/spellbook-icons/${invent.getSpellBook()}.png`" />
        </div>
      </div>
    </div>

    <!-- Additional Filtered Items -->
    <div class="mb-3">
      <h5 class="text-center">Additional Filtered Items</h5>
      <ul class="list-group list-unstyled text-center">
        <li
          class="unstyled py-0"
          v-for="(item, index) in this.invent.getAdditionalFilteredItems()"
          :key="index"
        >
          <a :href="getWikiLink(item)" target="_blank">{{ item.name }}</a>
        </li>
      </ul>
    </div>

    <!-- Notes -->
    <div class="mb-3">
      <h5 class="text-center">Notes</h5>
      <textarea
        class="notes"
        name="notes"
        rows="7"
        cols="50"
        v-model="invent.getNotes()"
        :readonly="!this.isEdit"
      >
      </textarea>
    </div>

    <!-- Modal -->
    <b-modal
      ref="edit-modal"
      hide-footer
      :title="`Edit Item - ${this.editingItem.name}`"
    >
      <h6>Update existing item</h6>
      <div class="d-block">
        <div class="row">
          <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text">Qty</span>
                <input 
                  type="number"
                  class="form-control"
                  v-model="pendingQuantity"
                >
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-check mt-2">
              <input
                id="fuzzy-check"
                class="form-check-input"
                type="checkbox"
                :checked="this.editingItem.fuzzy"
                v-model="pendingFuzzy"
              />
              <label class="form-check-label" for="fuzzy-check">
                Fuzzy
              </label>
            </div>
          </div>
        </div>
        <br>

        <h6>Change item</h6>
        <input class="form-control mb-1" type="text" placeholder="Search Items" v-model="itemSearch" @keyup="searchItems()">
        <button type="submit" class="btn btn-primary" @click="updateItem()">Update Item</button>
      </div>
    </b-modal>
  </div>
</template>

<script>
import zulrahExample from "../../new.json";
import vorkathExample from "../../vorkath.json";
import Inventory from "../entities/Inventory";

export default {
  data() {
    return {
      invent: new Inventory(vorkathExample),
      isEdit: true,
      itemSearch: "",
      editingItem: false,
      editingItemKey: false,
      pendingFuzzy: false,
      pendingQuantity: false,
    };
  },
  methods: {
    async hasRunePouch(inventory) {
      inventory.forEach((item) => {
        if (item.id == 12791) {
          return true;
        }
      });

      return false;
    },
    getWikiLink(item) {
      const BASE_URL = "https://oldschool.runescape.wiki/w/";
      let itemUrlName = item.name.split(" ").join("_");
      return BASE_URL + itemUrlName;
    },
    itemClick(item, key) {
      if (this.isEdit) {
        this.editingItem = item;
        this.pendingFuzzy = this.editingItem.fuzzy;
        this.pendingQuantity = this.editingItem.quantity;
        this.editingItemKey = key;
        this.$refs["edit-modal"].show();
      } else {
        window.open(this.getWikiLink(item), "_blank").focus();
      }
    },
    updateItem() {
      console.log('updating: ' + this.editingItemKey);
      console.log('fuzzy:' + this.pendingFuzzy);
      console.log('quantity:' + this.pendingQuantity);
    },
    searchItems() {
      console.log(this.itemSearch);
    }
  },
};
</script>

<style lang="scss">
.grid-row {
  width: 100%;
  display: flex;
  justify-content: center;
}

.grid-item {
  height: 36px;
  width: 45px;
  margin: 1px;
  background-color: #444;

  & > img {
    margin: auto;
    display: flex;
    margin-top: 2px;
  }
}

.grid-item:hover {
  background-color: #616060;
}

.notes {
  width: 100%;
}
</style>