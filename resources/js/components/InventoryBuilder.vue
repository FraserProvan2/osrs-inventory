<template>
    <div class="w-100">
        <!-- Inventory -->
        <div class="mb-3">
            <h5 class="text-center">Inventory</h5>
           <!-- {{ invent.getInventory().toString() }} -->
           <div class="grid-row">
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
           </div>
            <div class="grid-row">
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
           </div>
            <div class="grid-row">
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
           </div>
            <div class="grid-row">
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
           </div>
            <div class="grid-row">
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
           </div>
            <div class="grid-row">
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
           </div>
            <div class="grid-row">
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
               <div class="grid-item"></div>
           </div>
        </div>

        <!-- Rune Pouch -->
        <div class="mb-3">
            <h5 class="text-center">Rune Pouch</h5>
            <div class="grid-row">
                <div class="grid-item"></div>
                <div class="grid-item"></div>
                <div class="grid-item"></div>
            </div>
        </div>

        <!-- Equipment -->
        <div class="mb-3">
            <div class="text-center mb-2">
                <h5>Equipment</h5>
                <div class="grid-row">
                    <div class="grid-item"></div>
                </div>
                <div class="grid-row">
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                </div>
                <div class="grid-row">
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                </div>
                <div class="grid-row">
                    <div class="grid-item"></div>
                </div>
                <div class="grid-row">
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                </div>
            </div>
        </div>

        <!-- Spell Book -->
        <div class="mb-3">
            <h5 class="text-center">Spell Book</h5>
            <div class="grid-row">
                <div class="grid-item"></div>
            </div>
        </div>

        <!-- Additional Filtered Items -->
        <div class="mb-3">
            <h5 class="text-center">Additional Filtered Items</h5>
            <div class="grid-row">
                <div class="grid-item"></div>
                <div class="grid-item"></div>
                <div class="grid-item"></div>
                <div class="grid-item"></div>
            </div>
        </div>

        <div class="mb-3">
            <h5 class="text-center">Notes</h5>
            <textarea class="notes" name="notes" rows="4" cols="50"></textarea>
        </div>

    </div>
</template>

<script>
import example from '../../zulrah.json';
import Inventory from '../entities/Inventory';

export default {
    data() {
        return {
            invent: new Inventory(example)
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style lang="scss" scoped>
.grid-row {
    width: 100%;
    display: flex;
    justify-content: center;
}

.grid-item {
    height: 45px;
    width: 45px;
    margin: 1px;
    background-color: #444;
}

.notes {
    width: 100%;
}
</style>