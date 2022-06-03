<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController
{
 // A
 static $ADD_CATEGORY = "addcategory";
 static $ADD_PRODUCT = "addproduct";
 static $ADMIN = "admin";
 //B
 //C
 static $CATEGORY = "category";
 static $CONTROLLER = "controller";
 static $CONTROLLERS = "controllers";
 static $CUSTOMMER = "custommer";
 //D
 //E
 static $EDIT_PRODUCT = "editproduct";

 //F
 static $FEEDBACK = "feedback";
 //G
 //H
 //I
 static $INFOMATION = "infomation";
 static $IMPORT_DAY = "importday";
 static $IMPORT_PROCUCT = "importproduct";
 //J
 //K
 //L
 static $LAYOUT = "layout";
 static $LAYOUTS = "layouts";
 static $LASTEST_ORDER = "lastestorder";
 //M
 //N
 static $NAME = "name";
 static $NAVIGATOR = "navigator";
 //O
 //P
 static $PRICE = "price";
 static $PRODUCER = "producer";
 static $PRODUCT = "product";
 //Q
 static $QUANTITY = "quantity";
 //R
 //S
 //T
 //U
 //V
 //W
 //X
 //Y
 //Z

 //Arlet
 static $IMPORT_FAIL = "Import Fail";
 static $IMPORT_SUCCESS = "Import Success!";

 //Views
 static $ADMIN_CONTROLLER = "admin.controller";
 static $ADMIN_CONTROLLERS_ADD_CATEGORY = "form.addcategory";
 static $ADMIN_CONTROLLERS_ADD_PRODUCT = "form.addproduct";
 static $ADMIN_CONTROLLERS_ALL_PRODUCT = "form.allproduct";
 static $ADMIN_CONTROLLERS_EDIT_PRODUCT = "form.editproduct";
 static $ADMIN_CONTROLLERS_IMPORT_PRODUCT = "form.importproduct";
 static $ADMIN_CUSTOMER = "admin.customer";
 static $ADMIN_FEEDBACK = "admin.feedback";
 static $ADMIN_LATEST_ORDER = "admin.lastestorder";
 static $ADMIN_CONTROLLERS_IMPORT_STOCK = "form.importstock";



 //Store producer

 //category
 static $SP_SELECT_ROOT_CATEGORY_NAME = "exec sp_select_root_category_name";
 static $SP_SELECT_ALL_CATEGORY = "exec sp_select_all_category";
 static $SP_UPDATE_CATEGORY_STATUS = "exec sp_update_category_status";
 //Product
 static $SP_SELECT_ALL_PRODUCT = "exec sp_select_all_product";
 //Unit
 static $SP_SELECT_ALL_UNIT="exec sp_select_unit";
 //Stock
 static $SP_SELECT_ALL_STOCK = "exec sp_select_stock";
 static $SP_INSERT_STOCK = "exec sp_insert_stock";
 //Suppliers
static $SP_SELECT_ALL_SUPPLIER = "exec sp_select_suppliers";



 

}
