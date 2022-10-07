<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $manageMain = Permission::create(['name'=>'main','display_name'=>'Main','route'=>'index','module'=>'index','as'=>'index','icon'=>'fas fa-home','parent'=>'0','parent_original'=>'0','sidebar_link'=>'1','appear'=>'1','ordering'=>'1',]);
       $manageMain->parent_show = $manageMain->id;$manageMain->save();

       //product category

       $manageProductCategories = Permission::create(['name'=>'manage_product_categories','display_name'=>'Categories','route'=>'product_categories','module'=>'product_categories','as'=>'product_categories.index','icon'=>'fas fa-file-archive','parent'=>'0','parent_original'=>'0','sidebar_link'=>'1','appear'=>'1','ordering'=>'5',]);
       $manageProductCategories->parent_show = $manageProductCategories->id;$manageProductCategories->save();
       $showProductCategories = Permission::create(['name'=>'show_product_categories','display_name'=>'Categories','route'=>'product_categories','module'=>'product_categories','as'=>'product_categories.index','icon'=>'fas fa-file-archive','parent'=> $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'parent_original'=> $manageProductCategories->id,'sidebar_link'=>'1','appear'=>'1',]);
       $createProductCategories = Permission::create(['name'=>'create_product_categories','display_name'=>'Create Category','route'=>'product_categories','module'=>'product_categories','as'=>'product_categories.create','icon'=>'fa-solid fa-circle-plus','parent'=> $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'parent_original'=> $manageProductCategories->id,'sidebar_link'=>'1','appear'=>'0',]);
       $displayProductCategories = Permission::create(['name'=>'display_product_categories','display_name'=>'Show Category','route'=>'product_categories','module'=>'product_categories','as'=>'product_categories.show','icon'=>'fa-sharp fa-solid fa-display','parent'=> $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'parent_original'=> $manageProductCategories->id,'sidebar_link'=>'1','appear'=>'0',]);
       $updateProductCategories = Permission::create(['name'=>'update_product_categories','display_name'=>'Update Category','route'=>'product_categories','module'=>'product_categories','as'=>'product_categories.edit','icon'=>'fa-solid fa-square-pen','parent'=> $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'parent_original'=> $manageProductCategories->id,'sidebar_link'=>'1','appear'=>'0',]);
       $deleteProductCategories = Permission::create(['name'=>'delete_product_categories','display_name'=>'Delete Category','route'=>'product_categories','module'=>'product_categories','as'=>'product_categories.destroy','icon'=>'fa-solid fa-trash','parent'=> $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'parent_original'=> $manageProductCategories->id,'sidebar_link'=>'1','appear'=>'0',]);

    }
}
//<i class="fa-sharp fa-solid fa-plus"></i>
//<font-awesome-icon icon="fa-sharp fa-solid fa-octagon-plus" />
//<i class="fa-sharp fa-solid fa-display"></i>
//<i class="fa-solid fa-square-pen"></i>
//<i class="fa-solid fa-circle-plus"></i>
//<i class="fa-solid fa-trash"></i>
