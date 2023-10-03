<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Nobat;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NobatController extends Controller
{
    public function index(){
        $expireDate = Nobat::query()->where('date', '<' ,Verta::now()->format('Y/m/d'))->delete();
        if($expireDate){
            return redirect()->route('nobat.index')->with('success','وقت های قبلی خوکار حذف شدند!');
        }
        return view('admin.nobat.index',['nobat' => Nobat::all()]);
    }

    public function create(){
        return view('admin.nobat.create');
    }

//     public function store(Request $request){
//         $date = date('Y/m/d'); // تاریخ امروز
//         $start_time = strtotime('9:00 AM'); // ساعت شروع
//         $end_time = strtotime('8:00 PM'); // ساعت پایان
//         $time_slots = [];

//         for ($i = 0; $i < 7; $i++) { // حلقه برای 7 روز در هفته
//             $current_date = date('Y/m/d', strtotime("+$i days")); // تاریخ هر روز
//             $current_date = verta($current_date)->format('Y/m/d');

//             // اگر هفته قبلی به پایان رسیده است، هفته جدید را بسازید
//             if ($current_date > $date) {
//                 $date = $current_date;
//                 $start_time = strtotime('9:00 AM');
//                 $end_time = strtotime('8:00 PM');
//             }

//             $current_time = $start_time;

//             while ($current_time <= $end_time) { // حلقه برای ساعت های مورد نظر
//                 $time_slot = date('H:i', $current_time); // تبدیل ساعت به فرمت مناسب

//                 $existing_nobat = Nobat::where('date', $current_date)
//                 ->whereJsonContains('time', $time_slot)
//                 ->first();

//                 if (!$existing_nobat) {
//                     array_push($time_slots, $time_slot);
//                 }

//                 $current_time += 3600;

//                 // array_push($time_slots, $time_slot);
//                 // $current_time += 3600; // اضافه کردن یک ساعت به ساعت فعلی
//             }

//             $end_date = Nobat::query()->orderByDesc('date')->first();

//             if($end_date == null){
//                 Nobat::create([
//                     'date' => $current_date,
//                     'time' => $time_slots,
//                     'user_id' => Auth::user()->id,
//                 ]);
//             }else if($current_date < $end_date && Nobat::query()->count() == 7){
//                 return redirect()->route('nobat.index')->with('error','بعد از تمام شدن هفته دکمه ثبت وقت باز میشود ');
//             }
//             Nobat::create([
//                 'date' => $current_date,
//                 'time' => $time_slots,
//                 'user_id' => Auth::user()->id,
//             ]);

//         }
// //        Nobat::create([
// //            'date'      => $request->get('date'),
// //            'time'      => [
// //                'ساعت 9',
// //                'ساعت 10',
// //                'ساعت 11',
// //                'ساعت 12',
// //                'ساعت 13',
// //                'ساعت 14',
// //                'ساعت 15',
// //                'ساعت 16',
// //                'ساعت 17',
// //                'ساعت 18',
// //                'ساعت 19',
// //                'ساعت 20',
// //            ],
// //            'user_id'   => Auth::user()->id,
// //        ]);
// //
// //        return redirect()->route('nobat.index')->with('success','وقت نوبت با موفقیت ثبت شد...');
//     }

    public function store(Request $request)
    {
        $date = date('Y/m/d'); // تاریخ امروز
        $start_time = strtotime('9:00 AM'); // ساعت شروع
        $end_time = strtotime('8:00 PM'); // ساعت پایان

        for ($i = 0; $i < 7; $i++) { // حلقه برای 7 روز در هفته
            $current_date = date('Y/m/d', strtotime("+$i days")); // تاریخ هر روز
            $current_date = verta($current_date)->format('Y/m/d');

            // اگر هفته قبلی به پایان رسیده است، هفته جدید را بسازید
            if ($current_date > $date) {
                $date = $current_date;
                $start_time = strtotime('9:00 AM');
                $end_time = strtotime('8:00 PM');
            }

            $current_time = $start_time;
            $time_slots = [];

            while ($current_time <= $end_time) { // حلقه برای ساعت های مورد نظر
                $time_slot = date('H:i', $current_time); // تبدیل ساعت به فرمت مناسب

                // بررسی تکراری نبودن ساعت
                $existing_nobat = Nobat::where('date', $current_date)
                    ->whereJsonContains('time', $time_slot)
                    ->first();

                if (!$existing_nobat) {
                    array_push($time_slots, $time_slot);
                }

                $current_time += 3600; // اضافه کردن یک ساعت به ساعت فعلی
            }

            $end_date = Nobat::query()->orderByDesc('date')->first();

            if ($end_date == null) {
                Nobat::create([
                    'date' => $current_date,
                    'time' => $time_slots,
                    'user_id' => Auth::user()->id,
                ]);
            } else if ($current_date < $end_date && Nobat::query()->count() == 7) {
                return redirect()->route('nobat.index')->with('error', 'بعد از تمام شدن هفته دکمه ثبت وقت باز میشود');
            }

            Nobat::create([
                'date' => $current_date,
                'time' => $time_slots,
                'user_id' => Auth::user()->id,
            ]);
        }
    }

    public function destroy($id){
        Nobat::find($id)->delete();
        return redirect()->route('nobat.index')->with('success','وقت نوبت با موفقیت حذف شد...');
    }
}
