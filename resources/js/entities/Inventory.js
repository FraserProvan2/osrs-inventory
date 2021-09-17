
import newInventory from '../../new.json';

export default class Inventory {
    constructor (obj = false) {
        if (!obj) obj = newInventory;
        this.inventory = obj.inventory;
        this.equipment = obj.equipment;
        this.additionalFilteredItems = obj.additionalFilteredItems;
        this.name = obj.name;
        this.notes = obj.notes;
        this.spellBook = obj.spellBook;
        this.unorderedHighlight = obj.unorderedHighlight;
        this.rune_pouch = obj.rune_pouch;
    }

    getInventory() {
        return this.inventory;
    }
    getEquipment() {
        return this.equipment;
    }
    getRunePouch() {
        return this.rune_pouch;
    }
    getNotes() {
        return this.notes;
    }
    getSpellBook() {
        return this.spellBook;
    }
    getAdditionalFilteredItems() {
        return this.additionalFilteredItems;
    }
    getInventJSON() {
        return JSON.stringify(this);
    }

    setItemByKey(item, key) {
        const section = key.split(".")[0];
        const index = key.split(".")[1];
        this[section][index] = item;

        return this;
    }
    setNotes(newNotes) {
        this.notes = newNotes;
    }
}