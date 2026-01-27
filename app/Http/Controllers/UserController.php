<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Rules\uppercase;
use Illuminate\Support\Facades\DB;
use App\Models\ContactUs;
use App\Models\SignUp;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;

class UserController extends Controller
{
    // Controller methods would go here
    function getUser(){
        //return "Ankit Saini";
        // Get Database Users Details
       // $users = DB::select('SELECT * FROM sign_ups');

       // for pagination we can use the following code
       $users = SignUp::paginate(3);
        return view('user',['users' => $users]);
    }
    // function getUserDetails(){
    //     return ["name"=>"Ankit Saini", "email"=>"ankit@example.com"];
    // }

    function getUserName($name){
         return "User name is: " . $name;
    } 
    function showUserName($name){
        return view('user', ['name' => $name]);
    }
    function showUserDetails($name,$email){
        $data = ['name'=>$name, 'email'=>$email];
        $user = ['age'=> 24, 'city'=>'New York'];
        return view('about', $data, ['user' => $user]);
    }   

    // function showUserDetails($name, $email)
    // {
    //     $data = [
    //         'name'  => $name,
    //         'email' => $email,
    //         'user'  => [
    //             'age'  => 24,
    //             'city'=> 'New York'
    //         ]
    //     ];

    //     return view('about', $data);
    // }

    // function showUserDetails($name, $email)
    // {
    //     if (View::exists('about')) {
    //         return view('about', compact('name', 'email'));
    //     }

    //     abort(404, 'View not found');
    // }

    // Contact Us page
    function contactUs(){
        return view('contact-us');
    }

    function contactform(Request $request){
        //return "Form submitted successfully!";
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:10|max:10',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|uppercase',
            'attachment' => 'required|nullable|file|max:2048',
        ],[
            'name.required' => 'Name is required.',
            'email.required' => 'Email Address is required.',
            'phone.required' => 'Phone number is required.',
            'subject.required' => 'Subject is required.',
            'message.uppercase' => 'Message must be in uppercase letters.',
            'message.required' => 'Message can not be empty.',
            'attachment.file' => 'Attachment must be a file.',
            'attachment.max' => 'Attachment size must not exceed 2MB.',
         ]);

         // Handle file upload
         $attachmentPath = null;
         if ($request->hasFile('attachment')) {
             //$attachmentPath = $request->file('attachment')->store('attachments', 'public');
             $attachmentPath = $request->file('attachment')->storeAs('attachments', 'Dummy1.png', 'public');
         }

         // Insert into database using Model
            ContactUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'attachment' => $attachmentPath,
            ]);

            $to = $request->email;
            $recipientName = $request->name;
            $subject = "TechByteChronicals, Contact Us Form Submission";
            $body = "Dear " . $request->name . ",\n\n";
            $body .= "Thank you for contacting us. We have received your message and will get back to you shortly.\n\n";
            $body .= "Best regards,\n";
            $body .= "The Team";

            // Send email using Mailable class
            Mail::to($to)->send(new ContactUsEmail($recipientName, $subject, $body));




        $request->session()->flash('status', 'Your message has been sent successfully!');
        return redirect('contact-us');
        //return "Thank you, We have received your message.";
    }

    // Blog comment submission
    function submitComment(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|uppercase',
            'comment' => 'required|string|max:1000',
        ],[
            'name.required' => 'Name is required.',
            'email.required' => 'Email Address is required.',
            'email.uppercase' => 'Email must be in uppercase letters.',
            'comment.required' => 'Comment cannot be empty.',       
        ]);
        return "Comment submitted successfully!";
    }

    public function signupForm(Request $request){
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|min:10|max:10',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password',
            'terms' => 'required|accepted',
        ],[
            'fullname.required' => 'Name is required.',
            'email.required' => 'Email Address is required.',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'phone.max' => 'Phone number must not exceed 10 digits.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'confirm_password.required' => 'Please confirm your password.',
            'confirm_password.same' => 'Password confirmation does not match.',       
            'terms.accepted' => 'You must accept the terms and conditions.',
            'terms.required' => 'You must accept the terms and conditions.',
        ]);

        // Insert into database using Model
           SignUp::create([
               'fullname' => $request->fullname,
               'email' => $request->email,
               'phone' => $request->phone,
               'password' => bcrypt($request->password),
               'terms' => $request->has('terms') ? 1 : 0,
           ]);
       $request->session()->flash('status', 'Signup successful! You can now log in.');
       return redirect('sign-up');

    }

    public function deleteUser($id){
        // Delete user from sign_ups table
        DB::delete('DELETE FROM sign_ups WHERE id = ?', [$id]);
        session()->flash('status', 'User deleted successfully!');
        return redirect('/user');
    }

    public function editUser($id){
        // Fetch user details
        $users = SignUp::find($id);
        if (!$users) {
            return redirect('/user')->with('status', 'User not found!');
        }else {
            return view('edit-user', ['users' => $users]);
        }
    }

    public function updateUser(Request $request, $id){
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|min:10|max:10',
            'password' => 'nullable|string|min:8',
            'confirm_password' => 'nullable|same:password',
            'terms' => 'required|accepted',
        ],[
            'fullname.required' => 'Name is required.',
            'email.required' => 'Email Address is required.',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'phone.max' => 'Phone number must not exceed 10 digits.',
            'password.min' => 'Password must be at least 8 characters.',
            'confirm_password.same' => 'Password confirmation does not match.',       
            'terms.accepted' => 'You must accept the terms and conditions.',
            'terms.required' => 'You must accept the terms and conditions.',
        ]);

        // Update user details, To get the instance of the user we are using the find method
        $user = SignUp::find($id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->terms = $request->has('terms') ? 1 : 0;
        $user->save();

        $request->session()->flash('updatestatus', 'User updated successfully!');
        return redirect('/user');
    }

    public function searchUsers(Request $request){
        $searchTerm = SignUp::where('fullname', 'like', '%' . $request->input('search') . '%')
            ->orWhere('email', 'like', '%' . $request->input('search') . '%')
            ->orWhere('phone', 'like', '%' . $request->input('search') . '%')
            ->get();
        return view('user', ['users' => $searchTerm]);
    }

}