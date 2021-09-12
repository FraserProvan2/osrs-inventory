export default class Inventory {
    constructor (obj = false) {
        this.inventory = obj.inventory;
        this.equipment = obj.equipment;
        this.additionalFilteredItems = obj.additionalFilteredItems;
        this.name = obj.name;
        this.notes = obj.notes;
        this.spellBook = obj.spellBook;
        this.unorderedHighlight = obj.unorderedHighlight;
    }

    getInventory() {
        return this.inventory;
    }

    getEquipment() {
        return this.equipment;
    }
}