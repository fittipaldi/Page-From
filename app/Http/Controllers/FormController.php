<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends BaseController
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param Request $request
     * @return Response
     */
    public function saveData(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'your_name' => 'required|max:255',
                'friends_name' => 'required|max:255',
                'friends_email' => 'required|email|max:255',
            ]);

            if ($validator->fails()) {
                $errorMsg = [];
                foreach ($validator->errors()->getMessages() as $msgs) {
                    foreach ($msgs as $msg) {
                        $errorMsg[] = $msg;
                    }
                }
                throw new \Exception(implode(', ', $errorMsg));
            }

            $your_name = $request->input('your_name');
            $friends_name = $request->input('friends_name');
            $friends_email = $request->input('friends_email');

            $contact = new Contact();
            $contact->your_name = $your_name;
            $contact->friends_name = $friends_name;
            $contact->friends_email = $friends_email;

            if ($contact->save()) {
                // Customer Email to WiLine
                $data = [
                    'your_name' => $your_name,
                    'friends_name' => $friends_name,
                    'friends_email' => $friends_email,
                ];

                Mail::send('mail.contact', $data, function ($message) use ($data) {
                    //$message->attach('File-Patch');
                    $message->from(config('mail.from.address'), config('mail.from.name'));
                    $message->sender(config('mail.from.address'), config('mail.from.name'));
                    $message->to($data['friends_email'], $data['friends_name']);
                    $message->subject('From ' . $data['your_name'] . ' - To' . $data['friends_name']);
                });

                return response()->json([
                    'status' => true,
                    'message' => 'Email sent successfully.'
                ]);

            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Error sending the email message.'
                ]);
            }
        } catch (QueryException $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }

    }
}
