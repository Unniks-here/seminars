<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('auth/facebook', 'Auth\SocialiteController@redirectToFacebook')->name('auth-facebook');
Route::get('auth/facebook/callback', 'Auth\SocialiteController@handleFacebookCallback');
Route::get('auth/google', 'Auth\SocialiteController@redirectToGoogle')->name('auth-google');
Route::get('auth/google/callback', 'Auth\SocialiteController@handleGoogleCallback');

Route::get('/', function () {
    return view('pages.index');
});
// Route::get('/dashboard', function () {
//     return view("home");
// });
// Route::get('/home', 'HomeController@index');

Route::get('/{page}',function($page){
        return view("pages.$page");
});

Route::get('/submissions/{page}',function($page){
    if(\Auth::user()->participant_type != 'admin')
    return view("admin.$page");
    else
    return view("admin.approval");
});

Route::post('submissions/payment','PaymentController@payment')->name('admin.payment');
Route::post('submissions/submit/now','PaymentController@submission')->name('admin.submission');
Route::get('doc/download','PaymentController@excel');

Route::get('/submissions/approve/now/{id}',function($id){
    $admin= \Auth::user()->participant_type;
    if($admin=='admin')
    {
        $approval=\App\Submission::where('id',$id)->first()->approved;

        if($approval==1)
        {
            $approval=0;
        }
        else
        {
            $approval=1;
        }
        \App\Submission::where('id',$id)->update(['approved'=>$approval]);

        return redirect('submissions/approval');

    }
});

Route::delete('submissions/delete/{sub_id}','PaymentController@deleteSubmission')->name('submission.destroy');