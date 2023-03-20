<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return view('admin.comment.index',['comment' => Comment::with('blogs')->whereNotNull(['name','mobile'])->get()]);
    }

    public function activeComment($id){
        Comment::query()->where(['id' => $id])->update(['status' => 1]);
        if(Comment::query()->where(['parent_id' => $id])->first()){
            Comment::query()->where(['parent_id' => $id])->update(['status' => 1]);
        }
        return redirect()->back()->with('success','کامنت مورد نظر با موفقیت فعال شد !');
    }

    public function deactiveComment($id){
        Comment::query()->where(['id' => $id])->update(['status' => 0]);
        if(Comment::query()->where(['parent_id' => $id])->first()){
            Comment::query()->where(['parent_id' => $id])->update(['status' => 0]);
        }

        return redirect()->back()->with('success','کامنت مورد نظر با موفقیت غیر فعال شد !');
    }

    public function answerForm(Request $request, $id){
        $answerExists = Comment::query()->where('parent_id', 'LIKE', "%$id%")->first();
        if($answerExists){
            return view('admin.comment.answer',[
                'comment'       => Comment::query()->where(['id' => $id])->first(),
                'blog_id'       => $request->get('blog_id'),
                'answerExists'  => $answerExists,
            ]);
        }
        return view('admin.comment.answer',[
            'comment' => Comment::query()->where(['id' => $id])->first(),
            'blog_id' => $request->get('blog_id')
        ]);
    }

    public function answerFormStore(Request $request){
        $comment_id  = $request->get('comment_id');
        $answerExists = Comment::query()->where('parent_id', 'LIKE', "%$comment_id%")->first();
        if($answerExists){
            $answerExists->update([
                'parent_id' => $comment_id,
                'blog_id'   => $request->get('blog_id'),
                'comment'   => $request->get('comment'),
                'status'    => 1
            ]);
            return redirect()->route('comment.index')->with('success','جواب شما با موفقیت ویرایش شد.!');
        }
        Comment::create([
            'parent_id' => $comment_id,
            'blog_id'   => $request->get('blog_id'),
            'comment'   => $request->get('comment'),
            'status'    => 1
        ]);
        return redirect()->route('comment.index')->with('success','جواب شما با موفقیت ارسال شد.!');
    }

    public function destroy($id){
        Comment::query()->where(['id' => $id])->delete();
        Comment::query()->where('parent_id', 'LIKE', "%$id%")->delete();
        return redirect()->route('comment.index')->with('success','کامنت با موفقیت حذف شد.!');
    }
}
