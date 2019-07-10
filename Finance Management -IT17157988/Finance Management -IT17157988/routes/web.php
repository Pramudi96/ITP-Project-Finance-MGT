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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::get('Barchart','YearReportController@Barchart');
Route::get('Barchartm','YearReportController@Barchartm');
Route::get('YearR/pdf','YearReportController@gpdf');
Route::get('MonthlyReport/Month/pdf','YearReportController@mpdf');
Route::get('Budget/budget','FinanceController@budget');
Route::get('/AnnualReportGeneration','FinanceController@AnnualReportGeneration');
Route::get('/MonthlyReportGeneration','FinanceController@MonthlyReportGeneration');
Route::get('Finance/home','FinanceController@HomePage');
Route::get('Finance/bill','FinanceController@billPage');
Route::get('Water/water','FinanceController@WaterPage');
Route::get('FinanceHome','FinanceController@FinanceHome');
Route::get('Electric/Electric','FinanceController@ElectricPage');
Route::get('Tele/Telephone','FinanceController@TelephonePage');
Route::get('Other/other','FinanceController@OtherPage');
Route::get('Funds/funds','FinanceController@FundsPage');
Auth::routes();
Route::resource('waters','WaterController');
Route::resource('electrics','ElectricController');
Route::resource('teles','TeleController');
Route::resource('budgets','BudgetController');
Route::get('store','WaterController@store');
Route::get('show/{MonthYear}','WaterController@show');
Route::get('index','WaterController@index');
Route::post('index','WaterController@search');
Route::get('delete/{MonthYear}','WaterController@destroy');
Route::get('edit/{MonthYear}','WaterController@edit');
Route::post('/update','WaterController@update');
Route::get('/MonthlyReport/MonthlyReport','FinanceController@MonthlyReport');
Route::get('/AnnualReort/AnnualReport','FinanceController@AnnualReport');
Route::get('estore','ElectricController@estore');
Route::get('eshow/{MonthYear}','ElectricController@eshow');
Route::get('eindex','ElectricController@eindex');
Route::post('/eindex','ElectricController@esearch');
Route::get('Eedit/{MonthYear}','ElectricController@Eedit');
Route::post('/eupdate','ElectricController@eupdate');
Route::get('edelete/{MonthYear}','ElectricController@edestroy');
Route::get('Tstore','TeleController@Tstore');
Route::get('Tsum','TeleController@Tsum');
Route::get('Tshow/{MonthYear}','TeleController@Tshow');
Route::get('Tindex','TeleController@Tindex');
Route::post('Tindex','TeleController@Tsearch');
Route::get('Tdelete/{MonthYear}','TeleController@Tdestroy');
Route::get('Tedit/{MonthYear}','TeleController@Tedit');
Route::post('/TUpdate','TeleController@TUpdate');
Route::get('Bindex','BudgetController@Bindex');
Route::get('Bstore','BudgetController@Bstore');
Route::get('Bedit/{TypeandYear}','BudgetController@Bedit');
Route::post('/Bupdate','BudgetController@Bupdate');
Route::post('Bindex','BudgetController@Bsearch');
Route::get('BDelete/{TypeandYear}','BudgetController@Bdestroy');
Route::get('Sindex','StudentController@Sindex');
Route::get('Eindex','EventController@Eindex');
Route::get('Yindex','TotalController@Yindex');
Route::get('Lindex','LibraryController@Lindex');
Route::get('/EventRecord','billController@EventRecord');
Route::get('Lindex','LibraryController@Lindex');



Route::get('MIncome','MonthController@MIncome');
Route::get('Income','YearController@Income');

Route::group(['middleware' =>['web']],function (){
    Route::get('/Tstore',['uses'=>'TeleController@Tstore','as'=>'Tstore']);

});


Route::group(['middleware' =>['web']],function (){
    Route::get('/store',['uses'=>'WaterController@store','as'=>'store']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/estore',['uses'=>'ElectricController@estore','as'=>'estore']);

});


Route::group(['middleware' =>['web']],function (){
    Route::get('/fstore',['uses'=>'FundsController@fstore','as'=>'fstore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/Astore',['uses'=>'AcademicController@Astore','as'=>'Astore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/Nstore',['uses'=>'NonAcademicController@Nstore','as'=>'Nstore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/fstore',['uses'=>'FundsController@fstore','as'=>'fstore']);

});

Route::group(['middleware' =>['web']],function (){
    Route::get('/Ostore',['uses'=>'OtherController@Ostore','as'=>'Ostore']);

});




Route::get('Yindex','YearController@Yindex');
Route::get('Mindex','MonthController@Mindex');
Route::get('rangeYearly','MonthController@rangeYearly');



Route::get('fstore','FundsController@fstore');
Route::get('fshow/{MonthYear}','FundsController@fshow');
Route::get('findex','FundsController@findex');
Route::post('findex','FundsController@fsearch');
Route::get('fdelete/{FundNameMonthYear}','FundsController@fdestroy');
Route::get('fedit/{FundNameMonthYear}','FundsController@fedit');
Route::post('/fUpdate','FundsController@fUpdate');

Route::get('Oindex','OtherController@Oindex');
Route::post('Oindex','OtherController@Osearch');
Route::get('Odelete/{FundNameMonthYear}','OtherController@Odestroy');
Route::get('Oedit/{FundNameMonthYear}','OtherController@Oedit');
Route::post('/Oupdate','OtherController@Oupdate');
Route::get('Finance/Sindex','FController@Sindex');
Route::get('Finance/Lindex','FController@Lindex');
Route::get('Finance/Eventindex','FController@Eventindex');
Route::get('Finance/Inventoryindex','FController@Inventoryindex');

