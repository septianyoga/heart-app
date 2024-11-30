<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
            'video' => Video::first()
        ];
        return view('user.test-page', $data);
    }

    public function start()
    {
        $test = Test::create([
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('soal-1', $test->id);
    }

    public function soal_1(Test $test)
    {
        return view('user.test.soal-1', [
            'test' => $test
        ]);
    }

    public function soal_2(Test $test, Request $request)
    {
        $test->update([
            'age' => $request->age,
            'gender' => $request->gender
        ]);

        return view('user.test.soal-2', [
            'test' => $test
        ]);
    }

    public function soal_3(Test $test, Request $request)
    {
        $test->update([
            'soal_2' => $request->choice,
        ]);

        return view('user.test.soal-3', [
            'test' => $test
        ]);
    }

    public function soal_4(Test $test, Request $request)
    {
        $test->update([
            'soal_3' => $request->choice,
        ]);

        return view('user.test.soal-4', [
            'test' => $test
        ]);
    }

    public function soal_5(Test $test, Request $request)
    {
        $test->update([
            'soal_4' => $request->choice,
        ]);

        return view('user.test.soal-5', [
            'test' => $test
        ]);
    }

    public function soal_6(Test $test, Request $request)
    {
        $test->update([
            'soal_5' => $request->choice,
        ]);

        return view('user.test.soal-6', [
            'test' => $test
        ]);
    }

    public function soal_7(Test $test, Request $request)
    {
        $test->update([
            'soal_6' => $request->choice,
        ]);

        return view('user.test.soal-7', [
            'test' => $test
        ]);
    }

    public function soal_8(Test $test, Request $request)
    {
        $test->update([
            'soal_7' => $request->choice,
        ]);

        return view('user.test.soal-8', [
            'test' => $test
        ]);
    }

    public function soal_9(Test $test, Request $request)
    {
        $test->update([
            'soal_8' => $request->choice,
        ]);

        return view('user.test.soal-9', [
            'test' => $test
        ]);
    }

    public function soal_10(Test $test, Request $request)
    {
        $test->update([
            'soal_9' => $request->choice,
        ]);

        return view('user.test.soal-10', [
            'test' => $test
        ]);
    }

    public function soal_11(Test $test, Request $request)
    {
        $test->update([
            'soal_10' => $request->choice,
        ]);

        return view('user.test.soal-11', [
            'test' => $test
        ]);
    }

    public function soal_12(Test $test, Request $request)
    {
        $test->update([
            'soal_11' => $request->choice,
        ]);

        return view('user.test.soal-12', [
            'test' => $test
        ]);
    }

    public function result(Test $test, Request $request)
    {
        $test->update([
            'soal_12' => $request->choice,
        ]);
        return view('user.test-page-result');
    }


    // Test Manual Admin
    public function testManual(){
        return view('admin.page.test-manual');
    }
}
