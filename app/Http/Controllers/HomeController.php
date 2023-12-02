<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Companies;
use App\Models\Locations;
use App\Models\Member;
use App\Models\Program;
use App\Models\Trainer;
use DB;
use Carbon\Carbon;
use App\Notification\MemberCreateNotification;
use Auth;


class HomeController extends Controller
{
    public function index(){
        return view('gym_template/index',
            [
                'member'=>Member::count(),
                'trainers'=>Trainer::count(),
                'prg'=>Program::count(),
                'latest'=>Member::orderBy('created_at', 'desc')->take(3)->get(),
                'locations'=>Locations::count(),
                'expiredDate'=>Member::whereDate('date_ex','>=',now())->whereDate('date_ex','<=',now()->addDays(5))->get(),
                'incomes'=>Member::join('categories', 'members.cat_id', '=', 'categories.id')->select(DB::raw('YEAR(date_begin) as year'), DB::raw('MONTH(date_begin) as month'), DB::raw('SUM(price) as total'))
             ->groupBy('year', 'month')
             ->get(),
             'incomesByYear' => Member::join('categories', 'members.cat_id', '=', 'categories.id')
            ->select(DB::raw('YEAR(date_begin) as year'), DB::raw('SUM(price) as total'))
            ->groupBy('year')
            ->get()
             

            ]);
    }

     public function listNotification(){

            $notifications = DB::table('notifications')->get();
            $totalNotifications = DB::table('notifications')->count();
            return view('gym_template/notification' , compact('notifications','totalNotifications'));
    }

    public function markAsRead($id){

        DB::table('notifications')->where('id', $id)->update(['read_at' => now()]);
        return back();
    }

     public function showMonths($year)
    {
        $member =Member::count();
        $trainers = Trainer::count();
        $prg = Program::count();
        $locations = Locations::count();

        $monthlyIncomes = Member::join('categories', 'members.cat_id', '=', 'categories.id')
            ->select(DB::raw('MONTH(date_begin) as month'), DB::raw('SUM(price) as total'))
            ->whereYear('date_begin', $year)
            ->groupBy('month')
            ->get();

        return view('members/incomes_by_year_month',compact('monthlyIncomes', 'year','member','trainers','locations','prg'));
    }


}
