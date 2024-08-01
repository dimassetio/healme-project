<?php

namespace App\Http\Controllers\Application;

use App\Models\Psikolog;
use App\Models\RequestConsultation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPsikologRequest;
use App\Http\Requests\StorePsikologRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\EmailPsikolog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PsikologController extends Controller
{
    public function psikologHomeView()
    {
        $psikologs = Psikolog::all();
        return view('app.feature.psikolog.psikolog-home', compact('psikologs'));
    }

    public function psikologJumbotronView()
    {
        return view('app.feature.psikolog.psikolog-jumbotron');
    }

    public function psikologMakeRequestView(Psikolog $psikolog)
    {
        return view(
            'app.feature.psikolog.psikolog-request-consultation',
            compact('psikolog')
        );
    }

    public function storeRequestConsultation(
        Request $request,
    ) {
        try {
            RequestConsultation::create([
                'psikolog_id' => $request->input('psikolog_id'),
                'user_id' => $request->input('user_id'),
                'consultation_date' => $request->input('consultation_date'),
                'consultation_time' => $request->input('consultation_time'),
                'therapy_type' => $request->input('therapy_type'),
            ]);

            Alert::toast('Berhasil menyimpan data', 'success');

            return redirect()->route('app.psikolog-whatsapp', $request->input('psikolog_id'));
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    public function psikologWhatsapp($psikologId)
    {

        $psikolog = Psikolog::find($psikologId);

        return view(
            'app.feature.psikolog.psikolog-whatsapp',
            compact('psikolog')
        );
    }

    public function psikologProfile(Psikolog $psikolog)
    {
        return view('app.feature.psikolog.psikolog-detail', compact('psikolog'));
    }

    public function psikologRegisterView()
    {
        return view('app.feature.psikolog.psikolog-register');
    }

    public function psikologLoginView()
    {
        return view('app.feature.psikolog.psikolog-login');
    }

    public function psikologDashboardView()
    {
        return view('app.feature.psikolog.psikolog-dashboard');
    }

    public function loginPsikolog(LoginPsikologRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $psikolog = Psikolog::where('email', $validatedData['email'])
                ->where('code_psikolog', $validatedData['code_psikolog'])
                ->first();

            if ($psikolog) {
                Auth::guard('psikolog')->login($psikolog);
                // Redirect ke halaman dashboard atau halaman yang diinginkan
                return redirect()->route('app.psikolog-dashboard');
            }

            return back()->withErrors([
                'email' => 'invalid kredensial',
                'code_psikolog' => 'invalid kredensial',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    public function registerPsikolog(StorePsikologRequest $request)
    {
        try {
            $uniqueCode = Str::random(6);
            $path = $this->uploadProfileImage($request);
            $ijazah=$this->uploadIjazah($request);
            $sertifikat=$this->uploadSertifikat($request);
            $cv=$this->uploadCV($request);
            Psikolog::create([
                'name' => $request->validated()['name'],
                'email' => $request->validated()['email'],
                'phone_number' => $request->validated()['phone_number'],
                'birthdate' => $request->validated()['birthdate'],
                'code_psikolog' => $uniqueCode,
                'last_education' => $request->validated()['last_education'],
                'profile_photo' => $path,
                'file_cv' => $cv,
                'file_sertif_prof' => $sertifikat,
                'file_ijazah' => $ijazah,
                'specialization_therapy' => $request->validated()['specialization_therapy'],
                'service_cost_perhour' => $request->validated()['service_cost_perhour'],
                'status_account' => 'Pending',
            ]);

            $this->sendEmail($request->validated()['email']);

            Alert::success(
                'Berhasil',
                'Berhasil menyimpan data, tunggu konfirmasi di email anda'
            );

            return view('app.feature.psikolog.psikolog-register');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()
                ->back()
                ->withErrors($request->errors());
        }
    }

    public function logoutPsikolog()
    {
        Auth::guard('psikolog')->logout();
        return redirect()->route('app.psikolog-login');
    }

    public function sendEmail($toEmail)
    {
        $message = 'Silahkan menunggu email konfirmasi lebih lanjut mengenai pendaftaran Anda sebagai psikolog';
        $subject = 'Pemberitahuan Registrasi Psikolog HealMe';

        Mail::to($toEmail)->send(new EmailPsikolog($message, $subject));
    }

    // public function sendEmailConfirmation($toEmail, $psikologCode)
    // {
    //     $message = 'Berikut adalah kode psikolog anda: ' . $psikologCode;
    //     $subject = 'Pemberitahuan Konfirmasi Registrasi Psikolog HealMe';

    //     Mail::to($toEmail)->send(new KonfirmasiPsikolog($message, $subject));
    // }

    public function uploadProfileImage(Request $request)
    {
        try {
            $path = $request->file('file_foto')->store('public');
            return $path;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function uploadIjazah(Request $request)
    {
        try {
            $ijazah = $request->file('file_ijazah')->store('public');
            return $ijazah;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function uploadSertifikat(Request $request)
    {
        try {
            $sertifikat = $request->file('file_sertif_prof')->store('public');
            return $sertifikat;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function uploadCV(Request $request)
    {
        try {
            $cv = $request->file('file_cv')->store('public');
            return $cv;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
