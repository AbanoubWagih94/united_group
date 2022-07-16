<?php

namespace App\Http\Controllers\Admin\E_Tower;

use App\Models\E_Tower\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MessagesController extends Controller
{
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);
 
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->first()
            ]);
        }

        $row = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
        ]);

        if($row) {
            return response()->json(['success' => 'Message sent successfully']);
        }
    }

    public function view($id) {
        $message = Message::findorFail($id);
        return view('admin.e-tower.messages.view', compact('message'));
    }

    public function delete($id) {
        $message = Message::findorFail($id);

        $row = $message->delete();

        if($row) {
            return redirect()->route('e-tower.messages')->with('success', 'Message deleted successfully');            
        }
    }
}
