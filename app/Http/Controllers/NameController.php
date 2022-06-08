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
 static $HOME = "home";
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
 static $OFFER = "offer";
 //P
 static $PAYMENT = "payment";
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

 //CONTROLLER
 static $ADMIN_CONTROLLERS_ADMIN_HOME_PAGE = "admin.adminhome";


 //CATEGORY
 static $ADMIN_CONTROLLERS_ADD_CATEGORY = "form.addcategory";
 static $ADMIN_CONTROLLERS_ALL_CATEGORY = "form.allcategory";
 static $ADMIN_CONTROLLERS_Edit_CATEGORY = "form.editcategory";

 static $SP_SELECT_ROOT_CATEGORY_NAME = "exec sp_select_root_category_name";
 static $SP_SELECT_ALL_CATEGORY = "exec sp_select_all_category";
 static $SP_UPDATE_CATEGORY_STATUS = "exec sp_update_category_status";


 //PRODUCT
 static $ADMIN_CONTROLLERS_ADD_PRODUCT = "form.addproduct";
 static $ADMIN_CONTROLLERS_ALL_PRODUCT = "form.allproduct";
 static $ADMIN_CONTROLLERS_EDIT_PRODUCT = "form.editproduct";
 static $SP_SELECT_ALL_PRODUCT = "exec sp_select_all_product";

 static $ADMIN_CONTROLLERS_IMPORT_PRODUCT = "form.addImportProduct";
 static $ADMIN_CONTROLLERS_EDIT_IMPORT = "form.editImportProduct";

 static $ADMIN_CONTROLLERS_IMPORT_STOCK = "form.importstock";
 static $SP_SELECT_ALL_STOCK = "exec sp_select_stock";
 static $SP_INSERT_STOCK = "exec sp_insert_stock";
 

//PAYMENT
static $ADMIN_CONTROLLERS_PAYMENT_PAGE = "form.allpayment";
static $SP_SELECT_PAYMENT_MODE = "exec sp_select_payment_mode";
static $SP_INSERT_PAYMENT_MODE = "exec sp_insert_payment_mode";

//OFFER
static $ADMIN_CONTROLLERS_OFFER_PAGE = "form.alloffer";
static $SP_SELECT_OFFERS_DETAILS = "exec sp_select_offers_details";
static $SP_INSERT_OFFERS_DETAILS = "exec sp_insert_offers_details";


 //CUSTOMER
 static $ADMIN_CUSTOMER = "admin.customer";

//FEEDBACK
static $ADMIN_FEEDBACK = "admin.feedback";

//LATEST_ORDER
 static $ADMIN_LATEST_ORDER = "admin.lastestorder";

 //UNIT
 static $SP_SELECT_ALL_UNIT="exec sp_select_unit";

 //SUPPLIERS
static $SP_SELECT_ALL_SUPPLIER = "exec sp_select_suppliers";


// PROFILE
static $ADMIN_CONTROLLERS_ADD_PROFILE = "admin.adminprofile";
static $SP_SELECT_ALL_MANAGERS = "exec sp_select_manager_name";
}