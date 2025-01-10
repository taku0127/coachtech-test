<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    //
    public function index(){
        $contacts = Contact::with('category')->orderByDesc('id')->paginate(7);
        $categories = Category::all();
        return view('admin',compact('contacts','categories'));
    }
    public function destroy(Request $request){
        Contact::find($request->id)->delete();
        return redirect('admin')->with('success','データを削除しました');
    }

    public function search(Request $request){
        $contacts = Contact::with('category')->KeywordSearch($request->keyword)->GenderSearch($request->gender)->CategorySearch($request->category_id)->DateSearch($request->date)->orderByDesc('id')->paginate(7);
        $categories = Category::all();
        $queryParams = $request->query();
        return view('admin' , compact('contacts','categories','queryParams'));
    }

    public function exportCsv(Request $request){
        $queryParams = [ 'keyword' => $request->query('keyword', null), 'gender' => $request->query('gender', null), 'category_id' => $request->query('category_id', null), 'date' => $request->query('date', null), ];
        $csvHeader = [
            'ID',
            '姓',
            '名',
            '性別',
            'メールアドレス',
            '電話番号',
            '住所',
            '建物名',
            'お問い合わせの種類',
            'お問い合わせ内容',
            '作成日',
            '更新日',
        ];
        $temps = [];
        array_push($temps, $csvHeader);
        $contacts = Contact::with('category')->KeywordSearch($queryParams['keyword'])->GenderSearch($queryParams['gender'])->CategorySearch($queryParams['category_id'])->DateSearch($queryParams['date'])->get();
        foreach($contacts as $contact){
            $temp = [
                $contact->id,
                $contact->last_name,
                $contact->first_name,
                $contact->gender == '1'? '男性' : ($contact->gender == '2'? '女性' : 'その他'),
                $contact->email,
                $contact->tel,
                $contact->address,
                $contact->building,
                $contact->category->content,
                $contact->detail,
                $contact->created_at,
                $contact->updated_at,
            ];
            array_push($temps, $temp);
        }
        $stream = fopen('php://temp', 'r+b');
        foreach ($temps as $temp){
            fputcsv($stream, $temp);
        }
        rewind($stream);
        $csv = str_replace(PHP_EOL, "\r\n", stream_get_contents($stream));
        $csv = mb_convert_encoding($csv,'SJIS-win', 'UTF-8');
        $now = new Carbon();
        $filename = 'ユーザー一覧(' . $now->format('Y年m月d日').").csv";
        $headers = array('Content-Type' => 'text/csv', 'Content-Disposition' => 'attachment; filename=' .$filename,);
        return Response::make($csv, 200, $headers);

    }
}
