<template>
  <div class="w-100">
    <!-- Inventory -->
    <div class="mb-3">
      <h5 class="text-center">Inventory</h5>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[0]"
          @click.native="itemClick(invent.getInventory()[0])"
        />
        <inventory-item
          :item="invent.getInventory()[1]"
          @click.native="itemClick(invent.getInventory()[1])"
        />
        <inventory-item
          :item="invent.getInventory()[2]"
          @click.native="itemClick(invent.getInventory()[2])"
        />
        <inventory-item
          :item="invent.getInventory()[3]"
          @click.native="itemClick(invent.getInventory()[3])"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[4]"
          @click.native="itemClick(invent.getInventory()[4])"
        />
        <inventory-item
          :item="invent.getInventory()[5]"
          @click.native="itemClick(invent.getInventory()[5])"
        />
        <inventory-item
          :item="invent.getInventory()[6]"
          @click.native="itemClick(invent.getInventory()[6])"
        />
        <inventory-item
          :item="invent.getInventory()[7]"
          @click.native="itemClick(invent.getInventory()[7])"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[8]"
          @click.native="itemClick(invent.getInventory()[8])"
        />
        <inventory-item
          :item="invent.getInventory()[9]"
          @click.native="itemClick(invent.getInventory()[9])"
        />
        <inventory-item
          :item="invent.getInventory()[10]"
          @click.native="itemClick(invent.getInventory()[10])"
        />
        <inventory-item
          :item="invent.getInventory()[11]"
          @click.native="itemClick(invent.getInventory()[11])"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[12]"
          @click.native="itemClick(invent.getInventory()[12])"
        />
        <inventory-item
          :item="invent.getInventory()[13]"
          @click.native="itemClick(invent.getInventory()[13])"
        />
        <inventory-item
          :item="invent.getInventory()[14]"
          @click.native="itemClick(invent.getInventory()[14])"
        />
        <inventory-item
          :item="invent.getInventory()[15]"
          @click.native="itemClick(invent.getInventory()[15])"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[16]"
          @click.native="itemClick(invent.getInventory()[16])"
        />
        <inventory-item
          :item="invent.getInventory()[17]"
          @click.native="itemClick(invent.getInventory()[17])"
        />
        <inventory-item
          :item="invent.getInventory()[18]"
          @click.native="itemClick(invent.getInventory()[18])"
        />
        <inventory-item
          :item="invent.getInventory()[19]"
          @click.native="itemClick(invent.getInventory()[19])"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[20]"
          @click.native="itemClick(invent.getInventory()[20])"
        />
        <inventory-item
          :item="invent.getInventory()[21]"
          @click.native="itemClick(invent.getInventory()[21])"
        />
        <inventory-item
          :item="invent.getInventory()[22]"
          @click.native="itemClick(invent.getInventory()[22])"
        />
        <inventory-item
          :item="invent.getInventory()[23]"
          @click.native="itemClick(invent.getInventory()[23])"
        />
      </div>
      <div class="grid-row">
        <inventory-item
          :item="invent.getInventory()[24]"
          @click.native="itemClick(invent.getInventory()[24])"
        />
        <inventory-item
          :item="invent.getInventory()[25]"
          @click.native="itemClick(invent.getInventory()[25])"
        />
        <inventory-item
          :item="invent.getInventory()[26]"
          @click.native="itemClick(invent.getInventory()[26])"
        />
        <inventory-item
          :item="invent.getInventory()[27]"
          @click.native="itemClick(invent.getInventory()[27])"
        />
      </div>
    </div>

    <!-- Rune Pouch -->
    <div class="mb-3" v-if="invent.getRunePouch()">
      <h5 class="text-center">Rune Pouch</h5>
      <div class="grid-row">
        <inventory-item
          :item="invent.getRunePouch()[0]"
          @click.native="itemClick(invent.getRunePouch()[0])"
        />
        <inventory-item
          :item="invent.getRunePouch()[1]"
          @click.native="itemClick(invent.getRunePouch()[1])"
        />
        <inventory-item
          :item="invent.getRunePouch()[2]"
          @click.native="itemClick(invent.getRunePouch()[2])"
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
            @click.native="itemClick(invent.getEquipment()[0])"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[1]"
            @click.native="itemClick(invent.getEquipment()[1])"
          />
          <inventory-item
            :item="invent.getEquipment()[2]"
            @click.native="itemClick(invent.getEquipment()[2])"
          />
          <inventory-item
            :item="invent.getEquipment()[13]"
            @click.native="itemClick(invent.getEquipment()[13])"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[3]"
            @click.native="itemClick(invent.getEquipment()[3])"
          />
          <inventory-item
            :item="invent.getEquipment()[4]"
            @click.native="itemClick(invent.getEquipment()[4])"
          />
          <inventory-item
            :item="invent.getEquipment()[5]"
            @click.native="itemClick(invent.getEquipment()[5])"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[7]"
            @click.native="itemClick(invent.getEquipment()[7])"
          />
        </div>
        <div class="grid-row">
          <inventory-item
            :item="invent.getEquipment()[9]"
            @click.native="itemClick(invent.getEquipment()[9])"
          />
          <inventory-item
            :item="invent.getEquipment()[10]"
            @click.native="itemClick(invent.getEquipment()[10])"
          />
          <inventory-item
            :item="invent.getEquipment()[12]"
            @click.native="itemClick(invent.getEquipment()[12])"
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
      >
      </textarea>
    </div>
  </div>
</template>

<script>
import zulrahExample from "../../zulrah.json";
import vorkathExample from "../../vorkath.json";
import Inventory from "../entities/Inventory";

export default {
  data() {
    return {
      invent: new Inventory(zulrahExample),
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
    itemClick(item) {
      window.open(this.getWikiLink(item), "_blank").focus();
    },
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

.notes {
  width: 100%;
}
</style>