<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class Comment_Controller extends Controller
{
    public function createComment(Request $request){
        $comment= new Comment();

        $comment->texto=$request->texto;
        $comment->user_id=$request->user_id;
        $comment->serie_id=$request->serie_id;
        $comment->save();

        return response()->json([$comment]);
    }

    public function listComment(){
        $comment = Comment::all();
        return response()->json($comment);
    }

    public function showComment($id){
        $comment = Comment::findOrFail($id);
        return response()->json([$comment]);
    }

    public function updateComment(Request $request, $id){

        $comment = Comment::find($id);

        if($comment){
            if($request->texto){
                $comment->texto = $request->texto;
            }
            if($request->user_id){
                $comment->user_id = $request->user_id;
            }
            if($request->serie_id){
                $comment->serie_id = $request->serie_id;
            }
            else{
                return response()->json(['insira o parâmetro a ser atualizado']);
            }
            $comment->save();
            return response()->json([$comment]);
        }
        else{
            return response()->json(['Este comentário não existe']);
        }
    }
    public function deleteComment($id){
        Comment::destroy($id);
        return response()->json(['Comentário deletado']);
    }

}
