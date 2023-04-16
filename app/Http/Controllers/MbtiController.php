<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbtiController extends Controller
{
    
    public function index()
    {
        return view('mbti.index');
    }

    public function result(Request $request, $typeDescription = '')
    {
        $responses = $request->all();

        // Calculate scores for each letter (E/I, S/N, T/F, J/P)
        $eScore = $this->calculateScore($responses['q1'], 'E');
        $iScore = $this->calculateScore($responses['q1'], 'I');
        $sScore = $this->calculateScore($responses['q2'], 'S');
        $nScore = $this->calculateScore($responses['q2'], 'N');
        $tScore = $this->calculateScore($responses['q3'], 'T');
        $fScore = $this->calculateScore($responses['q3'], 'F');
        $jScore = $this->calculateScore($responses['q4'], 'J');
        $pScore = $this->calculateScore($responses['q4'], 'P');

        // Determine the MBTI type based on the scores
        $type = '';
        if ($eScore > $iScore) {
            $type .= 'E';
        } else {
            $type .= 'I';
        }
        if ($sScore > $nScore) {
            $type .= 'S';
        } else {
            $type .= 'N';
        }
        if ($tScore > $fScore) {
            $type .= 'T';
        } else {
            $type .= 'F';
        }
        if ($jScore > $pScore) {
            $type .= 'J';
        } else {
            $type .= 'P';
        }

        // Determine the MBTI type description
        switch ($type) {
            case 'ISTJ':
                $typeDescription = 'The Inspector';
                break;
            case 'ISFJ':
                $typeDescription = 'The Protector';
                break;
            case 'INFJ':
                $typeDescription = 'The Counselor';
                break;
            case 'INTJ':
                $typeDescription = 'The Mastermind';
                break;
            case 'ISTP':
                $typeDescription = 'The Craftsman';
                break;
            case 'ISFP':
                $typeDescription = 'The Composer';
                break;
            case 'INFP':
                $typeDescription = 'The Healer';
                break;
            case 'INTP':
                $typeDescription = 'The Architect';
                break;
            case 'ESTP':
                $typeDescription = 'The Dynamo';
                break;
            case 'ESFP':
                $typeDescription = 'The Performer';
                break;
            case 'ENFP':
                $typeDescription = 'The Champion';
                break;
            case 'ENTP':
                $typeDescription = 'The Visionary';
                break;
            case 'ESTJ':
                $typeDescription = 'The Supervisor';
                break;
            case 'ESFJ':
                $typeDescription = 'The Provider';
                break;
            case 'ENFJ':
                $typeDescription = 'The Teacher';
                break;
            case 'ENTJ':
                $typeDescription = 'The Commander';
                break;
            default:
                $typeDescription = '';
                break;
        }

        return view('mbti.result', compact('type', 'typeDescription', 'responses', 'eScore', 'iScore', 'sScore', 'nScore', 'tScore', 'fScore', 'jScore', 'pScore'));
    }

    private function calculateScore($responses, $letter)
    {
        $count = 0;
        foreach ($responses as $response) {
            if ($response === $letter) {
                $count++;
            }
        }
        return $count;
    }
    

}
