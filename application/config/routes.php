<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['login-submit-data']='welcome/loginData';
//Dashboard
$route['dashboard']='welcome/Dashboard';

//manager module admin side 
$route['add-new-manager']='welcome/addNewManager';
$route['add-manager-data']='welcome/addNewManagerData';
$route['manager-list']='welcome/managerList';
$route['delete-manger/:any']='welcome/deletManager';
$route['edit-manager/:any']='welcome/editManager';
$route['edit-manager-data/:any']='welcome/editManagerData';
//client module admin side 
$route['add-new-client']='welcome/addNewClient';
$route['add-client-data']='welcome/addNewClientData';
$route['client-list']='welcome/ClientList';
$route['delete-client/:any']='welcome/dltClient';
$route['edit-client/:any']='welcome/EditClient';
$route['edit-client-data/:any']='welcome/EditClientData';

//client auth and passsetup
$route['setup-password']='welcome/newClientPassSetup';
$route['new-password-data/:any']='welcome/newClientPassSetupData';

//manage jobs module 
$route['add-new-job']='welcome/addNewJob';
$route['add-new-job-data']='welcome/addNewJobData';
$route['job-list']='welcome/jobList';
$route['edit-job/:any']='welcome/jobEditView';
$route['update-job-data/:any']='welcome/jobEditData';
$route['delete-job/:any']='welcome/DeletJob';
//-- admin job view
$route['admin-view-job/:any']='welcome/adminJobView';
$route['mark-sign-on-complete/:any']='welcome/signOnComplete';
//----admin job view material delivery
$route['add-material-delivery-data/:any']='welcome/materialDeliveryData';
//----admin installation images upload
$route['add-installation-imgs-data/:any']='welcome/installationImgUpload';
//----admin manager review
$route['add-manager-review-date-data/:any']='welcome/managerfainalReviewDate';
//----admin mark job close
$route['mark-job-close-complete/:any']='welcome/managerMarkJobClose';


//client dashboard
$route['client-dashboard']='client/clientDashboard';
$route['client-view-job/:any']='client/clientJobView';
//--job detail fainancing
$route['mark-fainancing-will-be-financed-by-us/:any']='client/markFinancingUs';
$route['insurance-detailed-filled/:any']='client/markFinancingAlreadyFormData';
//---job additional questions
$route['additional-question-data/:any']='client/AdditionalQuestions';
//---job feedback
$route['client-feed-back/:any']='client/SubmitFeedbackData';


$route['logout'] = 'welcome/Logout';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
