<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Categoria;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $chart_options = [
            'chart_title' => 'Transactions by user',
            'chart_type' => 'bar',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Actividade',
        
            'relationship_name' => 'categoria', // represents function user() on Transaction model
            'group_by_field' => 'Nombre', // users.name
        
            
            
            'filter_field' => 'detalle',
            'filter_days' => 30, // show only transactions for last 30 days
            'filter_period' => 'week', // show only transactions for this week
        ];
        $chart = new LaravelChart($chart_options);
        return view('home',compact('chart'));
       
    }
}
