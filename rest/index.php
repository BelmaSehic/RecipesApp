<?php

require_once "vendor/autoload.php";

require_once("services/UserService.php");
require_once("services/RecipeService.php");
require_once("services/CategoryService.php");
require_once("services/FavoriteService.php");
require_once("services/IngredientService.php");

Flight::register("user_service", "UserService");
Flight::register("recipe_service", "RecipeService");
Flight::register("category_service", "CategoryService");
Flight::register("favorite_service", "FavoriteService");
Flight::register("ingredient_service", "IngredientService");

require_once __DIR__ . "/routes/UsersRoutes.php";
require_once __DIR__ . "/routes/RecipesRoutes.php";
require_once __DIR__ . "/routes/CategoryRoutes.php";
require_once __DIR__ . "/routes/FavoritesRoutes.php";
require_once __DIR__ . "/routes/IngredientsRoutes.php";

Flight::before('start', function (&$params, &$output) {
    $excludedRoutesStartsWith = ["/login", "/register", "/recipes", "/recipe/", "/users"];
    $request = Flight::request();

    foreach ($excludedRoutesStartsWith as $route) {
        if (strpos($request->url, $route) === 0) {
            return;
        }
    }

});

Flight::route('GET /test', function () {
    echo "Test route is working!";
});


Flight::start();

?>