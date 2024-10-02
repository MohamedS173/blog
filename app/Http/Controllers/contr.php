<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settinges;

class contr extends Controller
{
    //
    public function show(Request $request)
    {
        if ($request->has('status')) {
            $users = Settinges::where('statues', $request->status)->get();
        } else {
            $users = Settinges::all();
        }



        return view('index', ['users' => $users]);
    }

    public function filterEquips(Request $request)
    {
        $users = Settinges::where('last_name', $request->data)->get();

        // $my_user = Settinges::find($request->user_id);
        $html = '';
        foreach ($users as $data) {
            $active_status = ($data->statues) ? 'Active' : 'Inactive';

            $img = $users->file_path ? "<img src='" . asset('storage/' . $users->file_path) . "' alt='Uploaded Image' width='200'>" : "<p>No file uploaded.</p>";

            $html .= "                                                                             
            
                <td> $data->user_id </td>
                <td> $data->first_name</td>
                <td> $data->last_name</td>
                <td> $data->phone_number</td>
                <td> $data->city</td>
                <td> $data->email</td>
                <td>
                 $active_status
                </td>
                <td>
                        <div class='mb-3'>
                           $img
                        </div>
                </td>
                <td>
                    <input type='button' class='btn btn-sm btn-outline-success' data-bs-toggle='modal' data-bs-target='#editModal' value='Edit'>
                    <input type='button' class='btn btn-sm btn-outline-danger' value='Delete'>
                </td>
           ";
        }
        return $html;
    }

    public function store(Request $request)
    {
        $user = new Settinges();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->statues = $request->input('statues');
        if ($request->hasFile('image')) {
            
            
            $file = $request->file('image');
            
            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();
            // dd($fileName);
            
            // Store the file in the 'uploads' directory inside the 'public' folder
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            // dd($filePath);
            
            $user->file_path = $filePath;
        }
        // dd($user->file_path);
        
        $user->save();
        return redirect()->back()->with('status', 'Student Added Successfully');
    }

    public function getUser(Request $request)
    {
        $user = Settinges::find($request->user_id);
        $arr = [
            'user_id' => $user->Id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'phone_number' => $user->phone_number,
            'email' => $user->email,
            'city' => $user->city,
            'statues' => $user->statues,
            'file_path' => $user->file_path
        ];
        return ($arr);
    }

    public function updateUser(Request $request)
    {
        $user_id = $request->user_id;
        $user = Settinges::where('id', $user_id);
        if ($request->hasFile('file_path')) {
            
            $path= 'uploads/public/'. $request->file_path;
            if (file_exists($path)) {
                unlink($path);
            }
            $file = $request->file('file_path');
            
            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();
            // dd($fileName);
            
            // Store the file in the 'uploads' directory inside the 'public' folder
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            // dd($filePath);
            
            
            $user->file_path=$filePath;
        }

        // $data = $request->except("_token", "user_id");
         // Update other user data
        $data = $request->except('_token', 'user_id', 'file_path'); // Exclude file_path, handled separately
        $user->update($data);

        // Save the updated file_path if a new file was uploaded
        if (isset($filePath)) {
            $user->file_path = $filePath;
            // $user->save();
            $user->update(['file_path' => $filePath]);
        }
        // $my_user = Settinges::find($user_id);
        //dd($my_user->id);


        // Find the record in the database based on its ID
        //$record = Settinges::find($user_id);
        // Update the record with the new data
        // dd($user_id);

        $active_status = ($request->statues) ? 'Active' : 'Inactive';
        $html = "";

        $img = $user->file_path ? "<img src='" . asset('storage/' . $user->file_path) . "' alt='Uploaded Image' width='200'>" : "<p>No file uploaded.</p>";

        $html .= "                                                                             
            
                <td> $request->user_id </td>
                <td> $request->first_name</td>
                <td> $request->last_name</td>
                <td> $request->phone_number</td>
                <td> $request->city</td>
                <td> $request->email</td>
                <td>
                 $active_status
                </td>
                <td>
                        <div class='mb-3'>
                           $img
                        </div>
                </td>
                <td>
                    <input type='button' class='btn btn-sm btn-outline-success' data-bs-toggle='modal' data-bs-target='#editModal' value='Edit'>
                    <input type='button' class='btn btn-sm btn-outline-danger' value='Delete'>
                </td>
           
        ";


        // return $html->withresponse()->json($data=['file_path' => asset('storage/' . $filePath), 'html' => $html], 200); 
        return $html;
    }

    public function deleteUser($user_id)
    {

        $user = Settinges::where('Id', $user_id);

        if ($user) {
            $user->delete($user_id);
            return redirect()->back()->with('status', 'user deleted Successfully');
        }

        return redirect()->back()->with('status', 'Error: User not found');
    }

    

    // public function uploadAdd(Request $request)
    // {
    //     // Validate the file

    //     // $request->validate([
    //     //     'image' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',  // Validate file type and size
    //     // ]);

    //     // Check if file is uploaded
        
    //     if ($request->hasFile('image')) {
    //         // Get the file
           
    //         // $user_id = $request->user_id_pic;
    //         // $user = Settinges::where('Id', $user_id);
    //         $user= new Settinges();
            

            
    //         $file = $request->file('image');
            
    //         // Generate a unique file name
    //         $fileName = time() . '_' . $file->getClientOriginalName();
            
    //         // Store the file in the 'uploads' directory inside the 'public' folder
    //         $filePath = $file->storeAs('uploads', $fileName, 'public');
            
    //         $user->file_path = $filePath;
            
    //         $user->update(['file_path' => $filePath]);
           
    //         if ($user->update(['file_path' => $filePath])) {
    //             return redirect()->back()->with('status', 'File uploaded and saved successfully!');
    //         } else {
    //             return redirect()->back()->with('status', 'Error: Failed to save file path in the database.');
    //         }
    //     }
    //     return redirect()->back()->with('status', 'Error: File not found!');
    // }
    
    
    // public function upload(Request $request)
    // {
    //     // Validate the file
    //     // $request->validate([
    //     //     'file_path' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
    //     //     // 'user_id' => 'required|exists:users,id' // Validate that user_id exists
    //     // ]);
    //     // dd($request);
    //     // Find the user using the provided ID
    //     $user_id = $request->user_id_pic;
    //     $user = Settinges::where('id', $user_id);
    //     $data = $request->except("_token", "user_id");
    //     // dd($user_id);
    //     if ($request->hasFile('file_path')) {
    //         // Get the file
    //         $filen = $request->file('file_path');

    //         // Generate a unique file name
    //         $fileName = time() . '_' . $filen->getClientOriginalName();

    //         // Store the file in the 'uploads' directory inside the 'public' folder
    //         $filePath = $filen->storeAs('uploads', $fileName, 'public');
    //         // Save the file path in the user's record
    //         $user->file_path = $filePath;
    //         // dd($filePath);
    //         $user->update($data);


    //         return response()->json(['status' => 'File uploaded and saved successfully!']);
    //     }
    //     // return dd($request->hasFile('file_path'));
    //     return response()->json(['status' => 'Error: File not found!'], 500);
    // }



    // public function upload(Request $request)
    // {
    //     // Validate the file type and size
    //     // $request->validate([
    //     //     'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // File types and max size in KB
    //     //     // 'user_id' => 'required|exists:users,id' // Ensure user_id exists in the users table
    //     // ]);

    //     if ($request->hasFile('file')) {
    //         // Get the file
    //         $file = $request->file('file');

    //         // Generate a unique file name
    //         $fileName = time() . '_' . $file->getClientOriginalName();

    //         // Store the file in the 'uploads' directory inside the 'public' folder
    //         $filePath = $file->storeAs('uploads', $fileName, 'public');

    //         // Save the file path to the database
    //         $fileModel = Settinges::where('user_id', $request->user_id)->first();
    //         if ($fileModel) {
    //             $fileModel = new Settinges();
    //             $fileModel->user_id = $request->user_id;
    //         }
    //         $fileModel->file_path = $filePath;
    //         $fileModel->save();

    //         return back()->with('success', 'File uploaded successfully.');
    //     }

    //     return back()->with('error', 'File upload failed.');
    // }


    // public function upload(Request $request)
    // {
    //     $file = $request->file('image');
    //     $filePath = $file->storeAs('uploads', $file->getClientOriginalName(), 'public');
    //     Settinges::where('id', $request->myuser_id_pic)->update(['file_path' => $filePath]);

    //     return back()->with('success', 'File uploaded successfully.');
    // }
    // public function upload(Request $request)
    // {
       
    //     // Validate the file type and size
    //     // $request->validate([
    //     //     'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',  // File types and max size in KB
    //     // ]);
    
    //     if ($request->hasFile('file')) {
    //         // Get the file
    //         // $file= $request->input('file');
    //         $file = $request->file('file');
    
    //         // Generate a unique file name
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    
    //         // Store the file in the 'uploads' directory inside the 'public' folder
    //         $filePath = $file->storeAs('uploads', $fileName, 'public');
    
    //         // Save the file path to the database
    //         // $fileModel = new Settinges();
    //         $fileModel = Settinges::where('id', $request->myuser_id_pic);
    //         // dd($request->user_id_pic);
    //         $fileModel->file_path = $filePath;
    //         $fileModel->save();

    //         // dd($filePath);
    
    //         return back()->with('success', 'File uploaded successfully.');
    //     }
    
    //     return back()->with('error', 'File upload failed.');
    // }







    // public function edit($id){
    //     $user=Settinges::find($id);
    //     compact('user');
    // }

    // public function update(Request $request, Settinges $indecator)
    // {
    //     // $indecator->Status_Proiect = $request->Status_Proiect;
    //     $indecator->first_name = $request->input('firstname');
    //     $indecator->last_name = $request->input('lastname');
    //     $indecator->phone_number = $request->input('phonenumber');
    //     $indecator->email = $request->input('email');
    //     $indecator->city = $request->input('city');
    //     $indecator->statues = $request->input('statues');
    //     $indecator->save();
    //     // dd(Proiecte::find($request->id));
    //     return redirect()->back()->with('status','Student Added Successfully')->back();
    // }



    // $user->type = request('type');
    // $user->name = request('name');
    // $user->email = request('email');
    // $user->phone = request('phone');
    // $user->city = request('city');
    // $user->save();
    // $data = $request->all();

    // // Find the record in the database based on its ID
    // $record = Settinges::findOrFail($request->user_id);

    // // Update the record with the new data
    // $record->update($data);
    // return redirect()->back()->with('status','Student Updated Successfully')->back();

    // public function update(Request $request)
    // {
    //     // $first_name = $request->input('firstname');
    //     // $last_name = $request->input('lastname');
    //     // $phone_number = $request->input('phonenumber');
    //     // $email = $request->input('email');
    //     // $city = $request->input('city');
    //     // $statues = $request->input('statues');
    //     // $user=array('first_name'=>$first_name,"last_name"=>$last_name,"phone_number"=>$phone_number,"city"=>$city,"email"=>$email,"statues"=>$statues);


    //     $user = Settinges::find($request->user_id);
    //     $arr = [

    //         'first_name' => $user->first_name,
    //         'last_name' => $user->last_name,
    //         'phone_number' => $user->phone_number,
    //         'email' => $user->email,
    //         'city' => $user->city,
    //         'statues' => $user->statues
    //     ];
    //     // $arr['user_id'] = $request->input('user_id');
    //     $arr['first_name'] = $request->input('first_name');
    //     $arr['last_name'] = $request->input('last_name');
    //     $arr['phone_number'] = $request->input('phone_number');
    //     $arr['email'] = $request->input('email');
    //     $arr['city'] = $request->input('city');
    //     $arr['statues'] = $request->input('statues');
    //     $user->update();

    //     return redirect()->back()->with('status','Student updated Successfully');
    // }
    // public function delete($id){
    //     // $record = Settinges::find($id); // Replace $id with the ID of the record you want to delete

    //     //     // Delete the record
    //     // $record->delete();
    //     $blog = Settinges::table('settinges')->where('id',$id)->delete();

    //     return redirect('/');
    // }



    // public function filterEquips(Request $request){

    //   $equips = Settinges::where('equip_sn', 'LIKE', "%$request->equip_sn%" )->get();
    //   //dd($equips);

    //   $html = '';

    //   foreach ($equips as $data) {
    //     $html .= "                                                                             
    //         <tr>
    //             <td> $data->Id </td>
    //             <td> $data->first_name</td>
    //             <td> $data->last_name</td>
    //             <td> $data->city</td>
    //             <td>$data->email</td>
    //             <td>

    //                 if($data->statues){
    //                     echo 'Active';
    //                 }else{
    //                     echo 'Inactive';
    //                 }
    //             </td>
    //         </tr>
    //     ";
    //   }


    //   return $html;

    // }

}
