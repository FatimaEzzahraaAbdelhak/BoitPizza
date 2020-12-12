<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('categories', 'CategoriesCrudController');
    Route::crud('produit', 'ProduitCrudController');
    Route::crud('produit', 'ProduitCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('commentaire', 'CommentaireCrudController');
    Route::crud('commentaire', 'CommentaireCrudController');
    Route::crud('formule', 'FormuleCrudController');
    Route::crud('formule', 'FormuleCrudController');
    Route::crud('element', 'ElementCrudController');
    Route::crud('supplement', 'SupplementCrudController');
    Route::crud('commande', 'CommandeCrudController');
}); // this should be the absolute last line of this file