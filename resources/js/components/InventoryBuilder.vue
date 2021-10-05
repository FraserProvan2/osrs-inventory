<template>
  <div class="w-100">
    <!-- Controls -->
    <div class="d-flex mb-4">
      <button class="btn btn-primary mx-1 py-2 flex-fill" @click="exportInvent">
        <i class="fa fa-copy fa-lg"></i>
      </button>
      <button
        class="btn btn-success mx-1 py-2 w-25"
        v-if="this.edit"
        @click="save"
      >
        <i class="fa fa-save fa-lg"></i>
      </button>
      <button
        class="btn btn-danger mx-1 py-2 w-25"
        v-if="this.edit"
        @click="destroy"
      >
        <i class="fa fa-trash fa-lg"></i>
      </button>
    </div>

    <!-- Unsaved changes message -->
    <div
      class="text-center text-warning small mb-2"
      v-if="this.unsaved && this.edit"
    >
      <i class="fa fa-exclamation-circle"></i> You have unsaved changes
    </div>

    <div class="row">
      <div class="col-lg-6">
        <!-- Equipment -->
        <div class="mb-3">
          <div class="text-center mb-2">
            <h5>Equipment</h5>
            <div class="grid-row">
              <inventory-item
                :item="invent.getEquipment()[0]"
                @click.native="
                  itemClick(invent.getEquipment()[0], 'equipment.0')
                "
              />
            </div>
            <div class="grid-row">
              <inventory-item
                :item="invent.getEquipment()[1]"
                @click.native="
                  itemClick(invent.getEquipment()[1], 'equipment.1')
                "
              />
              <inventory-item
                :item="invent.getEquipment()[2]"
                @click.native="
                  itemClick(invent.getEquipment()[2], 'equipment.2')
                "
              />
              <inventory-item
                :item="invent.getEquipment()[13]"
                @click.native="
                  itemClick(invent.getEquipment()[13], 'equipment.13')
                "
              />
            </div>
            <div class="grid-row">
              <inventory-item
                :item="invent.getEquipment()[3]"
                @click.native="
                  itemClick(invent.getEquipment()[3], 'equipment.3')
                "
              />
              <inventory-item
                :item="invent.getEquipment()[4]"
                @click.native="
                  itemClick(invent.getEquipment()[4], 'equipment.4')
                "
              />
              <inventory-item
                :item="invent.getEquipment()[5]"
                @click.native="
                  itemClick(invent.getEquipment()[5], 'equipment.5')
                "
              />
            </div>
            <div class="grid-row">
              <inventory-item
                :item="invent.getEquipment()[7]"
                @click.native="
                  itemClick(invent.getEquipment()[7], 'equipment.7')
                "
              />
            </div>
            <div class="grid-row">
              <inventory-item
                :item="invent.getEquipment()[9]"
                @click.native="
                  itemClick(invent.getEquipment()[9], 'equipment.9')
                "
              />
              <inventory-item
                :item="invent.getEquipment()[10]"
                @click.native="
                  itemClick(invent.getEquipment()[10], 'equipment.10')
                "
              />
              <inventory-item
                :item="invent.getEquipment()[12]"
                @click.native="
                  itemClick(invent.getEquipment()[12], 'equipment.12')
                "
              />
            </div>
          </div>
        </div>

        <!-- Rune Pouch -->
        <div class="mb-3" v-if="this.hasRunePouch">
          <h5 class="text-center">Rune Pouch</h5>
          <div class="grid-row">
            <inventory-item
              :item="invent.getRunePouch()[0]"
              @click.native="
                itemClick(invent.getRunePouch()[0], 'rune_pouch.0')
              "
            />
            <inventory-item
              :item="invent.getRunePouch()[1]"
              @click.native="
                itemClick(invent.getRunePouch()[1], 'rune_pouch.1')
              "
            />
            <inventory-item
              :item="invent.getRunePouch()[2]"
              @click.native="
                itemClick(invent.getRunePouch()[2], 'rune_pouch.2')
              "
            />
          </div>
        </div>

        <!-- Spell Book -->
        <div class="mb-3">
          <h5 class="text-center">Spell Book</h5>
          <div class="grid-row" v-if="this.showSpellBookChooser == false">
            <div class="grid-item">
              <img
                :src="`/img/spellbook-icons/${invent.getSpellBook()}.png`"
                @click="spellBookClick"
              />
            </div>
          </div>
          <div class="grid-row" v-if="this.edit && this.showSpellBookChooser">
            <div class="grid-item" @click="updateSpellBook(0)">
              <img :src="`/img/spellbook-icons/0.png`" />
            </div>
            <div class="grid-item" @click="updateSpellBook(1)">
              <img :src="`/img/spellbook-icons/1.png`" />
            </div>
            <div class="grid-item" @click="updateSpellBook(2)">
              <img :src="`/img/spellbook-icons/2.png`" />
            </div>
            <div class="grid-item" @click="updateSpellBook(3)">
              <img :src="`/img/spellbook-icons/3.png`" />
            </div>
          </div>
        </div>

        <!-- Notes -->
        <div class="mb-3">
          <h5 class="text-center">Notes</h5>
          <textarea
            class="notes p-2"
            name="notes"
            rows="7"
            cols="50"
            v-model="notes"
            :readonly="!this.edit"
            @keyup="updateNote()"
          >
          </textarea>
        </div>
      </div>
      <div class="col-lg-6">
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
              @click.native="
                itemClick(invent.getInventory()[10], 'inventory.10')
              "
            />
            <inventory-item
              :item="invent.getInventory()[11]"
              @click.native="
                itemClick(invent.getInventory()[11], 'inventory.11')
              "
            />
          </div>
          <div class="grid-row">
            <inventory-item
              :item="invent.getInventory()[12]"
              @click.native="
                itemClick(invent.getInventory()[12], 'inventory.12')
              "
            />
            <inventory-item
              :item="invent.getInventory()[13]"
              @click.native="
                itemClick(invent.getInventory()[13], 'inventory.13')
              "
            />
            <inventory-item
              :item="invent.getInventory()[14]"
              @click.native="
                itemClick(invent.getInventory()[14], 'inventory.14')
              "
            />
            <inventory-item
              :item="invent.getInventory()[15]"
              @click.native="
                itemClick(invent.getInventory()[15], 'inventory.15')
              "
            />
          </div>
          <div class="grid-row">
            <inventory-item
              :item="invent.getInventory()[16]"
              @click.native="
                itemClick(invent.getInventory()[16], 'inventory.16')
              "
            />
            <inventory-item
              :item="invent.getInventory()[17]"
              @click.native="
                itemClick(invent.getInventory()[17], 'inventory.17')
              "
            />
            <inventory-item
              :item="invent.getInventory()[18]"
              @click.native="
                itemClick(invent.getInventory()[18], 'inventory.18')
              "
            />
            <inventory-item
              :item="invent.getInventory()[19]"
              @click.native="
                itemClick(invent.getInventory()[19], 'inventory.19')
              "
            />
          </div>
          <div class="grid-row">
            <inventory-item
              :item="invent.getInventory()[20]"
              @click.native="
                itemClick(invent.getInventory()[20], 'inventory.20')
              "
            />
            <inventory-item
              :item="invent.getInventory()[21]"
              @click.native="
                itemClick(invent.getInventory()[21], 'inventory.21')
              "
            />
            <inventory-item
              :item="invent.getInventory()[22]"
              @click.native="
                itemClick(invent.getInventory()[22], 'inventory.22')
              "
            />
            <inventory-item
              :item="invent.getInventory()[23]"
              @click.native="
                itemClick(invent.getInventory()[23], 'inventory.23')
              "
            />
          </div>
          <div class="grid-row">
            <inventory-item
              :item="invent.getInventory()[24]"
              @click.native="
                itemClick(invent.getInventory()[24], 'inventory.24')
              "
            />
            <inventory-item
              :item="invent.getInventory()[25]"
              @click.native="
                itemClick(invent.getInventory()[25], 'inventory.25')
              "
            />
            <inventory-item
              :item="invent.getInventory()[26]"
              @click.native="
                itemClick(invent.getInventory()[26], 'inventory.26')
              "
            />
            <inventory-item
              :item="invent.getInventory()[27]"
              @click.native="
                itemClick(invent.getInventory()[27], 'inventory.27')
              "
            />
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
              <a
                class="text-danger small"
                v-if="edit"
                @click="removeAdditionalItem(index)"
                >(remove)</a
              >
            </li>
            <li class="unstyled py-0 text-success" v-if="edit">
              <button
                class="btn btn-sm btn-success mt-2 px-3"
                @click="itemClick(null, 'additional')"
              >
                Add Item
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <b-modal ref="edit-modal" hide-footer :title="this.getModalTitle()">
      <div class="d-block">
        <div
          class="row mb-3"
          v-if="
            this.editingItemKey != 'additional' && this.editingItem.id != -1
          "
        >
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-text">Qty</span>
              <input
                type="number"
                class="form-control"
                v-model="pendingQuantity"
                :disabled="this.editingItem.id == -1"
                @change="updateFuzzyOrQty()"
              />
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="form-check mt-2">
              <input
                id="fuzzy-check"
                class="form-check-input"
                type="checkbox"
                :checked="this.editingItem.fuzzy"
                v-model="pendingFuzzy"
                :disabled="this.editingItem.id == -1"
                @change="updateFuzzyOrQty()"
              />
              <label class="form-check-label" for="fuzzy-check"> Fuzzy </label>
            </div>
          </div>
          <div class="col-md-2" v-if="this.editingItem.id != -1">
            <button class="btn btn-danger w-100" @click="removeItem()">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </div>
        </div>

        <h6
          v-if="
            this.editingItemKey != 'additional' && this.editingItem.id != -1
          "
        >
          Change item
        </h6>
        <input
          class="form-control mb-1"
          type="text"
          placeholder="Search Items"
          v-model="itemSearch"
          @keyup="searchItems()"
        />
        <div class="grid-row my-2" v-if="this.itemSearchResult">
          <inventory-item
            v-for="(item, index) in this.itemSearchResult"
            :key="index"
            :item="item"
            @click.native="updateItem(item)"
          />
        </div>
      </div>
    </b-modal>
  </div>
</template>

<script>
import ItemIndex from "../../items.json";
import Inventory from "../entities/Inventory";
import Utils from "../Utils";

export default {
  props: ["id", "setup", "edit"],
  data() {
    return {
      invent: new Inventory(),
      itemSearch: "",
      itemSearchResult: false,
      hasRunePouch: false,
      editingItem: false,
      editingItemKey: false,
      notes: false,
      pendingFuzzy: false,
      pendingQuantity: false,
      showSpellBookChooser: false,
      unsaved: false,
    };
  },
  methods: {
    itemClick(item, key) {
      if (this.edit) {
        if (key == "additional") {
          this.editingItemKey = "additional";
          this.editingItem = {
            name: "Additional Items",
          };
          this.$refs["edit-modal"].show();
          return;
        }

        this.editingItem = item;
        this.pendingFuzzy = this.editingItem.fuzzy;
        this.pendingQuantity = this.editingItem.quantity;
        this.editingItemKey = key;
        this.$refs["edit-modal"].show();
      } else {
        window.open(this.getWikiLink(item), "_blank").focus();
      }
    },
    spellBookClick() {
      if (this.edit) this.showSpellBookChooser = true;
    },
    updateFuzzyOrQty() {
      this.unsaved = true;
      this.updateItem(
        this.editingItem,
        this.pendingQuantity,
        this.pendingFuzzy
      );
    },
    updateItem(item, quantity = 1, fuzzy = false) {
      this.unsaved = true;

      // Update object
      let itemData = {
        fuzzy,
        id: item.id,
        name: item.name,
        quantity,
        stackCompare: "None",
      };
      this.invent = this.invent.setItemByKey(itemData, this.editingItemKey);

      // update UI
      this.$refs["edit-modal"].hide();
      this.editingItem = itemData;
      this.pendingFuzzy = itemData.fuzzy;
      this.pendingQuantity = itemData.quantity;
      this.itemSearchResult = false;
      this.itemSearch = "";

      // reset
      this.checkForRunePouch();
      this.fireAlert(
        "success",
        "Success",
        this.editingItemKey == "additional"
          ? "Additional item added."
          : "Item updated."
      );
      this.$forceUpdate();
    },
    updateSpellBook(spellBookKey) {
      this.unsaved = true;
      this.showSpellBookChooser = false;
      this.invent.setSpellBook(spellBookKey);
      this.fireAlert("success", "Success", "Spell book updated.");
    },
    updateNote() {
      this.unsaved = true;
      this.invent.setNotes(this.notes);
    },
    removeItem() {
      this.unsaved = true;
      const newItem = new Inventory()["inventory"][0];
      this.invent.setItemByKey(newItem, this.editingItemKey);
      this.fireAlert("success", "Success", "Item removed.");
      this.$refs["edit-modal"].hide();
      this.$forceUpdate();
    },
    removeAdditionalItem(index) {
      this.unsaved = true;
      this.invent.removeAdditionalItem(index);
      this.fireAlert("success", "Success", "Additional item removed.");
      this.$forceUpdate();
    },
    save() {
      axios
        .post(`/inventories/${this.id}/update`, this.invent)
        .then(() => {
          this.unsaved = false;
          this.fireAlert("success", "Success", "Inventory Saved.");
        })
        .catch(() => {
          this.fireAlert("error", "Error", "Something went wrong.");
        });
    },
    destroy() {
      axios
        .get(`/inventories/${this.id}/destroy`, this.invent)
        .then((res) => {
          this.fireAlert("success", "Success", "Inventory Deleted. Redirecting in...");

          window.setTimeout(function () {
            window.location.href = "/inventories";
          }, 2000);
        })
        .catch(() => {
          this.fireAlert("error", "Error", "Something went wrong.");
        });
    },
    getModalTitle() {
      if (this.editingItemKey == "additional") return "Add additional item";
      if (this.editingItem.id == -1) return "Add item";
      return this.editingItem.name;
    },
    searchItems() {
      // Search term
      let result = Object.values(ItemIndex).filter((item) =>
        item.name.toLowerCase().includes(this.itemSearch.toLowerCase())
      );

      // Where not placeholder
      result = Object.values(result).filter(
        (item) => item.type !== "placeholder"
      );

      this.itemSearchResult = result.slice(0, 27);
    },
    checkForRunePouch() {
      this.invent.inventory.forEach((item) => {
        this.hasRunePouch = false;
        if (item.id == 12791 || item.id == 23650 || item.id == 24416) {
          this.hasRunePouch = true;
        }
      });
    },
    getWikiLink(item) {
      const BASE_URL = "https://oldschool.runescape.wiki/w/";
      let itemUrlName = item.name.split(" ").join("_");
      return BASE_URL + itemUrlName;
    },
    exportInvent() {
      const inventJson = JSON.stringify(this.invent);
      Utils.copyToClipboard(inventJson);
      console.log(inventJson);
      this.fireAlert("success", "Success", "Copied to clipboard.");
    },
    fireAlert(type, title, text) {
      this.$notify({ group: "all", title, type, text, duration: 2500 });
    },
  },
  mounted() {
    this.invent = new Inventory(this.setup);
    this.notes = this.invent.notes;
    this.checkForRunePouch();
  },
};
</script>