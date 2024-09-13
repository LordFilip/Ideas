<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{


    public function show(Idea $idea){

     

        return view('ideas.show',compact('idea'));
    }

    public function store(){

        $validated = request() -> validate([
            'content' => 'required|min:5|max:240'
        ]);

        $validated['user_id'] = auth() -> id();
        
        Idea::create($validated);

        return redirect() -> route('dashboard')->with('success', "Idea created successfully");
      
    }

    public function destroy(Idea $idea){

    /*    if(auth()->id() !== $idea->user_id){
            abort(404);
        }
*/
         Gate::authorize('delete',$idea);

       $idea->delete();

       
       return redirect() -> route('dashboard')->with('success', "Idea deleted successfully");
    }

    public function edit(Idea $idea){

    /*    if(auth()->id() !== $idea->user_id){
            abort(404);
        }

        */

        Gate::authorize('update',$idea);

        $editing = true;

        return view('ideas.show',compact('idea','editing'));
    }

    public function update(Idea $idea){



    /*    if(auth()->id() !== $idea->user_id){
            abort(404);
        }
            */ 

            Gate::authorize('update',$idea);

        request() -> validate([
            'content' => 'required|min:5|max:240'
        ]);

       $idea->content = request('content','');

       $idea->save();

        return redirect()->route('ideas.show',$idea->id)->with('success',"Idea updated successfully!");
    }
}
