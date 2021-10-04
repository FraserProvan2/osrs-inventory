<?php

namespace App\Services;

class InventoryService
{

    /**
     * Valids json 
     * 
     * @param JSON $json
     * @return bool
     */
    static public function validJsonImport($json)
    {
        $import_data = json_decode($json);
        if (
            json_last_error() != JSON_ERROR_NONE ||
            !isset($import_data->inventory) ||
            !isset($import_data->equipment)
            ) {
            return false;
        }

        return true;
    }

    /**
     * Merge import onto fresh inventory, or just return fresh inventory
     * 
     * @param JSON $json
     * @return JSON
     */
    static public function mergedImportedOrNew($json)
    {
        $fresh_inventory = file_get_contents('../resources/new.json');
        if ($json == null) {
            return $fresh_inventory;
        }
        
        $import = json_decode($json, true);
        $inventory = json_decode($fresh_inventory, true);

        // Merging import onto fresh 
        foreach($inventory as $section => $contents) {
            if (isset($import[$section])) {
                $inventory[$section] = $import[$section];
            }
        }

        return $json;
    }
}