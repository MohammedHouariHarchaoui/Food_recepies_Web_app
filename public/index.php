<?php 

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


use app\core\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;
use app\controllers\AcceuilController;
use app\controllers\ContactController;
use app\controllers\NewsController;
use app\controllers\IdeeRecetteController;
use app\controllers\HealthyController;
use app\controllers\SaisonController;
use app\controllers\FeteController;
use app\controllers\NutritionController;
use app\controllers\RecetteController;
use app\controllers\AdminUsersController;
use app\controllers\AdminAdminUsersController;
use app\controllers\AdminRecettesController;
use app\controllers\AdminRecettesValidationController;
use app\controllers\AdminController;
use app\controllers\AdminNutritionsController;
use app\controllers\AdminNewsController;
use app\controllers\AdminParametresController;
use app\controllers\AdminUsersValidationController;



$config = [
    'userClass' => \app\models\User::class,
    'adminUserClass'=> \app\models\AdminUser::class,
    'db'=>[
        'dsn'=>$_ENV['DB_DSN'],
        'user'=>$_ENV['DB_USER'],
        'password'=>$_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__),$config);

$app->router->get('/TDW_PROJECT/public/',[AcceuilController::class,'acceuil']);

$app->router->get('/contact',[ContactController::class,'contact']);
$app->router->post('/contact',[ContactController::class,'contact']);


$app->router->get('/register',[AuthController::class,'register']);
$app->router->post('/register',[AuthController::class,'register']);
$app->router->get('/login',[AuthController::class,'login']);
$app->router->post('/login',[AuthController::class,'login']);
$app->router->get('/logout',[AuthController::class,'logout']);

$app->router->get('/profile',[AuthController::class,'profile']);
$app->router->get('/profile/propser_recette',[AuthController::class,'proposer_recette']);
$app->router->post('/profile/propser_recette',[AuthController::class,'proposer_recette']);
$app->router->get('/profile/recettes_proposees',[AuthController::class,'recettes_proposer']);

$app->router->get('/TDW_PROJECT/public/news',[NewsController::class,'news']);
$app->router->get('/news_view',[NewsController::class,'news_view']);

$app->router->get('/idee_recette',[IdeeRecetteController::class,'idee_recette']);
$app->router->post('/idee_recette',[IdeeRecetteController::class,'idee_recette']);
$app->router->get('/recette',[IdeeRecetteController::class,'recette']);
$app->router->post('/recette',[IdeeRecetteController::class,'recette']);

$app->router->post('/recette/notation',[IdeeRecetteController::class,'note']);

$app->router->get('/healthy',[HealthyController::class,'healthy']);
$app->router->post('/healthy',[HealthyController::class,'healthy']);
$app->router->get('/saison',[SaisonController::class,'saison']);
$app->router->post('/saison',[SaisonController::class,'saison']);
$app->router->get('/fete',[FeteController::class,'fete']);
$app->router->post('/fete',[FeteController::class,'fete']);
$app->router->get('/nutrition',[NutritionController::class,'nutrition']);
$app->router->get('/ingrediant',[NutritionController::class,'ingrediant']);
$app->router->get('/nutrition_recherche',[NutritionController::class,'recherche_simple']);

$app->router->get('/recettes',[RecetteController::class,'recettes']);
$app->router->get('/entrees',[RecetteController::class,'entrees']);
$app->router->get('/plats',[RecetteController::class,'plats']);
$app->router->get('/desserts',[RecetteController::class,'desserts']);
$app->router->get('/boissons',[RecetteController::class,'boissons']);
$app->router->get('/recherche_recettes_avancee',[RecetteController::class,'rechercheAvancee']);

$app->router->get('/admin',[AdminController::class,'login']);
$app->router->post('/admin',[AdminController::class,'login']);
$app->router->get('/admin/logout',[AdminController::class,'logout']);
$app->router->get('/admin/acceuil',[AdminController::class,'acceuil']);
$app->router->get('/admin/admin_users',[AdminAdminUsersController::class,'acceuil']);
$app->router->post('/admin/admin_users/add',[AdminAdminUsersController::class,'add']);
$app->router->get('/admin/admin_users/add',[AdminAdminUsersController::class,'add']);
$app->router->post('/admin/admin_users/edit',[AdminAdminUsersController::class,'edit']);
$app->router->get('/admin/admin_users/edit',[AdminAdminUsersController::class,'edit']);
$app->router->get('/admin/admin_users/delete',[AdminAdminUsersController::class,'delete']);

$app->router->get('/admin/users',[AdminUsersController::class,'acceuil']);
$app->router->post('/admin/users/add',[AdminUsersController::class,'add']);
$app->router->get('/admin/users/add',[AdminUsersController::class,'add']);
$app->router->post('/admin/users/edit',[AdminUsersController::class,'edit']);
$app->router->get('/admin/users/edit',[AdminUsersController::class,'edit']);
$app->router->get('/admin/users/delete',[AdminUsersController::class,'delete']);

$app->router->get('/admin/recettes',[AdminRecettesController::class,'acceuil']);
$app->router->get('/admin/recettes/add',[AdminRecettesController::class,'add']);
$app->router->post('/admin/recettes/add',[AdminRecettesController::class,'add']);
$app->router->post('/admin/recettes/edit',[AdminRecettesController::class,'edit']);
$app->router->get('/admin/recettes/edit',[AdminRecettesController::class,'edit']);
$app->router->get('/admin/recettes/delete',[AdminRecettesController::class,'delete']);
$app->router->get('/admin/recettes/view',[AdminRecettesController::class,'view']);

$app->router->get('/admin/recettes_validation',[AdminRecettesValidationController::class,'acceuil']);
$app->router->get('/admin/recettes_validation/valider',[AdminRecettesValidationController::class,'valider']);
$app->router->get('/admin/recettes_validation/delete',[AdminRecettesValidationController::class,'supprimer']);

$app->router->get('/admin/users_validation',[AdminUsersValidationController::class,'acceuil']);
$app->router->get('/admin/users_validation/valider',[AdminUsersValidationController::class,'valider']);
$app->router->get('/admin/users_validation/delete',[AdminUsersValidationController::class,'supprimer']);

$app->router->get('/admin/nutritions',[AdminNutritionsController::class,'acceuil']);
$app->router->get('/admin/nutritions/add',[AdminNutritionsController::class,'add']);
$app->router->post('/admin/nutritions/add',[AdminNutritionsController::class,'add']);
$app->router->post('/admin/nutritions/edit',[AdminNutritionsController::class,'edit']);
$app->router->get('/admin/nutritions/edit',[AdminNutritionsController::class,'edit']);
$app->router->get('/admin/nutritions/delete',[AdminNutritionsController::class,'delete']);
$app->router->get('/admin/nutritions/view',[AdminNutritionsController::class,'view']);


$app->router->get('/admin/news',[AdminNewsController::class,'acceuil']);
$app->router->get('/admin/news/add',[AdminNewsController::class,'add']);
$app->router->post('/admin/news/add',[AdminNewsController::class,'add']);
$app->router->post('/admin/news/edit',[AdminNewsController::class,'edit']);
$app->router->get('/admin/news/edit',[AdminNewsController::class,'edit']);
$app->router->get('/admin/news/delete',[AdminNewsController::class,'delete']);
$app->router->get('/admin/news/view',[AdminNewsController::class,'view']);

$app->router->get('/admin/parametres',[AdminParametresController::class,'acceuil']);
$app->router->get('/admin/parametres/pourcentage',[AdminParametresController::class,'pourcentage']);
$app->router->get('/admin/parametres/pourcentage/edit',[AdminParametresController::class,'pourcentage_edit']);
$app->router->post('/admin/parametres/pourcentage/edit',[AdminParametresController::class,'pourcentage_edit']);



$app->run();
